<?php

use App\Models\Cart;
use App\Models\Cart_Item;
use App\Models\Group;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


//getProductClothes
View::composer('frontend.widget.__clothes', function ($view) {
    $group_clotheses = Group::with('item')
        ->where('module','products-group')
        ->where('slug', 'quan-ao')
        ->first([
        'title', 'description', 'image', 'url', 'id', 'slug'
    ]);

    return $view->with('clotheses', $group_clotheses->item);
});


//getProductFlashSale
View::composer('frontend.widget.__flashSale', function ($view) {
    $group_flashSales = Group::with('item')
        ->where('module','products-group')
        ->where('slug', 'flash-sale')
        ->first([
        'title', 'description', 'image', 'url', 'id','slug'
    ]);
    return $view->with('flashSales', $group_flashSales);
});



//getProductToyMinecraft
View::composer('frontend.widget.__minecraft', function ($view) {
    $group_toyMinecrafts = Group::with('item')
        ->where('module', 'products-group')
        ->where('slug','do-choi-minecraft')
        ->first([
        'title', 'description', 'image', 'url', 'id', 'slug'
    ]);
    return $view->with('toyMinecrafts', $group_toyMinecrafts->item);
});



//getProductBalo
View::composer('frontend.widget.__backpacks_handbangs', function ($view) {
    $group_balobag= Group::with('item')
        ->where('module', 'products-group')
        ->where('slug','balo-tui-xach')
        ->first([
        'title', 'description', 'image', 'url','id','slug'
    ]);
    return $view->with('baloBags', $group_balobag->item );
});


//getProductLego
View::composer('frontend.widget.__logoMinecraft', function ($view) {
    $group_legos= Group::with('item')
        ->where('module','products-group')
        ->where('slug', 'lego-minecraft')
        ->first([
        'title', 'description', 'image', 'url','id','slug'
    ]);
    return $view->with('legos', $group_legos->item);
});


//getProducts
View::composer('frontend.home', function ($view) {
    $products= Item::where('module', 'products')
        ->get([
            'title', 'description', 'image', 'url', 'price', 'price_old','id'
        ]);
    return $view->with('products', $products);
});


//getCategory
View::composer('frontend.widget.__category', function ($view) {
    $categories_banner =  Group::where('module', 'category-products')
        ->where('parent_id','!=',null)
        ->orderBy('order','ASC')
        ->get([
            'title','slug','image'
        ]);
    return $view->with('categories_banner', $categories_banner);
});


//getCategoryProduct
View::composer('frontend.category_product', function ($view) {
    $data = Group::where('module', 'category-products')->get([
        'title'
    ]);
    return $view->with('data', $data);
});


//getNews
View::composer('frontend.widget.__news', function ($view) {
    $group_news= Group::with('item')
        ->where('module','news-group')
        ->where('slug', 'tin-tuc-cong-dong')
        ->first([
            'title', 'content', 'description', 'image', 'url','id','slug'
        ]);
    return $view->with('news', $group_news);
});


//getCategoryItems
View::composer('frontend.pages.advertise.__widget.__sliderhome', function ($view) {
    $data = Item::where('id',$view->id)->get([
        'title', 'content', 'description', 'image', 'url','price','price_old','id'
    ]);
    return $view->with('data', $data);
});


//getItemDetail
View::composer('frontend.layout.core.hearder', function ($view) {
    $categories_product = Group::where('module', 'category-products')
        ->where('parent_id',null)
        ->orderBy('order','ASC')
        ->get([
            'title','slug'
        ]);
    return $view->with('categories_product', $categories_product);
});

View::composer('frontend.category_product', function ($view) {
    $categories_p = Group::where('module', 'category-products')
        ->where('parent_id',null)
        ->orderBy('order','ASC')
        ->get([
            'title','slug'
        ]);
    return $view->with('categories_p', $categories_p);
});
View::composer('frontend.pages.product.result-filter', function ($view) {
    $categories_p = Group::where('module', 'category-products')
        ->where('parent_id',null)
        ->orderBy('order','ASC')
        ->get([
            'title','slug'
        ]);
    return $view->with('categories_p', $categories_p);
});

//Cart

View::composer('frontend.layout.core.hearder', function ($view) {
    $user = Auth::user();
    if (empty($user)){
        {
            $data_cart = 0;
        }
    }
    else{
        $cart = Cart::with('items')->where('user_id',$user->id)->first();
        $cart_item_of_cart = Cart_Item::where('cart_id',$cart->id)->get();
        $data_cart = [
            'items'=>$cart->items,
            'total_price'=>Cart_Item::where('cart_id',$cart->id)->sum('price'),
            'cart_items'=>$cart_item_of_cart,
        ];
//        dd($data_cart);
    }


    return $view->with('data_cart', $data_cart);
});
