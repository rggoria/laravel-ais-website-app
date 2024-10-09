<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationEmail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index() {
        //session()->forget('cart');
        return view("pages.main.index");
    }

    public function about() {
        return view("pages.main.about");
    }

    public function services() {
        $productItems = Product::all();
        
        return view("pages.main.services", compact('productItems'));
    }

    public function testimonials() {
        return view("pages.main.testimonial");
    }


    public function consultation() {
        return view("pages.main.consultation");
    }

    public function consultation_email(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'description' => 'required|string',
        ]);
    
        // Send the email
        Mail::to($request->email)->send(new ConsultationEmail($request->all()));
    
        return back()->with('success', 'Email sent successfully!');
    }

}
