{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    
    @yield('title')
    
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script> 
    
    <!-- slider css -->
      
        <link rel="stylesheet" type="text/css" href="{{asset('fontpage/css/slider/demo.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('fontpage/css/slider/style.css')}}" />
        <script type="text/javascript" src="{{asset('fontpage/js/slider/modernizr.custom.53451.js')}}"></script>
        
    <!-- end slider css -->
    
    <link rel="stylesheet" href="{{asset('fontpage/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('fontpage/css/responsive.css')}}" />
</head>
<body>
    
    
    <header> 
     <div class="full_header"> 
      <div class="main_header"> 
      
       <div class="header_left">
        <div class="header_sexcion">
     
        <p><img class="phone" src="{{asset('fontpage/img/icon/iconfinder_phone_logo_social_media_1078686.png')}}" alt="" /> <span class="phone1" >+8801861559750</span> </p>
        <p><img class="phone" src="{{asset('fontpage/img/icon/iconfinder_mail_1164530 - Copy.png')}}" alt="" /><span class="phone1" > mitfarm@gmail.com</span></p>
        </div>
       </div>
       <div class="header_right">
         <ul class="ul">
            <li><a href=""><img src="{{asset('fontpage/img/icon/mit_facebook.png')}}" alt="" /></a></li>
            <li><a href=""><img src="{{asset('fontpage/img/icon/mit_youtube.png')}}" alt="" /></a></li>
            <li><a href=""><img src="{{asset('fontpage/img/icon/mit_twitter.png')}}" alt="" /></a></li>
         </ul>
       </div>
       
      </div>
     </div>
    </header>
    
    
    
    
     
    <div class="header_bottom">
    <div class="miLo">
      <a href="{{route('home')}}">
    <img class="logo" src="{{asset('fontpage/img/logo/mitfarmlogo.png')}}" alt="mit logo" />
    <img class="logo1" src="{{asset('fontpage/img/logo/M IT FARM1  Mobile  Logo.png')}}" alt="mit logo" /> </a>  
    </div>
    
    <div class="header_bottom_main">
     <div class="header_logo">
       
     </div>
     <div class="menu"> 
      <div class="nav"> 
      <ul id="menu">
            <li><a href="{{route('home')}}"> Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Service</a>
                <ul>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a>
                                            
                    </li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                </ul>           
            </li>
           
            <li><a href="#">Coress</a>
                <ul>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a>
                                            
                    </li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                </ul>           
            </li>
             <li><a href="{{route('about')}} ">About Us</a></li>
             <li><a href="{{route('Contackus')}} ">Contack</a></li>
        </ul>
      </div>
      
      <div class="nav1"> 
      <ul id="menu">
            
            <li><a href="#">MENU</a>
                <ul>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a>
                                            
                    </li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                </ul>           
            </li>
        </ul>
      </div>
      
     </div>
    </div>
    
    </div>
    
      
     
 
    @yield('body')


<footer>
 <div class="full_footer">
   <div class="main_footer1">
    <h3>OUR BEST COURSES</h3>
 <?php 
//    $all_service = DB::table('services')
//                 ->where('service_type',2)
//                 ->orderby('service_id','desc')
//                 ->get();

//      foreach ($all_service as $all_service) {
     ?>

    <a href="{{url('deteles/Page/mitfarm/'.$all_service->service_id)}} "><h2>{{$all_service->service_name}} </h2></a> 

     <?php } ?>

   </div>
   <div class="main_footer2">
    <h3>ADDRESS</h3>
    <h2>SOUD BANGLA BANK GROUNT FLOR ADDA BAZAR ,BURORA,CUMILLA</h2>
   </div>
   <div class="main_footer3">
    <h3>CONTACK</h3>
    <h2>+8801861559750 (if your coll not recive .we will coll back after.)</h2>
    <h2>mitfram@gmail.com</h2>
   </div>
   <div class="main_footer4">
  <h3>OUR BEST SERVICE</h3>
  <?php 
//    $all_service = DB::table('services')
//                 ->where('service_type',1)
//                 ->orderby('service_id','desc')
//                 ->get();

//      foreach ($all_service as $all_service) {
     ?>

    <a href="{{url('deteles/Page/mitfarm/'.$all_service->service_id)}} "> <h2>{{$all_service->service_name}} </h2> </a>

     <?php } ?>
  
   </div>
 </div>
</footer>   
    
<div class="footer_bottom">
 <h2>Copyright mitfarm 2018- <?php //echo date('Y') ?></h2>
</div>  
 
    
 
    
    
    
    
    
    
<!-- slider js  --> 
    
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('fontpage/js/slider/jquery.gallery.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#dg-container').gallery({
                    autoplay    :   true
                });
            });
        </script/>  
<!-- slider js  --> 
    
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('country/build/css/countrySelect.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/color-01.css')}}">
	<link rel="shortcut icon" href="#" />  
	<link rel="stylesheet" href="{{asset('intl-tel-input-master/build/css/intlTelInput.css')}}">
	<link rel="stylesheet" href="{{asset('intl-tel-input-master/build/css/demo.css')}}">
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: +1 (876) 841 4652" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: +1 (876) 841 4652</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item" ><a title="Register or Login" onclick="login()">Login</a></li>
								<li class="menu-item" ><a title="Register or Login"  onclick="test()">Register</a></li>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{asset('image/lang-en.png')}}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{asset('image/lang-hun.png')}}" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{asset('image/lang-ger.png')}}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{asset('image/lang-fra.png')}}" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{asset('image/lang-can.png')}}" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="{{asset('image/logo-top-1.png')}}" alt="mercado"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">All Category</a>
										<ul class="list-cate">
											<li class="level-0">All Category</li>
											<li class="level-1">-Electronics</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Headphone & Headsets</li>
											<li class="level-2">Mp3 Player & Acessories</li>
											<li class="level-1">-Smartphone & Table</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Mp3 Player & Headphones</li>
											<li class="level-2">Table & Accessories</li>
											<li class="level-1">-Electronics</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Headphone & Headsets</li>
											<li class="level-2">Mp3 Player & Acessories</li>
											<li class="level-1">-Smartphone & Table</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Mp3 Player & Headphones</li>
											<li class="level-2">Table & Accessories</li>
										</ul>
									</div>
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="#" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">4 items</span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">PHP</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">SQL</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">JavaScript</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">HTML & CSS</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Python</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="index.html" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="shop.html" class="link-term mercado-item-title">Shop Course</a>
								</li>
								<li class="menu-item">
									<a href="cart.html" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="checkout.html" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	{{-- <input type="text" id="country"> --}}
	@yield('body')

	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">45 Grand Central Terminal New York,NY 1017 United State USA</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Contact@yourcompany.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us toll Free</span>
										<b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
									</div>
								</div>
							</div>

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Sign up for newsletter</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">My Account</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">My Account</a></li>
												<li class="menu-item"><a href="#" class="link-term">Brands</a></li>
												<li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
												<li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Infomation</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
												<li class="menu-item"><a href="#" class="link-term">Returns</a></li>
												<li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
												<li class="menu-item"><a href="#" class="link-term">Specials</a></li>
												<li class="menu-item"><a href="#" class="link-term">Order History</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">We Using Safe Payments:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="assets/images/payment.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dowload App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="assets/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="assets/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title">Quick Links</h3>
							<div class="back-link-row">
								<ul class="list-back-link" >
									<li><span class="row-title">Mobiles:</span></li>
									<li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
									<li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
									<li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
									<li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Tablets:</span></li>
									<li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
									<li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
									<li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
									<li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
								</ul>

								<ul class="list-back-link" >
									<li><span class="row-title">Fashion:</span></li>
									<li><a href="#" class="redirect-back-link" title="Sarees Silk" >Sarees Silk</a></li>
									<li><a href="#" class="redirect-back-link" title="sarees Salwar" >sarees Salwar</a></li>
									<li><a href="#" class="redirect-back-link" title="Suits Lehengas" >Suits Lehengas</a></li>
									<li><a href="#" class="redirect-back-link" title="Biba Jewellery" >Biba Jewellery</a></li>
									<li><a href="#" class="redirect-back-link" title="Rings Earrings" >Rings Earrings</a></li>
									<li><a href="#" class="redirect-back-link" title="Diamond Rings" >Diamond Rings</a></li>
									<li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes" >Loose Diamond Shoes</a></li>
									<li><a href="#" class="redirect-back-link" title="BootsMen Watches" >BootsMen Watches</a></li>
									<li><a href="#" class="redirect-back-link" title="Women Watches" >Women Watches</a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2021 AMBER/HEART Academy. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{asset('js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('js/jquery.sticky.js')}}"></script>
	<script src="{{asset('js/functions.js')}}"></script>
	<script src="{{asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script>	 	
    <script src="{{asset('vendor/popper/popper.min.js')}}"></script>	 	 	
    <script src="{{asset('vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
	
	  
    <!--    Plugin sweet Alert 2  -->
	<script src="{{asset('vendor/plugins/sweetAlert2/sweetalert2.all.min.js')}}"></script>
      
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r77/three.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://unpkg.com/vue" charset="utf-8"></script>
	<script src="{{asset('country/build/js/countrySelect.min.js')}}"></script>
    <script src="{{asset('vendor/codigo.js')}}"></script> 
	<script src="{{asset('intl-tel-input-master/build/js/intlTelInput.js')}}"></script>
	
</body>
</html>