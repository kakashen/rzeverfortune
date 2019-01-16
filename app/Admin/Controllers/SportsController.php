<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Recommender;
use App\Sports;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\ModelForm;

class SportsController extends Controller
{
  use ModelForm;

  /**
   * Index interface.
   *
   * @return Content
   */
  public function index()
  {
    return Admin::content(function (Content $content) {

      $content->header('header');
      $content->description('description');

      $content->body($this->grid());
    });
  }

  /**
   * Make a grid builder.
   *
   * @return Grid
   */
  protected function grid()
  {
    return Admin::grid(Sports::class, function (Grid $grid) {
      $grid->filter(function($filter){

        // 去掉默认的id过滤器
        $filter->disableIdFilter();

        // 在这里添加字段过滤器
        $filter->equal('name', '推荐人')->select('/api/users');
        $filter->between('recommended_at', '推荐日期')->date();
        $filter->gt('money', '金额');
      });

      $grid->id('ID')->sortable();
      $grid->name('推荐人')->display(function ($name) {
        return Recommender::find($name)->name ?? '未找到';
      });
      $grid->recommended_at('推荐日期');
      $grid->host('主队')->editable();
      $grid->guest('客队')->editable();
      $grid->recommend('推荐')->editable();
      $grid->money('金额')->editable();
      $grid->rate('赔率')->editable();
      $grid->result('结果')->editable();
      //$grid->red_or_black('结果')->editable();
      $grid->red_or_black('红黑')->display(function ($red_or_black) {
        $ret = $red_or_black == 'R' ? "<span class='label bg-red'>红</span>" :
          ($red_or_black == 'B' ? "<span class='label bg-black'>黑</span>" : "<span class='label bg-green'>水</span>");
        return $ret;
      });
      $grid->remark('备注');
    });
  }

  /**
   * Make a form builder.
   *
   * @return Form
   */
  protected function form()
  {
    return Admin::form(Sports::class, function (Form $form) {

      $form->display('id', 'ID');
      $form->select('name', '推荐人')->options('/api/users');
      //$form->text('name', '推荐人');
      $form->date('recommended_at', '日期')->default(date("Y-m-d"));
      $form->text('host', '主队');
      $form->text('guest', '客队');
      $form->text('recommend', '推荐');
      $form->text('rate', '赔率')->default(0);
      $form->text('result', '结果')->default(0);
      $form->number('money', '金额');
      $form->text('remark', '备注');

      $form->saved(function (Form $form) {
        //$id = $form->model()->id;
        $result = $form->result;
        if ($result > 0) {
          $form->model()->update(['red_or_black' => 'R']);
        }
        if ($result < 0) {
          $form->model()->update(['red_or_black' => 'B']);
        }
        if ($result === 0) {
          $form->model()->update(['red_or_black' => null]);
        }
      });

    });
  }

  /**
   * Create interface.
   *
   * @return Content
   */
  public function create()
  {
    return Admin::content(function (Content $content) {

      $content->header('header');
      $content->description('description');

      $content->body($this->form());
    });
  }


  /**
   * Edit interface.
   *
   * @param $id
   * @return Content
   */
  public function edit($id)
  {
    return Admin::content(function (Content $content) use ($id) {

      $content->header('header');
      $content->description('description');

      $content->body($this->form()->edit($id));
    });
  }
}
