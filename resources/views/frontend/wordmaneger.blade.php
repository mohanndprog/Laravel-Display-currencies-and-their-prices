@extends('frontend.layout.layout')
@section('content')
   <!-- CONTENT START -->
   <div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper"
        style="background-image:url({{ asset('frontend/images/img/slider3.png') }});">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">{{__('كلمة رئيس مجلس الادارة')}}</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{route('frontend.homepage')}}">{{__('الرئيسية')}}</a></li>
                <li>{{__('كلمة مدير مجلس الادارة')}}</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">

                <!-- LEFT PART START -->
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5 col-sm-5  ">
                            <div
                                class="wt-media wt-team-full-media m-b30">
                                <a href="#"><img
                                        src="{{ asset('frontend/images/img/office.png') }}"
                                        alt="team"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="wt-info wt-team-full-info">
                                <h3 class="wt-title m-t0"><a
                                        href="javascript:void(0);">{{__('جهاد غازي بسيسو')}}</a></h3>
                                <h3
                                    class="wt-title m-t0">{{__('رئيس مجلس إدارة شركة الجود للصرافة والحوالات المالية')}}</h3>
                                <p>
                                    {{__('مرحبًا بكم في موقع شركة الجود للصرافة والحوالات المالية، كرئيس مجلس لإدارة الشركة، أود أن أشكركم على كونكم شريك مميز لشركتنا، والتي نحرص فيها على تقديم الخدمات المالية ضمن حزمة خدمات نسعى دوماً أن تكون استثنائية وتلبي احتياجاتكم. نحن نفتخر بفريقنا المتخصص وخبرتهم في هذا المجال، ونسعى جاهدين لتحقيق رضاكم التام وتوفير حلول مالية موثوقة')}}
                                </p>
                                <br>
                                <p>
                                    {{__('أؤكد ان شركة الجود للصرافة والحوالات المالية تضع نصب أعينها الريادة والتطوير والعمل على أسس علمية مواكِبة للتطور التكنولوجي بما يخدم مصالح زبائننا ويحقق رفاهيتهم')}}
                                </p>
                                {{-- <ul
                                    class="social-icons social-md social-square social-primary">
                                    <li><a
                                            href="javascript:void(0);"
                                            class="fa fa-facebook"></a></li>
                                    <li><a
                                            href="javascript:void(0);"
                                            class="fa fa-twitter"></a></li>
                                    <li><a
                                            href="javascript:void(0);"
                                            class="fa fa-linkedin"></a></li>
                                    <li><a
                                            href="javascript:void(0);"
                                            class="fa fa-rss"></a></li>
                                    <li><a
                                            href="javascript:void(0);"
                                            class="fa fa-youtube"></a></li>
                                    <li><a
                                            href="javascript:void(0);"
                                            class="fa fa-instagram"></a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>

                </div>
                <!--LEFT PART END -->



            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->
</div>
<!-- CONTENT END -->
@endsection
