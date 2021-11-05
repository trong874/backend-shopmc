@extends('frontend.layout.master')
@section('content')
    <div class="rh-container full_width">
        <div class="rh-content-wrap clearfix">
            <!-- Main Side -->
            <div class="main-side page clearfix full_width" id="content">
                <div class="rh-post-wrapper">
                    <article class="post mb0" id="page-9004">
                        <div
                            class="vc_row wpb_row vc_row-fluid vc_custom_1564761728966 vc_row-has-fill centered-container">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <!-- START Slider 1 REVOLUTION SLIDER 6.2.23 -->

                                                        <p class="rs-p-wp-fix"></p>
                                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                            <div class="carousel-indicators">
                                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                            </div>
                                                            <div class="carousel-inner">
                                                                @foreach($slides as $slide)
                                                                <div class="carousel-item active">
                                                                    <img src="{{$slide->image}}" class="d-block w-100" alt="...">
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </button>
                                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="visually-hidden">Next</span>
                                                            </button>
                                                        </div>                                                        <!-- END REVOLUTION SLIDER -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('frontend.position.category')
                        @include('frontend.position.flash_Sale')
                        @include('frontend.position.minecraft')
                        @include('frontend.position.backpacks_handbags')
                        @include('frontend.position.clothes')
                        @include('frontend.position.lego_minecraft')
                        <div
                            class="vc_row wpb_row vc_row-fluid vc_custom_1607449273831 vc_row-has-fill centered-container">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                <div class="vc_column-inner post">
                                    <div class="wpb_wrapper"><h4
                                            style="margin-block-start: 1em;  margin-left: 15px"
                                            class="vc_custom_heading vc_custom_1607448849913">Tin tức cộng đồng</h4>
                                    </div>
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

                                            @foreach($news as $new)
                                                <div class="news-community clearfix">

                                                    <div class="rh_grid_image_wrapper">
                                                        <div class="newsimage rh_gr_img">
                                                            <figure>
                                                                <div class="favorrightside wishonimage"></div>

                                                                <a href="{{route('news.detail',$new->id)}}">
                                                                    <img src="{{$new->image}}"
                                                                         style="max-height: 225px;max-width: 300px;"
                                                                         class="img-fluid" alt="">
                                                                </a>
                                                            </figure>
                                                        </div>
                                                        <div class="newsdetail rh_gr_top_right mb5">

                                                        </div>
                                                        <div class="newsdetail newstitleblock rh_gr_right_sec">
                                                            <h2 class="font130 mt0 mb10 mobfont120 lineheight20"><a
                                                                    href="{{route('news.detail',$new->id)}}">{{$new->title}}</a></h2>
                                                            <span
                                                                class="more-from-store-a floatleft ml0 mr10 mb5 lineheight20"><span
                                                                    class="tag_post_store_meta"></span></span>

                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="newsdetail rh_gr_right_desc">
                                                            <p class="font90 mobfont80 lineheight20 moblineheight15 mb15">
                                                                {!! $new->description !!}</p>

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
                                                                    <span class="date_meta">{{$new->created_at}}</span>

                                                                </div>
                                                                <div class="rh-flex-right-align">


                                                                    <a href="{{$new->url}}"
                                                                       class="btn_more">Xem Thêm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="newscom_head_ajax"></div>
                                                    <div class="newscom_content_ajax"></div>

                                                </div>
                                            @endforeach
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
