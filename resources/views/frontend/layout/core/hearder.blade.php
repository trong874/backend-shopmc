<header id="main_header" class="white_style">
    <div class="header_wrap">
        <!-- top -->
        <div class="header_top_wrap white_style">
            <div class="rh-container">
                <div class="header-top clearfix rh-flex-center-align">
                    <div class="top-nav">
                        <ul class="menu">
                            <li></li>
                        </ul>
                    </div>
                    @if(!Auth::check())
                    <div class="rh-flex-right-align top-social">
                        <div class="userblockintop"><span class="act-rehub-login-popup" data-type="login">
                                    <i class="fal fa-sign-out"></i><span>Đăng nhập / Đăng ký</span></span>
                            <div class="use_nam">
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="rh-flex-right-align top-social">
                            <div class="userblockintop"><div class="user-dropdown-intop">
                                    <span class="user-ava-intop">
                                        <img src="{{Auth::user()->image ?? asset('media/users/100_3.jpg')}}" width="28" height="28" alt="Avatar" class="avatar avatar-28 wp-user-avatar wp-user-avatar-28 photo avatar-default"></span>
                                    <ul class="user-dropdown-intop-menu">
                                        <li class="user-name-and-badges-intop">
                                            <span class="user-image-in-name">
                                                <img src="{{Auth::user()->image ?? asset('media/users/100_3.jpg')}}" width="35" height="35" alt="Avatar" class="avatar avatar-35 wp-user-avatar wp-user-avatar-35 photo avatar-default"></span>{{Auth::user()->username}}</li>
                                        <li class="user-editorders-link-intop menu-item">
                                            <a href="#">
                                                <i class="rhicon rhi-shopping-bagfeather" aria-hidden="true"></i>
                                                <span>Tài khoản của tôi</span></a></li>
                                        <li class="user-logout-link-intop menu-item">
                                            <a href="{{route('logout')}}">
                                                <i class="rhicon rhi-lock-alt"></i><span>Đăng xuất</span></a></li></ul></div><div class="use_nam">
                                {{Auth::user()->username}}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- /top -->


        <!-- Logo section -->
        <div class="logo_section_wrap hideontablet">
            <div class="rh-container">
                <div class="logo-section rh-flex-center-align tabletblockdisplay header_seven_style clearfix">
                    <div class="logo">
                        <a href="{{ route('page.index') }}" class="logo_image">
                            <img src="https://shopmc.com.vn/wp-content/uploads/2019/02/Minecraft_logo.png"
                                 alt="Shop MC" height="" width=""/>
                        </a>
                    </div>
                    <div class="search head_search">
                        <form role="search" method="get" class="search-form" action="{{route('product.search')}}">
                            <input type="text" name="keyword" placeholder="Tìm kiếm" class="re-ajax-search"
                                   autocomplete="off" data-posttype="product" value="{{@$keyword}}">
                            <button type="submit" class="btnsearch"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="re-aj-search-wrap"></div>
                    </div>
                    <?php
                    $user = Auth::user();
                    if (empty($user)){
                        $pop = 'act-rehub-login-popup';
                    }
                    else{
                        $pop = '';
                    }
                    ?>
                    <div class="cart_out rh-flex-right-align {{$pop}}" style="position: relative" >
                        <div class="header-actions-logo rh-flex-right-align">
                            <div class="tabledisplay">
                                <div class="celldisplay rh_woocartmenu_cell text-center">
                                    <span class="inlinestyle rehub-main-btn-bg rehub-main-smooth menu-cart-btn ">
                                        <a class="rh-header-icon rh-flex-center-align rh_woocartmenu-link cart-contents cart_count_0" href="{{route('item.cart')}}">
                                            <i class="fas fa-cart-plus"></i>
                                            <span class="rh_woocartmenu-icon">
                                                <span class="rh-icon-notice rehub-main-color-bg">0</span>
                                            </span>
                                            <span class="rh_woocartmenu-amount">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">{{number_format($data_cart['total_price'])}} &#8363;</span>
                                                    </bdi>
                                                </span>
                                            </span>
                                        </a>
                                    </span>

                                    <div class="woocommerce widget_shopping_cart"></div>

                                </div>
                            </div>
                        </div>
                        {{--mycart--}}
                        <div id="my_cart">

                        </div>
                        <div id="wai">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            #cartDetail{
                display: block;
            }
            #cartDetail{
                position: absolute;
                width:450px;
                /*display: none;*/
                height: auto;
                background-color: white;
                /*margin-left: 1300px;*/
                top: 40px;
                right: 0;
                border-radius: 4px;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
                border-bottom-left-radius: 4px;
                -webkit-box-shadow: 0 10px 6px -6px #777;
                -moz-box-shadow: 0 10px 6px -6px #777;
                box-shadow: 0 10px 6px -6px #777;
            }
            #cartDetail img{
                max-height: 60px;
            }
        </style>
        <script>

            $(".cart_out").mouseenter(function () {
                $.ajax({
                    url:'/getCart/',
                    type:'GET',
                    success:function (res) {
                        $("#my_cart").empty();
                        $("#my_cart").html(res);
                        $("#my_cart").show();
                    }
                });
            })

            $(".cart_out").mouseleave(function () {
                console.log(1);
                $("#my_cart").hide();
            })

            $("#my_cart").on("click",".close-item i",function () {
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url:'/delete-cart/'+$(this).data("id"),
                    type:'GET',
                    success:function (res) {
                        $("#my_cart").empty();
                        $("#my_cart").html(res);
                        alertify.success("Xóa vật phẩm thành công?");
                    }
                });
            })
        </script>
        <!-- /Logo section -->
        <!-- Main Navigation -->
        <div class="search-form-inheader header_icons_menu main-nav mob-logo-enabled rh-stickme dark_style" style="max-height: 40px">
            <div class="container" >
                <nav class="top_menu">
                    <ul id="menu-danh-muc-san-pham" class="menu" style="margin-left: 40px">
                        <li id="menu-item-9029"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href="#"><i class="fas fa-chevron-down"></i> Danh mục sản phẩm</a>
                            <ul class="sub-menu">
                                @if(isset($categories_product))
                                    @foreach($categories_product as $item)
                                    <li id="menu-item-{{$item->id}}"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-product_cat">
                                        <a href="{{route('category.detail',$item->slug)}}">{{$item->title}}</a>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <li id="menu-item-9558" class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="#"><i class="far fa-usd-circle"></i> Khuyến
                                mại</a></li>
                        <li id="menu-item-9664" class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="{{route('new.list')}}"><i class="fas fa-newspaper"></i>
                                Tin tức</a></li>

                        <li id="menu-item-9663"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                            <a href="#"><i class="fas fa-chevron-down"></i> Thương hiệu</a>
                            <ul class="sub-menu">
                                <li id="menu-item-9757"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="#">Mojang</a></li>
                                <li id="menu-item-9758"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="#">Jinx</a></li>
                                <li id="menu-item-9756"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="#">Lego Đan Mạch</a>
                                </li>
                                <li id="menu-item-9759"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="#">ThinkGeek</a></li>
                                <li id="menu-item-9760"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-store"><a
                                        href="#">Mattel</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-9662" class="menu-item menu-item-type-custom menu-item-object-custom"><a
                                href="#"><i class="fas fa-address-book"></i>Liên hệ</a>
                        </li>
                    </ul>
                </nav>
                <div class="responsive_nav_wrap rh_mobile_menu">
                    <div id="dl-menu" class="dl-menuwrapper rh-flex-center-align">
                        <button id="dl-trigger" class="dl-trigger" aria-label="Menu">
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <line stroke-linecap="round" id="rhlinemenu_1" y2="7" x2="29" y1="7" x1="3"/>
                                    <line stroke-linecap="round" id="rhlinemenu_2" y2="16" x2="18" y1="16" x1="3"/>
                                    <line stroke-linecap="round" id="rhlinemenu_3" y2="25" x2="26" y1="25" x1="3"/>
                                </g>
                            </svg>
                        </button>
                        <div id="mobile-menu-icons" class="rh-flex-center-align rh-flex-right-align">
                            <div id="slide-menu-mobile"></div>
                        </div>
                    </div>
                </div>
                <div class="search-header-contents">
                    <form role="search" method="get" class="search-form" action="/">
                        <input type="text" name="s" placeholder="Tìm kiếm"  autocomplete="off">
                        <input type="hidden" name="post_type" value="product"/>
                        <button type="submit" class="btnsearch"><i class="rhicon rhi-search"></i></button>
                    </form>
                    <div class="re-aj-search-wrap"></div>
                </div>
            </div>
        </div>
        <!-- /Main Navigation -->
    </div>
</header>
