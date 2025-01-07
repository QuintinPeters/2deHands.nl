<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmOrder;
use App\Mail\SellerReviewMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('user_id', auth()->id())
            ->with(['orderItems.product'])
            ->orderBy('order_date', 'desc')
            ->get()
            ->map(function ($order) {
                $order->total_price = $order->orderItems->sum(function ($item) {
                    return $item->product->price;
                });
                return $order;
            });

        return view('account.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $cartItems = Cart::where('user_id', auth()->id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()
                ->with('error', 'Je winkelwagen is leeg');
        }

        // Create order
        $order = Order::create([
            'user_id' => auth()->id(),
            'order_date' => now(),
        ]);

        // Create order items from cart
        foreach ($cartItems as $cartItem) {
            $orderitem = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'item_status' => 'afgerond'
            ]);

            $cartItem->product()->update([
                'is_sold' => true
            ]);
        }


        Mail::to(auth()->user()->email)->send(new ConfirmOrder([
            'name' => auth()->user()->name,
            'order_date' => now(),
            'item_status' => 'afgerond',
            'order_items' => $order->orderItems()->with('product')->get()
        ]));

        foreach ($order->orderItems as $orderItem) {
            $product = $orderItem->product;
            $seller = $product->user;
            $buyer = auth()->user();
    
            $data = [
                'seller_name' => $seller->name,
                'buyer_name' => $buyer->name,
                'product_name' => $product->name,
                'review_link' => route('review.create', ['orderitem' => $orderItem->id, 'product' => $product->id])
            ];
    
            Mail::to($buyer->email)->send(new SellerReviewMail($data));
        }
        Cart::where('user_id', auth()->id())->delete();

        return redirect()->route('orders')
            ->with('success', 'Bestelling succesvol geplaatst');

    }
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
