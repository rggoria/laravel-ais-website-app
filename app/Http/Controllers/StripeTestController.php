<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Customer;
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
        Stripe::setApiKey(env('STRIPE_SECRET')); // Your Stripe secret key

        $request->validate([
            'amount' => 'required|integer|min:1', // Validate the amount
            'stripeToken' => 'required', // Validate the token
            'customer_name' => 'required|string', // Validate the customer name
            'email' => 'required|email', // Assuming you're collecting email as well
        ]);

        try {
            // Create a new customer in Stripe
            $customer = Customer::create([
                'name' => $request->customer_name,
                'email' => $request->email,
                'source' => $request->stripeToken,
            ]);
        
            // Customize the description
            $description = 'All Immigration Services';
        
            // Create the charge associated with the new customer
            $charge = Charge::create([
                'amount' => $request->amount,
                'currency' => 'sgd',
                'customer' => $customer->id,
                'description' => $description,
            ]);
        
            // Check if charge is successful
            return redirect()->back()->with('success', 'Charge successful! ID: ' . $charge->id);
        } catch (\Exception $e) {
            // Log the error message for debugging
            \Log::error('Stripe Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
