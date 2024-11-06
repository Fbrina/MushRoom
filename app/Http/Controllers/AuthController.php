<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;






class AuthController extends Controller
{
    public function register(Request $request)
{
    Log::info('Register function accessed');

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

    // Hash the password
    $hashedPassword = Hash::make($request->password);
    Log::info('Hashed password:', ['password' => $hashedPassword]);

    // Create new user
    $user = User::create([
        'email' => $request->email,
        'username' => $request->username,
        'password' => $hashedPassword, // Use the hashed password
        'phone' => $request->phone,
    ]);


    // The redirect is not necessary here for an API endpoint
    return redirect()->route('signin')->with('success', 'Registration successful! Please log in.');
}

public function signin(Request $request)
{
    Log::info('Login function accessed');

    // Validate incoming data
    $validator = Validator::make($request->all(), [
        'username' => 'required|string|max:255',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Attempt to log the user in
    if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        // Authentication passed
        $user = Auth::user(); // Get the authenticated user
        Log::info('User logged in successfully', ['username' => $user->username]);

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Login successful!');
    } else {
        Log::warning('Login attempt failed', ['username' => $request->username]);
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}

    }
    
    
    
    

