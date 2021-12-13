<?php

namespace App\Http\Controllers\Frontend;

use App\Classes\Ma_Hoa\Encryption;
use App\Http\Controllers\Controller;
use App\Models\Charge;
use App\Models\Telecom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChargeController extends Controller
{
    public function index()
    {
        $telecoms = Telecom::with('telecomValue')->get();
        return view('frontend.recharge',['telecoms'=>$telecoms]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $encryption = new Encryption();
        $data = $request->all();

        Charge::create([
            'user_id'=>Auth::user()->id,
            'telecom_key'=>$data['telecom_key'],
            'pin'=>$encryption->Encrypt($data['pin'],config('const_hang_so.key_charge')),
            'serial'=>$data['serial'],
            'declare_amount'=>$data['declare_amount'],
            'status'=> 2,
            'ip'=>$request->ip(),
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


}
