<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('ads', AdsController::class);
    $router->resource('agency', AgencyController::class);
    $router->resource('banner', BannerController::class);
    $router->resource('city', CityController::class);
    $router->resource('status', StatusController::class);
    $router->resource('page', PageController::class);
});
