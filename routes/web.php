<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('/aktivasi', [App\Http\Controllers\AuthController::class, 'activate'])->name('activate');

Route::get('/app', [App\Http\Controllers\AuthController::class, 'app'])->name('app');
