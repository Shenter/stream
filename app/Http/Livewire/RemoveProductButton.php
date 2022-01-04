<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RemoveProductButton extends Component
{
    public $product_id;
    public function render()
    {
        return view('livewire.remove-product-button');
    }

    public function removeFromCart($product_id)
    {


        if($this->canBeRemoved($product_id))
        {
            Cart::where(['product_id'=>$product_id,'user_id'=>Auth::user()->id])->first()->delete();
            $this->emit('refreshCartButton');
            $this->emit('addShowCartButton');
        }
    }

    public function canBeRemoved($productId)
    {
        return Auth::user()->carts->where('product_id','=' ,$productId)->count();
    }
}
