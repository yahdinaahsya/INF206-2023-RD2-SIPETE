<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableDonasiModel extends Model
{
    use HasFactory;
    protected $table = 'donasi_migrations';
    protected $primarykey ='id';
    protected $fillable = [
        'id', 'judul','deskripsi','jumlah','satuan','satuan','status',
    ];
}
