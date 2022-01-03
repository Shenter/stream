<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmptyCart extends Component
{

    protected $listeners = ['addShowCartButton'=>'addShowCartButton'];
    public $carts;
    public $product_id;
    public function addShowCartButton()
    {
        $this->carts = Cart::findByProduct($this->product_id)->count();
    }
    public function mount()
    {
        $this->carts = Cart::findByProduct($this->product_id)->count();
    }

    public function render()
    {
        if($this->carts) {
            $this->count=Cart::findByProduct($this->product_id)->count();
            //надо сделать через relation
            $price = 0;
            foreach (Cart::findByProduct($this->product_id) as $item) {
                $price += Product::find($item->product_id)->priceInDollars;

            }
            $this->price = $price;
            return view('livewire.cart-button-custom', ['count' => $this->count, 'price' => $this->price]);

        }
        else {
            return view('livewire.empty-cart');
        }
    }
}
