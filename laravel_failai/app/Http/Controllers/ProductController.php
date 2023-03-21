<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('public.products.index', compact('products'));
    }
    public function show(Product $product)
    {
        return view('public.products.show', ['product' => $product]);

    }
    public function search(Request $request)// kintamasis $request laiko informacija apie HTTP užkalusa
    {
        $search = $request->input('search');//eilutėje gaunama paieškos frazę, kurią vartotojas įvedė į paieškos laukelį.
        $products = Product::where('name', 'like', '%' . $search . '%')->get();//eilutėje ieškome produktų, kurių pavadinimuose yra įvesta paieškos frazė.

        return view('user_dashboard', ['products' => $products]);//gauti produktai perduodami kaip kintamieji products į šabloną, kad galėtume juos parodyti vartotojui.
    }
}
