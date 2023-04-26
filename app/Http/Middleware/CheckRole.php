<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
 
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = Auth::user();

        if (! $user) {
            return redirect('/login');
        }

        foreach ($roles as $role) {
            if ($user->role == $role) {
                if ($role == 'admin') {
                    return $next($request);
                } else {
                    return redirect()->action([UserController::class, 'index']);
                }
            }
        }

        return redirect('/admin');
    }
}
