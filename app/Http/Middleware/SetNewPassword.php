<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Activity;

class SetNewPassword
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
        if (Auth::user()->password_is_admin_set)
        {   
            Activity::log('User redirected to set a new password.');
            return redirect('/setnewpassword');
        }

        return $next($request);
    }
}
