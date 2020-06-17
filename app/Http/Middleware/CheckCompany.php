<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Session;

class CheckCompany
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
        if(Session::has('company') == true) {
            if($request->path() == 'company/login')
                return redirect('/company/home');
            return $next($request);
        } else if($request->path() == 'company/login') {
            return $next($request);
        }

        return redirect('/company/login');
    }
}
