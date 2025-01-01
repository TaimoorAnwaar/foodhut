<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillables=[
        'name',
        'detail',
        'phone',
        'email',
        'address',
        'title',
        'price',
        'quantity',
        'delivery_status',

    ];
}
