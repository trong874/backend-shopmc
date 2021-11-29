<div class="vc_row wpb_row vc_row-fluid vc_custom_1607449230309 vc_row-has-fill centered-container">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <article class="post wpb_content_element vc_custom_1607448849913">
                    <div class="wpb_wrapper">
                        <h4 style="margin-left: 10px">Flash Sale</h4>
                    </div>
                </article>
                <div class="woocommerce" style="margin-left: 15px;">
                    <div class="rh-flex-eq-height products  col_wrap_six grid_woo"
                         data-filterargs='{"post__in":["8426","8431","8434","8554","9736","23053"],"orderby":"post__in","post_type":"product","posts_per_page":12,"tax_query":[{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}],"no_found_rows":1}'
                         data-template="woogridpart" id="rh_woogrid_779630174"
                         data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>
                        @foreach($flashSales->item as $flashSale)
                            <div
                                class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                                <span class="onsale"><span>- 28%</span></span>
                                <figure class="mb5 mt25 position-relative notresized">
                                    <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
                                       href="{{route('item.detail',$flashSale->slug)}}/">
                                        <img class="lazyload"
                                             data-src="{{$flashSale->image}}"
                                             width="300" alt="{{$flashSale->title}}"
                                             src="{{$flashSale->image}}"/>
                                    </a>
                                </figure>
                                <h3 class=" text-clamp text-clamp-2">
                                    <a href="{{route('item.detail',$flashSale->slug)}}">{{$flashSale->title}}</a>
                                </h3>
                                <div class="border-top pt10 pr10 pl10 pb10">
                                    <div class="price_for_grid floatleft rehub-btn-font mr10">
                                                            <span class="price"><del>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            @if(isset($flashSale->price_old))
                                                                            <span>{{number_format($flashSale->price_old)}}</span>
                                                                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                                @endif
                                                                        </bdi>
                                                                    </span>
                                                                </del>
                                                                <ins style="margin-left:10px">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            <span>{{number_format($flashSale->price)}}</span>
                                                                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                        </bdi>
                                                                    </span>
                                                                </ins>
                                                            </span>
                                    </div>
                                    <div class="floatright product-meta">
                                        <div class="rh_woo_star" title="Rated 5 out of 5"><span
                                                class="rhwoostar rhwoostar1 active">&#9733;</span><span
                                                class="rhwoostar rhwoostar2 active">&#9733;</span><span
                                                class="rhwoostar rhwoostar3 active">&#9733;</span><span
                                                class="rhwoostar rhwoostar4 active">&#9733;</span><span
                                                class="rhwoostar rhwoostar5 active">&#9733;</span>
                                        </div>
{{--                                        <span class="greycolor postview">{{$flashSale->description}}</span></div>--}}
                                    <div class="rh-flex-right-align btn_for_grid floatright">
                                    </div>
{{--                                    <span class="greycolor postview">{{$flashSale->décription}}</span>--}}
                                </div>
                                <div class="rh-flex-right-align btn_for_grid floatright">
                                </div>
                            </div>
                    </div>
                        @endforeach
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>
