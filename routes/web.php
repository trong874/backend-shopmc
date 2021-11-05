<?php

use App\Http\Controllers\Backend\GroupController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserQTVController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'language'], function () {
    Route::get('/', [\App\Http\Controllers\Frontend\PagesController::class, 'index'])->name('page.index');

    Route::get('/news', [\App\Http\Controllers\Frontend\PagesController::class, 'getNews'])->name('news.index');
    Route::get('/news/{url}', [\App\Http\Controllers\Frontend\PagesController::class, 'getNewsDetail'])->name('news.detail');
    Route::get('/item/{id}', [\App\Http\Controllers\Frontend\PagesController::class, 'getItemDetail'])->name('item.detail');
    Route::get('/category/{id}', [\App\Http\Controllers\Frontend\PagesController::class, 'getCategoryItems'])->name('category.detail');


    Route::get('/detail', [\App\Http\Controllers\Frontend\PagesController::class, 'detail'])->name('page.detail');
    Route::get('/category/{url}', [\App\Http\Controllers\Frontend\PagesController::class, 'getCategory'])->name('page.category');


    Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('/', [PagesController::class, 'index'])->name('dashboard');

        Route::resource('products', ItemController::class);

        Route::resource('news', ItemController::class);

        Route::resource('setting',SettingController::class);

        Route::resource('category-products', GroupController::class);

        Route::resource('category-news', GroupController::class);

        Route::resource('admin-manage',UserQTVController::class);

        Route::resource('user-manage',UserQTVController::class);

        Route::resource('post-manage',UserQTVController::class);

        Route::resource('order-manage',UserQTVController::class);

        Route::get('/{account_type}/filter/item',[UserQTVController::class,'filter'])->name('user_qtv.filter');

        Route::get('{module}/filter/item', [ItemController::class, 'filter'])->name('items.filter');

        Route::post('/delete-many-item', [ItemController::class, 'destroyMuch'])->name('items.destroy_many');

        Route::post('/delete-many-user', [UserQTVController::class, 'destroyMuch'])->name('user_qtv.destroy_many');

        Route::post('delete-many-group', [GroupController::class, 'destroyMuch'])->name('groups.destroy_many');

        Route::post('/update-list', [GroupController::class, 'saveList'])->name('groups.update_list');

        Route::get('set-locale/{locale}', [PagesController::class, 'changeLanguage'])->name('setLocale');

    });
});
require __DIR__ . '/auth.php';
