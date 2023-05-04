<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// use Intervention\Image\Facades\Image;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // public function createProfileImage()
    // {
    //     $name = $this->first_name . ' ' . $this->last_name;
    //     $image = Image::canvas(300, 300, '#ccc');
    //     $image->text($name, 150, 150, function ($font) {
    //         $font->file(public_path('fonts/OpenSans-Regular.ttf'));
    //         $font->size(80);
    //         $font->color('#fff');
    //         $font->align('center');
    //         $font->valign('middle');
    //     });
    //     $filename = strtolower(str_replace(' ', '-', $name)) . '.jpg';
    //     $path = public_path('uploads/profiles/' . $filename);
    //     $image->save($path);
    //     $this->profile_image = $filename;
    // }

    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'email',
        'gambar',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}