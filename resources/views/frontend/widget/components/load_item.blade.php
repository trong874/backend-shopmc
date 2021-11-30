@foreach($data as $item)
<div class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
    {{--                            <span class="onsale"><span>- 29%</span></span>--}}
    <figure class="mb5 mt25 position-relative notresized">
        <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align"
           href="{{route('item.detail',$item->slug)}}">
            <img class="lazyload"
                 width="300" alt="{{$item->title}}"
                 src="{{$item->image}}"/>
        </a>
        <!--div class="gridcountdown"><!?php rehub_woo_countdown('no');?></div-->
    </figure>

    <h3 class=" text-clamp text-clamp-2">
        <a href="{{route('item.detail',$item->slug)}}">{{$item->title}}</a>
    </h3>
    <div class="border-top pt10 pr10 pl10 pb10">
        <div class="price_for_grid floatleft rehub-btn-font mr10">
                                                            <span class="price">
                                                                <del>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            @if(isset($item->price_old))
                                                                                <span>{{number_format($item->price_old)}}</span>
                                                                                <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                                                            @endif
                                                                        </bdi>
                                                                    </span>
                                                                </del>
                                                                <ins style="margin-left: 10px">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <bdi>
                                                                            <span id="price_{{$item->id}}">{{number_format($item->price)}}</span>
                                                                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
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
