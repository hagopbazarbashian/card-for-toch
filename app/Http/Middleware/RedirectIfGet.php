<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfGet
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
        if ($request->isMethod('get')) {
            return redirect()->back(); // Change 'home' to the route where you want to redirect
        }

        return $next($request);
    }
}