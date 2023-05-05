<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OlahData extends Model
{
    use HasFactory;
    protected $table = 'olahData';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'province',
        'rating',
    ];
}