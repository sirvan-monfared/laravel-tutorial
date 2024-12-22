<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\AdService;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show(int $id)
    {
        $ad = AdService::findOrFail($id);

        return view('dashboard.invoice.show', [
            'ad' => $ad
        ]);
    }
}
