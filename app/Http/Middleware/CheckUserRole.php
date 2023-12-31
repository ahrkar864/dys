<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRole
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
        // return $next($request);

        // if (auth()->check() && auth()->user()->role === 'admin') {
        //     return redirect('/admin/dashboard');
        // } elseif (auth()->check() && auth()->user()->role === 'normal') {
        //     return $next('user/dashboard');
        // } else {
        //     return redirect('/login');
        // }

        // if(Auth::check()) {
        //     if(Auth::user()->role == 'admin'){
        //         return $next($request);
        //     } else if(Auth::user()->role == 'normal'){
        //         return redirect('/');
        //     }
        // } else {
        //     return redirect('/login');
        // }

        // return $next($request);

        if(auth()->check()) {
            if (auth()->user()->role == 'admin'){
                return $next($request);
            } else if(auth()->user()->role == 'normal'){
                return redirect('/user/dashboard');
            }
        } else {
            return redirect('login');
        }
    }
}
