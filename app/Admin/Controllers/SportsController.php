<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
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

      $grid->id('ID')->sortable();
      $grid->name('推荐人');
      $grid->recommended_at('推荐日期');
      $grid->host('主队');
      $grid->guest('客队');
      $grid->first('初盘');
      $grid->last('终盘');
      $grid->recommend('推荐');
      $grid->chain('串子');
      $grid->money('金额');
      $grid->result('结果');
      $grid->red_or_black('红黑');
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
      $form->text('name', '推荐人');
      $form->date('recommended_at', '推荐日期');
      $form->text('host', '主队');
      $form->text('guest', '客队');
      $form->text('first', '初盘');
      $form->text('last', '终盘');
      $form->text('recommend', '推荐');
      $form->text('chain', '串子');
      $form->number('money', '下单金额');
      $form->text('remark', '备注');

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
