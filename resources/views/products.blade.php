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
<title>Neon | Products</title>
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
              
              <li class="active"><a href="{{url('/products')}}">All products</a>
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
    <section class="inner-header divider layer-overlay overlay-white-1" data-bg-img="{{asset('public/customer/images/products.jpg')}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-center" style="color: #fff;">Shop</h2>
              <ol class="breadcrumb text-center text-white mt-10">
                <li><a href="#" style="color: #fff;">Home</a></li>
                <li class="active text-silver-gray" style="color: #fff;">Shop</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-9">
              <div class="products">
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
                          <a class="btn btn-default btn-xs btn-add-to-cart" href="{{url('cart_add/'.$product->id)}}">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-md-offset-5">
                    {{ $products->links() }}
               </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="sidebar sidebar-right mt-sm-30">
                  <div class="widget">
                    <h5 class="widget-title">Search box</h5>
                    <div class="search-form">
                      <form action="{{url('search_product')}}" method="post">
                        <div class="input-group">
                            {{ csrf_field() }}
                          <input type="text" name="product" placeholder="Search here..." class="form-control search-input">
                          <span class="input-group-btn">
                          <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                          </span>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="widget" style="height: 800px; overflow: scroll;">
                    <h4 class="widget-title">Categories</h4>
                    <div class="categories">
                      <ul class="list list-border angle-double-right">
                        @foreach ($categories as $category)
                          <li><a href="{{url('category_products/'.$category->id)}}">{{$category->name}}<span> ({{$category->categoryCount}})</span></a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
              </div>
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
@include('includes.toast')
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