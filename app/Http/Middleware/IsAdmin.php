<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * 
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->email == 'keshavv857@gmail.com' && Auth::user()->email == 'ashik@gmail.com'){
           return redirect('/admin'); 
        }
        return $next($request);
    }
}
