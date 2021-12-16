var localpicker = new LocalPicker({
    province: 'shipment_details[province]',
    district: 'shipment_details[district]',
    ward: 'shipment_details[ward]',
});
let flag = true;
$('#button_submit_form').on('click', function (e) {
    e.preventDefault();
    flag = true;
    let form_data = $('#shipment_details_form').serializeArray();
    form_data.forEach(element => checkNull(element))
    if(form_data.length < 11 ){
        $('#notification_error').html(' <div class="alert alert-danger alert-dismissible" role="alert"> Bạn cần nhập đầy đủ thông tin trước khi đặt hàng ! </div>')
        flag = false;
    }
    if(flag){
        $('#shipment_details_form').submit()
    }
})

function checkNull(element) {
    if (element.value == '' && element.name != 'shipment_details[voucher_code]') {
        $('#notification_error').html(' <div class="alert alert-danger alert-dismissible" role="alert"> Bạn cần nhập đầy đủ thông tin trước khi đặt hàng ! </div>')
        flag = false;
    }
}
