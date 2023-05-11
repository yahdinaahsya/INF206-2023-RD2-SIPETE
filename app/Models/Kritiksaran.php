<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritiksaran extends Model
{
    use HasFactory;
    protected $table = 'kritiksarans';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'email',
        'pesan',

    ];
}