<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.category.create', [
            'category' => new Category,
            'categories' => Category::root()->get()
        ]);
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());

        return redirect()->route('admin.category.edit', $category)->with(['success' => 'عملیات با موفقیت انجام شد']);
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
            'categories' => Category::root()->get()
        ]);
    }

    public function update(Category $category, CategoryRequest $request)
    {

        $category->update($request->all());

        return back()->with(['success' => 'عملیات با موفقیت انجام شد']);

    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with(['success' => 'عملیات با موفقیت انجام شد']);
    }
}
