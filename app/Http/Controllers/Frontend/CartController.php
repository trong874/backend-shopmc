<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Constraint\Count;

class CartController extends Controller
{
    public function cart()
    {
        $newCart = \session()->get('Cart');

    return view('frontend.cart',['newCart'=>$newCart]);
    }

    public function addCart(Request $request,$id)
    {
//      Auth::check();
        $oldCart = [];
        $cart = Cart::with('items')->where('user_id',Auth::user()->id)->first();
        if ($cart){
            $oldCart = Cart::with('items')->get();
        }else{
            Cart::create([
                'user_id'=> Auth::user()->id
            ]);
            $cart = Cart::with('items')->where('user_id',Auth::user()->id)->first();
        }
        foreach ($cart->items as $item){
            if ($item->id == $id){
                $cart_item = DB::table('cart_item')->where('cart_id',$cart->id)->where('item_id',$id)->first();
                $cart_item->quantity = $cart_item->quantity + $request->quantity;
                $cart_id = $cart_item->cart_id;
                $item_id = $cart_item->item_id;
                $quantity = $cart_item->quantity;
                DB::table('cart_item')->where('cart_id',$cart->id)->where('item_id',$id)->update(['cart_id'=>$cart_id,
                    'item_id'=>$item_id,
                    'quantity'=>$quantity]);
            }else{
                $cart->items()->attach($id);
            }
        }
        dd($cart);
        return view('frontend.my-cart',['newCart'=>$cart]);



    }
    public function deleteItemCart(Request $request,$id)
    {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->deleteItemCart($id);
            if(Count($newCart->items)>0){
                $request->Session()->put('Cart',$newCart);
            }
            else{
                $request->Session()->forget('Cart');
            }
            return view('frontend.my-cart',['newCart'=>$newCart]);
    }
}
