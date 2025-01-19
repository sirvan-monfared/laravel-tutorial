<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\CreateAdException;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubmitAdRequest;
use App\Models\Ad;
use App\Services\AdService;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        return view('admin.ad.index', [
            'ads' => Ad::eagerList()->paginate()
        ]);
    }

    public function create()
    {
        return view('admin.ad.create', [
            'ad' => new Ad
        ]);
    }

    public function store(SubmitAdRequest $request)
    {
        try {
            $ad = AdService::create($request->validated());

            return redirect()->to($ad->editLink())->with(['success' => 'ثبت آگهی با موفقیت انجام شد']);
        }catch(CreateAdException $e) {
            return back()->with(['danger' => 'مشکلی در عملیات بوجود آمده است']);
        }

    }

    public function edit(int $id)
    {
        $ad = AdService::findOrFail($id);

        return view('admin.ad.edit', [
            'ad' => $ad
        ]);
    }

    public function update(int $id, SubmitAdRequest $request)
    {
        $ad = AdService::findOrFail($id);

        AdService::update($ad, $request->validated());

        return back()->with(['success' => 'ویرایش با موفقیت انجام شد']);
    }

    public function destroy(int $id)
    {
        $ad = AdService::findOrFail($id);

        AdService::delete($ad);

        return back()->with(['success' => 'عملیات حذف با موفقیت انجام شد']);
    }
}
