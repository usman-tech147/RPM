<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Driver\DriverLoginController;
use App\Http\Controllers\Driver\DriverController;
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

Route::get('/driver/login',[DriverLoginController::class, 'showLoginForm'])->name('driver.login.form');
Route::post('/driver/login',[DriverLoginController::class, 'login'])->name('driver.submit.login');
Route::post('/driver/logout',[DriverLoginController::class, 'logout'])->name('driver.logout');
Route::get('/driver/dashboard',[DriverController::class, 'index'])->name('driver.dashboard');

