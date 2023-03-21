<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = auth()->user()->cartItems;//gaunami visi krepšelio elementai, susieti su prisijungusiu vartotoju
        return view('public.cart.index', compact('cartItems'));
    }

    public function store(Request $request, $productId)//metodas prideda naują prekę į vartotojo krepšelį arba
        // padidina esamo krepšelio elemento kiekį, jei prekė jau yra krepšelyje.
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
        $cartItem = CartItem::findOrFail($cartItemId);//Surandama prekė krepšelyje pagal ID.

        $cartItem->update(['quantity' => $request->quantity]);//Atnaujinamas prekės kiekis krepšelyje.


        return redirect()->back()->with('success', 'Krepšelio prekės kiekis atnaujintas');//Nukreipiamas vartotojas atgal į ankstesnį puslapį su sėkmės pranešimu.
    }
    public function destroy($cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Prekė pašalinta iš krepšelio');
    }
}
