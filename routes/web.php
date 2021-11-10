<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/addRainfall', [\App\Http\Controllers\RainfallController::class, 'index'])->name('rainfall');
Route::post('/addRainfall', [\App\Http\Controllers\RainfallController::class, 'store'])->name('rainfall');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store']);

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'store']);

Route::post('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'index'])->name('logout');
