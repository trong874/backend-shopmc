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
                                    <h1 class="floatleft tabletblockdisplay pr20 " style="margin-top: 6px; margin-left: 6px">
                                        {{$itemDetail->title}}</h1>
                                    <div class="woo-top-actions tabletblockdisplay floatright product_row">
                                        <div class="woo-button-actions-area pl5 pb5 pr5">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-grey-bottom clearfix mb15"></div>
                                <div class="product_content" style="margin-bottom: 25px">
                                    <div
                                        class="wpsm-one-third wpsm-column-first tabletblockdisplay compare-full-images modulo-lightbox mb30">
                                        <span class="sale_product">
                                            <span>- 33%</span>
                                        </span>
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
                                                    <a href="#" class="woocommerce-review-link"
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
                                                    <del><span class="woocommerce-Price-amount amount"><bdi>{{number_format($itemDetail->price_old)}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </del>
                                                    <ins style="margin-left: 10px"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($itemDetail->price)}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </ins>
                                                </p>
                                                <?php
                                                $user = Auth::user();
                                                if (empty($user)){
                                                    $login = 'act-rehub-login-popup';
                                                }
                                                else{
                                                    $login = '';
                                                }
                                                ?>
                                                <div class="woo-button-area mb30">
                                                    <form class="cart">
                                                        <input type="hidden" id="wc_quick_buy_hook_20521"
                                                               value="20521"/>
                                                        <div class="qib-container">
                                                            <button type="button" class="minus qib-button">-</button>
                                                            <div class="quantity buttons_added">
                                                                <label class="screen-reader-text"
                                                                       for="quantity">Combo Kiếm - Cup -
                                                                    Rìu - Xẻng Minecraft số lượng</label> <input
                                                                    type="number"
                                                                    id="quantity"
                                                                    class="input-text qty text"
                                                                    step="1"
                                                                    min="1"
                                                                    max="50"
                                                                    name="quantity"
                                                                    value="1"
                                                                    title="SL"
                                                                    size="4"
                                                                    placeholder=""
                                                                    inputmode="numeric"/>
                                                            </div>
                                                            <button type="button" class="plus qib-button">+</button>
                                                        </div>
                                                        <div class="{{$login}}" >
                                                        <a onclick="addToCart({{$itemDetail->id}})" style="vertical-align: top; margin-left: 1em;background-color: #3c6a02" name="add-to-cart" id="addToCart" href="javascript:"

                                                         class="btn btn-success">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                        <script>
                                                            function addToCart(id) {
                                                                $.ajax({
                                                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                                    url:'/add-cart/'+id,
                                                                    type:'POST',
                                                                    data:{
                                                                        quantity:$('#quantity').val(),
                                                                    },
                                                                    success:function (res) {
                                                                        $("#my_cart").empty();
                                                                        $("#my_cart").html(res);
                                                                        alertify.success('Đã thêm vật phẩm này vào giỏ hàng');
                                                                        location.reload();

                                                                    }
                                                                });
                                                            }
                                                        </script>
                                                        </div>
                                                    </form>
                                                    <div class="quick_buy_container quick_buy_20521_container {{$login}}"
                                                         id="quick_buy_20521_container">
                                                        <button id="quick_buy_20521_button"
                                                                data-product-id="20521"
                                                                style="margin-right: -42px; margin-top: 2px"
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
                                                <div class="rh_woo_code_zone_content content-detail" style="padding: 15px 0">
                                                    <strong>
                                                        <i class="far fa-phone-plus "></i> LIÊN HỆ</strong><br>
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
                                                    <div class="mxh">                                                        <noscript
                                                            data-img="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png"
                                                            data-webp="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png"
                                                            class="ewww_webp"><img
                                                                src="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png"
                                                                data-eio="j"/>
                                                        </noscript>
                                                    </div>
                                                    <div class="mxh">
                                                        <noscript
                                                            data-img="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png"
                                                            data-webp="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png"
                                                            class="ewww_webp"><img
                                                                src="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png"
                                                                data-eio="j"/>
                                                        </noscript>
                                                    </div>
                                                    <div class="mxh">
                                                        <a href="https://www.youtube.com/channel/UCnIm8teXECxqCxTW4OSVZ4A">
                                                            <noscript
                                                                data-img="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png"
                                                                data-webp="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png"
                                                                class="ewww_webp"><img
                                                                    src="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png"
                                                                    data-eio="j"/></noscript>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top_share_small top_share notextshare mt-8">
                                        </div>

                                        <div class="footer_product">
                                        </div>
                                    </div>

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

                                    <div class="muangay">
                                        <input value="Mua Ngay" type="button" id="quick_buy_20521_button" name=""
                                               data-product-type="simple" data-product-id="20521"
                                               class="muangay_bottom wcqb_button wc_quick_buy_button quick_buy_button quick_buy_simple quick_buy_20521_button quick_buy_20521wc_quick_buy_button">
                                    </div>
                                </div>
                            </div>
                            <!--/div-->
                            <!--/div-->
                            {{--Description--}}
                            <div class="content-woo-area">
                                <div class="rh-tabletext-block rh-tabletext-wooblock" id="section-description">
                                    <div class="rh-tabletext-block-heading">
                                        <span class="toggle-this-table" style="color: black"></span>
                                        <h4 class="rh-heading-icon">Mô tả</h4>
                                    </div>
                                    <div class="rh-tabletext-block-wrapper">
                                        <style>
                                            .read_more_less {
                                                height: 3rem;
                                                text-align: center;
                                                border-top: 1px solid #eee;
                                                padding-top: 10px;
                                                color: #f7941d;
                                                font-size: 15px;
                                            }
                                            .content_product {
                                                /*display: flow-root;
                                                /*height: 100px;*/
                                            }
                                            .hide_content {
                                                position: absolute;
                                                width: 100%;
                                                height: 100%;
                                                top: 0;
                                                left: 0;
                                                background: -webkit-gradient(linear,left top,left bottom,color-stop(0,transparent),color-stop(70%,hsla(0,0%,100%,0)),color-stop(90%,#fff));
                                                background: linear-gradient(transparent,hsla(0,0%,100%,0) 70%,#fff 90%);
                                            }
                                            .all_des{
                                                max-height: 220px;
                                                overflow: hidden;
                                                position: relative;
                                            }
                                            #readLess{display: none;}
                                            .span_item{
                                                width: 12px;
                                                margin-left: 5px;
                                                fill: black;
                                            }
                                        </style>
                                        <div class="clearfix"></div>
                                        <div class="all_des" style="max-height: none;">
                                            <div class="content_product" style="color: black">
                                                <p >{!! $itemDetail->description !!}</p>
                                            </div>
                                            <div class="hide_content" style="display: none;"></div>
                                        </div>
                                        <div class="read_more_less" id="readMore" style="display: none;color:black">Xem Thêm <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" class="span_item"><path stroke="none" d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path></svg></div>
                                        <div class="read_more_less" id="readLess" style="display: block; color:black">Thu Gọn <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" class="span_item"><path style="color: black;" stroke="none" d="m11 8.5c0-.1 0-.2-.1-.3l-5-6c-.1-.1-.3-.2-.4-.2s-.3.1-.4.2l-5 6c-.2.2-.1.5.1.7s.5.1.7-.1l4.6-5.5 4.6 5.5c.2.2.5.2.7.1.1-.1.2-.3.2-.4z"></path></svg></div>
                                        <div id="fb-root" class=" fb_reset">
                                            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                                <div></div></div></div>
                                        <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v7.0&amp;appId=248671142486453&amp;autoLogAppEvents=1"></script>
                                        <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"
                                             data-href="https://shopmc.com.vn/san-pham/kiem-diamond-minecraft-chinh-hang/"
                                             data-numposts="5" data-width="auto"
                                             fb-xfbml-state="rendere
                                              fb-iframe-plugin-query=" app_id=248671142486453&amp;container_width=1158&amp;height=100&amp;href=https%3A%2F%2Fshopmc.com.vn%2Fsan-pham%2Fkiem-diamond-minecraft-chinh-hang%2F&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v7.0&amp;width=" style="width: 100%;">
                                            <span style="vertical-align: bottom; width: 100%; height: 213px;">
                                                <iframe name="ff88d50379fa7" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v7.0/plugins/comments.php?app_id=248671142486453&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3b660b4c391738%26domain%3Dshopmc.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fshopmc.com.vn%252Ff355224624632c%26relation%3Dparent.parent&amp;container_width=1158&amp;height=100&amp;href=https%3A%2F%2Fshopmc.com.vn%2Fsan-pham%2Fkiem-diamond-minecraft-chinh-hang%2F&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v7.0&amp;width=" style="border: none; visibility: visible; width: 100%; height: 213px;" class=""></iframe></span></div>
                                        <script>
                                            jQuery(function($) {
                                                $(document).ready(function() {
                                                    $("#readMore").click(function(){
                                                        $(".all_des").css('max-height','none');
                                                        $(".hide_content").css('display','none');
                                                        $("#readMore").css('display','none');
                                                        $("#readLess").css('display','block');
                                                    });
                                                    $("#readLess").click(function(){
                                                        $(".all_des").css('max-height','120px');
                                                        $(".hide_content").css('display','block');
                                                        $("#readLess").css('display','none');
                                                        $("#readMore").css('display','block');
                                                    });
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- #product-20521 -->
                        <div class="related-woo-area clearbox flowhidden" id="related-section-woo-area">
                            <div class="rh-container">
                                <div class="clearfix"></div>
                                <h3>Sản phẩm liên quan</h3>
                                <div class="woocommerce" style="margin-top: 6px">
                                    <div class="rh-flex-eq-height products  col_wrap_six grid_woo"
                                         data-filterargs='{"post__in":["4447","17068","13006","20499","5305","13003"],"orderby":"post__in","post_type":"product","posts_per_page":6,"tax_query":[{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}],"no_found_rows":1}'
                                         data-template="woogridpart" id="rh_woogrid_1397075271"
                                         data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>
                                      @if(@$related->item)
                                            @foreach($related->item as $products)
                                                @if($products->id != $itemDetail->id)
                                            <div
                                                class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                <figure class="mb5 mt25 position-relative">
                                                    <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                       href="{{route('item.detail',$products->slug)}}">
                                                        <img
                                                            src="{{$products->image}}"
                                                            data-src="{{$products->image}}"
                                                            alt="{{$products->title}}"
                                                            class="lazyload  ewww_webp_lazy_load" width="300"
                                                            height="300"
                                                            data-src-webp="{{$products->image}}">
                                                    </a>
                                                </figure>

                                                <h3 class=" text-clamp text-clamp-2">
                                                    <a href="{{route('item.detail',$products->slug)}}">{{$products->title}}</a>
                                                </h3>
                                                <div class="border-top pt10 pr10 pl10 pb10">
                                                    <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount amount"><bdi>{{number_format($products->price)}}<span
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
                                                @endif
                                        @endforeach
                                        @else
                                            Không có sản phẩm liên quan !
                                          @endif
                                    </div>

                                </div>

                                <div class="clearfix"></div>

                            </div>
                        </div>

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
