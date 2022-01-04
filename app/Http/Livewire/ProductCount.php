<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductCount extends Component
{
    public $count = 0;
    public $product_id;
    public $price = 0;
    protected $listeners = ['refreshCartButton'=>'mount'];

    public function mount( $count=0, $price=0)
    {
     //   $this->product_id = $product_id;
        $this->count = Auth::user()->carts->where('product_id', $this->product_id)->count()  ;
        $price = 0;

        foreach (Auth::user()->carts->where('product_id', $this->product_id) as $item) {
            $price += Product::find($item->product_id)->priceInDollars;
        }
        $this->price = $price;

    }
    public function render()
    {
        return view('livewire.product-count');
    }
}
