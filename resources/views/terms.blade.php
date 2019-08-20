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
<title>Neon | Terms and conditons</title>
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
              <h2 class="title text-center" style="">Terms & Conditions</h2>
              <ol class="breadcrumb text-center text-white mt-10">
                <li><a href="#" style="color: #fff;">Home</a></li>
                <li class="active text-silver-gray" style="color: #fff;">Terms & conditions</li>
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
              <h3>Introduction</h3>
              <p>These Terms and Conditions govern the use of the services offered by HealthPlus ("HealthPlus") on the HealthPlus web website (the "Web website"). Please read these Terms and Conditions and the Privacy Policy (the "Privacy Policy") carefully before using HealthPlus’ services or its web website. For the purposes of this web website, “seller”, “we”, “us” and “our” all refer to HealthPlus.
              </p>
              <p>The website reserves the right to change, modify, add, or remove portions of both the Terms and Conditions of Use and the Terms and Conditions of Sale at any time. Changes will be effective when posted on the website with no other notice provided. Please check these Terms and Conditions regularly for updates. Your use of HealthPlus services or its website constitutes your acceptance of and agreement to all the terms and conditions in the ‘Terms and Conditions’ and the ‘Privacy Policy’, and your confirmation that you are either at least eighteen (18) years of age or under the supervision of a parent or legal guardian who is at least eighteen (18) years of age. Your continued use of the website constitutes your acceptance to the changes of the terms and conditions following the posting of changes to the terms and conditions on the website.
              </p>
              <h3>Terms And Conditions Of Use</h3>
              <b>Use Of Website</b>
              <p>By using HealthPlus’ website, you confirm that you are either at least 18 years of age or are using the website under the supervision of a parent or legal guardian who is at least eighteen (18) years of age. We grant you a non-transferable and revocable license to use the website, under the Terms and Conditions described, for the purpose of shopping for items sold on the website.
              </p>
              <p>Should we determine at our sole discretion that you are in breach of any of these conditions, we reserve the right to deny you access to this website and its contents and do so without prejudice to any available remedies at law or otherwise. Any breach of these Terms and Conditions shall result in the immediate revocation of the license granted to use the website without notice to you.
              </p>
              <p>Some services and features on the website may require registration or subscription. Should you choose to register or subscribe for such services or features, you agree to provide accurate and current information about yourself, and to promptly update such information if there are any changes
              </p>
              <h3>User Account</h3>
              <p>You are the sole authorised user of any account you create with HealthPlus and are entirely responsible for all activities that occur under such account.
              </p>
              <p>You are responsible for maintaining the confidentiality of any account name you create as well as any password associated with such account. You agree to immediately notify us of any suspected or actual unauthorised use of your account and/or password.
              </p>
              <p>By providing your contact information such as phone number and email address, you agree to receive information including but not limited to availability of items in your order, status of your order, promotions, other information that HealthPlus may deem fit to send you.  At any point, you may request us to discontinue sending you such information.
              </p>
              <p>You must inform us immediately of any changes to the information that you provided when registering by updating your personal details.
              </p>
              <p>If HealthPlus believes that there is likely to be a breach of security or misuse of the HealthPlus website, we may require you to change your password or we may suspend your account.
              </p>
              <p>Within reason, HealthPlus may suspend or cancel your account for a variety of reasons including but not limited to breach of your obligations under these Terms and Conditions.
              </p>
              <p>HealthPlus shall not be responsible or liable in any way for any loss or damage of any kind incurred as a result of, or in connection with, your failure to comply with these Terms and Conditions.
              </p>
              <h3>User Submissions</h3>
              <p>The HealthPlus website may allow the submission of various kinds of communication in the form of comments, reviews, photographs, videos, comments and other communication by users of the website.
              </p>
              <p>All such submissions will be considered non-confidential and will be available for HealthPlus to use as it deems fit in any medium and in any territory globally.
              </p>
              <p>All users of the HealthPlus website hereby agree not to submit material that: (i) is copyrighted, subject to privacy or publicity rights or otherwise subject to third party proprietary rights unless you are the owner of such rights or have permission from the owner to submit the material; (ii) is unlawful, illegal, obscene, harassing, defamatory, libellous, treasonable, pornographic, hateful, racially, religiously or ethnically offensive or is otherwise inappropriate; (iii) could damage the reputation of HealthPlus or any third party; or (iv) impersonates another person. HealthPlus reserves the right to remove any submission at its discretion without providing reasons
              </p>
              <p>HealthPlus does not endorse submissions made on its website and HealthPlus disclaims any liability in connection with any submission. You accept that by accessing HealthPlus’s website you may be exposed to submissions that may be offensive, inaccurate or distasteful, and you hereby waive any legal rights or claims you may have against HealthPlus in relation to this.
              </p>
              <h3>Website Content And Pricing</h3>
              <p>While care is taken to ensure the content published by HealthPlus on its website, including but not limited to product images, product names, product descriptions, product functionalities, product uses, product ingredients and prices, is accurate and complete, errors may occur and you hereby agree that HealthPlus will not be liable in any way for such content.
              </p>
              <p>Though content may be the same, depending on item version (e.g. books), images on the website may differ slightly from actual item. In line with this, HealthPlus reserves the right to refuse or cancel any order if the order contains item(s) that are mispriced or contain incorrect, inaccurate or incomplete content.
              </p>
              <h3>Order Acceptance And Cancellation</h3>
              <p>HealthPlus reserves the sole right to determine which orders to accept and process as well as the right to cancel any order at its own discretion. However, HealthPlus will ensure that the cancellation of any order is communicated in an appropriate time and manner.
              </p>
              <h3>Third Party Websites</h3>
              <p>HealthPlus may provide web links to websites owned or operated by third parties. HealthPlus does not endorse the content or any products or services available on such websites and is not responsible for such content. Your connection to any website other than the HealthPlus website is at your own risk.
              </p>
              <h3>Use Of Material</h3>
              <p>Unless otherwise stated, all rights to all materials, content, layout, images, text and design of this website are proprietary to HealthPlus. Users of this website may browse the website and may download material displayed on the website for non-commercial, lawful, personal use only, provided all copyright and other proprietary notices contained on the material so downloaded are retained and such information is not modified, copied or posted on any networked computer or broadcast in any media. All other copying, reproduction, posting on any other website, republication, downloading, uploading, encoding, modification, translation, public performance or display, distribution or transmission of any portion of this website, or the making of any derivative works from this website without the express permission of HealthPlus is prohibited.
              </p>
              <h3>Trademarks And Copyrights</h3>
              <p>This website is owned, controlled and operated by HealthPlus. All material on this website, including images, illustrations, audio clips and video clips are protected by copyrights, trademarks, and other intellectual property rights that are owned and controlled by us or by other parties that have licensed their material to us or provided us permission to use such material.
              </p>
              <p>The material on the HealthPlus website may be used by you for personal, non-commercial purposes. You must not copy, reproduce, republish, upload, post, transmit or distribute such material in any way, including by e-mail or other electronic means and whether directly or indirectly and you must not assist any other person to do so. Without the prior written consent of HealthPlus, modification of the materials, use of the materials on any other website or networked computer environment or use of the materials for any purpose other than personal, non-commercial use is a violation of the copyrights, trademarks and other proprietary rights, and is prohibited.
              </p>
              <p>You agree that any material submitted to the website including comments, questions and reviews will become the sole and exclusive property of HealthPlus.
              </p>
              <h3>Territorial Use</h3>
              <p>HealthPlus offers no guarantee that items on the HealthPlus website are appropriate or available for use in locations outside Nigeria, and accessing the HealthPlus website from territories where its contents are illegal or unlawful is prohibited and done at the user’s risk. Ultimately, the user is responsible for ensuring that accessing or using the HealthPlus website is done in accordance with applicable local laws.
              </p>
              <h3>Applicable Law</h3>
              <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of Nigeria and any disputes will be decided by Nigerian courts.
              </p>
              <h3>Limitation Of Liability</h3>
              <p>You agree that HealthPlus shall not be liable for any direct, indirect, incidental, special or consequential damages resulting from or in connection to use of HealthPlus’ services or website. In no event shall HealthPlus’ total liability to you exceed the amount paid by you to HealthPlus in respect of the specific service resulting in the said liability.
              </p>
              <h3>Indemnity</h3>
              <p>You hereby indemnify and hold HealthPlus, its owners, licensees, affiliates, subsidiaries and their respective officers, directors, agents, and employees, free from any losses, claims, actions, costs, damages, penalties, fines and expenses including reasonable attorneys' fees, made by any third party or penalty imposed due to or arising out of your breach of these Terms and Conditions, Privacy Policy and other Policies, or your violation of any law, rules or regulations or the rights of a third party.
              </p>
              <h3>Severability</h3>
              <p>If any portion of these terms or conditions is held by any court to be invalid or unenforceable, either in whole or in part, then that part shall be severed from these Terms and Conditions and shall not affect the validity or enforceability of any other term listed in this Terms and Conditions
              </p>
              <h3>Termination</h3>
              <p>At HealthPlus’ discretion and without prior notice to you, HealthPlus may suspend or terminate your access to the HealthPlus website.
              </p>
              <p>Upon any termination of your access to the website, you shall immediately cease all access to and use of the HealthPlus website and we shall, in addition to any other legal or equitable remedies, immediately revoke all password(s) and account identification issued to you and deny your access to and use of the website in whole or in part.
              </p>
              <p>If you are dissatisfied with the website or with any terms, conditions, rules, policies, guidelines, or practices of HealthPlus in operating the website, your sole and exclusive remedy is to discontinue the use of the website.
              </p>
              <h3>Terms And Conditions Of Sale</h3>
              <b>Delivery Windows</b>
              <p>For your convenience, we offer a number of windows in which we expect to deliver your order. At checkout, you may select your preferred window and we will make every attempt to deliver within your selected delivery window. In the event that there is a delay, you will be notified as much in advance as possible. Ultimately, the delivery windows are a guide and we are not bound to deliver within the stipulated windows. What we do guarantee is that your order will be delivered within 24 hours of the time of your selected delivery window for branches within Lagos. That said, the majority of our customers’ orders are delivered within their chosen delivery window and it is always our goal to achieve this. Beyond the delivery window selected at checkout, we are unable to accept requests for deliveries at specific times.
              </p>
              <h3>Communication During Order Processing</h3>
              <p>While processing your order, we may need to contact you to discuss the availability of items in your order and any suggested replacements. We require your response within 15 minutes of receiving emails or phone calls about any replacements in your order, otherwise, we may deliver only available items without including any suggested replacements. At checkout, we ask customers their preferred mode of communication. This preferred mode of communication only applies to any update to your order prior to dispatch. Once an order has been dispatched, the next form of communication may be by phone call, so you are required to have your phone readily available.
              </p>
              <h3>Acceptance Of Electronic Documents</h3>
              <p>You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.
              </p>
              <h3>Payment And Pricing</h3>
              <p>We are determined to provide the most accurate pricing information on the website to our users; however, errors may still occur, such as cases when the price of an item is not displayed correctly on the website. As such, we reserve the right to refuse or cancel any order. In the event that an item is mispriced, we may, at our own discretion, either contact you for instructions or cancel your order and notify you of such cancellation.
              </p>
              <h3>Access To Your Delivery Location</h3>
              <p>We always endeavour to deliver your order directly to your doorstep, however if access to your location is limited due to a dilapidated road, flooding, road blocks, civil unrest or any other encumbrances, then we will require you to notify us in advance and also to meet the dispatch rider at a convenient and more accessible location. Failure to notify us of any such issues may result in a delay and/or rescheduling of your delivery or a cancellation of your order.
              </p>
              <h3>Access Within Your Building</h3>
              <p>Our dispatch riders are very happy to carry your order to your doorstep. If your building has an elevator, the dispatch riders will bring the order to any floor you’re on. If, however, the building has no elevator, the highest floor the dispatch riders will walk up to is the 4th floor (assuming the ground floor is the 1st floor). Also, if your order contains large and/or heavy individual items such as water refill bottles, the dispatch riders will only walk up to the 2nd floor (assuming the ground floor is the 1st floor), if the building has no elevator.
              </p>
              <h3>Meeting Our Dispatch Rider</h3>
              <p>In order to enable our dispatch riders effect timely deliveries, they are mandated to wait for a maximum of 5 minutes for each customer to receive their orders from them. After contacting a customer and the customer is either unresponsive or fails to show up after 5 minutes, the dispatch rider will leave your address. If you are unreachable at the point of delivery, your order may be rescheduled at an additional cost. We will accept no liability for perishable or other items that are damaged due to the wait time.
              </p>
              <h3>Cancellations</h3>
              <p>When we receive customer orders, we begin processing immediately. Thus, once an order has been paid for, HealthPlus is unable to accept a cancellation of the order, neither is HealthPlus able to process a refund (either to the customer’s HealthPlus e-wallet or their bank accounts). This, however, does not affect your rights to a refund in the event that an incorrect or damaged item is delivered.
              </p>
              <h3>Returns</h3>
              <p>If we deliver an incorrect or damaged item (damage that has been caused by us), we will happily replace the item at no additional cost to you. For us to replace such items, customers will need to notify the dispatch rider of their observation at the point of delivery. Once customers have taken delivery of their order and signed confirming this, they take ownership of the items and HealthPlus will be unable to accept any returns. For this reason, we ask customers to carefully check and confirm the accuracy of their order with the dispatch rider before acknowledging receipt by signing. HealthPlus will not accept returns for items that have no material damage to them. Products that are materially intact but whose packaging may have scratches, peels, tearing, dents, discolouration, rust, or any other aesthetic impairment that does not affect the taste, functionality or integrity of the actual product may not be accepted by HealthPlus as a return.
              </p>
              <h3>Refunds</h3>
              <p>If an ordered item is unavailable, we will continue to check for the item until it is back in stock. If, after our checks, the item remains out of stock, any credit due to you will be added to your HealthPlus e-wallet. We do not process refunds to bank accounts.
              </p>
              <p>In instances where your address is not within our delivery coverage locations or we later receive a payment which did not reflect in our account at the time you made it, we may process a refund to your account after deducting relevant bank charges.
              </p>
              <h3>Treatment Of Our Employees</h3>
              <p>HealthPlus’ employees always strive to please customers and often go to extra lengths to ensure customers enjoy premium service. We expect that our customers will accord the same courtesy and respect to all our employees they may engage with via email, over the phone or in person. Our employees mean a lot to us and without them, we will not be able to provide the level of service we offer our customers. So, while we will be patient with customers, we will not tolerate any written, verbal or physical abuse to our employees by anyone. Any breach of this by a customer may result in our refusal to fulfil the customer’s order. In such an instance, if the items in the customer’s order have already been picked and paid for, we may decide not to deliver to the customer’s location and instead require the customer to pick up the order at a location of our choosing. If, however, the items have not been purchased, we may process a refund after deducting relevant bank, transactional and operational charges and costs HealthPlus may have incurred. HealthPlus reserves the right to report any incidence of abuse to the appropriate law enforcement authorities.
              </p>
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
					
							<h4>Sign-in</h4>
						
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
            
                <h4>Sign-up</h4>
              
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
            
                <h4>Retrieve password</h4>
              
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