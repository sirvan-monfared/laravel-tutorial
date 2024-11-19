<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('front.home.index', [
            'categories' => Category::with('children')->root()->get(),
            'ads' => Ad::with(['category.parent', 'location.parent'])->take(8)->get()
        ]);
    }
}
