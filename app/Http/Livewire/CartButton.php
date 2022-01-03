<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class CartButton extends Component
{
    public $count =0;
    public $price = 0;
    protected $listeners = ['refreshCartButton'=>'mount'];

    public function mount($count=0, $price=0)
    {
        $this->count = Auth::user()->carts->count()  ;
        $price = 0;

        foreach (Auth::user()->carts as $item) {
            $price += Product::find($item->product_id)->priceInDollars;
        }
        $this->price = $price;

    }


    public function render()
    {
        return view('livewire.cart-button');
    }

    public function Cart()
    {

        return redirect()->route('cart');
    }
}
