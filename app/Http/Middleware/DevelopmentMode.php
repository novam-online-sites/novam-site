<?php

namespace App\Http\Middleware;

use Closure;

class DevelopmentMode
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
            return abort(503);
        }
        return $next($request);
    }
}
