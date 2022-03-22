<div>
    
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-booking-auto/js/preview-calendar.js?ver=5.9' id='pix-preview-calendar-js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-booking-auto/js/pix-booking-auto.js?ver=5.9' id='pix-booking-auto-js-js'></script>
    <body class="pixad-autos-template-default single single-pixad-autos postid-16641 theme-autozone  woocommerce-no-js animated-css layout-switch elementor-default elementor-kit-7" data-scrolling-animations="false" data-header="fixed-header">
        <!-- ========================== -->
        <!-- SEARCH MODAL  -->
        <!-- ========================== -->
        <div data-off-canvas="slidebar-5 left overlay" class="mobile-slidebar-menu">
            <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button">
                <span class="toggle-menu-button-icon"><span></span> <span></span> <span></span> <span></span>
                    <span></span> <span></span></span>
            </button>
            <ul id="menu-main-menu" class="yamm main-menu nav navbar-nav">
                <li id="menu-item-19550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-19550 dropdown"><a href="https://autozone.templines.org/elementor/rental/">Home</a></li>
                <li id="menu-item-7522" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7522 dropdown"><a href="https://autozone.templines.org/elementor/rental/vehicle-listings/">Our Cars</a>
                    <ul class="dropdown-menu">
                        <li id="menu-item-19513" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19513 dropdown"><a href="https://autozone.templines.org/elementor/rental/vehicle-listings/">Vehicle Listings</a></li>
                        <li id="menu-item-19512" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19512 dropdown"><a href="https://autozone.templines.org/elementor/rental/dealer-locator-2/">Dealer Locator</a></li>
                    </ul>
                </li>
                <li id="menu-item-19465" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19465 dropdown"><a href="https://autozone.templines.org/elementor/rental/our-app/">Get APP</a></li>
                <li id="menu-item-7456" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-7456 dropdown"><a href="https://autozone.templines.org/elementor/rental/blog/">Our News</a></li>
                <li id="menu-item-7529" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7529 dropdown"><a href="https://autozone.templines.org/elementor/rental/contact/">Contact</a></li>
            </ul>


        </div>
        <div class="layout-theme animated-css tmpl-plugins-activated " data-header="nosticky" data-header-top="2">

            @include('components.home.header')
            <div class="block-title">


                <div class="block-title__inner section-bg section-bg_second" style="background-image:url(
                  https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/images/page-img.jpg);">

                    <span class="vc_row-overlay" style="background-color: rgba(0,0,0,0.8) !important;"></span>
                    <div class="bg-inner">


                        <h1 class="ui-title-page">
                            {{$vehicle->name}} 
                        </h1>
                        <div class="decor-1 center-block"></div>
                        <div class="breadcrumb woocommerce-breadcrumb"><a href="/">Home</a> / <a href="/list">Cars</a> / <span class="current">{{$vehicle->name}}</span></div><!-- .breadcrumbs -->
                    </div><!-- end bg-inner -->

                </div><!-- end block-title__inner -->
            </div>

            <div id="wrapper">

                <div class="container">
                    <div class="row">

                        <div class="col-md-8">
                            <main class="main-content">
                                <article class="car-details">

                                    <div class="car-details__wrap-title clearfix">
                                        <h2 class="car-details__title">{{$vehicle->name}}</h2>

                                    </div>

                                    <div id="slider-product" class="flexslider slider-product">
                                        <span class="card__wrap-label"><span class="card__label">NEW</span></span>
                                        <ul class="slides fl-magic-popup fl-gallery-popup">

                                            <li><a class="prettyPhoto" rel="prettyPhoto[gallery1]" href="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1.jpeg"><img width="750" height="420" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-750x420.jpeg" class="attachment-autozone-auto-single_crop size-autozone-auto-single_crop wp-post-image" alt="" title="Ford Mustang" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-750x420.jpeg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-300x169.jpeg 300w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-117x66.jpeg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-200x113.jpeg 200w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-350x197.jpeg 350w" sizes="(max-width: 750px) 100vw, 750px" /></a></li>
                                            <li class="prettyPhoto" rel="prettyPhoto[gallery1]"><iframe src="https://www.youtube.com/embed/tIGOQiYPUbA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
                                            <li><a class="prettyPhoto sas" rel="prettyPhoto[gallery1]" href="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery02.jpeg" title="gallery06"><img width="750" height="420" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery02-750x420.jpeg" class="attachment-autozone-auto-single_crop size-autozone-auto-single_crop" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery02-750x420.jpeg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery02-117x66.jpeg 117w" sizes="(max-width: 750px) 100vw, 750px" /></a></li>
                                            <li><a class="prettyPhoto sas" rel="prettyPhoto[gallery1]" href="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery06.jpeg" title="gallery05"><img width="750" height="420" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery06-750x420.jpeg" class="attachment-autozone-auto-single_crop size-autozone-auto-single_crop" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery06-750x420.jpeg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery06-117x66.jpeg 117w" sizes="(max-width: 750px) 100vw, 750px" /></a></li>
                                            <li><a class="prettyPhoto sas" rel="prettyPhoto[gallery1]" href="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery05.jpeg" title="gallery05"><img width="750" height="420" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery05-750x420.jpeg" class="attachment-autozone-auto-single_crop size-autozone-auto-single_crop" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery05-750x420.jpeg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery05-117x66.jpeg 117w" sizes="(max-width: 750px) 100vw, 750px" /></a></li>
                                            <li><a class="prettyPhoto sas" rel="prettyPhoto[gallery1]" href="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery03.jpg" title="gallery03"><img width="750" height="420" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery03-750x420.jpg" class="attachment-autozone-auto-single_crop size-autozone-auto-single_crop" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery03-750x420.jpg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery03-117x66.jpg 117w" sizes="(max-width: 750px) 100vw, 750px" /></a></li>
                                            <li><a class="prettyPhoto sas" rel="prettyPhoto[gallery1]" href="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery07.jpg" title="gallery07"><img width="750" height="420" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery07-750x420.jpg" class="attachment-autozone-auto-single_crop size-autozone-auto-single_crop" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery07-750x420.jpg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery07-117x66.jpg 117w" sizes="(max-width: 750px) 100vw, 750px" /></a></li>
                                        </ul>

                                    </div>
                                    <div id="carousel-product" class="flexslider carousel-product">
                                        <ul class="slides">
                                            <li><img width="117" height="66" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-117x66.jpeg" class="attachment-autozone-auto-thumb size-autozone-auto-thumb wp-post-image" alt="" loading="lazy" title="Ford Mustang" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-117x66.jpeg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-600x338.jpeg 600w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-300x169.jpeg 300w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-1024x576.jpeg 1024w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-768x432.jpeg 768w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-200x113.jpeg 200w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-850x478.jpeg 850w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-750x420.jpeg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-320x181.jpeg 320w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-350x197.jpeg 350w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1.jpeg 1280w" sizes="(max-width: 117px) 100vw, 117px" /></li>
                                            <li class="auto-thumb-video"><img src="http://img.youtube.com/vi/tIGOQiYPUbA/0.jpg" /></li>
                                            <li><img width="117" height="66" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery02-117x66.jpeg" class="attachment-autozone-auto-thumb size-autozone-auto-thumb" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery02-117x66.jpeg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery02-750x420.jpeg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery02-320x181.jpeg 320w" sizes="(max-width: 117px) 100vw, 117px" /></li>
                                            <li><img width="117" height="66" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery06-117x66.jpeg" class="attachment-autozone-auto-thumb size-autozone-auto-thumb" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery06-117x66.jpeg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery06-750x420.jpeg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery06-320x181.jpeg 320w" sizes="(max-width: 117px) 100vw, 117px" /></li>
                                            <li><img width="117" height="66" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery05-117x66.jpeg" class="attachment-autozone-auto-thumb size-autozone-auto-thumb" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery05-117x66.jpeg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery05-750x420.jpeg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/gallery05-320x181.jpeg 320w" sizes="(max-width: 117px) 100vw, 117px" /></li>
                                            <li><img width="117" height="66" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery03-117x66.jpg" class="attachment-autozone-auto-thumb size-autozone-auto-thumb" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery03-117x66.jpg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery03-750x420.jpg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery03-320x181.jpg 320w" sizes="(max-width: 117px) 100vw, 117px" /></li>
                                            <li><img width="117" height="66" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery07-117x66.jpg" class="attachment-autozone-auto-thumb size-autozone-auto-thumb" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery07-117x66.jpg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery07-750x420.jpg 750w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2016/10/gallery07-320x181.jpg 320w" sizes="(max-width: 117px) 100vw, 117px" /></li>
                                        </ul>
                                    </div>

                                    <div class="wrap-nav-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Vehicle Description</a></li>

                                            <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Equipment</a></li>

                                            <li class=""><a href="#tab9" data-toggle="tab" aria-expanded="false">Specifications</a></li>



                                            <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            {{$vehicle->description}}
                                        </div>
                                        <div class="tab-pane" id="tab8">
                                        </div>
                                        <div class="tab-pane" id="tab9">
                                            <section class="widget widget-auto-page">
                                                <div class="widget-content">
                                                    <dl class="data-list-descriptions">
                                                        <!-- Make -->
                                                        <div class="dd-item">
                                                            <dt>Make:</dt>
                                                            <dd>DODGE</dd>
                                                        </div>


                                                        <div class="dd-item">
                                                            <dt class="left">Stock status:</dt>
                                                            <dd class="right">In stock</dd>
                                                        </div>

                                                        <!-- Made Year -->
                                                        <div class="dd-item">
                                                            <dt class="left">Made Year:</dt>
                                                            <dd class="right">2012</dd>
                                                        </div>
                                                        <!-- / Made Year -->

                                                        <!-- Mileage -->
                                                        <div class="dd-item">
                                                            <dt class="left">Mileage:</dt>
                                                            <dd class="right">7,567</dd>
                                                        </div>
                                                        <!-- / Mileage -->

                                                        <!-- VIN -->
                                                        <div class="dd-item">
                                                            <dt class="left">VIN:</dt>
                                                            <dd class="right">ERT34HDGSIUY</dd>
                                                        </div>
                                                        <!-- / VIN -->

                                                        <!-- Version -->
                                                        <div class="dd-item">
                                                            <dt class="left">Version:</dt>
                                                            <dd class="right">1.9 hdi</dd>
                                                        </div>
                                                        <!-- / Version -->

                                                        <!-- Fuel -->
                                                        <div class="dd-item">
                                                            <dt class="left">Fuel:</dt>
                                                            <dd class="right">Petrol+CNG</dd>
                                                        </div>
                                                        <!-- / Fuel -->

                                                        <!-- Engine -->
                                                        <div class="dd-item">
                                                            <dt class="left">Engine (cm3):</dt>
                                                            <dd class="right">1900</dd>
                                                        </div>
                                                        <!-- / Engine -->

                                                        <!-- Horsepower -->
                                                        <div class="dd-item">
                                                            <dt class="left">Horsepower (hp):</dt>
                                                            <dd class="right">200</dd>
                                                        </div>
                                                        <!-- / Horsepower -->

                                                        <!-- Transmission -->
                                                        <div class="dd-item">
                                                            <dt class="left">Transmission:</dt>
                                                            <dd class="right">Manual</dd>
                                                        </div>
                                                        <!-- / Transmission -->


                                                        <!-- Condition -->
                                                        <div class="dd-item">
                                                            <dt class="left">Condition:</dt>
                                                            <dd class="right">Used</dd>
                                                        </div>
                                                        <!-- / Condition -->

                                                        <!-- Drive -->
                                                        <div class="dd-item">
                                                            <dt class="left">Drive:</dt>
                                                            <dd class="right">Rear</dd>
                                                        </div>
                                                        <!-- / Drive -->
                                                        <!-- Price Type -->
                                                        <div class="dd-item">
                                                            <dt class="left">Price Type:</dt>
                                                            <dd class="right">Fixed</dd>
                                                        </div>
                                                        <!-- / Price Type -->

                                                        <!-- Warranty -->
                                                        <div class="dd-item">
                                                            <dt class="left">Warranty:</dt>
                                                            <dd class="right">Yes</dd>

                                                        </div>
                                                    </dl>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="tab-pane " id="tab2">

                                            <ul class="pixad-features-list">
                                                <li class="pixad-exist "><i class="features-icon">+</i>Air conditioning</li>
                                                <li class="pixad-exist "><i class="features-icon">+</i>Leather interior</li>
                                                <li class="pixad-exist "><i class="features-icon">+</i>Xenon</li>
                                                <li class="pixad-exist "><i class="features-icon">+</i>Parking sensors</li>
                                                <li class="pixad-exist "><i class="features-icon">+</i>Alloy wheels</li>
                                                <li class="pixad-exist "><i class="features-icon">+</i>Cruise control</li>
                                                <li class="pixad-exist "><i class="features-icon">+</i>ABS</li>
                                                <li class="pixad-exist "><i class="features-icon">+</i>ESP</li>
                                            </ul>

                                        </div>

                                        <div class="tab-pane " id="tab7">
                                        </div>

                                        <div class="tab-pane " id="tab3">
                                            <div class="rtd auto_contact_desc">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <dl class="list-descriptions list-unstyled">


                                                        <div class="dd-item">
                                                            <dt class="left">First Name:</dt>
                                                            <dd class="right">Sergio</dd>
                                                        </div>

                                                        <div class="dd-item">
                                                            <dt class="left">Last Name:</dt>
                                                            <dd class="right">Garza</dd>
                                                        </div>

                                                        <div class="dd-item">
                                                            <dt class="left">Company:</dt>
                                                            <dd class="right">General Motors</dd>
                                                        </div>

                                                        <div class="dd-item">
                                                            <dt class="left">Phone:</dt>
                                                            <dd class="right">+123 4567 890</dd>
                                                        </div>


                                                        <div class="dd-item">
                                                            <dt class="left">Country:</dt>
                                                            <dd class="right">US</dd>
                                                        </div>

                                                        <div class="dd-item">
                                                            <dt class="left">State:</dt>
                                                            <dd class="right">Texas</dd>
                                                        </div>

                                                        <div class="dd-item">
                                                            <dt class="left">Town:</dt>
                                                            <dd class="right">Atlanta</dd>
                                                        </div>

                                                    </dl>
                                                </div>
                                                <div class="col-md-8">
                                                    <style>
                                                        #contact-map {
                                                            width: 100%;
                                                            height: 400px;
                                                            margin: 0 auto;
                                                        }

                                                    </style>

                                                    <div id="contact-map"></div>

                                                    <script type="text/javascript">
                                                        function initMap() {

                                                            var styles = [{
                                                                    "featureType": "administrative"
                                                                    , "elementType": "all"
                                                                    , "stylers": [{
                                                                            "visibility": "on"
                                                                        }
                                                                        , {
                                                                            "saturation": -100
                                                                        }
                                                                        , {
                                                                            "lightness": 20
                                                                        }
                                                                    ]
                                                                }
                                                                , {
                                                                    "featureType": "road"
                                                                    , "elementType": "all"
                                                                    , "stylers": [{
                                                                            "visibility": "on"
                                                                        }
                                                                        , {
                                                                            "saturation": -100
                                                                        }
                                                                        , {
                                                                            "lightness": 40
                                                                        }
                                                                    ]
                                                                }
                                                                , {
                                                                    "featureType": "water"
                                                                    , "elementType": "all"
                                                                    , "stylers": [{
                                                                            "visibility": "on"
                                                                        }
                                                                        , {
                                                                            "saturation": -10
                                                                        }
                                                                        , {
                                                                            "lightness": 30
                                                                        }
                                                                    ]
                                                                }
                                                                , {
                                                                    "featureType": "landscape.man_made"
                                                                    , "elementType": "all"
                                                                    , "stylers": [{
                                                                            "visibility": "simplified"
                                                                        }
                                                                        , {
                                                                            "saturation": -60
                                                                        }
                                                                        , {
                                                                            "lightness": 10
                                                                        }
                                                                    ]
                                                                }
                                                                , {
                                                                    "featureType": "landscape.natural"
                                                                    , "elementType": "all"
                                                                    , "stylers": [{
                                                                            "visibility": "simplified"
                                                                        }
                                                                        , {
                                                                            "saturation": -60
                                                                        }
                                                                        , {
                                                                            "lightness": 60
                                                                        }
                                                                    ]
                                                                }
                                                                , {
                                                                    "featureType": "poi"
                                                                    , "elementType": "all"
                                                                    , "stylers": [{
                                                                            "visibility": "off"
                                                                        }
                                                                        , {
                                                                            "saturation": -100
                                                                        }
                                                                        , {
                                                                            "lightness": 60
                                                                        }
                                                                    ]
                                                                }
                                                                , {
                                                                    "featureType": "transit"
                                                                    , "elementType": "all"
                                                                    , "stylers": [{
                                                                            "visibility": "off"
                                                                        }
                                                                        , {
                                                                            "saturation": -100
                                                                        }
                                                                        , {
                                                                            "lightness": 60
                                                                        }
                                                                    ]
                                                                }
                                                            ];
                                                            
                                                                // Create a map object and specify the DOM element for display.
                                                                var map = new google.maps.Map(document.getElementById("contact-map"), {
                                                                    center: myLatLng
                                                                    , scrollwheel: false
                                                                    , zoom: 15
                                                                });

                                                            var marker = new google.maps.Marker({
                                                                position: myLatLng
                                                                , map: map
                                                                , title: address
                                                            });

                                                            map.setOptions({
                                                                styles: styles
                                                            });

                                                        }

                                                    </script>


                                                </div>
                                            </div>
                                        </div>
                                </article>

                                <div class="wrap-section-border">

                                    <section class="section_letter section-bg section-bg_primary">
                                        <div class="letter bg-inner">
                                            <div class="letter__inner">
                                                <h2 class="letter__title">Do you want some modifications or schedule a test drive ?</h2>
                                                Integer tor bibendum estnu faucibus gravida aliquam nu lectus lacina lorem ipsum dolor sit amet consectetur adipisicing.
                                            </div>

                                            <div class="letter__btn wrap-social-block wrap-social-block_mod-a">

                                                <a class="social-block social-block_mod-a btn-effect" data-toggle="modal" data-target="#single-pixad-autos-modal">
                                                    <div class="social-block__inner">send details</div>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="border-section-bottom border-section-bottom_mod-a"></div>
                                    </section>


                                </div>
                                <script>
                                    jQuery.noConflict()(function($) {
                                        jQuery(".booking-field-extra").on("click", function() {
                                            var pixba_id = '#pixba_booking_extra_hidden_' + jQuery(this).data('name');
                                            if (jQuery(this).is(':checked')) {
                                                jQuery(pixba_id).prop('checked', true);
                                            } else {
                                                jQuery(pixba_id).prop('checked', false);
                                            }
                                            var numberOfChecked = ': +' + jQuery('.pixba_booking_extra_hidden:checked').length + ' added';
                                            jQuery('#extra_checked_count').html(numberOfChecked);
                                        });
                                    });

                                </script>
                            </main>
                        </div>
                        @include('components.sidebar')
                    </div>
                </div>
                @if (Auth::check())
                    @if (count(auth()->user()->rentedById($slug)) == 0)
                        @include('components.modal2')
                        <script>
                            $(document).ready(function(){
                                if (sessionStorage.getItem("bookingInfo")) {
                                    let sessInfo = sessionStorage.getItem("bookingInfo");
                                    let checj = window.location.pathname.split('/')
                                    if (checj[2] == sessInfo[0]) {
                                        $('.global-modal').toggleClass('global-modal-show');
                                        $('body').toggleClass('noscroll')
                                        getLocation();
                                    }
                                }
                            });
                        </script>
                    @endif
                @endif
                @include('components.modal')
                @include('components.home.footer')
            </div>
        </div>
        <div class="pix-ajax-loader">
            <div id="cssload-wrapper">
                <div class="cssload-loader">
                    <div class="cssload-line"></div>
                    <div class="cssload-line"></div>
                    <div class="cssload-line"></div>
                    <div class="cssload-line"></div>
                    <div class="cssload-line"></div>
                    <div class="cssload-line"></div>
                    <div class="cssload-subline"></div>
                    <div class="cssload-subline"></div>
                    <div class="cssload-subline"></div>
                    <div class="cssload-subline"></div>
                    <div class="cssload-subline"></div>
                    <div class="cssload-loader-circle-1">
                        <div class="cssload-loader-circle-2"></div>
                    </div>
                    <div class="cssload-needle"></div>
                    <div class="cssload-loading">loading</div>
                </div>
            </div>
        </div>
        <script>
            window.RS_MODULES = window.RS_MODULES || {};
            window.RS_MODULES.modules = window.RS_MODULES.modules || {};
            window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
            window.RS_MODULES.defered = true;
            window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
            window.RS_MODULES.type = 'compiled';

        </script>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-dark-grayscale">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 0.49803921568627" />
                        <feFuncG type="table" tableValues="0 0.49803921568627" />
                        <feFuncB type="table" tableValues="0 0.49803921568627" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-grayscale">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 1" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0 1" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-yellow">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-red">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 1" />
                        <feFuncG type="table" tableValues="0 0.27843137254902" />
                        <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-midnight">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0 0" />
                        <feFuncG type="table" tableValues="0 0.64705882352941" />
                        <feFuncB type="table" tableValues="0 1" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-magenta-yellow">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.78039215686275 1" />
                        <feFuncG type="table" tableValues="0 0.94901960784314" />
                        <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-purple-green">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                        <feFuncG type="table" tableValues="0 1" />
                        <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
            <defs>
                <filter id="wp-duotone-blue-orange">
                    <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                    <feComponentTransfer color-interpolation-filters="sRGB">
                        <feFuncR type="table" tableValues="0.098039215686275 1" />
                        <feFuncG type="table" tableValues="0 0.66274509803922" />
                        <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                        <feFuncA type="table" tableValues="1 1" />
                    </feComponentTransfer>
                    <feComposite in2="SourceGraphic" operator="in" />
                </filter>
            </defs>
        </svg>
        <link rel='stylesheet' id='rs-plugin-settings-css' href='https://autozone.templines.org/elementor/rental/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.10' media='all' />
        <style id='rs-plugin-settings-inline-css'>
            #rs-demo-id {}

        </style>
        <style>
            #clt-maps {
                height: 550px
            }
        </style>
        <style>
            #dlc_dealers-maps {
                height: 550px
            }
        </style>
    </body>
</div>
