<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\ManagerLoginController;
use App\Http\Controllers\Manager\ManagerController;
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


Route::get('/manager/login',[ManagerLoginController::class, 'showLoginForm'])->name('manager.login.form');
Route::post('/manager/login',[ManagerLoginController::class, 'login'])->name('manager.submit.login');
Route::post('/manager/logout',[ManagerLoginController::class, 'logout'])->name('manager.logout');
Route::get('/manager/dashboard',[ManagerController::class, 'index'])->name('manager.dashboard');

