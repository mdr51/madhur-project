<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->path()=='login' and session()->has('user')){
            return redirect('/?status=Already-loggedIn');
        }elseif($request->path()=='mycart' and !session()->has('user') ){
            return redirect('/login?status=LoginFirst');
        }
        return $next($request);
    }
}
