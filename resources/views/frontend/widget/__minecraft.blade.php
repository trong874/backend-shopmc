<div class="vc_row wpb_row vc_row-fluid vc_custom_1607449069956 vc_row-has-fill centered-container ">
    <div class="wpb_column vc_column_container vc_col-sm-12  ">
        {{--        vc_hidden-xs--}}
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="vc_row wpb_row vc_inner vc_row-fluid ">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <h4 style="margin-block-start: 1em; margin-left: 15px"
                                    class="vc_custom_heading post ">Đồ Chơi Minecraft</h4>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <article class="post wpb_content_element">
                                    <div class="wpb_wrapper ">
                                        <p style="text-align: right; padding-top: 16px; margin-right: 10px">
                                            <i class="fas fa-check-circle icon1"></i>
                                            100% Hàng chính hãng
                                            <i class="far fa-shipping-fast icon1"></i>
                                            Giao hàng toàn quốc
                                            <i class="fas fa-history icon1"></i>
                                            7 ngày trả hàng miễn phí</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="woocommerce" style="margin-left: 15px;">
                    <div class="rh-flex-eq-height products re_aj_pag_clk_wrap col_wrap_six grid_woo"
                         id="do_choi_mc"
                         data-filterargs='{"post_type":"product","posts_per_page":12,"orderby":"","order":"DESC","tax_query":[{"taxonomy":"product_cat","terms":["463","125"],"field":"term_id"},{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}]}'
                         data-template="woogridpart" id="rh_woogrid_2031402312"
                         data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>
                        @if(isset($data_group))
                            @foreach($data_group->item as $toyMinecraft)
                                <div
                                    class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                    {{--                            <span class="onsale"><span>- 29%</span></span>--}}
                                    <figure class="mb5 mt25 position-relative notresized">
                                        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                           href="{{route('item.detail',$toyMinecraft->slug)}}">
                                            <img class="lazyload"
                                                 width="300" alt="{{$toyMinecraft->title}}"
                                                 src="{{$toyMinecraft->image}}"/>
                                        </a>
                                        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
                                    </figure>

                                    <h3 class=" text-clamp text-clamp-2">
                                        <a href="{{route('item.detail',$toyMinecraft->slug)}}">{{$toyMinecraft->title}}</a>
                                    </h3>
                                    <div class="border-top pt10 pr10 pl10 pb10">
                                        <div class="price_for_grid floatleft rehub-btn-font mr10">
                                                            <span class="price">
                                                                <del>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            @if(isset($toyMinecraft->price_old))
                                                                                <span>{{number_format($toyMinecraft->price_old)}}</span>
                                                                                <span
                                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                            @endif
                                                                        </bdi>
                                                                    </span>
                                                                </del>
                                                                <ins style="margin-left: 10px">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            <span
                                                                                id="price_{{$toyMinecraft->id}}">{{number_format($toyMinecraft->price)}}</span>
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                        </bdi>
                                                                    </span>
                                                                </ins>
                                                            </span>
                                        </div>
                                        <div class="floatright product-meta">
                                            {{--                                    <span class="greycolor postview">{!! $toyMinecraft->description !!}</span>--}}
                                        </div>
                                        <div class="rh-flex-right-align btn_for_grid floatright">
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <script>
                        var page_toy =3;
                    </script>
                    <div class="re_ajax_pagination mt-3" onclick="seeMore({{$data_group->id}},'#do_choi_mc',page_toy++)">
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
