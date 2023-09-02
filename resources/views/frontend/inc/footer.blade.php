
        <!-- FOOTER START -->
        <footer class="site-footer footer-dark">
            <!-- COLL-TO ACTION START -->
            <div class="call-to-action-wrap bg-primary" style="background-image:url({{ asset('frontend/images/background/bg-4.png') }}); background-repeat:repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="call-to-action-left p-tb20 p-r50">
                                <h4 class="text-uppercase m-b10">
                                    {{ __('شركة الجـــود إحدى كبرى الشركات الفلسطينية الخاصة العاملة في مجال صرافة العملات والحوالات المالية تحت مظلة سلطة النقد الفلسطينية') }}
                                </h4>
                                <p>
                                    {{ __('شركة الجـــود إحدى كبرى الشركات الفلسطينية الخاصة') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="call-to-action-right p-tb30">
                                <a href="{{route('frontend.contact')}}" class="site-button-secondry text-uppercase"  style="font-weight:600;">
                                    {{ __('تواصل معنا') }}    <i class="fa fa-angle-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main bg-black" style="opacity:0;"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_about">
                                <h4 class="widget-title">{{ __('حول الشركة') }}</h4>
                                <div class=" p-b15">
                                    @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')  <img src="{{ asset('frontend/logo.svg') }}" width="230" height="67" alt="Logo" />  @else  <img src="{{ asset('frontend/images/logoen.svg') }}"   alt="Logo" />  @endif

                                </div>
                                <p>
                                    {{ __('شركة الجود للصرافة والحوالات المالية تمتلك تاريخ مالي قوي ومكانة مميزة في الوقت الراهن. الشركة مرخصة من سلطة النقد الفلسطينية البنك المركزي لممارسة وتقديم الخدمات المالية، بما في ذلك إدارة التحصيلات النقدية الحوالات المالية تبادل العملات بالإضافة لخدمة سداد وتحصيل الفواتير منذ عام 2012،') }}
                                 </p>
                            </div>
                        </div>
                        <!-- RESENT POST -->

                        <!-- USEFUL LINKS -->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title"> {{ __('روابط مفيدة') }}</h4>
                                <ul>
                                    <li><a href="{{route('frontend.homepage')}}"> {{ __('الرئيسية') }}</a></li>
                                    <li><a href="{{route('frontend.about')}}">{{ __('من نحن') }}</a></li>
                                    <li><a href="{{route('frontend.contact')}}">{{ __('اتصل بنا') }}</a></li>
                                    <li><a href="{{route('frontend.branches')}}">{{ __('الفروع') }}</a></li>
                                    <li><a href="{{route('frontend.services')}}">{{ __('الخدمات') }}</a></li>
                                    <li><a href="{{route('frontend.wordmaneger')}}">{{ __('كلمة مدير مجلس الادارة') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget_services">
                                <h4 class="widget-title">{{ __('الخدمات') }}</h4>
                                <ul>
                                    <li><a href="{{route('frontend.services')}}">{{ __('أسعار العملات') }}</a></li>
                                    <li><a href="{{route('frontend.services')}}">{{ __('بيع وشراء العملات الأجنبية') }}</a></li>
                                    <li><a href="{{route('frontend.services')}}">{{ __('الحوالات المالية') }}</a></li>
                                    <li><a href="{{route('frontend.services')}}">{{ __('أسعار العملات') }}</a></li>
                                    <li><a href="{{route('frontend.services')}}">{{ __('بيع وشراء العملات الأجنبية') }}</a></li>
                                    <li><a href="{{route('frontend.services')}}">{{ __('الحوالات المالية') }}</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- NEWSLETTER -->
                        <div class="col-md-3 col-sm-6">
                            {{-- <div class="widget widget_newsletter">
                                <h4 class="widget-title">النشرة البريدية</h4>
                                <div class="newsletter-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                        <input name="news-letter" class="form-control" placeholder="البريد الالكتروني" type="text">
                                        <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                    </div>
                                     </form>
                                </div>
                            </div> --}}
                            <!-- SOCIAL LINKS -->
                            <div class="widget widget_social_inks">
                                <h4 class="widget-title">{{ __('مواقع التواصل') }}</h4>
                                <ul class="social-icons social-square social-darkest">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                       <div class="col-md-3 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-primary">
                                    <span class="flaticon-placeholder"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">{{ __('العنوان الأول') }}</h5>
                                    <p>{{ __('غزة') }}</p>
                                </div>
                           </div>
                        </div>
                       <div class="col-md-3 col-sm-6  p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-primary">
                                    <span class="flaticon-placeholder"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">{{ __('العنوان الثاني') }}</h5>
                                    <p>{{ __('غزة') }}</p>
                                </div>
                           </div>
                        </div>
                       <div class="col-md-3 col-sm-6  p-tb20 ">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                <div class="icon-md text-primary">
                                    <span class="flaticon-smartphone"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">{{ __('رقم الجوال') }}</h5>
                                    <p class="m-b0">23423434</p>
                                    <p> 555 888 9585</p>
                                </div>
                           </div>
                       </div>

                       <div class="col-md-3 col-sm-6 p-tb20">
                           <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                <div class="icon-md text-primary">
                                    <span class="flaticon-email"></span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="wt-tilte text-uppercase m-b0">{{ __('البريد الالكتروني') }}</h5>
                                    <p class="m-b0">info@mm.com</p>
                                    <p>info@mm.com</p>
                                </div>
                            </div>
                        </div>

                  </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main bg-black" style="opacity:0;"></div>
                <!-- <div class="constrot-strip"></div> -->
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">{{ __('© 2023 شركة الجود. كل الحقوق محفوظة. المطور') }}<a href="https://mohanndgreg.com/" target="_blank">Mohannd Greg.</a></span>
                        </div>
                        <div class="wt-footer-bot-right">
                            <ul class="copyrights-nav pull-right">
                                <li><a href="javascript:void(0);">{{ __('شروط الاستخدام') }}</a></li>
                                <li><a href="javascript:void(0);">{{ __('سياسة الخصوصية') }}</a></li>
                                <li><a href="{{route('frontend.contact')}}">{{ __('تواصل معنا') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->


        <!-- SCROLL TOP BUTTON -->
        <button class="scroltop" ><i class=" fa fa-arrow-up"></i></button>

    </div>


<!-- LOADING AREA START ===== -->
<div class="loading-area" style="">
    <div class="loading-box"></div>
    <div class="loading-pic">
    	<!-- <div class="noTrespassingOuterBarG">
            <div class="noTrespassingFrontBarG noTrespassingAnimationG">
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
            </div>
        </div> -->
    	<div id="cssload-cupcake" class="cssload-box">
            <img src="{{ asset('frontend/images/img/loading.gif') }}"  width="300">
            {{-- <span class="cssload-letter">AL</span>

            <div class="cssload-cupcakeCircle cssload-box">
                <div class="cssload-cupcakeInner cssload-box">
                    <div class="cssload-cupcakeCore cssload-box"></div>
                </div>
            </div>

            <span class="cssload-letter cssload-box">G</span>
            <span class="cssload-letter cssload-box">O</span>
            <span class="cssload-letter cssload-box">U</span>
            <span class="cssload-letter cssload-box">D</span> --}}

        </div>
    	<!-- <div class="noTrespassingOuterBarG">
            <div class="noTrespassingFrontBarG noTrespassingAnimationG">
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
                <div class="noTrespassingBarLineG"></div>
            </div>
        </div> -->
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script   src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script   src="{{ asset('frontend/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script   src="{{ asset('frontend/js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->

<script   src="{{ asset('frontend/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="{{ asset('frontend/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script   src="{{ asset('frontend/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('frontend/js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->

<script  src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->

<script   src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script src="{{ asset('frontend/js/jquery.owl-filter.js') }}"></script>

<script   src="{{ asset('frontend/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->
<script   src="{{ asset('frontend/js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="{{ asset('frontend/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ asset('frontend/js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->

<script  src="http://maps.google.com/maps/api/js?sensor=false"></script><!-- GOOGLE MAP -->
<script   src="{{ asset('frontend/js/map.script.js') }}"></script><!-- MAP FUCTIONS [ this file use with google map]  -->

<!-- REVOLUTION JS FILES -->
<script  src="{{ asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="{{ asset('frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script >
    var tpj = jQuery;

    var revapi1014;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1014_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1014_1");
        } else {
            revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder"></div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1240, 1240, 1240],
                gridheight: [600, 600, 600, 600],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>












</body>

</html>
