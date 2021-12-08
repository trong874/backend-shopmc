<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $table = 'voucher';
    protected $fillable = [
        'shop_id',
        'voucher_id',
        'user_id',
        'discount',
        'order',
    ];
    function users(){
        return $this->belongsToMany(User::class,'voucher_user','voucher_id','user_id');
    }
    function items(){
        return $this->belongsToMany(Item::class,'voucher_item','voucher_id','item_id');

    }
}
