
    <div class="rh-container full_width">
        <div class="rh-content-wrap clearfix">
            <!--START Slider 1 REVOLUTION SLIDER 6.2.23 -->
            <p class="rs-p-wp-fix"></p>
            <div id="slider_home">
                <rs-module-wrap id="rev_slider_24_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                    <rs-module id="rev_slider_24_1" style="" data-version="6.2.23">
                        <rs-slides>
                            @foreach($slideBanners as $slideBanner)
                            <rs-slide data-key="rs-34" data-title="Slide" data-anim="ei:d;eo:d;s:d;r:0;t:parallaxtoright;sl:d;">
                                <img src="{{asset('/frontend/image/transparent.png')}}" alt="Slide" title="Trang chủ" data-parallax="off" class="rev-slidebg" data-no-retina>
                                <!-- -->
                                <rs-layer
                                    id="slider-24-slide-34-layer-2"
                                    data-type="image"
                                    data-rsp_ch="on"
                                    data-xy="yo:-2px,-2px,-2px,0;"
                                    data-text="w:normal;s:20,20,20,7;l:0,0,0,9;"
                                    data-dim="w:1200px,1200px,1200px,480px;h:240px,240px,240px,95px;"
                                    data-frame_0="x:right;"
                                    data-frame_1="sp:1000;"
                                    data-frame_999="o:0;st:w;"
                                    style="z-index:5;">
                                    <img src="{{$slideBanner->image}}" width="1200" height="240" data-no-retina>
                                </rs-layer><!--
-->						    </rs-slide>
                            @endforeach
                        </rs-slides>
                    </rs-module>
                    <script type="text/javascript">
                        setREVStartSize({c: 'rev_slider_24_1',rl:[1200,1200,1200,480],el:[240,240,240,720],gw:[1200,1200,1200,480],gh:[240,240,240,720],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
                        var	revapi24,
                            tpj;
                        function revinit_revslider241() {
                            jQuery(function() {
                                tpj = jQuery;
                                revapi24 = tpj("#rev_slider_24_1");
                                if(revapi24==undefined || revapi24.revolution == undefined){
                                    revslider_showDoubleJqueryError("rev_slider_24_1");
                                }else{
                                    revapi24.revolution({
                                        sliderLayout:"fullwidth",
                                        visibilityLevels:"1200,1200,1200,480",
                                        gridwidth:"1200,1200,1200,480",
                                        gridheight:"240,240,240,720",
                                        spinner:"spinner0",
                                        perspective:600,
                                        perspectiveType:"global",
                                        editorheight:"240,768,960,720",
                                        responsiveLevels:"1200,1200,1200,480",
                                        progressBar:{disableProgressBar:true},
                                        navigation: {
                                            onHoverStop:false,
                                            bullets: {
                                                enable:true,
                                                tmp:"<span class=\"tp-bullet-title\">next</span>",
                                                style:"ares"
                                            }
                                        },
                                        parallax: {
                                            levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,30],
                                            type:"scroll",
                                            origo:"slidercenter",
                                            speed:0
                                        },
                                        scrolleffect: {
                                            set:true,
                                            multiplicator:1.3,
                                            multiplicator_layers:1.3
                                        },
                                        sbtimeline: {
                                            set:true,
                                            ease:"elastic.out"
                                        },
                                        fallbacks: {
                                            allowHTML5AutoPlayOnAndroid:true
                                        },
                                    });
                                }

                            });
                        }
                        // End of RevInitScript
                        var once_revslider241 = false;
                        if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider241 ) { once_revslider241 = true; revinit_revslider241();}});} else {once_revslider241 = true; revinit_revslider241();}
                    </script>
                    <script>
                        var htmlDivCss = unescape("%23rev_slider_24_1_wrapper%20.custom.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3A%23000%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%7D%0A%23rev_slider_24_1_wrapper%20.custom.tparrows%3Ahover%20%7B%0A%09background%3A%23000%3B%0A%7D%0A%23rev_slider_24_1_wrapper%20.custom.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A15px%3B%0A%09color%3A%23fff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_24_1_wrapper%20.custom.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_24_1_wrapper%20.custom.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce825%27%3B%0A%7D%0A%0A%0A%23rev_slider_24_1_wrapper%20.ares.tp-bullets%20%7B%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares.tp-bullets%3Abefore%20%7B%0A%09content%3A%27%20%27%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares%20.tp-bullet%20%7B%0A%09width%3A13px%3B%0A%09height%3A13px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23e5e5e5%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares%20.tp-bullet%3Ahover%2C%0A%23rev_slider_24_1_wrapper%20.ares%20.tp-bullet.selected%20%7B%0A%09background%3A%23ffffff%3B%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares%20.tp-bullet-title%20%7B%0A%20%20position%3Aabsolute%3B%0A%20%20color%3A%23888888%3B%0A%20%20font-size%3A12px%3B%0A%20%20padding%3A0px%2010px%3B%0A%20%20font-weight%3A600%3B%0A%20%20right%3A27px%3B%0A%20%20top%3A-4px%3B%20%20%0A%20%20background%3Argba%28255%2C255%2C255%2C0.75%29%3B%0A%20%20visibility%3Ahidden%3B%0A%20%20transform%3Atranslatex%28-20px%29%3B%0A%20%20-webkit-transform%3Atranslatex%28-20px%29%3B%0A%20%20transition%3Atransform%200.3s%3B%0A%20%20-webkit-transition%3Atransform%200.3s%3B%0A%20%20line-height%3A20px%3B%0A%20%20white-space%3Anowrap%3B%0A%7D%20%20%20%20%20%0A%0A%23rev_slider_24_1_wrapper%20.ares%20.tp-bullet-title%3Aafter%20%7B%0A%20%20%20%20width%3A%200px%3B%0A%09height%3A%200px%3B%0A%09border-style%3A%20solid%3B%0A%09border-width%3A%2010px%200%2010px%2010px%3B%0A%09border-color%3A%20transparent%20transparent%20transparent%20rgba%28255%2C255%2C255%2C0.75%29%3B%0A%09content%3A%27%20%27%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%20%20%20%20right%3A-10px%3B%0A%09top%3A0px%3B%0A%7D%0A%20%20%20%20%0A%23rev_slider_24_1_wrapper%20.ares%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20visibility%3Avisible%3B%0A%20%20%20transform%3Atranslatex%280px%29%3B%0A%20%20-webkit-transform%3Atranslatex%280px%29%3B%0A%7D%0A%0A%23rev_slider_24_1_wrapper%20.ares%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%20%7B%0A%20%20%20%20background%3A%23ffffff%3B%7D%0A%23rev_slider_24_1_wrapper%20.ares%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%20%7B%0A%20%20border-color%3Atransparent%20transparent%20transparent%20%23ffffff%3B%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares.tp-bullets%3Ahover%20.tp-bullet-title%20%7B%0A%20%20visibility%3Ahidden%3B%0A%20%20%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares.tp-bullets%3Ahover%20.tp-bullet%3Ahover%20.tp-bullet-title%20%7B%0A%20%20%20%20visibility%3Avisible%3B%0A%20%20%20%20transform%3AtranslateX%280px%29%20translatey%280px%29%3B%0A%20%20-webkit-transform%3AtranslateX%280px%29%20translatey%280px%29%3B%0A%7D%0A%0A%0A%2F%2A%20VERTICAL%20%2A%2F%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%20%7B%20right%3Aauto%3B%20left%3A27px%3B%20%20transform%3Atranslatex%2820px%29%3B%20-webkit-transform%3Atranslatex%2820px%29%3B%7D%20%20%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%2010px%2010px%2010px%200%20%21important%3B%0A%20%20border-color%3A%20transparent%20rgba%28255%2C255%2C255%2C0.75%29%20transparent%20transparent%3B%0A%20%20right%3Aauto%20%21important%3B%0A%20%20left%3A-10px%20%21important%3B%20%20%20%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-vertical.nav-pos-hor-left%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%20%7B%0A%20%20border-color%3A%20%20transparent%20%23ffffff%20transparent%20transparent%20%21important%3B%0A%7D%0A%0A%0A%0A%2F%2A%20HORIZONTAL%20BOTTOM%20%26%26%20CENTER%20%2A%2F%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-center%20.tp-bullet-title%2C%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-bottom%20.tp-bullet-title%20%7B%20top%3A-35px%3B%20left%3A50%25%3B%20right%3Aauto%3B%20transform%3A%20translateX%28-50%25%29%20translateY%28-10px%29%3B-webkit-transform%3A%20translateX%28-50%25%29%20translateY%28-10px%29%3B%20%7D%20%20%0A%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-center%20.tp-bullet-title%3Aafter%2C%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-bottom%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%2010px%2010px%200px%2010px%3B%0A%20%20border-color%3A%20rgba%28255%2C255%2C255%2C0.75%29%20transparent%20transparent%20transparent%3B%0A%20%20right%3Aauto%3B%0A%20%20left%3A50%25%3B%0A%20%20margin-left%3A-10px%3B%0A%20%20top%3Aauto%3B%0A%20%20bottom%3A-10px%3B%0A%20%20%20%20%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-center%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%2C%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-bottom%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%20%7B%0A%20%20border-color%3A%20%20%23ffffff%20transparent%20transparent%20transparent%3B%0A%7D%0A%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-center%20.tp-bullet%3Ahover%20.tp-bullet-title%2C%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-bottom%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%20%20-webkit-transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%7D%0A%0A%0A%2F%2A%20HORIZONTAL%20TOP%20%2A%2F%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%20%7B%20top%3A25px%3B%20left%3A50%25%3B%20right%3Aauto%3B%20transform%3A%20translateX%28-50%25%29%20translateY%2810px%29%3B-webkit-transform%3A%20translateX%28-50%25%29%20translateY%2810px%29%3B%20%7D%20%20%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet-title%3Aafter%20%7B%20%0A%20%20border-width%3A%200%2010px%2010px%2010px%3B%0A%20%20border-color%3A%20%20transparent%20transparent%20rgba%28255%2C255%2C255%2C0.75%29%20transparent%3B%0A%20%20right%3Aauto%3B%0A%20%20left%3A50%25%3B%0A%20%20margin-left%3A-10px%3B%0A%20%20bottom%3Aauto%3B%0A%20%20top%3A-10px%3B%0A%20%20%20%20%0A%7D%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet.selected%3Ahover%20.tp-bullet-title%3Aafter%20%7B%0A%20%20border-color%3A%20%20transparent%20transparent%20%20%23ffffff%20transparent%3B%0A%7D%0A%0A%23rev_slider_24_1_wrapper%20.ares.nav-dir-horizontal.nav-pos-ver-top%20.tp-bullet%3Ahover%20.tp-bullet-title%7B%0A%20%20%20transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%20%20-webkit-transform%3AtranslateX%28-50%25%29%20translatey%280px%29%3B%0A%7D%0A%0A%0A");
                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                        if(htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        }else{
                            var htmlDiv = document.createElement('div');
                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                        }
                    </script>
                    <script>
                        var htmlDivCss = unescape("%0A%0A%0A%0A%0A%0A%0A%0A");
                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                        if(htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        }else{
                            var htmlDiv = document.createElement('div');
                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                        }
                    </script>
                </rs-module-wrap>

            </div>

            <!-- /Main Side -->
        </div>
    </div>

