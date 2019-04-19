<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthGestionnaire
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->getAuthIdentifier() == 1 || Auth::user()->getAuthIdentifier() == 2) {
            return $next($request);
        }

        return redirect('/');;
    }
}
