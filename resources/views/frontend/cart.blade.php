@extends('frontend.layout.master')
@section('content')
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>

    <script type='text/javascript' src='https://shopmc.com.vn/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'
            id='jquery-core-js'></script>
    <script type='text/javascript'
            src='https://shopmc.com.vn/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.2.23'
            id='tp-tools-js'></script>
    <script type='text/javascript'
            src='https://shopmc.com.vn/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.2.23'
            id='revmin-js'></script>
    <script type='text/javascript' id='zxcvbn-async-js-extra'>
        /* <![CDATA[ */
        var _zxcvbnSettings = {"src": "https:\/\/shopmc.com.vn\/wp-includes\/js\/zxcvbn.min.js"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://shopmc.com.vn/wp-includes/js/zxcvbn-async.min.js?ver=1.0'
            id='zxcvbn-async-js'></script>
    <script type='text/javascript' id='wt-smart-coupon-js-extra'>
        /* <![CDATA[ */
        var WTSmartCouponOBJ = {"ajaxurl": "https:\/\/shopmc.com.vn\/wp-admin\/admin-ajax.php"};
        /* ]]> */
    </script>
    <script type='text/javascript'
            src='https://shopmc.com.vn/wp-content/plugins/wt-smart-coupons-for-woocommerce/public/js/wt-smart-coupon-public.js?ver=1.2.7'
            id='wt-smart-coupon-js'></script>
    <script type='text/javascript'
            src='https://shopmc.com.vn/wp-content/plugins/woocommerce-google-adwords-conversion-tracking-tag/classes/../js/public/wgact.js?ver=1.8.15'
            id='front-end-scripts-js'></script>
    <link rel='stylesheet' href='{{asset('css/app.css')}}'
          type='text/css' media='all'/>
    <!-- START woopt Pixel Manager -->
    <script>
        let wgact_order_deduplication = true;
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-861272757"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }


        gtag('js', new Date());

    </script>
    <script>
        gtag('config', 'AW-861272757');
    </script>

    <!-- END woopt Pixel Manager -->
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    <meta name="generator"
          content="Powered by Slider Revolution 6.2.23 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
    <noscript>
        <style> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137158853-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-137158853-1');
    </script>
    <!-- Outer Start -->
    <div class="rh-outer-wrap">
        <!-- CONTENT -->
        <div class="rh-container full_width">
            <div class="rh-content-wrap clearfix">
                <!-- Main Side -->
                <div class="main-side page clearfix full_width" id="content">
                    <div class="rh-post-wrapper">
                        <article class="post mb0" id="page-52">
                            <div class="title"><h1 class="entry-title">Giỏ hàng của bạn</h1></div>
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <form class="woocommerce-cart-form" action="{{route('checkout')}}" method="post">
                                    @csrf
                                    <div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                         cellspacing="0">
                                        <div class="top_cart">
                                            <div class="cot1">
                                                <div class="product-remove">&nbsp;</div>
                                                <div class="product-thumbnail">&nbsp;</div>
                                            </div>
                                            <div class="cot2">
                                                <div class="product-name">Sản phẩm</div>
                                                <div class="product-price">Giá</div>
                                                <div class="product-quantity">Số lượng</div>
                                                <div class="product-subtotal">Tạm tính</div>
                                            </div>
                                        </div>
                                        <div class="all_cart">
                                            @foreach($data_cart['items'] as $key => $item)
                                                <div class="woocommerce-cart-form__cart-item cart_item">
                                                    <div class="cot1">
                                                        <div class="product-remove delete-item" onclick="deleteItem(this.id)" id="delete_{{$data_cart['cart_items'][$key]->item_id}}" data-id="{{$data_cart['cart_items'][$key]->item_id}}">
                                                            <a href="#"
                                                               class="remove" aria-label="Xóa sản phẩm này"
                                                               data-product_id="23053" data-product_sku="">
                                                                <svg width="15px" aria-hidden="true" focusable="false"
                                                                     data-prefix="far" data-icon="trash-alt"
                                                                     class="svg-inline--fa fa-trash-alt fa-w-14"
                                                                     role="img"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512">
                                                                    <path fill="currentColor"
                                                                          d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <script>
                                                            function deleteItem(id) {
                                                                let id_delete = '#'+id;
                                                                let str = id ;
                                                                let id_item =str.replace('delete_', '');
                                                                console.log(id_item);
                                                                $.ajax({
                                                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                                    url:'/destroy-cart/'+ id_item,
                                                                    type:'DELETE',
                                                                    success:function (res) {
                                                                        alertify.success("Xóa vật phẩm thành công?");
                                                                        location.reload();
                                                                    }
                                                                });
                                                            }
                                                        </script>
                                                        <div class="product-thumbnail">
                                                            <a href="https://shopmc.com.vn/san-pham/kiem-vang-minecraft/"><img
                                                                    width="380" height="434"
                                                                    src="{{$item->image}}"
                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                    alt="" loading="lazy"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="cot2">
                                                        <div class="product-name" data-title="Sản phẩm">
                                                            <a href="#">{{$item->title}}</a>
                                                        </div>

                                                        <div class="product-price" data-title="Giá">
                                                        <span class="woocommerce-Price-amount amount"><bdi>{{number_format($item->price)}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                        </div>

                                                        <div class="product-quantity" data-title="Số lượng">
                                                            <div class="qib-container">
                                                                <button type="button" class="minus qib-button">-
                                                                </button>
                                                                <div class="quantity buttons_added">
                                                                    <label class="screen-reader-text"
                                                                           for="quantity">
                                                                        {{--                                                                    Kiếm Vàng Minecraft (sword gold) số lượng--}}
                                                                    </label>
                                                                    <input id="{{$data_cart['cart_items'][$key]->item_id}}"
                                                                        type="number"
                                                                        class="input-text qty text"
                                                                        step="1"
                                                                        min="0"
                                                                        max=""
                                                                        name="cart[{{$data_cart['cart_items'][$key]->item_id}}][qty]"
                                                                        value="{{$data_cart['cart_items'][$key]->quantity}}"
                                                                        title="SL"
                                                                        size="4"
                                                                        placeholder=""
                                                                        inputmode="numeric"
                                                                        onchange="changeQuantity(this.id)"
                                                                    />
                                                                </div>
                                                                <button type="button" class="plus qib-button">+</button>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            function changeQuantity(id) {
                                                                console.log(id);
                                                                let total_quantity = '#'+id;
                                                                console.log($(total_quantity).val())
                                                                let item_price = '#item_price_'+id
                                                                $.ajax({
                                                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                                    url:'/change_quantity/'+id,
                                                                    type:'POST',
                                                                    data:{
                                                                        quantity:$(total_quantity).val(),
                                                                    },
                                                                    success:function (res) {
                                                                        console.log(res)
                                                                        $(item_price).html(new Intl.NumberFormat().format(res.cart_items['price']));
                                                                        $(total_quantity).html(new Intl.NumberFormat().format(res.quantity));
                                                                        $('#total_price').html(new Intl.NumberFormat().format(res.total_price));
                                                                        $('#total_price_all').html(new Intl.NumberFormat().format(res.total_price));
                                                                        $('#total_price_input').val(res.total_price);
                                                                        location.reload();
                                                                    }
                                                                });
                                                            }
                                                        </script>
                                                        <div class="product-subtotal tamtinh" data-title="Tạm tính" >
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>
                                                                <span class="woocommerce-Price-currencySymbol" id="item_price_{{$data_cart['cart_items'][$key]->item_id}}">
                                                                    {{number_format($data_cart['cart_items'][$key]->price)}}&#8363;
                                                                </span>
                                                            </bdi>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div>
                                                <div colspan="6" class="actions">

                                                    <div class="coupon">
                                                        <input type="text" name="coupon_code"
                                                               class="input-text input_coupon" id="coupon_code" value=""
                                                               placeholder="Mã ưu đãi"/>
                                                        <button type="submit" class="button" name="apply_coupon"
                                                                value="Áp dụng">Áp dụng
                                                        </button>
                                                    </div>
                                                    <button type="submit" class="button update_cart" name="update_cart"
                                                            value="Cập nhật giỏ hàng">Cập nhật giỏ hàng
                                                    </button>

                                                    <input type="hidden" id="woocommerce-cart-nonce"
                                                           name="woocommerce-cart-nonce" value="55975a86a8"/><input
                                                        type="hidden" name="_wp_http_referer" value="/cart/"/></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-collaterals">
                                        <div class="cart_totals ">
                                            <div class="shop_table shop_table_responsive">
                                                <div class="cart-subtotal">
                                                    <div class="colum_cart">Tạm tính</div>
                                                    <input type="hidden" name="total_price" id="total_price_input" value="{{$data_cart['total_price']}}">
                                                    <div data-title="Tạm tính"><span
                                                            class="woocommerce-Price-amount amount" id="total_price"><bdi>{{number_format($data_cart['total_price'])}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </div>
                                                </div>
                                                <div class="order-total">
                                                    <div class="colum_cart">Tổng</div>
                                                    <div data-title="Tổng">
                                                        <strong>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>&nbsp;<span class="woocommerce-Price-currencySymbol" id="total_price_all">{{number_format($data_cart['total_price'])}} &#8363;</span>
                                                            </bdi>
                                                        </span>
                                                        </strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container" style="margin-left: 500px;">
                                                <div class="row">
                                                    <div class="wc-proceed-to-checkout col">
                                                        <button type="button" class="alt wc-forward"
                                                         style="margin-left: 313px;
                                                         color: white;
                                                         background-color: #63A121;
                                                         border: none;
                                                         padding: 6px 35px;
                                                         display: flex;">
                                                            <a href="{{route('page.index')}}" style="color: white;">Mua tiếp</a>
                                                        </button>
                                                    </div>
                                                    <div class="wc-proceed-to-checkout col">
                                                        <button type="submit" class="checkout-button alt wc-forward" style="margin-left: -127px;">Mua Hàng
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="myModal" class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <div class="voucher_back">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                 data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14"
                                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                      d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                                            </svg>
                                        </div>
                                        <div class="coupon_content">
                                            <div class="wt-mycoupons">
                                                <h4>Hoạt động</h4>
                                            </div>

                                            <div class="wt-used-coupons">
                                                <h4> Hết hạn/ đã dùng</h4>
                                                <div class="wt-single-coupon used-coupon box_coupon">
                                                    <div class="wt-coupon-content">
                                                        <div class="wt-coupon-amount">
                                                            9766 <span class="amount"> 30000 &#8363;</span><span> Cart Discount</span>
                                                        </div>
                                                        <div class="wt-coupon-code"><code> blmc16</code></div>
                                                    </div>
                                                </div>
                                                <div class="wt-single-coupon used-coupon box_coupon">
                                                    <div class="wt-coupon-content">
                                                        <div class="wt-coupon-amount">
                                                            23058 <span class="amount"> 50000 &#8363;</span><span> Cart Discount</span>
                                                        </div>
                                                        <div class="wt-coupon-code"><code> xkhcteqp</code></div>
                                                    </div>
                                                </div>
                                                <div class="wt-single-coupon used-coupon expired">
                                                    <div class="wt-coupon-content">
                                                        <div class="wt-coupon-amount">
                                                            <span
                                                                class="amount"> 0 &#8363;</span><span> Cart Discount</span>
                                                        </div>
                                                        <div class="wt-coupon-code"><code> 784qmrmd</code></div>
                                                        <div class="wt-coupon-expiry">Expired</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="boxcontact">
                                <div style="margin: 0 auto;">
                                    <div class="hotline fl"><a
                                            style="height: 45px; width: 50%; padding: 12px; display: inline-block; color: #fff; font-weight: bold; background: #757575;"
                                            href="#">&lt;&lt; Chọn thêm</a><a
                                            style="height: 45px; width: 50%; padding: 12px; display: inline-block; color: #fff; font-weight: bold;"
                                            href="#">Tiếp tục &gt;&gt;</a></div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- /Main Side -->
            </div>
        </div>
        <!-- /CONTENT -->
        <!-- FOOTER -->
    </div>
    <span class="rehub_scroll" id="topcontrol" data-scrollto="#top_ankor">
        <i class="rhicon rhi-chevron-up"></i>
    </span>
    <div id="rhmobpnlcustom" class="rhhidden">
        <div id="rhmobtoppnl" style="background-color: #ffffff;" class="pr15 pl15 pb15 pt15">
            <div class="text-center">
                <a href="https://shopmc.com.vn">
                    <img id="mobpanelimg" src="https://shopmc.com.vn/wp-content/uploads/2019/02/Minecraft_logo.png" alt="Logo"/>
                </a>
            </div>
        </div>
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117830179-1"></script>
@endsection

