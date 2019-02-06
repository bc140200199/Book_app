<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
    
        if ($request->user()->isAdmin($role)) {
            return $next($request);
        } else {
            return redirect('/');
               }

    }

    
}
