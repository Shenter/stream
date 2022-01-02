<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCartButton extends Component
{
    public $product_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
    }


    public function addToCart($productId)
    {
        $this->emit('refreshCartButton');
        $this->emit('addShowCartButton');
        $cart = new Cart(['product_id'=>$productId,'user_id'=>Auth::user()->id]);
        $cart->save();
    }
    public function render()
    {
        return view('livewire.add-to-cart-button');
    }
}
