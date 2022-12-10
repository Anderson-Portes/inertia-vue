<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::post('/auth/logout', LogoutController::class)->name('logout');
});
Route::middleware('guest')->prefix('/auth')->group(function () {
    Route::resource('/register', RegisterController::class)
        ->only(['index', 'store'])
        ->names(['index' => 'register', 'store' => 'register.store']);
    Route::resource('/login', LoginController::class)
        ->only(['index', 'store'])
        ->names(['index' => 'login', 'store' => 'login.store']);
});
