<?php

namespace App\Http\Middleware;

use Closure;

class superadmin
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
       if(empty(Auth()->user()->name)){ 
           return redirect('/');
       }
       else{
     $a=Auth()->user()->name;
    if( $a !="superadmin"){
    //   echo "not empty";
      return redirect('/');

  }
}     
      
       

        return $next($request);
    }
}
