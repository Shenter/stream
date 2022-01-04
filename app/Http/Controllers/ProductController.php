<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request): \Illuminate\Http\Response
    {

        Product::create(['title'=>$request->title,'price'=>$request->price * 100]);
        return redirect()->route('product.index',['products'=>Product::all()])->withSuccess('Created successfully');;
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(Product $product): View
    {
        return view('products.edit', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findorFail($id);
        $price = $request->price * 100;
        $product->update($request->except('_token','_method','price'));
        $product->price = $price;
        $product->save();

        return redirect()->route('product.index',['products'=>Product::all()])->withSuccess('Updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Cart::where('product_id', $product->id)->delete();
        return redirect()->route('product.index')
            ->with('success','Product deleted successfully');
    }
}
