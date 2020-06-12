<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Session;

class CheckAdmin
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
        if(Session::has('admin') == true) {
            if($request->path() == 'admin/login')
                return redirect('/admin/home');
            return $next($request);
        } else if($request->path() == 'admin/login') {
            return $next($request);
        }

        return redirect('/admin/login');
    }
}
