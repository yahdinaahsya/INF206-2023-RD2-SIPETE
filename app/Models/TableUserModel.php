<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableUserModel extends Model
{
    use HasFactory;
    protected $table = 'users_migration';
    protected $primarykey = 'id';
    protected $fillable = [
       'id', 'nama','email','alamat','tgllhr', 'provinsi','gambar',
    ];
}
