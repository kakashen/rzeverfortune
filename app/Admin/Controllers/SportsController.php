<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Sports;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;

class SportsController extends Controller
{
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
      $grid->host('排序');
      $grid->guest();
      $grid->first();
      $grid->last();
      $grid->recommend();
      $grid->chain();
      $grid->remark();
    });
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sports  $sports
     * @return \Illuminate\Http\Response
     */
    public function show(Sports $sports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sports  $sports
     * @return \Illuminate\Http\Response
     */
    public function edit(Sports $sports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sports  $sports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sports $sports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sports  $sports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sports $sports)
    {
        //
    }
}
