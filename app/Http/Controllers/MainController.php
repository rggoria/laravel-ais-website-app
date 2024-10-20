<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationEmail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index() {
        $products = Product::with('prices')->get();
        return view("main.index", compact('products'));
    }

    public function about() {
        return view("main.about");
    }

    public function services() {
        return view("main.services");
    }

    public function testimonials() {
        return view("main.testimonial");
    }


    public function consultation() {
        return view("main.consultation");
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
