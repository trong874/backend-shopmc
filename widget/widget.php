<?php
use App\Models\Group;
use App\Models\Item;
use Illuminate\Support\Facades\View;


//getProductClothes
View::composer('frontend.widget.__clothes', function ($view) {
    $clotheses = Item::where('position', 'clothes')->get([
        'title', 'description', 'image', 'url', 'price', 'price_old', 'id', 'slug'
    ]);
    return $view->with('clotheses', $clotheses);
});


//getProductFlashSale
View::composer('frontend.widget.__flashSale', function ($view) {
    $flashSales = Item::where('position', 'flashsale')->get([
        'title', 'description', 'image', 'url', 'price', 'price_old', 'id','slug'
    ]);
    return $view->with('flashSales', $flashSales);
});



//getProductToyMinecraft
View::composer('frontend.widget.__minecraft', function ($view) {
    $toyMinecrafts = Item::where('position', 'toy-minecraft')->get([
        'title', 'description', 'image', 'url', 'price', 'price_old', 'id', 'slug'
    ]);
    return $view->with('toyMinecrafts', $toyMinecrafts);
});



//getProductBalo
View::composer('frontend.widget.__backpacks_handbangs', function ($view) {
    $baloBags= Item::where('position', 'balo-bag')->get([
        'title', 'description', 'image', 'url', 'price', 'price_old','id','slug'
    ]);
    return $view->with('baloBags', $baloBags);
});


//getProductLego
View::composer('frontend.widget.__logoMinecraft', function ($view) {
    $legos= Item::where('position', 'lego')->get([
        'title', 'description', 'image', 'url', 'price', 'price_old','id','slug'
    ]);
    return $view->with('legos', $legos);
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
    $categories_banner =  Group::where('position','category')->get([
         'title', 'image','slug'
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
    $news= Item::where('position', 'news')
        ->get([
            'title', 'content', 'description', 'image', 'url','id','slug'
        ]);
    return $view->with('news', $news);
});


//getCategoryItems
View::composer('frontend.pages.advertise.__widget.__sliderhome', function ($view) {
    $data = Item::where('id',$view->id)->get([
        'title', 'content', 'description', 'image', 'url','price','price_old','id'
    ]);
    return $view->with('data', $data);
});


////getItemDetail
View::composer('frontend.home', function ($view) {
    $categories_product = Group::where('module', 'category-products')
           ->where('position','category_header')
           ->get([
          'title'
      ]);
    return $view->with('categories_product', $categories_product);

});





