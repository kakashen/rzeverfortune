<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
  $router->resource('products', ProductController::class);
  $router->resource('project/banner', BannerController::class);
  $router->resource('sports/recommend', SportsController::class);


});
