<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = auth()->user()->cartItems;
        return view('public.cart.index', compact('cartItems'));
    }

    public function store(Request $request, $productId)
    {
        $user = auth()->user();
        $cartItem = $user->cartItems()->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            CartItem::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'quantity' => 1
            ]);
        }

        return redirect()->back()->with('success', 'Prekė pridėta į krepšelį');
    }

    public function update(Request $request, $cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        $cartItem->update(['quantity' => $request->quantity]);

        return redirect()->back()->with('success', 'Krepšelio prekės kiekis atnaujintas');
    }
    public function destroy($cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Prekė pašalinta iš krepšelio');
    }
}
