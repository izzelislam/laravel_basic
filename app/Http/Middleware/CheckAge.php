<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
 
    public function handle($request, Closure $next)
    {
        if ($request->age <= 20) {
            return redirect()->back();
        }
        return $next($request);
    }
}
