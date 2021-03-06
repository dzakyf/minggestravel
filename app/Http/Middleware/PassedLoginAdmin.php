<?php

namespace App\Http\Middleware;

use Auth;

use Closure;

class PassedLoginAdmin
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
        if(Auth::user()){
            return redirect('/admin');            
        }else{
            return $next($request);
        }
    }
}
