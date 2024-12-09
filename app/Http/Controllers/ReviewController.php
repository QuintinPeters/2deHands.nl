<?php

namespace App\Http\Controllers;

use App\Http\Requests\createReviewRequest;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\product;
use App\Models\Review;
use Illuminate\Http\Request;

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
        $request->validated();

        $request->user()->reviews()->create([
            'rating' => $request->rating,
            'comment' => $request->comment,
            'seller_id' => $request->product->user->id,
            'reviewer_id' => auth()->id(),
            'orderitem_id' => $request->orderitem_id,
            'review_date' => now(),

        ]);

        return redirect()->route('account')->with('succes', 'Je review is succesvol toegevoegd');
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
