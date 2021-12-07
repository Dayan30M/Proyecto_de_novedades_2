<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

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
        switch(auth::user()->rol){ 
            case ('1'): 
                return redirect ("home");//si es administrador 
                break;
             case ('2'): 
                 return $next($request);// si es un usuario co 
                 break;
            case ('3'): 
                return redirect('moders');//si es administoredirige al modrado
                break;
            }
    }
}
