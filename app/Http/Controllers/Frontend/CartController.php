<?php


namespace App\Http\Controllers\Frontend;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {

    }

    public function addCart(Request $request, $id)
    {

        $item = Item::where('id',$id)->first();

        if($item !=null){
            $oldCart = Session('Cart')? Session('Cart'):null ;
            $newCart = new Cart($oldCart);
            $newCart->addCart($item,$id);
            $request->session()->put('Cart', $newCart);
            dd($newCart);
        }
        return view('frontend.cart',['newCart'=>$newCart]);

    }
}
