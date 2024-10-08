<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    public function index() {
        $productItems = Product::all();
        
        return view("gateway.pages.index", compact('productItems'));
    }
}
