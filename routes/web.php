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
    Route::get('/san-pham/{id}/view-product-by-parent-cate', 'ProductController@productByParentCate')->name('client.products.productByParentCate');
    Route::get('/san-pham/{id}/view-product-by-size', 'ProductController@productBySize')->name('client.products.productBySize');
    Route::post('/search', 'HomeController@search')->name('client.search');
    Route::get('/gioi-thieu', 'InfoController@index')->name('client.info');
    Route::get('/khuyen-mai', 'PostController@index')->name('client.post');
    Route::get('/khuyen-mai/{id}', 'PostController@show')->name('client.post.show');

    Route::prefix('gio-hang')->group(function() {
        Route::get('/index', 'CartController@index')->name('client.carts.index');
        Route::post('/them-san-pham', 'CartController@addToCart')->name('client.carts.addToCart');
        Route::get('/xem-gio-hang', 'CartController@Show')->name('client.carts.show');
        Route::post('/update', 'CartController@update')->name('client.carts.update');
        Route::post('/chekout', 'CartController@checkout')->name('client.carts.checkout');
        Route::post('/delete', 'CartController@delete')->name('client.carts.delete');
    });
});

Auth::routes();
