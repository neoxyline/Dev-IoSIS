<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

class AuthenticateUser 

{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response

    {
        
        if (Auth::user())

        {

            $user_type = Auth::user()->user_type;

            if (!empty(array_intersect($user_type, $roles)))

            {

                return $next($request);

            } 
            
            else 

            {

                if (in_array('pegawai', $user_type))

                {

                    return redirect()->route('welcome-pegawai');

                }

                return redirect()->route('welcome-pelanggan');

            }


        }

        if (in_array('pegawai', $roles) || in_array('admin', $roles))

        {

            return redirect()->route('login');

        }

        return redirect()->route('login-pelanggan');

    }
}
