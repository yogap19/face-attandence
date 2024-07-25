<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlyAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Logika untuk memeriksa apakah pengguna adalah admin
        if (Auth::check() && Auth::user()->role_id != 1) {
            return redirect('dashboard');
        }
        return $next($request);
    }
}
