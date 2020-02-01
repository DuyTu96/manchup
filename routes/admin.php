<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'checkAdminLogin'], function () {
    Route::get('', [
        'as' => 'admin.dashboard.index',
        'uses' => 'DashboardController@index'
    ]);
    Route::group(['as' => 'admin.'], function () {
        Route::resource('categories', 'CategoryController', [
            'parameters' => ['categories' => 'id']
        ]);
        Route::resource('users', 'UserController', [
            'parameters' => ['users' => 'id']
        ])->middleware('checkAdminRole');
        Route::resource('products', 'ProductController', [
            'parameters' => ['products' => 'id']
        ]);
        Route::resource('sizes', 'SizeController', [
            'parameters' => ['sizes' => 'id']
        ]);
        Route::resource('orders', 'OrderController', [
            'parameters' => ['orders' => 'id']
        ]);
        Route::resource('posts', 'PostController', [
            'parameters' => ['posts' => 'id']
        ]);
    });

    Route::get('orders/processed/finish', 'OrderController@processed')->name('admin.orders.processed');
    Route::get('order/{id}/finish', 'OrderController@finishOrder')->name('admin.order.finishOrder');
    Route::get('order/{id}/cancel', 'OrderController@cancelOrder')->name('admin.order.cancelOrder'); 
});
