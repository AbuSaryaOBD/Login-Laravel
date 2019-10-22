<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if($user = Auth::user())
        {
            if ($user->isAdmin()) 
            {
                return $next($request);  
            }
            return redirect('/home');
        }
        return redirect('/');
    }
}
