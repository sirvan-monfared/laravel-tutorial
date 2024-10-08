<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.category.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('dashboard.category.create', [
            'category' => new Category
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required'],
            'slug' => ['required', Rule::unique('categories', 'slug')]
        ]);

        Category::create($validated);

        return back()->with('success', 'Category Created Successfully');
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);

        return view('dashboard.category.edit', [
            'category' => $category
        ]);
    }

    public function update(int $id, Request $request)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'title' => ['required'],
            'slug' => ['required', Rule::unique('categories', 'slug')->ignore($category)]
        ]);

        $category->update($validated);

        return back()->with('success', 'Category Updated Successfully');
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return back()->with('success', 'Category Deleted Successfully');
    }
}
