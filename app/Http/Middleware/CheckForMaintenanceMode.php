<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        //
        "account/request"
    ];

    public function handle($request, Closure $next)
    {
        if(!in_array($request->ip(), config('view.ips'))){
            return abort(503);
        }
        return $next($request);
    }
}
