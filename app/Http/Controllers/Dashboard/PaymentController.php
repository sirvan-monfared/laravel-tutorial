<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Services\AdService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function start(int $id)
    {
        $ad = AdService::findOrFail($id);

        dd($ad);
    }
}
