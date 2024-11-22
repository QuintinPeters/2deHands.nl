<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompletedProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $user = auth()->user();

            if (empty($user->first_name) || empty($user->last_name) || empty($user->street_name) || empty($user->city) || empty($user->house_number) || empty($user->postal_code)) {
                return redirect()->route('accountinfo')
                    ->with('error', 'Vul alstublieft uw aanvullende informatie in.');
            }
        }
        return $next($request);
    }
}
