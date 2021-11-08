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
                                   data-url="{{ route('user_qtv.destroy_many') }}">Xóa</p>
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
                <tbody class="data_table" id="tbody_user_qtv">
               @include('backend.users-qtv.tbody')
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
            let url = new URL(link);

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

                $.ajax({
                    url:"{{route('user_qtv.filter',$account_type)}}?"+params,
                    type:'GET',
                    success:function (res) {
                        $('#tbody_user_qtv').html(res)
                    }
                })
            } else {
                console.log(`Your browser ${navigator.appVersion} does not support URLSearchParams`)
            }
        })
    </script>
@endsection
