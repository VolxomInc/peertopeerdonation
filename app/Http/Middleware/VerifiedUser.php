<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use App\User;
use Closure;
use Auth;
use Illuminate\Support\Facades\URL;

/**
 * Class VerifiedUser
 * @package App\Http\Middleware
 */

class VerifiedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {
        if (isset($request->user()->user_id)) {
                $user = User::whereUserId($request->user()->user_id)->first();
                if ($user->status == 0) {
                    return redirect("/verification_code");
                }
        }
        return $next($request);
    }
}