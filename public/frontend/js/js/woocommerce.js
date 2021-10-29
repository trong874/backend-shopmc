/*
   Author: Igor Sunzharovskyi
   Author URI: https://wpsoul.com
*/

jQuery(document).on( 'change', '.rh_woo_drop_cat', function(e) {
    var catid = jQuery(this).val(),
        inputField = jQuery(this).parent().find('.re-ajax-search');
    if(inputField.length){
        inputField.attr("data-catid", catid);
        var inputValue = inputField.val();
        if(inputValue !=''){
            re_ajax_cache.remove(inputValue);
            re_ajax_search.do_ajax_call(inputField);
        }
    }
});
jQuery( '.variations_form' ).on( 'woocommerce_update_variation_values', function () {
    var rhswatches = jQuery('.rh-var-selector');
    rhswatches.find('.rh-var-label').removeClass('rhhidden');
    rhswatches.each(function(){
        var variationselect = jQuery(this).prev();
        jQuery(this).find('.rh-var-label').each(function(){
            if (variationselect.find('option[value="'+ jQuery(this).attr("data-value") +'"]').length <= 0) {
                jQuery(this).addClass('rhhidden');
            }
        });
    });
});
jQuery( '.variations_form' ).on( 'click', '.reset_variations', function () {
    var rhswatches = jQuery('.rh-var-selector');
    rhswatches.find('.rh-var-label').removeClass('rhhidden');
    rhswatches.each(function(){
        jQuery(this).find('.rh-var-input').each(function(){
            jQuery(this).prop( "checked", false );
        });
    });
});
jQuery(document).on("mouseenter", "#main_header .rh_woocartmenu_cell", function(){
    if(typeof wc_cart_fragments_params === 'undefined'){
        return false;
    }
    var widgetCartContent = jQuery(this).find(".widget_shopping_cart");
    widgetCartContent.addClass("loaded re_loadingbefore");
    jQuery.ajax({
        type: "post",
        url: wc_cart_fragments_params.wc_ajax_url.toString().replace('%%endpoint%%', 'get_refreshed_fragments'),
        data: {
            time: new Date().getTime()
        },
        timeout: wc_cart_fragments_params.request_timeout,
        success: function(data){
            if (data && data.fragments) {
                widgetCartContent.html(data.fragments["div.widget_shopping_cart_content"]);
                widgetCartContent.removeClass("re_loadingbefore");
            }
        }
    });
})
jQuery(document).on("mouseleave", "#main_header .rh_woocartmenu_cell", function(){
    var widgetCartContent = jQuery(this).find(".widget_shopping_cart");
    widgetCartContent.removeClass("loaded");
    widgetCartContent.html("");
});

jQuery(document).ready(function($) {
    'use strict';

    $('.rhniceselect, .woocommerce-ordering .orderby').niceSelect();

    $(document).on('added_to_cart',  function(e, fragments, cart_hash, $button){
        if ($button) {
            var cartNotice =wc_add_to_cart_params.i18n_added_to_cart +' <a href="' + wc_add_to_cart_params.cart_url +'" class="added_to_cart wc-forward" title="'+ wc_add_to_cart_params.i18n_view_cart +'">'+ wc_add_to_cart_params.i18n_view_cart +'</a>';
            $button.next('.added_to_cart').remove();
            $.simplyToast(cartNotice, 'success', {delay: 6000});
        }
    });

    if($('#section-woo-ce-pricehistory').length > 0){
        if($('#nopricehsection').length > 0){
            $('#section-woo-ce-pricehistory').remove();
            $('#tab-title-woo-ce-pricehistory').remove();
        }
    }

    //Quick view
    $(document).on('click', '.quick_view_button', function(e){
        e.preventDefault();
        var productID = $(this).data('product_id');
        var quickViewProduct = $(this).closest('quick_view_wrap').find('.quick_view_product');
        var data = {
            'action': 'product_quick_view',
            'product_id': productID,
            'nonce' : rhwoovar.quicknonce,
        };

        $.pgwModal({
            url: rhwoovar.ajax_url,
            titleBar: false,
            maxWidth: 800,
            loadingContent : '<img src="'+rhwoovar.templateurl+'/images/loaded.gif">',
            mainClassName : 'pgwModal quick_view_product',
            ajaxOptions : {
                data : data,
                success : function(response) {
                    if (response) {
                        $.pgwModal({ pushContent: response });
                    } else {
                        $.pgwModal({ pushContent: 'An error has occured' });
                    }
                }
            }
        });
    });

    $(document).on("click", ".rh-user-favor-shop", function(e){
        e.preventDefault();
        var heart = $(this);
        var user_id = heart.data("user_id");
        heart.find(".favorshop_like").html("<i class='rhicon rhi-spinner fa-spin'></i>");

        $.ajax({
            type: "post",
            url: rhwoovar.ajax_url,
            data: "action=rh-user-favor-shop&favornonce="+rhwoovar.favornonce+"&rh_user_favorite_shop=&user_id="+user_id,
            success: function(count){
                if( count.indexOf( "already" ) !== -1 )
                {
                    var lecount = count.replace("already","");
                    if (lecount == 0)
                    {
                        var lecount = "0";
                    }
                    heart.find(".favorshop_like").html("<i class='rhicon rhi-heart'></i>");
                    heart.removeClass("alreadyinfavor");
                    heart.find(".count").text(lecount);
                }
                else
                {
                    heart.find(".favorshop_like").html("<i class='rhicon rhi-heart-solid'></i>");
                    heart.addClass("alreadyinfavor");
                    heart.find(".count").text(count);
                }
            }
        });

        return false;
    });

    $(document).on('click', '.rh_gmw_map_in_wcv_profile', function (e) {
        e.preventDefault();
        $('.wcvendor_profile_menu_items li').removeClass('active');
        $('div[role="tabvendor"]').removeClass('active');
        $('#vendor-location').addClass('active');
        $('html, body').stop().animate({
            'scrollTop': $('#vendor-location').offset().top - 60
        }, 500, 'swing', function () {
            window.location.hash = '#vendor-location';
        });
    });


}); //END Document.ready
