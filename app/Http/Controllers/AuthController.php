<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;




class AuthController extends Controller
{
    public function register(Request $request)
    {

        Log::info('Register function accessed'); // Add this line

        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8',
            'phone' => 'nullable|string|max:15',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create new user
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user,
        ], 201);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');

    }

public function signin(Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

// public function signin(Request $request)
//     {
//         // Validate the request data
//         $request->validate([
//             'username' => 'required|string',
//             'password' => 'required|string',
//         ]);

//         // Attempt to find the user by username
//         $user = User::where('username', $request->username)->first();

//         // Check if the user exists and the password is correct
//         if (!$user || !Hash::check($request->password, $user->password)) {
//             return response()->json([
//                 'message' => 'Akun tidak terdaftar',
//             ], 404);
//         }

//         // Generate a token if login is successful (for API authentication)
//         $token = $user->createToken('auth_token')->plainTextToken;

//         return response()->json([
//             'message' => 'Login successful',
//             'access_token' => $token,
//             'token_type' => 'Bearer',
//         ], 200);
//     }


}
// class AuthController extends Controller
// {
//     public function signup(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email|unique:users,email',
//             'phone' => 'required',
//             'username' => 'required|unique:users,username',
//             'password' => 'required|confirmed|min:6',
//         ]);

//         $user = User::create([
//             'email' => $request->email,
//             'phone' => $request->phone,
//             'username' => $request->username,
//             'password' => Hash::make($request->password),
//         ]);

//         return redirect()->route('dashboard');
//     }

//     public function signin(Request $request)
//     {
//         $credentials = $request->only('username', 'password');

//         if (Auth::attempt($credentials)) {
//             return redirect()->route('dashboard');
//         } else {
//             return redirect()->back()->withErrors('Invalid username or password');
//         }
//     }
// }
