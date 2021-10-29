<?php

use App\Http\Controllers\Backend\GroupController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\PagesController;

use Illuminate\Support\Facades\Route;


Route::get('/quick-search', [PagesController::class, 'quickSearch'])->name('quick-search');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/',[PagesController::class,'index'])->name('dashboard');

    Route::resource('products', ItemController::class);

    Route::resource('category-products', GroupController::class);

    Route::get('{module}/filter',[PagesController::class,'filter']);

    Route::post('/delete-many-item',[ItemController::class,'destroyMuch'])->name('items.destroy_many');

    Route::post('delete-many-group',[GroupController::class,'destroyMuch'])->name('groups.destroy_many');

    Route::post('/update-list',[GroupController::class,'saveList'])->name('groups.update_list');



});

require __DIR__ . '/auth.php';
