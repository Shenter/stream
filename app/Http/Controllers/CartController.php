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

        $products = auth()->user()->products->groupBy('id');

        return view('cart',['products'=>$products]);
    }
}
