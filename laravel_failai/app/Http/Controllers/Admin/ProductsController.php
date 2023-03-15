<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;
class ProductsController extends Controller
{
    public function index()
    {
        $products =  Product::query()->with(['category', 'status'])->get();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();
        return view('admin.products.create', compact('categories', 'statuses'));
    }
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('products.show', $product);
    }

    public function show(Product $product)
    {
        return view('admin.products.show', ['product' => $product]);

    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.show', $product);
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
