<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController
{

    public function index()
    {
        $categories = Category::all();
        return view('public.categories.index', compact('categories'));
    }
}
