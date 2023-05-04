<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ManageUserController;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // ini adalah untuk 
        // authenticate fungsi kontroller
        // dimana nanti setelah login menggunakan role admin
        // maka akan langsung dibawah ke halaman admin
        // jika tidak maka akan tetapi dilanding pagenya
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect user to the appropriate page based on their role
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }

        return back()->withErrors([
            // 'email' => 'The provided credentials do not match our records.',
            'email' => 'Email Tidak Valid.',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}