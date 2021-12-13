@extends('backend.layout.default')
@section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('styles')
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/nestable.css')}}">
    <link rel="stylesheet" href="{{asset('css/product-form.css')}}">
@endsection
@section('content')
    <!--begin::Card-->
    <div class="card card-custom m-7">
        <div class="card-header">
            <h3 class="card-title">Tạo mới telecom</h3>
        </div>
    <!--begin::Form-->
        <?php
        if (isset($telecom)) {
            $action = route("telecoms.update", $telecom);
        } else {
            $action = route("telecoms.store");
        }
        ?>
        <form class="form" method="POST" action="{{$action}}">
            @if(isset($telecom))
                {{ method_field('PUT') }}
            @endif
            @csrf
            <div class="card-body">
                <div class="form-group row mt-3">
                    <label class="col-lg-1 col-form-label text-right">Title</label>
                    <div class="col-lg-3">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                               value="{{@$telecom->title}}"/>
                        <span class="form-text text-muted">Please enter your Title</span>
                    </div>
                    <label class="col-lg-1 col-form-label text-right">Status:</label>
                    <div class="col-lg-3">
                        <span class="switch col-3 switch-outline switch-icon switch-success">
                   <label>
                       <input type="checkbox"
                              value="{{@$telecom->status}}"
                              name="status"
                              onclick="toggle(this);"
                              @if(@$telecom->status == 1)
                              checked
                           @endif>
                          <span></span>

                   </label>
                         <script>
                           function toggle(button) {
                               switch (button.value) {
                                   case "1":
                                       button.value = "0";
                                       break;
                                   case "0":
                                       button.value = "1";
                                       break;
                               }
                           }
                         </script>
                 </span>
                    </div>
                    <div class="col-md-4">
                        <label for="locale">Ảnh đại diện:</label>
                        <div class="">
                            <div class="fileinput ck-parent" data-provides="fileinput">
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

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
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
@endsection
