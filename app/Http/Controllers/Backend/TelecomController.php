<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Telecom;
use App\Models\Telecom_Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TelecomController extends Controller
{
    public function index()
    {
        $telecoms  = Telecom::with('telecomValue')->paginate(10);
        return view('backend.telecoms.list',['telecoms'=>$telecoms]);
    }

    public function create()
    {
        return view('backend.telecoms.form-data');
    }

    public function store(Request $request)
    {
        Telecom::create($request->all());
        Session::put('message','Tạo mới telecom thành công !');
        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $telecom = Telecom::findOrFail($id);
        return view('backend.telecoms.form-data',['telecom'=>$telecom]);
    }

    public function update(Request $request, $id)
    {
        $telecom = Telecom::findOrFail($id);
        $telecom->update([
            'title'=>$request->title,
            'status'=>$request->status,
            'image'=>$request->image,
        ]);
        Session::put('message','Cập nhật thông tin thành công !');
        return back();
    }

    public function destroy($id)
    {
        Telecom::destroy($id);
        Session::put('message','Đã xoá telecom số '.$id);
        return back();
    }

    public function destroyMuch(Request $request)
    {
        $ids = $request->ids;
        Telecom::whereIn('id', explode(",", $ids))->delete();
        Session::put('message','Đã xoá những telecom '.$ids);
    }

    public function setValue(Request $request,$id)
    {
        Telecom_Value::where('telecom_id',$id)->delete();
        $telecom = Telecom::findOrFail($id);
        $value = $request->all();
        foreach ($value['amount'] as $key => $item){
            Telecom_Value::create([
                'telecom_id'=>$id,
                'telecom_key'=>$telecom->key,
                'amount'=>$value['amount'][$key],
                'ratio_true_amount'=>$value['ratio_true_amount'][$key],
                'ratio_false_amount'=>$value['ratio_false_amount'][$key],
                'agency_ratio_true_amount'=>$value['agency_ratio_true_amount'][$key],
                'agency_ratio_false_amount'=>$value['agency_ratio_false_amount'][$key],
                'status'=>$value['status'][$key],
            ]);
        }
        return back();
    }

    public function getTelecomValue(Request $request)
    {
        $telecom = Telecom::with('telecomValue')->whereId($request->telecom_id)->get();
        $html = view('frontend.component.value_telecom',['telecoms'=>$telecom])->render();
        return response()->json($html);
    }
}
