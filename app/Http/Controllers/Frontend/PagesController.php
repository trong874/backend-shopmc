<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Item;
use Illuminate\Http\Request;

class   PagesController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function getNewsItem(){
    $category_news = Item::where('position','news')->get([
            'title','image','slug'
        ]);
    return view('frontend.news_item',compact('category_news'));
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
        $categoryDetails = Group::where('module','category-products')
                                 ->where('position','category')
                                 ->where('slug',$slug)->first();

        $products = $categoryDetails->item()->get([
            'title','image','price','price_old','slug'
        ]);
        return view('frontend.category_product', compact('categoryDetails','products'));
    }


    public function getItemDetail($slug)
    {
        $itemDetail = Item::where('slug',$slug)->first([
            'title', 'content', 'description', 'image', 'url','price','price_old','slug'
        ]);
        $flashSales = Item::where('position', 'flashsale')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id','slug'
        ]);
        return view('frontend.detail', ['itemDetail' => $itemDetail, 'flashSales'=>$flashSales]);
    }


    public function getNewsDetail($slug)
    {
        $newDetail = Item::where('slug', $slug)->first([
            'title', 'content', 'description', 'image', 'url','slug'
        ]);

        $flashSales =  Item::where('position', 'flashsale')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id','slug'
        ]);

        return view('frontend.detail-news', ['newDetail' => $newDetail, 'flashSales'=> $flashSales ]);
    }


}
