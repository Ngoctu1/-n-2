<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'order_number', 'user_id', 'status', 'grand_total', 'item_count',
        'name', 'address', 'phone_number','email','city'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
