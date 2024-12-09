<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price;
        });
        return view('shoppingcart', compact('cartItems', 'totalPrice'));
    }
    public function addToCart(Product $product)
    {
        $userId = auth()->id();
        $cartItem = Cart::where('user_id', $userId)->where('product_id', $product->id)->first();
        if ($cartItem) {
            return redirect()->back()->with('error', 'Product is al in de winkelwagen.');
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $product->id,
            ]);
            return redirect()->route('shoppingcart')->with('success', 'Product toegevoegd aan winkelwagen.');
        }
    }
    public function remove(Cart $cart)
    {
        $cart->delete();

        return redirect()->route('shoppingcart')->with('success', 'Product verwijderd uit winkelwagen.');
    }

}
