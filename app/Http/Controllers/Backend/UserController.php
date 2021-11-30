<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['users:username,id'])
            ->where('account_type',self::ACCOUNT_TYPE_USER)
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
        return view('backend.users.index', [
            'users'=>$users,
            'account_type'=>'user-manage',
            'page_title'=>'Quản lí danh sách người dùng'
        ]);
    }

    public function create()
    {
        return view('backend.users.form-data',[
            'action'=>route("user-manage.store"),
            'page_title'=>'Tạo mới tài khoản'
        ]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users',
            'username' => 'required|min:3|unique:users',
            'phone' => 'regex:/^0\d{9}$/|numeric',
            'birtday' => 'date',
            'password' => 'required|string|confirmed|min:3'
        ]);
        if ($validator->fails()) {
            Session::put('message_error',$validator->errors()->toArray());
            return back();
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
            'account_type'=>self::ACCOUNT_TYPE_USER,
            'created_by' => $request->created_by,
            'password' => Hash::make($request->password),
        ];
        User::create($data_user);
        Session::put('message','Tạo mới tài khoản thành công !!');
        return back();
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
        return view('backend.users.form-data', [
            'user'=>$user,
            'action'=>route("user-manage.update",$user),
            'page_title'=>'Chỉnh sửa thông tin tài khoản '.$user->id
        ]);
    }

    public function update(Request $request , $user)
    {
        Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users,email,'.$user,
            'username' => 'required|min:3|unique:users,username,'.$user,
            'phone' => 'regex:/^0\d{9}$/|numeric',
            'birtday' => 'date',
        ]);

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
            'status'=>$request->status
        ];
        $user->update($data_user);
        Session::put('message','Cập nhật thông tin thành công !!');
        return back();
    }

    public function destroy($user)
    {
        User::destroy($user);
        return back();
    }
}
