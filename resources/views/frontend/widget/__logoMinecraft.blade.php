<div
    class="vc_row wpb_row vc_row-fluid vc_custom_1607449187390 vc_row-has-fill centered-container">
    <div class="wpb_column vc_column_container vc_col-sm-12 ">
{{--        vc_hidden-xs--}}
        <div class="vc_column-inner">
            <div class="wpb_wrapper"><h4
                    style="margin-block-start: 1em; margin-left: 15px"
                    class="vc_custom_heading post vc_custom_1607448849913">Mô hình/ Lego Minecraft</h4>
                <div class="woocommerce">
                    <div
                        class="rh-flex-eq-height products  re_aj_pag_clk_wrap col_wrap_six grid_woo"
                        data-filterargs='{"post_type":"product","posts_per_page":12,"orderby":"","order":"DESC","tax_query":[{"taxonomy":"product_cat","terms":["114"],"field":"term_id"},{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}]}'
                        data-template="woogridpart" id="rh_woogrid_1266572959"
                        data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>
                        @foreach($legos as $lego)
                            <div
                                class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                <span class="onsale"><span>- 26%</span></span>
                                <figure class="mb5 mt25 position-relative notresized">
                                    <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                       href="{{route('item.detail',$lego->slug)}}">
                                        <img class="lazyload"
                                             data-src="{{$lego->image}}"
                                             width="300" alt="{{$lego->title}}"
                                             src="{{$lego->image}}"/>
                                    </a>
                                </figure>
                                <h3 class=" text-clamp text-clamp-2">
                                    <a href="{{route('item.detail',$lego->slug)}}">{{$lego->title}}</a>
                                </h3>


                                <div class="border-top pt10 pr10 pl10 pb10">
                                    <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            @if(isset($lego->price_old))
                                                                            <span>{{number_format($lego->price_old)}}</span>
                                                                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                                @endif
                                                                        </bdi>
                                                                    </span>
                                                                </del>
                                                                <ins style="margin-left: 10px">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            <span>{{number_format($lego->price)}}</span>
                                                                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                        </bdi>
                                                                    </span>
                                                                </ins>
                                                            </span>

                                    </div>
                                    <div class="floatright product-meta">
{{--                                        <span class="greycolor postview">{!! $lego->description !!}</span></div>--}}
                                    <div class="rh-flex-right-align btn_for_grid floatright">
                                    </div>

                                </div>
                            </div>
                        @endforeach
                        <div class="re_ajax_pagination mt-3">
                            <span data-offset="12"
                                  data-containerid="rh_woogrid_1266572959"
                                  class="re_ajax_pagination_btn def_btn">Xem Thêm</span>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</div>

