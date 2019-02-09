<?php

namespace App\Http\Middleware;

use Closure;

class IsDashboardAccessible
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//     public function handle($request, Closure $next,$role)
//     {
//       if (! $request->User()->isAdmin($role)) {
//           // dd($request->User()->isAdmin($role));
//           // return $next($request);
//             return redirect('/');
//       } else {
//           // return redirect('/');
//              return $next($request);

//         }
//     }
// }
