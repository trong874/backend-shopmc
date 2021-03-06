<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8" lang="vi"> <![endif]-->

<html lang="vi">
<head>
    <meta property="fb:app_id" content="458273852376116"/>
    <meta charset="UTF-8"/>

    <link rel="icon" href="{{asset("$settings[8]['val']")}}" type="image/x-icon"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- feeds & pingback -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
   <script src = "{{asset('frontend/js/jquery-3.6.0.js')}}" integrity = "sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin ="anonymous" ></script>
    <link rel="stylesheet" href="{{asset('frontend/css/all.css')}}" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- This site is optimized with the Yoast SEO plugin v15.9 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>{{$page_title ?? "SHOP PHỤ KIỆN GAME"}}</title>
    <!-- JavaScript -->
    <script src="{{asset('frontend/js/alertify.min.js')}}"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/alertify.min.css')}}"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="{{asset('frontend/css/default.min.css')}}"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="{{asset('frontend/css/semantic.min.css')}}"/>
    <meta name="description"
          content="{{$page_description ?? 'Shop Phụ Kiện Game chuyên cung cấp các phụ kiện chơi game chính hãng chất lượng'}}"/>
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <meta property="fb:admins" content="&#123;juss.ladykillah.7&#125;"/>
    <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    // Append the host(domain name, ip) to the URL.
    $url .= $_SERVER['HTTP_HOST'];
    // Append the requested resource location to the URL
    $url .= $_SERVER['REQUEST_URI'];
    ?>
    <link rel="canonical" href="{{$url}}"/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Phukiengame - Đồ chơi minecraft chính hãng tại việt nam"/>
    <meta property="og:description"
          content="Phukiengame cung cấp đồ chơi minecraft chính hãng duy nhất tại việt nam, các sản phẩm đồ chơi minecraft như balo , đồng hồ, sách, quần áo minecraft..."/>
    <meta property="og:url" content="{{$url}}"/>
    <meta property="og:site_name" content="Phukiengame"/>
    <meta property="article:modified_time" content="{{time()}}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:label1" content="Est. reading time">
    <meta name="twitter:data1" content="12 phút">
    <!-- / Yoast SEO plugin. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend/js/home/style.js')}}"></script>
    <link rel='stylesheet' id='wp-block-library-css'
          href='{{asset('frontend/css/block-library/style-min.css')}}'
          media='all'/>
    <link rel='stylesheet' id='wc-block-vendors-style-css'
          href='{{asset('frontend/css/build/vendors-style.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='wc-block-style-css'
          href='{{asset('frontend/css/build/style.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='contact-form-7-css'
          href='{{asset('frontend/css/css/style.css')}}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='Roboto-css'
          href='//fonts.googleapis.com/css?family=Roboto&#038;subset=latin&#038;ver=5.5.6' type='text/css' media='all'/>
    <link rel='stylesheet' id='rs-plugin-settings-css'
          href='{{asset('frontend/css/css/rs6.css')}}' type='text/css'
          media='all'/>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wt-smart-coupon-css'
          href='{{asset('frontend/css/css/wt-smart-coupon-public.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='parent-style-css'
          href='{{asset('frontend/css/rehub-theme/style.css')}}' type='text/css' media='all'/>
    <link rel='stylesheet' id='woo-viet-provinces-style-css'
          href='{{asset('frontend/css/assets/provinces.css')}}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='elementor-icons-css'
          href='{{asset('frontend/css/css/elementor-icons.min.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-animations-css'
          href='{{asset('frontend/css/animations/animations.min.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
          href='{{asset('frontend/css/css/frontend-legacy.min.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='elementor-frontend-css'
          href='{{asset('frontend/css/css/frontend.min.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='js_composer_front-css'
          href='{{asset('frontend/css/css/js_composer.min.css')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='rhstyle-css'
          href='{{asset('frontend/css/rehub-blankchild/style.css')}}'
          media='all'/>
    <link rel='stylesheet' id='responsive-css'
          href='{{asset('frontend/css/css/responsive.css')}}'
          media='all'/>
    <link rel='stylesheet' id='rehubicons-css'
          href='{{asset('frontend/css/rehub-theme/iconstyle.css')}}'
          media='all'/>
    <link rel='stylesheet' id='rehub-woocommerce-css'
          href='{{asset('frontend/css/css/woocommerce.css')}}'
          media='all'/>
    <script type='text/javascript' src='{{asset('frontend/js/jquery/jquery.js')}}'
            id='jquery-core-js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type='text/javascript'
            src='{{asset('frontend/js/js/rbtools.min.js')}}'
            id='tp-tools-js'></script>
    <script type='text/javascript'
            src='{{asset('frontend/js/js/rs6.min.js')}}'
            id='revmin-js'></script>
    <script type='text/javascript'
            src='{{asset('frontend/js/js/wt-smart-coupon-public.js')}}'
            id='wt-smart-coupon-js'></script>
    <script type='text/javascript'
            src='{{asset('frontend/js/public/wgact.js')}}'
            id='front-end-scripts-js'></script>
    <link rel='shortlink' href='{{$url}}'/>
    <link rel="preload" href="{{asset('frontend/css/rehub-theme/fonts/rhicons.woff2?leryx9')}}" as="font"
          type="font/woff2" crossorigin="crossorigin">
    <link rel="stylesheet" href="{{asset('frontend/css/home/style2.css')}}?v={{time()}}">
    <link rel="stylesheet" href="{{asset('frontend/css/home/style.css')}}?v={{time()}}">
    <link rel="stylesheet" href="{{asset('frontend/css/home/filter_price.css')}}">
@yield('styles')
<!-- START woopt Pixel Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-861272757"></script>
    <script>
        gtag('config', 'AW-861272757');
    </script>
    <!-- END woopt Pixel Manager -->
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    <link rel="icon" href="{{asset('/frontend/image/cropped-mc-32x32.png')}}" sizes="32x32"/>
    <link rel="icon" href="{{asset('/frontend/image/cropped-mc-192x192.png')}}" sizes="192x192"/>
    <link rel="apple-touch-icon" href="{{asset('/frontend/image/cropped-mc-180x180.png')}}"/>
    <meta name="msapplication-TileImage"
          content="{{asset('/frontend/image/cropped-mc-270x270.png')}}"/>
    <script src="{{asset('frontend/js/home/style2.js')}}"></script>
    <script src="{{asset('frontend/js/home/filter_price.js')}}"></script>
    <noscript>
        <style> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="{{asset('frontend/js/gtag/js.js')}}"></script>
</head>
<body
    class="home page-template page-template-page-home page-template-page-home-php page page-id-9004 theme-rehub-theme woocommerce-no-js noinnerpadding wpb-js-composer js-comp-ver-6.4.1 vc_responsive elementor-default elementor-kit-22691 elementor-page elementor-page-9004">

<!-- Outer Start -->
<div class="rh-outer-wrap">
    <div id="top_ankor"></div>
    <!-- HEADER -->
@include('frontend.layout.core.hearder')
<!-- CONTENT -->
@yield('content')
<!-- /CONTENT -->

    <style>
        .buttom_home {
            display: flex;
            width: 20%;
            background: #fff;
        }

        .buttom_home_a {
            display: flex;
            font-size: 0.625rem;
            fill: rgba(0, 0, 0, .87);
            color: rgba(0, 0, 0, .87);
            -webkit-box-orient: vertical;
            -webkit-flex-direction: column;
            align-items: center;
            width: 100%;
            height: 100%;
            margin-top: 5px;
        }

        .codinh {
            box-shadow: 0 2px 4px 0 rgb(0 0 0);
        }

        .goingay {
            text-align: center;
        }

        @media screen and (max-width: 480px) {
            #slider_home #rev_slider_24_1_forcefullwidth, #slider_home #rev_slider_24_1_wrapper, #slider_home #rev_slider_24_1 {
                height: 60px !important;
            }

            #slider_home #rev_slider_24_1 rs-bullets {
                top: 76px !important
            }

            #slider_home #rev_slider_24_1_wrapper .ares .tp-bullet {
                width: 6px;
                height: 6px;
                left: 8px;
            }
        }

    </style>
    <div class="codinh">
        <div class="buttom_home">
            <a class="buttom_home_a" href="/">
                <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="home"
                     class="svg-inline--fa fa-home fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 576 512">
                    <path fill="currentColor"
                          d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                </svg>
                <div class="goingay">Home</div>
            </a>
        </div>
        <div class="buttom_home">
            <a class="buttom_home_a" href="#">
                <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="phone-volume"
                     class="svg-inline--fa fa-phone-volume fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 384 512">
                    <path fill="currentColor"
                          d="M97.333 506.966c-129.874-129.874-129.681-340.252 0-469.933 5.698-5.698 14.527-6.632 21.263-2.422l64.817 40.513a17.187 17.187 0 0 1 6.849 20.958l-32.408 81.021a17.188 17.188 0 0 1-17.669 10.719l-55.81-5.58c-21.051 58.261-20.612 122.471 0 179.515l55.811-5.581a17.188 17.188 0 0 1 17.669 10.719l32.408 81.022a17.188 17.188 0 0 1-6.849 20.958l-64.817 40.513a17.19 17.19 0 0 1-21.264-2.422zM247.126 95.473c11.832 20.047 11.832 45.008 0 65.055-3.95 6.693-13.108 7.959-18.718 2.581l-5.975-5.726c-3.911-3.748-4.793-9.622-2.261-14.41a32.063 32.063 0 0 0 0-29.945c-2.533-4.788-1.65-10.662 2.261-14.41l5.975-5.726c5.61-5.378 14.768-4.112 18.718 2.581zm91.787-91.187c60.14 71.604 60.092 175.882 0 247.428-4.474 5.327-12.53 5.746-17.552.933l-5.798-5.557c-4.56-4.371-4.977-11.529-.93-16.379 49.687-59.538 49.646-145.933 0-205.422-4.047-4.85-3.631-12.008.93-16.379l5.798-5.557c5.022-4.813 13.078-4.394 17.552.933zm-45.972 44.941c36.05 46.322 36.108 111.149 0 157.546-4.39 5.641-12.697 6.251-17.856 1.304l-5.818-5.579c-4.4-4.219-4.998-11.095-1.285-15.931 26.536-34.564 26.534-82.572 0-117.134-3.713-4.836-3.115-11.711 1.285-15.931l5.818-5.579c5.159-4.947 13.466-4.337 17.856 1.304z"></path>
                </svg>
                <div class="goingay">Gọi Ngay</div>
            </a>
        </div>
        <div class="buttom_home">
            <a class="buttom_home_a" href="#">
                <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="gift"
                     class="svg-inline--fa fa-gift fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512">
                    <path fill="currentColor"
                          d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"></path>
                </svg>
                <div class="goingay">Khuyến Mại</div>
            </a>
        </div>
        <div class="buttom_home">
            <a class="buttom_home_a" href="#">
                <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="comment-dots"
                     class="svg-inline--fa fa-comment-dots fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512">
                    <path fill="currentColor"
                          d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path>
                </svg>
                <div class="goingay">Chat Zalo</div>
            </a>
        </div>
        <div class="buttom_home">
            <div class="buttom_home_a userblockintop"><span class="act-rehub-login-popup" data-type="login">
                        <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="user"
                             class="rhicon rhi-sign-in svg-inline--fa fa-user fa-w-14" role="img"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor"
                                                                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                <div class="goingay">Tôi</div>
                    </span></div>
        </div>
    </div>

    <!-- FOOTER -->
@include('frontend.layout.core.footer')
<!-- FOOTER -->


</div>
<!-- Outer End -->
<span class="rehub_scroll" id="topcontrol" data-scrollto="#top_ankor"><i class="rhicon rhi-chevron-up"></i></span>


<div id="rhmobpnlcustom" class="rhhidden">
    <div id="rhmobtoppnl" style="background-color: #ffffff;" class="pr15 pl15 pb15 pt15">
        <div class="text-center"><a href=""><img id="mobpanelimg"
                                                 src="{{asset('frontend/image/Minecraft_logo.png')}}"
                                                 alt="Logo"/></a></div>
    </div>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="{{asset('frontend/js/gtag/js.js')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-117830179-1');
</script>


<div id="rehub-login-popup-block">
    <!-- Register form -->

@include('frontend.position.register')
<!-- Login form -->
@include('frontend.position.login')
<!-- Lost Password form -->
    @include('frontend.position.lost-password')
</div>

<script type="text/html" id="wpb-modifications"></script>
<link href="{{asset('frontend/css/assets/css.css')}}" rel="stylesheet" property="stylesheet" media="all"
      type="text/css">

<script type="text/javascript">
    (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })()
</script>
<script type="text/javascript">
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            var err = "<div class='rs_error_message_box'>";
            err += "<div class='rs_error_message_oops'>Oops...</div>";
            err += "<div class='rs_error_message_content'>";
            err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
            err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
            err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
            err += "</div>";
            err += "</div>";
            var slider = document.getElementById(sliderID);
            slider.innerHTML = err;
            slider.style.display = "block";
        }
    }
</script>
<script type='text/javascript'
        src='{{asset('/frontend/js/scripts.js')}}'
        id='contact-form-7-js'></script>
<script type='text/javascript'
        src='{{asset('/frontend/js/jquery.blockUI.min.js')}}' f
        id='jquery-blockui-js'></script>
<script type='text/javascript'
        src='{{asset('/frontend/js/add-to-cart.min.js')}}'
        id='wc-add-to-cart-js'></script>
<script type='text/javascript'
        src='{{asset('/frontend/js/js.cookie.min.js')}}'
        id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='{{asset('/frontend/js/woocommerce.min.js')}}'
        id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_ba093b76a419103d1f3886ae22b4d7e3",
        "fragment_name": "wc_fragments_ba093b76a419103d1f3886ae22b4d7e3",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='{{asset('frontend/js/frontend/cart-fragments.min.js')}}'
        id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/assets/provinces.js')}}'
        id='woo-viet-provinces-script-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/inview.js')}}'
        id='rhinview-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/pgwmodal.js')}}'
        id='rhpgwmodal-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/unveil.js')}}'
        id='rhunveil-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/hoverintent.js')}}'
        id='rhhoverintent-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/countdown.js')}}'
        id='rhcountdown-js'></script>
<script type='text/javascript' id='rehub-js-extra'>
    /* <![CDATA[ */
    var translation = {
        "back": "back",
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "fin": "That's all",
        "noresults": "No results found",
        "your_rating": "Your Rating:",
        "nonce": "7099a5c150",
        "hotnonce": "a4171bc671",
        "wishnonce": "25ef87db0d",
        "searchnonce": "8525b6677d",
        "filternonce": "ad83a1b939",
        "rating_tabs_id": "3e8e3b82b0",
        "max_temp": "10",
        "min_temp": "-10",
        "helpnotnonce": "d6e56acca2"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='{{asset('frontend/js/js/custom.js')}}'
        id='rehub-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/niceselect.js')}}'
        id='rhniceselect-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/woocommerce.js')}}'
        id='rehubwoo-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/jquery.sticky.js')}}'
        id='sticky-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/ajaxsearch.js')}}'
        id='rehubajaxsearch-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/comment-reply.min.js')}}'
        id='comment-reply-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/wp-embed.min.js')}}'
        id='wp-embed-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/sdks/OneSignalSDK.js')}}'
        id='remote_sdk-js'></script>
<script type='text/javascript' src='{{asset('frontend/js/js/userlogin.js')}}'
        id='rehubuserlogin-js'></script>
<script type='text/javascript'
        src='{{asset('frontend/js/dist/js_composer_front.min.js')}}'
        id='wpb_composer_front_js-js'></script>
<script type="text/javascript">
    jQuery(function ($) {

        // Make the code work after page load.
        $(document).ready(function () {
            QtyChng();
        });

        // Make the code work after executing AJAX.
        $(document).ajaxComplete(function () {
            QtyChng();
        });

        function QtyChng() {
            $(document).off("click", ".qib-button").on("click", ".qib-button", function () {
                // Find quantity input field corresponding to increment button clicked.
                var qty = $(this).siblings(".quantity").find(".qty");
                // Read value and attributes min, max, step.
                var val = parseFloat(qty.val());
                var max = parseFloat(qty.attr("max"));
                var min = parseFloat(qty.attr("min"));
                var step = parseFloat(qty.attr("step"));

                // Change input field value if result is in min and max range.
                // If the result is above max then change to max and alert user about exceeding max stock.
                // If the field is empty, fill with min for "-" (0 possible) and step for "+".
                if ($(this).is(".plus")) {
                    if (val === max) return false;
                    if (isNaN(val)) {
                        qty.val(step);
                    } else if (val + step > max) {
                        qty.val(max);
                    } else {
                        qty.val(val + step);
                    }
                } else {
                    if (val === min) return false;
                    if (isNaN(val)) {
                        qty.val(min);
                    } else if (val - step < min) {
                        qty.val(min);
                    } else {
                        qty.val(val - step);
                    }
                }

                qty.val(Math.round(qty.val() * 100) / 100);
                qty.trigger("change");
                $("body").removeClass("sf-input-focused");
            });
        }
    });
</script>
@yield('scripts')
</body>
</html>

