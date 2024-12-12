<?php

namespace App\Http\Middleware;

use App\Models\Review;
use Closure;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        $orderItem = $request->route('orderitem');
        if ($orderItem == null) {
            return redirect()->route('home')
                ->with('error', 'Deze bestelling bestaat niet.');
        }
        if ($orderItem->order->user_id != auth()->id()) {
            return redirect()->route('home')
                ->with('error', 'Je hebt deze bestelling niet geplaatst.');
        }
        if (
            Review::where('orderitem_id', $orderItem->id)
                ->where('reviewer_id', auth()->id())
                ->exists()
        ) {

            return redirect()->route('home')
                ->with('error', 'Je hebt al een review geschreven voor dit product.');
        }
        return $next($request);
    }
}
