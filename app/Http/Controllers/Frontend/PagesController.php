<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Item;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Setting;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class   PagesController extends Controller
{
    public function index()
    {
        $page_title = Setting::whereName('Tiêu đề')->first()->val;
        return view('frontend.home', compact('page_title'));
    }

    public function getNewsItem()
    {
        $all_news = Item::where('module', 'news')
            ->get([
                'image', 'title', 'slug'
            ]);
        $page_title = 'Trang tin tức';
        $page_description = 'Các tin tức được cập nhật mới hằng ngày';
        return view('frontend.news_item', ['all_news' => $all_news,'page_title'=>$page_title,'page_description'=>$page_description]);
    }

//    public function getProducts()
//    {
//        return Item::where('module', 'products')
//            ->get([
//                'title', 'description', 'image', 'url', 'price', 'price_old','id'
//            ]);
//    }
//    }

    public function getCategoryItems($slug)
    {
        $products = [];
        $categoryDetails = Group::where('module', 'category-products')
            ->where('slug', $slug)->first();
        if ($categoryDetails->parent_id == null) {
            $categories = $categoryDetails->groups()->with('item')->get(['id','title','description']);
            foreach ($categories as $category) {
                foreach ($category->item as $product) {
                    array_push($products, $product);
                }
            }
        } else {
            $products = $categoryDetails->item()->get([
                'title', 'image', 'price', 'price_old', 'slug'
            ]);
        }
        $page_title = $categoryDetails->seo_title;
        $page_description = $categoryDetails->seo_description;
        return view('frontend.category_product', compact('categoryDetails', 'products','page_title','page_description'));
    }


    public function getItemDetail($slug)
    {
        $itemDetail = Item::where('slug', $slug)->first();
        $page_title = $itemDetail->seo_title;
        $page_description = $itemDetail->seo_description;
        $related = $itemDetail->groups()->with('item')
            ->where('module', 'products-group')
            ->get()
            ->map(function($group) {
                $group->setRelation('item', $group->item->take(7));
                return $group;
            });
        return view('frontend.detail', ['itemDetail' => $itemDetail, 'related' => $related,'page_title'=>$page_title,'page_description'=>$page_description]);
    }


    public function getNewsDetail($slug)
    {
        $newDetail = Item::where('module', 'news')
            ->where('slug', $slug)
            ->first();
        $page_title = $newDetail->seo_title;
        $page_description = $newDetail->seo_description;
        $related = $newDetail->groups()->with('item')->where('module', 'news-group')->first();
        return view('frontend.detail-news', ['newDetail' => $newDetail, 'related' => $related,'page_title'=>$page_title,'page_description'=>$page_description]);
    }

    public function filter(Request $request)
    {
        $keyword = $request->keyword;
        $products = Item::where('module', 'products')
            ->where('title', 'LIKE', '%' . $keyword . '%')
            ->get();
        return view('frontend.pages.product.result-filter', compact('products', 'keyword'));
    }

    public function filterPrice(Request $request)
    {
        $products = Item::where('module', 'products')
            ->whereBetween('price', [$request->min_value, $request->max_value])
            ->get();
        return view('frontend.category_product', compact('products'));

    }

    public function checkout(Request $request)
    {
        $data_cart = $request->all();
        $items = [];
        foreach ($data_cart['cart'] as $key => $item) {
            array_push($items, ['item' => Item::findOrFail($key), 'qty' => $item['qty']]);
        }
        return view('frontend.checkout', [
            'data_cart' => $data_cart,
            'items' => $items
        ]);
    }

    public function orders()
    {
        $orders = Order::where('author_id', Auth::user()->id)->get();
        return view('frontend.orders', [
            'orders' => $orders
        ]);

    }

    public function orderDetail($id)
    {
        $order = Order::with('items', 'user')->whereId($id)->first();
        $order_detail = Order_Detail::whereOrder_id($id)->get();
        $shipment_details = json_decode($order->params);
        $voucher = Voucher::whereCode($shipment_details->voucher_code)->first('title');
        return view('frontend.order_detail', [
            'order' => $order,
            'voucher'=>$voucher,
            'shipment_details'=>$shipment_details,
            'order_detail' => $order_detail
        ]);
    }

    public function seeMoreProduct(Request $request)
    {
        $group_id = $request->group_id;
        $data = Item::with(array('groups' => function($query){
            $query->where('module','products-group');
        }));
        $data=$data->whereHas('groups', function ($query) use ($group_id){
            $query->where('group_id',$group_id);
        });
        $data = $data->where('status',1)->paginate(6);
        $html = view('frontend/widget/components/load_item',compact('data'))->render();
        return response()->json($html);
    }

    public function profile(){
        return view('frontend.layout.core.profile');
    }

}
