<div class="vc_row wpb_row vc_row-fluid vc_custom_1607449154738 vc_row-has-fill centered-container">
    <div class="wpb_column vc_column_container vc_col-sm-12 ">
        {{--        vc_hidden-xs--}}
        <div class="vc_column-inner ">
            <div class="wpb_wrapper "><h2 style="margin-left: 15px">Balo Túi Xách</h2>
                <div class="woocommerce" style="margin-left: 15px;">
                    <div
                        class="rh-flex-eq-height products  re_aj_pag_clk_wrap col_wrap_six grid_woo"
                        id="balo_bag"
                        data-filterargs='{"post_type":"product","posts_per_page":12,"orderby":"","order":"DESC","tax_query":[{"taxonomy":"product_cat","terms":["115"],"field":"term_id"},{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}]}'
                        data-template="woogridpart" id="rh_woogrid_1813845785"
                        data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>
                        @foreach($data_group->item as $baloBag)
                            <div
                                class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                <span class="onsale">Sale!</span>
                                <figure class="mb5 mt25 position-relative notresized">
                                    <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                       href="{{route('item.detail',$baloBag->slug)}}">
                                        <img class="lazyload "
                                             data-src="{{$baloBag->image}}"
                                             width="300" alt="{{$baloBag->title}}" src="{{$baloBag->image}}"/>
                                    </a>
                                </figure>
                                <h3 class=" text-clamp text-clamp-2">
                                    <a href="{{route('item.detail',$baloBag->slug)}}">{{$baloBag->title}}</a>
                                </h3>
                                <div class="border-top pt10 pr10 pl10 pb10">
                                    <div class="price_for_grid floatleft rehub-btn-font mr10">

                                                            <span class="price"><del>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            @if(isset($baloBag->price_old))
                                                                            <span>{{number_format($baloBag->price_old)}}</span>
                                                                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                            @endif
                                                                        </bdi>
                                                                    </span>
                                                                </del>
                                                                <ins style="margin-left: 10px">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                             <span>{{number_format($baloBag->price)}}</span>
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                        </bdi>
                                                                        </span>
                                                                </ins>
                                                            </span>
                                    </div>
                                    {{--                                    <div class="floatright product-meta">--}}
                                    {{--                                        <span class="greycolor postview">{!! $baloBag->description !!}</span>--}}
                                    {{--                                    </div>--}}
                                    <div class="rh-flex-right-align btn_for_grid floatright">
                                    </div>
                                </div>
                                <div class="floatright product-meta">
                                    <div class="rh_woo_star" title="Rated 5 out of 5"><span
                                            class="rhwoostar rhwoostar1 active">&#9733;</span><span
                                            class="rhwoostar rhwoostar2 active">&#9733;</span><span
                                            class="rhwoostar rhwoostar3 active">&#9733;</span><span
                                            class="rhwoostar rhwoostar4 active">&#9733;</span><span
                                            class="rhwoostar rhwoostar5 active">&#9733;</span>
                                    </div>
                                    {{--                                    <span class="greycolor postview">{!! $baloBag->description !!}</span>--}}
                                </div>
                                <div class="rh-flex-right-align btn_for_grid floatright">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <script>
                        var page_balo_bag =3;
                    </script>
                    <div class="re_ajax_pagination mt-3" onclick="seeMore({{$data_group->id}},'#clothing_products',page_clothes++)">
                            <span data-offset="12"
                                  data-containerid="rh_woogrid_2031402312"
                                  class="re_ajax_pagination_btn def_btn">Xem Thêm</span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

