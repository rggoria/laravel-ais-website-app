<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductItem;

class ProductController extends Controller
{
    public function ep_application() {
        $productItem = ProductItem::where('id', 1)
        ->first();
        return view("main.product", compact('productItem'));
    }

    public function dp_application() {
        $productItem = ProductItem::where('id', 2)
        ->first();
        return view("main.product", compact('productItem'));
    }

    public function ltvp_application() {
        $productItem = ProductItem::where('id', 3)
        ->first();
        return view("main.product", compact('productItem'));
    }

    public function op_application() {
        $productItem = ProductItem::where('id', 4)
        ->first();
        return view("main.product", compact('productItem'));
    }
    
    public function gateway_ep_application() {
        $productItem = ProductItem::where('id', 1)
        ->first();
        return view('gateway.client.product', compact('productItem'));
    }

    public function gateway_dp_application() {
        $productItem = ProductItem::where('id', 2)
        ->first();
        return view('gateway.client.product', compact('productItem'));
    }

    public function gateway_ltvp_application() {
        $productItem = ProductItem::where('id', 3)
        ->first();
        return view('gateway.client.product', compact('productItem'));
    }

    public function gateway_op_application() {
        $productItem = ProductItem::where('id', 4)
        ->first();
        return view('gateway.client.product', compact('productItem'));
    }
}
