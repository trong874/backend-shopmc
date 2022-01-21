@extends('frontend.layout.master')
@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=458273852376116&autoLogAppEvents=1" nonce="ytpfLwrg"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <div class="rh-container">
        <div class="rh-content-wrap clearfix">
            <div id="contents-section-woo-area" class="rh-stickysidebar-wrapper">
                <div
                    class="ce_woo_auto_sections ce_woo_blocks main-side rh-sticky-container clearfix full_width woo_default_no_sidebar"
                    id="content">
                    <div class="post">
                        <nav class="woocommerce-breadcrumb"><a href="/">Trang chủ</a><span
                                class="delimiter"><i class="rhicon rhi-angle-right"></i></span><a
                                href="https://shopmc.com.vn/danh-muc/kiem-cuoc-riu-minecraft/">{{$itemDetail->title}}</a>
                        </nav>
                        <div id="product-8426"
                             class="post-8426 product type-product status-publish has-post-thumbnail store-mojang product_cat-kiem-cuoc-riu-minecraft first instock sale shipping-taxable purchasable product-type-simple">
                            <div class="ce_woo_block_top_holder">
                                <div class="woo_bl_title flowhidden mb10">
                                    <div class="woocommerce-notices-wrapper"></div>

                                    <h1 class="floatleft tabletblockdisplay pr20 "
                                        style="margin: 6px 0px 6px 6px">{{$itemDetail->title}}</h1>

                                    <div class="woo-top-actions tabletblockdisplay floatright product_row">
                                        <div class="woo-button-actions-area pl5 pb5 pr5">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-grey-bottom clearfix mb15"></div>
                                <div class="product_content">
                                    <div
                                        class="wpsm-one-third wpsm-column-first tabletblockdisplay compare-full-images modulo-lightbox mb30">
                                        <div class="product__carousel">
                                            <!-- Swiper and EasyZoom plugins start -->
                                            <div class="swiper-container gallery-top">
                                                <div class="swiper-wrapper">
                                                    @foreach(explode("|",$itemDetail->image_extension) as $item)
                                                        <div class="swiper-slide easyzoom easyzoom--overlay">
                                                            <a href="{{$item}}">
                                                                <img src="{{$item}}?raw=true" alt=""/>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next swiper-button-white"></div>
                                                <div class="swiper-button-prev swiper-button-white"></div>
                                            </div>
                                            <div class="swiper-container gallery-thumbs">
                                                <div class="swiper-wrapper">
                                                    @foreach(explode("|",$itemDetail->image_extension) as $item)
                                                        <div class="swiper-slide">
                                                            <img src="{{$item}}?raw=true" alt="">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- Swiper and EasyZoom plugins end -->
                                        </div>
                                        <script>
                                            //changeImage
                                            // product Gallery and Zoom

                                            // activation carousel plugin
                                            var galleryThumbs = new Swiper('.gallery-thumbs', {
                                                spaceBetween: 5,
                                                freeMode: true,
                                                watchSlidesVisibility: true,
                                                watchSlidesProgress: true,
                                                breakpoints: {
                                                    0: {
                                                        slidesPerView: 3,
                                                    },
                                                    992: {
                                                        slidesPerView: 4,
                                                    },
                                                }
                                            });
                                            var galleryTop = new Swiper('.gallery-top', {
                                                spaceBetween: 10,
                                                navigation: {
                                                    nextEl: '.swiper-button-next',
                                                    prevEl: '.swiper-button-prev',
                                                },
                                                thumbs: {
                                                    swiper: galleryThumbs
                                                },
                                            });
                                            // change carousel item height
                                            // gallery-top
                                            let productCarouselTopWidth = $('.gallery-top').outerWidth();
                                            $('.gallery-top').css('height', productCarouselTopWidth);

                                            // gallery-thumbs
                                            let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
                                            $('.gallery-thumbs').css('height', productCarouselThumbsItemWith);

                                            // activation zoom plugin
                                            var $easyzoom = $('.easyzoom').easyZoom();

                                        </script>
                                    </div>
                                    <div class="wpsm-two-third tabletblockdisplay wpsm-column-last mb30">
                                        <div class="rh-flex-center-align woo_top_meta mobileblockdisplay mb10">

                                            <div class="floatleft mr15 disablefloatmobile">

                                                <div class="woocommerce-product-rating">
                                                    <div class="rh_woo_star" title="Rated 5 out of 5"><span
                                                            class="rhwoostar rhwoostar1 active">★</span><span
                                                            class="rhwoostar rhwoostar2 active">★</span><span
                                                            class="rhwoostar rhwoostar3 active">★</span><span
                                                            class="rhwoostar rhwoostar4 active">★</span><span
                                                            class="rhwoostar rhwoostar5 active">★</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="floatleft meta post-meta mt0 mb0 disablefloatmobile">
                                            <span class="greycolor postview_meta">1212</span> Đã bán
                                        </span>
                                        </div>
                                        <div class="rh-line mb20 mt10"></div>
                                        <div class="rh_post_layout_rev_price_holder position-relative">
                                            <div class="floatright mobileblockdisplay">

                                            </div>

                                            <div class="compare-button-holder">

                                                <p class="price">
                                                    <del>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>
                                                                @if(isset($itemDetail->price_old))
                                                                    <span>{{number_format($itemDetail->price_old)}}</span>
                                                                    <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                @endif
                                                            </bdi>
                                                        </span>
                                                    </del>
                                                    <ins style="margin-left: 10px">
                                                        <span class="woocommerce-Price-amount amount"><bdi>{{number_format($itemDetail->price)}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </ins>
                                                </p>
                                                <?php
                                                $user = Auth::user();
                                                if (empty($user)) {
                                                    $login = 'act-rehub-login-popup';
                                                } else {
                                                    $login = '';
                                                }
                                                ?>
                                                <div class="woo-button-area mb30">
                                                    <form class="cart"
                                                          action="https://shopmc.com.vn/san-pham/kiem-diamond-minecraft-chinh-hang/"
                                                          method="post" enctype="multipart/form-data">
                                                        <input type="hidden" id="wc_quick_buy_hook_8426" value="8426">
                                                        <div class="qib-container">
                                                            <button type="button" class="minus qib-button">-</button>
                                                            <div class="quantity buttons_added">
                                                                <label class="screen-reader-text"
                                                                       for="quantity_61a046e02517d">
                                                                    Kiếm Diamond Minecraft Chính Hãng số lượng
                                                                </label>
                                                                <input
                                                                    type="number" id="quantity"
                                                                    class="input-text qty text" step="1" min="1" max=""
                                                                    name="quantity" value="1" title="SL" size="4"
                                                                    placeholder="" inputmode="numeric">
                                                            </div>
                                                            <button type="button" class="plus qib-button">+</button>
                                                        </div>
                                                        <?php
                                                        $user = Auth::user();
                                                        if (empty($user)) {
                                                            $login = 'act-rehub-login-popup';
                                                        } else {
                                                            $login = '';
                                                        }
                                                        ?>
                                                        <div class="{{$login}}">
                                                            <a onclick="addToCart({{$itemDetail->id}})"
                                                               style="vertical-align: top; margin-left: 1em;
                                                               background: #f7941d !important;
                                                               border: none;"
                                                               name="add-to-cart"
                                                               id="addToCart"
                                                               href="javascript:"
                                                               class="btn btn-success">
                                                                Thêm vào giỏ hàng
                                                            </a>
                                                            <script>
                                                                function addToCart(id) {
                                                                    console.log($('#quantity').val());
                                                                    $.ajax({
                                                                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                                        url: '/add-cart/' + id,
                                                                        type: 'POST',
                                                                        data: {
                                                                            quantity: $('#quantity').val(),
                                                                        },
                                                                        success: function (res) {
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

                                                    <div
                                                        class="quick_buy_container quick_buy_20521_container {{$login}}"
                                                        id="quick_buy_20521_container">
                                                        <button id="quick_buy_20521_button"
                                                                data-product-id="20521"
                                                                style="margin-right: -42px;
                                                                background: #fb641b;
                                                                border: none;
                                                                border-radius: 2px;
                                                                color: white"
                                                                data-product-type="simple"
                                                                class="wcqb-preset preset1 wcqb_button wc_quick_buy_button quick_buy_button quick_buy_button_tag quick_buy_simple quick_buy_simple_button quick_buy_20521 quick_buy_20521_button quick_buy_20521_simple quick_buy_20521_simple_button"
                                                                type="button"><a href="{{route('item.cart')}}"
                                                                                 style="color: white">Mua Ngay</a>
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="rh-line mt30 mb25"></div>

                                        <div>

                                            <div class="mobilesblockdisplay font90 lineheight20 woo_desc_part">
                                                <div class="woocommerce-product-details__short-description">
                                                    {!! $itemDetail->content !!}
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="top_share_small top_share notextshare">
                                        </div>
                                        <div class="footer_product">

                                            <div class="rh_woo_code_zone_content">
                                                <strong>
                                                    <i class="far fa-phone-plus"></i> LIÊN HỆ</strong><br>
                                                <strong style="color: #D50000;">
                                                    <noscript
                                                        data-img="https://shopmc.vn/wp-content/uploads/2019/06/shield-icon.png"
                                                        data-webp="https://shopmc.vn/wp-content/uploads/2019/06/shield-icon.png.webp"
                                                        class=""><img
                                                            src="https://shopmc.vn/wp-content/uploads/2019/06/shield-icon.png"
                                                            data-eio="j"/></noscript>
                                                    <img
                                                        src="https://shopmc.vn/wp-content/uploads/2019/06/shield-icon.png.webp">
                                                    48 giờ đổi trả hàng miễn phí</strong><br>
                                                <p>Hotline đặt hàng 09xxxxxxxx (Zalo) - 09xxxxxxxx<br>
                                                    (Miễn phí, 8-21h cả T7, CN)</p>
                                                <a target=" _blank" rel="" href="#">
                                                    <div class="mxh">
                                                        <noscript
                                                            data-img="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png"
                                                            data-webp="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png.webp"
                                                            class="">
                                                            <img
                                                                src="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png"
                                                                data-eio="j"/>
                                                        </noscript>
                                                        <img
                                                            src="https://shopmc.vn/wp-content/uploads/2019/03/icon-fb.png.webp">
                                                    </div>
                                                </a>
                                                <div class="mxh">
                                                    <noscript
                                                        data-img="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png"
                                                        data-webp="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png.webp"
                                                        class=""><img
                                                            src="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png"
                                                            data-eio="j"/>
                                                    </noscript>
                                                    <img
                                                        src="https://shopmc.vn/wp-content/uploads/2019/03/icon-zalo.png.webp">
                                                </div>
                                                <div class="mxh">
                                                    <a href="#">
                                                        <noscript
                                                            data-img="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png"
                                                            data-webp="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png.webp"
                                                            class=""><img
                                                                src="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png"
                                                                data-eio="j"/></noscript>
                                                        <img
                                                            src="https://shopmc.vn/wp-content/uploads/2019/03/youtube.png.webp"></a>
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
		c-0.177-0.074-0.374-0.075-0.561-0.113C6.752-0.807,2.384,2.886,1.938,8.445z"></path>
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
                                    <div class="datngay">
                                        <a href="?add-to-cart=8426" data-product_id="8426" data-product_sku="KDM"
                                           class="button_datngay" add_to_cart_button="" ajax_add_to_cart="">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 width="446.843px" height="446.843px" viewBox="0 0 446.843 446.843"
                                                 style="enable-background:new 0 0 446.843 446.843;"
                                                 xml:space="preserve">
<g>
    <path d="M444.09,93.103c-2.698-3.699-7.006-5.888-11.584-5.888H109.92c-0.625,0-1.249,0.038-1.85,0.119l-13.276-38.27
		c-1.376-3.958-4.406-7.113-8.3-8.646L19.586,14.134c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591
		l60.768,23.872l74.381,214.399c-3.283,1.144-6.065,3.663-7.332,7.187l-21.506,59.739c-1.318,3.663-0.775,7.733,1.468,10.916
		c2.24,3.183,5.883,5.078,9.773,5.078h11.044c-6.844,7.616-11.044,17.646-11.044,28.675c0,23.718,19.298,43.012,43.012,43.012
		s43.012-19.294,43.012-43.012c0-11.029-4.2-21.059-11.044-28.675h93.776c-6.847,7.616-11.048,17.646-11.048,28.675
		c0,23.718,19.294,43.012,43.013,43.012c23.718,0,43.012-19.294,43.012-43.012c0-11.029-4.2-21.059-11.043-28.675h13.433
		c6.599,0,11.947-5.349,11.947-11.948c0-6.599-5.349-11.947-11.947-11.947H143.647l13.319-36.996
		c1.72,0.724,3.578,1.152,5.523,1.152h210.278c6.234,0,11.751-4.027,13.65-9.959l59.739-186.387
		C447.557,101.567,446.788,96.802,444.09,93.103z M169.659,409.807c-10.543,0-19.116-8.573-19.116-19.116
		s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117S180.202,409.807,169.659,409.807z M327.367,409.807
		c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117c10.542,0,19.116,8.574,19.116,19.117
		S337.909,409.807,327.367,409.807z M402.52,148.149h-73.161V115.89h83.499L402.52,148.149z M381.453,213.861h-52.094v-37.038
		h63.967L381.453,213.861z M234.571,213.861v-37.038h66.113v37.038H234.571z M300.684,242.538v31.064h-66.113v-31.064H300.684z
		 M139.115,176.823h66.784v37.038h-53.933L139.115,176.823z M234.571,148.149V115.89h66.113v32.259H234.571z M205.898,115.89v32.259
		h-76.734l-11.191-32.259H205.898z M161.916,242.538h43.982v31.064h-33.206L161.916,242.538z M329.359,273.603v-31.064h42.909
		l-9.955,31.064H329.359z"></path>
</g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
</svg>
                                            <div>Đặt hàng</div>
                                        </a></div>
                                    <div class="muangay">
                                        <input value="Mua Ngay" type="button" id="quick_buy_8426_button" name=""
                                               data-product-type="simple" data-product-id="8426"
                                               class="muangay_bottom wcqb_button wc_quick_buy_button quick_buy_button quick_buy_simple quick_buy_8426_button quick_buy_8426wc_quick_buy_button">
                                    </div>
                                </div>
                            </div>
                            <!--/div-->
                            <!--/div-->
                            {{--Description--}}
                            <div class="content-woo-area">
                                <div class="rh-tabletext-block rh-tabletext-wooblock" id="section-description">
                                    <div class="rh-tabletext-block-heading">
                                        <span class="toggle-this-table"></span>
                                        <h4 class="rh-heading-icon">Mô tả</h4>
                                    </div>
                                    <div class="rh-tabletext-block-wrapper">
                                        <style>
                                            .read_more_less {
                                                height: 3rem;
                                                text-align: center;
                                                border-top: 1px solid #eee;
                                                padding-top: 10px;
                                                color: black;
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
                                                background: -webkit-gradient(linear, left top, left bottom, color-stop(0, transparent), color-stop(70%, hsla(0, 0%, 100%, 0)), color-stop(90%, #fff));
                                                background: linear-gradient(transparent, hsla(0, 0%, 100%, 0) 70%, #fff 90%);
                                            }

                                            .all_des {
                                                max-height: 220px;
                                                overflow: hidden;
                                                position: relative;
                                            }

                                            #readLess {
                                                display: none;
                                            }

                                            .span_item {
                                                width: 12px;
                                                margin-left: 5px;
                                                fill: black;
                                            }
                                        </style>
                                        <div class="clearfix"></div>
                                        <div class="all_des">
                                            <div class="content_product">
                                                <p> {!! $itemDetail->description!!}</p>
                                            </div>
                                            <div class="hide_content"></div>
                                        </div>
                                        <div class="read_more_less" id="readMore">Xem Thêm
                                            <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11"
                                                 class="span_item">
                                                <path stroke="none"
                                                      d="m11 2.5c0 .1 0 .2-.1.3l-5 6c-.1.1-.3.2-.4.2s-.3-.1-.4-.2l-5-6c-.2-.2-.1-.5.1-.7s.5-.1.7.1l4.6 5.5 4.6-5.5c.2-.2.5-.2.7-.1.1.1.2.3.2.4z"></path>
                                            </svg>
                                        </div>
                                        <div class="read_more_less" id="readLess">Thu Gọn
                                            <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11"
                                                 class="span_item">
                                                <path stroke="none"
                                                      d="m11 8.5c0-.1 0-.2-.1-.3l-5-6c-.1-.1-.3-.2-.4-.2s-.3.1-.4.2l-5 6c-.2.2-.1.5.1.7s.5.1.7-.1l4.6-5.5 4.6 5.5c.2.2.5.2.7.1.1-.1.2-.3.2-.4z"></path>
                                            </svg>
                                        </div>
                                        <div id="fb-root" class=" fb_reset">
                                            <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                                <div></div>
                                            </div>
                                        </div>
                                        <script>
                                            jQuery(function ($) {
                                                $(document).ready(function () {
                                                    $("#readMore").click(function () {
                                                        $(".all_des").css('max-height', 'none');
                                                        $(".hide_content").css('display', 'none');
                                                        $("#readMore").css('display', 'none');
                                                        $("#readLess").css('display', 'block');
                                                    });
                                                    $("#readLess").click(function () {
                                                        $(".all_des").css('max-height', '120px');
                                                        $(".hide_content").css('display', 'block');
                                                        $("#readLess").css('display', 'none');
                                                        $("#readMore").css('display', 'block');
                                                    });
                                                });
                                            });
                                        </script>

                                    </div>
                                    <div class="fb-comments"
                                         data-href="<?php
                                    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                                        $url = "https://";
                                    else
                                        $url = "http://";
                                    // Append the host(domain name, ip) to the URL.
                                    $url.= $_SERVER['HTTP_HOST'];

                                    // Append the requested resource location to the URL
                                    $url.= $_SERVER['REQUEST_URI'];

                                    echo $url;
                                    ?>  " data-width="1200" data-numposts="5"></div>
                                </div>
                            </div>
                            <div class="related-woo-area clearbox flowhidden" id="related-section-woo-area">
                                <div class="rh-container">
                                    <div class="clearfix"></div>
                                    <div class="woocommerce">
                                        <h3>Sản phẩn liên quan</h3>
                                        <div class="woocommerce" style="margin-top: 10px">

                                            <div class="rh-flex-eq-height products  col_wrap_six grid_woo"
                                                 data-filterargs="{&quot;post__in&quot;:[&quot;8489&quot;,&quot;8420&quot;,&quot;8425&quot;,&quot;8434&quot;,&quot;8428&quot;,&quot;9576&quot;],&quot;orderby&quot;:&quot;post__in&quot;,&quot;post_type&quot;:&quot;product&quot;,&quot;posts_per_page&quot;:6,&quot;tax_query&quot;:[{&quot;relation&quot;:&quot;AND&quot;,&quot;0&quot;:{&quot;taxonomy&quot;:&quot;product_visibility&quot;,&quot;field&quot;:&quot;name&quot;,&quot;terms&quot;:&quot;exclude-from-catalog&quot;,&quot;operator&quot;:&quot;NOT IN&quot;}}],&quot;no_found_rows&quot;:1}"
                                                 data-template="woogridpart" id="rh_woogrid_1295472877"
                                                 data-innerargs="{&quot;columns&quot;:&quot;6_col&quot;,&quot;woolinktype&quot;:&quot;product&quot;,&quot;disable_thumbs&quot;:&quot;&quot;,&quot;gridtype&quot;:&quot;&quot;,&quot;soldout&quot;:&quot;&quot;,&quot;attrelpanel&quot;:&quot;&quot;}">

                                                @if(@$related[0]->item)
                                                    @foreach($related[0]->item as $products)
                                                        @if($products->id != $itemDetail->id)
                                                            <div
                                                                class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                                {{--                                                            <span class="re-ribbon-badge badge_20"><span>còn hàng!</span></span>--}}
                                                                <figure class="mb5 mt25 position-relative notresized">
                                                                    <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                                       href="{{route('item.detail',$products->slug)}}">
                                                                        <img class=" lazyloaded"
                                                                             data-src="{{$products->image}}"
                                                                             width="300"
                                                                             alt="Kiếm Biến hình Siêu chất chính hãng"
                                                                             src="{{$products->image}}">
                                                                    </a>
                                                                    <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                                </figure>

                                                                <h3 class=" text-clamp text-clamp-2">
                                                                    <a href="{{route('item.detail',$products->slug)}}">{{$products->title}}</a>
                                                                </h3>
                                                                <div class="border-top pt10 pr10 pl10 pb10">
                                                                    <div
                                                                        class="price_for_grid floatleft rehub-btn-font mr10">
                                                                        <p class="price">
                                                                            <del>
                                                                                <span
                                                                                    class="woocommerce-Price-amount amount">
                                                                  <bdi>
                                                                      @if(isset($products->price_old))
                                                                          <span> {{number_format($products->price_old)}}</span>
                                                                          <span
                                                                              class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                      @endif
                                                                  </bdi>
                                                        </span>
                                                                            </del>
                                                                            <ins style="margin-left: 10px"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi>{{number_format($products->price)}}<span
                                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                                            </ins>
                                                                        </p>
                                                                    </div>
                                                                    <div class="floatright product-meta">
                                                                        <span
                                                                            class="greycolor postview">Đã bán 182</span>
                                                                    </div>
                                                                    <div
                                                                        class="rh-flex-right-align btn_for_grid floatright">
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
                            </div><!-- #product-8426 -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <style>
            .rh_woo_star .active, .woocommerce .wc-layered-nav-rating .star-rating .rhwoostar.active {
                color: #ff8a00 !important;
            }
        </style>
        @endsection
        @section('styles')
            <link rel="stylesheet" href="{{asset('frontend/css/qib-container/style.css')}}">
            <script src="{{asset('frontend/js/dist/easyzoom.js')}}"></script>
            <link rel="stylesheet" href="{{asset('frontend/css/css/easyzoom.css')}}">
            <script src="{{asset('frontend/js/dist/swiper.min.js')}}"></script>
            <link rel="stylesheet" href="{{asset('frontend/css/css/swiper.min.css')}}">
@endsection
