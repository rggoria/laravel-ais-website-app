<?php

namespace App\Http\Controllers;

use App\Models\ProductItem;
use Illuminate\Http\Request;
use Cart; // Use your cart package

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $cartCount = count($cartItems);

        return view('pages.main.cart', compact('cartItems', 'cartCount'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
            'variant' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Create a unique key for the product based on ID and variant
        $cartKey = $request->id . '-' . $request->variant;

        // Retrieve the existing cart or create a new one if empty
        $cart = session()->get('cart', []);

        // Check if the item with the same cartKey already exists
        if (isset($cart[$cartKey])) {
            // Increment the quantity if the item exists
            $cart[$cartKey]['quantity'] += $request->quantity;
        } else {
            // Add a new item to the cart if it doesn't exist
            $product = ProductItem::find($request->id);
            $cart[$cartKey] = [
                'cartKey' => $cartKey,
                'id' => $request->id,
                'name' => $product->title . ' (' . $request->variant . ')',
                'variant' => $request->variant,
                'quantity' => $request->quantity,
                'price' => $request->price,
            ];
        }

        // Save the updated cart to the session
        session()->put('cart', $cart);

        return response()->json(['message' => 'Item added to cart!']);
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->cartKey])) {
            if ($request->action === 'increase') {
                $cart[$request->cartKey]['quantity'] += 1;
            } elseif ($request->action === 'decrease') {
                if ($cart[$request->cartKey]['quantity'] > 1) {
                    $cart[$request->cartKey]['quantity'] -= 1;
                }
            } elseif ($request->action === 'remove') {
                unset($cart[$request->cartKey]);
            }

            session()->put('cart', $cart);
        }

        return response()->json(['message' => 'Cart updated successfully']);
    }

}
