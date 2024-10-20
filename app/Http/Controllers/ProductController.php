<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{  
    public function index(Request $request, $name) {
        $productItem = Product::where('slug', $name)->first();
        if (!$productItem) {
            abort(404); // Product not found
        }

        return view("main.product", compact('productItem'));
    }
    
    public function newOrder(Request $request, $name) {
        $productItem = Product::where('slug', $name)->first();
        if (!$productItem) {
            abort(404); // Product not found
        }

        return view("gateway.client.product", compact('productItem'));
    }
}
