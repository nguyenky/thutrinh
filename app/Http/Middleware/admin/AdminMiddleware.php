<?php

namespace App\Http\Middleware\admin;

use Closure;
use Auth;

class AdminMiddleware
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
        if(Auth::check()){
            $user = Auth::user();
            
            if($user->isAdministrator()){
                return $next($request);
            }else{
                return redirect('dang-nhap');
            }
        }
        else
            return redirect('dang-nhap');
        return $next($request);
    }
}
