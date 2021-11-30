<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Item;
use App\Models\Order;
use App\Models\Order_Detail;
use App\Models\Setting;
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
        return view('frontend.news_item', ['all_news' => $all_news]);
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
            $categories = $categoryDetails->groups()->with('item')->get(['id']);
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
        return view('frontend.category_product', compact('categoryDetails', 'products'));
    }


    public function getItemDetail($slug)
    {
        $itemDetail = Item::where('slug', $slug)
            ->first([
                'title', 'content', 'description', 'image', 'url', 'price', 'price_old', 'slug', 'id', 'image_extension'
            ]);
//        $flashSales = Item::where('position', 'flashsale')->get([
//            'title', 'description', 'image', 'url', 'price', 'price_old','id','slug'
//        ]);
        $related = $itemDetail->groups()->with('item')->where('module', 'products-group')->first();
        return view('frontend.detail', ['itemDetail' => $itemDetail, 'related' => $related]);
    }


    public function getNewsDetail($slug)
    {
        $newDetail = Item::where('module', 'news')
            ->where('slug', $slug)
            ->first([
                'title', 'content', 'description', 'image', 'url', 'slug', 'id'
            ]);
        $related = $newDetail->groups()->with('item')->where('module', 'news-group')->first();
        return view('frontend.detail-news', ['newDetail' => $newDetail, 'related' => $related]);
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
        unset($data_cart['_token']);
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
        return view('frontend.order_detail', [
            'order' => $order,
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
        $data = $data->where('status',1)->paginate(5);
        $html = view('frontend/widget/components/load_item',compact('data'))->render();
        return response()->json($html);
    }

}
