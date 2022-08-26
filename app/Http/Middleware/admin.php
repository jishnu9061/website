<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\admin as Middleware;
use Auth;
use Closure;

class admin
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
            if(Auth::check() && Auth::User()->isRole()=='admin')
        {
            return $next($request);
        }
        else
        {
            return redirect('log');
        }
    }
}
