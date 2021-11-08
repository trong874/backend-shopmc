@extends('backend.layout.default')
@section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <form id="form-filter" action="{{route('user_qtv.filter',$account_type)}}" method="GET" class="card">
        <div class="card-header">
            <span>{{__('Bộ lọc')}}</span>
        </div>
        <div class="row card-body">
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-times"></i></span>
                    </div>
                    <input type="text" name="id" class="form-control" placeholder="ID"
                           value="{{@$old_data['id']}}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-times"></i></span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="{{__('Tên tài khoản')}}" value="{{@$old_data['username']}}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-times"></i></span>
                    </div>
                    <select name="account_type" id="account_type" class="form-control">
                        <option value="">--Kiểu tài khoản--</option>
                        <option value="1">Quản lí quản trị viên</option>
                        <option value="2">Quản lí người dùng</option>
                        <option value="3">Quản lí bài viết</option>
                        <option value="4">Quản lí order</option>
                    </select>
                </div>
            </div>

            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-times"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="{{__('Email')}}" value="{{@$old_data['email']}}">
                </div>
            </div>
            <div class="col-3 mt-3">
                <button class="btn btn-success" type="submit">{{__('Tìm kiếm')}}</button>
                <button type="reset" class="btn btn-outline-warning">{{__('Đặt lại')}}</button>
            </div>
        </div>
    </form>
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon2-favourite text-primary"></i>
                </span>
                <h3 class="card-label">HTML(DOM) Sourced Data</h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <button type="button" class="btn btn-light-danger font-weight-bolder mr-5" data-toggle="modal"
                        data-target="#confirm_delete_all">
                    <i class="far fa-trash-alt"></i>{{__('Xoá lựa chọn')}}
                </button>
                <!--end::Dropdown-->
                <div class="modal fade" id="confirm_delete_all" data-backdrop="static" tabindex="-1" role="dialog"
                     aria-labelledby="staticBackdrop" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                Xác nhận thao tác xóa người dùng đã chọn ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                        data-dismiss="modal">Close
                                </button>
                                <p class="btn btn-danger font-weight-bold" id="delete_all"
                                   data-url="/admin/delete-many-user">Xóa</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--begin::Button-->
                <a href='{{route("$account_type.create")}}' class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>{{__('Thêm bản ghi')}}</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-bordered table-hover table-checkable" id="kt_datatable"
                   style="margin-top: 13px !important">
                <thead>
                <tr>
                    <th><input type="checkbox" id="master"></th>
                    <th>ID</th>
                    <th>{{__('Tên tài khoản')}}</th>
                    <th>{{__('Kiểu tài khoản')}}</th>
                    <th>{{__('Ảnh')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Trạng thái')}}</th>
                    <th>{{__('Được tạo bởi')}}</th>
                    <th>{{__('Thời gian tạo')}}</th>
                    <th>{{__('Thao tác')}}</th>
                </tr>
                </thead>
                <tbody class="data_table">
                @if(isset($users))
                    @foreach($users as $user)
                        <tr>
                            <td><input type="checkbox" class="sub_chk" data-id="{{$user->id}}"></td>
                            <td>{{$user->id}}</td>
                            <td style="text-overflow: Ellipsis;max-width: 200px;max-height: 50px;overflow: hidden;white-space: nowrap;">
                                <a href="#">{{$user->username}}</a></td>
                            <td>
                                @switch($user->account_type)
                                    @case(0)
                                    {{__('Người dùng')}}
                                    @break
                                    @case(1)
                                    {{__('Quản trị viên')}}
                                    @break
                                @endswitch
                            </td>
                            <td><img src="{{$user->image}}" alt="" style="max-height: 50px"></td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if($user->status == 1)
                                    <span class="label label-outline-success label-inline">đang hoạt động</span>
                                @else
                                    <span class="label label-outline-danger label-inline">không hoạt động</span>
                                @endif
                            </td>
                            <td>{{@$user->users->username}}</td>
                            <td>{{$user->created_at}}</td>
                            <td nowrap="nowrap">
                                <!-- Button trigger modal-->
                                <!-- Modal-->
                                <div class="modal fade" id="form_delete-{{$user->id}}" data-backdrop="static"
                                     tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Xác nhận thao tác xóa người dùng {{$user->username}}
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{route("$account_type.destroy",$user)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-light-primary font-weight-bold"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-danger font-weight-bold">Xóa
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route("$account_type.edit",$user)}}">
                                    <i class="flaticon-edit m-2 link_edit"></i>
                                </a>
                                <i class="flaticon2-rubbish-bin-delete-button m-2 link_delete" data-toggle="modal"
                                   data-target="#form_delete-{{$user->id}}"></i>
                                <style>
                                    .link_delete:hover {
                                        color: red;
                                    }

                                    .link_edit:hover {
                                        color: #ffa500;
                                    }
                                </style>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <div class="row" style="float:right">
                {{--                {{ @$items->links('pagination::default') }}--}}
            </div>
            <!--end: Datatable-->
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('assets/js/backend.js')}}"></script>
    <script>
        $('#form-filter').on('submit',function (event) {
            event.preventDefault();
            let param = $('#form-filter').serialize()
            const link = "{{route('user_qtv.filter',$account_type)}}"+'?'+param
            const url = new URL(link);

            let id = url.searchParams.get('id');
            let username = url.searchParams.get('username');
            let account_type = url.searchParams.get('account_type');
            let email = url.searchParams.get('email');

            if (typeof URLSearchParams !== 'undefined') {
                const params = new URLSearchParams(param)
                if(id === ''){
                    params.delete('id')
                }
                if(username === ''){
                    params.delete('username')
                }
                if(account_type === ''){
                    params.delete('account_type')
                }
                if(email === ''){
                    params.delete('email')
                }

                window.location.replace( "{{route('user_qtv.filter',$account_type)}}"+'?'+params)
            } else {
                console.log(`Your browser ${navigator.appVersion} does not support URLSearchParams`)
            }
        })
    </script>
@endsection
