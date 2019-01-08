<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

use Illuminate\Support\Facades\DB;

Route::get('/', 'IndexController@index');
Route::get('/api/users', function () {
  return \App\Recommender::get(['id', DB::raw('name as text')]);
});
