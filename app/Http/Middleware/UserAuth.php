<?php

namespace App\Http\Middleware;

use Session;
use Closure;
use Illuminate\Http\Request;

class UserAuth
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
       
        $path = $request->path();
        
        if(($path=="login" || $path=="register") && (Session::get('LoggedUser')))
        {

            return redirect('/');
        }
        // else if(($path!="login" && !Session::get('LoggedUser')) && ($path!="register" && !Session::get('LoggedUser'))){
        //     return redirect('/login');
        // }
        return $next($request);
    }
}
