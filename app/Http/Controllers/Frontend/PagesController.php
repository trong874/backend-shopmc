<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Item;
use App\Models\Setting;
use Illuminate\Http\Request;

class   PagesController extends Controller
{
    public function index()
    {
        $page_title = Setting::whereName('Tiêu đề')->first()->val;
        return view('frontend.home',compact('page_title'));
    }

    public function getNewsItem(){
    $all_news = Item::where('module','news')
        ->get([
        'image','title','slug'
    ]);
    return view('frontend.news_item',['all_news'=>$all_news]);
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
        $categoryDetails = Group::where('module','category-products')
                                 ->where('slug',$slug)->first();
        if ($categoryDetails->parent_id == null){
           $categories = $categoryDetails->groups()->with('item')->get(['id']);
           foreach ($categories as $category){
               foreach ($category->item as $product){
                   array_push($products,$product);
               }
           }
        }else{
            $products = $categoryDetails->item()->get([
                'title','image','price','price_old','slug'
            ]);
        }
        return view('frontend.category_product', compact('categoryDetails','products'));
    }


    public function getItemDetail($slug)
    {
        $itemDetail = Item::where('slug',$slug)
            ->first([
            'title', 'content', 'description', 'image', 'url','price','price_old','slug','id'
        ]);
//        $flashSales = Item::where('position', 'flashsale')->get([
//            'title', 'description', 'image', 'url', 'price', 'price_old','id','slug'
//        ]);
        $related = $itemDetail->groups()->with('item')->where('module','products-group')->first();
        return view('frontend.detail', ['itemDetail' => $itemDetail, 'related'=>$related]);
    }


    public function getNewsDetail($slug)
    {
        $newDetail = Item::where('module','news')
            ->where('slug', $slug)
            ->first([
            'title', 'content', 'description', 'image', 'url','slug','id'
        ]);
        $related = $newDetail->groups()->with('item')->where('module','news-group')->first();
        return view('frontend.detail-news',[ 'newDetail'=> $newDetail, 'related'=> $related ]);
    }

    public function filter(Request $request)
    {
        $keyword = $request->keyword;
        $products = Item::where('module','products')
            ->where('title','LIKE','%'.$keyword.'%')
            ->get();
        return view('frontend.pages.product.result-filter',compact('products','keyword'));
    }

    public function checkout(Request $request)
    {
        $data_cart = $request->all();
        unset($data_cart['_token']);
        $items = [];
        foreach ($data_cart['cart'] as $key => $item){
            array_push($items,Item::findOrFail($key));
        }
        return view('frontend.checkout',[
            'data_cart'=>$data_cart,
            'items'=>$items
        ]);
    }

    public function checkUser()
    {
        $user= Auth::user();
        if(isset($user)){

        }

    }
}
