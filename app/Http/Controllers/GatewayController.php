<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order; // Import the Order model
use Illuminate\Http\Request;

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
}
