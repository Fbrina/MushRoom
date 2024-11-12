<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;





Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'signin']);

// Get products (API route)
Route::get('/products', [ProductController::class, 'index'])->name('api.products.index');

// Add a new product (API route)
Route::post('/products', [ProductController::class, 'store'])->name('api.products.store');







