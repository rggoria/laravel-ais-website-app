<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function index(Request $request) {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        // Send the email
        Mail::to($request->email)->send(new ResetPasswordEmail($request->all()));
    
        return back()->with('success', 'Email sent successfully!');
    }
}
