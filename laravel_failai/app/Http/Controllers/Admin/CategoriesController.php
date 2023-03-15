<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact(var_name: 'categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {

        $categories = Category::create($request->all());
        return redirect()->route('categories.show', $categories);
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', ['category' => $category]);
    }

    public function edit(Category $categories)
    {
        return view('admin.categories.edit', compact('categories'));
    }

    public function update(CategoryRequest $request, Category $categories)
    {
        $categories->update($request->all());
        return redirect()->route('categories.show', $categories);
    }

    public function destroy(Category $categories)
    {
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
