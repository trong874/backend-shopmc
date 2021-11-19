@extends('frontend.layout.master')
@section('content')
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/shopmc.com.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.6"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <style id='rs-plugin-settings-inline-css' type='text/css'>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,300,700,600);

        .tp-caption.medium_bg_red a {
            color: #fff;
            text-decoration: none
        }

        .tp-caption.medium_bg_red a:hover {
            color: #fff;
            text-decoration: underline
        }

        .tp-caption.roundedimage img {
            -webkit-border-radius: 300px;
            -moz-border-radius: 300px;
            border-radius: 300px
        }

        .tp-bullets.simplebullets.navbar {
            height: 35px;
            padding: 0px 0px
        }

        .tp-bullets.simplebullets .bullet {
            cursor: pointer;
            position: relative !important;
            background: rgba(0, 0, 0, 0.5) !important;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            width: 6px !important;
            height: 6px !important;
            border: 5px solid rgba(0, 0, 0, 0) !important;
            display: inline-block;
            margin-right: 2px !important;
            margin-bottom: 14px !important;
            -webkit-transition: background-color 0.2s, border-color 0.2s;
            -moz-transition: background-color 0.2s, border-color 0.2s;
            -o-transition: background-color 0.2s, border-color 0.2s;
            -ms-transition: background-color 0.2s, border-color 0.2s;
            transition: background-color 0.2s, border-color 0.2s;
            float: none !important
        }

        .tp-bullets.simplebullets .bullet.last {
            margin-right: 0px
        }

        .tp-bullets.simplebullets .bullet:hover, .tp-bullets.simplebullets .bullet.selected {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            background: rgba(255, 255, 255, 1) !important;
            width: 6px !important;
            height: 6px !important;
            border: 5px solid rgba(0, 0, 0, 1) !important
        }

        .tparrows:before {
            font-family: 'revicons';
            color: #fff;
            font-style: normal;
            font-weight: normal;
            speak: none;
            display: inline-block;
            text-decoration: inherit;
            margin-right: 0;
            margin-top: 9px;
            text-align: center;
            width: 40px;
            font-size: 20px
        }

        .tparrows {
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5) !important;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            width: 40px !important;
            height: 40px !important
        }

        .tparrows:hover {
            color: #fff
        }

        .tp-leftarrow:before {
            content: '\e824'
        }

        .tp-rightarrow:before {
            content: '\e825'
        }

        .tparrows.tp-rightarrow:before {
            margin-left: 1px
        }

        .tparrows:hover {
            background: rgba(0, 0, 0, 1) !important
        }
    </style>
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
    <style type="text/css">
        @media (min-width: 1025px) {
            header .logo-section {
                padding: 30px 0;
            }
        }

        nav.top_menu > ul > li > a {
            font-weight: normal;
        }

        .dl-menuwrapper li a, nav.top_menu ul li a, #re_menu_near_logo li, #re_menu_near_logo li {
            font-family: "Roboto", trebuchet ms !important;
            font-style: normal;
        }

        .rehub_feat_block div.offer_title, .rh_wrapper_video_playlist .rh_video_title_and_time .rh_video_title, .main_slider .flex-overlay h2, .related_articles ul li > a, h1, h2, h3, h4, h5, h6, .widget .title, .title h1, .title h5, .small_post blockquote p, .related_articles .related_title, #comments .title_comments, .commentlist .comment-author .fn, .commentlist .comment-author .fn a, .media_video > p, .rate_bar_wrap .review-top .review-text span.review-header, .wpsm-numbox.wpsm-style6 span.num, .wpsm-numbox.wpsm-style5 span.num, .rehub-main-font, .cegg-list-logo-title, .logo .textlogo, .wp-block-quote.is-style-large, .comment-respond h3, .related_articles .related_title, .re_title_inmodal {
            font-family: "Roboto", trebuchet ms;
        }

        .main_slider .flex-overlay h2, h1, h2, h3, h4, h5, h6, .title h1, .title h5, .comment-respond h3 {
        }

        .sidebar, .rehub-body-font, body {
            font-family: "Roboto", arial !important;
        }

        .header_top_wrap .user-ava-intop:after, .header-top .top-nav > ul > li > a, .header-top a.cart-contents, .header_top_wrap .icon-search-onclick:before, .header-top .top-social, .header-top .top-social a {
            color: #f4f4f4 !important;
        }

        .header-top .top-nav li {
            border: none !important;
        }

        .left-sidebar-archive .main-side {
            float: right;
        }

        .left-sidebar-archive .sidebar {
            float: left
        }

        .footer-bottom {
            background-color: #f9f9f9 !important
        }

        .footer-bottom .footer_widget {
            border: none !important
        }

        .widget .title:after {
            border-bottom: 2px solid #3c6a02;
        }

        .rehub-main-color-border, nav.top_menu > ul > li.vertical-menu.border-main-color .sub-menu, .rh-main-bg-hover:hover, .wp-block-quote, ul.def_btn_link_tabs li.active a, .wp-block-pullquote {
            border-color: #3c6a02;
        }

        .wpsm_promobox.rehub_promobox {
            border-left-color: #3c6a02 !important;
        }

        .color_link {
            color: #3c6a02 !important;
        }

        .search-header-contents {
            border-top-color: #3c6a02;
        }

        .featured_slider:hover .score, .top_chart_controls .controls:hover, article.post .wpsm_toplist_heading:before {
            border-color: #3c6a02;
        }

        .btn_more:hover, .small_post .overlay .btn_more:hover, .tw-pagination .current {
            border: 1px solid #3c6a02;
            color: #fff
        }

        .rehub_woo_review .rehub_woo_tabs_menu li.current {
            border-top: 3px solid #3c6a02;
        }

        .gallery-pics .gp-overlay {
            box-shadow: 0 0 0 4px #3c6a02 inset;
        }

        .post .rehub_woo_tabs_menu li.current, .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
            border-top: 2px solid #3c6a02;
        }

        .rething_item a.cat {
            border-bottom-color: #3c6a02
        }

        nav.top_menu ul li ul.sub-menu {
            border-bottom: 2px solid #3c6a02;
        }

        .widget.deal_daywoo, .elementor-widget-wpsm_woofeatured .deal_daywoo {
            border: 3px solid #3c6a02;
            padding: 20px;
            background: #fff;
        }

        .deal_daywoo .wpsm-bar-bar {
            background-color: #3c6a02 !important
        }

        #buddypress div.item-list-tabs ul li.selected a span, #buddypress div.item-list-tabs ul li.current a span, #buddypress div.item-list-tabs ul li a span, .user-profile-div .user-menu-tab > li.active > a, .user-profile-div .user-menu-tab > li.active > a:focus, .user-profile-div .user-menu-tab > li.active > a:hover, .slide .news_cat a, .news_in_thumb:hover .news_cat a, .news_out_thumb:hover .news_cat a, .col-feat-grid:hover .news_cat a, .carousel-style-deal .re_carousel .controls, .re_carousel .controls:hover, .openedprevnext .postNavigation a, .postNavigation a:hover, .top_chart_pagination a.selected, .flex-control-paging li a.flex-active, .flex-control-paging li a:hover, .btn_more:hover, .tabs-menu li:hover, .tabs-menu li.current, .featured_slider:hover .score, #bbp_user_edit_submit, .bbp-topic-pagination a, .bbp-topic-pagination a, .custom-checkbox label.checked:after, .slider_post .caption, ul.postpagination li.active a, ul.postpagination li:hover a, ul.postpagination li a:focus, .top_theme h5 strong, .re_carousel .text:after, #topcontrol:hover, .main_slider .flex-overlay:hover a.read-more, .rehub_chimp #mc_embed_signup input#mc-embedded-subscribe, #rank_1.rank_count, #toplistmenu > ul li:before, .rehub_chimp:before, .wpsm-members > strong:first-child, .r_catbox_btn, .wpcf7 .wpcf7-submit, .comm_meta_wrap .rh_user_s2_label, .wpsm_pretty_hover li:hover, .wpsm_pretty_hover li.current, .rehub-main-color-bg, .togglegreedybtn:after, .rh-bg-hover-color:hover .news_cat a, .rh-main-bg-hover:hover, .rh_wrapper_video_playlist .rh_video_currently_playing, .rh_wrapper_video_playlist .rh_video_currently_playing.rh_click_video:hover, .rtmedia-list-item .rtmedia-album-media-count, .tw-pagination .current, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.active, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li:hover, .dokan-dashboard .dokan-dash-sidebar ul.dokan-dashboard-menu li.dokan-common-links a:hover, #ywqa-submit-question, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .rh-hov-bor-line > a:after, nav.top_menu > ul:not(.off-canvas) > li > a:after, .rh-border-line:after, .wpsm-table.wpsm-table-main-color table tr th, .rehub_chimp_flat #mc_embed_signup input#mc-embedded-subscribe {
            background: #3c6a02;
        }

        @media (max-width: 767px) {
            .postNavigation a {
                background: #3c6a02;
            }
        }

        .rh-main-bg-hover:hover, .rh-main-bg-hover:hover .whitehovered {
            color: #fff !important
        }

        a, .carousel-style-deal .deal-item .priced_block .price_count ins, nav.top_menu ul li.menu-item-has-children ul li.menu-item-has-children > a:before, .top_chart_controls .controls:hover, .flexslider .fa-pulse, .footer-bottom .widget .f_menu li a:hover, .comment_form h3 a, .bbp-body li.bbp-forum-info > a:hover, .bbp-body li.bbp-topic-title > a:hover, #subscription-toggle a:before, #favorite-toggle a:before, .aff_offer_links .aff_name a, .rh-deal-price, .commentlist .comment-content small a, .related_articles .title_cat_related a, article em.emph, .campare_table table.one td strong.red, .sidebar .tabs-item .detail p a, .footer-bottom .widget .title span, footer p a, .welcome-frase strong, article.post .wpsm_toplist_heading:before, .post a.color_link, .categoriesbox:hover h3 a:after, .bbp-body li.bbp-forum-info > a, .bbp-body li.bbp-topic-title > a, .widget .title i, .woocommerce-MyAccount-navigation ul li.is-active a, .category-vendormenu li.current a, .deal_daywoo .title, .rehub-main-color, .wpsm_pretty_colored ul li.current a, .wpsm_pretty_colored ul li.current, .rh-heading-hover-color:hover h2 a, .rh-heading-hover-color:hover h3 a, .rh-heading-hover-color:hover h4 a, .rh-heading-hover-color:hover h5 a, .rh-heading-hover-color:hover .rh-heading-hover-item a, .rh-heading-icon:before, .widget_layered_nav ul li.chosen a:before, .wp-block-quote.is-style-large p, ul.page-numbers li span.current, ul.page-numbers li a:hover, ul.page-numbers li.active a, .page-link > span:not(.page-link-title), blockquote:not(.wp-block-quote) p, span.re_filtersort_btn:hover, span.active.re_filtersort_btn, .deal_daywoo .price, div.sortingloading:after {
            color: #3c6a02;
        }

        .page-link > span:not(.page-link-title), .postimagetrend .title, .widget.widget_affegg_widget .title, .widget.top_offers .title, .widget.cegg_widget_products .title, header .header_first_style .search form.search-form [type="submit"], header .header_eight_style .search form.search-form [type="submit"], .more_post a, .more_post span, .filter_home_pick span.active, .filter_home_pick span:hover, .filter_product_pick span.active, .filter_product_pick span:hover, .rh_tab_links a.active, .rh_tab_links a:hover, .wcv-navigation ul.menu li.active, .wcv-navigation ul.menu li:hover a, form.search-form [type="submit"], .rehub-sec-color-bg, input#ywqa-submit-question, input#ywqa-send-answer, .woocommerce button.button.alt, .tabsajax span.active.re_filtersort_btn, .wpsm-table.wpsm-table-sec-color table tr th, .rh-slider-arrow {
            background: #005005 !important;
            color: #fff !important;
            outline: 0
        }

        .widget.widget_affegg_widget .title:after, .widget.top_offers .title:after, .vc_tta-tabs.wpsm-tabs .vc_tta-tab.vc_active, .vc_tta-tabs.wpsm-tabs .vc_tta-panel.vc_active .vc_tta-panel-heading, .widget.cegg_widget_products .title:after {
            border-top-color: #005005 !important;
        }

        .page-link > span:not(.page-link-title) {
            border: 1px solid #005005;
        }

        .page-link > span:not(.page-link-title), .header_first_style .search form.search-form [type="submit"] i {
            color: #fff !important;
        }

        .rh_tab_links a.active, .rh_tab_links a:hover, .rehub-sec-color-border, nav.top_menu > ul > li.vertical-menu.border-sec-color > .sub-menu, .rh-slider-thumbs-item--active {
            border-color: #005005
        }

        .rh_wrapper_video_playlist .rh_video_currently_playing, .rh_wrapper_video_playlist .rh_video_currently_playing.rh_click_video:hover {
            background-color: #005005;
            box-shadow: 1200px 0 0 #005005 inset;
        }

        .rehub-sec-color {
            color: #005005
        }

        form.search-form input[type="text"] {
            border-radius: 4px
        }

        .news .priced_block .price_count, .blog_string .priced_block .price_count, .main_slider .price_count {
            margin-right: 5px
        }

        .right_aff .priced_block .btn_offer_block, .right_aff .priced_block .price_count {
            border-radius: 0 !important
        }

        form.search-form.product-search-form input[type="text"] {
            border-radius: 4px 0 0 4px;
        }

        form.search-form [type="submit"] {
            border-radius: 0 4px 4px 0;
        }

        .rtl form.search-form.product-search-form input[type="text"] {
            border-radius: 0 4px 4px 0;
        }

        .rtl form.search-form [type="submit"] {
            border-radius: 4px 0 0 4px;
        }

        .price_count, .rehub_offer_coupon, #buddypress .dir-search input[type=text], .gmw-form-wrapper input[type=text], .gmw-form-wrapper select, #buddypress a.button, .btn_more, #main_header .wpsm-button, #rh-header-cover-image .wpsm-button, #wcvendor_image_bg .wpsm-button, input[type="text"], textarea, input[type="tel"], input[type="password"], input[type="email"], input[type="url"], input[type="number"], .def_btn, input[type="submit"], input[type="button"], input[type="reset"], .rh_offer_list .offer_thumb .deal_img_wrap, .grid_onsale, .rehub-main-smooth, .re_filter_instore span.re_filtersort_btn:hover, .re_filter_instore span.active.re_filtersort_btn, #buddypress .standard-form input[type=text], #buddypress .standard-form textarea, .blacklabelprice {
            border-radius: 4px
        }

        .news-community, .woocommerce .products.grid_woo .product, .rehub_chimp #mc_embed_signup input.email, #mc_embed_signup input#mc-embedded-subscribe, .rh_offer_list, .woo-tax-logo, #buddypress div.item-list-tabs ul li a, #buddypress form#whats-new-form, #buddypress div#invite-list, #buddypress #send-reply div.message-box, .rehub-sec-smooth, .rate-bar-bar, .rate-bar, #wcfm-main-contentainer #wcfm-content, .wcfm_welcomebox_header {
            border-radius: 5px
        }

        .woocommerce .woo-button-area .masked_coupon, .woocommerce a.woo_loop_btn, .woocommerce .button.checkout, .woocommerce input.button.alt, .woocommerce a.add_to_cart_button:not(.flat-woo-btn), .woocommerce-page a.add_to_cart_button:not(.flat-woo-btn), .woocommerce .single_add_to_cart_button, .woocommerce div.product form.cart .button, .woocommerce .checkout-button.button, .woofiltersbig .prdctfltr_buttons a.prdctfltr_woocommerce_filter_submit, .priced_block .btn_offer_block, .priced_block .button, .rh-deal-compact-btn, input.mdf_button, #buddypress input[type="submit"], #buddypress input[type="button"], #buddypress input[type="reset"], #buddypress button.submit, .wpsm-button.rehub_main_btn, .wcv-grid a.button, input.gmw-submit, #ws-plugin--s2member-profile-submit, #rtmedia_create_new_album, input[type="submit"].dokan-btn-theme, a.dokan-btn-theme, .dokan-btn-theme, #wcfm_membership_container a.wcfm_submit_button, .woocommerce button.button, .rehub-main-btn-bg {
            background: none #63a121 !important;
            color: #ffffff !important;
            fill: #ffffff !important;
            border: none !important;
            text-decoration: none !important;
            outline: 0;
            box-shadow: -1px 6px 19px rgba(99, 161, 33, 0.2) !important;
            border-radius: 4px !important;
        }

        .rehub-main-btn-bg > a {
            color: #ffffff !important;
        }

        .woocommerce a.woo_loop_btn:hover, .woocommerce .button.checkout:hover, .woocommerce input.button.alt:hover, .woocommerce a.add_to_cart_button:not(.flat-woo-btn):hover, .woocommerce-page a.add_to_cart_button:not(.flat-woo-btn):hover, .woocommerce a.single_add_to_cart_button:hover, .woocommerce-page a.single_add_to_cart_button:hover, .woocommerce div.product form.cart .button:hover, .woocommerce-page div.product form.cart .button:hover, .woocommerce .checkout-button.button:hover, .woofiltersbig .prdctfltr_buttons a.prdctfltr_woocommerce_filter_submit:hover, .priced_block .btn_offer_block:hover, .wpsm-button.rehub_main_btn:hover, #buddypress input[type="submit"]:hover, #buddypress input[type="button"]:hover, #buddypress input[type="reset"]:hover, #buddypress button.submit:hover, .small_post .btn:hover, .ap-pro-form-field-wrapper input[type="submit"]:hover, .wcv-grid a.button:hover, #ws-plugin--s2member-profile-submit:hover, .rething_button .btn_more:hover, #wcfm_membership_container a.wcfm_submit_button:hover, .woocommerce button.button:hover, .rehub-main-btn-bg:hover, .rehub-main-btn-bg:hover > a {
            background: none #3c6a02 !important;
            color: #ffffff !important;
            box-shadow: -1px 6px 13px rgba(60, 106, 2, 0.4) !important;
            border-color: transparent;
        }

        .rehub_offer_coupon:hover {
            border: 1px dashed #3c6a02;
        }

        .rehub_offer_coupon:hover i.far, .rehub_offer_coupon:hover i.fal, .rehub_offer_coupon:hover i.fas {
            color: #3c6a02
        }

        .re_thing_btn .rehub_offer_coupon.not_masked_coupon:hover {
            color: #3c6a02 !important
        }

        .woocommerce a.woo_loop_btn:active, .woocommerce .button.checkout:active, .woocommerce .button.alt:active, .woocommerce a.add_to_cart_button:not(.flat-woo-btn):active, .woocommerce-page a.add_to_cart_button:not(.flat-woo-btn):active, .woocommerce a.single_add_to_cart_button:active, .woocommerce-page a.single_add_to_cart_button:active, .woocommerce div.product form.cart .button:active, .woocommerce-page div.product form.cart .button:active, .woocommerce .checkout-button.button:active, .woofiltersbig .prdctfltr_buttons a.prdctfltr_woocommerce_filter_submit:active, .wpsm-button.rehub_main_btn:active, #buddypress input[type="submit"]:active, #buddypress input[type="button"]:active, #buddypress input[type="reset"]:active, #buddypress button.submit:active, .ap-pro-form-field-wrapper input[type="submit"]:active, .wcv-grid a.button:active, #ws-plugin--s2member-profile-submit:active, input[type="submit"].dokan-btn-theme:active, a.dokan-btn-theme:active, .dokan-btn-theme:active, .woocommerce button.button:active, .rehub-main-btn-bg:active {
            background: none #63a121 !important;
            box-shadow: 0 1px 0 #999 !important;
            top: 2px;
            color: #ffffff !important;
        }

        .rehub_btn_color {
            background-color: #63a121;
            border: 1px solid #63a121;
            color: #ffffff;
            text-shadow: none
        }

        .rehub_btn_color:hover {
            color: #ffffff;
            background-color: #3c6a02;
            border: 1px solid #3c6a02;
        }

        .rething_button .btn_more {
            border: 1px solid #63a121;
            color: #63a121;
        }

        .rething_button .priced_block.block_btnblock .price_count {
            color: #63a121;
            font-weight: normal;
        }

        .widget_merchant_list .buttons_col {
            background-color: #63a121 !important;
        }

        .widget_merchant_list .buttons_col a {
            color: #ffffff !important;
        }

        .rehub-svg-btn-fill svg {
            fill: #63a121;
        }

        .rehub-svg-btn-stroke svg {
            stroke: #63a121;
        }

        @media (max-width: 767px) {
            #float-panel-woo-area {
                border-top: 1px solid #63a121
            }
        }

        .rh_post_layout_big_offer .priced_block .btn_offer_block {
            text-shadow: none
        }

        body, body.dark_body {
            background-color: #f5f5f5;
            background-position: left top;
            background-repeat: repeat;
            background-image: none
        }</style>
    <style>
        span.woocommerce-Price-amount.amount {
            font-size: 14px;
            line-height: 16px;
        }

        /*my-account*/
        .woocommerce-message, .woocommerce-error, .woocommerce-info {
            margin: 0;
        }

        button#wpua-add-existing {
            background: #fff !important;
            color: #555 !important;
            border: 1px solid rgba(0, 0, 0, .09) !important;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .03) !important;
            text-transform: none;
            font-weight: normal;
        }

        .woocommerce-MyAccount-navigation ul li a {
            font-weight: normal !important;
        }

        .woocommerce-MyAccount-navigation ul li a:before {
            margin-right: .53em;
            text-align: left !important;
            float: left !important;
            opacity: .25;
        }

        img.avatar.avatar-96.wp-user-avatar.wp-user-avatar-96.alignnone.photo {
            border-radius: 50%;
        }

        ol.flex-control-nav.flex-control-thumbs {
            display: flex;
        }

        .flex-viewport {
            height: 100% !important;
        }

        /*home-page*/
        .col_wrap_six .col_item {
            width: 16.6667% !important;
            margin: 0 !important;
        }

        .vc_row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .tparrows:before {
            margin-top: 0 !important
        }

        .buttom_cat_text {
            width: 90%;
            overflow: hidden;
            height: 2.5rem;
            margin-bottom: .625rem;
            text-align: center;
        }

        .buttom_cat_text-h3 {
            color: rgba(0, 0, 0, .8);
            font-size: .875rem;
            text-decoration: none;
            line-height: 1.25rem;
            max-height: 2.5rem;
            word-break: break-word;
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .buttom_cat {
            display: flex;
            position: absolute;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            /* -webkit-box-orient: vertical; */
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .buttom_cat_img {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -moz-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            width: 70%;
            margin: 10%;
        }

        .buttom_cat_img_sub {
            height: 100%;
            position: relative;
        }

        .buttom_cat_img_sub_link {
            height: 100%;
            opacity: 1;
        }

        .cate_home {
            display: block;
            height: 302px;
            background: #fff;
            margin-top: 10px;
        }

        ul.ul_cate {
            height: 100%;
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            overflow-x: scroll;
            -webkit-overflow-scrolling: touch;
        }

        li.li_cate {
            width: 10%;
            height: 100%;
            margin: 0 !important;
            padding: 0 !important;
            list-style: none !important;
        }

        .li_a {
            height: 100%;
            display: block;
            width: 100%;
        }

        a.link_a {
            display: block;
            position: relative;
            height: 50%;
            border-right: 1px solid rgba(0, 0, 0, .05);
            border-bottom: 1px solid rgba(0, 0, 0, .05);
        }

        /*header*/
        #pgwModal {
            z-index: 99999999 !important;
        }

        .header_wrap {
            background: linear-gradient(-180deg, #005005, #2e7d32);
        }

        .header-top {
            border-bottom: 0 !important;
        }

        .use_nam {
            align-items: center;
            display: flex;
        }

        .userblockintop {
            display: flex;
        }

        /*single product*/
        p.stars {
            padding-top: 5px;
        }

        .col_wrap_fifth, .col_wrap_six {
            margin: 0 !important
        }

        .codinh {
            display: none;
        }

        .woo_top_meta.mobileblockdisplay.mb10 {
            display: inline-flex !important;
        }

        .woo-button-area.mb30 {
            display: flex;
        }

        .quick_buy_container {
            display: flex;
            height: 45px;
            position: absolute;
            bottom: 0;
            right: 140px;
        }

        .woocommerce div.product form.cart div.quantity, .ce_woo_blocks form.cart div.quantity {
            width: 60px;
        }

        .woocommerce form.cart .single_add_to_cart_button {
            max-width: 140px !important;
            text-transform: none;
            padding: 10px 2px;
        }

        .woocommerce div.product .single_add_to_cart_button, .woocommerce div.product .woo-button-area .masked_coupon {
            font-size: 14px !important;
        }

        .woocommerce .single_add_to_cart_button, .woocommerce div.product form.cart .button {
            width: 140px;
        }

        .quick_buy_container .wcqb_button {
            height: 37px;
            width: 140px;
            padding: 0 !important;
        }

        /*grid product*/
        .woo_grid_compact figure:not(.notresized), .woo_grid_compact figure:not(.notresized) a.rh-flex-center-align {
            height: 160px;
        }

        .col_wrap_fifth .col_item {
            width: 20% !important;
            margin: 0 0 5px !important;
        }

        .woocommerce .products.grid_woo .product {
            padding: 0px !important;
        }

        .mt25 {
            margin-top: 0px !important;
        }

        .woocommerce .products .product figure img, .woocommerce-page .products .product figure img {
            height: 10em !important;
        }

        .woocommerce .products .woo_grid_compact h3 {
            font-size: 15px;
            font-weight: normal;
            line-height: 18px;
            height: 36px;
            padding-left: 10px;
        }

        .woocommerce .products .product .price {
            display: flex;
            font-size: 14px;
            line-height: 16px;
            font-weight: bold;
        }

        .postview {
            font-size: 13px;
            float: right;
        }

        .price_for_grid {
            min-height: 16px !important;
            width: 100%;
        }

        .woocommerce .floatright > .rh_woo_star {
            float: left;
        }

        .woocommerce .col_item .rh_woo_star span {
            font-size: 13px;
        }

        .product-meta {
            width: 100%;
        }

        /*text in product*/
        .w30 {
            width: 30%;
            margin-left: 15px;
            float: left;
        }

        .w50 {
            width: 45%;
            margin-left: 3%;
            float: left;
        }

        .imgtext {
            text-align: left;
            margin: 0 auto;
            min-height: 300px;
            width: 810px;
            padding: 0;
            background-color: #ffffff;
            position: relative;
            display: flow-root;
        }

        .imgright {
            position: absolute;
        }

        .textright {
            position: relative;
            float: right;
            right: 50px;
            margin-top: 50px;
            padding: 15px;
            color: black;
            width: 270px;
            background-color: rgb(255, 255, 255);
            background-color: rgba(255, 255, 255, 0.7);
        }

        /*-------------------------*/
        /*footer*/
        .footer-bottom .footer_widget p {
            margin-bottom: 0;
            font-size: 100%;
        }

        .footer-bottom .footer_widget a {
            text-decoration: none;
        }

        .footer_widget .widget .title {
            font-size: 13px;
            line-height: 17px;
            font-weight: bold;
        }

        /*-------------------------*/
        .tax-product_tag h1 {
            display: block;
        }

        .rh_woo_code_zone_content, .rh_woo_code_zone_button {
            border: 1px dashed #000;
            text-align: center;
            position: relative;
        }

        .compare-full-thumbnails a {
            width: 14%;
            border: 2px solid #e8e8e8;
        }

        .img-mobile {
            display: none;
        }

        .col_wrap_fourth .col_item {
            margin: 0 1% 10px;
        }

        .woocommerce .products.grid_woo .product {
            border-radius: 0 !important;
        }

        .menuIcon_mobile {
            fill: #ff4e0c;
            width: 1.2rem;
            height: 1.2rem;
            margin-right: 0.8rem;
        }

        #mobpaneltext {
            align-items: center;
            display: flex;
        }

        #mobpaneltext span {
            font-size: 0.8rem;
        }

        #slide-menu-mobile ul li.menu-item {
            /*display: flex !important;*/
            align-items: center;
        }

        #slide-menu-mobile ul li.menu-item > a {
            line-height: 18px !important;
            padding: 5px 20px;
            font-size: 0.8rem;
            font-weight: 400;
        }

        .rh-float-panel.floating {
            display: none;
        }

        .single article {
            background: #fff;
            padding: 10px;
        }

        .woocommerce-page a.add_to_cart_button {
            font: 700 13px/13px 'Roboto', trebuchet ms;
            text-transform: none;
        }

        .rh-deal-compact-btn {
            padding: 4px 5px !important;
        }

        .ce_woo_block_top_holder {
            display: inline-table;
            background: #fff;
            width: 100%;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .24);
        }

        .ce_woo_blocks nav.woocommerce-breadcrumb {
            margin-bottom: 0px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .woocommerce-breadcrumb span.delimiter {
            margin: 0 5px;
        }

        .woo-button-actions-area {
            position: absolute;
            z-index: 1;
            top: 4rem;
            left: 0;
            background: #fff;
        }

        .woo_top_meta.mobileblockdisplay.mb10 {
            display: inline-grid;
        }

        .mb10 {
            margin-bottom: 0px !important;
        }

        .woocommerce #reviews #comments .comment_container {
            padding: 5px;
        }

        .woocommerce #reviews #comments ol.commentlist li {
            margin: 0 0 10px;
        }

        .cart_totals h2 {
            margin-bottom: 10px;
            margin-top: 0px;
        }

        .woocommerce table.shop_table td, .woocommerce table.shop_table th {
            padding: 0.2em .5em;
        }

        .woocommerce .products .product.woo_grid_compact .price del {
            display: inline-block;
        }

        .grid_desc_and_btn.rh-flex-center-align {
            display: inline-block;
        }

        .re_ajax_pagination {
            padding: 0;
        }

        .price_for_grid {
            min-height: 18px;
        }

        .grid_desc_and_btn.rh-flex-center-align {
            display: inline-block;
            width: 100%;
        }

        .rh-flex-right-align.btn_for_grid.floatright {
            display: block;
            width: 100%;
        }

        .woocommerce .products .woo_grid_compact .woo_loop_btn {
            font-size: 14px;
            width: 100%;
            height: 34px;
            line-height: 30px;
            border-radius: 0px !important;
        }

        .woocommerce .products .woo_grid_compact .woo_loop_btn i {
            font-size: 14px;
            line-height: 30px;
            display: inline-block;
        }

        .woocommerce .products .product.woo_grid_compact .price {
            font-size: 14px;
            margin-bottom: 5px;
            margin-left: 5px;
        }

        .border-top.mb15.mt15 {
            margin-bottom: 5px !important;
            margin-top: 0 !important;
        }

        article h1 {
            font-size: 18px;
            line-height: 26px;
        }

        .single_add_to_cart_button.button.alt {
            margin-right: 10px;
        }

        .woocommerce-MyAccount-navigation {
            background: #fff;
            padding: 0 10px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .2);
        }

        blockquote:not(.wp-block-quote) p {
            color: #333;
        }

        .related_articles {
            background: #fff;
        }

        .mxh {
            margin-left: 15px;
            display: inline-block;
        }

        .woocommerce .single_add_to_cart_button, .woocommerce div.product form.cart .button {
            background: #f7941d !important;
            border-radius: 0 !important;
        }

        .woo_cat_sec_description {
            background: #fff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .2);
            padding: 10px;
        }

        .re-ribbon-badge.badge_20 span {
            background: #bc000b;
        }

        .woo-single-meta.font80 {
            margin-top: 10px;
        }

        .title h1 {
            margin: 0 0 5px;
        }

        .woocommerce-billing-fields {
            padding: 5px;
            border: 1px solid #dbdbdb;
            border-radius: 10px;
            background: #fff;
        }

        .woocommerce-additional-fields {
            border: 1px solid #dbdbdb;
            border-radius: 10px;
            padding: 5px;
            margin-top: 8px;
            background: #fff;
        }

        .re_woocheckout_order {
            border: 1px solid #dbdbdb;
            padding: 10px;
            border-radius: 10px;
        }

        #woocommerce_price_filter-3 {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .sidebar {
            border: 1px solid #eee;
        }

        #woocommerce_layered_nav-9, #woocommerce_layered_nav-10 {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .woocommerce div.product .summary .price {
            color: #ff3425;
            font-weight: bold !important;
            font-size: 1.2em !important;
        }

        .woocommerce-product-details__short-description {
            font-size: 13px;
            line-height: 15px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .re_wooinner_title_compact {
            border-bottom: 1px solid #eee;
        }

        .rh_deal_block {
            padding: 15px;
        }

        #woocommerce_rating_filter-1 {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .woocommerce .woocommerce-ordering {
            margin: 0 !important;
        }

        nav.woocommerce-breadcrumb {
            border-bottom: 1px solid #eee;
        }

        header .main-nav, .main-nav.dark_style {
            background: rgba(16, 18, 15, 0.8) !important;
            border-bottom: 3px solid #57b13b;
        }

        nav.top_menu > ul:not(.off-canvas) > li.current-menu-item a {
            background: #57b13b;
        }

        nav.top_menu > ul > li > a {
            border-top: 0 !important;
        }

        .main-nav.dark_style nav.top_menu > ul > li {
            border-right: 0 !important;
        }

        .header_top_wrap.dark_style {
            background-color: rgba(50, 47, 55, 0.9) !important;
        }

        .wpsm-one-third {
            width: 40.66% !important;
        }

        .wpsm-two-third {
            width: 46.33% !important;
        }

        .availability {
            float: left;
            margin: 0 !important;
        }

        .sku {
            color: #f04057;
            font-weight: bold;
        }

        .post-meta {
            font-size: 13px !important;
        }

        nav.top_menu > ul > li > a {
            font-size: 14px !important;
        }

        .compare-button-holder .price {
            font-weight: bold;
            font-size: 1em;
            letter-spacing: -0.5px;
            padding: 0 0 15px 0;
            margin: 0;
        }

        .compare-button-holder .price span {
            color: #e5101d;
        }

        .boxcontact {
            display: none;
            background: #06a248;
            bottom: 0;
            padding: 0;
            position: fixed;
            width: 100%;
            z-index: 9999;
            left: 0;
            text-align: center;
        }

        #place_order {
            background: #06a248 !important;
            box-shadow: none !important;
            height: 45px;
        }

        .woocommerce .order_details li strong, .woocommerce-page .order_details li strong {
            font-size: 1em !important;
        }

        .woocommerce .order_details li, .woocommerce-page .order_details li {
            border-bottom: 1px dashed #e0dadf;
            padding: .5em .7em !important;
            width: 100% !important;
        }

        .postmeta {
            background: #fff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .2);
            padding: 10px;
        }

        nav.woocommerce-breadcrumb {
            margin: 0;
            line-height: 14px;
            border-bottom: 0 !important;
        }

        .woocommerce article h1 {
            margin: 0;
        }

        article p, .post p {
            margin: 0 0 10px 0;
        }

        .mb30 {
            margin-bottom: 0px !important;
        }

        .mb25 {
            margin-bottom: 0px !important;
        }

        .sidebar {
            border: 0;
            background: #fff;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .24);
            padding: 10px;
        }

        @media only screen and (max-width: 767px) {
            /*css header-mobile*/
            img.avatar.avatar-96.wp-user-avatar.wp-user-avatar-96.alignnone.photo {
                width: 40px;
            }

            span.inlinestyle.rehub-main-btn-bg.rehub-main-smooth.menu-cart-btn {
                background: none !important;
                box-shadow: none !important;
            }

            .use_nam, .user-dropdown-intop.rhhidden.showonmobile, .icon-search-onclick {
                display: none !important;
            }

            /*css homepage*/
            .re-ribbon-badge {
                top: 0 !important;
                right: 0 !important;
            }

            .buttom_home {
                display: flex;
                width: 25%;
                background: brown;
            }

            li.li_cate {
                width: 30% !important;
            }

            /*css dat hang */
            .codinh {
                display: flex !important;
                width: 100%;
                height: 48px;
                bottom: 0;
                position: fixed;
                background: #fff;
                z-index: 99999999;
            }

            .callnow {
                display: flex;
                width: 20%;
                background: brown;
            }

            a.acallnow {
                display: flex;
                font-size: 0.625rem;
                fill: #fff;
                color: #fff;
                -webkit-box-orient: vertical;
                -webkit-flex-direction: column;
                align-items: center;
                width: 100%;
                height: 100%;
                margin-top: 5px;
            }

            svg#Capa_1 {
                width: 1.5rem;
                height: 1.5rem;
            }

            .dat-mua {
                display: flex;
                width: 80%;
            }

            .datngay {
                display: flex;
                width: 50%;
                background: #f7941d !important;
                color: #fff;
            }

            a.button_datngay {
                display: flex;
                font-size: 0.625rem;
                fill: #fff;
                color: #fff;
                -webkit-box-orient: vertical;
                -webkit-flex-direction: column;
                align-items: center;
                width: 100%;
                height: 100%;
                margin-top: 5px;
            }

            .muangay {
                display: flex;
                width: 50%;
                height: 100%;
            }

            .muangay_bottom {
                display: flex;
                font-size: 1rem;
                fill: #fff;
                color: #fff;
                align-items: center;
                width: 100%;
                height: 48px;
                color: #fff !important;
                background: #e5101d !important;
                border-radius: 0 !important;
            }

            /*-------single--------*/
            .woocommerce-product-gallery {
                margin-bottom: 0px !important;
            }

            .w50 {
                width: 100%;
                margin-left: 0;
                float: none;
            }

            .w30 {
                width: 100%;
                margin: 0;
                float: none;
            }

            .imgtext {
                width: 100% !important;
            }

            .imgright {
                position: initial !important;
            }

            .textright {
                position: initial !important;
                margin-top: 0 !important;
                padding: 0 !important;
                color: black;
                width: 100% !important;
            }

            #fb-root {
                display: none;
            }

            .rh-hover-up:hover {
                transform: none !important;
            }

            .wpsm-one-third {
                width: 100% !important;
            }

            .wpsm-two-third {
                width: 100% !important;
                padding-left: 10px;
                padding-right: 10px;
                background: #fff;
                border-top: 1px solid #e8e8e8;
                border-bottom: 1px solid #e8e8e8;
            }

            .ce_woo_block_top_holder {
                margin-bottom: 10px;
            }

            .woo_bl_title.flowhidden.mb10 h1 {
                font-size: 18px;
                margin-bottom: 0 !important;
            }

            .woo_bl_title.flowhidden.mb10 {
                background: #fff;
                padding: 5px;
                border-top: 1px solid #e8e8e8;
                border-bottom: 1px solid #e8e8e8;
            }

            .rh-tabletext-block {
                border: 1px solid #e8e8e8;
                overflow: hidden;
                margin: 0 0 10px 0;
                box-shadow: none;
            }

            .button_action {
                display: none;
            }

            .mb15 {
                margin-bottom: 0px !important;
            }

            .mt25 {
                margin-top: 0px !important;
            }

            .woo_grid_compact figure:not(.notresized), .woo_grid_compact figure:not(.notresized) a.rh-flex-center-align {
                height: 130px;
            }

            .woocommerce .products.grid_woo .product {
                padding: 4px;
            }

            .col_item.two_column_mobile {
                margin: 0 0% 5px 0% !important;
                width: 50% !important;
            }

            .cat_for_grid.lineheight15 {
                display: none;
            }

            .woocommerce .products .woo_grid_compact h3 {
                line-height: 15px;
                height: 28px;
                font-size: 14px;
            }

            #float-panel-woo-area .rh-container {
                padding: 0 !important;
            }

            .woocommerce div.product .float-panel-woo-button .single_add_to_cart_button {
                padding: 14px 0 14px 0;
                font-size: 14px;
                border-radius: 0 !important;
            }

            .rh-flex-right-align {
                margin-left: 0;
            }

            #float-panel-woo-area {
                border-top: 0 !important;
                box-shadow: 0 -1px 3px 0 rgba(0, 0, 0, .2);
            }

            .woocommerce a.add_to_cart_button, .woocommerce-page a.add_to_cart_button, .woocommerce .single_add_to_cart_button {
                border-radius: 0 !important;
            }

            woocommerce-info {
                font-size: 13px;
                padding: 0.5em 0.5em 0.5em 3.5em !important;
                margin: 0 0 1em;
            }

            .woocommerce form.checkout_coupon, .woocommerce-page form.checkout_coupon {
                margin: 0;
                padding: 0;
                font-size: 13px;
            }

            .re_woocheckout_order h3, .woocommerce-additional-fields h3, .woocommerce-billing-fields h3 {
                font-size: 14px;
                padding: 5px 0 5px 0 !important;
                margin: 0;
            }

            .payment_box.payment_method_bacs {
                display: none !important;
            }

            .woocommerce form .form-row, .woocommerce-page form .form-row {
                margin: 0;
            }

            .woocommerce table.shop_table.woocommerce-checkout-review-order-table thead th {
                padding: 0;
                font-size: 13px;
            }

            .woocommerce #payment ul.payment_methods li, .woocommerce-page #payment ul.payment_methods li, .woocommerce .order_details li strong, .woocommerce-page .order_details li strong {
                font-size: 13px;
            }

            .woocommerce .order_details li, .woocommerce-page .order_details li {
                padding: 0.5em;
            }

            .woocommerce .order_details, .woocommerce-page .order_details {
                margin: 0;
            }

            .woocommerce-order p {
                margin: 5px;
            }

            .wc-bacs-bank-details-heading {
                font-size: 15px;
                margin-bottom: 10px;
            }

            .wc-bacs-bank-details-account-name {
                font-size: 14px;
                margin-bottom: 5px;
            }

            #custom_html-1 {
                display: none;
            }

            input[type="text"], textarea, input[type="tel"], input[type="password"], input[type="email"], input[type="url"], input[type="number"] {
                padding: 5px 5px;
                font: normal 16px/28px Roboto;
            }

            .boxcontact {
                display: block !important;
            }

            .woocommerce .button.alt {
                width: 100%;
            }

            .woocommerce .order_details li, .woocommerce-page .order_details li {
                padding: .5em !important;
            }

            .post ul {
                margin-bottom: 0px !important;
            }

            .woocommerce .quantity input.qty, .woocommerce-page .quantity input.qty {
                height: 35px;
            }

            .woocommerce form.cart .single_add_to_cart_button {
                max-width: 160px;
            }

            .woocommerce div.product .single_add_to_cart_button {
                font: 700 14px/16px 'Roboto', trebuchet ms;
                padding: 10px 0px;
            }

            .mb25, .mb30 {
                margin-bottom: 0 !important;
            }

            .mt30, .mt15 {
                margin-top: 0 !important;
            }

            .rh-container {
                padding-left: 0;
                padding-right: 0;
            }

            .rh-content-wrap {
                padding-top: 5px;
                padding-bottom: 5px;
                background: #f1f1f1;
            }

            /*.select2-container .select2-selection--single .select2-selection__rendered{
                font-size: 14px;
            }*/
            #billing_state, .woocommerce-input-wrapper, .select2-container .select2-selection--single, .selection, .select2-container {
                font: normal 16px/28px Roboto;
            }

            .quick_buy_container .wcqb_button {
                display: none;
            }

            .rh-float-panel.floating {
                display: block;
            }

            #main_header #dl-menu .rh-header-icon {
                margin: 15px 15px;
            }

            .top_custom_content_mobile {
                font-size: 13px;
            }

            .img-mobile {
                width: 1.2rem;
                height: 1.2rem;
                margin-right: .8rem;
                display: inline-block;
            }

            #float-panel-woo-area .float-panel-woo-btn {
                margin: 5px 0 15px;
            }
        }

        @media only screen and (max-width: 1000px) {
            /* css search mobile*/
            #slide-menu-mobile .wpsm-one-fifth {
                padding: 10px 15px 0 15px;
            }

            .wpsm-one-fifth {
                margin-bottom: 0;
            }

            .dl-menuwrapper button i {
                font-size: 30px;
            }

            #slide-menu-mobile ul.off-canvas-active {
                z-index: 99999999;
                height: 100% !important;
            }

            #main_header .rehub-main-btn-bg {
                padding: 8px 5px;
            }

            #main_header #dl-menu .rh-header-icon {
                margin: 10px 4px 10px 8px;;
            }

            header .search {
                width: auto;
            }

            .search-header-contents form.search-form [type="submit"], .search-header-contents form.search-form .nice-select {
                line-height: 28px;
                height: 30px;
                width: 40px !important;
                background: #ffffff !important;
                color: #ff4e0c !important;
            }

            .search-header-contents form.search-form input[type="text"] {
                width: 100%;
                height: 30px;
                line-height: 28px;
                font-size: 16px;
                padding: 2px 37px 2px 10px;
            }

            .search-header-contents {
                width: 65%;
                background-color: #fff;
                box-shadow: none;
                position: absolute;
                left: 45px;
                top: 8px;
                right: 0;
                border-top: 0;
                padding: 0;
                text-align: center;
                visibility: visible;
                opacity: 1;
                border-radius: 10px;
            }

            /* form.search-form [type="submit"]{
            background: #fff !important;
            color: red !important;
            }*/
            .rh-flex-right-align {
                margin-left: auto;
            }

            .dl-menuwrapper button {
                width: 40px;
                height: 45px;
            }

            .search-header-contents .re-aj-search-wrap {
                width: calc(100% + 70px);
            }

            .re-search-result-div {
                padding: 5px 0px;
            }

            .re-search-result-thumb img {
                max-height: 50px;
                max-width: 50px;
            }

            .re-search-result-thumb {
                width: 70px;
            }

            .re-search-result-info {
                width: calc(100% - 80px);
            }
        }
    </style>
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
    <style>
        .qib-container input[type='number']:not(#qib_id):not(#qib_id) {
            -moz-appearance: textfield;
        }

        .qib-container input[type='number']:not(#qib_id):not(#qib_id)::-webkit-outer-spin-button, .qib-container input[type='number']:not(#qib_id):not(#qib_id)::-webkit-inner-spin-button {
            -webkit-appearance: none;
            display: none;
            margin: 0;
        }

        form.cart button[type='submit']:not(#qib_id):not(#qib_id), form.cart .qib-container + div:not(#qib_id):not(#qib_id) {
            display: inline-block;
            margin: 0;
            padding-top: 0;
            padding-bottom: 0;
            float: none;
            vertical-align: top;
            text-align: center;
        }

        form.cart button[type='submit']:not(#qib_id):not(#qib_id):not(_) {
            line-height: 1;
        }

        form.cart button[type='submit']:not(#qib_id):not(#qib_id):not(_):not(_) {
            height: 35px;
            text-align: center;
        }

        form.cart .qib-container + button[type='submit']:not(#qib_id):not(#qib_id), form.cart .qib-container + div:not(#qib_id):not(#qib_id):not(_) {
            margin-left: 1em;
        }

        form.cart button[type='submit']:focus:not(#qib_id):not(#qib_id) {
            outline-width: 2px;
            outline-offset: -2px;
            outline-style: solid;
        }

        .qib-container div.quantity:not(#qib_id):not(#qib_id) {
            float: left;
            line-height: 1;
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
            border-radius: 0;
            width: auto;
            min-height: initial;
            min-width: initial;
            max-height: initial;
            max-width: initial;
        }

        .qib-button:not(#qib_id):not(#qib_id) {
            line-height: 1;
            display: inline-block;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 35px;
            width: 30px;
            color: black;
            background: #e2e2e2;
            border-color: #cac9c9;
            float: left;
            min-height: initial;
            min-width: initial;
            max-height: initial;
            max-width: initial;
            vertical-align: middle;
            font-size: 16px;
            letter-spacing: 0;
            border-style: solid;
            border-width: 1px;
            transition: none;
            border-radius: 0;
        }

        .qib-button:focus:not(#qib_id):not(#qib_id) {
            border: 2px #b3b3aa solid;
            outline: none;
        }

        .qib-button:hover:not(#qib_id):not(#qib_id) {
            background: #d6d5d5;
        }

        .qib-container .quantity input.qty:not(#qib_id):not(#qib_id) {
            line-height: 1;
            background: none;
            text-align: center;
            vertical-align: middle;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 35px;
            width: 45px;
            min-height: initial;
            min-width: initial;
            max-height: initial;
            max-width: initial;
            box-shadow: none;
            font-size: 15px;
            border-style: solid;
            border-color: #cac9c9;
            border-width: 1px 0;
            border-radius: 0;
        }

        .qib-container .quantity input.qty:focus:not(#qib_id):not(#qib_id) {
            border-color: #cac9c9;
            outline: none;
            border-width: 2px 1px;
            border-style: solid;
        }

        .woocommerce table.cart td.product-quantity:not(#qib_id):not(#qib_id) {
            white-space: nowrap;
        }

        @media (min-width: 768px) {
            .woocommerce table.cart td.product-quantity:not(#qib_id):not(#qib_id) {
                text-align: center;
            }
        }

        @media (min-width: 768px) {
            .woocommerce table.cart td.product-quantity .qib-container:not(#qib_id):not(#qib_id) {
                display: flex;
                justify-content: center;
            }
        }

        .qib-container:not(#qib_id):not(#qib_id) {
            display: inline-block;
        }

        .woocommerce-grouped-product-list-item__quantity:not(#qib_id):not(#qib_id) {
            margin: 0;
            padding-left: 0;
            padding-right: 0;
            text-align: left;
        }

        .woocommerce-grouped-product-list-item__quantity .qib-container:not(#qib_id):not(#qib_id) {
            display: flex;
        }

        .quantity .minus:not(#qib_id):not(#qib_id), .quantity .plus:not(#qib_id):not(#qib_id), .quantity > a:not(#qib_id):not(#qib_id) {
            display: none;
        }

        .products.oceanwp-row .qib-container:not(#qib_id):not(#qib_id) {
            margin-bottom: 8px;
        }
    </style>
    <meta name="generator"
          content="Powered by Slider Revolution 6.2.23 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
    <script type="text/javascript">
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
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
                                <style>
                                    .update_cart {
                                        display: none !important;
                                    }

                                    .coupon-desc-bot {
                                        display: flex;
                                    }

                                    .coupon-desc-wrapper {
                                        width: 62%;
                                    }

                                    .coupon_use {
                                        align-items: flex-end;
                                        display: flex;
                                        padding-top: 20px;
                                        color: #5a92e4;
                                        font-size: 15px;
                                    }

                                    .coupon_content {
                                        overflow: auto;
                                        height: 32rem;
                                    }

                                    .coupon-desc {
                                        height: 50%;
                                        font-size: 14px;
                                        padding-top: 10px;
                                        line-height: 20px;
                                    }

                                    .wt-coupon-expiry {
                                        font-size: 13px;
                                        color: rgba(0, 0, 0, .54);
                                        width: 50%;
                                    }

                                    .wt-single-coupon {
                                        margin-bottom: 0 !important;
                                        margin-right: 10px !important;
                                        width: 35% !important;
                                        border-radius: 0 !important;
                                    }

                                    .box_coupon {
                                        display: flex;
                                        border: 1px solid #e8e8e8;
                                        margin-bottom: 10px;
                                        box-shadow: 0.125rem 0.125rem 0.3125rem rgba(0, 0, 0, .07);
                                    }

                                    .tamtinh {
                                        color: #ee4d2d;
                                    }

                                    .checkout-button:hover {
                                        color: #0b5fab;
                                    }

                                    .checkout-button {
                                        background: #f7941d !important;
                                        color: #fff;
                                        padding: 6px 35px;
                                        display: flex;
                                    }

                                    a.shipping-calculator-button {
                                        color: #05a;
                                    }

                                    .colum_cart {
                                        display: flex;
                                        width: 85%;
                                    }

                                    .coupon {
                                        display: none;
                                    }

                                    div#myBtn {
                                        background: #fff;
                                        border-bottom: 1px dashed rgba(0, 0, 0, .09);
                                        padding: 5px;
                                    }

                                    .woocommerce-shipping-totals, .order-total, .cart-discount, .cart-subtotal {
                                        display: flex;
                                        border-bottom: 1px dashed rgba(0, 0, 0, .09);
                                        padding: 5px;
                                    }

                                    .cart_totals {
                                        width: 100% !important;
                                    }

                                    .cart-collaterals {
                                        background: #fff;
                                    }

                                    .woocommerce .cart-collaterals, .woocommerce-page .cart-collaterals {
                                        width: 100% !important;
                                    }

                                    .bl {
                                        cursor: pointer;
                                    }

                                    .chonma {
                                        display: none;
                                        position: fixed;
                                        width: 100%;
                                        height: 100%;
                                        top: 0;
                                        background: #fff;
                                        z-index: 999999;
                                        color: #000;
                                    }

                                    svg.svg-inline--fa.fa-arrow-left.fa-w-14 {
                                        height: 25px;
                                        margin: 10px;
                                    }

                                    .woocommerce-cart-form__cart-item.cart_item {
                                        display: flex;
                                        border: 1px solid #ddd;
                                        margin-bottom: 10px;
                                        background: #fff;
                                    }

                                    .product-thumbnail {
                                        width: 50px;
                                        align-items: center;
                                        display: flex;
                                    }

                                    .top_cart {
                                        display: flex;
                                    }

                                    .product-remove {
                                        width: 30%;
                                        align-items: center;
                                        display: flex;
                                        padding-left: 5px;
                                    }

                                    .product-thumbnail {
                                        width: 60%;
                                        align-items: center;
                                        display: flex;
                                    }

                                    .product-name {
                                        width: 62%;
                                        align-items: center;
                                        display: flex;
                                    }

                                    .product-price {
                                        width: 10%;
                                        align-items: center;
                                        display: flex;
                                    }

                                    .product-quantity {
                                        width: 10%;
                                        align-items: center;
                                        display: flex;
                                    }

                                    .product-subtotal {
                                        width: 10%;
                                        align-items: center;
                                        display: flex;
                                    }

                                    .cot1 {
                                        display: flex;
                                        width: 10%;
                                    }

                                    .cot2 {
                                        width: 90%;
                                        padding: 5px;
                                        display: flex;
                                    }

                                    .chonma1 {
                                        display: flex;
                                        background: #fff;
                                        float: right;
                                        width: 100%;
                                    }

                                    span.button_voucher {
                                        color: #05a;
                                        cursor: pointer;
                                        padding-left: 20px;
                                    }

                                    @media only screen and (max-width: 767px) {
                                        .label-gh {
                                            float: left;
                                        }

                                        .d_block {
                                            display: block;
                                        }

                                        .modal-content {
                                            width: 100% !important;
                                            height: 100% !important;
                                            margin-top: 0 !important;
                                        }

                            $            .top_cart {
                                            display: none;
                                        }

                                        .cot1 {
                                            display: flex;
                                            width: 30%;
                                        }

                                        .cot2 {
                                            width: 70%;
                                            display: block;
                                        }

                                        .product-name {
                                            width: 100%;
                                            align-items: center;
                                            display: block;
                                            white-space: nowrap;
                                            line-height: 16px;
                                            font-size: 14px;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                        }

                                        .product-price {
                                            width: 10%;
                                            align-items: center;
                                            /* display: flex; */
                                            font-size: 14px;
                                            line-height: 16px;
                                            display: flex;
                                        }

                                        .product-quantity {
                                            width: 100%;
                                            align-items: center;
                                            display: flex;
                                            /* height: 36px; */
                                        }

                                        .qib-button:not(#qib_id):not(#qib_id) {
                                            height: 22px !important;
                                        }

                                        .qib-container .quantity input.qty:not(#qib_id):not(#qib_id) {
                                            height: 22px !important;
                                        }

                                        .product-subtotal {
                                            width: 100%;
                                            align-items: center;
                                            display: block;
                                        }

                                        span.woocommerce-Price-amount.amount {
                                            float: right;
                                        }
                                    }

                                    /*-------------------------*/
                                    /* The Modal (background) */
                                    .modal {
                                        display: none; /* Hidden by default */
                                        position: fixed; /* Stay in place */
                                        z-index: 999999999; /* Sit on top */
                                        /* Location of the box */
                                        left: 0;
                                        top: 0;
                                        width: 100%; /* Full width */
                                        height: 100%; /* Full height */
                                        overflow: auto; /* Enable scroll if needed */
                                        background-color: rgb(0, 0, 0); /* Fallback color */
                                        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
                                    }

                                    /* Modal Content */
                                    .modal-content {
                                        background-color: #fefefe;
                                        margin: auto;
                                        padding: 20px;
                                        border: 1px solid #888;
                                        width: 38.5rem;
                                        height: 38.5rem;
                                        margin-top: 10%;
                                    }

                                    /* The Close Button */
                                    .close {
                                        color: #aaaaaa;
                                        float: right;
                                        font-size: 28px;
                                        font-weight: bold;
                                    }

                                    .close:hover,
                                    .close:focus {
                                        color: #000;
                                        text-decoration: none;
                                        cursor: pointer;
                                    }
                                </style>
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
                                        <div>
                                            @foreach($data_cart['items'] as $key => $item)
                                                <div class="woocommerce-cart-form__cart-item cart_item">
                                                    <div class="cot1">
                                                        <div class="product-remove">
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
                                                            </a></div>
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
                                                            <a href="https://shopmc.com.vn/san-pham/kiem-vang-minecraft/">{{$item->title}}</a>
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
                                                                    </label> <input
                                                                        type="number"
                                                                        id="quantity"
                                                                        class="input-text qty text"
                                                                        step="1"
                                                                        min="0"
                                                                        max=""
                                                                        name="cart[{{$item->id}}][qty]"
                                                                        value="{{$data_cart['cart_items'][$key]->quantity}}"
                                                                        title="SL"
                                                                        size="4"
                                                                        placeholder=""
                                                                        inputmode="numeric"
                                                                        onchange="changeQuantity({{$data_cart['cart_items'][$key]->item_id}})"/>
                                                                </div>
                                                                <button type="button" class="plus qib-button">+</button>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            function changeQuantity(id) {
                                                                $.ajax({
                                                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                                                    url:'/change_quantity/'+id,
                                                                    type:'POST',
                                                                    data:{
                                                                        quantity:$('#quantity').val(),
                                                                    },
                                                                    success:function (res) {
                                                                       $('#item_price').html(new Intl.NumberFormat().format(res.cart_items['price']));
                                                                        $('#total_price').html(new Intl.NumberFormat().format(res.total_price));
                                                                        $('#total_price_all').html(new Intl.NumberFormat().format(res.total_price));
                                                                    }
                                                                });
                                                        }
                                                    </script>
                                                    <div class="product-subtotal tamtinh" data-title="Tạm tính" >
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>
                                                                <span class="woocommerce-Price-currencySymbol" id="item_price">
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
                                            <div class="wc-proceed-to-checkout">
                                                <button type="submit" class="checkout-button alt wc-forward">Mua Hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <style type="text/css">
                                    .wt-single-coupon {
                                        background-color: #2890a8;
                                        border: 2px dashed #ffffff;
                                        color: #ffffff;
                                        box-shadow: 0 0 0 4px #2890a8, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
                                        text-shadow: -1px -1px #2890a8;
                                    }

                                    .wt-single-coupon.used-coupon {
                                        background-color: #eeeeee;
                                        border: 2px dashed #000000;
                                        color: #000000;
                                        box-shadow: 0 0 0 4px #eeeeee, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
                                        text-shadow: -1px -1px #eeeeee;
                                    }

                                    .wt-single-coupon.used-coupon.expired {
                                        background-color: #f3dfdf;
                                        border: 2px dashed #eccaca;
                                        color: #eccaca;
                                        box-shadow: 0 0 0 4px #f3dfdf, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
                                        text-shadow: -1px -1px #f3dfdf;
                                    }

                                </style>

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
                                            href="https://shopmc.com.vn/shop/">&lt;&lt; Chọn thêm</a><a
                                            style="height: 45px; width: 50%; padding: 12px; display: inline-block; color: #fff; font-weight: bold;"
                                            href="https://shopmc.com.vn/checkout/">Tiếp tục &gt;&gt;</a></div>
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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
