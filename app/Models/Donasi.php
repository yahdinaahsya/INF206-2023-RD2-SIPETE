<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'nama',
        'alamat',
        'tgldonasi',
        'email',
        'no_hp',
        'pakaian',
        'cr_kirim',
    ];
}