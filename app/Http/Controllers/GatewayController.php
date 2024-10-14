<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order; // Import the Order model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GatewayController extends Controller
{
    public function index() {
        // Fetch all orders from the database
        $orders = Order::all();
        return view("gateway.pages.index", compact('orders')); // Pass orders to the view
    }

    public function new_order() {
        $productItems = Product::all();
        
        return view('gateway.pages.new-order', compact('productItems'));
    }

    public function product_details() {        
        return view('gateway.pages.product-details');
    }

    public function profile() {        
        return view('gateway.pages.profile');
    }
    
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'email' => 'required|email',
            'current_password' => 'required',
            'new_password' => 'nullable|min:8|confirmed', // Ensure 'confirmed' is included
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'mobile_number' => 'required|string',
        ]);

        // Check current password
        if (!password_verify($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update user details
        $user->email = $request->email;
        if ($request->new_password) {
            $user->password = bcrypt($request->new_password);
        }
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->mobile_number = $request->mobile_number;
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

}
