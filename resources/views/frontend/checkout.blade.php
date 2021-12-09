@extends('frontend.layout.master')
@section('content')
    <div class="rh-container full_width">
        <div class="rh-content-wrap clearfix">
            <!-- Main Side -->
            <div class="main-side page clearfix full_width" id="content">
                <div class="rh-post-wrapper">
                    <article class="post mb0">
                        <div class="title"><h1 class="entry-title">Xác nhận – Thanh toán</h1></div>
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form method="post" class="checkout woocommerce-checkout" action="{{route('order.store')}}">
                                @csrf
                                <div class="re_woocheckout_details">
                                    <div class="col2-set" id="customer_details">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Thông tin thanh toán</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required"
                                                       id="billing_last_name_field" data-priority=""><label
                                                            for="billing_last_name" class="">Họ và tên&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper"><input type="text"
                                                                                                     class="input-text "
                                                                                                     name="shipment_details[fullname]"
                                                                                                     id="billing_last_name"
                                                                                                     placeholder="Nhập đầy đủ họ và tên của bạn"
                                                                                                     value=""></span>
                                                    </p>
                                                    <p class="form-row address-field validate-required form-row-wide"
                                                       id="billing_address_1_field" data-priority="50"><label
                                                            for="billing_address_1" class="">Phường xã&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper"><select
                                                                name="shipment_details[ward]"></select>
</span>
                                                    </p>

                                                    <p class="form-row address-field validate-required validate-required form-row-wide"
                                                       id="billing_city_field"
                                                       data-o_class="form-row form-row-wide address-field validate-required validate-required">
                                                        <label for="billing_city" class="">Quận huyện&nbsp;<abbr
                                                                class="required"
                                                                title="bắt buộc">*</abbr></label>
                                                        <select name="shipment_details[district]"></select>
                                                    </p>
                                                    <p class="form-row address-field validate-required validate-state form-row-wide"
                                                       id="billing_state_field" data-priority="80"
                                                       data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                        <label for="billing_state" class="">Tỉnh thành&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label>
                                                        <select name="shipment_details[province]"></select>
                                                    </p>
                                                    <p class="form-row form-row-wide" id="billing_email_field"
                                                       data-priority=""><label for="billing_email" class="">Số nhà ,
                                                            đường <abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper"><input type="text"
                                                                                                     class="input-text "
                                                                                                     name="shipment_details[address]"
                                                                                                     id="billing_email"
                                                                                                     placeholder="Nhập địa chỉ của bạn"
                                                                                                     value=""></span>
                                                    </p></div>
                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                   id="billing_phone_field" data-priority="100"><label
                                                        for="billing_phone" class="">Số điện thoại&nbsp;<abbr
                                                            class="required" title="bắt buộc">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="tel"
                                                                                                 class="input-text "
                                                                                                 name="shipment_details[phone]"
                                                                                                 id="billing_phone"
                                                                                                 placeholder="Nhập số điện thoại"
                                                                                                 value=""
                                                                                                 autocomplete="tel"></span>
                                                </p>
                                            </div>

                                            <div class="woocommerce-account-fields">

                                                <p class="form-row form-row-wide create-account woocommerce-validated">
                                                    <label
                                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                        <input
                                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                            id="createaccount" type="checkbox" name="createaccount"
                                                            value="1"> <span>Để thay đổi thông tin, hãy cập nhật thông tin cá nhân</span>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="re_woocheckout_order">
                                    <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <style>
                                            .top_checkout {
                                                display: flex;
                                                border-bottom: 1px dashed rgba(0, 0, 0, .09);
                                                padding: 5px;
                                            }

                                            .w80 {
                                                width: 63%;
                                            }
                                        </style>
                                        <style>
                                            .top_checkout {
                                                display: flex;
                                                border-bottom: 1px dashed rgba(0, 0, 0, .09);
                                                padding: 5px;
                                            }

                                            .w80 {
                                                width: 63%;
                                            }
                                        </style>
                                        <div class="shop_table woocommerce-checkout-review-order-table"
                                             style="position: static; zoom: 1;">
                                            <div class="top_checkout">
                                                <div class="product-name w80">Sản phẩm</div>
                                                <div class="product-total">Tạm tính</div>
                                            </div>
                                            @foreach($items as $key => $item)
                                                <input type="hidden" name="items[{{$item['item']->id}}]"
                                                       value="{{$item['qty']}}">
                                                <div>
                                                    <div class="cart_item top_checkout">
                                                        <div class="product-name w80">
                                                            {{$item['item']->title}}<strong
                                                                class="product-quantity"> × {{$item['qty']}}</strong>
                                                        </div>
                                                        <div class="product-total">
                                                        <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item['qty'] * $item['item']->price)}}<span
                                                                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div>
                                                <input type="hidden" name="total_price"
                                                       value="{{$data_cart['total_price']}}" id="total_price_input">
                                                <div class="cart-subtotal top_checkout">
                                                    <div class="w80">Tạm tính</div>
                                                    <div><span class="woocommerce-Price-amount amount"><bdi>{{number_format($data_cart['total_price'])}}<span
                                                                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                    </div>
                                                </div>

                                                 <div class="woocommerce-shipping-totals shipping top_checkout">
                                                    <div class="colum_cart w80 d_block">
                                                        <div class="label-gh"> Nhập mã voucher :</div>
                                                    </div>
                                                    <div id="shipping_method" class="woocommerce-shipping-methods">
                                                        <div style="display: flex">
                                                            <input type="text" id="voucher_input" style="margin-right: 6px;
                                                                                      height: 36px;
                                                                                       width: 126px;">
                                                            <button type="button" id="voucher_btn_use" style="height: 36px;
                                                                      width: 56px;
                                                                      border: 1px">Dùng
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="woocommerce-shipping-totals shipping top_checkout">
                                                    <div class="colum_cart w80 d_block">
                                                        <div class="label-gh"> Giảm giá :</div>
                                                    </div>
                                                    <div id="shipping_method" class="woocommerce-shipping-methods">
                                                        <div>
                                                            <label
                                                                for="shipping_method_0_flat_rate1"><span  id="discount_product">0</span> ₫</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="woocommerce-shipping-totals shipping top_checkout">
                                                    <div class="colum_cart w80 d_block">
                                                        <div class="label-gh"> Phí vận chuyển :</div>
                                                    </div>
                                                    <div id="shipping_method" class="woocommerce-shipping-methods">
                                                        <div>
                                                            <label
                                                                for="shipping_method_0_flat_rate1">GHTK: <span
                                                                    class="woocommerce-Price-amount amount"><bdi>0<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></bdi></span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="shipment_details[voucher_code]" id="voucher_params">
                                                <div class="order-total top_checkout">
                                                    <div class="w80">Tổng tiền hàng</div>
                                                    <div>
                                                        <label
                                                            for="shipping_method_0_flat_rate1"><span  id="voucher_price">{{number_format($data_cart['total_price'])}}</span> đ</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span style="color: red" id="alert_error_message">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="payment" class="woocommerce-checkout-payment">
                                            <ul class="wc_payment_methods payment_methods methods">
                                                <li class="wc_payment_method payment_method_cod">
                                                    <input id="payment_method_cod" type="radio" class="input-radio"
                                                           name="payment_method" value="cod" data-order_button_text="">

                                                    <label for="payment_method_cod">
                                                        Trả tiền mặt khi nhận hàng </label>
                                                    <div class="payment_box payment_method_cod" style="display:none;">
                                                        <p>Trả tiền mặt khi giao hàng.</p>
                                                    </div>
                                                </li>
                                                <li class="wc_payment_method payment_method_bacs">
                                                    <input id="payment_method_bacs" type="radio" class="input-radio"
                                                           name="payment_method" value="bacs" checked="checked"
                                                           data-order_button_text="">

                                                    <label for="payment_method_bacs">
                                                        Chuyển khoản ngân hàng </label>
                                                    <div class="payment_box payment_method_bacs">
                                                        <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng
                                                            tôi hoặc nhân thanh toán tại nhà( ưu tiên chuyển khoản ).
                                                            Vui lòng sử dụng ID Đơn hàng của bạn như một phần để tham
                                                            khảo khi thanh toán. Chúng tôi sẽ chuyển hàng tận nhà trong
                                                            thời gian sớm nhất.Xin trân thành cảm ơn.<br>
                                                            <img
                                                                src="http://shopminecraft.vn/wp-content/uploads/2017/02/nganhang.png">
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="form-row place-order">
                                                <noscript>
                                                    Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa,
                                                    hãy đảm bảo bạn nhấp vào <em>Cập nhật giỏ hàng</em> trước khi bạn
                                                    thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu
                                                    bạn không làm như vậy. <br/>
                                                    <button type="submit" class="button alt"
                                                            name="woocommerce_checkout_update_totals"
                                                            value="Cập nhật tổng">Cập nhật tổng
                                                    </button>
                                                </noscript>

                                                <div class="woocommerce-terms-and-conditions-wrapper">
                                                    <div class="woocommerce-privacy-policy-text"></div>
                                                </div>


                                                <button type="submit" class="button alt">Đặt hàng
                                                </button>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
            <!-- /Main Side -->
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('frontend/js/assets/district.js')}}"></script>
    <script>
        var localpicker = new LocalPicker({
            province: 'shipment_details[province]',
            district: 'shipment_details[district]',
            ward: 'shipment_details[ward]',
        });
    </script>
    <script>
        $('#voucher_btn_use').on('click',function (){
           $.ajax({
               url:"{{route('use_voucher')}}",
               type:'post',
               data:{
                   "_token": "{{ csrf_token() }}",
                   "voucher_code":$('#voucher_input').val()
               },
               success:function (res){
                   if (res.error){
                       $('#alert_error_message').html(res.error)
                   }else {
                       $('#alert_error_message').html('')
                       let voucher_discount;

                       if(res.discount_percentage){
                           voucher_discount = {{$data_cart['total_price']}}*(res.discount_percentage/100)
                       }
                       if (res.discount_amount){
                           voucher_discount = res.discount_amount
                       }
                       let total_price = {{$data_cart['total_price']}} - voucher_discount;
                       if (total_price <= 0){
                           total_price = 0;
                       }
                       $('#voucher_params').val(res.code    );
                       $('#discount_product').html('- '+new Intl.NumberFormat().format(voucher_discount));
                       $('#voucher_price').html(new Intl.NumberFormat().format(total_price));
                       $('#total_price_input').val(total_price);
                   }
               }
           })
        });
    </script>
@endsection
