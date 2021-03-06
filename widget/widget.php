<?php

use App\Models\Cart;
use App\Models\Cart_Item;
use App\Models\Group;
use App\Models\Item;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


//getProductClothes
View::composer('frontend.widget.__clothes', function ($view) {
    $group_clotheses = Group::with('item')
        ->where('module','products-group')
        ->where('slug', 'quan-ao')
        ->get([
            'title', 'description', 'image', 'url', 'id', 'slug'
        ])->map(function($group) {
            $group->setRelation('item', $group->item->take(12));
            return $group;
        });
    return $view->with('data_group', $group_clotheses[0]);
});


//getProductFlashSale
View::composer('frontend.widget.__flashSale', function ($view) {
    $group_flashSales = Group::with('item')
        ->where('module','products-group')
        ->where('slug', 'flash-sale')
        ->get([
            'title', 'description', 'image', 'url', 'id', 'slug'
        ])->map(function($group) {
            $group->setRelation('item', $group->item->take(12));
            return $group;
        });
    return $view->with('flashSales', $group_flashSales[0]);
});



//getProductToyMinecraft
View::composer('frontend.widget.__minecraft', function ($view) {
    $group_toyMinecrafts = Group::with('item')
        ->where('module', 'products-group')
        ->where('slug','do-choi-minecraft')
        ->get([
        'title', 'description', 'image', 'url', 'id', 'slug'
    ])->map(function($group) {
            $group->setRelation('item', $group->item->take(12));
            return $group;
        });
    return $view->with('data_group', $group_toyMinecrafts[0]);
});



//getProductBalo
View::composer('frontend.widget.__backpacks_handbangs', function ($view) {
    $group_balobag= Group::with('item')
        ->where('module', 'products-group')
        ->where('slug','balo-tui-xach')
        ->get([
            'title', 'description', 'image', 'url', 'id', 'slug'
        ])->map(function($group) {
            $group->setRelation('item', $group->item->take(12));
            return $group;
        });
    return $view->with('data_group', $group_balobag[0] );
});


//getProductLego
View::composer('frontend.widget.__logoMinecraft', function ($view) {
    $group_legos= Group::with('item')
        ->where('module','products-group')
        ->where('slug', 'lego-minecraft')
        ->get([
            'title', 'description', 'image', 'url', 'id', 'slug'
        ])->map(function($group) {
            $group->setRelation('item', $group->item->take(12));
            return $group;
        });
    return $view->with('data_group', $group_legos[0]);
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
        ->get([
            'title', 'content', 'description', 'image', 'url','id','slug'
        ])->map(function($group) {
            $group->setRelation('item', $group->item->take(2));
            return $group;
        });
    return $view->with('news', $group_news[0]);
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
            $data['total_price'] = 0;
        }
    }
    else{
        $cart = Cart::with('items')->where('user_id',$user->id)->first();
        if(isset($cart)){
            $cart_item_of_cart = Cart_Item::where('cart_id',$cart->id)->get();
            $data = [
                'items'=>$cart->items,
                'total_price'=>Cart_Item::where('cart_id',$cart->id)->sum('price'),
                'cart_items'=>$cart_item_of_cart,
            ];
        }
        else
        {
            $data['total_price'] = 0;
        }
    }
    return $view->with('data', $data);
});

View::composer('frontend.home',function ($view){
   $slideBanners = Item::whereHas('groups',function($q){
       $q->where('slug','slide-banner');
    })->get();
   return $view->with('slideBanners',$slideBanners);
});

//get setting
View::composer('frontend.layout.master', function ($view) {
    $settings = Setting::all();
    return $view->with('settings', $settings);
});

View::composer('frontend.widget.__sliderhome', function ($view) {
    $settings = Setting::all();
    return $view->with('settings', $settings);
});

View::composer('frontend.news_item', function ($view) {
    $settings = Setting::all();
    return $view->with('settings', $settings);
});

View::composer('frontend.detail-news', function ($view) {
    $settings = Setting::all();
    return $view->with('settings', $settings);
});
