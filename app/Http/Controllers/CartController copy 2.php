<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderEmail;

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
            $product = Product::find($request->id);
            $cart[$cartKey] = [
                'cartKey' => $cartKey,
                'id' => $request->id,
                'name' => $product->name . ' (' . $request->variant . ')',
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

    public function process(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'stripeToken' => 'required', // Validate the Stripe token
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Stripe::setApiKey(env('STRIPE_SECRET')); // Your Stripe secret key

        $order_id = 'ORD-' . strtoupper(uniqid());
        $description = 'All Immigration Services - ' . $order_id;
        $totalAmount = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], session('cart'))) * 100; // Convert to cents

        try {
            // Create a new customer in Stripe
            $customer = Customer::create([
                'name' => $request->customer_name,
                'email' => $request->email,
                'source' => $request->stripeToken,
            ]);

            // Create the charge associated with the new customer
            $charge = Charge::create([
                'amount' => $totalAmount,
                'currency' => 'sgd',
                'customer' => $customer->id,
                'description' => $description,
            ]);

            // Create the order once for all items in the cart
            $remarks = [];

            foreach (session('cart') as $item) {
                $remarks[] = [
                    'product_name' => $item['name'],
                    'variant' => $item['variant'] ?? 'Standard',
                    'qty' => $item['quantity'],
                ];
            }

            $order = Order::create([
                'serial_number' => uniqid(),
                'order_id' => $order_id,
                'order_date' => now(),
                'candidate_name' => $request->customer_name,
                'candidate_email' => $request->email,
                'requestor' => $request->customer_name,
                'status' => 'Pending',
                'status_icon' => 'fa-clock',
                'remarks' => json_encode($remarks),
            ]);

            // Send the email
            Mail::to($request->email)->send(new OrderEmail($order));

            // Clear the cart session
            session()->forget('cart');

            return redirect()->back()->with('success', 'Charge successful! ID: ' . $charge->id);
        } catch (\Exception $e) {
            \Log::error('Stripe Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
}
