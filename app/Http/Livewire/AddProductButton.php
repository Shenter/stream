<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddProductButton extends Component
{
    public $product_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
    }
    public function render()
    {
        return view('livewire.add-product-button');
    }

    public function addToCart($productId)//TODO Вынести в репо
    {
        $this->emit('refreshCartButton');
        $this->emit('addShowCartButton');
        $cart = new Cart(['product_id'=>$productId,'user_id'=>Auth::user()->id]);
        $cart->save();
    }
}
