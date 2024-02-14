<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($request);
        if (Auth::user()) {
            return $next($request);
        }
        // $userRoles = Auth::user()->roles->pluck('name');

        // if ($userRoles->contains('Admin')) {
        //     return $next($request);
        // }else if ($userRoles->contains('Client')) {
        //     return redirect('/feria-client');
        // }
        return redirect('/feria');
    }
}
