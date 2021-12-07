<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->paginate(10);
        return view('backend.orders.index',[
            'orders'=>$orders
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->shipment_details, [
            'fullname' => 'required|min:5|max:255',
            'ward' => 'required',
            'district' => 'required',
            'province' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            Session::put('message_error',$validator->errors()->toArray());
            return back();
        }
        $params = json_encode($request->shipment_details);
       $order = Order::create([
           'author_id'=>Auth::user()->id,
           'status' => 1,
           'price'=>$request->total_price,
           'params'=>$params,
       ]);
        foreach ($request->items as $key => $item){
            $order->items()->attach($key);
            $order_detail = Order_Detail::where('order_id',$order->id)->where('item_id',$key)->first();
            $order_detail->update([
                'quantity'=>$item
            ]);
        }
        $cart = Cart::whereUser_id(Auth::user()->id)->first();
        $cart->items()->detach();
        $cart->delete();
        return redirect()->route('orders');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $order = Order::with('items','user')->whereId($id)->first();
        $order_detail = Order_Detail::whereOrder_id($id)->get();
        $shipment_details = json_decode($order->params);
        return view('backend.orders.form-data',[
            'order'=>$order,
            'shipment_details'=>$shipment_details,
            'order_detail'=>$order_detail,
            'page_title'=>'Thông tin đơn hàng.'
        ]);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            'status'=>$request->status,
        ]);
        Session::put('message','Cập nhât đơn hàng thành công');
        return back();
    }

    public function destroy($id)
    {
        Order::destroy($id);
        Session::put('message','Đã xoá đơn hàng số '.$id);
        return back();
    }

    public function orderCancel(Request $request)
    {
        $auth_id = $request->auth_id;
        $order_id = $request->order_id;
        $order = Order::findOrFail($order_id);
        if ($order->author_id == $auth_id){
            $order->update([
                'status'=> 5,
            ]);
            Session::put('message','Đơn hàng của bạn đã được huỷ !');
            return back();
        }
        Session::put('message','Lỗi');
        return back();
    }

    public function filter(Request $request)
    {
        $q = Order::query();
        if (isset($request->author_id)) {
            $q->whereHas('user', function (\Illuminate\Database\Eloquent\Builder $q) use ($request) {
                $author_id = $request->author_id;
                $q->where('users.id', $author_id);
            });
        }
        if ($request->id) {
            $q->where('id', $request->id);
        }
        if ($request->title) {
            $q->where('title', 'LIKE', '%' . $request->title . '%');
        }
        if ($request->status) {
            $q->where('status', $request->status);
        }
        if ($request->date_from && $request->date_to) {
            $q->whereBetween('created_at', [$request->date_from, $request->date_to]);
        }
        if ($request->date_from) {
            $q->where('created_at', '>=', $request->date_from);
        }
        $orders = $q->paginate(10);
        $old_data = $request->all();
        return view('backend.orders.index', [
            'old_data' => $old_data,
            'orders' => $orders,
           ]);
    }
}
