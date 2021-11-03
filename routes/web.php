<?php

use App\Http\Controllers\Backend\GroupController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\PagesController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'language'], function () {
    Route::get('/', [\App\Http\Controllers\Frontend\PagesController::class, 'index'])->name('page.index');
    Route::get('/detail', [\App\Http\Controllers\Frontend\PagesController::class, 'detail'])->name('page.detail');
    Route::get('/category', [\App\Http\Controllers\Frontend\PagesController::class, 'category'])->name('page.category');

    Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('/', [PagesController::class, 'index'])->name('dashboard');

        Route::resource('products', ItemController::class);

        Route::resource('news', ItemController::class);

        Route::resource('category-products', GroupController::class);

        Route::resource('category-news', GroupController::class);

        Route::get('{module}/filter/item', [ItemController::class, 'filter'])->name('items.filter');

        Route::post('/delete-many-item', [ItemController::class, 'destroyMuch'])->name('items.destroy_many');

        Route::post('delete-many-group', [GroupController::class, 'destroyMuch'])->name('groups.destroy_many');

        Route::post('/update-list', [GroupController::class, 'saveList'])->name('groups.update_list');

        Route::get('set-locale/{locale}', [PagesController::class, 'changeLanguage'])->name('setLocale');

//        Route::get('user-manage');

    });
});
require __DIR__ . '/auth.php';
