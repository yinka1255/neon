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
<title>Neon | Policy</title>
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
		<!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-white-1" data-bg-img="{{asset('public/customer/images/about-us-image-bg.jpg')}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-center" style="">Privacy Policy</h2>
              <ol class="breadcrumb text-center text-white mt-10">
                <li><a href="#" style="color: #fff;">Home</a></li>
                <li class="active text-silver-gray" style="color: #fff;">Privacy Policy</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="position-inherit">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h3>Applicable Law</h3>
              <p>This Privacy Policy with its use is governed by the laws of the Federal Republic of Nigeria and the Nigerian Courts shall have jurisdiction over same. This is without prejudice to the right of HealthPlus to seek recourse in any jurisdiction worldwide in order to restrain the unlawful use of any of the materials contained in the Website.</p>
              
              <h3>Collection of Personally Identifiable Information</h3>
              <p>We collect personally identifiable information (email address, name, phone number, etc.) from you when you set up a free account with HealthPlus. While you can browse some sections of our site without being a registered member, certain activities (such as placing an order) do require registration. We may make use of your personal information to send you offers based on your previous orders and your interests. We will provide you the option to opt out of these offers at any time you so desire. To the extent allowed by law, your choice of not opting out of these offers will be deemed your conclusive acceptance of our use of your personal information to send you said the offers.
              </p>
              
              <h3>Demography and Data Profiling</h3>
              <p>We use personal information to provide the services you request. To the extent to which we require your personal information to market to you, we will provide you the choice to opt out and to the extent allowed by law, your choice of not opting out will be deemed your conclusive acceptance of the use of your personal information for this purpose. We use your personal information to resolve disputes, troubleshoot problems, and help promote a safe service, measure consumer interest in our products and services, inform you about online and offline offers and provide you with product and services updates. In our efforts to continually improve our product and service offerings, we collect and analyse demographic and profile data about our users' activity on our website. We identify and use your IP address to help diagnose problems with our server, and to administer our website. Your IP address is also used in identity confirmation and gathering of broad demographic information. We will occasionally ask you to complete optional online surveys. These surveys may ask you for contact information and demographic information (like location, local government area, age, or income band). We use this data to tailor your experience on our website, providing you with content that we think you may be interested in and to display content according to your preferences.</p>
              <h3>Sharing of personal information</h3>
              <p>We may share personal information with our other corporate entities and affiliates to: help detect and prevent identity theft, fraud and other potentially illegal acts; correlate related or multiple accounts to prevent abuse of our services; and to facilitate joint or co-branded services that you request where such services are provided by more than one corporate entity. However, at all times we will endeavour to keep control and be responsible for the use of your personal information. By providing HealthPlus with your personal information, you consent to our transferring of your personal information to our other corporate entities and affiliates or service providers who may not provide the same level of data protection as us. If we do make such a transfer, we will, if appropriate, enter into a contract with such third parties to mandate they follow this privacy policy with respect to your personal information.

                  Those entities and affiliates may not market to you as a result of such sharing unless you explicitly opt in.
                  
                  We may disclose personal information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court orders, or other legal processes. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims that an advertisement, posting or other content violates the rights of a third party; or protect the rights, property or personal safety of our users or the general public.
                  
                  HealthPlus and its affiliates will share some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity. Should such a transaction occur, that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information</p>
              <h3>Security Precautions</h3>
              <p>Our site has strict security measures in place to protect the loss, misuse, and alteration of the information under our control. Whenever you change or access your account information, we offer the use of a secure server. Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access. However, we advise that the internet and World Wide Web is not 100% secure and to the extent permitted by law, HealthPlus assumes no liability for any loss you may suffer as a result of interception, alteration or misuse of information transmitted over the Internet.
              </p>
              
              <h3>Cookies</h3>
              <p>Cookies are a way for a website to store information in your browser. They are small bits of data stored as text files on a browser. Websites use these small bits of data to keep track of users and enable user-specific features to remember information specific to a given user. For example, many online retailers use cookies to keep track of the items in a user’s shopping cart as they explore the site. Without cookies, your shopping cart would reset to zero every time you clicked a new link on the site. That would make it impossible to buy anything online! Your browser can be set to not accept cookies, but this would impair your experience while using our website. Please accept our assurance that our use of cookies does not contain any personal or private details and are free from viruses.</p>
              <h3>Information Security</h3>
              <p>It is of utmost importance for us to protect the security of information on our website. We protect your information when carrying out transactions by making use of Secure Socket Layer (SSL) protocol, which encrypts every information inputted. We transmit the entire card number to the appropriate card company when processing orders, but we reveal only the last four digits of your debit/credit card number when confirming orders.

                  Also, When purchases are made online, we collect specific types of information from you, including but not limited to your name, shipping address, payment information (which includes card numbers, email address, important health information such as reactions & allergies, pregnancy/breast-feeding status). This information is called order information.</p>
              <h3>Choice/Opt out</h3>
              <p>HealthPlus provides all users with the opportunity to opt out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account. If you want to remove your contact information from all HealthPlus’ lists and newsletters, please visit here In the future, you can unsubscribe by clicking the one-click unsubscribe button located at the bottom of every email. We acknowledge the fact that your personal information belongs to yours, and we’ll make it easy for you to update, change your personal details, marketing permissions or limit communication from us. Kindly help us by informing us know if your contact details change, or if you spot any errors in the information we hold about you. Please note that it may take a period of 7 working days for us to update our records to ensure your new choices are respected. To the extent allowed by law, your choice of not opting out as stated above will be deemed your conclusive acceptance of our use of your personal information for promotional and marketing-related purposes.</p>
              <h3>Target Advertising</h3>
              <p>We use third-party advertising companies to serve ads when you visit our website. Those entities and affiliates may not market to you unless you explicitly opt in.
              </p>
              <h3>Retention of Personal Information</h3>
              <p>We will retain your personal information only for so long as reasonably necessary for the purposes set out above.
              </p>
              <h3>Available Remedies for Violation of the Privacy Policy</h3>
              <p>You have the right to access personal information we hold about you and to ask that your personal information is corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below.
              </p>
              <h3>Updates to Our Privacy Policy</h3>
              <p>To the extent permitted by law, we may update this Privacy Policy periodically to reflect changes in our personal information practices or changes in applicable law. We will indicate at the top of this Privacy Policy when it was most recently updated. You are responsible for periodically reviewing the most current version on the site. To the extent allowed by law, your continued use of the site will be deemed your conclusive acceptance of the updated Privacy Policy</p>
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