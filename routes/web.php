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
Route::group(['namespace' => 'Client'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/san-pham', 'ProductController@index')->name('client.products.index');
    Route::get('/san-pham/{id}', 'ProductController@show')->name('client.product.show');
    Route::get('/san-pham/{id}/thong-tin', 'ProductController@info')->name('client.product.info');
});
