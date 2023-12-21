<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
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
        // Periksa apakah pengguna telah login
        if (Auth::check()) {
            // Periksa apakah peran pengguna adalah 'Admin'
            if (Auth::user()->role === 'Admin') {
                return $next($request);
            } else {
                // Jika peran pengguna bukan 'Admin', tambahkan logika sesuai kebutuhan
                
                return redirect()->back();
            }
        }

        // Jika pengguna belum login, arahkan ke halaman login
        return redirect()->back();
    }
}
