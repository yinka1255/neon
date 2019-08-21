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
<title>Neon | About us</title>
@include('includes.heads')

</head>
<body class="">
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
          <div class="col-xs-12 col-sm-12 col-md-3">
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
              <li><a href="{{url('/')}}">Home</a>
              </li>
              <li class="active"><a href="{{url('/about')}}">About us</a>
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
              <a class="btn btn-colored btn-flat btn-danger mt-15 mt-sm-10 pt-10 pb-10" href="{{url('cart')}}" style="border-radius: 18px;padding: 8px 15px;""><i class="fa fa-shopping-cart mr-5"></i> {{Cart::content()->count()}}</a>
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
		<!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-white-1" data-bg-img="{{asset('public/customer/images/contact-us.jpg')}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-center" style="color: #fff;">About</h2>
              <ol class="breadcrumb text-center text-white mt-10">
                <li><a href="#" style="color: #fff;">Home</a></li>
                <li class="active text-silver-gray" style="color: #fff;">About us</li>
              </ol>
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
              <img src="{{asset('public/customer/images/page.jpg')}}" alt="">
            </div>
            <div class="col-md-7">
              <h2 class="font-size-38 mt-0">We Care<span class="text-theme-colored"> About Your</span> health</h2>
    					<p >Pharmacists play a key role in helping patients feel better and get well as quickly as possible. Patients do best when pharmacists are part of their healthcare teams because pharmacists are the medication specialists. Pharmacists improve medication adherence thats why we provide 24hrs online service for you to communicate with our licenced pharmacist.
    					</p>
              <ul class="list-inline">
                <li><img src="images/awards/1.png" alt=""></li>
                <li><img src="images/awards/2.png" alt=""></li>
                <li><img src="images/awards/3.png" alt=""></li>
              </ul>
              <a class="btn btn-theme-colored btn-lg btn-circled mt-30" href="{{url('contact')}}">Make Appointment Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container" style="padding-top: 0 !important;">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <p>We are Nigeria’s first Integrative Pharmacy. We are the fastest growing pharmacy chain in West Africa, committed to our mission of helping people achieve Optimum Health and Vitality.
              </p>
              <p>From inception, We have distinguished itself as the Pharmacy of Choice through the provision of high quality healthcare products such as medicines, nutritional supplements, natural remedies, home medical equipment, mobility aids and pharmacy services, by certified and well-informed healthcare professionals, in a friendly and hygienic environment.
              </p>
              <p> Our uniqueness is underscored by offering an integrative approach for total wellness through the use of both medicines and natural remedies. We are expanding our frontiers in order to provide excellent pharmaceutical care to all Nigerians. We offer essential pharmacy services in our communities and have carved our niche by providing excellent counselling services aimed at educating people on the myriad of available options in obtaining holistic healthcare solutions.
              </p>   
              <p>Through our pharmacies, we offer free health screenings and services: medicines use review, healthy heart checks, cholesterol checks, diabetes screening, blood pressure measuring, asthma support, weight management, pain management, family planning, emergency contraception, sexual health, stop-smoking service, travel health, minor ailments and expert pharmacist advice. Our customer loyalty program – Vitality Rewards- the first in the industry, allows our customers to gain and redeem points. We have extended hours of operation for the convenience of our customers. We open 365 days a year, including Sundays. Our Free Delivery service is a life-saver for many especially the elderly.
              </p>  
              <p>We have become a household name in Nigeria and beyond. Our dedication has been recognised with several awards of excellence in the healthcare and entrepreneurship categories including the Nigerian Healthcare Excellence Award (NHEA) for 2014, 2015, 2016 and 2018
              </p>   
              <p>Our people are valued, passionate, driven and committed to continuous learning in order to maintain the company’s edge. Their testimonial is that they are proud to be members of the HealthPlus family as the company offers a strong platform for achieving their potentials. We seek to employ and retain the best talents. We believe in deploying best practices in all that we do.
              </p>   
              <p>No matter the job title, all roles at the HealthPlus Group support the health and well-being of the millions of men, women, and children who turn to us for care. That`s because all of us – from our talented business professionals at the head office and our experts in our retail locations who serve our communities – are committed to providing the best possible service experience. With locations across Nigeria, we offer the opportunity to build a rewarding career.
              </p>   
              <p>Our customers mean everything to us which is why we ensure high levels of customer satisfaction. We therefore continually pursue innovative and dynamic means of attaining this through our product portfolio which is unequaled in range, to our pharmacy services and highly differentiated integrative healthcare solutions.
              </p>   
                  
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