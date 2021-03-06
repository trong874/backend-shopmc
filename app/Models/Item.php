<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'idkey',
        'shop_id',
        'module',
        'locale',
        'parent_id',
        'title',
        'slug',
        'is_slug_override',
        'duplicate',
        'description',
        'content',
        'image',
        'image_extension',
        'image_banner',
        'image_icon',
        'url',
        'url_type',
        'author_id',
        'target',
        'price_input',
        'price_old',
        'price',
        'percent_sale',
        'order',
        'params',
        'totalitems',
        'totalviews',
        'position',
        'display_type',
        'sticky',
        'is_display',
        'seo_title',
        'seo_description',
        'seo_robots',
        'status',
        'started_at',
        'ended_at',
        'published_at'
    ];

    function groups(){
        return $this->belongsToMany(Group::class,'groups_items','item_id','group_id');
    }

    function carts(){
        return $this->belongsToMany(Cart::class,'cart_item','item_id','cart_id');
    }

    function user(){
        return $this->belongsTo(User::class ,'author_id','id');
    }

    function orders(){
        return $this->belongsToMany(Order::class,'order_detail','item_id','order_id');
    }

    function order_detail(){
        return $this->belongsTo(Order_Detail::class,'item_id','i');
    }
    function vouchers(){
        return $this->belongsToMany(Voucher::class,'voucher_item','item_id','voucher_id');
    }
}
