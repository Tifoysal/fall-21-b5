<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role=='admin' ||auth()->user()->role=='manager' ){
            return $next($request);
        }else
        {
            return redirect()->route('website')->with('error','Permission denied.');
        }

    }
}
