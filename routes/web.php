<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


// Home Route
Route::get('/', function () {
    return view('home.home');
})->name('home');


// Sign-Up Route
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





// Product Route

// Display products (web route)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Store new product (web route)
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Show the form for editing an existing product
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');







// Profile
Route::get('/profile', function () {
    return view('admin.profile');
})->name('profile')->middleware('auth');







// Rate Route
Route::get('/rate', function () {
    return view('rate.index');
})->name('rate')->middleware('auth');

// Notification Route
Route::get('/notification', function () {
    return view('notification.index');
})->name('notification')->middleware('auth');



// Order Route
Route::get('/order', function () {
    return view('order.index');
})->name('order')->middleware('auth');











// Forgot Password Route
Route::get('/ForgotPassword', function () {
    return view('home.forgot');
})->name('forgot');

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('signin');
})->name('logout');
