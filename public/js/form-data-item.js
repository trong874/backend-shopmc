function sortable(){
    return $('.sortable').sortable().bind('sortupdate', function (e, ui) {
        var parent = $(this).closest('.ck-parent');
        var allImageChoose = parent.find(".image-preview-box img");
        var elemInput = parent.find('.image_input_text');
        var allPath = "";
        var len = allImageChoose.length;
        allImageChoose.each(function (index, obj) {
            allPath += $(this).attr('src');

            if (index != len - 1) {
                allPath += "|";
            }
        });
        elemInput.val(allPath);
    });
}

function removeImageExtension(){
   return $('.btn_delete_image').click(function (e) {

        var parent = $(this).closest('.ck-parent');
        var elemInput = parent.find('.image_input_text');
        $(this).closest('.image-preview-box').remove();
        var allImageChoose = parent.find(".image-preview-box img");

        var allPath = "";
        var len = allImageChoose.length;
        allImageChoose.each(function (index, obj) {
            allPath += $(this).attr('src');

            if (index != len - 1) {
                allPath += "|";
            }
        });
        elemInput.val(allPath);
    });
}
$(document).ready(function () {
    sortable();
    removeImageExtension();
})

// Image extenstion choose item
$(".ck-popup-multiply").click(function (e) {
    e.preventDefault();
    var parent = $(this).closest('.ck-parent');
    var elemBoxSort = parent.find('.sortable');
    var elemInput = parent.find('.image_input_text');
    CKFinder.modal({
        chooseFiles: true,
        width: 900,
        height: 600,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var allFiles = evt.data.files;
                var chosenFiles = '';
                var len = allFiles.length;
                allFiles.forEach(function (file, i) {
                    chosenFiles += file.get('url');
                    if (i != len - 1) {
                        chosenFiles += "|";
                    }

                    elemBoxSort.append(`<div class="image-preview-box">
                                            <img src="${file.get('url')}" alt="" data-input="${file.get('url')}">
                                            <a rel="8" class="btn btn-xs  btn-icon btn-danger btn_delete_image" data-toggle="modal" data-target="#deleteModal"><i class="la la-close"></i></a>
                                        </div>`);
                });
                var allImageChoose = parent.find(".image-preview-box img");
                var allPath = "";
                var len = allImageChoose.length;
                allImageChoose.each(function (index, obj) {
                    allPath += $(this).attr('data-input');

                    if (index != len - 1) {
                        allPath += "|";
                    }
                });
                elemInput.val(allPath);

                //set lại event cho các nút xóa đã được thêm
                //remove image extension each item
                removeImageExtension()
                // khoi tao lại sortable sau khi append phần tử mới
                sortable();

            });
        }
    });
});
function deleteImage(elementId) {
    document.getElementById(elementId).src = '/assets/img/empty-photo.jpg';
    document.getElementsByClassName(elementId).value = '';
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
                document.getElementById(elementId + '_input').value = file.getUrl();
            });

            finder.on('file:choose:resizedImage', function (evt) {
                var output = document.getElementById(elementId);
                output.value = evt.data.resizedUrl;
            });
        }
    });
}
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
    document.getElementById('url').value = "{{url('')}}//" + slug;
}
