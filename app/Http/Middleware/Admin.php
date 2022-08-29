<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->usertype=='Admin'){
             return $next($request);
            }elseif (Auth::user()->usertype=='User'){
                return $next($request);
            }


         }else{
            return redirect('/login');
            //return redirect()->back();
         }
       
    }
}
