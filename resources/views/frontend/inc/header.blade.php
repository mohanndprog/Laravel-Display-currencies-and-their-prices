<!DOCTYPE html>

<html lang="{{ App::currentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" >

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/shortcuticon.svg') }}" />

    <!-- PAGE TITLE HERE -->
    <title>Al-Joud Company</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->



    @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
     <!-- BOOTSTRAP STYLE SHEET -->

     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-rtl.min.css') }}">

     <!-- FONTAWESOME STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fontawesome/css/font-awesome.min.css') }}" />
     <!-- FLATICON STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.min.css') }}">
     <!-- ANIMATE STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.min.css') }}">
     <!-- OWL CAROUSEL STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
     <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
     <!-- MAGNIFIC POPUP STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
     <!-- LOADER STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/loader.min.css') }}">
     <!-- MAIN STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
     <!-- RTL STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/rtl.css') }}">
     <!-- THEME COLOR CHANGE STYLE SHEET -->
     <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('frontend/css/skin/skin-1.css') }}">
     <!-- CUSTOM  STYLE SHEET -->
     <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">
         <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/revolution/revolution/css/navigation.css') }}">

    @else
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fontawesome/css/font-awesome.min.css') }}" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.min.css') }}">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.min.css') }}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/loader.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/ltr.css') }}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('frontend/css/skin/skin-1.css') }}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">



    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/revolution/revolution/css/navigation.css') }}">
    @endif



    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>

</head>

<body>

	<div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-1 ">
{{--
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="wt-topbar-right clearfix">
                        	<ul class="social-bx list-inline pull-right">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                            <ul class="list-unstyled e-p-bx pull-right">
                                <li><i class="fa fa-envelope"></i>mail@mmmm.com</li>
                                <li><i class="fa fa-phone"></i>(888) 123-4567</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <a href="{{ route('frontend.homepage') }}">
                                @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')  <img src="{{ asset('frontend/logo.svg') }}" width="230" height="67" alt="Logo" />  @else  <img src="{{ asset('frontend/images/logoen.svg') }}"   alt="Logo" />  @endif

                            </a>
                        </div>
                           <!-- NAV Toggle Button -->
                           <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->

                        <div class="header-nav navbar-collapse collapse ">

                            <ul class=" nav navbar-nav">
                                <li class=" @if (Route::currentRouteName() == 'frontend.homepage') active @else normal @endif ">
                                    <a href="{{ route('frontend.homepage') }}">{{ __('الرئيسية') }}</a>

                                </li>
                                <li  class=" @if (Route::currentRouteName() == 'frontend.about') active @else normal @endif ">
                                    <a href="{{ route('frontend.about') }}">{{ __('من نحن') }}</a>

                                </li>
                                <li  class=" @if (Route::currentRouteName() == 'frontend.wordmaneger') active @else normal @endif ">
                                    <a href="{{ route('frontend.wordmaneger') }}">{{ __('كلمة رئيس مجلس الادارة') }}</a>

                                </li>

                                <!-- <li>
                                    <a href="javascript:;">من نحن<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">

                                        <li>
                                            <a href="about.html">نبذة عن الشركة</a>
                                        </li>
                                        <li>
                                            <a href="career.html">كلمة مدير الشركة</a>
                                        </li>



                                    </ul>
                                </li> -->

                                <li class=" @if (Route::currentRouteName() == 'frontend.services') active @else normal @endif ">
                                    <a href="{{ route('frontend.services') }}"> {{ __('الخدمات') }}</a>

                                </li>

                                <li class=" @if (Route::currentRouteName() == 'frontend.branches') active @else normal @endif ">
                                    <a href="{{ route('frontend.branches') }}"> {{ __('الفروع') }}</a>

                                </li>

                                <li class=" @if (Route::currentRouteName() == 'frontend.contact') active @else normal @endif ">
                                    <a href="{{ route('frontend.contact') }}"> {{ __('تواصل معنا') }}</a>

                                </li>
                                <li>
                                    <a href="javascript:;">{{ __('اللغات') }}<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach




                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->
