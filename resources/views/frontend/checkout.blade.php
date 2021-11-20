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

                                                <h3>Thông tin đơn hàng</h3>

                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="billing_last_name_field" data-priority=""><label
                                                            for="billing_last_name" class="">Họ và tên: </label>
                                                        {{Auth::user()->fullname}}
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="billing_last_name_field" data-priority=""><label
                                                            for="billing_last_name" class="">Số điện thoại: </label>
                                                        {{Auth::user()->phone}}
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="billing_last_name_field" data-priority=""><label
                                                            for="billing_last_name" class="">Địa chỉ giao hàng: </label>
                                                        {{Auth::user()->address}}
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="billing_last_name_field" data-priority=""><label
                                                            for="billing_last_name" class="">Email: </label>
                                                        {{Auth::user()->email}}
                                                    </p>
                                                </div>

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
                                                <input type="hidden" name="items[{{$item['item']->id}}]" value="{{$item['qty']}}">
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
                                                <input type="hidden" name="total_price" value="{{$data_cart['total_price']}}">
                                                <div class="cart-subtotal top_checkout">
                                                    <div class="w80">Tạm tính</div>
                                                    <div><span class="woocommerce-Price-amount amount"><bdi>{{number_format($data_cart['total_price'])}}<span
                                                                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                    </div>
                                                </div>


                                                <div class="woocommerce-shipping-totals shipping top_checkout">
                                                    <div class="colum_cart w80 d_block">
                                                        <div class="label-gh"> Giao hàng :</div>


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


                                                <div class="order-total top_checkout">
                                                    <div class="w80">Tổng</div>
                                                    <div><strong><span class="woocommerce-Price-amount amount"><bdi>{{number_format($data_cart['total_price'])}}<span
                                                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></strong>
                                                    </div>
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
