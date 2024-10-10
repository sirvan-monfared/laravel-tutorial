<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.color.index', [
            'colors' => Color::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.color.create', [
            'color' => new Color
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        Color::create($validated);

        return back()->with('success', 'Color Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $color = Color::findOrFail($id);

        return view('dashboard.color.edit', [
            'color' => $color
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $color = Color::findOrFail($id);

        $validated = $request->validate([
            'name' => ['required', 'min:3'],
        ]);

        $color->update($validated);

        return back()->with('success', 'Color Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $color = Color::findOrFail($id);

        $color->delete();

        return back()->with('success', 'Color Deleted Successfully');
    }
}
