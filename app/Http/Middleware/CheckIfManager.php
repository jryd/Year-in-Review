<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class CheckIfManager
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
        if (Auth::user()->role_id > 4)
        {
            return $next($request);
        }
        else
        {
            flash()->error('You are not authorized to access this part.');
            \Redirect::back();
        }
    }
}
