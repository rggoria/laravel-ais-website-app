<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);    
        $credentials = $request->only('email', 'password');    
        if (Auth::attempt($credentials)) {
            return response()->json(['redirect' => '/ais-gateway']);
        }    
        // Instead of returning an error for the email field, just return a generic error message
        return response()->json(['error' => 'The provided credentials do not match our records.'], 422);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
