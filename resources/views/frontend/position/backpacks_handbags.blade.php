<div class="vc_row wpb_row vc_row-fluid vc_custom_1607449154738 vc_row-has-fill centered-container">
    <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper "><h4
                    style="margin-block-start: 1em; margin-left: 15px"
                    class="vc_custom_heading post vc_custom_1607448849913">Balo Túi Xách</h4>
                <div class="woocommerce">
                    <div
                        class="rh-flex-eq-height products  re_aj_pag_clk_wrap col_wrap_six grid_woo"
                        data-filterargs='{"post_type":"product","posts_per_page":12,"orderby":"","order":"DESC","tax_query":[{"taxonomy":"product_cat","terms":["115"],"field":"term_id"},{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}]}'
                        data-template="woogridpart" id="rh_woogrid_1813845785"
                        data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>
                        @foreach($baloBags as $baloBag)
                        <div
                            class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                            <span class="onsale">Sale!</span>
                            <figure class="mb5 mt25 position-relative notresized">
                                <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                   href="https://shopmc.com.vn/san-pham/balo-laptop-balo-cong-so-cao-cap-chong-nuoc-chong-soc-han-quoc/">
                                    <img class="lazyload"
                                         data-src="{{$baloBag->image}}"
                                         width="300" alt="{{$baloBag->title}}" src="{{$baloBag->image}}"/>
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
                                <a href="https://shopmc.com.vn/san-pham/balo-laptop-balo-cong-so-cao-cap-chong-nuoc-chong-soc-han-quoc/">{{$baloBag->title}}</a>
                            </h3>


                            <div class="border-top pt10 pr10 pl10 pb10">
                                <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del><span
                                                                        class="woocommerce-Price-amount amount"><bdi>{{$baloBag->price_old}}<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span
                                                                        class="woocommerce-Price-amount amount"><bdi>{{$baloBag->price}}<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                                </div>
                                <div class="floatright product-meta">
                                    <span class="greycolor postview">{!! $baloBag->description !!}</span></div>
                                <div class="rh-flex-right-align btn_for_grid floatright">
                                </div>
                            </div>
                        </div>
                        @endforeach





                        <div class="re_ajax_pagination"><span data-offset="12"
                                                              data-containerid="rh_woogrid_1813845785"
                                                              class="re_ajax_pagination_btn def_btn">Xem Thêm</span>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>

