<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirkirim extends Model
{
    use HasFactory;
    protected $table = 'konfirmasi_pengiriman';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_user',
        'id_donasi',
        'nama_pengirim',
        'tgl_pengirima',
        'resi_pengiriman',
        'foro_resi',

    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'id_user');
    }
}
