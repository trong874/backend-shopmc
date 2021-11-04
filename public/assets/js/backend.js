function deleteImage() {
    document.getElementById('avatar_image').style.backgroundImage = "url('/media/users/blank.png')";
    document.getElementById('link_avatar_image').value = '';
}

function selectFileWithCKFinder(elementId) {
    let link = document.getElementById('link_avatar_image');
    CKFinder.modal({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var file = evt.data.files.first();
                var output = document.getElementById(elementId);
                output.style.backgroundImage = 'url(' + file.getUrl() + ')';
                link.value = file.getUrl();
            });

            finder.on('file:choose:resizedImage', function (evt) {
                var output = document.getElementById(elementId);
                output.value = evt.data.resizedUrl;
            });
        }
    });
}
function setFullName() {
    let firstname = document.getElementById('firstname');
    let lastname = document.getElementById('lastname');
    document.getElementById('fullname').value = lastname.value +" "+ firstname.value
}

$('#master').on('click', function (e) {
    if ($('#master').is(':checked', true)) {
        $(".sub_chk").prop('checked', true);
    } else {
        $(".sub_chk").prop('checked', false);
    }
});
$('#delete_all').on('click', function (e) {
    var allVals = [];
    $(".sub_chk:checked").each(function () {
        allVals.push($(this).attr('data-id'));
    });


    if (allVals.length <= 0) {
        alert("Chưa chọn mục nào !");
    } else {
        var join_selected_values = allVals.join(",");
        $.ajax({
            url: $(this).data('url'),
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: 'ids=' + join_selected_values,
            success: function (data) {
                location.reload();
                if (data['error']) {
                    alert(data['error']);
                }
            },
            error: function (data) {
                alert(data.responseText);
            }
        });
        $.each(allVals, function (index, value) {
            $('table tr').filter("[data-row-id='" + value + "']").remove();
        });
    }
});
$('#changePaginate').on('input', function () {
    if (e.keyCode == 13) {
        let number = $('#changePaginate').val()
        if (number > 0) {
            $.ajax({
                url: '/quan-ly-sp/' + number + '/paginate',
                method: 'GET',
                success: function () {
                    window.location.href = '/quan-ly-sp/' + number + '/paginate';
                    console.log(number);
                }
            })
        }
    }

}).on('change', function () {
    let number = $('#changePaginate').val()
    if (number > 0 && number !== null) {
        $.ajax({
            url: '/quan-ly-sp/' + number + '/paginate',
            method: 'GET',
            success: function () {
                window.location.href = '/quan-ly-sp/' + number + '/paginate';
                console.log(number)
            }
        })
    }
})

function disabledEventPropagation(event) {
    if (event.stopPropagation) {
        event.stopPropagation();
    } else if (window.event) {
        window.event.cancelBubble = true;
    }
}


