<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $products = product::with('category')->where('is_sold', false)->get();
        return view('shoppingcart', compact('products'));
    }
}
