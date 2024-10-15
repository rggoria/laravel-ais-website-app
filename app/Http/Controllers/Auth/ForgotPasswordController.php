<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function index(Request $request) {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        // Check if the email exists
        $user = User::where('email', $request->email)->first();
        
        if (!$user) {
            return response()->json(['error' => 'Email not found.'], 404);
        }
        
        // Generate a password reset token
        $token = Password::broker()->createToken($user);
    
        // Send the email
        Mail::to($request->email)->send(new ResetPasswordEmail($user, $token)); // Pass the user object instead of data
        
        return response()->json(['message' => 'Email sent successfully!'], 200);
    }    

    public function showResetForm($token) {
        return view('auth.pages.reset', ['token' => $token]);
    }

    public function reset(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'token' => 'required',
        ]);
    
        // Reset password logic
        $response = Password::broker()->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );
    
        return $response == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __('Your password has been reset!'))
                    : back()->withInput($request->only('email'))
                             ->withErrors(['email' => trans($response)]);
    }
    
}
