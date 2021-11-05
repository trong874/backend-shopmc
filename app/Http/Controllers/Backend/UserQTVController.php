<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserQTVController extends Controller
{

    protected $account_type_number = null;

    protected $account_type = null;

    public function __construct(Request $request)
    {
        $this->account_type = $request->segment(2);
        switch ($request->segment(2)){
            case ('admin-manage'):
                $this->account_type_number = 1;
                break;
            case ('user-manage'):
                $this->account_type_number = 2;
                break;
            case ('post-manage'):
                $this->account_type_number = 3;
                break;
            case ('order-manage'):
                $this->account_type_number = 4;
                break;
        };
    }

    public function index()
    {
        $users = User::with(['users:username,id'])
            ->where('account_type',$this->account_type_number)
            ->get([
            'id',
            'username',
            'account_type',
            'image',
            'email',
            'status',
            'created_by',
            'created_at'
        ]);
        return view('backend.users-qtv.index', [
            'users'=>$users,
            'account_type'=>$this->account_type,
            'page_title'=>'Danh sách quản trị viên'
        ]);
    }

    public function create()
    {
        return view('backend.users-qtv.form-data',[
            'action'=>route("$this->account_type.store"),
            'account_type_number'=>$this->account_type_number,
            'page_title'=>'Tạo mới tài khoản'
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users',
            'username' => 'required|min:3|unique:users',
            'phone' => 'required|regex:/^0\d{9}$/|numeric',
            'birtday' => 'required|date',
            'password' => 'required|string|confirmed|min:3'
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
        }
        $data_user = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'fullname'=>$request->fullname,
            'image' => $request->image,
            'username' => $request->username,
            'birtday' => $request->birtday,
            'gender' => $request->gender,
            'status'=>$request->status,
            'phone' => $request->phone,
            'email' => $request->email,
            'account_type'=>$request->account_type,
            'created_by' => $request->created_by,
            'password' => Hash::make($request->password),
        ];
        User::create($data_user);
        return back();
    }

    public function destroy($user)
    {
        User::destroy($user);
        return back();
    }

    public function destroyMuch(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id', explode(",", $ids))->delete();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id,[
            'id',
            'firstname',
            'lastname',
            'fullname',
            'image',
            'username',
            'birtday',
            'gender',
            'account_type',
            'phone',
            'status',
            'email'
        ]);
        return view('backend.users-qtv.form-data', [
            'user'=>$user,
            'action'=>route("$this->account_type.update",$user),
            'account_type_number'=>$this->account_type_number,
            'page_title'=>'Chỉnh sửa thông tin tài khoản '.$user->id
        ]);
    }

    public function update(Request $request , $user)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users,email,'.$user,
            'username' => 'required|min:3|unique:users,username,'.$user,
            'phone' => 'required|regex:/^0\d{9}$/|numeric',
            'birtday' => 'required|date',
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
        }
        $user = User::findOrFail($user);
        $data_user = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'fullname'=>$request->fullname,
            'image' => $request->image,
            'username' => $request->username,
            'birtday' => $request->birtday,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'account_type'=>$request->account_type,
            'status'=>$request->status
        ];
        $user->update($data_user);
        return back();
    }

    public function filter(Request $request)
    {
        $q = User::query();
        $q->where('account_type',$this->account_type_number);
        if ($request->id) {
            $q->where('id', $request->id);
        }
        if ($request->username) {
            $q->where('username', 'LIKE', '%' . $request->username . '%');
        }
        if ($request->acount_type) {
            $q->where('acount_type', $request->acount_type);
        }
        if ($request->email) {
            $q->where('email', $request->email);
        }

        $users = $q->paginate(5);
        $old_data = $request->all();
        return view('backend.users-qtv.index', [
            'old_data'=>$old_data,
            'account_type'=>$this->account_type,
            'page_title' => "Danh sách quản trị viên",
            'users' => $users,
           ]);
    }
}
