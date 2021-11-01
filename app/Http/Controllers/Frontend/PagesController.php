<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Item;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('frontend.home',[
            'categories_product'=>$this->getCategoryProduct(),
        ]);
    }

    public function getCategoryProduct()
    {
        return Group::where('module','category-products')->get('title');
    }

    public function getProducts()
    {
        return Item::where('module','products')
                    ->get([
                        'title'
                    ]);
    }
}
