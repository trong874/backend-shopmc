<div class="vc_row wpb_row vc_row-fluid centered-container">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                    <div class="wpb_wrapper">
                        <div class="cate_home">
                            <ul class="ul_cate">
                                        @if($categories_banner)
                                            {{showCategories($categories_banner)}}
                                        @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
function showCategories($categories)
{
    $flag = 0;
    echo '<li class="li_cate">';
    echo '<div class="li_a">';
    foreach ($categories as $key => $category) {
        $flag++;
        if ($flag <= 2) {
            echo '<a class="link_a" href="#">
                <div class="buttom_cat">
                    <div class="buttom_cat_img">
                        <div class="buttom_cat_img_sub">
                        <img src="' . $category->image . '" alt="">
                        </div>
                    </div>
                  <div class="buttom_cat_text">
                        <div class="buttom_cat_text-h3">' . $category->title . '</div>
                  </div>
                </div>
              </a>';
            //xoá phần tử đã hiển thị khỏi mảng
            unset($categories[$key]);
        }
        if ($flag == 2) {
            echo '</div>';
            echo '</li>';
            if ($key < 19){
            showCategories($categories);
            };
        }
    }

}
?>

