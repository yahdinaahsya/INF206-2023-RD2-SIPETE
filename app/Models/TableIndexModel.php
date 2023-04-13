<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableIndexModel extends Model
{
    use HasFactory;
    protected $table = 'order_table';
    protected $primarykey = 'id';
    protected $fillable = [
        'user_id',
        'order_id',
        'order_date',
        'order_status',
        'item_count',
        'total_price',
        'shipping_address',
        'payment_method',
        'customer_name',
        'customer_phone',
        'product_details',
        'location',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
