<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = Ad::eagerList();

        if(trim($request->keyword)) {
            $query->where(function(Builder $query) use ($request) {
                $query->where('title', 'LIKE', "%$request->keyword%")
                    ->orWhere('description', 'LIKE', "%$request->keyword%");
            });
        }

        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->location_id) {
            $query->where('location_id', $request->location_id);
        }

        return view('front.search.index', [
            'ads' => $query->paginate(20)
        ]);
    }
}
