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

                //set l???i event cho c??c n??t x??a ???? ???????c th??m
                //remove image extension each item
                removeImageExtension()
                // khoi tao l???i sortable sau khi append ph???n t??? m???i
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

    //L???y text t??? th??? input title
    title = document.getElementById("title").value;

    //?????i ch??? hoa th??nh ch??? th?????ng
    slug = title.toLowerCase();

    //?????i k?? t??? c?? d???u th??nh kh??ng d???u
    slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
    slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
    slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
    slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
    slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
    slug = slug.replace(/??|???|???|???|???/gi, 'y');
    slug = slug.replace(/??/gi, 'd');
    //X??a c??c k?? t??? ?????t bi???t
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
    slug = slug.replace(/ /gi, "-");
    //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
    //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox c?? id ???slug???
    document.getElementById('slug').value = slug;
    document.getElementById('url').value = window.location.hostname +'/'+ slug;
}
