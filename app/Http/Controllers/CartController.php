<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CartController extends Controller
{
    /**
     * @return View
     */
    public function index():View
    {
        return view('dashboard', ['products' => \App\Models\Product::all()]);
    }

    /**
     * @return View
     */
    public function cart():View
    {
        $products = auth()->user()->products->groupBy('id');
        return view('cart',['products'=>$products]);
    }
}
