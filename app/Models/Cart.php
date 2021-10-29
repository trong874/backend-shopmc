<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'idkey',
        'shop_id',
        'module',
        'session_id',
        'token',
        'user_id',
        'status',
    ];

    function items(){
        return $this->belongsToMany(Group::class,'cart_item','cart_id','item_id');
    }
}
