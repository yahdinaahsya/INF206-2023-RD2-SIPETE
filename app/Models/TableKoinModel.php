<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableKoinModel extends Model
{
    use HasFactory;
    protected $table = 'table_coin_models';
    protected $fillable = [
        'id_user',
        'saldo_koin',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}