<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ipCheckMiddleWare
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
	if($request -> ip() != "127.0.0.1"){
	 return "Error Access this Rout";
	}
	else{
		return $next($request);
	}
    }
}
