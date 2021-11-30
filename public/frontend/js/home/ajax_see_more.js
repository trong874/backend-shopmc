
function seeMore(group_id,idElement, page) {
    $.ajax({
        url: '/see_more_product',
        data: {
            group_id: group_id,
            page: page
        },
        method: 'GET',
        success: function (res) {
            $(idElement).append(res)
            page++;
        }
    })
}
