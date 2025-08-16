<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
// Form registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
// Form lupa password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot-password.form');
// Form aktivasi
Route::get('/activation', [AuthController::class, 'showActivationForm'])->name('activation.form');





Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
