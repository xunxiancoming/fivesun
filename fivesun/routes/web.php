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


Route::get('/home/{city?}','StaticPageController@home')->name('home');
Route::get('/product/machine/{city?}','StaticPageController@machine')->name('machine');
Route::get('/product/beanmilk/{city?}','StaticPageController@beanmilk')->name('beanmilk');
Route::get('/status/{city?}','StaticPageController@status')->name('status');
Route::get('/post/{city?}/{status}','StaticPageController@post')->name('post');
Route::get('/contact/{city?}','StaticPageController@contact')->name('contact');

