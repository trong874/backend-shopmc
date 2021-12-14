@extends('backend.layout.default')
@section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/nestable.css')}}">
    <link rel="stylesheet" href="{{asset('css/product-form.css')}}">
@endsection
@section('content')
    <!--begin::Card-->
        <!--begin::Form-->
        <?php
        if (isset($group)) {
            $action = route("$module.update", $group);
        } else {
            $action = route("$module.store");
        }
        ?>
    <form method="POST" action="{{$action}}" id="formMain">
        @if(isset($group))
            @method('PUT')
        @endif
        @csrf
        <div class="row">
            <div class="card col-9">
                <div class="card-body">
                    <div class="form-group row mt-3">
                        <label class="col-lg-1 col-form-label text-right">Tiêu đề</label>
                        <div class="col-lg-11">
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                                   value="{{@$group->title}}" onkeyup="changeTitleToSlug()" required/>
                            <span class="form-text text-muted">Please enter your Title</span>
                        </div>
                        <input type="hidden" id="slug" name="slug" value="{{@$group->slug}}">
                        <input type="hidden" name="module" value="{{$group->module??$module}}"/>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mt-3">
                        <label class="col-lg-1 col-form-label text-right">Danh mục cha</label>
                        <div class="col-lg-6">
                            <select class="form-control" name="group_id">
                                @if(isset($group))
                                    {{showOldCategories($groups,$group)}}
                                @else
                                    {{showCategories($groups)}}
                                @endif
                            </select>
                        </div>
                        <label class="col-lg-1 col-form-label text-right">Vị trí</label>
                        <div class="col-lg-4">
                            <input type="text" name="position" class="form-control" placeholder="Vị trí..." value="{{@$group->position}}">
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mt-3">
                        <label class="col-lg-1 col-form-label text-right">Mô tả</label>
                        <div class="col-lg-11">
                        <textarea name="description" id="description_input"
                                  required>{{@$group->description}}</textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                // instance, using default configuration.
                                var editor = CKEDITOR.replace('description_input', {
                                    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                                    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                    filebrowserWindowWidth: '1000',
                                    filebrowserWindowHeight: '700'
                                });
                                CKFinder.setupCKEditor(editor);
                            </script>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <div class="form-group row mt-3">
                        <label class="col-lg-1 col-form-label text-right">Nội dung</label>
                        <div class="col-lg-11">
                            <textarea name="content" id="content_input">{{@$group->content}}</textarea>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                // instance, using default configuration.
                                var editor = CKEDITOR.replace('content_input', {
                                    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                                    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                    filebrowserWindowWidth: '1000',
                                    filebrowserWindowHeight: '700'
                                });
                                CKFinder.setupCKEditor(editor);
                            </script>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <input type="hidden" name="author_id" value="{{ Auth::user()->id}}">
                    <div class="form-group row mt-3">
                        <label class="col-lg-1 col-form-label text-right">URL</label>
                        <div class="col-lg-3">
                            <input type="text" name="url" class="form-control" id="url" placeholder="URL"
                                   value="{{$group->url??''}}"/>
                            <span class="form-text text-muted">Please enter URL</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row mt-3">
                        <div class="col-md-4">
                            <label for="locale">Ảnh đại diện:</label>
                            <div class="">
                                <div class="fileinput ck-parent" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 100px; height: 100px">

                                        <img class="ck-thumb" id="image_avatar"
                                             src="{{(isset($group->image))? $group->image : asset('/assets/img/empty-photo.jpg')}}"
                                             alt="">
                                        <input class="ck-input" id="image_avatar_input" type="hidden" name="image"
                                               value="{{@$group->image}}">

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

                        <div class="col-md-8">
                            <label for="locale">Ảnh mở rộng:</label>
                            <div class="card">
                                <div class="card-body p-3 ck-parent" style="min-height: 148px">
                                    <input class="image_input_text" type="hidden" name="image_extension"
                                           value="{{@$group->image_extension}}">
                                    <div class="sortable grid">
                                        @if(@$group->image_extension)
                                            @foreach(explode('|',$group->image_extension) as $item)
                                                <div class="image-preview-box">
                                                    <img src="{{$item}}" alt="" data-input="{{$item}}">
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
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-md-4">
                            <label for="locale">Ảnh Banner:</label>
                            <div class="">
                                <div class="fileinput ck-parent" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 100px; height: 100px">

                                        <img class="ck-thumb" id="image_banner"
                                             src="{{(isset($group->image_banner))? $group->image_banner : asset('/assets/img/empty-photo.jpg')}}"
                                             alt="">
                                        <input class="ck-input image_banner" id="image_banner_input" type="hidden"
                                               name="image_banner" value="{{@$group->image_banner}}">

                                    </div>
                                    <div class="button-action">
                                        <button type="button" class="btn btn-outline-success"
                                                onclick="selectFileWithCKFinder('image_banner')"> Thay đổi
                                        </button>
                                        <button type="button" class="btn btn-outline-danger"
                                                onclick="deleteImage('image_banner')"> Xóa
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <label for="locale">Ảnh icon:</label>
                            <div class="">
                                <div class="fileinput ck-parent" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 100px; height: 100px">
                                        <img class="ck-thumb" id="image_icon"
                                             src="{{(isset($group->image_icon))? $group->image_icon : asset('/assets/img/empty-photo.jpg')}}"
                                             alt="">
                                        <input class="ck-input image_icon" id="image_icon_input" type="hidden"
                                               name="image_icon" value="{{@$group->image_icon}}">

                                    </div>
                                    <div class="button-action">
                                        <button type="button" class="btn btn-outline-success"
                                                onclick="selectFileWithCKFinder('image_icon')"> Thay đổi
                                        </button>
                                        <button type="button" class="btn btn-outline-danger"
                                                onclick="deleteImage('image_icon')"> Xóa
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Trạng thái</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <select name="status" class="form-control">
                                <option value="1" @if(@$group)@if($group->status == 1) selected @endif @endif>Hoạt động</option>
                                <option value="0"  @if(@$group)@if($group->status == 0) selected @endif @endif>Ngừng hoạt động</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ngày tạo</label>
                            <?php date_default_timezone_set('Asia/Ho_Chi_Minh') ?>
                            <div class="input-group date" id="kt_datetimepicker_1" data-target-input="nearest">
                                <input type="text" name="created_at" class="form-control datetimepicker-input" value="{{$group->created_at ?? date('d/m/Y H:i:s') }}" data-target="#kt_datetimepicker_1" data-toggle="datetimepicker">
                                <div class="input-group-append" data-target="#kt_datetimepicker_1" data-toggle="datetimepicker">
															<span class="input-group-text">
																<i class="ki ki-calendar"></i>
															</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ngày hết hạn</label>
                            <div class="input-group date" id="kt_datetimepicker_2" data-target-input="nearest">
                                <input type="text" name="ended_at" class="form-control datetimepicker-input" data-target="#kt_datetimepicker_2" value="{{@$group->ended_at}}" placeholder="Ngày hết hạn" data-toggle="datetimepicker">
                                <div class="input-group-append" data-target="#kt_datetimepicker_2" data-toggle="datetimepicker">
															<span class="input-group-text">
																<i class="ki ki-calendar"></i>
															</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Thứ tự</label>
                            <input type="text" name="order" class="form-control" placeholder="Thứ tự" value="{{@$group->order}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--end::Form-->
    <!--end::Card-->
    <?php
    function showOldCategories($categories, $current_data, $parent_id = null, $char = ' ')
    {
        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {
                    if ($item->id == $current_data->parent_id) {
                        echo ' <option value="' . $item->id . '" selected>
                                   ' . $char . $item->title . '
                                </option>';
                    }elseif ($item->id == $current_data->id){
                        echo ' <option value="' . $item->id . '" disabled>
                                   ' . $char . $item->title . ' (đang ở đây)
                                </option>';
                    } else {
                        echo ' <option value="' . $item->id . '">
                                   ' . $char . $item->title . '
                                </option>';
                    }
                // Xử lý hiển thị chuyên mục

                // Xóa chuyên mục đã lặp
//                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showOldCategories($categories, $current_data, $item->id, $char . '__');
        }
    }
        }

    function showCategories($categories, $parent_id = null, $char = ' ')
    {
        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {
                echo '<option value="' . $item->id . '">' . $char . $item->title . '</option>';
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $item->id, $char . '__');
            }
        }
    }
    ?>
@endsection
@section('scripts')
    <script src="{{asset('js/form-data-item.js')}}"></script>
    <script src="{{asset('js/jquery.nestable.js')}}"></script>
    <script src="{{asset('js/jquery.sortable.js')}}"></script>
    <script src="{{asset('js/pages/crud/forms/widgets/select2.js')}}"></script>
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
                '<button type="button" class="btn-shadow-hover font-weight-bold mr-2 btn btn-light-success"> <i class="flaticon2-check-mark"></i>'+'{{@$group ? "Chỉnh sửa" : "Thêm mới"}}'+'</button>'
            )
        })
        $('#submit_form').on('click',function () {
            $('#formMain').submit();
        })
    </script>
@endsection
