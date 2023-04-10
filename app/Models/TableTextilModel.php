<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableTextilModel extends Model
{
    use HasFactory;
    protected $table = 'textil';
    protected $primarykey = 'id';
    protected $fillable = [
       'id', 'nama','jenis','deskripsi','harga','stok','gambar',
    ];
}
