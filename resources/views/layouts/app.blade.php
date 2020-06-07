<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from newhospitalhtml.bdtask.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 May 2020 18:04:55 GMT -->
@extends('layouts.style')

    <body id="page-top">


        <!-- Loader icon -->
        <div class="se-pre-con"></div>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">


                        <div class="info-outer hidden-xs">
                            <div class="info-box">
                                <div class="icon"><span class="flaticon-mail"></span></div>
                                <a href="mailto:companyname@mail.com"><span class="__cf_email__">companyname@mail.com</span></a>
                            </div>
                            <div class="info-box">
                                <div class="icon"><span class="flaticon-customer-service"></span></div>
                                <a class="phone" href="tel:(732) 803-010-03">(732) 803-010-03</a>
                            </div>
                        </div>


                        <!--Header Social Icon -->
                        <div class="social">
                            <ul>

                            </ul>
                        </div>



                    </div>
                </div>
            </div>
        </header>

        {{-- NAVIGATION BAR --}}
        <nav id="mainNav" class="navbar navbar-default  navbar-fixed">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="images/logo.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#slider">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#about" class="page-scroll">About</a></li>
                        <li><a href="#service" class="page-scroll">Service</a></li>
                        <li><a href="#contact" class="page-scroll">Contact</a></li>
                        <li><a href="{{route('user.book')}}" class="page-scroll btn-info">Book an Appoinment</a></li>
                    </ul>
                </div> <!-- /.navbar-collapse -->
            </div> <!--/.container -->
        </nav>
        {{-- NAVIGATION BAR --}}



        <!-- Slider -->
        <div id="slider">
            <div class="content">
                <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
                    <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>	<!-- SLIDE  -->
                            <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slider-1-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider-1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                                     id="slide-16-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-fontsize="['70','70','70','45']"
                                     data-lineheight="['70','70','70','50']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="chars"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05"
                                     style="z-index: 5; white-space: nowrap;">WELCOME TO HOSPITAL
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                                     id="slide-16-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1500"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; white-space: nowrap;">BE CALM QUITE COOL.
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0"
                                     id="slide-16-layer-8"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-style_hover="cursor:default;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="2000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-17" data-transition="fadetotopfadefrombottom" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="images/slider-2-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Parallax" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider-2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-3"
                                     id="slide-17-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-fontsize="['70','70','70','45']"
                                     data-lineheight="['70','70','70','50']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;"
                                     data-mask_out="x:inherit;y:inherit;"
                                     data-start="1000"
                                     data-splitin="chars"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05"
                                     style="z-index: 5; white-space: nowrap;">TRY TO BE HEALTHY
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-2"
                                     id="slide-17-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];"
                                     data-mask_out="x:inherit;y:inherit;"
                                     data-start="1500"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 6; white-space: nowrap;">AIN'T THAT NICE?
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-1"
                                     id="slide-17-layer-8"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-style_hover="cursor:default;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="2000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;"><i class="pe-7s-mouse"></i>
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption   tp-resizeme rs-parallaxlevel-8"
                                     id="slide-17-layer-10"
                                     data-x="['left','left','left','left']" data-hoffset="['680','680','680','680']"
                                     data-y="['top','top','top','top']" data-voffset="['632','632','632','632']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;s:1000;"
                                     data-start="2000"
                                     data-responsive_offset="on"
                                     style="z-index: 8;">
                                    <div class="rs-looped rs-pendulum"  data-easing="linearEaseNone" data-startdeg="-20" data-enddeg="360" data-speed="35" data-origin="50% 50%"><img src="images/blurflake4.png" alt="" width="240" height="240" data-ww="['240px','240px','240px','240px']" data-hh="['240px','240px','240px','240px']" data-no-retina>
                                    </div>
                                </div>

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption   tp-resizeme rs-parallaxlevel-7"
                                     id="slide-17-layer-11"
                                     data-x="['left','left','left','left']" data-hoffset="['948','948','948','948']"
                                     data-y="['top','top','top','top']" data-voffset="['487','487','487','487']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;s:1000;"
                                     data-start="2000"
                                     data-responsive_offset="on"
                                     style="z-index: 9;">
                                    <div class="rs-looped rs-wave"  data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%"><img src="images/blurflake3.png" alt="" width="170" height="170" data-ww="['170px','170px','170px','170px']" data-hh="['170px','170px','170px','170px']" data-no-retina>
                                    </div>
                                </div>

                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption   tp-resizeme rs-parallaxlevel-4"
                                     id="slide-17-layer-12"
                                     data-x="['left','left','left','left']" data-hoffset="['719','719','719','719']"
                                     data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;s:1000;"
                                     data-start="2000"
                                     data-responsive_offset="on"
                                     style="z-index: 10;">
                                    <div class="rs-looped rs-rotate"  data-easing="Power2.easeInOut" data-startdeg="-20" data-enddeg="360" data-speed="20" data-origin="50% 50%"><img src="images/blurflake2.png" alt="" width="50" height="51" data-ww="['50px','50px','50px','50px']" data-hh="['51px','51px','51px','51px']" data-no-retina>
                                    </div>
                                </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption   tp-resizeme rs-parallaxlevel-6"
                                     id="slide-17-layer-13"
                                     data-x="['left','left','left','left']" data-hoffset="['187','187','187','187']"
                                     data-y="['top','top','top','top']" data-voffset="['216','216','216','216']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;s:1000;"
                                     data-start="2000"
                                     data-responsive_offset="on"
                                     style="z-index: 11;">
                                    <div class="rs-looped rs-wave"  data-speed="4" data-angle="0" data-radius="10" data-origin="50% 50%"><img src="images/blurflake1.png" alt="" width="120" height="120" data-ww="['120px','120px','120px','120px']" data-hh="['120px','120px','120px','120px']" data-no-retina>
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slider-3-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider-3.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0"
                                     id="slide-18-layer-9"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']"
                                     data-width="500"
                                     data-height="140"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;"
                                     data-mask_out="x:inherit;y:inherit;"
                                     data-start="2000"
                                     data-responsive_offset="on"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);">
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0"
                                     id="slide-18-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-fontsize="['70','70','70','45']"
                                     data-lineheight="['70','70','70','50']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="chars"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-elementdelay="0.05"
                                     style="z-index: 6; white-space: nowrap;">BE AWESOME
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0"
                                     id="slide-18-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1500"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap;">IN A SMOOTH WAY
                                </div>
                            </li>
                        </ul>
                        <div class="tp-static-layers"></div>
                        <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
            </div>
        </div>



        <!-- About section -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 hidden-xs hidden-sm">
                        <img src="images/about.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="about-des">
                            <h3>ABOUT US</h3>
                            <h5>What we are and our history</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                                leap into electronic typesetting,</p>
                            <button type="button" class="thm-btn">read more</button>
                            <hr>
                            <h3>VISION & MISSION </h3>
                            <h5>Our goal and thoughts</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                                leap into electronic typesetting,</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section -->
        <section class="grid-inner">
            <div class="container my-padding">
                <div class="row my-row">
                    <!-- Service List -->
                    <div class="col-sm-4 my-padding">
                        <div class="coloumn c-box-1">
                            <h1>Our services list</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book.</p>
                            <a href="#service" class="thm-btn page-scroll">View all Services</a>
                        </div>
                    </div>
                    <!-- Benefits -->
                    <div class="col-sm-4 my-padding">
                        <div class="coloumn c-box-2">
                            <h3>Our Benefits</h3>
                            <p>It is a long established fact that a reader will .</p>
                            <ul>
                                <li><i class="fa fa-caret-right"></i>Qualified Staff of Doctors  </li>
                                <li><i class="fa fa-caret-right"></i>Employee Occupational Health & Wellness</li>
                                <li><i class="fa fa-caret-right"></i>Save Your Money and Time with us</li>
                                <li><i class="fa fa-caret-right"></i>24x7 Emergency service</li>
                                <li><i class="fa fa-caret-right"></i>Feel Like you are at Home Services</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Working Hours -->
                    <div class="col-sm-4 my-padding">
                        <div class="coloumn c-box-3">
                            <h3>Our Working Hours</h3>
                            <p>It is a long established fact that a reader will .</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Monday-Wednesday</td>
                                        <td class="text-right">08.00-18.00</td>
                                    </tr>
                                    <tr>
                                        <td>Thursday -Friday</td>
                                        <td class="text-right">08.00-18.00</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td class="text-right">08.00-18.00</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td class="text-right">Closed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Service Section -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <!-- Main Title -->
                    <div class="col-md-6 col-md-offset-3">
                        <div class="title-block">
                            <h3>Service We Offer</h3>
                            <p>Our department & special service </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-ambulance-1 icon-color-1 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Emergency Care</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-stethoscope-1 icon-color-2 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Call Center 24/7</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-telephone icon-color-3 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Call Center 24/7</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-medical-2 icon-color-4 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Blood Test</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-pulse icon-color-5 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Cardiac Surgery</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-molar-1 icon-color-6 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Dental Care </h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-stethoscope-1 icon-color-7 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Outdoor Checkup</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-medical icon-color-8 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Ophthalmology</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 hidden-sm">
                        <div class="service-grid">
                            <div class="service-icon">
                                <i class="flaticon-heart icon-color-9 hvr-buzz-out"></i>
                            </div>
                            <div class="service-text">
                                <h4>Heart disease</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry's standard dummy text ever</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @extends('layouts.footer')

    @extends('layouts.jqueries')
    </body>


</html>
