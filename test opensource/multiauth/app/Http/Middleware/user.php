<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() != null) {
            if (Auth::user()->role == '1') {
                return $next($request);
            }else{
                if (Auth::user()->role == '2') {
                    return $next($request);
                }else{
                    if (Auth::user()->role == '3') {
                        return $next($request);
                    }
                }
            }
            return redirect()->back();
        } else {
            return redirect()->back();
        }
        

    }
}
