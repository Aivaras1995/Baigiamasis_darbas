<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user_dashboard()
    {
        $categories = Category::all();
        $products = Product::all();
        $cartItems = auth()->user()->cartItems;
        return view('user_dashboard', compact('categories', 'products', 'cartItems'));
    }

}
