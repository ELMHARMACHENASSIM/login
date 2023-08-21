<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home',[HomeController::class , 'index'])->name('home.index');
Route::get('/login',[LoginController::class , 'index'])->name('login.index');
Route::get('/signup',[SignupController::class , 'index'])->name('signup.index');
Route::post('/signup/store',[SignupController::class , 'store'])->name('signup.store');
Route::get('/logout',[HomeController::class , 'logout'])->name('home.logout');
Route::post('/login/login',[LoginController::class , 'login'])->name('home.login');

