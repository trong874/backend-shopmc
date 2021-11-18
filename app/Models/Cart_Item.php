<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Item extends Model
{
    use HasFactory;

    protected $table= 'cart_item';
    protected $fillable = [
        'quantity',
        'price'
    ];
}
