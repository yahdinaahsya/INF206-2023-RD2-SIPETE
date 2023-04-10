<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminAuthMiddleware
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
        // Cek apakah user saat ini merupakan admin
        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        // Jika bukan admin, redirect ke halaman login
        return redirect('/login');
    }
}
