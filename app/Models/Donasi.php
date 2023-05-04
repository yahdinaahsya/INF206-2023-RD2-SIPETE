<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    protected $table = 'donasis';
    protected $primarykey = 'id';
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
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'id_user');
    }
}