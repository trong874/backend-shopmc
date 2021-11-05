<div class="woocommerce" style=" margin-top: 10px;margin-bottom: 10px">
    <div class="rh-flex-eq-height products  re_aj_pag_clk_wrap col_wrap_six grid_woo"
         data-filterargs='{"post_type":"product","posts_per_page":12,"orderby":"","order":"DESC","tax_query":[{"taxonomy":"product_cat","terms":["463","125"],"field":"term_id"},{"relation":"AND","0":{"taxonomy":"product_visibility","field":"name","terms":"exclude-from-catalog","operator":"NOT IN"}}]}'
         data-template="woogridpart" id="rh_woogrid_2031402312"
         data-innerargs='{"columns":"6_col","woolinktype":"product","disable_thumbs":"","gridtype":"","soldout":"","attrelpanel":""}'>
        @foreach($categories as $category)
            <div class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                <div class="vc_column-inner vc_custom_1511653182242">
                    <div class="wpb_wrapper">
                        <div class="rh-cartbox catboxmodule">
                            <div class="rh-flex-center-align">
                                <div class="rh-cbox-left floatleft mr20">
                                    <div class="lineheight20 rehub-main-font mb10">{{$category->title}}
                                    </div>
                                    <div class="lineheight15 font80 mb10"></div>
                                    <div class="lineheight15 font85 fontbold"><a
                                            target=" _blank" rel=""
                                            href="{{route('category.detail',$category->id)}}">Xem
                                            Ngay</a></div>
                                </div>
                                <div
                                    class="rh-cbox-right rh-flex-right-align text-center">
                                    <a target=" _blank" rel=""
                                       href="{{route('category.detail',$category->id)}}">
                                        <noscript
                                            data-img="{{$category->image}}"
                                            data-alt="{{$category->title}}" class=""><img
                                                src="{{$category->image}}"
                                                alt="{{$category->title}}" data-eio="j"/>
                                        </noscript>
                                        <img
                                            src="{{$category->image}}"
                                            alt="{{$category->title}}"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
