<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="MediPress - Health & Medical HTML Template" />
<meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Neon | Nigeria's no1. online pharmacy</title>
@include('includes.heads')

</head>
<body class="">
    @include('includes.toast')
<div id="wrapper">
	<!-- preloader -->
	<div id="preloader">
		<div id="spinner">
			<div class="preloader-dot-loading">
				<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
			</div>
		</div>
		<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
	</div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-middle p-0 bg-lighter xs-text-center">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-3">
            <a class="menuzord-brand pull-left flip sm-pull-center mb-15" href="{{url('/')}}"><img src="{{asset('public/admin/images/logo-light.png')}}" alt="Neon logo"></a>
          </div>
          <div class="hidden-xs hidden-sm col-md-3">
            <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
              <i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">Mail Us Today</a>
              <h5 class="font-13 text-black m-0"> info@neon.com</h5>
            </div>
          </div>
          <div class="hidden-xs hidden-sm col-md-3">
            <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
              <i class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">Call us for more details</a>
              <h5 class="font-13 text-black m-0"> 08189862968</h5>
            </div>
          </div>
          <div class="hidden-xs hidden-sm col-md-3">
            <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
              <i class="fa fa-building-o text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">Company Location</a>
              <h5 class="font-13 text-black m-0"> TJAC Building.. Lekki, Lagos</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored2">
        <div class="container">
          <nav id="menuzord" class="menuzord blue no-bg">
            <ul class="menuzord-menu">
              <li class="active"><a href="{{url('/')}}">Home</a>
              </li>
              <li><a href="{{url('/about')}}">About us</a>
              </li>
              
              <li><a href="{{url('/products')}}">All products</a>
              </li>
              <li><a href="{{url('/faqs')}}">FAQs</a>
              </li>
              <li><a href="{{url('/contact')}}">Contact</a>
              </li>
              @if(Auth::check())
              <li><a style="color: #fff;" href="{{url('profile')}}">Hi, {{$loggedInUser->name}}</a>
              </li>
              @endif
              
            </ul>
            <div class="pull-right sm-pull-none mb-sm-15">
              <a class="btn btn-colored btn-flat btn-danger mt-15 mt-sm-10 pt-10 pb-10" href="{{url('cart')}}"><i class="fa fa-shopping-cart mr-5"></i> Your cart</a>
              @if(Auth::check())
              <a href="{{url('logout')}}" class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10" >Logout</a>
              @else
              <a class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10" data-toggle="modal" data-target="#loginModal">Login Now</a>
              @endif
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
	
	<!-- Start main-content -->
	<div class="main-content">
		<!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1600x780" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="{{asset('public/customer/images/slider1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><span class="text-theme-colored">Original drugs?</span> You can <span class="text-theme-color-2">Always</span> Count on us.
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">When you buy from us, you are 100% sure you are not<br>buying a counterfeit.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"> <a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal" class="btn btn-dark btn-theme-colored btn-xl">Register Now</a>
                </div>
              </li>
              {{--
              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1970x500" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="http://placehold.it/1970x500" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['28','24','24','24']"
                  data-lineheight="['33','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-textalign="['center','center','center','center']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">Online Solution
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">We <span class="text-theme-colored">deliver</span> to anywhere in <span class="text-theme-color-2">Lagos.</span>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['320','260','220','220']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">Because your health is important to us, We deliver your product <br>within few hours to any location in lagos
                </div>
                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-5" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['400','340','300','300']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored btn-xl">Read More</a>
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x560" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="http://placehold.it/1920x560" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">We make our world <span class="text-theme-colored">revolve</span> around <span class="text-theme-color-2">yours.</span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">Enjoy our very swift and professional deliverys service 24 hours and 7 days a week.
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored btn-xl">Read More</a>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-5" 
                  data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                </div>
              </li>
              --}}
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        
        <script type="text/javascript">
          var tpj=jQuery;         
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:''
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
      </div>
    </section>
	
    <!-- Section: home-boxes -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner mt-sm-0" data-margin-top="-110px">
            <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored">
                <div class="p-30">
                  <h3 class="text-uppercase text-white mt-0">Top Pharmacists <br><small class="text-gray-lighter">Care Solutions</small></h3>
                  <p class="text-white">Free online consultations with out licenced pharmacists.&nbsp; Click the chat button at the bottom right of this page to begin chat.</p>
                  <a href="{{url('contact')}}" class="btn btn-border btn-circled btn-transparent btn-sm">Contact Us</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="p-30">
                  <h3 class="text-uppercase text-white mt-0">Opening Hours</h3>
                  <div class="opening-hours">
                    <ul class="list-unstyled text-white">
                      <li class="clearfix"> <span>Monday</span>
                        <div class="value"> 8:00am - 12:00pm </div>
                      </li>
                      <li class="clearfix"> <span>Tues - Thur</span>
                        <div class="value">8:00am - 4:30pm</div>
                      </li>
                      <li class="clearfix"> <span>Friday</span>
                        <div class="value">8:00am - 3:00pm</div>
                      </li>
                    </ul>
                  </div>
                  <a class="btn btn-border btn-circled btn-transparent btn-sm mt-20" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/form-appointment.html">Request an appointment</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored">
                <div class="p-30">
                  <h3 class="text-uppercase text-white mt-0">24 Hour Service <br><small class="text-gray-lighter">Defined By You</small></h3>
                  <p class="text-white">Enjoy our very swift and professional delivery service 24 hours and 7 days a week</p>
                  <a href="{{url('contact')}}" class="btn btn-border btn-circled btn-transparent btn-sm">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="p-30">
                  <h3 class="text-uppercase text-white mt-0">Wanna talk to us? <br><small class="text-gray-lighter">Always available</small></h3>
                  <h2 class="text-white">0819 998 7788</h2>
                  <p class="text-white">Get The Quality Care That You Deserve Immediately</p>
                  <a href="{{url('contact')}}" class="btn btn-border btn-circled btn-transparent btn-sm">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section id="about">
    	<div class="container">
    		<div class="section-content">
    			<div class="row">
    				<div class="col-md-5">
    					<div class="">
    						<img src="{{asset('public/customer/images/page.jpg')}}" alt="">
    					</div>
    				</div>
    				<div class="col-md-7">
    					<h2 class="font-size-38 mt-0">We Care<span class="text-theme-colored"> About Your</span> health</h2>
    					<p class="lead">Pharmacists play a key role in helping patients feel better and get well as quickly as possible. Patients do best when pharmacists are part of their healthcare teams because pharmacists are the medication specialists. Pharmacists improve medication adherence thats why we provide 24hrs online service for you to communicate with our licenced pharmacist.
    					</p>
              <ul class="list-inline">
                <li><img src="images/awards/1.png" alt=""></li>
                <li><img src="images/awards/2.png" alt=""></li>
                <li><img src="images/awards/3.png" alt=""></li>
              </ul>
    					<a class="btn btn-theme-colored btn-lg btn-circled mt-30">Contact Us Now</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="">
      <div class="container" style="padding-top: 0 !important;">
        <div class="section-content">
          <div class="row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
              <div class="sidebar sidebar-right mt-sm-30">
                <div class="widget">
                  <div class="search-form">
                    <form action="{{url('search_product')}}" method="post">
                      <div class="input-group">
                          {{ csrf_field() }}
                        <input type="text" name="product" placeholder="Search here..." style="border-radius: 19px" class="form-control search-input">
                        <span class="input-group-btn">
                        <button type="submit" class="btn search-button" style="border-radius: 19px"><i class="fa fa-search"></i></button>
                        </span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="products">
                <h3>Featured products</h3><br/>
                <div class="row multi-row-clearfix">
                  @foreach($products as $product)
                  <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb"> <img alt="" src="{{asset('public/images/products/'.$product->image)}}" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a  href="{{url('cart_add/'.$product->id)}}"><h5 class="product-title">{{$product->name}}</h5></a>
                        <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>
                        <div class="price">{{--<del><span class="amount">₦{{$product->selling_price}}</span></del>--}}<ins><span class="amount">₦{{$product->selling_price}}</span></ins></div>
                        <div class="btn-add-to-cart-wrapper">
                          <a class="btn btn-default btn-xs btn-add-to-cart"  href="{{url('cart_add/'.$product->id)}}">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-md-offset-5">
                  <a class="btn btn-theme-colored btn-lg btn-circled mt-30" href="{{url('products')}}" style="margin: auto;">View All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-8" data-bg-img="{{asset('public/customer/images/parallax.jpg')}}" data-parallax-ratio="0.7">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1754" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Happy Customers</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="6" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Awards</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="28" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Our Pharmacists</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Service Points</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

	<!-- Footer -->
	<footer id="footer" class="footer bg-black-111">
		<div class="container pt-70 pb-40">
			<div class="row border-bottom-black">
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
						<p>Online drugstore with a mission to provide unlimitted access to drugs</p>
						<ul class="list-inline mt-5">
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-colored mr-5"></i> <a class="text-gray" href="#">TJAC building, Lekki, Lagos. Nigeria</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">08189862968</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">info@neon.com</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.neon.com.ng</a> </li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Useful Links</h5>
						<ul class="list-border">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('about')}}">About us</a></li>
							<li><a href="{{url('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Other Links</h5>
						<ul class="list-border">
							<li><a href="{{url('faqs')}}">FAQ</a></li>
							<li><a href="{{url('terms')}}">Terms & Conditions</a></li>
							<li><a href="{{url('policy')}}">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Subscribe To Our Newsletter</h5>
						<!-- Mailchimp Subscription Form Starts Here -->
						<form id="mailchimp-subscription-form-footer" class="newsletter-form">
							<div class="input-group">
								<input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
								<span class="input-group-btn">
									<button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
								</span>
							</div>
						</form>
						<!-- Mailchimp Subscription Form Validation-->
						<script type="text/javascript">
							$('#mailchimp-subscription-form-footer').ajaxChimp({
									callback: mailChimpCallBack,
									url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
							});

							function mailChimpCallBack(resp) {
									// Hide any previous response text
									var $mailchimpform = $('#mailchimp-subscription-form-footer'),
											$response = '';
									$mailchimpform.children(".alert").remove();
									if (resp.result === 'success') {
											$response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
									} else if (resp.result === 'error') {
											$response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
									}
									$mailchimpform.prepend($response);
							}
						</script>
						<!-- Mailchimp Subscription Form Ends Here -->
          </div>
          <div class="widget dark">
						<h5 class="widget-title mb-10">Connect With Us</h5>
						<ul class="styled-icons icon-dark icon-circled icon-sm">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom bg-black-222">
			<div class="container pt-10 pb-0">
				<div class="row">
					<div class="col-md-6 sm-text-center">
						<p class="font-13 text-black-777 m-0" style="padding-bottom: 15px;">Copyright &copy;2019 Imperial soft services. All Rights Reserved</p>
					</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
@include('includes.scripts')
</body>

<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
				
				<div class="clear"></div>
				
				<!-- Begin # DIV Form -->
				<div id="modal-login-form-wrapper">
					
					<!-- Begin # Login Form -->
					<form id="login-form" method="post" action="{{url('authenticate')}}">
					
						<div class="modal-body pb-5">
					
							<h4>Sign-in</h4>{{ csrf_field() }}
						
							<a href="{{url('redirect')}}" class="btn btn-gplus btn-block">Sign-in with Google</a>
							
							<div class="modal-seperator">
								<span>or</span>
							</div>
							
							<div class="form-group"> 
								<input id="login_username" class="form-control" name="email" placeholder="Email" type="email"> 
							</div>
							<div class="form-group"> 
								<input id="login_password" class="form-control" name="password" placeholder="password" type="password"> 
							</div>
			
							<div class="form-group mt-10 mb-10">
								<div class="row gap-5">
									
									<div class="col-xs-6 col-sm-6 col-md-6 text-right mt-5"> 
										<button id="login_lost_btn" type="button" class="btn btn-link pull-left" onclick="openForgotModal()">FORGOT PASSWORD?</button>
									</div>
								</div>
							</div>
						
						</div>
						
						<div class="modal-footer">
						
							<div class="row gap-10">
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-sm btn-block">Sign-in</button>
								</div>
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="button" class="btn btn-main btn-sm btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
								</div>
							</div>
							<div class="text-left">
								<a href="javascript:void(0)" onclick="openRegisterModal()" >No account? <span id="login_register_btn">Register</span></a>
							</div>
							
						</div>
					
          </form>
        </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="registerModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
  
      <!-- Modal content-->
      <div class="modal-content">
          
          <div class="clear"></div>
          
          <!-- Begin # DIV Form -->
          <div id="modal-login-form-wrapper">
            
            <!-- Begin # Login Form -->
            <form id="register-form" method="post" action="{{url('register_customer')}}">
            
              <div class="modal-body pb-5">
            
                <h4>Sign-up</h4>{{ csrf_field() }}
              
                <a href="{{url('redirect')}}" class="btn btn-gplus btn-block">Sign-in with Google</a>
                
                <div class="modal-seperator">
                  <span>or</span>
                </div>
                <div class="form-group"> 
                    <input id="register_name" class="form-control" name="name" placeholder="Full name" type="text"> 
                </div>
                <div class="form-group"> 
                  <input id="register_phone" class="form-control" name="phone" placeholder="Phone" type="tel"> 
                </div>
                <div class="form-group"> 
                  <input id="register_username" class="form-control" name="email" placeholder="Email" type="email"> 
                </div>
                <div class="form-group"> 
                  <input id="register_password" class="form-control" name="password" placeholder="Password" type="password"> 
                </div>
        
              </div>
              
              <div class="modal-footer">
              
                <div class="row gap-10">
                  <div class="col-xs-6 col-sm-6 mb-10">
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Sign-up</button>
                  </div>
                  <div class="col-xs-6 col-sm-6 mb-10">
                    <button type="button" class="btn btn-main btn-sm btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </div>
                <div class="text-left">
                  <a href="javascript:void(0)" onclick="openLoginModal()" >Have an account? <span id="login_register_btn">Sign in</span></a>
                </div>
                
              </div>
            
            </form>
          </div>
      </div>
  
    </div>
  </div>

<!-- Modal -->
<div id="forgotModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
  
      <!-- Modal content-->
      <div class="modal-content">
          
          <div class="clear"></div>
          
          <!-- Begin # DIV Form -->
          <div id="modal-login-form-wrapper">
            
            <!-- Begin # Login Form -->
            <form id="login-form" method="post" action="{{url('forgot_password')}}">
            
              <div class="modal-body pb-5">
            
                <h4>Retrieve password</h4>{{ csrf_field() }}
              
                <div class="form-group"> 
                  <input id="forgot_username" class="form-control" name="email" placeholder="Email" type="email"> 
                </div>
              </div>
              
              <div class="modal-footer">
              
                <div class="row gap-10">
                  <div class="col-xs-6 col-sm-6 mb-10">
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Retrieve password</button>
                  </div>
                  <div class="col-xs-6 col-sm-6 mb-10">
                    <button type="button" class="btn btn-main btn-sm btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </div>
                
              </div>
            
            </form>
          </div>
      </div>
  
    </div>
  </div>

<script>
  function openRegisterModal(){
    $('.modal').modal('hide');
    $('#registerModal').modal('show');
  }
  function openForgotModal(){
    $('.modal').modal('hide');
    $('#forgotModal').modal('show');
  }
  function openLoginModal(){
    $('.modal').modal('hide');
    $('#loginModal').modal('show');
  }

</script>
</html>