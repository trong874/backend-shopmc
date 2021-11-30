
function seeMore(group_id,idElement, page,id_button_see_more) {
    $.ajax({
        url: '/see_more_product',
        data: {
            group_id: group_id,
            page: page
        },
        method: 'GET',
        success: function (res) {
            if (res){
                $(idElement).append(res)
            }else {
                $(id_button_see_more).remove();
            }
        }
    })
}
