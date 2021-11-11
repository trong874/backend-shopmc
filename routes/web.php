<?php

use App\Http\Controllers\Backend\GroupController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\UserQTVController;
use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'language'], function () {

    Route::get('/',[PagesController::class,'index'])->name('page.index');
//    Route::get('/', [PagesController::class, 'getCategoryProduct'])->name('category.header');
    Route::get('/news/{slug}', [PagesController::class, 'getNewsDetail'])->name('news.detail');
    Route::get('/sanpham/{slug}', [PagesController::class, 'getItemDetail'])->name('item.detail');
    Route::get('/danh-muc/{slug}', [PagesController::class, 'getCategoryItems'])->name('category.detail');
    Route::get('/category_new', [PagesController::class, 'getNewsItem'])->name('new.list');


    Route::get('/detail', [PagesController::class, 'detail'])->name('page.detail');
    Route::get('/category/{url}', [PagesController::class, 'getCategory'])->name('page.category');

    Route::prefix('admin')->group(function () {
        Route::resource('user-manage', UserController::class);
    });
    Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('/', [\App\Http\Controllers\Backend\PagesController::class, 'index'])->name('dashboard');

        Route::resource('products', ItemController::class);

        Route::resource('news', ItemController::class);

        Route::resource('setting',SettingController::class);

        Route::resource('category-products', GroupController::class);

        Route::resource('category-news', GroupController::class);

        Route::resource('admin-manage',UserQTVController::class);

        Route::get('/{account_type}/filter/user_qtv',[UserQTVController::class,'filter'])->name('user_qtv.filter');

        Route::get('{module}/filter/item', [ItemController::class, 'filter'])->name('items.filter');

        Route::post('/delete-many-item', [ItemController::class, 'destroyMuch'])->name('items.destroy_many');

        Route::post('/delete-many-user', [UserQTVController::class, 'destroyMuch'])->name('user_qtv.destroy_many');

        Route::post('delete-many-group', [GroupController::class, 'destroyMuch'])->name('groups.destroy_many');

        Route::post('/update-list', [GroupController::class, 'saveList'])->name('groups.update_list');

        Route::get('set-locale/{locale}', [PagesController::class, 'changeLanguage'])->name('setLocale');

        Route::get('/cache-clear', function() {
            Artisan::call('cache:clear');
            dd("Đã xoá tất cả cache");
        })->name('cache.clear');
    });
});
require __DIR__ . '/auth.php';
