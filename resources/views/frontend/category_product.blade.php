@extends('frontend.layout.master')
@section('content')
    <div class="rh-container rh_woo_main_archive">
        <div class="rh-content-wrap clearfix left-sidebar-archive" id="rh_woo_mbl_sidebar">
            <!-- Sidebar -->
            <aside class="sidebar">
                <!-- SIDEBAR WIDGET AREA -->
                <div id="rehub_better_menu-3" class="widget better_menu">
                    <div class="simple_menu_widget">
                        <div class="title">
                            <i class="rhicon rhi-bolt"></i>Danh mục sản phẩm</div>
                        <ul id="menu-danhmuc" class="menu">
                            @if($categories_p)
                                @foreach($categories_p as $category)
                            <li id="menu-item-9320" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-9320"><a href="{{route('category.detail',$category->slug)}}">{{$category->title}}</a></li>
                                @endforeach
                                @endif
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="slider-range" name="rangeInput"></div>
                        </div>
                    </div>
                    <div class="row slider-labels">
                        <div class="col-xs-6 caption">
                            <strong>Min:</strong>
                            <span id="slider-range-value1"></span> đ</div>
                        <div class="col-xs-6 text-right caption">
                            <strong>Max:</strong>
                            <span id="slider-range-value2"></span> đ</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form method="get" action="{{route('product.slider')}}">
                                <input type="hidden" name="min_value" value="" id="min_price" style="margin-top: 10px;">
                                <input type="hidden" name="max_value" value="" id="max_price">
                                <button type="submit" class="button" style="background-color: #4CAF50;margin-top: 10px;
                                                                          border: none;
                                                                          color: white;
                                                                          padding: 6px 18px;
                                                                          text-align: center;
                                                                          text-decoration: none;
                                                                          display: inline-block;
                                                                          font-size: 16px;
                                                                          border-radius: 8px;">Lọc</button>
                            </form>
                        </div>
                    </div>
                </div>


            </aside>
            <!-- /Sidebar -->

            <!-- Main Side -->
            <div class="main-side woocommerce page clearfix" id="content">
                <article class="post" id="page-8507">
                    <nav class="woocommerce-breadcrumb"><a href="/">Trang chủ</a><span class="delimiter"><i class="rhicon rhi-angle-right"></i></span>{{@$categoryDetails->title}}</nav>
                    <h1 class="arc-main-title " style="margin-top: 10px">{{@$categoryDetails->title}}</h1>
                    <div class="border-grey cursorpointer floatright font90 ml10 pl10 pr10 rehub-main-color rtlmr10 rhhidden" id="mobile-trigger-sidebar"><i class="fa-sliders-v fal"></i> Filter</div>
                    <div class="woocommerce-notices-wrapper"></div><p class="woocommerce-result-count">
                        Hiển thị tất cả {{count(@$products)}} kết quả</p>
                    <div class="columns-5 products col_wrap_fifth rh-flex-eq-height grid_woo">
                        @if(isset($products))
                        @foreach($products as $items)
                        <div class="product col_item woo_grid_compact two_column_mobile type-product rh-hover-up no_btn_enabled ">
                            <span class="onsale"><span>- 35%</span></span>
                            <figure class="mb5 mt25 position-relative notresized">
                                <a class="img-centered-flex rh-flex-justify-center rh-flex-center-align" href="{{route('item.detail',$items->slug)}}">
                                    <img class=" lazyloaded"
                                         data-src="https://shopmc.com.vn/wp-content/uploads/thumbs_dir/combo-3-kiem-minecraft-2-1vl71vlzh480zj0k06nvqkhnsso3izwxafyvb1hozr5w.jpg"
                                         width="300" alt="Combo 3 Kiếm Minecraft"
                                         src="{{$items->image}}">
                                </a>
                            </figure>
                            <h3 class=" text-clamp text-clamp-2">
                                <a href="#">{{$items->title}}</a>
                            </h3>
                            <div class="border-top pt10 pr10 pl10 pb10">
                                <div class="price_for_grid floatleft rehub-btn-font mr10">
                                    <span class="price">
                                        <del>
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>
                                                    @if(isset($items->price_old))
                                                        <span>{{number_format($items->price_old)}}</span>
                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                    @endif
                                                </bdi>
                                            </span>
                                        </del>
                                        <ins style="margin-left: 6px">
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>
                                                     <span>{{number_format($items->price)}}</span>
                                                    <span class="woocommerce-Price-currencySymbol">₫</span>
                                                </bdi>
                                            </span>
                                        </ins>
                                    </span>
                                </div>
                                <div class="floatright product-meta">
                                    <div class="rh_woo_star" title="Rated 5 out of 5">
                                        <span class="rhwoostar rhwoostar1 active">★</span>
                                        <span class="rhwoostar rhwoostar2 active">★</span>
                                        <span class="rhwoostar rhwoostar3 active">★</span>
                                        <span class="rhwoostar rhwoostar4 active">★</span>
                                        <span class="rhwoostar rhwoostar5 active">★</span>
                                    </div>
                                    <span class="greycolor postview">Đã bán 420</span>
                                </div>
                                <div class="rh-flex-right-align btn_for_grid floatright">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </article>
            </div>
            <!-- /Main Side -->



        </div>
        <style>
            .buttom_home {
                display: flex;
                width: 25%;
                background: #fff;
            }
            .buttom_home_a{
                display: flex;
                font-size: 0.625rem;
                fill: rgba(0,0,0,.87);
                color: rgba(0,0,0,.87);
                -webkit-box-orient: vertical;
                -webkit-flex-direction: column;
                align-items: center;
                width: 100%;
                height: 100%;
                margin-top: 5px;
            }
            .codinh{
                box-shadow: 0 2px 4px 0 rgb(0 0 0);
            }
        </style>
        <div class="codinh">
            <div class="buttom_home">
                <a class="buttom_home_a" href="#">
                    <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="home" class="svg-inline--fa fa-home fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg>
                    <div class="goingay">Home</div>
                </a>
            </div>
            <div class="buttom_home">
                <a class="buttom_home_a" href="tel://0981058326">
                    <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="phone-volume" class="svg-inline--fa fa-phone-volume fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M97.333 506.966c-129.874-129.874-129.681-340.252 0-469.933 5.698-5.698 14.527-6.632 21.263-2.422l64.817 40.513a17.187 17.187 0 0 1 6.849 20.958l-32.408 81.021a17.188 17.188 0 0 1-17.669 10.719l-55.81-5.58c-21.051 58.261-20.612 122.471 0 179.515l55.811-5.581a17.188 17.188 0 0 1 17.669 10.719l32.408 81.022a17.188 17.188 0 0 1-6.849 20.958l-64.817 40.513a17.19 17.19 0 0 1-21.264-2.422zM247.126 95.473c11.832 20.047 11.832 45.008 0 65.055-3.95 6.693-13.108 7.959-18.718 2.581l-5.975-5.726c-3.911-3.748-4.793-9.622-2.261-14.41a32.063 32.063 0 0 0 0-29.945c-2.533-4.788-1.65-10.662 2.261-14.41l5.975-5.726c5.61-5.378 14.768-4.112 18.718 2.581zm91.787-91.187c60.14 71.604 60.092 175.882 0 247.428-4.474 5.327-12.53 5.746-17.552.933l-5.798-5.557c-4.56-4.371-4.977-11.529-.93-16.379 49.687-59.538 49.646-145.933 0-205.422-4.047-4.85-3.631-12.008.93-16.379l5.798-5.557c5.022-4.813 13.078-4.394 17.552.933zm-45.972 44.941c36.05 46.322 36.108 111.149 0 157.546-4.39 5.641-12.697 6.251-17.856 1.304l-5.818-5.579c-4.4-4.219-4.998-11.095-1.285-15.931 26.536-34.564 26.534-82.572 0-117.134-3.713-4.836-3.115-11.711 1.285-15.931l5.818-5.579c5.159-4.947 13.466-4.337 17.856 1.304z"></path></svg>
                    <div class="goingay">Gọi Ngay</div>
                </a>
            </div>
            <div class="buttom_home">
                <a class="buttom_home_a" href="/khuyen-mai">
                    <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="gift" class="svg-inline--fa fa-gift fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"></path></svg>
                    <div class="goingay">Khuyến Mại</div>
                </a>
            </div>
            <div class="buttom_home">
                <a class="buttom_home_a" href="https://zalo.me/0981058326">
                    <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="comment-dots" class="svg-inline--fa fa-comment-dots fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg>
                    <div class="goingay">Chat Zalo</div>
                </a>
            </div>
            <div class="buttom_home">
                <div class="buttom_home_a userblockintop"><span class="act-rehub-login-popup" data-type="login">
                        <svg aria-hidden="true" id="Capa_1" focusable="false" data-prefix="fas" data-icon="user" class="rhicon rhi-sign-in svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                <div class="goingay">Tôi</div>
                    </span></div>
            </div>

        </div>
    </div>
@endsection
@section('filter_price')
    <link rel="stylesheet" href="{{asset('frontend/css/home/filter_price.css')}}">
    <script src="{{asset('frontend/js/home/filter_price.js')}}"></script>
@endsection
