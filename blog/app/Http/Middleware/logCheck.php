<?php

namespace App\Http\Middleware;

use Closure;

class logCheck
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
        //return $next($request);
        if(empty(\Session::get('login')))
        {
            return redirect('index');
        }
        else
        {
            return redirect('registration');
        }
    }
}
