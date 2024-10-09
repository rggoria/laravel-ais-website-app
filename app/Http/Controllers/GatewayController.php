<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    public function index() {       
        return view("gateway.pages.index");
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
