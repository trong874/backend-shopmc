<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('backend.pages.dashboard', compact('page_title', 'page_description'));
    }

    public function changeLanguage($locale)
    {
        Session::put('locale',$locale);
        return back();
    }

}
