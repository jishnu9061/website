<?php

namespace App\Http\Middleware;

use Closure;

class dashboard
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
        if($request->role=='admin'){
         return redirect('dashboard');
        }
        return $next($request);
    }
}
