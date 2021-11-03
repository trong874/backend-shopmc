@extends('frontend.layout.master')
@section('content')
    <div class="rh-container full_width">
        <div class="rh-content-wrap clearfix">
            <!-- Main Side -->
            <div class="main-side page clearfix full_width" id="content">
                <div class="rh-post-wrapper">
                    <article class="post mb0" id="page-9004">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1564761728966 vc_row-has-fill centered-container">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <!-- START Slider 1 REVOLUTION SLIDER 6.2.23 -->
                                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block w-100" src="{{asset('frontend/image/lego-ninjago.jpg')}}" alt="First slide" width="1200px" height="240px">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100" src="{{asset('frontend/image/lego-minecraft.jpg')}}" alt="Second slide" width="1200px" height="240px">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100" src="{{asset('frontend/image/lego-friends')}}" alt="Third slide" width="1200px" height="240px">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                        <!-- END REVOLUTION SLIDER -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid centered-container">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                            <div class="wpb_wrapper">
                                                <div class="cate_home">
                                                    <ul class="ul_cate">
                                                        @foreach($categories as $category)
                                                        <li class="li_cate">
                                                            <div class="li_a">
                                                                <a class="link_a"
                                                                   href="{{$category->url}}">
                                                                    <div class="buttom_cat">
                                                                        <div class="buttom_cat_img">
                                                                            <div class="buttom_cat_img_sub">
                                                                                <div class="buttom_cat_img_sub_link"
                                                                                     style="background-image: url(&quot;{{$category->image}}&quot;); background-size: contain; background-repeat: no-repeat;background-position: center;"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="buttom_cat_text">
                                                                            <div class="buttom_cat_text-h3">{{$category->title}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @include('frontend.position.flash_Sale')
                            @include('frontend.position.minecraft')
                        <div class="vc_row wpb_row vc_row-fluid centered-container">
                            <div
                                class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md vc_hidden-sm">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce">
                                            <div class="rh-flex-eq-height products  re_aj_pag_auto_wrap col_wrap_six grid_woo"
                                                data-filterargs='{"post_type":"product","posts_per_page":"36","orderby":"rand","order":"DESC","tax_query":[{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}]}'
                                                data-template="woogridpart" id="rh_woogrid_986472991"
                                                data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>

                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/balo-minecraft-diamond-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/ba_lo_minecraft_diamond-1try5k42kzsqnqsu3aya4febjvilli7fchzgwd0g8yf8.jpg"
                                                                 width="300" alt="Balo Minecraft Diamond Chính Hãng"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/balo-minecraft-diamond-chinh-hang/">Balo
                                                            Minecraft Diamond Chính Hãng</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>550,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 81</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/combo-moc-khoa-minecraft-hangers-series-2/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/Combo-moc-khoa-Minecraft-hangers-series2-1vm62ecg068reldmt0td42pp1kpv7qx8uqiprybqw9xg.png"
                                                                 width="300"
                                                                 alt="Combo móc khóa Minecraft hangers series 2"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/combo-moc-khoa-minecraft-hangers-series-2/">Combo
                                                            móc khóa Minecraft hangers series 2</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 76</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/den-khoi-gold-vang-minecraft-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/den-khoi-gold-vang-minecraft-chinh-hang-1vmeg1fqjripec333nzu57ijz9fwcihn3wp61atfjq4c.png"
                                                                 width="300"
                                                                 alt="Đèn khối GOLD &#8211; Vàng minecraft chính hãng"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/den-khoi-gold-vang-minecraft-chinh-hang/">Đèn
                                                            khối GOLD &#8211; Vàng minecraft chính hãng</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>330,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 95</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/ao-khoac-diamond-minecraft-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/ao-khoac-diamond-minecraft-chinh-hang-1vlc3g42oftc8gfp5tnovs4yxn8qc25hwtzh0zyegrjo.png"
                                                                 width="300" alt="ÁO KHOÁC DIAMOND MINECRAFT CHÍNH HÃNG"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/ao-khoac-diamond-minecraft-chinh-hang/">ÁO
                                                            KHOÁC DIAMOND MINECRAFT CHÍNH HÃNG</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>450,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 104</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 19%</span></span> <span
                                                        class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/do-choi-lego-ninjago-70651-tranh-chap-ngai-vang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/70651-1-1xbs7k87duhcinqnsovg6cift23pqz6f9z6hqgo5g030.jpg"
                                                                 width="300"
                                                                 alt="Lego Ninjago 70651 &#8211; Tranh chấp ngai vàng"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/do-choi-lego-ninjago-70651-tranh-chap-ngai-vang/">Lego
                                                            Ninjago 70651 &#8211; Tranh chấp ngai vàng</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>1,050,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>850,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 169</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/mo-hinh-minecraft-coreplayer-survival-pack-action-figure/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/mô-hình-player-surival-1tsctr6jwvqxpkr1xznj97oerix2u6iljpu6azhaaddw.jpg"
                                                                 width="300"
                                                                 alt="Mô hình Minecraft Coreplayer Survival Pack Action Figure"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/mo-hinh-minecraft-coreplayer-survival-pack-action-figure/">Mô
                                                            hình Minecraft Coreplayer Survival Pack Action Figure</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>220,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <div class="rh_woo_star" title="Rated 5 out of 5"><span
                                                                    class="rhwoostar rhwoostar1 active">&#9733;</span><span
                                                                    class="rhwoostar rhwoostar2 active">&#9733;</span><span
                                                                    class="rhwoostar rhwoostar3 active">&#9733;</span><span
                                                                    class="rhwoostar rhwoostar4 active">&#9733;</span><span
                                                                    class="rhwoostar rhwoostar5 active">&#9733;</span>
                                                            </div>
                                                            <span class="greycolor postview">Đã bán 710</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 11%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/do-choi-lego-ninjago-maste-rs-of-spinjitzu-70652/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/70652.1-1vnci3q79q3d4jyn85siqpxdh0uzqyh5gvmd0wd0w75w.jpg"
                                                                 width="300"
                                                                 alt="LEGO Ninjago 70652 Stormbringer Dragon Toy &#8211; Rồng điện Stormbringer"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/do-choi-lego-ninjago-maste-rs-of-spinjitzu-70652/">LEGO
                                                            Ninjago 70652 Stormbringer Dragon Toy &#8211; Rồng điện
                                                            Stormbringer</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>1,900,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>1,700,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 1760</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 50%</span></span> <span
                                                        class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/kiem-go-minecraft-phien-ban-limited/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/kg1-1xbs6z1sij30tyoz8stw462txg8jl3skjt0wcbcfvbkc.jpg"
                                                                 width="300" alt="Kiếm gỗ minecraft – Phiên bản Limited"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/kiem-go-minecraft-phien-ban-limited/">Kiếm
                                                            gỗ minecraft – Phiên bản Limited</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>900,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>450,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 236</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 30%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/mo-hinh-zombie-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/mo_hinh_zombie_2-1ts8mgk0jwbkz2hgyklial659ezwzrefce7ipjd9w284.jpg"
                                                                 width="300" alt="Mô Hình Zombie Minecraft"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/mo-hinh-zombie-chinh-hang/">Mô
                                                            Hình Zombie Minecraft</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>200,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>140,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 131</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/ao-khoac-enderman-minecraft/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/ao-khoac-enderman-minecraft-1vlqbbcddki5umu89mnh2q19h025adrrphn3awmacmr0.png"
                                                                 width="300" alt="Áo khoác Enderman Minecraft"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/ao-khoac-enderman-minecraft/">Áo
                                                            khoác Enderman Minecraft</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>450,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 116</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/mo-hinh-steve-15cm-chinh-hang-mojang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/mo-hinh-steve-1ts8n60h6zsfjiahqx3njm8volofv8ahmw7l4g5j1jk4.jpg"
                                                                 width="300" alt="Mô Hình Steve 15cm Chính hãng Mojang"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/mo-hinh-steve-15cm-chinh-hang-mojang/">Mô
                                                            Hình Steve 15cm Chính hãng Mojang</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>420,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 96</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/lon-nuoc-hoat-hinh-minecraft/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/lon-nuoc-hoat-hinh-minecraft-1vmeiu6f68mm1zk352phoxxdgl40vtbwsjbl4m51rmak.png"
                                                                 width="300" alt="Lon nước hoạt hình Minecraft"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/lon-nuoc-hoat-hinh-minecraft/">Lon
                                                            nước hoạt hình Minecraft</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>210,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 75</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 11%</span></span> <span
                                                        class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/mu-xam-thap-luc-bao-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/mũ-1ts2vy339kv0q3u0c3m8uuyefztx1ldbfbnxoe9o7wbg.png"
                                                                 width="300" alt="Mũ Xám Thập Lục Bảo Chính Hãng"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/mu-xam-thap-luc-bao-chinh-hang/">Mũ
                                                            Xám Thập Lục Bảo Chính Hãng</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>190,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>170,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 67</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 17%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/nhoi-bong-luffy-one-piece/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/97-1xbs6z70i91vzb6znqc5djxihn1luik1a4eqtfbs66v8.jpg"
                                                                 width="300" alt="NHỒI BÔNG LUFFY – ONE PIECE"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/nhoi-bong-luffy-one-piece/">NHỒI
                                                            BÔNG LUFFY – ONE PIECE</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>180,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>150,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 85</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 11%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/dong-ho-deo-tay-cao-cap-minecraft/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/dong-ho-deo-tay-cao-cap-minecraft-1vl349wzhtz01s9oop1nd1njbjpjgiz7iu2215b7hkt0.jpg"
                                                                 width="300" alt="Đồng hồ đeo tay cao cấp minecraft"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/dong-ho-deo-tay-cao-cap-minecraft/">Đồng
                                                            hồ đeo tay cao cấp minecraft</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>450,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>400,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 104</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 9%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/combo-day-chuyen-minecraft-loai-2/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/combo-day-chuyen-2-1xbs867c7mpfirjemp7f654srpeqclrc0vy8qpukxevo.jpg"
                                                                 width="300" alt="Combo dây chuyền minecraft loại 2"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/combo-day-chuyen-minecraft-loai-2/">Combo
                                                            dây chuyền minecraft loại 2</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>350,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>320,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 71</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/nhoi-bong-iron-golem-minecraft-35cm/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/nhoi-bong-iron-golem-minecraft-35cm-1vm1f1tfhceawpu5hhahkgpda4ifzkdibijglv5lyuc4.png"
                                                                 width="300" alt="Nhồi Bông Iron Golem Minecraft 35cm"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/nhoi-bong-iron-golem-minecraft-35cm/">Nhồi
                                                            Bông Iron Golem Minecraft 35cm</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>240,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 82</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/vi-minecraft-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/vi-minecraft-chinh-hang-1vmyzr7hjqrir2c2waaz4bh2ta2xbdqvi4hs0zmexu4c.png"
                                                                 width="300" alt="Ví minecraft chính hãng"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/vi-minecraft-chinh-hang/">Ví
                                                            minecraft chính hãng</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>200,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 143</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 26%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/eldrador-42451-mo-hinh-cho-2-dau/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/42451-1-1vlxg72zwkxmcnqpdzpdqyqeo5vvr9jzkppar4pk3qdg.jpg"
                                                                 width="300"
                                                                 alt="ELDRADOR 42451 &#8211; Mô hình chó 2 đầu"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/eldrador-42451-mo-hinh-cho-2-dau/">ELDRADOR
                                                            42451 &#8211; Mô hình chó 2 đầu</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>500,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>370,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 106</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/moc-khoa-dia-nguc-minecraft-sieu-dep/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/Móc-khóa-địa-ngục-2-1tscxy6nusxnc1l1owlbmrwmkdbgy2peix8f34eq4478.jpg"
                                                                 width="300" alt="Móc Khóa Địa Ngục Minecraft Siêu Đẹp"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/moc-khoa-dia-nguc-minecraft-sieu-dep/">Móc
                                                            Khóa Địa Ngục Minecraft Siêu Đẹp</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>90,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 169</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 20%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/mo-hinh-minecraft-chay-mo-to-f6/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/37245629_1838118352920398_2917039799149789184_n-1u5cv5j42luytsgtpstcz1esyhyxsh99i1wz2aw6rvwk.jpg"
                                                                 width="300" alt="Mô hình Minecraft chạy Mô tô F6"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/mo-hinh-minecraft-chay-mo-to-f6/">Mô
                                                            hình Minecraft chạy Mô tô F6</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>400,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>320,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 85</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 7%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/combo-moc-khoa-minecraft-hangers-series-1/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/Combo-moc-khoa-Minecraft-hangers-series1-1vm6209wr7atzwuikqmetr1in8eruyx5y27lo83pxv0k.png"
                                                                 width="300"
                                                                 alt="Combo móc khóa Minecraft hangers series 1"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/combo-moc-khoa-minecraft-hangers-series-1/">Combo
                                                            móc khóa Minecraft hangers series 1</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>450,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>420,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 63</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 35%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/combo-3-kiem-minecraft/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/combo-3-kiem-minecraft-2-1vl71vlzh480zj0k06nvqkhnsso3izwxafyvb1hozr5w.jpg"
                                                                 width="300" alt="Combo 3 Kiếm Minecraft"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/combo-3-kiem-minecraft/">Combo
                                                            3 Kiếm Minecraft</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>540,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>350,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <div class="rh_woo_star" title="Rated 5 out of 5"><span
                                                                    class="rhwoostar rhwoostar1 active">&#9733;</span><span
                                                                    class="rhwoostar rhwoostar2 active">&#9733;</span><span
                                                                    class="rhwoostar rhwoostar3 active">&#9733;</span><span
                                                                    class="rhwoostar rhwoostar4 active">&#9733;</span><span
                                                                    class="rhwoostar rhwoostar5 active">&#9733;</span>
                                                            </div>
                                                            <span class="greycolor postview">Đã bán 413</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 7%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/bo-xep-hinh-minecraft-duong-ray-duoi-long-dat/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/lego-21130-2-1-1vg8zuj575iu8zx0bp510kotlfkz0djvqk07w5r829fo.jpg"
                                                                 width="300"
                                                                 alt="Bộ xếp hình minecraft đường ray dưới lòng đất"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/bo-xep-hinh-minecraft-duong-ray-duoi-long-dat/">Bộ
                                                            xếp hình minecraft đường ray dưới lòng đất</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>700,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>650,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 77</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 20%</span></span> <span
                                                        class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/lego-minecraft-the-melon-farm-21138/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/LEGO_Minecraft_The_Melon_Farm--1u7e5800biedowhl4ann5rlzk1ax0d83zi3gggh6xxpg.jpg"
                                                                 width="300" alt="LEGO Minecraft The Melon Farm 21138"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/lego-minecraft-the-melon-farm-21138/">LEGO
                                                            Minecraft The Melon Farm 21138</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>499,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>399,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 66</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 7%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/do-choi-xep-hinh-dia-nguc-ruc-lua-minecraft/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/lgmcn2-1vga93ia9vjgaeidw2dujpufgxkefl10xxctg80ta4h0.jpg"
                                                                 width="300"
                                                                 alt="Đồ chơi xếp hình địa ngục rực lửa minecraft"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/do-choi-xep-hinh-dia-nguc-ruc-lua-minecraft/">Đồ
                                                            chơi xếp hình địa ngục rực lửa minecraft</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>700,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>650,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 119</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 25%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/dau-steve-minecraft-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/dau-steve-minecraft-chinh-hang-1vmef6m26z7uc1rmyvq68xwkt2w1svddrpgs1apkvjss.png"
                                                                 width="300" alt="Đầu Steve Minecraft chính hãng"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/dau-steve-minecraft-chinh-hang/">Đầu
                                                            Steve Minecraft chính hãng</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>200,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>150,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 80</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 14%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/spinner-3-canh-ngu-sac/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/spiner-3-canh-ngu-sac-1tshkj5hukrply2c7lrbn9zbrw4yicau624ty70im564.jpg"
                                                                 width="300" alt="Spinner 3 cánh ngũ sắc"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/spinner-3-canh-ngu-sac/">Spinner
                                                            3 cánh ngũ sắc</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>280,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>240,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 53</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/balo-minecraft-hinh-thanh-kiem/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/balo-minecraft-hinh-thanh-kiem-1vl2jqkey4mvyy4yqn4hmsk4vqwd5cfdkym9gen4ktes.jpg"
                                                                 width="300" alt="Balo Minecraft Hình Thanh Kiếm"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/balo-minecraft-hinh-thanh-kiem/">Balo
                                                            Minecraft Hình Thanh Kiếm</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>550,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 68</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 30%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/mo-hinh-enderman-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/mo_hinh_enderman_2-1-1ts8noxy6mocfbkzvds82bywva14z8un15wk5drgm8g4.jpg"
                                                                 width="300" alt="Mô Hình Enderman Minecraft"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/mo-hinh-enderman-chinh-hang/">Mô
                                                            Hình Enderman Minecraft</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>200,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>140,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 242</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 9%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/duoc-chieu-sang-minecraft-chinh-hang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/duoc-chieu-sang-minecraft-chinh-hang-1vmei2h0ngnconzvxaucwg52cgx0yhm564uwchn0oyes.jpg"
                                                                 width="300" alt="Đuốc Chiếu Sáng Minecraft Chính Hãng"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/duoc-chieu-sang-minecraft-chinh-hang/">Đuốc
                                                            Chiếu Sáng Minecraft Chính Hãng</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>350,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>320,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 193</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 13%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/spinner-song-kiem-sieu-chat/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/spiner-song-kiem-1tshk34gpd93p2s2dr7wc9axszximizze44sfgzqmmys.jpg"
                                                                 width="300" alt="Spinner Song Kiếm siêu chất"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/spinner-song-kiem-sieu-chat/">Spinner
                                                            Song Kiếm siêu chất</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>300,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>260,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 40</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/do-choi-xep-hinh-minecraft-21114-the-farm/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/21114-lego-minecraft-1-1tsd3907o8gv8br7ab8q2gl4b4blt1ba5xpjc4b4ka4k.jpg"
                                                                 width="300" alt="Lego Minecraft 21114 – The Farm"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/do-choi-xep-hinh-minecraft-21114-the-farm/">Lego
                                                            Minecraft 21114 – The Farm</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>1,250,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 92</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="re-ribbon-badge badge_20"><span>Hết hàng!</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/kiem-diamond-nhua-phat-sang/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/29134511_1703020743096827_496152582_n-1tsm9ag7nvl03cpuows8fkaftiwd81v8jyqdgzq63sms.jpg"
                                                                 width="300" alt="Kiếm Diamond Nhựa Phát Sáng"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/kiem-diamond-nhua-phat-sang/">Kiếm
                                                            Diamond Nhựa Phát Sáng</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>250,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 109</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/nhoi-bong-cuu-chinh-hang-17cm/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/nhoi-bong-cuu-chinh-hang-17cm-1vm03j6ari4k8tkaf3iu9opno60nehdpk3n9gj7bw684.png"
                                                                 width="300" alt="Nhồi Bông Cừu Chính Hãng 17cm"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/nhoi-bong-cuu-chinh-hang-17cm/">Nhồi
                                                            Bông Cừu Chính Hãng 17cm</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><span
                                                                    class="woocommerce-Price-amount amount"><bdi>100,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 73</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div
                                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                                    <span class="onsale"><span>- 13%</span></span>
                                                    <figure class="mb5 mt25 position-relative notresized">
                                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                                           href="https://shopmc.com.vn/san-pham/lego-nexo-knights-72002-aaron-dai-chien/">
                                                            <img class="lazyload"
                                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/72002.1-1vndl1rigefba7szxd3vxd6lyotn83dp0hq1zfafm344.jpg"
                                                                 width="300"
                                                                 alt="LEGO Nexo Knights 72002 Twinfector &#8211; Aaron đại chiến"
                                                                 src="https://shopmc.com.vn/wp-content/uploads/woocommerce-placeholder.png"/>
                                                        </a>
                                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                                    </figure>
                                                    <!--div class="cat_for_grid lineheight15">
        <!?php $categories = wc_get_product_terms($post->ID, 'product_cat');  ?>
        <!?php if (!empty($categories)) {
            $first_cat = $categories[0]->term_id;
            echo '<a href="'.get_term_link((int)$categories[0]->term_id, 'product_cat').'" class="woocat">'.$categories[0]->name.'</a>';
        } ?>
    </div-->
                                                    <h3 class=" text-clamp text-clamp-2">
                                                        <a href="https://shopmc.com.vn/san-pham/lego-nexo-knights-72002-aaron-dai-chien/">LEGO
                                                            Nexo Knights 72002 Twinfector &#8211; Aaron đại chiến</a>
                                                    </h3>


                                                    <div class="border-top pt10 pr10 pl10 pb10">
                                                        <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>900,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>780,000&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                                        </div>
                                                        <div class="floatright product-meta">
                                                            <span class="greycolor postview">Đã bán 224</span></div>
                                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="re_ajax_pagination"><span data-offset="36"
                                                                                      data-containerid="rh_woogrid_986472991"
                                                                                      class="re_ajax_pagination_btn def_btn">Xem Thêm</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('frontend.position.backpacks_handbags')
                        @include('frontend.position.clothes')
                        @include('frontend.position.lego_minecraft')
                        <div
                            class="vc_row wpb_row vc_row-fluid vc_custom_1607449273831 vc_row-has-fill centered-container">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                <div class="vc_column-inner post">
                                    <div class="wpb_wrapper"><h4
                                            style="margin-block-start: 1em;  margin-left: 15px"
                                            class="vc_custom_heading vc_custom_1607448849913">Tin tức cộng đồng</h4></div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid centered-container">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class=""
                                             data-filterargs='{"post_type":"post","posts_per_page":10,"order":"DESC","cat":"200","no_found_rows":1}'
                                             data-template="query_type1" id="rh_filterid_2085933268"
                                             data-innerargs='{"type":"1"}'>


                                            <div class="news-community clearfix">

                                                <div class="rh_grid_image_wrapper">
                                                    <div class="newsimage rh_gr_img">
                                                        <figure>
                                                            <div class="favorrightside wishonimage"></div>

                                                            <a href="https://shopmc.com.vn/minecraft-la-gi/">
                                                                <img class="lazyload"
                                                                     data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/d1d89ec35057cca89fc030629a8c11d5-1uz88ifr8qwseov7v4ki0m0w0kkyhq4a2aoqhh653vxg.png"
                                                                     width="160" height="160" alt="Minecraft là gì?"
                                                                     src="https://shopmc.com.vn/wp-content/themes/rehub-theme/images/default/blank.gif"/>
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="newsdetail rh_gr_top_right mb5">
                                                        <div class="hotmeter_wrap">
                                                            <div class="hotmeter"><span
                                                                    class="table_cell_hot first_cell"><span
                                                                        id="temperatur9188" class="temperatur">1<span
                                                                            class="gradus_icon"></span></span></span>
                                                                <span class="table_cell_hot cell_minus_hot"><button
                                                                        class="hotminus alreadyhot" alt="Vote down"
                                                                        title="Vote down" data-post_id="9188"
                                                                        data-informer="1"></button></span><span
                                                                    class="table_cell_hot cell_plus_hot"><button
                                                                        class="hotplus alreadyhot" alt="Vote up"
                                                                        title="Vote up" data-post_id="9188"
                                                                        data-informer="1"></button></span><span
                                                                    id="textinfo9188"
                                                                    class="textinfo table_cell_hot"></span>
                                                                <div class="table_cell_hot fullwidth_cell">
                                                                    <div id="fonscale9188" class="fonscale">
                                                                        <div id="scaleperc9188" class="scaleperc"
                                                                             style="width:10%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="newsdetail newstitleblock rh_gr_right_sec">
                                                        <h2 class="font130 mt0 mb10 mobfont120 lineheight20"><a
                                                                href="https://shopmc.com.vn/minecraft-la-gi/">Minecraft
                                                                là gì?</a></h2>


                                                        <span
                                                            class="more-from-store-a floatleft ml0 mr10 mb5 lineheight20"><span
                                                                class="tag_post_store_meta"></span></span>

                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="newsdetail rh_gr_right_desc">
                                                        <p class="font90 mobfont80 lineheight20 moblineheight15 mb15">
                                                            Giới Thiệu Minecraft
                                                            Minecraft&nbsp;là một&nbsp;trò chơi điện tử độc lập&nbsp;trong
                                                            một&nbsp;thế giới mở. Ban đầu nó được tạo ra bởi lập trình
                                                            viên người Thụy ...</p>

                                                    </div>
                                                    <div class="newsdetail newsbtn rh_gr_right_btn">
                                                        <div class="rh-flex-center-align mobileblockdisplay">
                                                            <div class="meta post-meta">
			            				<span class="admin_meta">
			<a class="admin" href="https://shopmc.com.vn/author/admin/">
				<img src="https://shopmc.com.vn/wp-content/uploads/2020/11/anonymous_logo-300x300-1-100x100.png"
                     width="22" height="22" alt="admin"
                     class="avatar avatar-22 wp-user-avatar wp-user-avatar-22 alignnone photo"/>
				admin
			</a>
		</span>
                                                                <span class="date_meta">
  			 				 Tháng Tư 3, 2019 			 		</span>

                                                            </div>
                                                            <div class="rh-flex-right-align">


                                                                <a href="https://shopmc.com.vn/minecraft-la-gi/"
                                                                   class="btn_more">Xem Thêm</a>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="newscom_head_ajax"></div>
                                                <div class="newscom_content_ajax"></div>

                                            </div>

                                            <div class="news-community clearfix">

                                                <div class="rh_grid_image_wrapper">
                                                    <div class="newsimage rh_gr_img">
                                                        <figure>
                                                            <div class="favorrightside wishonimage"></div>

                                                            <a href="https://shopmc.com.vn/huong-dan-tai-va-cai-dat-minecraft-launcher/">
                                                                <img class="lazyload"
                                                                     data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/maxresdefault-1uz7p5asfyegjwbulx875by0rsp28vkoug6a7x7sl790.jpg"
                                                                     width="160" height="160"
                                                                     alt="Hướng dẫn tải và cài đặt Minecraft Launcher"
                                                                     src="https://shopmc.com.vn/wp-content/themes/rehub-theme/images/default/blank.gif"/>
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <div class="newsdetail rh_gr_top_right mb5">
                                                        <div class="hotmeter_wrap">
                                                            <div class="hotmeter"><span
                                                                    class="table_cell_hot first_cell"><span
                                                                        id="temperatur9085" class="temperatur">1<span
                                                                            class="gradus_icon"></span></span></span>
                                                                <span class="table_cell_hot cell_minus_hot"><button
                                                                        class="hotminus alreadyhot" alt="Vote down"
                                                                        title="Vote down" data-post_id="9085"
                                                                        data-informer="1"></button></span><span
                                                                    class="table_cell_hot cell_plus_hot"><button
                                                                        class="hotplus alreadyhot" alt="Vote up"
                                                                        title="Vote up" data-post_id="9085"
                                                                        data-informer="1"></button></span><span
                                                                    id="textinfo9085"
                                                                    class="textinfo table_cell_hot"></span>
                                                                <div class="table_cell_hot fullwidth_cell">
                                                                    <div id="fonscale9085" class="fonscale">
                                                                        <div id="scaleperc9085" class="scaleperc"
                                                                             style="width:10%"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="newsdetail newstitleblock rh_gr_right_sec">
                                                        <h2 class="font130 mt0 mb10 mobfont120 lineheight20"><a
                                                                href="https://shopmc.com.vn/huong-dan-tai-va-cai-dat-minecraft-launcher/">Hướng
                                                                dẫn tải và cài đặt Minecraft Launcher</a></h2>


                                                        <span
                                                            class="more-from-store-a floatleft ml0 mr10 mb5 lineheight20"><span
                                                                class="tag_post_store_meta"></span></span>

                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="newsdetail rh_gr_right_desc">
                                                        <p class="font90 mobfont80 lineheight20 moblineheight15 mb15">
                                                            Minecraft là một trò chơi điện tử độc lập trong một thế giới
                                                            mở. Ban đầu nó được tạo ra bởi lập trình viên người Thụy
                                                            Điển Markus “Notch” Persson và sau đó ...</p>

                                                    </div>
                                                    <div class="newsdetail newsbtn rh_gr_right_btn">
                                                        <div class="rh-flex-center-align mobileblockdisplay">
                                                            <div class="meta post-meta">
			            				<span class="admin_meta">
			<a class="admin" href="https://shopmc.com.vn/author/admin/">
				<img src="https://shopmc.com.vn/wp-content/uploads/2020/11/anonymous_logo-300x300-1-100x100.png"
                     width="22" height="22" alt="admin"
                     class="avatar avatar-22 wp-user-avatar wp-user-avatar-22 alignnone photo"/>
				admin
			</a>
		</span>
                                                                <span class="date_meta">
  			 				 Tháng Hai 25, 2019 			 		</span>

                                                            </div>
                                                            <div class="rh-flex-right-align">


                                                                <a href="https://shopmc.com.vn/huong-dan-tai-va-cai-dat-minecraft-launcher/"
                                                                   class="btn_more">Xem Thêm</a>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="newscom_head_ajax"></div>
                                                <div class="newscom_content_ajax"></div>

                                            </div>


                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </article>
                </div>
            </div>
            <!-- /Main Side -->
        </div>
    </div>
@endsection
