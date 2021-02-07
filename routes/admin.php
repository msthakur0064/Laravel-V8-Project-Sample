<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::get('/', 'Admin\AuthController@login')->name('admin.login');
Route::post('login', 'Admin\AuthController@loginPost')->name('admin.login.submit');
Route::get('logout', 'Admin\AuthController@logout')->name('admin.logout');

Route::group(['middleware' => 'adminAuth'], function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('user', 'Admin\UserController@index')->name('admin.user');
    Route::get('category', 'Admin\CategoryController@index')->name('admin.category');
    Route::get('blog', 'Admin\BlogController@index')->name('admin.blog');
});
