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
                    <h1 class="text-white">{{__('تواصـــــــل معــــنا')}}</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-1">
                    <li><a href="{{route('frontend.homepage')}}">{{__('الرئيسية')}}</a></li>
                    <li>{{__('تواصل معنا')}}</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

      <!-- SECTION CONTENTG START -->
      <div class="section-full p-t80 p-b50">
        <div class="container">

         @include('frontend.inc.contactus')
        </div>
   </div>
    <!-- SECTION CONTENT END -->
    </div>
    <!-- CONTENT END -->
@endsection
