<?php

namespace App\Http\Middleware;

use Closure;

class ValidateTimeAccess
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
        $current_time = date("Hi",time());

        \Log::debug("Current time: $current_time");

        // 10.00 - 12.00 Jakarta Time
        if ( $current_time >= "0300" && $current_time < "1600"  ) {
            // Boleh akses
            return $next($request);
        } 

        // Tidak boleh akses, redirect ke /access-denied
        return redirect('/access-denied');
    }
}
