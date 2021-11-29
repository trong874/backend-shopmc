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
    <div class="card card-custom m-7">
        <div class="card-header">
            <h3 class="card-title">{{@$page_title}}</h3>
        </div>
        <!--begin::Form-->
        <?php
        if (isset($item)) {
            $action = route("$module.update", $item);
        } else {
            $action = route("$module.store");
        }
        ?>
        <form class="form" method="POST" action="{{$action}}">
            @if(isset($item))
                @method('PUT')
            @endif
            @csrf
            <div class="card-body">
                <div class="form-group row mt-3">
                    <label class="col-lg-1 col-form-label text-right">Title</label>
                    <div class="col-lg-3">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                               value="{{@$item->title}}" onkeyup="changeTitleToSlug()" required/>
                        <span class="form-text text-muted">Please enter your Title</span>
                    </div>
                    <input type="hidden" id="slug" name="slug" value="{{@$item->slug}}">
                    <input type="hidden" name="module" value="{{$item->module??$module}}"/>
                    <label class="col-lg-1 col-form-label text-right">Danh mục</label>
                    <div class="col-lg-3">
                        <select class="form-control select2" id="group_id_input" name="group_id[]" multiple="multiple">
                            <optgroup label="Chọn danh mục">
                                @if(isset($item))
                                    {{showOldCategories($groups,$item)}}
                                @else
                                    {{showCategories($groups)}}
                                @endif
                            </optgroup>
                        </select>
                    </div>
                    <label class="col-lg-1 col-form-label text-right">Vị trí</label>
                    <div class="col-lg-3">
                        <input type="text" name="position" class="form-control" placeholder="Vị trí...">
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-3">
                    <label class="col-lg-1 col-form-label text-right">Giá cũ</label>
                    <div class="col-lg-3">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="price_old" placeholder="Giá cũ sản phẩm"
                                   value="{{@$item->price_old}}">
                            <span class="input-group-text" id="basic-addon2">VND</span>
                        </div>
                        <span class="form-text text-muted">Nhập vào giá cũ của sản phẩm</span>
                    </div>
                    <label class="col-lg-1 col-form-label text-right">Giá</label>
                    <div class="col-lg-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Giá sản phẩm" name="price"
                                   value="{{@$item->price}}">
                            <span class="input-group-text" id="basic-addon2">VND</span>
                        </div>
                        <span class="form-text text-muted">Nhập vào giá của sản phẩm</span>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-3">
                    <label class="col-lg-1 col-form-label text-right">Description</label>
                    <div class="col-lg-11">
                        <textarea name="description" id="description_input"
                                  required>{{@$item->description}}</textarea>
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
                    <label class="col-lg-1 col-form-label text-right">Content</label>
                    <div class="col-lg-11">
                        <textarea name="content" id="content_input">{{@$item->content}}</textarea>
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
                               value="{{$item->url??''}}"/>
                        <span class="form-text text-muted">Please enter URL</span>
                    </div>

                    <label class="col-lg-1 col-form-label text-right">Status:</label>
                    <label>hoạt động:</label>
                    <input type="radio" id="checked_true" name="status" value="1"
                           @if(isset($item)) @if($item->status == 1) checked @endif @else checked @endif>
                    <br>
                    <label class="ml-5">không hoạt động:</label>
                    <input type="radio" id="checked_false" name="status" value="0"
                           @if(isset($item)) @if($item->status == 0) checked @endif @endif>

                </div>
                <div class="separator separator-dashed my-10"></div>
                <div class="form-group row mt-3">
                    <div class="col-md-4">
                        <label for="locale">Ảnh đại diện:</label>
                        <div class="">
                            <div class="fileinput ck-parent" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px">

                                    <img class="ck-thumb" id="image_avatar"
                                         src="{{(isset($item->image))? $item->image : asset('/assets/img/empty-photo.jpg')}}"
                                         alt="">
                                    <input class="ck-input" id="image_avatar_input" type="hidden" name="image"
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

                    <div class="col-md-8">
                        <label for="locale">Ảnh mở rộng:</label>
                        <div class="card">
                            <div class="card-body p-3 ck-parent" style="min-height: 148px">
                                <input class="image_input_text" type="hidden" name="image_extension"
                                       value="{{@$item->image_extension}}">
                                <div class="sortable grid">
                                    @if(@$item->image_extension)
                                        @foreach(explode('|',$item->image_extension) as $item)
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
                                         src="{{(isset($item->image_banner))? $item->image_banner : asset('/assets/img/empty-photo.jpg')}}"
                                         alt="">
                                    <input class="ck-input image_banner" id="image_banner_input" type="hidden"
                                           name="image_banner" value="{{@$item->image_banner}}">

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
                                         src="{{(isset($item->image_icon))? $item->image_icon : asset('/assets/img/empty-photo.jpg')}}"
                                         alt="">
                                    <input class="ck-input image_icon" id="image_icon_input" type="hidden"
                                           name="image_icon" value="{{@$item->image_icon}}">

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

                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->
    <?php
    function showOldCategories($categories, $current_data, $parent_id = null, $char = ' ')
    {
        $flag = false;
        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {
                foreach ($current_data->groups as $group) {
                    if ($item->id == $group->id) {
                        echo ' <option value="' . $item->id . '" selected>
                                   ' . $char . $item->title . '
                                </option>';
                        $flag = true;
                    }
                }
                if ($flag) {
                    showOldCategories($categories, $current_data, $item->id, $char . '__');
                } else {
                    echo ' <option value="' . $item->id . '">
                                   ' . $char . $item->title . '
                                </option>';
                    showOldCategories($categories, $current_data, $item->id, $char . '__');
                }
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
@endsection
