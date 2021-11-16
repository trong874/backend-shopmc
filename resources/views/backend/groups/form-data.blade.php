@extends('backend.layout.default')
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
            <h3 class="card-title">Create New Group</h3>
        </div>
        @if(Session::has('message'))
            <h4 style="color: red" class="ml-5">*{{Session::get('message')}}</h4>
            {{Session::forget('message')}}
        @endif
    <!--begin::Form-->
        <?php
        if (isset($group)) {
            $action = route("$module.update", $group);
        } else {
            $action = route("$module.store");
        }
        ?>
        <form class="form" method="POST" action="{{$action}}">
            @if(isset($group))
                {{ method_field('PUT') }}
            @endif
            @csrf
            <div class="card-body">
                <div class="form-group row mt-3">
                    <label class="col-lg-1 col-form-label text-right">Title</label>
                    <div class="col-lg-3">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                               value="{{@$group->title}}" onkeyup="changeTitleToSlug()"/>
                        <span class="form-text text-muted">Please enter your Title</span>
                    </div>
                    <input type="hidden" id="slug" name="slug" value="{{@$group->slug}}">
                    <input type="hidden" name="module" value="{{$group->module??$module}}"/>
                    <label class="col-lg-1 col-form-label text-right">Status:</label>
                    <div class="col-lg-3">
                        <span class="switch col-3 switch-outline switch-icon switch-success">
                   <label>
                       <input type="checkbox"
                              value="{{@$group->status}}"
                              name="status"
                              onclick="toggle(this);"
                              @if(@$group->status == 1)
                              checked
                           @endif>
                          <span></span>

                   </label>
                         <script>
                           function toggle(button) {
                               switch (button.value) {
                                   case "1":
                                       button.value = "";
                                       break;
                                   case "":
                                       button.value = "1";
                                       break;
                               }
                           }
                         </script>
                 </span>
                    </div>
                </div>
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
    <?php
    function showOldCategories($categories, $current_data, $parent_id = 0, $char = ' ')
    {
        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {
                if ($current_data->id == $item->id) {
                    echo '<option value="' . $item->id . '" disabled>' . $item->id . $char . $item->title . '</option>';
                } elseif ($current_data->parent_id == $item->id && $current_data->parent_id != '') {
                    echo '<option value="' . $item->id . '" selected>' . $item->id . $char . $item->title . '</option>';
                } else {
                    echo '<option value="' . $item->id . '">' . $item->id . $char . $item->title . '</option>';
                }
                // Xử lý hiển thị chuyên mục


                // Xóa chuyên mục đã lặp
//                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showOldCategories($categories, $current_data, $item->id, $char . '---');
            }
        }
    }
    function showCategories($categories, $parent_id = 0, $char = ' ')
    {
        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {
                echo '<option value="' . $item->id . '">' . $item->id . $char . $item->title . '</option>';
                // Xử lý hiển thị chuyên mục


                // Xóa chuyên mục đã lặp
//                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $item->id, $char . '---');
            }
        }
    }
    ?>
@endsection
@section('scripts')
    <script src="{{asset('js/pages/crud/forms/widgets/select2.js')}}"></script>
    <script src="{{asset('js/form-data-item.js')}}"></script>
    <script src="{{asset('js/jquery.nestable.js')}}"></script>
    <script src="{{asset('js/jquery.sortable.js')}}"></script>
    <script>
        function changeTitleToSlug() {
            var title, slug;

            //Lấy text từ thẻ input title
            title = document.getElementById("title").value;

            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('slug').value = slug;
            {{--document.getElementById('url').value  = "{{url('')}}/tin-tuc/"+ slug;--}}
        }
    </script>
@endsection
