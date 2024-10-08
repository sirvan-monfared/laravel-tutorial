<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CartController extends Controller
{
    protected Collection $cart;

    public function __construct()
    {
        $this->cart = session('cart', collect([]));
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $this->cart->push((object) [
           'id' => $product->id,
           'title' => $product->title,
           'image' => $product->image(),
           'qty' => $request->qty,
           'color_id' => $request->color_id
        ]);

        session()->put('cart', $this->cart);

        return back()->with('success', 'Item Successfully Added to cart');
    }
}
