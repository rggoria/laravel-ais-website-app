<?php

namespace App\Livewire;

use Livewire\Component;

class CartCounter extends Component
{
    public $cartCount = 0;
    public $cartItems = []; // Array to hold cart item details

    protected $listeners = ['cartUpdated' => 'updateCartCount'];

    public function mount()
    {
        $cart = collect(session()->get('cart', []));
        $this->cartCount = $cart->count();
        $this->cartItems = $cart->toArray(); // Get cart items as an array
    }

    public function updateCartCount()
    {
        $cart = collect(session()->get('cart', []));
        $this->cartCount = $cart->count();
        $this->cartItems = $cart->toArray(); // Update cart items
    }

    public function render()
    {
        return view('livewire.cart-counter');
    }
}
