@extends('backend.layout.default')
@section('content')
    <!--begin::Card-->
    <div class="card card-custom example example-compact m-7">
        <div class="card-header">
            <h3 class="card-title">Create New Group</h3>
        </div>
        @if(isset($message))
        <h4 style="color: red" class="ml-5">*{{$message}}</h4>
        @endif
        <!--begin::Form-->
        <?php
        if (isset($group)){
            $action = route("$module.update",$group);
        }else{
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
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$group->title??null}}"/>
                        <span class="form-text text-muted">Please enter your Title</span>
                    </div>
{{--                    <input type="hidden" id="slug" name="slug" value="{{$group->slug??null}}">--}}
                    <input type="hidden" name="module" value="{{$group->module??$module}}"/>
                    <label class="col-lg-1 col-form-label text-right">Parent ID</label>
                    <div class="col-lg-3">
                        <select class="form-control" name="parent_id" id="parent_id">
                            <option value="">--Không chọn--</option>
                            <?php if (isset($groups) && isset($group)){
                                showOldCategories($groups,$group);
                            }elseif (isset($groups)){
                                showCategories($groups);
                            }
                            ?>
                        </select>
                        <span class="form-text text-muted">Please enter your parent_id</span>
                    </div>
                    <label class="col-lg-1 col-form-label text-right">Ảnh</label>
                    <!-- end: Example Code-->
                    <div class="card card-custom card-collapse col-lg-1" data-card="true" id="kt_card_1">
                        <div class="card-toolbar">
                            <i aria-hidden="true" class="ki ki-close" onclick="deleteImage()" style="padding-top: 6px;margin-left: 85px;"></i>
                        </div>
                        <div class="card-img">
                            <img
                                src="{{$group->image??'https://nicolasmelis.com/wp-content/themes/panama/assets/img/empty/600x600.png'}}"
                                id="image-display" onclick="selectFileWithCKFinder('image-display')"
                                style="height: 100%;width: 100%">
                            <input type="hidden" name="image" id="image_path" value="{{$group->image??''}}">
                        </div>
                    </div>
                </div>
{{--                <div class="separator separator-dashed my-10"></div>--}}

{{--                <div class="form-group row mt-3">--}}
{{--                    <label class="col-lg-1 col-form-label text-right">Description</label>--}}
{{--                    <div class="col-lg-11">--}}
{{--                        <textarea name="description" id="description_input">{{$group->description??''}}</textarea>--}}
{{--                        <script>--}}
{{--                            // Replace the <textarea id="editor1"> with a CKEditor 4--}}
{{--                            // instance, using default configuration.--}}
{{--                            CKEDITOR.replace('description_input');--}}
{{--                        </script>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="separator separator-dashed my-10"></div>--}}

{{--                <div class="form-group row mt-3">--}}
{{--                    <label class="col-lg-1 col-form-label text-right">Content</label>--}}
{{--                    <div class="col-lg-11">--}}
{{--                        <textarea name="content" id="content_input">{{$group->content??''}}</textarea>--}}
{{--                        <script>--}}
{{--                            // Replace the <textarea id="editor1"> with a CKEditor 4--}}
{{--                            // instance, using default configuration.--}}
{{--                            var editor = CKEDITOR.replace('content_input', {--}}
{{--                                filebrowserBrowseUrl: '/ckfinder/ckfinder.html',--}}
{{--                                filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',--}}
{{--                                filebrowserWindowWidth: '1000',--}}
{{--                                filebrowserWindowHeight: '700'--}}
{{--                            });--}}
{{--                            CKFinder.setupCKEditor(editor);--}}
{{--                        </script>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="separator separator-dashed my-10"></div>--}}
                <input type="hidden" name="author_id" value="{{ Auth::user()->id}}">
{{--                <div class="form-group row mt-3">--}}

{{--                    <label class="col-lg-1 col-form-label text-right">URL</label>--}}
{{--                    <div class="col-lg-9">--}}
{{--                        <input type="text" name="url" class="form-control" id="url" placeholder="URL" value="{{$group->url??''}}"/>--}}
{{--                        <span class="form-text text-muted">Please enter URL</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
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
    function showOldCategories($categories,$current_data ,$parent_id = 0, $char = ' ')
    {
        foreach ($categories as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id)
            {
                if ($current_data->id==$item->id){
                    echo '<option value="'.$item->id.'" disabled>'.$item->id.$char.$item->title.'</option>';
                }elseif ($current_data->parent_id==$item->id && $current_data->parent_id != ''){
                    echo '<option value="'.$item->id.'" selected>'.$item->id.$char.$item->title.'</option>';
                }
                else{
                    echo '<option value="'.$item->id.'">'.$item->id.$char.$item->title.'</option>';
                }
                // Xử lý hiển thị chuyên mục


                // Xóa chuyên mục đã lặp
//                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showOldCategories($categories,$current_data, $item->id, $char.'---');
            }
        }
    }
    function showCategories($categories,$parent_id = 0, $char = ' ')
    {
        foreach ($categories as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id)
            {
                echo '<option value="'.$item->id.'">'.$item->id.$char.$item->title.'</option>';
                // Xử lý hiển thị chuyên mục


                // Xóa chuyên mục đã lặp
//                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $item->id, $char.'---');
            }
        }
    }
    ?>
@endsection
@section('scripts')
    <script>
        function deleteImage() {
            document.getElementById('image-display').src = 'https://nicolasmelis.com/wp-content/themes/panama/assets/img/empty/600x600.png';
            document.getElementById('image_path').value = '';
        }

        function selectFileWithCKFinder(elementId) {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(elementId);
                        output.src = file.getUrl();
                        document.getElementById('image_path').value = file.getUrl();
                    });

                    finder.on('file:choose:resizedImage', function (evt) {
                        var output = document.getElementById(elementId);
                        output.value = evt.data.resizedUrl;
                    });
                }
            });
        }
    </script>
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
            document.getElementById('url').value  = "{{url('')}}/tin-tuc/"+ slug;
        }
    </script>
@endsection
