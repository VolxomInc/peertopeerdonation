<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckReferral
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if( $request->hasCookie('referral')) {
            return $next($request);
        }
        else {
            if( $request->query('ref') ) {
                return redirect($request->fullUrl())->withCookie(cookie()->forever('referral', $request->query('ref')));
            }
        }
        return $next($request);
    }
}
