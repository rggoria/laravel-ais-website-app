<?php

namespace App\Http\Controllers;

use App\Mail\OrderEmail;
use App\Mail\ProcessTriggerEmail;
use App\Models\ProductItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Mail;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $cartCount = count($cartItems);
        return view("gateway.client.cart", compact('cartItems', 'cartCount'));
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

    public function process(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'card_number' => 'required|string|max:19',
            'expiration' => 'required|string|max:7',
            'cvv' => 'required|string|max:3|regex:/^\d{3}$/',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Prepare a single order with aggregated remarks
        $remarks = [];
    
        foreach (session('cart') as $item) {
            $remarks[] = [
                'product_name' => $item['name'], // Real product name
                'variant' => $item['variant'] ?? 'Standard', // Variant if available
                'qty' => $item['quantity'], // Quantity
            ];
        }
    
        // Create the order once for all items in the cart
        $order = Order::create([
            'serial_number' => uniqid(), // Generate a unique serial number
            'order_id' => 'ORD-' . strtoupper(uniqid()), // Example Order ID format
            'order_date' => now(), // Current date
            'candidate_name' => $request->input('name'), // Get candidate name from the form
            'candidate_email' => $request->input('email'), // Get candidate email from the form
            'requestor' => $request->input('name'), // Get requestor from the form
            'status' => 'Pending', // Set default status
            'status_icon' => 'fa-clock', // Example icon, change as needed
            'remarks' => json_encode($remarks), // Store as JSON
        ]);
    
        // Send the email
        Mail::to($request->input('email'))->send(new OrderEmail($order));
    
        // Clear the cart session if needed
        session()->forget('cart');
    
        return redirect()->route('cart')->with('success', 'Payment processed successfully!');
    }    
    
}
