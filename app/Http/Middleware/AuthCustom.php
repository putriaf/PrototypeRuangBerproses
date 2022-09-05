<?php

namespace App\Http\Middleware;

use Closure;

class AuthCustom
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('login');
    //     }
    // }
    public function handle($request, Closure $next)
    {
        if($request->session()->has('token')){
            return $next($request);
        }
        else{
            // return view('Login.index');
            return redirect()->route('login');
        }
    }
}