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

Route::group(['as' => 'admin.'], function () {
    Route::resource('categories', 'CategoryController', [
        'parameters' => ['categories' => 'id']
    ]);
    Route::resource('users', 'UserController', [
        'parameters' => ['users' => 'id']
    ]);
    Route::resource('products', 'ProductController', [
        'parameters' => ['products' => 'id']
    ]);
    Route::resource('sizes', 'SizeController', [
        'parameters' => ['sizes' => 'id']
    ]);
});
