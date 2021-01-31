<?php

use App\Http\Controllers\HomeController;
// use App\Http\Controllers\admin\LoginController;
// use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

// Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () {
//     Route::get('/', [LoginController::class, 'index'])->name('admin.login');
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });
