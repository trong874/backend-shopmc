<div class="vc_row wpb_row vc_row-fluid centered-container">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                    <div class="wpb_wrapper">
                        <div class="cate_home">
                            <ul class="ul_cate">
                                <li class="li_cate">
                                    <div class="li_a">
                                        @foreach($categories as $category)
                                        <a class="link_a" href="https://shopmc.com.vn/danh-muc/kiem-cuoc-riu-minecraft/">
                                            <div class="buttom_cat">
                                                <div class="buttom_cat_img">
                                                    <div class="buttom_cat_img_sub">

                                                        <img src="{{$category->image}}" alt="">                                                      </div>
                                                   </div>
                                                <div class="buttom_cat_text"><div class="buttom_cat_text-h3">{{$category->title}}</div>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
