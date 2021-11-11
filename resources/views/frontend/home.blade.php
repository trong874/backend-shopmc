@extends('frontend.layout.master')
@section('content')
    <div class="rh-container full_width">
        <div class="rh-content-wrap clearfix">
            <!-- Main Side -->
            <div class="main-side page clearfix full_width" id="content">
                <div class="rh-post-wrapper">
                    <article class="post mb0" id="page-9004">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1564761728966 vc_row-has-fill centered-container">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <!--foreach luoon ra day START Slider 1 REVOLUTION SLIDER 6.2.23 -->
                                                        @include('frontend.widget.__sliderhome')
                                                        <!-- END REVOLUTION SLIDER -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('frontend.widget.__category')
                        @include('frontend.widget.__flashSale')
                        @include('frontend.widget.__minecraft')
                        @include('frontend.widget.__backpacks_handbangs')
                        @include('frontend.widget.__clothes')
                        @include('frontend.widget.__logoMinecraft')
                        @include('frontend.widget.__news')
                    </article>
                </div>
            </div>
            <!-- /Main Side -->
        </div>
    </div>
@endsection
