<?php

namespace App\Http\Middleware;

use App\Models\OrderItem;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderItemBelongsToUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $orderItem = OrderItem::find($request->route('orderItem'));
        if ( $orderItem->order->user_id !== auth()->id()) {
            return redirect()->route('home')
                ->with('error', 'Je hebt deze bestelling niet geplaatst.');
        }
        return $next($request);
    }
}
