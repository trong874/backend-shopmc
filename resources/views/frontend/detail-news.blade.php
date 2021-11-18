@extends('frontend.layout.master')
<!-- Outer Start -->
@section('content')
    <div class="rh-outer-wrap">
        <div id="top_ankor"></div>
        <!-- HEADER -->

        <!-- CONTENT -->
        <div class="rh-container">
            <div class="rh-content-wrap clearfix">
                <!-- Main Side -->
                <div class="main-side single clearfix">
                    <div class="rh-post-wrapper">
                        <article
                            class="post-inner post post-9085 type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc"
                            id="post-9085">
                            <!-- Title area -->
                            <div class="rh_post_layout_metabig">
                                <div class="title_single_area">
                                    <div class="breadcrumb"><a href="https://shopmc.com.vn/">Home</a> » <span><a
                                                href="https://shopmc.com.vn/chuyen-muc/tin-tuc/">Tin Tức</a></span> »
                                        <span class="current">{{$newDetail->title}}</span></div>
                                    <!-- .breadcrumbs -->
                                    <div class="rh-cat-list-title"><a class="rh-cat-label-title rh-cat-200"
                                                                      href="https://shopmc.com.vn/chuyen-muc/tin-tuc/"
                                                                      title="View all posts in Tin Tức">Tin Tức</a>
                                    </div>
                                    <h1>{{$newDetail->title}}</h1>
                                    <div class="meta post-meta-big">
                                        <div class="floatleft mr15 rtlml15">
                                            <a href="https://shopmc.com.vn/author/admin/"
                                               class="floatleft mr10 rtlml10">
                                                <img
                                                    src="https://shopmc.com.vn/wp-content/uploads/2020/11/anonymous_logo-300x300-1-100x100.png"
                                                    width="40" height="40" alt="admin"
                                                    class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 alignnone photo">
                                            </a>
                                            <span class="floatleft authortimemeta">
									          <a href="https://shopmc.com.vn/author/admin/">
						                       admin
					                        </a>
													<div class="date_time_post">
			 						 				 Tháng Hai 25, 2019
                                                    </div>
							                   </span>

                                        </div>
                                        <div class="floatright ml15 postviewcomm mt5">
                                            <span class="postview_meta mr15 ml15"><strong>615</strong> Views</span>


                                            <span class="comm_count_meta"><strong><a
                                                        href="https://shopmc.com.vn/huong-dan-tai-va-cai-dat-minecraft-launcher/#respond"
                                                        class="comm_meta">0</a></strong></span>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <figure class="top_featured_image">
                                <img src="{{$newDetail->image}}" style="width: 100%">
                            </figure>
                            {!! $newDetail->description !!}
                        </article>
                        <div class="clearfix"></div>

                        <div class="post_share">
                            <div class="social_icon  row_social_inpost">
                                <div class="favour_in_row favour_btn_red"></div>
                                <span
                                    data-href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fshopmc.com.vn%2Fhuong-dan-tai-va-cai-dat-minecraft-launcher%2F"
                                    class="fb share-link-image" data-service="facebook"><i
                                        class="rhicon rhi-facebook"></i></span><span
                                    data-href="https://twitter.com/share?url=https%3A%2F%2Fshopmc.com.vn%2Fhuong-dan-tai-va-cai-dat-minecraft-launcher%2F&amp;text=H%C6%B0%E1%BB%9Bng+d%E1%BA%ABn+t%E1%BA%A3i+v%C3%A0+c%C3%A0i+%C4%91%E1%BA%B7t+Minecraft+Launcher"
                                    class="tw share-link-image" data-service="twitter"><i
                                        class="rhicon rhi-twitter"></i></span><span
                                    data-href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fshopmc.com.vn%2Fhuong-dan-tai-va-cai-dat-minecraft-launcher%2F&amp;media=https://shopmc.com.vn/wp-content/uploads/2019/02/maxresdefault.jpg&amp;description=H%C6%B0%E1%BB%9Bng+d%E1%BA%ABn+t%E1%BA%A3i+v%C3%A0+c%C3%A0i+%C4%91%E1%BA%B7t+Minecraft+Launcher"
                                    class="pn share-link-image" data-service="pinterest"><i
                                        class="rhicon rhi-pinterest-p"></i></span><span
                                    data-href="mailto:?subject=H%C6%B0%E1%BB%9Bng+d%E1%BA%ABn+t%E1%BA%A3i+v%C3%A0+c%C3%A0i+%C4%91%E1%BA%B7t+Minecraft+Launcher&amp;body=Check out: https%3A%2F%2Fshopmc.com.vn%2Fhuong-dan-tai-va-cai-dat-minecraft-launcher%2F - Shop+MC"
                                    class="in share-link-image" data-service="email"><i class="rhicon rhi-envelope"></i></span>
                            </div>
                        </div>

                        <!-- PAGER SECTION -->
                        <div class="float-posts-nav" id="float-posts-nav">
                            <div class="postNavigation prevPostBox">
                            </div>
                            <div class="postNavigation nextPostBox">
                                <a href="https://shopmc.com.vn/minecraft-la-gi/">
                                    <div class="inner-prevnext">
                                        <div class="thumbnail">

                                            <img class=" lazyloaded"
                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/d1d89ec35057cca89fc030629a8c11d5-o41iwk2krtgbecj9r3pydjaf436v8lz2eild2g583g.png"
                                                 width="70" height="70"
                                                 alt="Hướng dẫn tải và cài đặt Minecraft Launcher"
                                                 src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/d1d89ec35057cca89fc030629a8c11d5-o41iwk2krtgbecj9r3pydjaf436v8lz2eild2g583g.png">
                                        </div>
                                        <div class="headline"><span>Next</span><h4>Minecraft là gì?</h4></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /PAGER SECTION -->
                        <div class="related_articles pt25 border-top mb0 clearfix">
                            <div class="related_title rehub-main-font font120 fontbold mb35">
                                 Bài viết liên quan
                            </div>
                            @if(@$related->item)
                            <div class="columned_grid_module rh-flex-eq-height col_wrap_fourth mb0">
                                @foreach($related->item as $news)
                                    @if($news->id != $newDetail->id)
                                <article
                                    class="col_item column_grid rh-heading-hover-color rh-bg-hover-color no-padding">
                                    <figure class="mb20 position-relative text-center">
                                        <a href="{{route('news.detail',$news->slug)}}" class="">
                                            <img class=" ls-is-cached lazyloaded"
                                                 data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/d1d89ec35057cca89fc030629a8c11d5-1uz88ifrf6d83tv4xgysm5pq1s2ywphgui33p0tlext0.png"
                                                 width="350" height="200" alt="Minecraft là gì?"
                                                 src="{{$news->image}}">
                                        </a>
                                    </figure>
                                    <div class="content_constructor">
                                        <h3 class="mb15 mt0 font110 mobfont100 fontnormal lineheight20"><a
                                                href="{{route('news.detail',$news->slug)}}">{{$news->title}}</a></h3>
                                    </div>
                                </article>
                                    @endif
                                @endforeach
                            </div>
                            @else
                                không có bài viết liên quan !
                                @endif
                        </div>
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
                                    <img class="anh1"
                                         src="https://thegioilego.com.vn/wp-content/uploads/2019/02/shop-icon.png"
                                         style="float: left;">
                                    <div class="text3">
                                        <b>Shopmc</b><br>
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
                                    <img class="anh1"
                                         src="https://thegioilego.com.vn/wp-content/uploads/2019/02/security.png"
                                         style="float: left;">
                                    <div class="text3"><b>Giao Hàng Miễn Phí</b><br>
                                        Miễn phí giao hàng nội thành HN
                                    </div>
                                </div>
                            </div>
                            <div class="text21">
                                <div class="text1">
                                    <img class="anh1"
                                         src="https://thegioilego.com.vn/wp-content/uploads/2019/02/phone-512.png"
                                         style="float: left;">
                                    <div class="text3">
                                        <b>Liên Hệ</b><br>
                                        Hotline đặt hàng 0904568069
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
                                            data-containerid="rh_simplepostid_812292761">Popular in month</span></li>
                                    <li><span
                                            data-sorttype="{&quot;filtertype&quot;:&quot;meta&quot;,&quot;filterorder&quot;:&quot;DESC&quot;,&quot;filterdate&quot;:&quot;all&quot;,&quot;filtermetakey&quot;:&quot;post_hot_count&quot;}"
                                            class="re_filtersort_btn resort_1"
                                            data-containerid="rh_simplepostid_812292761">Hottest</span></li>
                                </ul>
                            </div>
                            <div class="wpsm_recent_posts_list mb0 "
                                 data-filterargs="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:6,&quot;order&quot;:&quot;DESC&quot;,&quot;meta_key&quot;:&quot;rehub_views_mon&quot;,&quot;orderby&quot;:&quot;meta_value_num&quot;,&quot;no_found_rows&quot;:1}"
                                 data-template="simplepostlist" id="rh_simplepostid_812292761"
                                 data-innerargs="{&quot;nometa&quot;:1,&quot;image&quot;:&quot;&quot;,&quot;border&quot;:&quot;&quot;,&quot;excerpt&quot;:&quot;&quot;,&quot;priceenable&quot;:&quot;true&quot;,&quot;compareenable&quot;:&quot;&quot;,&quot;hotenable&quot;:&quot;true&quot;,&quot;maximage&quot;:&quot;&quot;,&quot;center&quot;:&quot;&quot;}">


                                <div class="col_item item-small-news">

                                    <div class="item-small-news-details">
                                        <h3><span id="temperatur9188" class="temperatur">1<span
                                                    class="gradus_icon"></span></span> <a
                                                href="https://shopmc.com.vn/minecraft-la-gi/">Minecraft là gì?</a>


                                        </h3>


                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col_item item-small-news">

                                    <div class="item-small-news-details">
                                        <h3><span id="temperatur9085" class="temperatur">1<span
                                                    class="gradus_icon"></span></span> <a
                                                href="https://shopmc.com.vn/huong-dan-tai-va-cai-dat-minecraft-launcher/">Hướng
                                                dẫn tải và cài đặt Minecraft Launcher</a>


                                        </h3>


                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>


                        </div>

                    </div>
                    <div id="rehub_sticky_on_scroll-1" class="widget stickyscroll_widget"
                         style="position: static; width: auto; top: 0px;"><img
                            src="https://shopmc.com.vn/wp-content/uploads/2019/08/image.jpg" width="336"
                            alt="best wordpress theme">

                    </div>
                </aside>        <!-- /Sidebar -->
            </div>
        </div>
        <!-- /CONTENT -->
        <!-- FOOTER -->

    </div>
    <!-- Outer End -->
@endsection

