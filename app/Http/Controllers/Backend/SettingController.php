<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $configs = Setting::all();
        return view('backend.config.index',
            [
                'configs'=>$configs,
                'page_title'=>'Cấu hình chung'
            ]);
    }

    public function update(Request $request)
    {
        $configs = $request->all();
        foreach ($configs as $key => $item){
            if ($key == '_method'||$key == '_token'){
                continue;
            }
            $config = Setting::where('id',$key)->first();
            $config->update(['val'=>$item]);
        }

        return back();
    }
}
