<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }
        if(isset($request->email) && isset($request->password) && !Auth::validate(['email' => $request->email, 'password' => $request->password])) {
            return redirect("/sign-in")->withErrors(["Email or Password does not match with our credential"]);
        }
        return $next($request);
    }
}
