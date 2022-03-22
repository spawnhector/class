
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>JumboLoan - Loan Company Responsive HTML5 Landing Page</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://w3ctemplate.com/JumboLoan/assets/css/bootstrap.min.css" type="text/css" >
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="https://w3ctemplate.com/JumboLoan/assets/css/owl.carousel.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="https://w3ctemplate.com/JumboLoan/assets/css/style.css" type="text/css">
    <!--FontAwesome Font Style -->
    <link href="https://w3ctemplate.com/JumboLoan/assets/css/all.min.css" rel="stylesheet">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
    <!-- Google-Font-->
    <link rel="stylesheet" href="{{asset('css/scroll.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @livewireScripts
</head>
<body>  
<!-- Header -->
<header id="header" class="nav-stacked" data-spy="affix" data-offset-top="1">
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
      	<div class="logo"> 
        	<a href="index.html"><img src="https://w3ctemplate.com/JumboLoan/assets/images/logo.png" alt="image"/></a> 
        </div> <!-- /Logo -->
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#interest" class="js-target-scroll">Interest Rate</a></li>
          <li><a href="#documents" class="js-target-scroll">Documents & Eligiblity </a></li>
          <li><a href="#faq" class="js-target-scroll">Faq</a></li>
          <li><a href="#contact" class="js-target-scroll">Contact Us</a></li>
        </ul>
		  <div class="header-act-btn">
			  <a href="#" class="btn">Apply Now</a>
		  </div>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
</header>
<!-- /Header --> 

<!-- Banner -->
<section id="banner" class="section-padding primary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="banner-content">
					<h1>Get Instant Approval for Personal Loan</h1>
					<ul>
						<li><i class="fa fa-check-circle"></i> Quick & Easy</li>
						<li><i class="fa fa-check-circle"></i> Zero hidden charges</li>
						<li><i class="fa fa-check-circle"></i> Flexible Interest Rates</li>
					</ul>
                    
                    <x-modal>
                        <x-slot name="modal_class">
                            contact-wrap primary-bg
                        </x-slot>
                        <x-slot name="btn_tag">
                            quickapply
                        </x-slot>
                        <x-slot name="modal_header">
                            Quick Apply.
                        </x-slot>
                        <x-slot name="btn_class">
                            btn
                        </x-slot>
                        <x-slot name="button">
                            Quick Apply
                        </x-slot>
                        <x-slot name="content">
                            @livewire('quickapply',['btn_tag'=>'quickapply'])
                        </x-slot>
                    </x-modal>
				</div>
			</div>
			<div class="col-md-6">
				<div class="banner-image">
					<img src="https://w3ctemplate.com/JumboLoan/assets/images/banner-image.png" alt="image">
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- /Banner -->
	
<!-- About-Us -->
<section class="section-padding">
	<div class="container">
		<div class="section-header text-center">
			<h2>Get the Financial Help</h2>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="image-wrap">
					<img src="https://w3ctemplate.com/JumboLoan/assets/images/about-us.jpg" alt="image">
				</div>
			</div>
			<div class="col-md-6">
				<h5>We’re here to help you</h5>
				<p>uman happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but <strong><a href="#">because</a></strong> those who do not know how to pursue pleasure rationally encounter consequences.</p>
				<h5>Latest Finance Offers</h5>
				<p>Dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue.</p>
				<a href="#" class="btn">Apply Now</a>
			</div>
		</div>
		
	</div>
</section>	
<!-- /About-Us -->
	
<!-- Interest-Rates -->
<section id="interest" class="section-padding gray_bg">
	<div class="container">
		<div class="section-header text-center">
			<h2>Affordable Interest Rates</h2>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="features-box">
					<div class="icon-wrap">
						<i class="fa fa-percentage"></i>
					</div>
					<p>Interest Rate</p>
					<h4>12.00% - 16.00%</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="features-box">
					<div class="icon-wrap">
						<i class="fa fa-calendar"></i>
					</div>
					<p>Loan Tenure</p>
					<h4>Min & Max 3 years</h4>
				</div>
			</div>
			<div class="col-md-4">
				<div class="features-box">
					<div class="icon-wrap">
						<i class="fa fa-dollar-sign"></i>
					</div>
					<p>Processing Fee</p>
					<h4>Minimum 1.5% - 2%</h4>
				</div>
			</div>
		</div>
		<div class="text-center">
			<a href="#" class="btn">Know how to apply for loan</a>
		</div>
	</div>	
</section>	
<!-- /Interest-Rates -->

<!-- Documents-Required -->
<section id="documents" class="section-padding">
	<div class="container">
		<div class="section-header text-center">
			<h2>Documents Required</h2>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
		</div>
		<div class="doc-list-wrap primary-bg">
			<div class="doc-list">
				<div class="list-icon">
					<i class="fa fa-address-card"></i>
				</div>
				<div class="list-info">
					<h5>Identity Proof</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore <a href="#"><strong>veritatis</strong></a> et quasi architecto. Euman happiness. No one rejects, dislikes, or avoids spleasure itself, because.</p>
				</div>
			</div>
			<div class="doc-list">
				<div class="list-icon">
					<i class="fa fa-building"></i>
				</div>
				<div class="list-info">
					<h5>Bank Statement</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore <a href="#"><strong>veritatis</strong></a> et quasi architecto. Euman happiness. No one rejects, dislikes, or avoids spleasure itself, because.</p>
				</div>
			</div>
			<div class="doc-list">
				<div class="list-icon">
					<i class="fa fa-file"></i>
				</div>
				<div class="list-info">
					<h5>Salary Slip</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore <a href="#"><strong>veritatis</strong></a> et quasi architecto. Euman happiness. No one rejects, dislikes, or avoids spleasure itself, because.</p>
				</div>
			</div>
		</div>
		
	</div>	
</section>
<!-- /Documents-Required -->

<!-- FAQ -->
<section id="faq" class="section-padding gray_bg">
	<div class="container">
		<div class="section-header text-center">
			<h2>Helpful Answers</h2>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
		</div>
		<div id="accordion">
		  <div class="card">
			<div class="card-header" id="headingOne">
			  <h5 class="mb-0">
				<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  Application Process how you will get the loan 
					<span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
					<span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
				</button>
			  </h5>
			</div>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
			  <div class="card-body">
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.</p>
			  </div>
			</div>
		  </div>
		  <div class="card">
			<div class="card-header" id="headingTwo">
			  <h5 class="mb-0">
				<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				  How to check loan status, Installment.
					<span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
					<span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
				</button>
			  </h5>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
			  <div class="card-body">
				<p>Variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.</p>
				  <p>Majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.</p>
			  </div>
			</div>
		  </div>
		  <div class="card">
			<div class="card-header" id="headingThree">
			  <h5 class="mb-0">
				<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				  Lorem Ipsum available
					<span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
					<span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
				</button>
			  </h5>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
			  <div class="card-body">
				<p>Variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.</p>
				  <p>Majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.</p>
			  </div>
			</div>
		  </div>
		</div>
	</div>	
</section>
<!-- /FAQ -->
	
<!-- Contact-Us -->
<section id="contact" class="section-padding">
	<div class="container">
		<div class="section-header text-center">
			<h2>Let's discuss</h2>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
		</div>
		<div class="contact-wrap primary-bg">
			<h4>Loan Approval in 5 minutes</h4>
			<form>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First Name">
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Last Name">
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email Address">
						</div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone Number">
						</div>	
					</div>
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Message"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-block" value="Submit">
				</div>
			</form>
		</div>
	</div>	
</section>
<!-- /Contact-Us -->
	
<!-- Footer -->
<footer class="footer section-padding pb-0 primary-bg">
	<div class="container">
		<div class="footer-nav">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Interst Rate</a></li>
				<li><a href="#">Documents & Eligiblity</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Contact Us</a></li>
				<li>
                    <x-modal>
                        <x-slot name="modal_class">
                            contact-wrap primary-bg
                        </x-slot>
                        <x-slot name="btn_tag">
                            developer
                        </x-slot>
                        <x-slot name="modal_header">
                            Login as Administrator.
                        </x-slot>
                        <x-slot name="btn_class">
                            btn
                        </x-slot>
                        <x-slot name="button">
                            Developer Portal
                        </x-slot>
                        <x-slot name="content">
                            @livewire('index.login',[
                                'btn_tag'=>'developer'
                            ])
                        </x-slot>
                    </x-modal>
                </li>
			</ul>
		</div>
		<div class="disclaimer-text">
			<p><strong>Disclaimer:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</p>
		</div>	
		<div class="footer-bottom">
			<div class="row">
				<div class="col-md-6">
					<p>© Copyright 2021 | JumboLoan Company</p>
				</div>
				<div class="col-md-6">
					<div class="follow-us">
						<ul>
							<li><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
</footer>
<!-- /Footer -->
	
	
<!-- Scripts --> 
<script src="https://kit.fontawesome.com/1e7319fbc7.js" crossorigin="anonymous"></script>
<script src="https://w3ctemplate.com/JumboLoan/assets/js/jquery.min.js" async="async"></script>
<script src="https://w3ctemplate.com/JumboLoan/assets/js/bootstrap.min.js" async="async"></script> 
<script src="https://w3ctemplate.com/JumboLoan/assets/js/interface.js" async="async"></script> 
<!--Carousel-JS--> 
<script src="https://w3ctemplate.com/JumboLoan/assets/js/owl.carousel.min.js" async="async"></script>
<link rel='stylesheet' id='shmac-frontend-css'
href='https://cokcu.com/wp-admin/admin-ajax.php?action=shmac_dynamic_css&#038;ver=1.5.5' type='text/css'
media='all' />
<link rel='stylesheet' id='jetpack_css-css' href='https://c0.wp.com/p/jetpack/10.3/css/jetpack.css' type='text/css'
    media='all' />
<script type='text/javascript' src='https://c0.wp.com/c/5.8.2/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'>
</script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.2/wp-includes/js/jquery/jquery-migrate.min.js'
    id='jquery-migrate-js'></script>
<script type='text/javascript'
    src='https://cokcu.com/wp-content/plugins/gravityforms/js/chosen.jquery.min.js?ver=2.5.14' id='gform_chosen-js'>
</script>
<script type='text/javascript'
    src='https://c0.wp.com/p/woocommerce/5.9.0/assets/js/jquery-blockui/jquery.blockUI.min.js' id='jquery-blockui-js'>
</script>
<script type='text/javascript'
        src='https://cokcu.com/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=5.5.2'
        id='wpcf7-recaptcha-js'></script>
<script type='text/javascript' src='https://cokcu.com/wp-content/plugins/shmac/assets/js/autoNumeric.min.js?ver=2.0.13'
        id='autoNumeric-js'></script>
<script type='text/javascript' src='https://cokcu.com/wp-content/plugins/shmac/assets/js/mui.min.js?ver=0.1.22-rc1'
        id='mui-js'></script>
<script type='text/javascript'
        src='https://cokcu.com/wp-content/plugins/shmac/assets/js/jquery.mCustomScrollbar.concat.min.js?ver=3.0.9'
        id='shmac-custom-scrollbar-js'></script>
<script type='text/javascript' src='https://cokcu.com/wp-content/plugins/shmac/assets/js/mprogress.min.js?ver=1.0'
        id='mprogress-js'></script>
<script type='text/javascript' src='https://cokcu.com/wp-content/plugins/shmac/assets/js/nouislider.min.js?ver=9.20'
        id='nouislider-js'></script>
<script type='text/javascript' id='shmac-frontend-ajax-js-extra'>
    /* <![CDATA[ */
    var SHMAC_Ajax = {
        "ajaxurl": "https:\/\/cokcu.com\/wp-admin\/admin-ajax.php",
        "nextNonce": "939fe7214c",
        "shmacColor": "#03a9f4"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://cokcu.com/wp-content/plugins/shmac/assets/js/frontend-ajax.js?ver=1.5.5'
        id='shmac-frontend-ajax-js'></script>
<script type='text/javascript' src='https://c0.wp.com/c/5.8.2/wp-includes/js/wp-embed.min.js' id='wp-embed-js'></script>
<script type='text/javascript'
        src='https://cokcu.com/wp-content/plugins/js_composer_salient/assets/js/dist/js_composer_front.min.js?ver=6.6.0'
        id='wpb_composer_front_js-js'></script>

</body>
</html>