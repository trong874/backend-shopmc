<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
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
    function user(){
        return $this->belongsToMany(User::class);
    }

    function groups(){
        return $this->hasMany(Group::class,'parent_id','id')->orderBy('order','ASC');
    }

    function item(){
        return $this->belongsToMany(Item::class,'groups_items','group_id','item_id');
    }
}
