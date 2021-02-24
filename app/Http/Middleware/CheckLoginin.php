<?php
namespace App\Http\Middleware;
use Closure;

class CheckLoginin
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
        if (session('user_id')){
            return $next($request);
        }else{
            return redirect('/app/login')->with('error','请先登录');
        }
    }
}

