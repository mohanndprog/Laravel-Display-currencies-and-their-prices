@extends('frontend.layout.layout')
@section('content')
  <!-- CONTENT START -->
  <div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('frontend/images/img/slider3.png') }});">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">{{__('أفرع شركة الجـــود')}}</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{route('frontend.homepage')}}">{{__('الرئيسية')}}</a></li>
                <li>{{__('أفرع شركة الجـــود')}}</li>
            </ul>
        </div>
    </div>

    <!-- BREADCRUMB ROW END -->
    <div class="row">
        <div class="col-md-6">
            <div class="section-head text-left container m-t20">
                <h2 class="text-uppercase"> {{__('الفرع الاول')}}</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>


            </div>
            <div id="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3401.234341426027!2d34.44930558484952!3d31.517723081370463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDMxJzAzLjgiTiAzNMKwMjYnNDkuNiJF!5e0!3m2!1sar!2s!4v1691311143989!5m2!1sar!2s" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <div class="section-head text-left container m-t20">
                <h2 class="text-uppercase"> {{__('الفرع الثاني')}}</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>


            </div>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3407.5727611636557!2d34.30823798485367!3d31.34317018142851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDIwJzM1LjQiTiAzNMKwMTgnMjEuOCJF!5e0!3m2!1sar!2s!4v1691311115966!5m2!1sar!2s" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <!--
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->


</div>
<!-- CONTENT END -->


@endsection
