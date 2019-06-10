<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(Auth()->check()&&$request->user()->role_id==1){
             return $next($request);}
        else{
             return abort(404);
    }
}
}
