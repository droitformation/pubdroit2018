<?php

namespace App\Http\Middleware;

use Closure;

class BackMiddleware
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
        // Get path
        $uri      = explode('/',$request->path());
        $fragment = isset($uri[1]) ? $uri[1] : null;

        if($fragment){

            if($fragment != 'products' || $fragment != 'product'){
                //session()->forget('product_search');
            }

            if($fragment != 'user'){
                //session()->forget('user_search');
                if($request->isMethod('get')){
                    //session()->forget('return_path.user');
                }
            }

            if($fragment != 'adresses' || $fragment != 'adresse'){
               // session()->forget('adresse_search');
            }

            if($fragment != 'colloque'){
               // session()->forget('colloque_archive');
            }
        }

        return $next($request);
    }
}
