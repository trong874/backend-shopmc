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
        $news = $this->getNews();
        $flashSales = $this->getProductFlashSale();
        $toyMinecrafts = $this->getProductToyMinecraft();
        $baloBags = $this->getProductBalo();
        $legos = $this->getProductLego();
        $clotheses = $this->getProductClothes();
        $categories = $this->getCategory();
        return view('frontend.home', [
            'categories_product' => $this->getCategoryProduct(),
            'news' => $news,
            'flashSales' => $flashSales,
            'toyMinecrafts'=>$toyMinecrafts,
            'baloBags'=> $baloBags,
            'legos' => $legos,
            'clotheses' => $clotheses,
            'categories' => $categories
        ]);
    }

    public function getCategoryProduct()
    {
        return Group::where('module', 'category-products')->get('title');
    }

    public function getProducts()
    {
        return Item::where('module', 'products')
            ->get([
                'title'
            ]);
    }

    public function getProductFlashSale()
    {
        return Item::where('position', 'flashsale')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old'
        ]);

    }

    public function getProductToyMinecraft()
    {
        return Item::where('position', 'toy-minecraft')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old'
        ]);

    }
    public function getProductBalo()
    {
        return Item::where('position', 'balo-bag')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old'
        ]);

    }
    public function getProductLego()
    {
        return Item::where('position', 'lego')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old'
        ]);

    }
    public function getProductClothes()
    {
        return Item::where('position', 'clothes')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old'
        ]);

    }
    public function getCategory()
    {
        return Item::where('position', 'category')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old'
        ]);

    }
    public function getProductDetail($url)
    {
        $productDetail = Item::where('url', $url)->get([
            'title', 'content', 'description', 'image', 'url'
        ]);
        return view('frontend.position.detail-news', ['productDetail' => $productDetail]);
    }

    public function getNews()
    {
        return Item::where('module', 'news')
            ->get([
                'title', 'content', 'description', 'image', 'url'
            ]);
    }

    public function getNewsDetail($url)
    {
        $newDetail = Item::where('url', $url)->get([
            'title', 'content', 'description', 'image', 'url'
        ]);
        return view('frontend.position.detail-news', ['newDetail' => $newDetail]);
    }

    public function category(){
        return view('frontend.category_product');
    }
}
