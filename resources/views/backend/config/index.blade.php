@extends('backend.layout.default')
@section('styles')
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/nestable.css')}}">
    <link rel="stylesheet" href="{{asset('css/product-form.css')}}">
@endsection
@section('content')
    <form action="{{route("setting.update",'-')}}" method="POST">
        @method('PUT')
        @csrf
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Cấu hình hệ thống')}}</h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary font-weight-bolder">
                        <i class="flaticon2-check-mark"></i>{{__('Cập nhật')}}</button>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <div class="example-preview">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">
																	<span class="nav-icon">
																		<i class="flaticon2-chat-1"></i>
																	</span>
                                <span class="nav-text">{{__('Thông tin website')}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile">
																	<span class="nav-icon">
																		<i class="flaticon2-layers-1"></i>
																	</span>
                                <span class="nav-text">Email</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" aria-controls="contact">
																	<span class="nav-icon">
																		<i class="flaticon2-rocket-1"></i>
																	</span>
                                <span class="nav-text">Mã nhúng script</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            @foreach($configs as $item)
                                @if($item->type == 'website_info')
                                    <div class="form-group">
                                        <label>{{__($item->name)}}</label>
                                        <input type="text" name="{{$item->id}}" class="form-control" value="{{$item->val}}" placeholder="{{__($item->name)}}">
                                    </div>
                                @endif
                            @endforeach
                                <div class="form-group row mt-3">

                                    @foreach($configs as $item)
                                        @if(@$item->type == 'logo_website')
                                    <div class="col-md-6">
                                        <label for="locale">{{$item->name}}:</label>
                                        <div class="">
                                            <div class="fileinput ck-parent" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px">

                                                    <img class="ck-thumb" id="image_avatar"
                                                         src="{{(isset($item->image))? $item->image : asset('/frontend/image/empty.jpg')}}"
                                                         alt="">
                                                    <input class="ck-input" id="image_avatar_input" type="hidden" name="{{$item->id}}"
                                                           value="{{@$item->image}}">

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
                                        @endif
                                    @endforeach

                                </div>

                                <div class="form-group row mt-3">
                                    @foreach($configs as $item)
                                        @if(@$item->type == 'image_website_slide')
                                            <div class="col-md-8">
                                                <label for="locale">{{$item->name}}:</label>
                                                <div class="card">
                                                    <div class="card-body p-3 ck-parent" style="min-height: 148px">
                                                        <input class="image_input_text" type="hidden" name="{{$item->id}}"
                                                               value="{{@$item->val}}">
                                                        <div class="sortable grid">
                                                            @if(@$item->val)
                                                                @foreach(explode('|',$item->val) as $img_ex)
                                                                    <div class="image-preview-box">
                                                                        <img src="{{$img_ex}}" alt="" data-input="{{$img_ex}}">
                                                                        <a rel="8" class="btn btn-xs  btn-icon btn-danger btn_delete_image"
                                                                           data-toggle="modal" data-target="#deleteModal"><i
                                                                                class="la la-close"></i></a>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                        <style>

                                                        </style>
                                                        <a class="btn btn-success ck-popup-multiply" style="margin-top: 15px;">
                                                            <i class="la la-cloud-upload-alt"></i> Chọn hình
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Tab content
                            2
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Tab content
                            3
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
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
    <script src="{{asset('js/form-data-item.js')}}"></script>
    <script src="{{asset('js/jquery.nestable.js')}}"></script>
    <script src="{{asset('js/jquery.sortable.js')}}"></script>
@endsection
