<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationEmail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index() {
        //session()->forget('cart');
        return view("main.pages.index");
    }

    public function about() {
        return view("main.pages.about");
    }

    public function services() {
        return view("main.pages.services");
    }

    public function testimonials() {
        return view("main.pages.testimonial");
    }


    public function consultation() {
        return view("main.pages.consultation");
    }

    public function consultation_email(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'description' => 'required|string',
        ]);
    
        // Send the email
        Mail::to($request->email)->send(new ConsultationEmail($request->all()));
    
        return response()->json(['message' => 'Email sent successfully!']);
    }    

}
