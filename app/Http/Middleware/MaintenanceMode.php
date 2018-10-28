<?php

namespace App\Http\Middleware;

use Closure;

class MaintenanceMode
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
         if(!in_array($request->ip(), config('view.ips'))){
             return response()->view('errors.503', $request->all(), 503);
         }
         return $next($request);
     }
}
