<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

// Home Route
Route::get('/', function () {
    return view('home.home');
})->name('home');



Route::get('/SignUp', function () {
    return view('home.signup');
})->name('signup');


// Sign-In Routes
Route::get('/SignIn', function () {
    return view('home.signin');
})->name('signin.form');

Route::post('/SignIn', [AuthController::class, 'signin'])->name('signin');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');

// Forgot Password Route
Route::get('/ForgotPassword', function () {
    return view('home.forgot');
})->name('forgot');

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('signin');
})->name('logout');
