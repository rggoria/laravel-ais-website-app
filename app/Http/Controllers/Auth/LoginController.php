<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.pages.login');
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
            $user = Auth::user();
            
            if ($user->force_password_change) {
                return response()->json(['redirect' => route('change')], 200); // Return redirect route in JSON
            }

            return response()->json(['redirect' => '/ais-gateway']);
        }
        // Return a generic error message for invalid credentials
        return response()->json(['error' => 'The provided credentials do not match our records.'], 422);
    }


    public function showChangeForm() {
        return view('auth.pages.change'); // Create this view
    }
    
    public function changePassword(Request $request) {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->force_password_change = false; // Reset the flag
        $user->save();
    
        return redirect()->route('gateway')->with('success', 'Password changed successfully!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
