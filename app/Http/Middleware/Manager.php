<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;


class Manager
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
        /*
         * REstrict /admin/ area, make it accessible only to Manager users.
         * There are many ways to restrict access, but easiest way is using the Auth facade:
        */
        // return $next($request);

        if(!Auth::check())
        {
            return redirect('users/login');
        }
        else 
        {
            $user = Auth::user();

            if($user->hasRole('manager')) {
                return $next($request);
            } else {
                return redirect('/');
            }

        }

    }


}
