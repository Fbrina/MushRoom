<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;





Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'signin']);
Route::get('/login', function (Request $request) {
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Query untuk mencari pengguna berdasarkan email
    $email = $request->query('email');
    $password = $request->query('password');

    $user = User::where('email', $email)->first();

    // Cek apakah user ditemukan dan password cocok
    if ($user && Hash::check($password, $user->password)) {
        // Jika password cocok, buat token dan kirim sebagai respons

        return response()->json([
            'status' => 'success',
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'username' => $user->username,
                // Sembunyikan password dan data sensitif lainnya
            ],
        ], 200);
    }

    // Jika gagal, kirim respons error
    return response()->json([
        'status' => 'error',
        'message' => 'Email atau password salah'
    ], 401);
});

// Get products (API route)
Route::get('/products', [ProductController::class, 'index'])->name('api.products.index');

// Add a new product (API route)
Route::post('/products', [ProductController::class, 'store'])->name('api.products.store');







