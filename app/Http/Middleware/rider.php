<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\rider as Middleware;

use Closure;
use Auth;

class rider
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

        if(Auth::check() && Auth::User()->isRole()=='rider')
        {
            return $next($request);
        }
        else
        {
            return redirect('log');
        }
    }
}
