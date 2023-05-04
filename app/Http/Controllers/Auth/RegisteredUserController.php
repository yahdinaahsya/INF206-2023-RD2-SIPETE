<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        // jika tidak ada input gambar, maka buat gambar profil dari inisial nama
        if (!$request->hasFile('gambar')) {
            $words = explode(' ', $request->name);
            $initials = '';
            foreach ($words as $word) {
                $initials .= strtoupper(substr($word, 0, 1));
            }

            $image = imagecreatetruecolor(100, 100);
            $background = imagecolorallocate($image, 255, 255, 255);
            imagefill($image, 0, 0, $background);
            $textColor = imagecolorallocate($image, 0, 0, 0);
            $fontPath = public_path('font/arial.ttf'); // path ke file font
            imagettftext($image, 48, 0, 50, 50, $textColor, $fontPath, $initials);
            $path = 'app/public/assets/profile/' . $user->id . '/avatar.png';
            Storage::put($path, (string) imagepng($image));
            imagedestroy($image);

            $user->gambar = $path;
            $user->save();
        }

        event(new Registered($user));

        return redirect(RouteServiceProvider::LOGIN);
    }



}