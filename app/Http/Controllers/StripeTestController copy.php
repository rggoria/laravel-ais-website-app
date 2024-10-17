<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class StripeTestController extends Controller
{
    public function index()
    {
        return view('testing'); // This view will contain the test form
    }

    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET')); // Make sure to set your Stripe secret key

        try {
            $charge = Charge::create([
                'amount' => 5000, // Amount in cents ($50.00)
                'currency' => 'usd',
                'source' => $request->stripeToken, // The token from the form
                'description' => 'Test Charge',
            ]);

            return redirect()->back()->with('success', 'Charge successful! ID: ' . $charge->id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
