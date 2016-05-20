<?php

namespace App\Http\Middleware;

use Closure;
use Activity;
use App\User;
use Auth;

class ProtectActivityLog
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
        if (Auth::user()->role_id == 10 || Auth::user()->id == 4)
        {
            return $next($request);
        }

        Activity::log('User tried to access Activity Log, and was denied.');
        flash()->error('You are not authorised to access the logs.');
        return redirect('/');  
    }
}
