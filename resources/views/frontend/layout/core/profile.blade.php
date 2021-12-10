@extends('frontend.layout.master')
@section('content')

    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="m-t-20 visible-sm visible-xs"></div>

        <center style="max-width:1160px; margin: 0 auto;" class="hidden-xs">
            <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center"
                 style="background-image: url('{{asset('frontend/image/lego-friends.jpg')}}');background-position: center;width:100%;height: 350px;background-repeat: no-repeat;background-position: center;background-size: cover;">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">&nbsp;</h3>
                    </div>
                </div>
            </div>
        </center>
        <div class="container c-size-md ">
            <div class="col-md-12">
                <div class="text-center" style="margin-top: -128px;">
                    <center>
                        <img class="img-responsive img-thumbnail hidden-xs" width="256" height="256"
                             src="{{asset('frontend/image/unknown-avatar.jpg')}}" alt="png-image">
                        <h2 class="c-font-bold c-font-28">ID Web: 522364</h2>
                        <h2 class="c-font-bold c-font-28">
                           {{Auth::user()->fullname??''}}
                        </h2>
                        <h2 class="c-font-22">Thành viên</h2>
                    </center>
                </div>
            </div>
        </div>
        <div class="c-layout-page" style="margin-top: 20px;">
            <div class="container">
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Thông tin tài khoản</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">ID của bạn:</th>
                            <th><span class="c-font-uppercase">522364</span></th>
                        </tr>
                        <tr>
                            <th scope="row">Tên tài khoản:</th>
                            <th>  {{Auth::user()->fullname??''}}</th>
                        </tr>
                        <tr>
                            <th scope="row">Số dư tài khoản:</th>
                            <td><b class="text-danger">1.000.000.000đ</b></td>
                        </tr>
{{--                                     <tr>--}}
{{--                    <th scope="row">Địa chỉ Email:</th>--}}
{{--                    <td>Tanmk1191@gmail.com (<a href="/user/email.html">Cài đặt</a>)</td>--}}
{{--                </tr>-->--}}
                        <tr>
                            <th scope="row">Địa chỉ Email:</th>
                            <th>{{Auth::user()->email??''}}</th>
                        </tr>
                        <tr>
                            <th scope="row">Nhóm tài khoản:</th>
                            <td>Thành viên</td>
                        </tr>
                        <tr>
                            <th scope="row">Ngày tham gia:</th>
                            <td>
                                {{Auth::user()->created_at??''}}
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">Mật khẩu:</th>
                            <td><a href="/user/change-password"><b><i class="text-danger">****** (Đổi mật khẩu)</i></b></a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>


        <!-- END: PAGE CONTENT -->
    </div>
@endsection
