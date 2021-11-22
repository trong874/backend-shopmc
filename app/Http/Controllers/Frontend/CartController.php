<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Cart_Item;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
            $cart = Cart::with('items')->where('user_id',Auth::user()->id)->first();
            $cart_item_of_cart = Cart_Item::where('cart_id',$cart->id)->get();
            $data_cart = [
                'items'=>$cart->items,
                'total_price'=>Cart_Item::where('cart_id',$cart->id)->sum('price'),
                'cart_items'=>$cart_item_of_cart,
            ];
            return view('frontend.cart',['data_cart'=>$data_cart]);
    }

    public function addCart(Request $request,$item_id)
    {
        $oldCart = [];
        $flag = true;
        $product = Item::findOrFail($item_id);
        $cart = Cart::with('items')->where('user_id',Auth::user()->id)->first();
        if ($cart){
            $oldCart = Cart::with('items')->get();
        }else{
            Cart::create([
                'user_id'=> Auth::user()->id
            ]);
            $cart = Cart::where('user_id',Auth::user()->id)->first();

            $cart->items()->attach($item_id);

        }
        $item_in_cart = $cart->items()->get();
        foreach ($item_in_cart as $item){
            $cart_item = Cart_Item::where('cart_id',$cart->id)->where('item_id',$item_id)->first();
            if ($item->id == $item_id){
                $cart_item->update([
                   'quantity'=>$cart_item->quantity + $request->quantity,
                   'price'=>$product->price * ($cart_item->quantity + $request->quantity),
               ]);
                $flag = false;
            }
        }

    if ($flag) {
        $cart->items()->attach($item_id);
        $cart_item = Cart_Item::where('cart_id',$cart->id)->where('item_id',$item_id)->first();
        $cart_item->update([
            'quantity'=>$cart_item->quantity + $request->quantity,
            'price'=>$product->price * ($cart_item->quantity + $request->quantity),
        ]);
        $cart = Cart::with('items')->where('user_id',Auth::user()->id)->first();
    }
//    $cart_item_of_cart = Cart_Item::where('cart_id',$cart->id)->get();
//
//    $data_cart = [
//        'items'=>$cart->items,
//        'total_price'=>Cart_Item::where('cart_id',$cart->id)->sum('price'),
//        'cart_items'=>$cart_item_of_cart,
//        ''
//    ];

        return response()->json();
    }

    public function deleteItemCart($id)
    {
        $item = Cart_Item::where('item_id',$id);
        $item->delete();
        return response()->json();
    }

    public function getCart()
    {
        if (empty(Auth::user())){
            {
                $data_cart['total_price'] = 0;
            }
        }
        else{
            $cart = Cart::with('items')->where('user_id',Auth::user()->id)->first();
            if(isset($cart)){
                $cart_item_of_cart = Cart_Item::where('cart_id',$cart->id)->get();
                $data_cart = [
                    'items'=>$cart->items,
                    'total_price'=>Cart_Item::where('cart_id',$cart->id)->sum('price'),
                    'cart_items'=>$cart_item_of_cart,
                ];
            }
            else
            {
                $data_cart['total_price'] = 0;
            }

        }
        return view('frontend.layout.core.hearder',['data_cart'=>$data_cart]);
    }

    public function changeQuantity(Request $request,$id)
    {
        $cart = Cart::with('items')->where('user_id',Auth::user()->id)->first();
        $cart_item = Cart_Item::where('item_id',$id)->where('cart_id',$cart->id)->first();
        $product = Item::findOrFail($id);
        $cart_item->quantity = $request->quantity;
        $cart_item->price =  $request->quantity * $product->price;
        $cart_item->save();
        $cart_item = Cart_Item::where('item_id',$id)->where('cart_id',$cart->id)->first();
        $data_cart = [
            'items'=>$cart->items,
            'total_price'=>Cart_Item::where('cart_id',$cart->id)->sum('price'),
            'cart_items'=>$cart_item,
        ];
        return response()->json($data_cart);
    }

    public function destroyItem($id)
    {
        $item = Cart_Item::where('item_id',$id);
        $item->delete();
        return response()->json();
    }
}
