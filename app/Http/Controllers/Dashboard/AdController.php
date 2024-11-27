<?php

namespace App\Http\Controllers\Dashboard;

use App\Exceptions\CreateAdException;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitAdRequest;
use App\Models\Ad;
use App\Services\AdService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdController extends Controller
{
    public function index()
    {
        return view('dashboard.ad.index', [
            'ads' => auth()->user()->ads
        ]);
    }

    public function edit($id)
    {
        $ad = AdService::findOrFail($id);

        Gate::authorize('update', $ad);

        return view('dashboard.ad.edit', [
            'ad' => $ad
        ]);
    }

    public function update(SubmitAdRequest $request, $id)
    {
        try {
            $ad = AdService::findOrFail($id);

            Gate::authorize('update', $ad);

            AdService::update($ad, $request->all());
            session()->flash('success', 'عملیات با موفقیت انجام شد');

        } catch (CreateAdException) {
            session()->flash('fail', 'مشکلی در انجام عملیات پیش آمده است');
        }

        return back();
    }

    public function destroy($id)
    {
        try {
            $ad = AdService::findOrFail($id);

            Gate::authorize('delete', $ad);

            $ad->delete();
            session()->flash('success', 'عملیات با موفقیت انجام شد');
        } catch (Exception) {
            session()->flash('fail', 'مشکلی در انجام عملیات پیش آمده است');
        }

        return back();
    }
}
