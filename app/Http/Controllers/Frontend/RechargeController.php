<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RechargeController extends Controller
{
    public function recharge(){
        return view('frontend.recharge');
    }

    public function profile(){
        return view('frontend.layout.core.profile');
    }
}
