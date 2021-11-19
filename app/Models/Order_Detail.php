<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';
    protected $fillable = [
        'quantity',
        'status'
    ];

    function item()
    {
        return $this->hasOne(Item::class);
    }
}
