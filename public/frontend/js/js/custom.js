/*
   Author: Igor Sunzharovskyi
   Author URI: https://wpsoul.com
*/

function reshowNav(){'use strict'; jQuery(this).addClass('hovered'); }
function rehideNav(){'use strict'; jQuery(this).removeClass('hovered');}
/*Throttle option*/
(function(b,c){var $=b.jQuery||b.Cowboy||(b.Cowboy={}),a;$.throttle=a=function(e,f,j,i){var h,d=0;if(typeof f!=="boolean"){i=j;j=f;f=c}function g(){var o=this,m=+new Date()-d,n=arguments;function l(){d=+new Date();j.apply(o,n)}function k(){h=c}if(i&&!h){l()}h&&clearTimeout(h);if(i===c&&m>e){l()}else{if(f!==true){h=setTimeout(i?k:l,i===c?e-m:e)}}}if($.guid){g.guid=j.guid=j.guid||$.guid++}return g};$.debounce=function(d,e,f){return f===c?a(d,e,false):a(d,f,e!==false)}})(this);


var re_main_search = {

    // Some variables
    _is_search_open:false,

    init: function init() {

        // Search icon show/hide
        jQuery(document).on( 'click', '.icon-search-onclick', function(e) {
            e.stopPropagation();
            jQuery( '.main-nav' ).toggleClass( 'top-search-onclick-open' );
            if(jQuery(this).parent().parent().hasClass('elementor-widget-container')){
                jQuery( this).closest('section').toggleClass( 'top-search-onclick-open' );
                jQuery( this).closest('.elementor-widget').addClass( 'position-static' );
                jQuery( this).closest('.elementor-widget-wrap').addClass( 'position-static' );
                jQuery( this).closest('.elementor-column-wrap').addClass( 'position-static' );
                jQuery( this).closest('.elementor-column').addClass( 'position-static' );
            }
            if (re_main_search._is_search_open === true) {
                re_main_search._is_search_open = false;
            }
            else {
                re_main_search._is_search_open = true;
                if (jQuery('html').hasClass('flash')) {
                    setTimeout(function(){
                        jQuery( '.main-nav .search-header-contents input[name="s"]' ).focus();
                    }, 200);
                }
            }
        });

        jQuery(document).click( function(e){
            if( jQuery(e.target).closest(".head_search").length || jQuery(e.target).closest(".custom_search_box").length)
                return;
            jQuery( '.head_search .re-aj-search-wrap' ).removeClass( 're-aj-search-open' ).empty();
            jQuery( '.custom_search_box .re-aj-search-wrap' ).removeClass( 're-aj-search-open' ).empty();
            e.stopPropagation();
            if (re_main_search._is_search_open === true) {
                re_main_search._is_search_open = false;
            }
        });

        jQuery(document).click( function(e){
            if( jQuery(e.target).closest(".search-header-contents").length )
                return;
            jQuery( '.main-nav' ).removeClass( 'top-search-onclick-open' );
            e.stopPropagation();
            if (re_main_search._is_search_open === true) {
                re_main_search._is_search_open = false;
            }
        });

    }
};

//MOBILE MENU AND MEGAMENU
var NavOverlayRemoved = true;
var revMenuStyle = function() {
    var menu = jQuery('.rh_mobile_menu'),
        openMenu = menu.find('#dl-trigger'),
        navMenu = menu.find('#slide-menu-mobile'),
        menuList = menu.find('#slide-menu-mobile > .menu'),
        subMenu = menu.find('.sub-menu'),
        mobilecustomheader = jQuery('#rhmobpnlcustom'),
        mobsidebar = jQuery('#rh_woo_mbl_sidebar'),
        mobsidebartrigger = jQuery('#mobile-trigger-sidebar');
    menuList.addClass('off-canvas');
    if (menuList.find('.close-menu').length === 0) {
        menuList.append('<li class="close-menu rh-close-btn position-relative text-center cursorpointer rh-circular-hover"><span><i class="rhicon rhi-times whitebg roundborder50p rh-shadow4 abdposleft" aria-hidden="true"></i></span></li>');
    }
    if(mobilecustomheader.length > 0){
        menuList.prepend('<li id="mobtopheaderpnl">'+mobilecustomheader.html()+'</li>');
    }
    jQuery('#slide-menu-mobile .menu-item-has-children').children('a').after('<span class="submenu-toggle"><i class="rhicon rhi-angle-right"></i></span>');
    jQuery('#slide-menu-mobile .menu-item-has-children:not(.rh-mobile-linkable)').children('a').addClass('submenu-toggle');
    menuList.on('click', '.submenu-toggle', function(evt) {
        evt.preventDefault();
        jQuery(this)
            .siblings('.sub-menu')
            .addClass('sub-menu-active');
    });
    subMenu.each(function() {
        var $this = jQuery(this);
        if ($this.find('.back-mb').length === 0) {
            $this.prepend('<li class="back-mb"><span class="rehub-main-color"><i class="rhicon rhi-chevron-left mr10"></i> '+translation.back+'</span></li>');
        }
        menu.on('click', '.back-mb span', function(evt) {
            evt.preventDefault();
            jQuery(this)
                .parent()
                .parent()
                .removeClass('sub-menu-active');
        });
    });
    openMenu.on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        jQuery('#wpadminbar').css('z-index', '999');
        navMenu.fadeIn(100);
        menuList.addClass('off-canvas-active');
        jQuery(this).addClass('toggle-active');
        if(NavOverlayRemoved){
            jQuery('body').append(jQuery('<div class="offsetnav-overlay"></div>').hide().fadeIn());
            NavOverlayRemoved = false;
        }
    });
    mobsidebartrigger.on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        mobsidebar.toggleClass('activeslide');
        if(NavOverlayRemoved){
            jQuery('body').append(jQuery('<div class="offsetnav-overlay"></div>').hide().fadeIn());
            NavOverlayRemoved = false;
        }
    });
    jQuery(document).on('click touchstart', '.close-menu, .offsetnav-overlay', function(event) {
        //event.preventDefault();
        event.stopPropagation();
        setTimeout(function(){
            menuList.removeClass('off-canvas-active');
            openMenu.removeClass('toggle-active');
            jQuery('.sub-menu').removeClass('sub-menu-active');
            mobsidebar.removeClass('activeslide');
            if(!NavOverlayRemoved){
                jQuery('.offsetnav-overlay').remove();
                NavOverlayRemoved = true;
            }
            return false;
        }, 100);
    });
}

//Proper align Full
var rh_resizealign = function(){
    if(jQuery('.alignfulloutside .alignfull').length > 0){
        jQuery('.alignfulloutside .alignfull').each(function() {
            var parent = jQuery(this).parent();
            var ancenstor = jQuery(window);
            var w = ancenstor.width();
            var bl = - ( parent.offset().left );
            if ( bl > 0 ) { left = 0; }
            jQuery(this).css({'width': w,'margin-left': bl });
        });
    }
};

jQuery(document).ready(function($) {
    'use strict';

    /* better alerts*/
    (function(){$.simplyToast=function(e,t,n){function u(){$.simplyToast.remove(o)}n=$.extend(true,{},$.simplyToast.defaultOptions,n);var r='<div class="simply-toast rh-toast rh-toast-'+(t?t:n.type)+" "+(n.customClass?n.customClass:"")+'">';if(n.allowDismiss)r+='<span class="rh-toast-close" data-dismiss="alert">&times;</span>';r+=e;r+="</div>";var i=n.offset.amount;$(".simply-toast").each(function(){return i=Math.max(i,parseInt($(this).css(n.offset.from))+this.offsetHeight+n.spacing)});var s={position:n.appendTo==="body"?"fixed":"absolute",margin:0,"z-index":"999999",display:"none","min-width":n.minWidth,"max-width":n.maxWidth};s[n.offset.from]=i+"px";var o=$(r).css(s).appendTo(n.appendTo);switch(n.align){case"center":o.css({left:"50%","margin-left":"-"+o.outerWidth()/2+"px"});break;case"left":o.css("left","20px");break;default:o.css("right","20px")}if(o.fadeIn)o.fadeIn();else o.css({display:"block",opacity:1});if(n.delay>0){setTimeout(u,n.delay)}o.find('[data-dismiss="alert"]').removeAttr("data-dismiss").click(u);return o};$.simplyToast.remove=function(e){if(e.fadeOut){return e.fadeOut(function(){return e.remove()})}else{return e.remove()}};$.simplyToast.defaultOptions={appendTo:"body",customClass:false,type:"info",offset:{from:"top",amount:20},align:"right",minWidth:250,maxWidth:450,delay:4e3,allowDismiss:true,spacing:10}})();

    $(document).on('click', '.vertical-menu > a', function(e){
        e.preventDefault();
        e.stopPropagation();
        var vertmenu = $(this).closest('.vertical-menu');
        if(vertmenu.hasClass('hovered')){
            vertmenu.removeClass('hovered').removeClass('vmenu-opened');
        }else{
            vertmenu.toggleClass("vmenu-opened");
        }
    });

    // Header and menu
    var res_nav = $("#main_header .top_menu").html();
    $("#slide-menu-mobile").html(res_nav);
    if ($('#re_menu_near_logo').length > 0) {
        var header_responsive_menu = $("#re_menu_near_logo ul").html();
        $("#main_header .responsive_nav_wrap ul.menu").prepend(header_responsive_menu);
    }
    if ($('#main_header .top-nav ul.menu').length > 0) {
        var header_top_menu_add = $("#main_header .top-nav ul.menu").html();
        $("#main_header .responsive_nav_wrap ul.menu").append(header_top_menu_add);
    }
    if ($('#main_header .top_custom_content').length > 0) {
        var header_top_menu_add = $("#main_header .top_custom_content").html();
        $("#main_header .responsive_nav_wrap ul.menu").append('<li><div class="pt15 pb15 pl15 pr15 top_custom_content_mobile font80">'+header_top_menu_add+'</div></li>');
    }
    if ($('.rh_woocartmenu_cell').length > 0) {
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons" ).prepend( $(".rh_woocartmenu_cell").html());
    }
    if ($('.rehub-custom-menu-item.rh_woocartmenu').length > 0) {
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons" ).prepend( $(".rehub-custom-menu-item.rh_woocartmenu").html());
    }
    if ($('#main_header .header-top .act-rehub-login-popup').length > 0) {
        if (typeof $('#main_header .header-top .act-rehub-login-popup').data('type') !== 'undefined') {
            var copydatatype = $('#main_header .header-top .act-rehub-login-popup').data('type');
        }
        else{
            var copydatatype = '';
        }
        if (typeof $('#main_header .header-top .act-rehub-login-popup').data('customurl') !== 'undefined') {
            var copycustomurl = $('#main_header .header-top .act-rehub-login-popup').data('customurl');
        }
        else{
            var copycustomurl = '';
        }
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons" ).prepend( "<button class='act-rehub-login-popup rhhidden showonmobile' data-type='"+copydatatype+"' data-customurl='"+copycustomurl+"'><i class='rhicon rhi-sign-in'></i></button>" );
    }
    if ($('.rehub-custom-menu-item.rehub-top-login-onclick .act-rehub-login-popup').length > 0) {
        if (typeof $('.rehub-custom-menu-item.rehub-top-login-onclick .act-rehub-login-popup').data('type') !== 'undefined') {
            var copydatatype = $('.rehub-custom-menu-item.rehub-top-login-onclick .act-rehub-login-popup').data('type');
        }
        else{
            var copydatatype = '';
        }
        if (typeof $('.rehub-custom-menu-item.rehub-top-login-onclick .act-rehub-login-popup').data('customurl') !== 'undefined') {
            var copycustomurl = $('.rehub-custom-menu-item.rehub-top-login-onclick .act-rehub-login-popup').data('customurl');
        }
        else{
            var copycustomurl = '';
        }
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons" ).prepend( "<button class='act-rehub-login-popup'  data-type='"+copydatatype+"' data-customurl='"+copycustomurl+"'><i class='rhicon rhi-sign-in'></i></button>" );
    }
    if ($('.rehub-custom-menu-item.rehub-top-login-onclick .user-dropdown-intop').length > 0) {
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons" ).prepend( $(".rehub-custom-menu-item.rehub-top-login-onclick").html());
    }
    if ($('#main_header .responsive_nav_wrap #mobile-menu-icons .rehub-custom-menu-item').length > 0) {
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons .rehub-custom-menu-item" ).remove();
    }
    if ($('.mobileinmenu').length > 0) {
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons" ).prepend( $(".logo-section .mobileinmenu").clone());
    }
    if ($('#logo_mobile_wrapper').length > 0) {
        $( ".responsive_nav_wrap #dl-trigger" ).after($('#logo_mobile_wrapper').html() );
        $( ".logo_image_insticky, header .logo" ).addClass('hideontablet');
    }
    if ($('.main-nav .logo-inmenu').length > 0) {
        $( "#main_header .responsive_nav_wrap #dl-menu .menu-item.logo-inmenu" ).remove();
    }
    if ($('#main_header .header-top .user-dropdown-intop').length > 0) {
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons" ).prepend( $(".userblockintop").html());
        $( "#main_header .responsive_nav_wrap #mobile-menu-icons .user-dropdown-intop" ).addClass('rhhidden showonmobile');
    }
    $( "#main_header .responsive_nav_wrap #mobile-menu-icons" ).prepend( "<button class='icon-search-onclick' aria-label='Search'><i class='rhicon rhi-search'></i></button>" );

    $("nav.top_menu > ul li.menu-item-has-children").hoverIntent({
        over: reshowNav,
        out: rehideNav,
        timeout: 120,
        interval: 100
    });

    $("#main_header .top-nav > ul li.menu-item-has-children").hoverIntent({
        over: reshowNav,
        out: rehideNav,
        timeout: 120,
        interval: 100
    });

    revMenuStyle();
    re_main_search.init();
    rh_resizealign();

    if ($('.right_aff .price_count').length > 0) {
        var width_ofcontainer = $('.right_aff .price_count').innerWidth() / 2;
        $('.right_aff .price_count').append('<span class="triangle_aff_price" style="border-width: 14px ' + width_ofcontainer + 'px 0 ' + width_ofcontainer + 'px"></span>');
    }

    /* scroll to # */
    $('.rehub_scroll, #kcmenu a, .kc-gotop').on('click',function (e) {
        e.preventDefault();
        if (typeof $(this).data('scrollto') !== 'undefined') {
            var target = $(this).data('scrollto');
            var hash = $(this).data('scrollto');
        }
        else {
            var target = $(this.hash + ', a[name="'+ this.hash.replace(/#/,"") +'"]').first();
            var hash = this.hash;
        }

        var $target = $(target);
        if($target.length !==0){
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 45
            }, 500, 'swing', function () {
                if(history.pushState) {
                    history.pushState(null, null, hash);
                }
                else {
                    window.location.hash = hash;
                }
            });
        }
    });

    /* tabs */
    $('.tabs-menu').on('click', 'li:not(.current)', function() {
        var tabcontainer = $(this).closest('.tabs');
        if(tabcontainer.length == 0) {
            var tabcontainer = $(this).closest('.elementor-widget-wrap');
        }
        $(this).addClass('current elementor-active').siblings().removeClass('current elementor-active');

        tabcontainer.find('.tabs-item').hide().removeClass('stuckMoveDownOpacity').eq($(this).index()).show().addClass('stuckMoveDownOpacity');
    });
    $('.tabs-menu li:first-child').trigger('click');

    /*bar*/
    if($('.wpsm-bar').length > 0){
        $('.wpsm-bar').each(function(){
            $(this).find('.wpsm-bar-bar').animate({ width: $(this).attr('data-percent') }, 1500 );
        });
    }

    /* accordition */
    var accordionWrap = document.getElementsByClassName('wpsm-accordion');
    if(accordionWrap.length > 0){
        var accHD = document.getElementsByClassName('wpsm-accordion-trigger');
        for (let i = 0; i < accHD.length; i++) {
            accHD[i].addEventListener('click', rhtoggleItem, false);
        }
        function rhtoggleItem() {
            var grandparent = this.parentNode.parentNode;
            var toggledata = grandparent.dataset.accordion;
            var itemClass = this.parentNode.className;
            if(toggledata == "yes"){
                var currItem = grandparent.getElementsByClassName('wpsm-accordion-item');
                for (let i = 0; i < currItem.length; i++) {
                    currItem[i].className = 'wpsm-accordion-item close';
                }
            }else{
                if (itemClass == 'wpsm-accordion-item open') {
                    this.parentNode.className = 'wpsm-accordion-item close';
                }
            }
            if (itemClass == 'wpsm-accordion-item close') {
                this.parentNode.className = 'wpsm-accordion-item open';
                this.nextSibling.classList.add('stuckMoveDownOpacity');
            }
        }
    }

    if ($('.wpsm-tooltip').length > 0) {
        $(".wpsm-tooltip").tipsy({gravity: "s", fade: true, html: true });
    }

    if($(".countdown_dashboard").length > 0){
        $(".countdown_dashboard").each(function(){
            $(this).show();
            var id = $(this).attr("id");
            var day = $(this).attr("data-day");
            var month = $(this).attr("data-month");
            var year = $(this).attr("data-year");
            var hour = $(this).attr("data-hour");
            var min = $(this).attr("data-min");
            //var curtime = $(this).attr("data-currenttime");
            $(this).countDown({
                targetDate: {
                    "day":      day,
                    "month":    month,
                    "year":     year,
                    "hour":     hour,
                    "min":      min,
                    "sec":      0
                },
                //currenttime: curtime,
                omitWeeks: true,
                onComplete: function() { $("#"+ id).hide() }
            });
        });
    }

    /* review woo tabs */
    $('.rehub_woo_tabs_menu').on('click', 'li:not(.current)', function() {
        $(this).addClass('current').siblings().removeClass('current').parents('.rehub_woo_review').find('.rehub_woo_review_tabs').hide().eq($(this).index()).fadeIn(700);
    });
    $('.rehub_woo_tabs_menu li:first-child').trigger('click');
    $('.btn_offer_block.choose_offer_woo').click(function(event){
        event.preventDefault();
        $('.rehub_woo_tabs_menu li.woo_deals_tab').trigger('click');
    });

    /* widget dropdown */
    $('.cat_widget_custom .children').parent().find('a').append('<span class="drop_list">&nbsp; +</span>');
    $('.tabs-item .drop_list').click(function() {
        $(this).parent().parent().find('.children').slideToggle();
        return false
    });

    /* offer archive dropdown */
    $(document).on('click', '.r_offer_details .r_show_hide', function(e){
        $(this).closest('.r_offer_details').find('.open_dls_onclk').toggleClass('rh_collapse_in');
        $(this).closest('.r_offer_details').find('.hide_dls_onclk').toggleClass('rhhidden');
        $(this).toggleClass('r_show_active');
    });

    $('.expand_all_offers').click(function() {
        var $expand = $(this).closest('.widget_merchant_list');
        if($expand.hasClass('expandme')){
            $expand.removeClass('expandme');
            $(this).find('.expandme').html('-');
        }
        else{
            $expand.addClass('expandme');
            $(this).find('.expandme').html('+');
        }
    });

    /* responsive video*/
    $('.rh-container').find( 'iframe[src*="player.vimeo.com"], iframe[src*="youtube.com"]' ).each( function() {
        var $video = $(this);
        if ( $video.parents( 'object' ).length ) return;
        if ($video.parent().hasClass('wpb_video_wrapper')) return;
        if ($video.parent().hasClass('video-container')) return;
        if ($video.parent().parent().hasClass('slides')) return;
        if ( ! $video.prop( 'id' ) ) $video.attr( 'id', 'rvw' + Math.floor( Math.random() * 999999 ) );
        $video.wrap( '<div class="video-container"></div>');
    });

    // Coupon Modal
    $(document).on("click", ".masked_coupon:not(.expired_coupon)", function(e){
        e.preventDefault();
        var $this = $(this);
        var codeid = $this.data('codeid');
        var codetext = $this.data('codetext');
        var issearch = window.location.search;
        if(issearch){
            var codeidtext = "&codeid=";
            var codetexttext = "&codetext=";
            if (typeof URLSearchParams !== 'undefined') {
                let params = new URLSearchParams(issearch.substring(1));
                params.delete('codeid');
                params.delete('codetext');
                issearch = '?' + params.toString();
            }
        }else{
            var codeidtext = "?codeid=";
            var codetexttext = "?codetext=";
        }
        if (typeof $this.data('codeid') !== 'undefined') {var couponpage = window.location.pathname + issearch + codeidtext + codeid;}
        if (typeof $this.data('codetext') !== 'undefined') {var couponpage = window.location.pathname + issearch + codetexttext + codetext;}
        var couponcode = $this.data('clipboard-text');
        var destination = $this.data('dest');
        window.open(couponpage);
        if( destination != "" || destination != "#" ){
            window.location.href= destination;
        }
    });

    if($('#coupon_code_in_modal').length > 0){
        var codeid = $('#coupon_code_in_modal').data('couponid');
        var $change_code = $(".rehub_offer_coupon.masked_coupon:not(.expired_coupon)[data-codeid='" + codeid + "']");
        var couponcode = $change_code.data("clipboard-text");
        $change_code.removeClass("masked_coupon woo_loop_btn coupon_btn btn_offer_block wpsm-button").addClass("not_masked_coupon").html( "<i class=\'rhicon rhi-scissors fa-rotate-180\'></i><span class=\'coupon_text\'>"+ couponcode +"</span>" );
        $change_code.closest(".reveal_enabled").removeClass("reveal_enabled");
        $.pgwModal({
            titleBar: false,
            maxWidth: 650,
            target: "#coupon_code_in_modal",
            mainClassName : "pgwModal coupon-reveal-popup",
        });
    }

    $(document).on("click", "a.not_masked_coupon", function(e){
        e.preventDefault();
    });

    $(document).on("click", ".csspopuptrigger", function(e){
        e.preventDefault();
        var destination = '#' + $(this).data('popup');
        $(destination).toggleClass('active');
        $('body').addClass('flowhidden');
    });

    $(document).on("click", ".csspopup .cpopupclose", function(e){
        e.preventDefault();
        $(this).closest('.csspopup').removeClass('active');
        $('body').removeClass('flowhidden');
    });

    $(document).on("click", ".toggle-this-table", function(e){
        e.preventDefault();
        $(this).closest('.rh-tabletext-block').toggleClass('closedtable');
    });

    if($(".rehub_offer_coupon.masked_coupon.expired_coupon").length > 0){
        $(".rehub_offer_coupon.masked_coupon.expired_coupon").each(function() {
            var couponcode = $(this).data('clipboard-text');
            $(this).removeClass('masked_coupon woo_loop_btn coupon_btn btn_offer_block wpsm-button').addClass('not_masked_coupon').text(couponcode);
            $(this).closest('.reveal_enabled').removeClass('reveal_enabled');
        });
    }

    //external links
    $('.ext-source').replaceWith(function(){
        return '<a href="' + $(this).data('dest') + '" target="_blank" rel="nofollow sponsored">' + $(this).html() + '</a>';
    });

    $('.int-source').replaceWith(function(){
        return '<a href="' + $(this).data('dest') + '">' + $(this).html() + '</a>';
    });

    //Sharing popups JS
    jQuery(document).on( 'click', '.share-link-image', function( event ) {
        var href    = jQuery( this ).data( "href" ),
            service = jQuery( this ).data( 'service' ),
            width   = 'pinterest' == service ? 750 : 600,
            height  = 'twitter' == service ? 250 : 'pinterest' == service ? 320 : 300,
            top     = ( screen.height / 2 ) - height / 2,
            left    = ( screen.width / 2 ) - width / 2;
        var options = 'top=' + top + ',left=' + left + ',width=' + width + ',height=' + height;
        event.preventDefault();
        event.stopPropagation();
        window.open( href, service, options );
    });

    // Search icon show/hide
    $(window).resize(function(){
        var w = $(window).width();
        if (w > 1023){
            $('#slide-menu-mobile').hide();
            $('.offsetnav-overlay').hide();
        }
        rh_resizealign();
    });

    function rh_el_ajax_load($this){
        if($this.hasClass('loaded')) return;
        var post_id = $this.prop('class').match(/load-block-([0-9]+)/)[1];
        var post_id = parseInt(post_id);
        var blockforload = $(".el-ajax-load-block-"+post_id);
        blockforload.addClass("loading re_loadingafter padd20 font200 lightgreycolor");
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=rh_el_ajax_hover_load&security="+translation.nonce+"&post_id="+post_id,
            success: function(response){
                blockforload.removeClass("loading re_loadingafter padd20 lightgreycolor font200");
                $this.addClass("loaded");
                if (response !== 'fail') {
                    blockforload.html($(response));
                    blockforload.find('.wpsm-bar').each(function(){
                        $(this).find('.wpsm-bar-bar').animate({ width: $(this).attr('data-percent') }, 1500 );
                    });
                }
            }
        });
    }
    if($( ".rh-el-onhover" ).length > 0){
        $( ".rh-el-onhover" ).mouseenter(function() {
            var $this = $(this);
            rh_el_ajax_load($this);
        });
    }

    if($( ".rh-el-onclick" ).length > 0){
        $(document).on('click', '.rh-el-onclick', function() {
            var $this = $(this);
            rh_el_ajax_load($this);
        });
    }

    //Thumbs up function with overall score
    $(document).on("click", ".post_thumbs_wrap .thumbplus:not(.alreadyhot)", function(e){
        e.preventDefault();
        var $this = $(this);
        if ($this.hasClass("restrict_for_guests")) {
            return false;
        }
        var post_id = $(this).data("post_id");
        var informer = parseInt($(this).attr("data-informer"));
        $(this).addClass("loading");
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=hot-count&hotnonce="+translation.hotnonce+"&hot_count=hot&post_id="+post_id,
            success: function(count){
                $this.removeClass("loading");
                $this.addClass('alreadyhot').parent().find('.thumbminus').addClass('alreadyhot');
                informer=informer+1;
                $this.closest('.post_thumbs_wrap').find('#thumbscount' + post_id + '').text(informer);
                $this.attr("data-informer",informer);
            }
        });

        return false;
    });

    $(document).on("click", ".post_thumbs_wrap .thumbminus:not(.alreadyhot)", function(e){
        e.preventDefault();
        var $this = $(this);
        if ($this.hasClass("restrict_for_guests")) {
            return false;
        }
        var post_id = $(this).data("post_id");
        var informer = $(this).data("informer");
        $(this).addClass("loading");
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=hot-count&hotnonce="+translation.hotnonce+"&hot_count=cold&post_id="+post_id,
            success: function(count){
                $this.removeClass("loading");
                $this.addClass('alreadyhot').parent().find('.thumbplus').addClass('alreadyhot');
                informer=informer-1;
                $this.closest('.post_thumbs_wrap').find('#thumbscount' + post_id + '').text(informer);
            }
        });
        return false;
    });

    $(document).on("click", ".hotmeter .hotplus:not(.alreadyhot)", function(e){
        e.preventDefault();
        if ($(this).hasClass("restrict_for_guests")) {
            return false;
        }
        var post_id = $(this).data("post_id");
        var informer = $(this).data("informer");
        $(this).addClass('alreadyhot').parent().parent().find('.hotminus').addClass('alreadyhot');
        $('#textinfo' + post_id + '').html("<i class='rhicon rhi-spinner fa-spin'></i>");
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=hot-count&hotnonce="+translation.hotnonce+"&hot_count=hot&post_id="+post_id,
            success: function(count){
                $('#textinfo' + post_id + '').html('');
                informer=informer+1;
                $('#temperatur' + post_id + '').text(informer+"Â°");
                if(informer>translation.max_temp){ informer=translation.max_temp; }
                if(informer<translation.min_temp){ informer=translation.min_temp; }
                if(informer>=0){
                    $('#scaleperc' + post_id + '').css("width", informer / translation.max_temp * 100+'%').removeClass('cold_bar');
                    $('#temperatur' + post_id + '').removeClass('cold_temp');
                }
                else {
                    $('#scaleperc' + post_id + '').css("width", informer / translation.min_temp * 100+'%');
                }
            }
        });

        return false;
    });

    $(document).on("click", ".hotmeter .hotminus:not(.alreadyhot)", function(e){
        e.preventDefault();
        if ($(this).hasClass("restrict_for_guests")) {
            return false;
        }
        var post_id = $(this).data("post_id");
        var informer = $(this).data("informer");
        $(this).addClass('alreadyhot').parent().parent().find('.hotplus').addClass('alreadyhot');
        $('#textinfo' + post_id + '').html("<i class='rhicon rhi-spinner fa-spin'></i>");
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=hot-count&hotnonce="+translation.hotnonce+"&hot_count=cold&post_id="+post_id,
            success: function(count){
                $('#textinfo' + post_id + '').html('');
                informer=informer-1;
                $('#temperatur' + post_id + '').text(informer+"Â°");
                if(informer<translation.min_temp){ informer=translation.min_temp; }
                if(informer>translation.max_temp){ informer=translation.max_temp; }
                if(informer<0){
                    $('#scaleperc' + post_id + '').css("width", informer / translation.min_temp * 100+'%').addClass('cold_bar');
                    $('#temperatur' + post_id + '').addClass('cold_temp');
                }
                else {
                    $('#scaleperc' + post_id + '').css("width", informer / translation.max_temp * 100+'%');
                }
            }
        });

        return false;
    });

    //wishlist function
    $(document).on("click", ".heart_thumb_wrap .heartplus:not(.alreadywish)", function(e){
        e.preventDefault();
        var $this = $(this);
        if ($this.hasClass("restrict_for_guests")) {
            return false;
        }
        var post_id = $(this).data("post_id");
        var informer = parseInt($(this).attr("data-informer"));
        $(this).addClass("loading");
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=rhwishlist&wishnonce="+translation.wishnonce+"&wish_count=add&post_id="+post_id,
            success: function(count){
                $this.removeClass("loading");
                $this.addClass('alreadywish');
                informer=informer+1;
                $this.closest('.heart_thumb_wrap').find('#wishcount' + post_id + '').text(informer);
                if($('.rh-wishlistmenu-link .rh-icon-notice').length){
                    if($('.rh-wishlistmenu-link .rh-icon-notice').hasClass('rhhidden')){
                        $('.rh-wishlistmenu-link .rh-icon-notice').removeClass('rhhidden');
                        $('.rh-wishlistmenu-link .rh-icon-notice').text(1);
                    }else{
                        var overallcount = parseInt($('.rh-wishlistmenu-link .rh-icon-notice').html());
                        $('.rh-wishlistmenu-link .rh-icon-notice').text(overallcount + 1);
                    }
                }
                $this.attr("data-informer",informer);
                if($('#wishadded' + post_id + '').length > 0){
                    $.simplyToast($('#wishadded' + post_id + '').html(), 'success');
                }
            }
        });

        return false;
    });

    $(document).on("click", ".heart_thumb_wrap .alreadywish.heartplus", function(e){
        e.preventDefault();
        var $this = $(this);
        if ($this.hasClass("restrict_for_guests")) {
            return false;
        }
        var post_id = $(this).data("post_id");
        var informer = parseInt($(this).attr("data-informer"));
        var wishlink = $(this).data("wishlink");
        if (typeof $(this).data("wishlink") !== "undefined" && $(this).data("wishlink") !='' && $('.re-favorites-posts').length == 0) {
            window.location.href= $(this).data("wishlink");
            return false;
        }

        $(this).addClass("loading");
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=rhwishlist&wishnonce="+translation.wishnonce+"&wish_count=remove&post_id="+post_id,
            success: function(count){
                $this.removeClass("loading");
                $this.removeClass('alreadywish');
                informer=informer-1;
                $this.closest('.heart_thumb_wrap').find('#wishcount' + post_id + '').text(informer);
                if($('.rh-wishlistmenu-link .rh-icon-notice').length){
                    var overallcount = parseInt($('.rh-wishlistmenu-link .rh-icon-notice').html());
                    $('.rh-wishlistmenu-link .rh-icon-notice').text(overallcount - 1);
                }
                $this.attr("data-informer",informer);
                if($('#wishremoved' + post_id + '').length > 0){
                    $.simplyToast($('#wishremoved' + post_id + '').html(), 'danger');
                }
            }
        });
        return false;
    });

    //Wishlist fallback for cached sites
    if(typeof wishcached !== 'undefined'){
        var favListed = $(".heartplus");
        if(favListed.length !=0){
            $.ajax({
                type: "get",
                url: wishcached.rh_ajax_url,
                data: "action=refreshwishes&userid="+wishcached.userid,
                success: function(data){
                    var wishlistids = data.wishlistids.split(',');
                    if(wishlistids.length !=0){
                        favListed.each(function(){
                            var postID = $(this).attr("data-post_id");
                            if($.inArray(postID, wishlistids) !=-1 ){
                                if($(this).hasClass('alreadywish') == false){
                                    $(this).addClass('alreadywish');
                                    var informer = parseInt($(this).attr("data-informer"));
                                    informer=informer+1;
                                    $(this).attr("data-informer", informer);
                                    $(this).closest('.heart_thumb_wrap').find('#wishcount' + postID + '').text(informer);
                                }
                            }
                        });
                        if($('.rh-wishlistmenu-link .rh-icon-notice').length){
                            if($('.rh-wishlistmenu-link .rh-icon-notice').hasClass('rhhidden')){
                                $('.rh-wishlistmenu-link .rh-icon-notice').removeClass('rhhidden');
                            }
                            $('.rh-wishlistmenu-link .rh-icon-notice').text(data.wishcounter);
                        }
                    }
                },
                cache:!1
            });
        }
    }

    //AJAX PAGINATION on click button
    // $(document).on('click', '.re_ajax_pagination_btn', function(e){
    //     e.preventDefault();
    //     var $this = $(this);
    //     var containerid = $this.data('containerid');
    //     var activecontainer = $('#'+containerid);
    //     var sorttype = $this.data('sorttype');
    //     var filterPanel = activecontainer.siblings('.re_filter_panel');
    //     var choosenTax = filterPanel.find('.re_tax_dropdown .rh_choosed_tax');
    //     var tax;
    //     if(choosenTax.length > 0 && choosenTax.html() != ''){
    //         tax = choosenTax.attr('data-taxdata');
    //         tax = jQuery.parseJSON(tax);
    //     }
    //     var offset = $this.data('offset');
    //     var filterargs = activecontainer.data('filterargs');
    //     var innerargs = activecontainer.data('innerargs');
    //     var template = activecontainer.data('template');
    //     var data = {
    //         'action': 're_filterpost',
    //         'sorttype': sorttype,
    //         'filterargs' : filterargs,
    //         'tax': tax,
    //         'template' : template,
    //         'containerid' : containerid,
    //         'offset' : offset,
    //         'innerargs' : innerargs,
    //         'security' : translation.filternonce
    //     };
    //     $this.parent().find('span').removeClass('active_ajax_pagination');
    //     $this.addClass('active_ajax_pagination');
    //
    //     $.ajax({
    //         type: "POST",
    //         url: translation.ajax_url,
    //         data: data,
    //         success: function(response){
    //             if (response !== 'fail') {
    //                 activecontainer.find('.re_ajax_pagination').remove();
    //                 if(activecontainer.parent().hasClass('rh-gsap-wrap') || activecontainer.parent().parent().hasClass('rh-gsap-wrap')){
    //                     var elapend = $(response);
    //                     activecontainer.append(elapend);
    //                     var current = activecontainer.closest('.rh-gsap-wrap');
    //                     var $batchobj = elapend.filter('.col_item');
    //                     var anargs = RHGetBasicTween(current);
    //                     RHBatchScrollTrigger(current, anargs, $batchobj);
    //                 }else{
    //                     activecontainer.append($(response).hide().fadeIn(1000));
    //                 }
    //                 activecontainer.find('.radial-progress').each(function(){
    //                     $(this).find('.circle .mask.full, .circle .fill:not(.fix)').animate({  borderSpacing: $(this).attr('data-rating')*18 }, {
    //                         step: function(now,fx) {
    //                             $(this).css('-webkit-transform','rotate('+now+'deg)');
    //                             $(this).css('-moz-transform','rotate('+now+'deg)');
    //                             $(this).css('transform','rotate('+now+'deg)');
    //                         },
    //                         duration:'slow'
    //                     },'linear');
    //
    //                     $(this).find('.circle .fill.fix').animate({  borderSpacing: $(this).attr('data-rating')*36 }, {
    //                         step: function(now,fx) {
    //                             $(this).css('-webkit-transform','rotate('+now+'deg)');
    //                             $(this).css('-moz-transform','rotate('+now+'deg)');
    //                             $(this).css('transform','rotate('+now+'deg)');
    //                         },
    //                         duration:'slow'
    //                     },'linear');
    //                 });
    //
    //                 activecontainer.find('.wpsm-tooltip').each(function(){
    //                     $(this).tipsy({gravity: "s", fade: true, html: true });
    //                 });
    //
    //                 activecontainer.find('.wpsm-bar').each(function(){
    //                     $(this).find('.wpsm-bar-bar').animate({ width: $(this).attr('data-percent') }, 1500 );
    //                 });
    //
    //                 activecontainer.find('.countdown_dashboard').each(function(){
    //                     $(this).show();
    //                     var id = $(this).attr("id");
    //                     var day = $(this).attr("data-day");
    //                     var month = $(this).attr("data-month");
    //                     var year = $(this).attr("data-year");
    //                     var hour = $(this).attr("data-hour");
    //                     var min = $(this).attr("data-min");
    //                     $(this).countDown({
    //                         targetDate: {
    //                             "day":      day,
    //                             "month":    month,
    //                             "year":     year,
    //                             "hour":     hour,
    //                             "min":      min,
    //                             "sec":      0
    //                         },
    //                         omitWeeks: true,
    //                         onComplete: function() { $("#"+ id).hide() }
    //                     });
    //                 });
    //
    //             }
    //         }
    //     });
    // });

    //AJAX PAGINATION infinite scroll on inview
    $(document).on('inview', '.re_aj_pag_auto_wrap .re_ajax_pagination_btn', function(e){
        e.preventDefault();
        var $this = $(this);
        var containerid = $this.data('containerid');
        var activecontainer = $('#'+containerid);
        var sorttype = $this.data('sorttype');
        var offset = $this.data('offset');
        var filterPanel = activecontainer.siblings('.re_filter_panel');
        var choosenTax = filterPanel.find('.re_tax_dropdown .rh_choosed_tax');
        var tax;
        if(choosenTax.length > 0 && choosenTax.html() != ''){
            tax = choosenTax.attr('data-taxdata');
            tax = jQuery.parseJSON(tax);
        }
        var filterargs = activecontainer.data('filterargs');
        var innerargs = activecontainer.data('innerargs');
        var template = activecontainer.data('template');
        var data = {
            'action': 're_filterpost',
            'sorttype': sorttype,
            'filterargs' : filterargs,
            'template' : template,
            'tax': tax,
            'containerid' : containerid,
            'offset' : offset,
            'innerargs' : innerargs,
            'security' : translation.filternonce
        };
        $this.parent().find('span').removeClass('re_ajax_pagination_btn');
        $this.parent().find('span').removeClass('active_ajax_pagination');
        $this.addClass('active_ajax_pagination');

        $.ajax({
            type: "POST",
            url: translation.ajax_url,
            data: data,
            success: function(response){
                if (response !== 'fail') {
                    activecontainer.find('.re_ajax_pagination').remove();
                    if(activecontainer.parent().hasClass('rh-gsap-wrap') || activecontainer.parent().parent().hasClass('rh-gsap-wrap')){
                        var elapend = $(response);
                        activecontainer.append(elapend);
                        var current = activecontainer.closest('.rh-gsap-wrap');
                        var $batchobj = elapend.filter('.col_item');
                        var anargs = RHGetBasicTween(current);
                        RHBatchScrollTrigger(current, anargs, $batchobj);
                    }else{
                        activecontainer.append($(response).hide().fadeIn(1000));
                    }
                    activecontainer.find('.radial-progress').each(function(){
                        $(this).find('.circle .mask.full, .circle .fill:not(.fix)').animate({  borderSpacing: $(this).attr('data-rating')*18 }, {
                            step: function(now,fx) {
                                $(this).css('-webkit-transform','rotate('+now+'deg)');
                                $(this).css('-moz-transform','rotate('+now+'deg)');
                                $(this).css('transform','rotate('+now+'deg)');
                            },
                            duration:'slow'
                        },'linear');

                        $(this).find('.circle .fill.fix').animate({  borderSpacing: $(this).attr('data-rating')*36 }, {
                            step: function(now,fx) {
                                $(this).css('-webkit-transform','rotate('+now+'deg)');
                                $(this).css('-moz-transform','rotate('+now+'deg)');
                                $(this).css('transform','rotate('+now+'deg)');
                            },
                            duration:'slow'
                        },'linear');
                    });

                    activecontainer.find('.wpsm-tooltip').each(function(){
                        $(this).tipsy({gravity: "s", fade: true, html: true });
                    });

                    activecontainer.find('.wpsm-bar').each(function(){
                        $(this).find('.wpsm-bar-bar').animate({ width: $(this).attr('data-percent') }, 1500 );
                    });

                    activecontainer.find('.countdown_dashboard').each(function(){
                        $(this).show();
                        var id = $(this).attr("id");
                        var day = $(this).attr("data-day");
                        var month = $(this).attr("data-month");
                        var year = $(this).attr("data-year");
                        var hour = $(this).attr("data-hour");
                        var min = $(this).attr("data-min");
                        $(this).countDown({
                            targetDate: {
                                "day":      day,
                                "month":    month,
                                "year":     year,
                                "hour":     hour,
                                "min":      min,
                                "sec":      0
                            },
                            omitWeeks: true,
                            onComplete: function() { $("#"+ id).hide() }
                        });
                    });

                }
            }
        });
    });

    //AJAX SORTING PANEL
    $('.re_filter_panel').on('click', '.re_filtersort_btn:not(.active)', function(e){
        e.preventDefault();
        var $this = $(this);
        var containerid = $this.data('containerid');
        var activecontainer = $('#'+containerid);
        var sorttype = $this.data('sorttype');
        var filterPanel = activecontainer.siblings('.re_filter_panel');
        var choosenTax = filterPanel.find('.re_tax_dropdown .rh_choosed_tax');
        var tax;
        if(choosenTax.length > 0 && choosenTax.html() != ''){
            tax = choosenTax.attr('data-taxdata');
            tax = jQuery.parseJSON(tax);
        }
        var filterargs = activecontainer.data('filterargs');
        var innerargs = activecontainer.data('innerargs');
        var template = activecontainer.data('template');
        var data = {
            'action': 're_filterpost',
            'sorttype': sorttype,
            'filterargs' : filterargs,
            'tax': tax,
            'template' : template,
            'containerid' : containerid,
            'innerargs' : innerargs,
            'security' : translation.filternonce
        };
        $this.closest('ul').addClass('activeul');
        $this.addClass('re_loadingbefore');
        activecontainer.addClass('sortingloading');

        $.ajax({
            type: "POST",
            url: translation.ajax_url,
            data: data,
            success: function(response){
                if (response !== 'fail') {
                    if(activecontainer.parent().hasClass('rh-gsap-wrap') || activecontainer.parent().parent().hasClass('rh-gsap-wrap')){
                        var elapend = $(response);
                        activecontainer.html(elapend);
                        var current = activecontainer.closest('.rh-gsap-wrap');
                        var $batchobj = elapend.filter('.col_item');
                        var anargs = RHGetBasicTween(current);
                        RHBatchScrollTrigger(current, anargs, $batchobj);
                    }else{
                        activecontainer.html($(response).hide().fadeIn(1000));
                    }

                    activecontainer.find('.radial-progress').each(function(){
                        $(this).find('.circle .mask.full, .circle .fill:not(.fix)').animate({  borderSpacing: $(this).attr('data-rating')*18 }, {
                            step: function(now,fx) {
                                $(this).css('-webkit-transform','rotate('+now+'deg)');
                                $(this).css('-moz-transform','rotate('+now+'deg)');
                                $(this).css('transform','rotate('+now+'deg)');
                            },
                            duration:'slow'
                        },'linear');

                        $(this).find('.circle .fill.fix').animate({  borderSpacing: $(this).attr('data-rating')*36 }, {
                            step: function(now,fx) {
                                $(this).css('-webkit-transform','rotate('+now+'deg)');
                                $(this).css('-moz-transform','rotate('+now+'deg)');
                                $(this).css('transform','rotate('+now+'deg)');
                            },
                            duration:'slow'
                        },'linear');
                    });

                    activecontainer.find('.wpsm-tooltip').each(function(){
                        $(this).tipsy({gravity: "s", fade: true, html: true });
                    });

                    activecontainer.find('.countdown_dashboard').each(function(){
                        $(this).show();
                        var id = $(this).attr("id");
                        var day = $(this).attr("data-day");
                        var month = $(this).attr("data-month");
                        var year = $(this).attr("data-year");
                        var hour = $(this).attr("data-hour");
                        var min = $(this).attr("data-min");
                        $(this).countDown({
                            targetDate: {
                                "day":      day,
                                "month":    month,
                                "year":     year,
                                "hour":     hour,
                                "min":      min,
                                "sec":      0
                            },
                            omitWeeks: true,
                            onComplete: function() { $("#"+ id).hide() }
                        });
                    });


                }
                $this.closest('.re_filter_panel').find('span').removeClass('active');
                $this.removeClass('re_loadingbefore').addClass('active');
                activecontainer.removeClass('sortingloading');
                $this.closest('ul').removeClass('activeul');
                if($this.closest('ul').hasClass('re_tax_dropdown')){
                    var taxDropdown = $this.closest('.re_tax_dropdown');
                    taxDropdown.find('.rh_choosed_tax').html($this.html()).show().attr('data-taxdata', $this.attr('data-sorttype'));

                    taxDropdown.find('.rh_tax_placeholder').hide();
                    filterPanel.find('.re_filter_ul li:first-child span').addClass('active');
                }
                /*if($this.closest('ul').hasClass('re_filter_ul')){
                    $this.closest('.re_filter_panel').find('.rh_tax_placeholder').show();
                    $this.closest('.re_filter_panel').find('.rh_choosed_tax').hide();
                }*/
            }
        });
    });

    //Collapse filters in sort panel
    $('.re_filter_panel').on('click', '.re_filter_ul .re_filtersort_btn.active', function(e) {
        e.preventDefault();
        $(this).closest('.re_filter_panel').find('ul.re_filter_ul span').toggleClass('showfiltermobile');
    });

    //Collapse filters in tabs panel
    $('.rh_tab_links').on('click', 'a.active', function(e) {
        e.preventDefault();
        $(this).closest('.rh_tab_links').find('a').toggleClass('showtabmobile');
    });

    //Collapse filters in tax dropdown
    $('.re_tax_dropdown').on('click', '.label', function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).closest('.re_tax_dropdown').toggleClass('active');
    });

    //Woocommerce better categories
    if($('.product-categories .show-all-toggle').length > 0){
        $('.product-categories .show-all-toggle').each(function(){
            if( $(this).siblings('ul').length > 0 ) {
                var $toggleIcon = $('<span class="floatright font120 ml5 mr5 toggle-show-icon"><i class="rhicon rhi-angle-right"></i></span>');

                $(this).siblings('ul').hide();
                if($(this).siblings('ul').is(':visible')){
                    $toggleIcon.addClass( 'open' );
                    $toggleIcon.html('<i class="rhicon rhi-angle-up"></i>');
                }

                $(this).on( 'click', function(){
                    $(this).siblings('ul').toggle( 'fast', function(){
                        if($(this).is(':visible')){
                            $toggleIcon.addClass( 'open' );
                            $toggleIcon.closest('.closed-woo-catlist').removeClass('closed-woo-catlist');
                            $toggleIcon.html('<i class="rhicon rhi-angle-up"></i>');
                        }else{
                            $toggleIcon.removeClass( 'open' );
                            $toggleIcon.html('<i class="rhicon rhi-angle-right"></i>');
                        }
                    });
                    return false;
                });
                $(this).append($toggleIcon);
            }
        });
    }

    //Print function
    jQuery.fn.print=function(){var is_chrome = Boolean(window.chrome); if(this.length>1)return void this.eq(0).print();if(this.length > 0){var t="printer-"+(new Date).getTime(),o=$("<iframe name='"+t+"'>");o.css("width","1px").css("height","1px").css("position","absolute").css("left","-9999px").appendTo($("body:first"));var i=window.frames[t],e=i.document,n=$("<div>").append("<style>body {-webkit-print-color-adjust: exact;}.printcoupon{max-width: 550px;margin: 20px auto; border: 2px dashed #cccccc;}.printcouponheader{background-color: #eeeeee;padding: 15px; margin-bottom:20px}.printcoupontitle{font-size: 20px;font: 22px/24px Georgia;margin-bottom: 8px;text-transform: uppercase;}.printcoupon_wrap{font-weight: bold;padding: 20px;background-color: #e7f3d6; margin: 0 auto 20px auto;}.expired_print_coupon{font-size:12px; color: #999;}.printcouponcentral, .printcouponheader{text-align: center;}.save_proc_woo_print{margin: 0 auto 20px auto;display: inline-block;position: relative;color: #000000;padding-right: 45px;}.countprintsale{font: bold 70px/70px Arial;}.procprintsale{right: 0;font: bold 36px/35px Tahoma;position: absolute;top: 2px;}.wordprintsale{right: 0;font: 20px Georgia;position: absolute;bottom: 9px;}.printcoupon_wrap {font: bold 20px/24px Arial;padding: 20px;background-color: #e7f3d6;margin: 0 30px;}.printcoupondesc{padding: 30px;}.printcoupondesc span{font: 13px/20px Georgia;}.printimage{float: left;width: 120px;margin: 0 25px 15px 0;}.printimage img{max-width:100%; height:auto}.couponprintend{text-align: center;padding: 20px;border-top: 2px dotted #eeeeee;margin: 0 30px;font: italic 12px Arial; clear:both}.couponprintend span{color: #cc0000;}.storeprint{margin-top:10px;}.storeprint a{text-decoration:none}.printcouponimg{text-align:center; margin:20px auto}.printcouponimg img{max-width:100%; height:auto;}.shop_in_cpn img{margin-right: 5px; vertical-align: middle; max-height: 50px}</style>");e.open(),e.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'),e.write("<html>"),e.write("<body>"),e.write('<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">'),e.write("<title>"),e.write(document.title),e.write("</title>"),e.write(n.html()),e.write("</head>"),e.write(this.html()),e.write("</body>"),e.write("</html>"); if (is_chrome) {setTimeout(function(){e.close(),i.focus(),i.print(),o.remove()},254);}else{e.close(),i.focus(),i.print(),setTimeout(function(){o.remove()},6e4);} }};
    $(document).on("click", "span.printthecoupon", function(e){
        e.preventDefault();
        var printid = $(this).data('printid');
        $("#printcoupon" + printid ).print();
    });

    if( $('#content-sticky-panel').length > 0 && $('.post').length > 0){
        $('.post').waypoint({
            handler: function(direction) {
                $('#content-sticky-panel').toggleClass('floating', direction=='down');
            }, offset: 30
        });
        var commenttitle = $('#comments .title_comments').first().html();
        if(commenttitle){
            $('#content-sticky-panel ul').append('<li class="top"><a href="#comments">'+commenttitle+'</a></li>');
            $('#comments .title_comments').waypoint({
                handler: function(direction) {
                    $('#content-sticky-panel a').removeClass('active');
                    $('#content-sticky-panel a[href="#comments"]').addClass('active');
                }, offset: 30
            });
        }
        $('.kc-gotop').hide();
        $('#content-sticky-panel').on('click', '#mobileactivate', function(){
            $('#content-sticky-panel').toggleClass('mobileactive');
        });
        if ($(window).width() < 1300){
            var heightpost = $('.post').offset().top;
            $('#content-sticky-panel').css('top', heightpost);
        }
    }

    if( $('#rh-share-sticky').length > 0 ){
        $('.post-inner').waypoint({
            handler: function(direction) {
                $('#rh-share-sticky').toggleClass('floating', direction=='down');
            }, offset: 1
        });
    }

    if($('#content-sticky-panel a').length > 0){
        $('#content-sticky-panel a').each(function(){
            $('a[name="'+ this.hash.replace(/#/,"") +'"]').waypoint({
                handler: function(direction) {
                    $('#content-sticky-panel a').removeClass('active');
                    var corrlink = $(this.element).attr('name');
                    $('#content-sticky-panel a[href="#'+corrlink+'"]').addClass('active');
                }, offset: 45
            })
        });
    }

    $(document).on("click", ".us-rev-vote-up:not(.alreadycomment)", function(e){
        e.preventDefault();
        var post_id = $(this).data("post_id");
        var informer = $(this).data("informer");
        $(this).addClass('alreadycomment').parent().find('.us-rev-vote-down').addClass('alreadycomment');
        $('#commhelp' + post_id + ' .fa-thumbs-up').removeClass('rhi-thumbs-up').addClass('rhi-spinner fa-spin');
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=commentplus&cplusnonce="+translation.helpnotnonce+"&comm_help=plus&post_id="+post_id,
            success: function(count){
                $('#commhelp' + post_id + ' .rhi-spinner').removeClass('rhi-spinner fa-spin').addClass('rhi-thumbs-up');
                informer=informer+1;
                $('#commhelpplus' + post_id + '').text(informer);
            }
        });

        return false;
    })

    $(document).on("click", ".us-rev-vote-down:not(.alreadycomment)", function(e){
        e.preventDefault();
        var post_id = $(this).data("post_id");
        var informer = $(this).data("informer");
        $(this).addClass('alreadycomment').parent().find('.us-rev-vote-up').addClass('alreadycomment');
        $('#commhelp' + post_id + ' .rhi-thumbs-down').removeClass('rhi-thumbs-down').addClass('rhi-spinner fa-spin');
        $.ajax({
            type: "post",
            url: translation.ajax_url,
            data: "action=commentplus&cplusnonce="+translation.helpnotnonce+"&comm_help=minus&post_id="+post_id,
            success: function(count){
                $('#commhelp' + post_id + ' .rhi-spinner').removeClass('rhi-spinner fa-spin').addClass('rhi-thumbs-down');
                informer=informer+1;
                $('#commhelpminus' + post_id + '').text(informer);
            }
        });

        return false;
    });

    $(document).on("click", ".alreadycomment", function(e){
        $(this).parent().find('.already_commhelp').fadeIn().fadeOut(1000);
    });


}); //END Document.ready

// Rate bar annimation
jQuery(function($){
    'use strict';
    $(document).ready(function(){
        $('.rate_bar_wrap').bind('inview', function(event, visible) {
            if (visible) {
                $('.rate-bar').each(function(){
                    $(this).find('.rate-bar-bar').animate({ width: $(this).attr('data-percent') }, 1500 );
                    $('.rate_bar_wrap').unbind('inview');
                });
            }
        });

        $('.rate-line').bind('inview', function(event, visible) {
            if (visible) {
                $('.rate-line .line').each(function(){
                    $(this).find('.filled').animate({ width: $(this).attr('data-percent') }, 1500 );
                    $('.rate-line').unbind('inview');
                });
            }
        });

        $(document).on('inview', '.review_visible_circle, .top_table_block, .top_chart', function(event, visible) {
            if (visible) {
                $('.radial-progress').each(function(){
                    $(this).find('.circle .mask.full, .circle .fill:not(.fix)').animate({  borderSpacing: $(this).attr('data-rating')*18 }, {
                        step: function(now,fx) {
                            $(this).css('-webkit-transform','rotate('+now+'deg)');
                            $(this).css('-moz-transform','rotate('+now+'deg)');
                            $(this).css('transform','rotate('+now+'deg)');
                        },
                        duration:'slow'
                    },'linear');

                    $(this).find('.circle .fill.fix').animate({  borderSpacing: $(this).attr('data-rating')*36 }, {
                        step: function(now,fx) {
                            $(this).css('-webkit-transform','rotate('+now+'deg)');
                            $(this).css('-moz-transform','rotate('+now+'deg)');
                            $(this).css('transform','rotate('+now+'deg)');
                        },
                        duration:'slow'
                    },'linear');

                });
            }
        });

    });
});


//Scroll To top
if(jQuery('.post-inner').length > 0){
    var postheight = jQuery('.post-inner').height() + jQuery('#main_header').height() - 100;
    jQuery(window).scroll(jQuery.throttle( 250, function(){
        'use strict';

        if (jQuery(this).scrollTop() > 500) {
            jQuery('#topcontrol, #float-posts-nav, #rh_social_panel_footer').addClass('scrollvisible');
        } else {
            jQuery('#topcontrol').removeClass('scrollvisible');
            jQuery('#float-posts-nav').removeClass('scrollvisible');
        }
        if (jQuery(this).scrollTop() > postheight) {
            jQuery('#float-posts-nav').addClass('openedprevnext');
        } else {
            jQuery('#float-posts-nav').removeClass('openedprevnext');
        }

    }));
}


jQuery(window).on('load', function(){
    if (jQuery("#rhLoader").length) {
        jQuery("#rhLoader").fadeOut();
    }
    if(jQuery(".elementor-widget-image-carousel").length > 0){
        jQuery(".elementor-widget-image-carousel").each(function(){
            var link = jQuery(this).find(".swiper-slide a").first().attr('href');
            if (typeof link !== 'undefined' && link !== null) {
                var links = link.split(';');
                var elements = jQuery(this).find(".swiper-slide:not(.swiper-slide-duplicate)");
                for (var i = elements.length - 1; i >= 0; i--) {
                    if (typeof links[i] !== 'undefined' && links[i] !== null) {
                        jQuery(this).find("[data-swiper-slide-index='" + i + "'] a").attr('href',links[i]);
                    }
                }
            }
        });
    }
});
