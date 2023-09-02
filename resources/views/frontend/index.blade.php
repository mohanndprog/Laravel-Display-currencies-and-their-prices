@extends('frontend.layout.layout')
@section('content')
<!-- CONTENT START -->
<div class="page-content">

    <!-- SLIDER START -->
    <div class="main-slider style-two default-banner">
        <div class="tp-banner-container">
            <div class="tp-banner">
                @if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
                <!-- START REVOLUTION SLIDER 5.4.1 -->
                <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                    <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend/images/img/slider1.png') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/img/slider1.png') }}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                    ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 0);border-width:0px;position:absolute;left:0px;top:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-100-layer-2" data-x="['right','right','right','right']" data-hoffset="['-650','-650','-650','-650']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-fontsize="['60','60','60','50']" data-lineheight="['70','70','70','60']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;
                                    font-weight: 700;
                                    color: rgba(255, 255, 255, 1.00);
                                    border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'SST' ;"> أرسل واستقبل حوالاتك
                                        المالية في <span class="text-primary">ثواني فقط </span> </span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-100-layer-3" data-x="['right','right','right','right']" data-hoffset="['-600','-600','-600','-600']" data-y="['top','top','top','top']" data-voffset="['250','250','250','250']" data-fontsize="['18','22','26','30']" data-lineheight="['30','30','30','40']" data-width="['650','650','650','650']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    font-weight: 500;
                                    color: rgba(255, 255, 255, 0.85);
                                    border-width:0px;
                                     ">
                                    <span class="spanslider" style="font-family:'SST';">أرسل وأستقبل حوالتك المالية لدى الجود مع أفضل و
                                        أكبر مجموعة شركات حوالات مالية حول العالم</span>
                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-100-layer-4" data-x="['right','right','right','right']" data-hoffset="['-250','-250','-250','-250']" data-y="['top','top','top','top']" data-voffset="['380','380','380','450']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase; font-weight:100; top: 22px; text-align: center; width: auto;">
                                    <a href="{{ route('frontend.homepage') }}" class="site-button yellow radius-xl  ">قـــراء
                                        الــمـزيـد</a>
                                </div>



                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend/images/img/slider2.png') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/img/slider2.png') }}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 0);border-width:0px;position:absolute;left:0px;top:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-200-layer-2" data-x="['right','right','right','right']" data-hoffset="['-650','-650','-650','-650']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-fontsize="['60','60','60','50']" data-lineheight="['70','70','70','60']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                        white-space: normal;
                                        font-weight: 700;
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'SST' ;"> أرسل واستقبل حوالاتك
                                        المالية في <span class="text-primary">ثواني فقط </span> </span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-200-layer-3" data-x="['right','right','right',right']" data-hoffset="['-600','-600','-600','-600']" data-y="['top','top','top','top']" data-voffset="['250','250','250','250']" data-fontsize="['18','22','26','30']" data-lineheight="['30','30','30','40']" data-width="['650','650','650','650']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                        font-weight: 500;
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">
                                    <span class="spanslider" style="font-family:'SST';">أرسل وأستقبل حوالتك المالية لدى الجود مع أفضل و
                                        أكبر مجموعة شركات حوالات مالية حول العالم</span>
                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-200-layer-4" data-x="['right','right','right','right']" data-hoffset="['-250','-250','-250','-250']" data-y="['top','top','top','top']" data-voffset="['380','380','380','450']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="{{ route('frontend.homepage') }}" class="site-button yellow radius-xl ">اقراء المزيد </a>
                                </div>



                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend/images/img/slider3.png') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/img/slider3.png') }}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-300-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 0);border-width:0px; position:absolute;left:0px;top:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-300-layer-2" data-x="['right','right','right','right']" data-hoffset="['-650','-650','-650','-650']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-fontsize="['60','60','60','50']" data-lineheight="['70','70','70','60']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                        white-space: normal;
                                        font-weight: 700;
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'SST' ;"> أرسل واستقبل حوالاتك
                                        المالية في <span class="text-primary">ثواني فقط </span> </span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-300-layer-3" data-x="['right','right','right','right']" data-hoffset="['-600','-600','-600','-600']" data-y="['top','top','top','top']" data-voffset="['250','250','250','250']" data-fontsize="['18','22','24','30']" data-lineheight="['30','30','30','40']" data-width="['650','650','650','650']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                        font-weight: 500;
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">
                                    <span class="spanslider" style="font-family:'SST';">أرسل وأستقبل حوالتك المالية لدى الجود مع أفضل و
                                        أكبر مجموعة شركات حوالات مالية حول العالم</span>
                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-300-layer-4" data-x="['right','right','right','right']" data-hoffset="['-250','-250','-250','-250']" data-y="['top','top','top','top']" data-voffset="['380','380','380','450']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]' data-textAlign="['right','right','right','right']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="{{ route('frontend.homepage') }}" class="site-button yellow radius-xl ">اقراء المزيد</a>
                                </div>


                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
                @else

                <!-- START REVOLUTION SLIDER 5.4.1 -->
                <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                    <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend/images/img/slider1.png') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/img/slider1.png') }}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                     {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                     {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                     ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-100-layer-2" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-fontsize="['60','60','60','50']" data-lineheight="['70','70','70','60']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                     {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                     {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                     ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                     white-space: normal;
                     font-weight: 700;
                     color: rgba(255, 255, 255, 1.00);
                     border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'SST' ;"> Send and receive your transfers
                                        Finance in<span class="text-primary">just seconds </span> </span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-100-layer-3" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['250','250','250','250']" data-fontsize="['18','18','18','30']" data-lineheight="['30','30','30','40']" data-width="['650','650','650','650']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                     {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                     {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                     ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                     font-weight: 500;
                     color: rgba(255, 255, 255, 0.85);
                     border-width:0px;">
                                    <span class="spanslider" style="font-family:'SST';">Send and receive your money transfer at Al-Joud with the best and
                                        The largest group of money transfer companies around the world</span>
                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-100-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['380','380','380','480']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                     {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                     {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                     ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="{{ route('frontend.homepage') }}" class="site-button">Read more</a>
                                </div>

                                <!-- LAYER NR. 5 [ for worker pic ] -->
                                <div class="tp-caption tp-resizeme" id="slide-100-layer-5" data-x="['right','right','right','right']" data-hoffset="['0','-0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-frames='[
                     {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                     {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                     ]' style="z-index: 13;">
                                    <img src="images/main-slider/slider3/banner1-1.png" width="400" alt="">
                                </div>

                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend/images/img/slider2.png') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/img/slider2.png') }}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                         {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                         ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-200-layer-2" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-fontsize="['60','60','60','50']" data-lineheight="['70','70','70','60']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                         white-space: normal;
                         font-weight: 700;
                         color: rgba(255, 255, 255, 1.00);
                         border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'SST' ;"> Send and receive your transfers
                                        Finance in<span class="text-primary">just seconds </span> </span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-200-layer-3" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['250','250','250','250']" data-fontsize="['18','18','18','30']" data-lineheight="['30','30','30','40']" data-width="['650','650','650','650']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                         font-weight: 500;
                         color: rgba(255, 255, 255, 0.85);
                         border-width:0px;">
                                    <span class="spanslider" style="font-family:'SST';">Send and receive your money transfer at Al-Joud with the best and
                                        The largest group of money transfer companies around the world</span>
                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-200-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['380','380','380','480']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="{{ route('frontend.homepage') }}" class="site-button">Read more </a>
                                </div>

                                <!-- LAYER NR. 5 [ for worker pic 1 big] -->
                                <div class="tp-caption tp-resizeme" id="slide-200-layer-5" data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' style="z-index: 13;">
                                    <img src="images/main-slider/slider3/banner2-1.png" width="400" alt="">
                                </div>

                                <!-- LAYER NR. 6 [ for worker pic 2 small ] -->
                                <div class="tp-caption tp-resizeme" id="slide-200-layer-6" data-x="['right','right','right','right']" data-hoffset="['-100','-200','-200','-200']" data-y="['top','top','top','top']" data-voffset="['150','100','100','100']" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":4000,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' style="z-index: 13;">
                                    <img src="images/main-slider/slider3/banner2-2.png" width="400" alt="">
                                </div>

                                <!-- LAYER NR. 7 [ for worker pic road white line] -->
                                <div class="tp-caption tp-resizeme" id="slide-200-layer-7" data-x="['right','right','right','right']" data-hoffset="['-20','-20','-20','-20']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','100','100']" data-frames='[
                         {"from":"y:0px(R);opacity:0;","speed":3000,"to":"o:1;","delay":5000,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' style="z-index: 13;">
                                    <img src="images/main-slider/slider3/banner2-3.png" width="400" alt="">
                                </div>


                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontend/images/img/slider3.png') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/img/slider3.png') }}" alt="" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-300-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                         {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                         ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;background-color:rgba(0, 0, 0, 0.10);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-300-layer-2" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['150','150','150','150']" data-fontsize="['60','60','60','50']" data-lineheight="['70','70','70','60']" data-width="['700','700','700','700']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                         white-space: normal;
                         font-weight: 700;
                         color: rgba(255, 255, 255, 1.00);
                         border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'SST' ;"> Send and receive your transfers
                                        Finance in<span class="text-primary">just seconds </span> </span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-300-layer-3" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['250','250','250','250']" data-fontsize="['18','18','18','30']" data-lineheight="['30','30','30','40']" data-width="['650','650','650','650']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                         font-weight: 500;
                         color: rgba(255, 255, 255, 0.85);
                         border-width:0px;">
                                    <span class="spanslider" style="font-family:'SST';">Send and receive your money transfer at Al-Joud with the best and
                                        The largest group of money transfer companies around the world</span>
                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-300-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" data-y="['top','top','top','top']" data-voffset="['380','380','380','430']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="{{ route('frontend.homepage') }}" class="site-button">Read more</a>
                                </div>

                                <!-- LAYER NR. 5 [ for worker pic ] -->
                                <div class="tp-caption tp-resizeme" id="slide-300-layer-5" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-frames='[
                         {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                         {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                         ]' style="z-index: 13;">
                                    <img src="{{ asset('images/main-slider/slider3/banner3-1.png') }}" width="400" alt="">
                                </div>

                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->

                @endif
            </div>
        </div>
    </div>
    <!-- SLIDER END -->

    @include('frontend.inc.aboutus')
    <!-- TABLE RESPONSIVE -->
    <div class="section-content m-b80 container">
        <div class="p-b30">
            <h2 class="text-uppercase">  {{ __('أسعـــــار') }}</h2>

            <h6>{{ $coinses->updated_at->format('d/m/Y - H:i') }}</h6>

            <div class="wt-separator-outer">
                <div class="wt-separator style-square">
                    <span class="separator-left bg-primary"></span>
                    <span class="separator-right bg-primary"></span>
                </div>
            </div>
        </div>
        <div id=" ">
            <table class="col-md-12 table-bordered table-striped table-condensed cf wt-responsive-table">
                <thead class="cf styled-table">
                    <tr>

                        <th> {{ __('العمـــــلات') }}</th>
                        <th class="numeric"> {{ __('شــــــــــراء') }}</th>
                        <th class="numeric"> {{ __('بيــــــــــــع') }}</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td> {{ __('دولار / شيكل') }}</td>
                        <td class="numeric">{{ $coinses->dollars_shekels_sale }}</td>
                        <td class="numeric">{{ $coinses->dollars_shekels_buying }}</td>

                    </tr>
                    <tr>

                        <td> {{ __('دينار / شيكل') }}</td>
                        <td class="numeric">{{ $coinses->dinar_shekel_sale }}</td>
                        <td class="numeric">{{ $coinses->dinar_shekel_buying }}</td>

                    </tr>
                    <tr>

                        <td> {{ __('دولار / دينار') }}</td>
                        <td class="numeric">{{ $coinses->dollars_dinars_sale }}</td>
                        <td class="numeric">{{ $coinses->dollars_dinars_buying }}</td>

                    </tr>
                    <tr>

                        <td> {{ __('يورو / شيكل') }}</td>
                        <td class="numeric">{{ $coinses->euro_shekel_sale }}</td>
                        <td class="numeric">{{ $coinses->euro_shekel_buying }}</td>

                    </tr>





                </tbody>
            </table>
        </div>
    </div>
    @include('frontend.inc.partnars')


    @include('frontend.inc.services')



</div>
<!-- CONTENT END -->
<!-- CONTENT START -->

<!-- SECTION CONTENTG START -->
<div class="section-full p-t80 p-b50 container">
    @include('frontend.inc.contactus')
</div>
<!-- SECTION CONTENT END -->

<!-- CONTENT END -->

@endsection
