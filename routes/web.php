<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/products', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();
Route::group(array('middleware'=>'auth'),function(){
  Route::resource('products', 'ProductController');
  Route::post('/products/store', 'ProductController@store');
  Route::get('/profile', 'ProfileController@index');
  Route::get('/cart', 'CartController@index');
  Route::post('/products/add_to_cart', 'CartController@add_to_cart');
  Route::post('/cart/remove_from_cart', 'CartController@remove_from_cart');
  Route::get('/cart/checkout','CartController@checkout');
  Route::get('/profile/order_history', 'ProfileController@order_history');
  Route::get('/profile/update', 'ProfileController@update');
  Route::post('/profile/store', 'ProfileController@store');
  Route::get('/cart/edit/{id}', 'CartController@edit');
  Route::post('/cart/store/{id}', 'CartController@store');
});
