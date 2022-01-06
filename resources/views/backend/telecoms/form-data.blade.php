@extends('backend.layout.default')
@section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection
@section('styles')
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/nestable.css')}}">
    <link rel="stylesheet" href="{{asset('css/product-form.css')}}">
@endsection
@section('content')
    <!--begin::Card-->
    <!--begin::Form-->
    <?php
    if (isset($telecom)) {
        $action = route("telecoms.update", $telecom);
    } else {
        $action = route("telecoms.store");
    }
    ?>
    <form class="form" method="POST" action="{{$action}}" id="formMain">
        @if(isset($telecom))
            {{ method_field('PUT') }}
        @endif
        @csrf
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            Cài đặt nạp thẻ tự động
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mt-3">
                            <label class="col-lg-2 col-form-label text-right">Tiêu đề</label>
                            <div class="col-lg-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                                       value="{{@$telecom->title}}"/>
                                <span class="form-text text-muted">Please enter your Title</span>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-lg-2 col-form-label text-right">Từ khoá</label>
                            <div class="col-lg-10">
                                <input type="text" name="key" class="form-control" id="title" placeholder="Từ khoá"
                                       value="{{@$telecom->key}}"/>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-lg-2 col-form-label text-right">Ảnh</label>
                            <div class="fileinput ck-parent col-lg-10" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px">

                                    <img class="ck-thumb" id="image_avatar"
                                         src="{{(isset($telecom->image))? $telecom->image : asset('/assets/img/empty-photo.jpg')}}"
                                         alt="">
                                    <input class="ck-input" id="image_avatar_input" type="hidden" name="image"
                                           value="{{@$telecom->image}}">

                                </div>
                                <div class="button-action">
                                    <button type="button" class="btn btn-outline-success"
                                            onclick="selectFileWithCKFinder('image_avatar')"> Thay đổi
                                    </button>
                                    <button type="button" class="btn btn-outline-danger"
                                            onclick="deleteImage('image_avatar')"> Xóa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            Trạng thái
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mt3">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1">Hoạt động</option>
                                <option value="0">Ngưng hoạt động</option>
                            </select>
                        </div>
                        <div class="form-group row mt3">
                            <label>Ngày tạo</label>
                            <?php date_default_timezone_set('Asia/Ho_Chi_Minh') ?>
                            <div class="input-group date" id="kt_datetimepicker_1" data-target-input="nearest">
                                <input type="text" name="created_at" class="form-control datetimepicker-input"
                                       value="{{$telecom->created_at ?? date('d/m/Y H:i:s')}}"
                                       data-target="#kt_datetimepicker_1" data-toggle="datetimepicker">
                                <div class="input-group-append" data-target="#kt_datetimepicker_1"
                                     data-toggle="datetimepicker">
															<span class="input-group-text">
																<i class="ki ki-calendar"></i>
															</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mt3">
                            <label>Thứ tự</label>
                            <input type="text" name="order" class="form-control" value="{{@$telecom->order}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
    <!--end::Card-->
@endsection
@section('scripts')
    <script src="{{asset('js/form-data-item.js')}}"></script>
    <script src="{{asset('js/jquery.sortable.js')}}"></script>
    <script src="{{asset('js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
    @if(Session::has('message'))
        <script>
            $(document).ready(function () {
                Swal.fire({
                    icon: "success",
                    title: "{{Session::pull('message')}}",
                    showConfirmButton: false,
                    timer: 1500
                });
            })
        </script>
    @endif
    <script>
        $(document).ready(function () {
            $('#submit_form').html(
                '<button type="button" class="btn-shadow-hover font-weight-bold mr-2 btn btn-light-success"> <i class="flaticon2-check-mark"></i>'+'{{@$telecom ? "Chỉnh sửa" : "Thêm mới"}}'+'</button>'
            )
        })
        $('#submit_form').on('click',function () {
            $('#formMain').submit();
        })
    </script>
@endsection
