<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AdminAuth
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
       switch (auth::user()->rol){
        case ('1'): 
            return $next($request);//si es administrador continua al HOME 
            break;

        case ('2'): 
            return redirect('users');// si es un usuario normal redirige a la ruta USER
            break;

        case ('3'): 
             return redirect('moders');// si es un usuario normal redirige a la ruta USER
             break;
       }
    }
}
