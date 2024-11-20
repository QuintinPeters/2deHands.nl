<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->where('is_sold', false)->get(); // Eager load categories
        return view('products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quality' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|max:2048|image',

        ]);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;
            $path = 'uploads/products/';
            $file->move($path, $filename);
        }


        auth()->user()->products()->create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quality' => $request->quality,
            'image' => $path . $filename,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('accountsales')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        try {
            
            session(['previous_url' => url()->previous()]);

            return view('product.show', compact('product'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    }
    public function getUserProducts()
    {
        $products = auth()->user()->products()->get();
        return view('account.sales', compact('products'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
