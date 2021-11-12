@extends('frontend.layout.master')
@section('content')
    <link rel="stylesheet" href="{{asset('frontend/detail/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/detail/css/detail.css')}}">
    <div class="rh-container">
        <div class="rh-content-wrap clearfix">
            <div id="contents-section-woo-area" class="rh-stickysidebar-wrapper">
                <div
                    class="ce_woo_auto_sections ce_woo_blocks main-side rh-sticky-container clearfix full_width woo_default_no_sidebar"
                    id="content">
                    <div class="post">
                        <div id="product-20521"
                             class="post-20521 product type-product status-publish has-post-thumbnail store-mojang product_cat-kiem-cuoc-riu-kim-cuong-minecraft product_tag-shopmcmall first instock sale shipping-taxable purchasable product-type-simple">
                            <div class="ce_woo_block_top_holder">
                                <div class="woo_bl_title flowhidden mb10">
                                    <div class="woocommerce-notices-wrapper"></div>

                                    <h1 class="floatleft tabletblockdisplay pr20 ">{{$itemDetail->title}}</h1>

                                    <div class="woo-top-actions tabletblockdisplay floatright product_row">
                                        <div class="woo-button-actions-area pl5 pb5 pr5">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-grey-bottom clearfix mb15"></div>
                                <div class="product_content">
                                    <div
                                        class="wpsm-one-third wpsm-column-first tabletblockdisplay compare-full-images modulo-lightbox mb30">

                                        <span class="onsale">
                                            <span>- 33%</span></span>
                                        <div>
                                            <figure class="woocommerce-product-gallery__wrapper">
{{--                                                <div--}}
{{--                                                    data-thumb="{{$itemDetail[0]->image}}"--}}
{{--                                                    class="woocommerce-product-gallery__image"--}}
{{--                                                    data-webp-thumb="{{$itemDetail[0]->image}} ">--}}
                                                       <img src="{{$itemDetail->image}}"/>
{{--                                                </div>--}}
                                            </figure>

                                        </div>
                                    </div>
                                    <div class="wpsm-two-third tabletblockdisplay wpsm-column-last mb30">
                                        <div class="rh-flex-center-align woo_top_meta mobileblockdisplay mb10">

                                            <div class="floatleft mr15 disablefloatmobile">

                                                <div class="woocommerce-product-rating">
                                                    <div class="rh_woo_star" title="Rated 5 out of 5"><span
                                                            class="rhwoostar rhwoostar1 active">&#9733;</span><span
                                                            class="rhwoostar rhwoostar2 active">&#9733;</span><span
                                                            class="rhwoostar rhwoostar3 active">&#9733;</span><span
                                                            class="rhwoostar rhwoostar4 active">&#9733;</span><span
                                                            class="rhwoostar rhwoostar5 active">&#9733;</span></div>
                                                    <a href="#reviews" class="woocommerce-review-link"
                                                       rel="nofollow">(<span class="count">2</span> đánh giá của khách
                                                        hàng)</a>
                                                </div>

                                            </div>
                                            <span class="floatleft meta post-meta mt0 mb0 disablefloatmobile">
                                           <span><i class="far fa-eye"> </i>5504</span>  Đã bán
                                        </span>
                                        </div>


                                        <div class="rh-line mb20 mt10"></div>
                                        <div class="rh_post_layout_rev_price_holder position-relative">
                                            <div class="floatright mobileblockdisplay">

                                            </div>

                                            <div class="compare-button-holder">

                                                <p class="price">
                                                    <del><span class="woocommerce-Price-amount amount"><bdi>{{$itemDetail->price_old}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </del>
                                                    <ins><span class="woocommerce-Price-amount amount"><bdi>{{$itemDetail->price}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </ins>
                                                </p>
                                                <div class="woo-button-area mb30">


                                                    <form class="cart">
                                                        <input type="hidden" id="wc_quick_buy_hook_20521"
                                                               value="20521"/>
                                                        <div class="qib-container">
                                                            <button type="button" class="minus qib-button">-</button>
                                                            <div class="quantity buttons_added">
                                                                <label class="screen-reader-text"
                                                                       for="quantity_618097ddb411a">Combo Kiếm - Cup -
                                                                    Rìu - Xẻng Minecraft số lượng</label> <input
                                                                    type="number"
                                                                    id="quantity_618097ddb411a"
                                                                    class="input-text qty text"
                                                                    step="1"
                                                                    min="1"
                                                                    max=""
                                                                    name="quantity"
                                                                    value="1"
                                                                    title="SL"
                                                                    size="4"
                                                                    placeholder=""
                                                                    inputmode="numeric"/>
                                                            </div>
                                                            <button type="button" class="plus qib-button">+</button>
                                                        </div>
                                                        <a id="addToCart" onclick="addToCart({{$itemDetail->id}})" href="javascript:"
                                                         class="btn btn-success">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                        <script>

                                                            function addToCart(id) {
                                                                console.log(id);
                                                                $.ajax({
                                                                    url:'add-cart/'+id,
                                                                    type:'GET',
                                                                    success:function (res) {
                                                                        $("#my_cart").empty();
                                                                        $("#my_cart").html(res);
                                                                        alert('Đã thêm vật phẩm này vào giỏ hàng');
                                                                    }
                                                                });
                                                            }
                                                            $("#my_cart").on("click",".close-item i",function () {

                                                                $.ajax({
                                                                    data: {csrfmiddlewaretoken: window.CSRF_TOKEN},
                                                                    url:'delete-cart/'+$(this).data("id"),
                                                                    type:'GET',
                                                                    success:function (res) {
                                                                        $("#my_cart").empty();
                                                                        $("#my_cart").html(res);
                                                                        alert('Đã xóa vật phẩm khỏi giỏ hàng');
                                                                    }
                                                                });


                                                            })

                                                        </script>
                                                    </form>


                                                    <div class="quick_buy_container quick_buy_20521_container"
                                                         id="quick_buy_20521_container">
                                                        <button id="quick_buy_20521_button"
                                                                data-product-id="20521"
                                                                style="margin-right: -20px;"
                                                                data-product-type="simple"
                                                                class="wcqb-preset preset1 wcqb_button wc_quick_buy_button quick_buy_button quick_buy_button_tag quick_buy_simple quick_buy_simple_button quick_buy_20521 quick_buy_20521_button quick_buy_20521_simple quick_buy_20521_simple_button"
                                                                type="button">Mua Ngay
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="rh-line mt30 mb25"></div>

                                        <div>

                                            <div class="mobilesblockdisplay font90 lineheight20 woo_desc_part">
                                                <div class="woocommerce-product-details__short-description content-detail">

                                                   {!! $itemDetail->content !!}
                                                </div>
                                                <div class="rh_woo_code_zone_content content-detail"><strong><i
                                                            class="far fa-phone-plus "></i> LIÊN HỆ</strong><br>
                                                    <strong style="color: #D50000;">
                                                        <noscript
                                                            data-img="https://shopmc.vn/wp-content/uploads/2019/06/shield-icon.png"
                                                            data-webp="https://shopmc.vn/wp-content/uploads/2019/06/shield-icon.png"
                                                            class="ewww_webp"><img
                                                                src="https://shopmc.vn/wp-content/uploads/2019/06/shield-icon.png"
                                                                data-eio="j"/></noscript>
                                                        48 giờ đổi trả hàng miễn phí</strong><br>
                                                    <p style="color: #0c0f1a">Hotline đặt hàng 0981058326 (Zalo) - 0904568069<br>
                                                        (Miễn phí, 8-21h cả T7, CN)</p>
                                                    <a target=" _blank" rel="" href="https://m.me/shopmcvnnet">
                                                        <noscript
                                                            data-img="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png"
                                                            data-webp="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png"
                                                            class="ewww_webp"><img
                                                                src="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png"
                                                                data-eio="j"/></noscript>
                                                    </a>
                                                    <div class="mxh">
                                                        <noscript
                                                            data-img="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png"
                                                            data-webp="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png"
                                                            class="ewww_webp"><img
                                                                src="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png"
                                                                data-eio="j"/></noscript>
                                                    </div>
                                                    <div class="mxh"><a
                                                            href="https://www.youtube.com/channel/UCnIm8teXECxqCxTW4OSVZ4A">
                                                            <noscript
                                                                data-img="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png"
                                                                data-webp="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png"
                                                                class="ewww_webp"><img
                                                                    src="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png"
                                                                    data-eio="j"/></noscript>
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="top_share_small top_share notextshare">
                                        </div>

                                        <div class="footer_product">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="related-woo-area clearbox flowhidden" id="related-section-woo-area">
                                <div class="rh-container">
                                    <div class="clearfix"></div>
                                    <h3>Flash Sale</h3>
                                    <div class="woocommerce">


                                        <div class="rh-flex-eq-height products  col_wrap_six grid_woo"
                                             data-filterargs='{"post__in":["4447","17068","13006","20499","5305","13003"],"orderby":"post__in","post_type":"product","posts_per_page":6,"tax_query":[{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}],"no_found_rows":1}'
                                             data-template="woogridpart" id="rh_woogrid_1397075271"
                                             data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>
                                            @foreach($flashSales as $flashSale)
                                            <div
                                                class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                <figure class="mb5 mt25 position-relative">
                                                    <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                       href="https://shopmc.vn/san-pham/cup-sat-bat-bia-minecraft/">
                                                        <img
                                                            src="{{$flashSale->image}}"
                                                            data-src="{{$flashSale->image}}"
                                                            alt="{{$flashSale->title}}"
                                                            class="lazyload  ewww_webp_lazy_load" width="300"
                                                            height="300"
                                                            data-src-webp="{{$flashSale->image}}">
                                                    </a>

                                                </figure>

                                                <h3 class=" text-clamp text-clamp-2">
                                                    <a href="{{route('item.detail',$flashSale->slug)}}">{{$flashSale->title}}</a>
                                                </h3>


                                                <div class="border-top pt10 pr10 pl10 pb10">
                                                    <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount amount"><bdi>{{$flashSale->price}}<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                    </div>
                                                    <div class="floatright product-meta">
                                                        <div class="rh_woo_star" title="Rated 5 out of 5"><span
                                                                class="rhwoostar rhwoostar1 active">&#9733;</span><span
                                                                class="rhwoostar rhwoostar2 active">&#9733;</span><span
                                                                class="rhwoostar rhwoostar3 active">&#9733;</span><span
                                                                class="rhwoostar rhwoostar4 active">&#9733;</span><span
                                                                class="rhwoostar rhwoostar5 active">&#9733;</span></div>
                                                        <span class="greycolor postview">Đã bán 1329</span></div>
                                                    <div class="rh-flex-right-align btn_for_grid floatright">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <div class="other-woo-area clearfix">
                                <div class="rh-container">
                                </div>
                            </div>
                            <div class="codinh">
                                <!--div class="float-panel-woo-price rh-flex-center-align font120 rh-flex-right-align">
                                    <!?php woocommerce_template_single_price();?>
                                </div-->
                                <div class="callnow">
                                    <a class="acallnow" href="tel://0981058326">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px"
                                             height="30px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;"
                                             xml:space="preserve">
<g>
    <path d="M23.71,26.301l-1.633-1.633c5.33-5.33,5.33-14.004,0-19.334l1.632-1.633C29.939,9.933,29.939,20.069,23.71,26.301z
		 M20.888,6.521l-1.633,1.631c3.776,3.776,3.776,9.92,0,13.696l1.635,1.631C25.562,18.806,25.562,11.195,20.888,6.521z
		 M17.976,9.434l-1.633,1.634c2.17,2.168,2.17,5.701,0,7.869l1.633,1.633C21.045,17.499,21.045,12.502,17.976,9.434z M1.938,8.445
		c-0.172,2.125-0.271,4.253-0.309,6.383h-0.01C1.62,14.886,1.624,14.942,1.624,15c0,0.059-0.004,0.115-0.005,0.171H1.63
		c0.038,2.13,0.137,4.26,0.309,6.384c0.445,5.56,4.814,9.252,9.098,8.294c0.188-0.038,0.384-0.04,0.561-0.112
		c1.043-0.434,1.907-1.241,2.87-1.837c1.228-0.77-1.419-7.3-3.059-6.457c-0.606,0.316-2.28,1.553-2.953,1.646
		c-0.601,0.084-1.071-0.711-1.131-1.445c-0.157-1.938-0.015-4.414-0.003-6.472h0.003c0-0.055-0.001-0.114-0.001-0.171
		s0.001-0.117,0.001-0.171H7.321c-0.012-2.058-0.154-4.534,0.003-6.472c0.06-0.735,0.53-1.531,1.131-1.445
		c0.673,0.093,2.347,1.33,2.953,1.646c1.64,0.843,4.286-5.689,3.059-6.457c-0.963-0.597-1.827-1.405-2.87-1.837
		c-0.177-0.074-0.374-0.075-0.561-0.113C6.752-0.807,2.384,2.886,1.938,8.445z"/>
</g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g></svg>
                                        <div class="goingay">Gọi Ngay</div>
                                    </a>
                                </div>
                                <div class="product-bottom_space">
                                    <div class="product-bottom_space-real"></div>
                                </div>
                                <div class="dat-mua">
{{--                                    <div class="datngay">--}}
{{--                                        <a href="?add-to-cart=20521" data-product_id="20521" data-product_sku=""--}}
{{--                                           class="button_datngay" add_to_cart_button ajax_add_to_cart>--}}
{{--                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
{{--                                                 width="446.843px" height="446.843px" viewBox="0 0 446.843 446.843"--}}
{{--                                                 style="enable-background:new 0 0 446.843 446.843;"--}}
{{--                                                 xml:space="preserve">--}}
{{--<g>--}}
{{--    <path d="M444.09,93.103c-2.698-3.699-7.006-5.888-11.584-5.888H109.92c-0.625,0-1.249,0.038-1.85,0.119l-13.276-38.27--}}
{{--		c-1.376-3.958-4.406-7.113-8.3-8.646L19.586,14.134c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591--}}
{{--		l60.768,23.872l74.381,214.399c-3.283,1.144-6.065,3.663-7.332,7.187l-21.506,59.739c-1.318,3.663-0.775,7.733,1.468,10.916--}}
{{--		c2.24,3.183,5.883,5.078,9.773,5.078h11.044c-6.844,7.616-11.044,17.646-11.044,28.675c0,23.718,19.298,43.012,43.012,43.012--}}
{{--		s43.012-19.294,43.012-43.012c0-11.029-4.2-21.059-11.044-28.675h93.776c-6.847,7.616-11.048,17.646-11.048,28.675--}}
{{--		c0,23.718,19.294,43.012,43.013,43.012c23.718,0,43.012-19.294,43.012-43.012c0-11.029-4.2-21.059-11.043-28.675h13.433--}}
{{--		c6.599,0,11.947-5.349,11.947-11.948c0-6.599-5.349-11.947-11.947-11.947H143.647l13.319-36.996--}}
{{--		c1.72,0.724,3.578,1.152,5.523,1.152h210.278c6.234,0,11.751-4.027,13.65-9.959l59.739-186.387--}}
{{--		C447.557,101.567,446.788,96.802,444.09,93.103z M169.659,409.807c-10.543,0-19.116-8.573-19.116-19.116--}}
{{--		s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117S180.202,409.807,169.659,409.807z M327.367,409.807--}}
{{--		c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117c10.542,0,19.116,8.574,19.116,19.117--}}
{{--		S337.909,409.807,327.367,409.807z M402.52,148.149h-73.161V115.89h83.499L402.52,148.149z M381.453,213.861h-52.094v-37.038--}}
{{--		h63.967L381.453,213.861z M234.571,213.861v-37.038h66.113v37.038H234.571z M300.684,242.538v31.064h-66.113v-31.064H300.684z--}}
{{--		 M139.115,176.823h66.784v37.038h-53.933L139.115,176.823z M234.571,148.149V115.89h66.113v32.259H234.571z M205.898,115.89v32.259--}}
{{--		h-76.734l-11.191-32.259H205.898z M161.916,242.538h43.982v31.064h-33.206L161.916,242.538z M329.359,273.603v-31.064h42.909--}}
{{--		l-9.955,31.064H329.359z"/>--}}
{{--</g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--                                                <g>--}}
{{--                                                </g>--}}
{{--</svg>--}}
{{--                                            <div>Đặt hàng</div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
                                    <div class="muangay">
                                        <input value="Mua Ngay" type="button" id="quick_buy_20521_button" name=""
                                               data-product-type="simple" data-product-id="20521"
                                               class="muangay_bottom wcqb_button wc_quick_buy_button quick_buy_button quick_buy_simple quick_buy_20521_button quick_buy_20521wc_quick_buy_button">
                                    </div>
                                </div>
                            </div>
                            <!--/div-->
                            <!--/div-->


                        </div>
                        <!-- #product-20521 -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('frontend/detail/js/style.js')}}"></script>
    <script src="{{asset('frontend/detail/js/style2.js')}}"></script>
    <script src="{{asset('frontend/detail/js/style3.js')}}"></script>
    <script>

    </script>

@endsection
