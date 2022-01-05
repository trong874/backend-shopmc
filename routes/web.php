<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\GroupController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TelecomController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\UserQTVController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ChargeController;
use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'language'], function () {

    Route::get('/',[PagesController::class,'index'])->name('page.index');
    Route::get('/san-pham/{slug}', [PagesController::class, 'getItemDetail'])->name('item.detail');
    Route::get('/tin-tuc/{slug}', [PagesController::class, 'getNewsDetail'])->name('news.detail');
    Route::get('/danh-muc/{slug}', [PagesController::class, 'getCategoryItems'])->name('category.detail');
    Route::get('/tin-tuc', [PagesController::class, 'getNewsItem'])->name('new.list');
    Route::get('/category/{url}', [PagesController::class, 'getCategory'])->name('page.category');
    Route::get('/cart', [CartController::class, 'cart'])->name('item.cart');
    Route::delete('/destroy-cart/{id}', [CartController::class, 'destroyItem'])->name('destroy.cart_item');
    Route::get('/getCart', [CartController::class, 'getCart'])->name('get.cart');
    Route::post('/change_quantity/{id}', [CartController::class, 'changeQuantity'])->name('change_quantity');
    Route::post('/add-cart/{id}', [CartController::class, 'addCart'])->name('add-cart');
    Route::get('/delete-cart/{id}', [CartController::class, 'deleteItemCart'])->name('delete-cart');
    Route::get('tim-kiem',[PagesController::class,'filter'])->name('product.search');
    Route::get('slider',[PagesController::class,'filterPrice'])->name('product.slider');
    Route::prefix('admin')->group(function () {
        Route::resource('user-manage', UserController::class);
    });

    Route::post('order-store',[OrderController::class,'store'])->name('order.store');

    Route::get('/checkout',[PagesController::class,'checkout'])->name('checkout');
    Route::get('/orders',[PagesController::class,'orders'])->name('orders');
    Route::get('/order_detail/{id}',[PagesController::class,'orderDetail'])->name('order.detail');
    Route::get('/see_more_product',[PagesController::class,'seeMoreProduct']);
    Route::get('/profile',[PagesController::class,'profile'])->name('profile.user');

    Route::middleware(['auth'])->group(function (){
        Route::get('order_cancel',[OrderController::class,'orderCancel'])->name('order_cancel');
        Route::post('use-voucher',[OrderController::class,'useVoucher'])->name('use_voucher');
        Route::resource('charge',ChargeController::class);
        Route::post('get_telecom_value',[TelecomController::class,'getTelecomValue'])->name('ajax_get_telecom_value');
    });

    Route::prefix('admin')->middleware(['auth'])->middleware(['auth_qtv'])->group(function () {
        Route::get('/', [\App\Http\Controllers\Backend\PagesController::class, 'index'])->name('dashboard');

        Route::resource('products', ItemController::class);

        Route::resource('news', ItemController::class);

        Route::resource('setting',SettingController::class);

        Route::resource('category-products', CategoryController::class);

        Route::resource('category-news', CategoryController::class);

        Route::resource('products-group',GroupController::class);

        Route::resource('news-group',GroupController::class);

        Route::resource('orders', OrderController::class);

        Route::resource('telecoms', TelecomController::class);

        Route::post('telecom/{id}/set-value',[TelecomController::class,'setValue'])->name('set_value_telecom');

        Route::resource('admin-manage',UserQTVController::class);

        Route::get('/{account_type}/filter/user_qtv',[UserQTVController::class,'filter'])->name('user_qtv.filter');

        Route::get('{module}/filter/item', [ItemController::class, 'filter'])->name('items.filter');

        Route::get('replication-item/{id}',[ItemController::class,'replication'])->name('replication.item');

        Route::post('/delete-many-item', [ItemController::class, 'destroyMuch'])->name('items.destroy_many');

        Route::post('/delete-many-user', [UserQTVController::class, 'destroyMuch'])->name('user_qtv.destroy_many');

        Route::post('delete-many-group', [GroupController::class, 'destroyMuch'])->name('groups.destroy_many');

        Route::post('delete-many-telecom',[TelecomController::class,'destroyMuch'])->name('telecoms.destroy_many');

        Route::post('/update-list', [CategoryController::class, 'saveList'])->name('groups.update_list');

        Route::get('set-locale/{locale}', [\App\Http\Controllers\Backend\PagesController::class, 'changeLanguage'])->name('setLocale');

        Route::get('search-item-group',[ItemController::class,'searchItemGroup'])->name('items.search');

        Route::post('add-item-into-group',[GroupController::class,'addItemIntoGroup'])->name('group.add-item');

        Route::get('detele-item-group',[GroupController::class,'deleteItemInGroup'])->name('group.delete-item');

        Route::get('order-filter',[OrderController::class,'filter'])->name('order.filter');

        Route::get('telecom-filter',[TelecomController::class,'filter'])->name('telecom.filter');
    });

});
require __DIR__ . '/auth.php';
