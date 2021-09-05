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

Route::get('login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.submit');

Route::middleware('auth')->group(function () {
    Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('show-sentense', [\App\Http\Controllers\HomeController::class, 'show'])->name('home.show');
});
