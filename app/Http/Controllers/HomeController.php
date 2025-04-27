<?php

namespace App\Http\Controllers;

use App\Enums\AdStatus;
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
            'categories' => Category::with('children')->withCount('ads')->root()->get(),
            'ads' => Ad::eagerList()->take(8)->latest()->get()
        ]);
    }
}
