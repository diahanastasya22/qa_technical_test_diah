<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_name',
        'amount',
        'customer_name',
        'status',
        'transaction_date',
        'created_by',
        'created_on'
    ];

    protected $casts = [
        'transaction_date' => 'datetime',
        'created_on' => 'datetime',
    ];
}
