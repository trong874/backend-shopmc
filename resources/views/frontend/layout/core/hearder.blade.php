<header id="main_header" class="white_style">
    <div class="header_wrap">

        <!-- top -->
        <div class="header_top_wrap white_style">
            <div class="rh-container">
                <div class="header-top clearfix rh-flex-center-align">
                    <div class="top-nav">
                        <ul class="menu">
                            <li></li>
                        </ul>
                    </div>
                    <div class="rh-flex-right-align top-social">

                        <div class="userblockintop"><span class="act-rehub-login-popup" data-type="login">
                                    <i class="fal fa-sign-out"></i><span>Đăng nhập / Đăng ký</span></span>
                            <div class="use_nam">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /top -->


        <!-- Logo section -->
        <div class="logo_section_wrap hideontablet">
            <div class="rh-container">
                <div class="logo-section rh-flex-center-align tabletblockdisplay header_seven_style clearfix">
                    <div class="logo">
                        <a href="{{route('page.index')}}" class="logo_image">
                            <img src="https://shopmc.com.vn/wp-content/uploads/2019/02/Minecraft_logo.png"
                                 alt="Shop MC" height="" width=""/>
                        </a>

                    </div>
                    <div class="search head_search">
                        <form role="search" method="get" class="search-form" action="https://shopmc.com.vn/">
                            <input type="text" name="s" placeholder="Tìm kiếm" class="re-ajax-search"
                                   autocomplete="off" data-posttype="product">
                            <input type="hidden" name="post_type" value="product"/>
                            <button type="submit" class="btnsearch"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="re-aj-search-wrap"></div>
                    </div>
                    <div class=" rh-flex-right-align">
                        <div class="header-actions-logo rh-flex-right-align">
                            <div class="tabledisplay">


                                <div class="celldisplay rh_woocartmenu_cell text-center">
                                    <span class="inlinestyle rehub-main-btn-bg rehub-main-smooth menu-cart-btn ">
                                        <a class="rh-header-icon rh-flex-center-align rh_woocartmenu-link cart-contents cart_count_0"
                                            href="https://shopmc.com.vn/cart/">
                                            <i class="fas fa-cart-plus"></i>
                                            <span class="rh_woocartmenu-icon">
                                                <span class="rh-icon-notice rehub-main-color-bg">0</span></span><span
                                                class="rh_woocartmenu-amount">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>0&nbsp;
                                                        <span class="woocommerce-Price-currencySymbol">&#8363;
                                                        </span>
                                                    </bdi>
                                                </span>
                                            </span>
                                        </a>
                                    </span>
                                    <div class="woocommerce widget_shopping_cart">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Logo section -->

        <!-- Main Navigation -->
        <div class="search-form-inheader header_icons_menu main-nav mob-logo-enabled rh-stickme dark_style">
            <div class="rh-container">

                <nav class="top_menu">
                    <ul id="menu-danh-muc-san-pham" class="menu">
                        <li id="menu-item-9029"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href="#"><i class="fas fa-chevron-down"></i> Danh mục sản phẩm</a>
                            <ul class="sub-menu">
                                @if(isset($categories_product))
                                    @foreach($categories_product as $item)
                                    <li id="menu-item-{{$item->id}}"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a
                                            href="{{$item->url}}">{{$item->title}}</a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <li id="menu-item-9558" class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="https://shopmc.com.vn/khuyen-mai/"><i class="far fa-usd-circle"></i> Khuyến
                                mại</a></li>
                        <li id="menu-item-9664" class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="https://shopmc.com.vn/chuyen-muc/tin-tuc/"><i class="fas fa-newspaper"></i>
                                Tin tức</a></li>
                        <li id="menu-item-9663"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href="#"><i class="fas fa-chevron-down"></i> Thương hiệu</a>
                            <ul class="sub-menu">
                                <li id="menu-item-9757"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="https://shopmc.com.vn/thuong-hieu/mojang/">Mojang</a></li>
                                <li id="menu-item-9758"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="https://shopmc.com.vn/thuong-hieu/jinx/">Jinx</a></li>
                                <li id="menu-item-9756"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="https://shopmc.com.vn/thuong-hieu/lego-dan-mach/">Lego Đan Mạch</a>
                                </li>
                                <li id="menu-item-9759"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="https://shopmc.com.vn/thuong-hieu/thinkgeek/">ThinkGeek</a></li>
                                <li id="menu-item-9760"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="https://shopmc.com.vn/thuong-hieu/mattel/">Mattel</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-9662" class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="https://shopmc.com.vn/contact-us/"><i class="fas fa-address-book"></i>Liên hệ</a>
                        </li>
                    </ul>
                </nav>
                <div class="responsive_nav_wrap rh_mobile_menu">
                    <div id="dl-menu" class="dl-menuwrapper rh-flex-center-align">
                        <button id="dl-trigger" class="dl-trigger" aria-label="Menu">
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <line stroke-linecap="round" id="rhlinemenu_1" y2="7" x2="29" y1="7" x1="3"/>
                                    <line stroke-linecap="round" id="rhlinemenu_2" y2="16" x2="18" y1="16" x1="3"/>
                                    <line stroke-linecap="round" id="rhlinemenu_3" y2="25" x2="26" y1="25" x1="3"/>
                                </g>
                            </svg>
                        </button>
                        <div id="mobile-menu-icons" class="rh-flex-center-align rh-flex-right-align">
                            <div id="slide-menu-mobile"></div>
                        </div>
                    </div>
                </div>
                <div class="search-header-contents">
                    <form role="search" method="get" class="search-form" action="https://shopmc.com.vn/">
                        <input type="text" name="s" placeholder="Tìm kiếm" class="re-ajax-search" autocomplete="off"
                               data-posttype="product">
                        <input type="hidden" name="post_type" value="product"/>
                        <button type="submit" class="btnsearch"><i class="rhicon rhi-search"></i></button>
                    </form>
                    <div class="re-aj-search-wrap"></div>

                </div>
            </div>
        </div>
        <!-- /Main Navigation -->

    </div>
<script>
    /*
   Author: Igor Sunzharovskyi
   Author URI: https://wpsoul.com
*/

    jQuery(document).on( 'change', '.rh_woo_drop_cat', function(e) {
        var catid = jQuery(this).val(),
            inputField = jQuery(this).parent().find('.re-ajax-search');
        if(inputField.length){
            inputField.attr("data-catid", catid);
            var inputValue = inputField.val();
            if(inputValue !=''){
                re_ajax_cache.remove(inputValue);
                re_ajax_search.do_ajax_call(inputField);
            }
        }
    });
    jQuery( '.variations_form' ).on( 'woocommerce_update_variation_values', function () {
        var rhswatches = jQuery('.rh-var-selector');
        rhswatches.find('.rh-var-label').removeClass('rhhidden');
        rhswatches.each(function(){
            var variationselect = jQuery(this).prev();
            jQuery(this).find('.rh-var-label').each(function(){
                if (variationselect.find('option[value="'+ jQuery(this).attr("data-value") +'"]').length <= 0) {
                    jQuery(this).addClass('rhhidden');
                }
            });
        });
    });
    jQuery( '.variations_form' ).on( 'click', '.reset_variations', function () {
        var rhswatches = jQuery('.rh-var-selector');
        rhswatches.find('.rh-var-label').removeClass('rhhidden');
        rhswatches.each(function(){
            jQuery(this).find('.rh-var-input').each(function(){
                jQuery(this).prop( "checked", false );
            });
        });
    });
    jQuery(document).on("mouseenter", "#main_header .rh_woocartmenu_cell", function(){
        if(typeof wc_cart_fragments_params === 'undefined'){
            return false;
        }
        var widgetCartContent = jQuery(this).find(".widget_shopping_cart");
        widgetCartContent.addClass("loaded re_loadingbefore");
        jQuery.ajax({
            type: "post",
            url: wc_cart_fragments_params.wc_ajax_url.toString().replace('%%endpoint%%', 'get_refreshed_fragments'),
            data: {
                time: new Date().getTime()
            },
            timeout: wc_cart_fragments_params.request_timeout,
            success: function(data){
                if (data && data.fragments) {
                    widgetCartContent.html(data.fragments["div.widget_shopping_cart_content"]);
                    widgetCartContent.removeClass("re_loadingbefore");
                }
            }
        });
    })
    jQuery(document).on("mouseleave", "#main_header .rh_woocartmenu_cell", function(){
        var widgetCartContent = jQuery(this).find(".widget_shopping_cart");
        widgetCartContent.removeClass("loaded");
        widgetCartContent.html("");
    });

    jQuery(document).ready(function($) {
        'use strict';

        $('.rhniceselect, .woocommerce-ordering .orderby').niceSelect();

        $(document).on('added_to_cart',  function(e, fragments, cart_hash, $button){
            if ($button) {
                var cartNotice =wc_add_to_cart_params.i18n_added_to_cart +' <a href="' + wc_add_to_cart_params.cart_url +'" class="added_to_cart wc-forward" title="'+ wc_add_to_cart_params.i18n_view_cart +'">'+ wc_add_to_cart_params.i18n_view_cart +'</a>';
                $button.next('.added_to_cart').remove();
                $.simplyToast(cartNotice, 'success', {delay: 6000});
            }
        });

        if($('#section-woo-ce-pricehistory').length > 0){
            if($('#nopricehsection').length > 0){
                $('#section-woo-ce-pricehistory').remove();
                $('#tab-title-woo-ce-pricehistory').remove();
            }
        }

        //Quick view
        $(document).on('click', '.quick_view_button', function(e){
            e.preventDefault();
            var productID = $(this).data('product_id');
            var quickViewProduct = $(this).closest('quick_view_wrap').find('.quick_view_product');
            var data = {
                'action': 'product_quick_view',
                'product_id': productID,
                'nonce' : rhwoovar.quicknonce,
            };

            $.pgwModal({
                url: rhwoovar.ajax_url,
                titleBar: false,
                maxWidth: 800,
                loadingContent : '<img src="'+rhwoovar.templateurl+'/images/loaded.gif">',
                mainClassName : 'pgwModal quick_view_product',
                ajaxOptions : {
                    data : data,
                    success : function(response) {
                        if (response) {
                            $.pgwModal({ pushContent: response });
                        } else {
                            $.pgwModal({ pushContent: 'An error has occured' });
                        }
                    }
                }
            });
        });

        $(document).on("click", ".rh-user-favor-shop", function(e){
            e.preventDefault();
            var heart = $(this);
            var user_id = heart.data("user_id");
            heart.find(".favorshop_like").html("<i class='rhicon rhi-spinner fa-spin'></i>");

            $.ajax({
                type: "post",
                url: rhwoovar.ajax_url,
                data: "action=rh-user-favor-shop&favornonce="+rhwoovar.favornonce+"&rh_user_favorite_shop=&user_id="+user_id,
                success: function(count){
                    if( count.indexOf( "already" ) !== -1 )
                    {
                        var lecount = count.replace("already","");
                        if (lecount == 0)
                        {
                            var lecount = "0";
                        }
                        heart.find(".favorshop_like").html("<i class='rhicon rhi-heart'></i>");
                        heart.removeClass("alreadyinfavor");
                        heart.find(".count").text(lecount);
                    }
                    else
                    {
                        heart.find(".favorshop_like").html("<i class='rhicon rhi-heart-solid'></i>");
                        heart.addClass("alreadyinfavor");
                        heart.find(".count").text(count);
                    }
                }
            });

            return false;
        });

        $(document).on('click', '.rh_gmw_map_in_wcv_profile', function (e) {
            e.preventDefault();
            $('.wcvendor_profile_menu_items li').removeClass('active');
            $('div[role="tabvendor"]').removeClass('active');
            $('#vendor-location').addClass('active');
            $('html, body').stop().animate({
                'scrollTop': $('#vendor-location').offset().top - 60
            }, 500, 'swing', function () {
                window.location.hash = '#vendor-location';
            });
        });


    }); //END Document.ready
</script>
</header>
