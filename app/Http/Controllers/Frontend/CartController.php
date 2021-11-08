<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        $item = Item::findorFail($request->input('item_id'));
        Cart::add(
            $item->id,
            $item->name,
            $request->input('quantity'),
            $item->price,
        );
    }
}
