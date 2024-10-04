<?php

namespace App\Http\Controllers;

use App\Models\ProductItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, $id)
{
    $product = ProductItem::find($id);
    $cart = session()->get('cart', []);
    
    // Get the title, quantity, and price from the request
    $newVariant = $request->input('variant');
    $newQuantity = $request->input('quantity');
    $newPrice = $request->input('options');

    // Create a unique key for the cart item using the product ID and title
    $cartKey = $id . ':' . $newVariant;

    // Check if the product already exists in the cart using the unique key
    if (isset($cart[$cartKey])) {
        // If it exists, just update the quantity
        $cart[$cartKey]['quantity'] += $newQuantity; // Increase quantity
    } else {
        // If it doesn't exist, insert a new entry
        $cart[$cartKey] = [
            'title' => $product->title . ' ' . $newVariant,
            'quantity' => $newQuantity,
            'price' => $newPrice,
            'total' => $newPrice * $newQuantity, // Calculate total
        ];
    }

    // Store the updated cart in the session
    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart!');
}



    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    // CartController.php
    public function update(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->id;
        $quantity = $request->quantity;

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;  // Update the quantity in session
            $cart[$id]['total'] = $cart[$id]['price'] * $quantity; // Update the total for this item
            session()->put('cart', $cart);  // Save the updated cart in session
        }

        // Calculate the total price of the cart
        $totalPrice = array_sum(array_column($cart, 'total'));

        return response()->json([
            'itemTotal' => number_format($cart[$id]['total'], 2),  
            'totalPrice' => number_format($totalPrice, 2),  
            'navbarHtml' => view('partials.cart-dropdown', compact('cart'))->render()  
        ]);
    }




    public function show() {
        return view("cart.checkout");
    }
    
    public function process(Request $request) {
        // Validate and process payment logic here
    }

}
