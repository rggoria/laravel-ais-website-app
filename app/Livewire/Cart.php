<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart = [];

    protected $listeners = ['cartUpdated' => 'updateCart'];

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function updateCart()
    {
        $this->cart = session()->get('cart', []);
    }

    public function render()
    {
        return view('livewire.cart');
    }

    public function getCartCount()
    {
        return count($this->cart);
    }
}
