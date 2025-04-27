<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LocationRequest;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        return view('admin.location.index', [
            'locations' => Location::all()
        ]);
    }

    public function create()
    {
        return view('admin.location.create', [
            'location' => new Location,
            'states' => Location::root()->get()
        ]);
    }

    public function store(LocationRequest $request)
    {
        $location = Location::create($request->all());

        return redirect()->route('admin.location.edit', $location)->with(['success' => 'عملیات با موفقیت انجام شد']);
    }

    public function edit(Location $location)
    {
        return view('admin.location.edit', [
            'location' => $location,
            'states' => Location::root()->get()
        ]);
    }

    public function update(Location $location, LocationRequest $request)
    {

        $location->update($request->all());

        return back()->with(['success' => 'عملیات با موفقیت انجام شد']);

    }

    public function destroy(Location $location)
    {
        $location->delete();

        return back()->with(['success' => 'عملیات با موفقیت انجام شد']);
    }
}
