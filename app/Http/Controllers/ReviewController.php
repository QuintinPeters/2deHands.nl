<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Review;
use App\Models\product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\createReviewRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(OrderItem $orderitem, product $product)
    {

        return view('review.create', compact('orderitem', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createReviewRequest $request)
    {
        $validated = $request->validated();
        $product = product::find($request->product_id);

        Review::create([
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
            'seller_id' => $product->user->id,
            'reviewer_id' => auth()->id(),
            'orderitem_id' => $validated['orderitem_id'],
            'review_date' => now(),
        ]);

        return redirect()->route('account')->with('success', 'Je review is succesvol toegevoegd');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
