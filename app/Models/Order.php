<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'payment_type',
        'title',
        'description',
        'author_id',
        'price',
        'status',
        'params'
    ];

    function items()
    {
        return $this->belongsToMany(Item::class,'order_detail','order_id','item_id');
    }

    function user(){
       return $this->belongsTo(User::class,'author_id','id');
    }
}
