<?php

namespace App\Http\Middleware;

use Closure;

class MyCheck
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
        if($request->id<0){

            return  redirect('Admin/index');

        }
        return $next($request);
    }
}
