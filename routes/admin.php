<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('login', [AuthController::class, 'login'])->name('admin.login');
Route::post('login', [AuthController::class, 'loginPost'])->name('admin.loginPost');
Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'adminAuth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
