<?php

namespace App\Http\Middleware;

use Closure;

class Approval
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
        if (auth()->check() && $request->user()->approved == 0) {
            auth()->logout();
            return redirect()->route('login')->with('loginredirect', trans('Your account needs admin approval'));
        }
        return $next($request);
    }
}
