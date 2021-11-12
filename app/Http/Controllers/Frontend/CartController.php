<?php


namespace App\Http\Controllers\Frontend;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
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
        $item = Item::where('id',$id)->first();

        if($item !=null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($item, $id);
            $request->session()->put('Cart',$newCart);

        }
        return view('frontend.my-cart',['newCart'=>$newCart]);


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
