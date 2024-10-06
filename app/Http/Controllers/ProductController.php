<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug' , $slug)->first();

        return view('front.product.show', [
            'product' => $product
        ]);
    }
}
