<?php

namespace App\Http\Middleware;
use Closure;

class CheckLogin
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
        if (session('admin_id')){
            return $next($request);
        }else{
            return redirect('/login')->with('error','请先登录');
        }
    }
}
