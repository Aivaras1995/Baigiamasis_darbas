<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $products = Product::all();
        $categories = Category::all();
        return view('dashboard', compact('users', 'products', 'categories'));
    }
}
