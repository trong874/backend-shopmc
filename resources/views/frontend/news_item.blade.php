@extends('frontend.layout.master')
@section('content')
<div class="rh-container">
    <div class="rh-content-wrap clearfix">
        <!-- Main Side -->
        <div class="main-side clearfix">
            <div class="wpsm-title middle-size-title wpsm-cat-title"><h5>Tin Tức</h5></div>
            <article class="top_rating_text post"></article>
            <div class="columned_grid_module rh-flex-eq-height col_wrap_three  re_aj_pag_auto_wrap"
                 data-filterargs="{&quot;posts_per_page&quot;:&quot;12&quot;,&quot;cat&quot;:200,&quot;paged&quot;:1,&quot;post_type&quot;:&quot;post&quot;}"
                 data-template="column_grid" id="rh_loop_425108458"
                 data-innerargs="{&quot;exerpt_count&quot;:&quot;&quot;,&quot;disable_meta&quot;:&quot;&quot;,&quot;enable_btn&quot;:&quot;&quot;,&quot;disable_btn&quot;:1,&quot;disable_act&quot;:0,&quot;price_meta&quot;:&quot;1&quot;,&quot;aff_link&quot;:0}">
                @foreach($all_news as $news)
                <article class="col_item column_grid rh-heading-hover-color rh-bg-hover-color no-padding rh-cartbox">
                    <figure class="mb20 position-relative text-center">
                        <a href="{{route('news.detail',$news->slug)}}" class="">
                            <img class=" ls-is-cached lazyloaded"
                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/d1d89ec35057cca89fc030629a8c11d5-1uz88ifrf6d83tv4xgysm5pq1s2ywphgui33p0tlext0.png"
                                 width="350" height="200" alt="Minecraft là gì?"
                                 src="{{$news->image}}">
                        </a>
                    </figure>
                    <div class="content_constructor pb0 pr20 pl20">
                        <h3 class="mb15 mt0 font110 mobfont100 fontnormal lineheight20"><a
                                href="{{route('news.detail',$news->slug)}}">{{$news->title}}</a></h3>
                        <div class="rh-flex-center-align mb10">
                            <div class="post-meta mb0">
                                <span class="cat_link_meta"><a href="{{route('news.detail',$news->slug)}}"
                                                               class="cat">Tin Tức</a></span>
                                <div class="store_for_grid">
                                    <span class="tag_post_store_meta"></span></div>
                            </div>
                            <div class="rh-flex-right-align">
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
                <div class="clearfix flexbasisclear" style="display: block;"><span
                        class="no_more_posts">No more!<span></span></span></div>
            </div>
        </div>
        <!-- /Main Side -->
        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- SIDEBAR WIDGET AREA -->
            <div id="custom_html-1" class="widget_text widget widget_custom_html">
                <div class="textwidget custom-html-widget">
                    <style type="text/css">
                        .text1 {
                            padding-bottom: 14px;
                        }

                        .text {
                            margin: 0 0 5px;
                        }

                        .text2 {
                            padding: 10px;
                            border-bottom: 1px solid #eee;
                        }

                        .text21 {
                            padding: 10px
                        }

                        .anh1 {
                            padding-right: 10px;
                            height: 30px;
                            margin-bottom: 10px;
                        }

                        b {
                            font-weight: bold;
                        }
                    </style>
                    <img src="https://thegioilego.com.vn/wp-content/uploads/2019/02/ezgif.com-webp-to-jpg.jpg">
                    <div class="text2">
                        <div class="text1">
                            <img class="anh1" src="https://thegioilego.com.vn/wp-content/uploads/2019/02/shop-icon.png"
                                 style="float: left;">
                            <div class="text3">
                                <b>Shop phụ kiện game</b><br>
                                Cam kết chính hãng 100%
                            </div>
                        </div>
                        <div class="text1">
                            <img class="anh1"
                                 src="https://thegioilego.com.vn/wp-content/uploads/2019/02/money-circle-green-3-512.png"
                                 style="float: left;">
                            <div class="text3"><b>Hoàn tiền 100%</b><br>
                                Nếu phát hiện hàng giả
                            </div>
                        </div>
                        <div class="text1">
                            <img class="anh1" src="https://thegioilego.com.vn/wp-content/uploads/2019/02/security.png"
                                 style="float: left;">
                            <div class="text3"><b>Giao Hàng Miễn Phí</b><br>
                                Miễn phí giao hàng nội thành HN
                            </div>
                        </div>
                    </div>
                    <div class="text21">
                        <div class="text1">
                            <img class="anh1" src="https://thegioilego.com.vn/wp-content/uploads/2019/02/phone-512.png"
                                 style="float: left;">
                            <div class="text3">
                                <b>Liên Hệ</b><br>
                                Hotline đặt hàng {{$settings[4]['val']}}
                                (hỗ trợ 24/7 cả T7, CN)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rehub_tabsajax_widget-1" class="widget tabsajax">
                <div class="ajaxed_post_widget rh_col_tabs_2">
                    <div class="rh-flex-center-align tabletblockdisplay re_filter_panel">
                        <ul class="re_filter_ul">
                            <li><span
                                    data-sorttype="{&quot;filtertype&quot;:&quot;meta&quot;,&quot;filterorder&quot;:&quot;DESC&quot;,&quot;filterdate&quot;:&quot;all&quot;,&quot;filtermetakey&quot;:&quot;rehub_views_mon&quot;}"
                                    class="active re_filtersort_btn resort_0"
                                    data-containerid="rh_simplepostid_2012517100">Popular in month</span></li>
                            <li><span
                                    data-sorttype="{&quot;filtertype&quot;:&quot;meta&quot;,&quot;filterorder&quot;:&quot;DESC&quot;,&quot;filterdate&quot;:&quot;all&quot;,&quot;filtermetakey&quot;:&quot;post_hot_count&quot;}"
                                    class="" data-containerid="rh_simplepostid_2012517100">Hottest</span>
                            </li>
                        </ul>
                    </div>
                    <div class="wpsm_recent_posts_list mb0 "
                         data-filterargs="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:6,&quot;order&quot;:&quot;DESC&quot;,&quot;meta_key&quot;:&quot;rehub_views_mon&quot;,&quot;orderby&quot;:&quot;meta_value_num&quot;,&quot;no_found_rows&quot;:1}"
                         data-template="simplepostlist" id="rh_simplepostid_2012517100"
                         data-innerargs="{&quot;nometa&quot;:1,&quot;image&quot;:&quot;&quot;,&quot;border&quot;:&quot;&quot;,&quot;excerpt&quot;:&quot;&quot;,&quot;priceenable&quot;:&quot;true&quot;,&quot;compareenable&quot;:&quot;&quot;,&quot;hotenable&quot;:&quot;true&quot;,&quot;maximage&quot;:&quot;&quot;,&quot;center&quot;:&quot;&quot;}">
                        <div class="col_item item-small-news">
                            <div class="item-small-news-details">
                                <h3>
                                    <span id="temperatur9188" class="temperatur">1<span
                                            class="gradus_icon"></span></span>
                                    <a href="#">Minecraft là gì?</a>
                                </h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col_item item-small-news">
                            <div class="item-small-news-details">
                                <h3>
                                    <span id="temperatur9085" class="temperatur">1<span
                                            class="gradus_icon"></span></span>
                                    <a href="#">Hướng dẫn tải và cài đặt Minecraft Launcher</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rehub_sticky_on_scroll-1" class="widget stickyscroll_widget"
                 style="position: static; width: auto; top: 0px;"><img
                    src="https://shopmc.com.vn/wp-content/uploads/2019/08/image.jpg" width="336"
                    alt="best wordpress theme">
            </div>
        </aside>            <!-- /Sidebar -->
    </div>
</div>
@endsection
