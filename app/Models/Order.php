<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'receiver_name',
        'receiver_contact',
        'receiver_address',
        'sender_name',
        'sender_contact',
        'sender_address',
        'order_type',
        'order_weight',
        'order_price',
        'order_status'
    ];
}
