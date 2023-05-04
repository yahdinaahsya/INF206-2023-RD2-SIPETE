<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jual extends Model
{
    use HasFactory;
    protected $table = 'juals';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'tgldonasi',
        'email',
        'no_hp',
        'pakaian',
        'cr_kirim',

    ];
}