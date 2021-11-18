<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\GroupController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\UserQTVController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'language'], function () {

    Route::get('/',[PagesController::class,'index'])->name('page.index');
    Route::get('/san-pham/{slug}', [PagesController::class, 'getItemDetail'])->name('item.detail');
    Route::get('/tin-tuc/{slug}', [PagesController::class, 'getNewsDetail'])->name('news.detail');
    Route::get('/danh-muc/{slug}', [PagesController::class, 'getCategoryItems'])->name('category.detail');
    Route::get('/tin-tuc', [PagesController::class, 'getNewsItem'])->name('new.list');
    Route::get('/category/{url}', [PagesController::class, 'getCategory'])->name('page.category');
    Route::get('/cart', [CartController::class, 'cart'])->name('item.cart');
    Route::get('/add-cart/{id}', [CartController::class, 'addCart'])->name('add-cart');
    Route::get('/delete-cart/{id}', [CartController::class, 'deleteItemCart'])->name('delete-cart');
    Route::prefix('admin')->group(function () {
        Route::resource('user-manage', UserController::class);
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

        Route::resource('admin-manage',UserQTVController::class);

        Route::get('/{account_type}/filter/user_qtv',[UserQTVController::class,'filter'])->name('user_qtv.filter');

        Route::get('{module}/filter/item', [ItemController::class, 'filter'])->name('items.filter');

        Route::post('/delete-many-item', [ItemController::class, 'destroyMuch'])->name('items.destroy_many');

        Route::post('/delete-many-user', [UserQTVController::class, 'destroyMuch'])->name('user_qtv.destroy_many');

        Route::post('delete-many-group', [GroupController::class, 'destroyMuch'])->name('groups.destroy_many');

        Route::post('/update-list', [CategoryController::class, 'saveList'])->name('groups.update_list');

        Route::get('set-locale/{locale}', [\App\Http\Controllers\Backend\PagesController::class, 'changeLanguage'])->name('setLocale');

        Route::get('search-item-group',[ItemController::class,'searchItemGroup'])->name('items.search');

        Route::post('add-item-into-group',[GroupController::class,'addItemIntoGroup'])->name('group.add-item');

        Route::get('detele-item-group',[GroupController::class,'deleteItemInGroup'])->name('group.delete-item');
    });

});
require __DIR__ . '/auth.php';
