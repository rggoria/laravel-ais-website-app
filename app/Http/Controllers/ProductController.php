<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ep_application() {
        $productItem = Product::with('prices')
        ->where('id', 1)
        ->first();
        return view("main.product", compact('productItem'));
    }

    public function dp_application() {
        $productItem = Product::with('prices')
        ->where('id', 2)
        ->first();
        return view("main.product", compact('productItem'));
    }

    public function ltvp_application() {
        $productItem = Product::with('prices')
        ->where('id', 3)
        ->first();
        return view("main.product", compact('productItem'));
    }

    public function op_application() {
        $productItem = Product::with('prices')
        ->where('id', 4)
        ->first();
        return view("main.product", compact('productItem'));
    }
    
    public function gateway_ep_application() {
        $productItem = Product::with('prices')
        ->where('id', 1)
        ->first();
        return view('gateway.client.product', compact('productItem'));
    }

    public function gateway_dp_application() {
        $productItem = Product::with('prices')
        ->where('id', 2)
        ->first();
        return view('gateway.client.product', compact('productItem'));
    }

    public function gateway_ltvp_application() {
        $productItem = Product::with('prices')
        ->where('id', 3)
        ->first();
        return view('gateway.client.product', compact('productItem'));
    }

    public function gateway_op_application() {
        $productItem = Product::with('prices')
        ->where('id', 4)
        ->first();
        return view('gateway.client.product', compact('productItem'));
    }
}
