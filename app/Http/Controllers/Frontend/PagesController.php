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
        $slides = $this->getSlide();
        return view('frontend.home', [
            'categories_product' => $this->getCategoryProduct(),
            'news' => $news,
            'flashSales' => $flashSales,
            'toyMinecrafts'=>$toyMinecrafts,
            'baloBags'=> $baloBags,
            'legos' => $legos,
            'clotheses' => $clotheses,
            'categories' => $categories,
            'slides' => $slides
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
                'title', 'description', 'image', 'url', 'price', 'price_old','id'
            ]);
    }

    public function getProductFlashSale()
    {
        return Item::where('position', 'flashsale')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);

    }

    public function getProductToyMinecraft()
    {
        return Item::where('position', 'toy-minecraft')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);

    }
    public function getProductBalo()
    {
        return Item::where('position', 'balo-bag')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);

    }
    public function getProductLego()
    {
        return Item::where('position', 'lego')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);

    }
    public function getProductClothes()
    {
        return Item::where('position', 'clothes')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);

    }
    public function getCategory()
    {

        return Item::where('position', 'category')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);

    }
    public function getSlide()
    {

        return Item::where('position', 'slide')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);

    }
    public function getCategoryItems($id)
    {

        $categoryDetails = Item::where('id', $id)->get([
            'title', 'content', 'description', 'image', 'url','price','price_old','id'
        ]);
        return view('frontend.category_product', ['newDetail' => $categoryDetail]);

    }

    public function getItemDetail($id)
    {
        $itemDetail = Item::where('id',$id)->get([
            'title', 'content', 'description', 'image', 'url','price','price_old','id'
        ]);

        $flashSales = Item::where('position', 'flashsale')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);
        return view('frontend.detail', ['itemDetail' => $itemDetail, 'flashSales'=>$flashSales]);
    }

    public function getNews()
    {
        return Item::where('module', 'news')
            ->get([
                'title', 'content', 'description', 'image', 'url','id'
            ]);
    }

    public function getNewsDetail($id)
    {
        $newDetail = Item::where('id', $id)->get([
            'title', 'content', 'description', 'image', 'url','id'
        ]);
        $flashSales =  Item::where('position', 'flashsale')->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);

        return view('frontend.detail-news', ['newDetail' => $newDetail, 'flashSales'=> $flashSales ]);
    }


}
