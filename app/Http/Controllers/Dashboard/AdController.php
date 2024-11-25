<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        return view('dashboard.ad.index', [
            'ads' => auth()->user()->ads
        ]);
    }
}
