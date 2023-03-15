<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact(var_name: 'orders'));
    }

    public function create()
    {
        return view('admin.order.create');
    }

    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all());
        return redirect()->route('orders.show', $order);
    }

    public function show(Order $order)
    {
        return view('admin.order.show', ['order' => $order]);
    }

    public function edit(Order $order)
    {
        return view('admin.order.edit', compact('order'));
    }

    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.show', $order);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
