<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('dashboard', ['products' => \App\Models\Product::all()]);
    }

    public function cart()
    {
        $carts = auth()->user()->carts->groupBy('product_id');

        return view('cart',['carts'=>$carts]);
    }
}
