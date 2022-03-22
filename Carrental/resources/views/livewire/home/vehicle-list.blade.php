<div>
    <body class="page-template-default page page-id-104 theme-autozone  woocommerce-no-js animated-css layout-switch elementor-default elementor-kit-7" data-scrolling-animations="false" data-header="fixed-header">

        <!-- ========================== -->
        <!-- SEARCH MODAL  -->
        <!-- ========================== -->

        <div class="header-search">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <div class="navbar-search">
                            <form action="https://autozone.templines.org/elementor/rental" method="get" id="search-global-form" class="search-global">
                                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                                <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
                                <div class="search-global__note">Begin typing your search above and press return to search.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="search-close search-form_close close"><i class="fa fa-times"></i></button>
        </div>
        <div data-off-canvas="slidebar-5 left overlay" class="mobile-slidebar-menu">
            <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button">
                <span class="toggle-menu-button-icon"><span></span> <span></span> <span></span> <span></span>
                    <span></span> <span></span></span>
            </button>
            <ul id="menu-main-menu" class="yamm main-menu nav navbar-nav">
                <li id="menu-item-19550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-19550 dropdown"><a href="https://autozone.templines.org/elementor/rental/">Home</a></li>
                <li id="menu-item-7522" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-104 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-7522 dropdown"><a href="https://autozone.templines.org/elementor/rental/vehicle-listings/">Our Cars</a>
                    <ul class="dropdown-menu">
                        <li id="menu-item-19513" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-104 current_page_item menu-item-19513 dropdown"><a href="https://autozone.templines.org/elementor/rental/vehicle-listings/">Vehicle Listings</a></li>
                        <li id="menu-item-19512" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19512 dropdown"><a href="https://autozone.templines.org/elementor/rental/dealer-locator-2/">Dealer Locator</a></li>
                    </ul>
                </li>
                <li id="menu-item-19465" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19465 dropdown"><a href="https://autozone.templines.org/elementor/rental/our-app/">Get APP</a></li>
                <li id="menu-item-7456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7456 dropdown"><a href="https://autozone.templines.org/elementor/rental/blog/">Our News</a></li>
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
                            Vehicle List
                        </h1>
                        <div class="decor-1 center-block"></div>
                        <div class="breadcrumb woocommerce-breadcrumb"><a href="/">Home</a> / <a href="/list">Vehicle List</a> / <span class="current"></span></div><!-- .breadcrumbs -->
                    </div><!-- end bg-inner -->

                </div><!-- end block-title__inner -->
            </div>
            <div id="wrapper">
                <div class="container autos-container">
                    <div class="row">

                        <div class="rtd"> </div>
                        <div class="col-md-9">
                            <main class="main-content">
                                <div class="sorting" id="pix-sorting" data-ajax_scroll="">

                                    <div class="sorting__inner">
                                        <div class="sorting__item">
                                            <span class="sorting__title">Show on page</span>
                                            <div class="select jelect">
                                                <input id="jelect-page"  data-text="imagemin" type="text" class="jelect-input">
                                                <div tabindex="0" role="button" class="jelect-current">{{$page}} Autos</div>
                                                <ul class="jelect-options">
                                                    <li value="3" class="jelect-option " onclick="sortPage(this.value)">3 Autos</li>
                                                    <li value="4" class="jelect-option " onclick="sortPage(this.value)">4 Autos</li>
                                                    <li value="5" class="jelect-option " onclick="sortPage(this.value)">5 Autos</li>
                                                    <li value="6" class="jelect-option " onclick="sortPage(this.value)">6 Autos</li>
                                                    <li value="7" class="jelect-option " onclick="sortPage(this.value)">7 Autos</li>
                                                    <li value="8" class="jelect-option " onclick="sortPage(this.value)">8 Autos</li>
                                                    <li value="9" class="jelect-option jelect-option_state_active">9 Autos</li>
                                                    <li value="12" class="jelect-option " onclick="sortPage(this.value)">12 Autos</li>
                                                    <li value="15" class="jelect-option " onclick="sortPage(this.value)">15 Autos</li>
                                                    <li value="18" class="jelect-option " onclick="sortPage(this.value)">18 Autos</li>
                                                    <li value="21" class="jelect-option " onclick="sortPage(this.value)">21 Autos</li>
                                                    <li value="24" class="jelect-option " onclick="sortPage(this.value)">24 Autos</li>
                                                    <li value="27" class="jelect-option " onclick="sortPage(this.value)">27 Autos</li>
                                                    <li value="30" class="jelect-option " onclick="sortPage(this.value)">30 Autos</li>
                                                    <li value="33" class="jelect-option " onclick="sortPage(this.value)">33 Autos</li>
                                                    <li value="36" class="jelect-option " onclick="sortPage(this.value)">36 Autos</li>
                                                    <li value="39" class="jelect-option " onclick="sortPage(this.value)">39 Autos</li>
                                                    <li value="42" class="jelect-option " onclick="sortPage(this.value)">42 Autos</li>
                                                    <li value="45" class="jelect-option " onclick="sortPage(this.value)">45 Autos</li>
                                                    <li value="48" class="jelect-option " onclick="sortPage(this.value)">48 Autos</li>
                                                    <li value="51" class="jelect-option " onclick="sortPage(this.value)">51 Autos</li>
                                                    <li value="-1" class="jelect-option " onclick="sortPage(this.value)">All Autos</li>
                                                </ul>
                                                <script>
                                                    function sortPage(e){
                                                        var ele = document.getElementById('jelect-page').value
                                                        // ele = e
                                                        Livewire.emit('vehicle', ''+e+'')
                                                        // console.log(ele);
                                                    };
                                                </script>
                                            </div>
                                        </div>
                                        <div class="sorting__item">
                                            <span class="sorting__title">Sort by</span>
                                            <div class="select jelect">
                                                <input id="jelect-sort" name="sort" value="0" data-text="imagemin" type="text" class="jelect-input">
                                                <div tabindex="0" role="button" class="jelect-current">Last Added</div>
                                                <ul class="jelect-options">
                                                    <li data-val="date-desc" class="jelect-option jelect-option_state_active">Last Added</li>
                                                    <li data-val="date-asc" class="jelect-option ">First Added</li>
                                                    <li data-val="_auto_price-asc" class="jelect-option ">Cheap First</li>
                                                    <li data-val="_auto_price-desc" class="jelect-option ">Expensive First</li>
                                                    <li data-val="_auto_make-asc" class="jelect-option ">Make A-Z</li>
                                                    <li data-val="_auto_make-desc" class="jelect-option ">Make Z-A</li>
                                                    <li data-val="_auto_year-asc" class="jelect-option ">Old First</li>
                                                    <li data-val="_auto_year-desc" class="jelect-option ">New First</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="sorting__item">
                                            <input type="hidden" id="sort-purpose" name="purpose" value="">
                                        </div>
                                        <div class="sorting__item view-by">
                                            <a href="?view_type=list" class="list"><i class="fa fa-list" aria-hidden="true"></i></a>
                                            <a href="?view_type=grid" class="grid"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                        </div>

                                        <div class="sorting__item mobile-filter">
                                            <div class="mobile-menu-trigger">×</div>
                                            <span class="mobile-filter-btn">MORE OPTIONS</span>
                                        </div>
                                    </div>
                                </div><!-- end sorting -->
                                <div class="pix-dynamic-content">
                                    <div id="pixad-listing" class="list">
                                        @foreach ($cars as $item)
                                            <article class="card clearfix" id="">
                                                <div class="card__img">
                                                    <a href="https://autozone.templines.org/elementor/rental/autos/ford-mustang-gt-fastback/">
                                                        <img width="1280" height="720" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1.jpeg" class="img-responsive wp-post-image" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1.jpeg 1280w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-600x338.jpeg 600w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-300x169.jpeg 300w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-1024x576.jpeg 1024w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-768x432.jpeg 768w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-117x66.jpeg 117w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-200x113.jpeg 200w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-850x478.jpeg 850w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-320x181.jpeg 320w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2018_ford_mustang_gt_fastback_4k_16-1280x720-1-350x197.jpeg 350w" sizes="(max-width: 1280px) 100vw, 1280px" /> </a>

                                                    <span class="card__wrap-label"><span class="card__label">NEW</span></span>

                                                </div>
                                                <div class="card__inner">
                                                    <h2 class="card__title ui-title-inner"><a href="/car/{{$item->id}}">{{$item->name}}</a></h2>
                                                    <div class="decor-1"></div>
                                                    <div class="card__desc_wrap">
                                                        <div class="card__description">
                                                            <p></p>
                                                        </div>

                                                        <!-- Car Details -->
                                                        <ul class="card__list list-unstyled">
                                                            <li class="card-list__row">
                                                                <span class="card-list__title">
                                                                    Year: </span>

                                                                <span class="card-list__info">
                                                                    {{$item->year}} </span>
                                                            </li>

                                                            <li class="card-list__row">
                                                                <span class="card-list__title">
                                                                    Mileage: </span>

                                                                <span class="card-list__info">
                                                                    {{$item->mileage}} </span>
                                                            </li>

                                                            <li class="card-list__row">
                                                                <span class="card-list__title">
                                                                    Fuel: </span>
                                                                <span class="card-list__info">
                                                                    {{$item->fuel}} </span>
                                                            </li>

                                                            <li class="card-list__row">
                                                                <span class="card-list__title">
                                                                    Engine: </span>

                                                                <span class="card-list__info">
                                                                    {{$item->engine}} </span>
                                                            </li>

                                                            <li class="card-list__row">
                                                                <span class="card-list__title">
                                                                    Horsepower: </span>

                                                                <span class="card-list__info">
                                                                    200 hp </span>
                                                            </li>

                                                            <li class="card-list__row">
                                                                <span class="card-list__title">
                                                                    Drive: </span>
                                                                <span class="card-list__info">
                                                                    Rear </span>
                                                            </li>

                                                            <li class="card-list__row">
                                                                <span class="card-list__title">
                                                                    Condition: </span>
                                                                <span class="card-list__info">
                                                                    Used </span>
                                                            </li>

                                                            <li class="card-list__row">
                                                                <span class="card-list__title">
                                                                    Stock Status: </span>
                                                                <span class="card-list__info">
                                                                    In stock </span>
                                                            </li>
                                                        </ul><!-- / Car Details -->
                                                    </div>
                                                    <div class="card__price">PRICE:<span class="card__price-number">&#036;{{$item->price}}<span class="after-price-text">/ per day</span></span></div>

                                                </div>

                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                            </main><!-- end main-content -->
                        </div><!-- end col -->

                        <div class="sidebar-wrapper col-md-3 sticky-bar">
                            <aside class="sidebar ">
                                <form method="post">
                                    <section class="widget block_content widget_mod-a pixad-filter pixba-radius-search" data-field="price">
                                        <h4 class="widget-title"><span>Find By Radius</span></h4>
                                        <div class="decor-1"></div>
                                        <input type="text" name="car-locator-city" class="pixad--city" id="pixad--city" data-field="city" value="">
                                        <input type="hidden" name="pixad-car-locator-lat" class="car-locator-radius" id="pixad-car-locator-lat" data-field="lat" value="49.404762">
                                        <input type="hidden" name="pixad-car-locator-long" class="car-locator-radius" id="pixad-car-locator-long" data-field="long" value="75.499570">
                                    </section>
                                    <section class="widget block_content widget_mod-a pixad-filter pixba-radius-search" data-field="price">
                                        <div class="slider-price" id="slider-radius"></div>
                                        <span class="slider-price__wrap-input">
                                            <script>
                                                jQuery(document).ready(function() {

                                                    jQuery('#car-locator-radius').change(function() {
                                                        var map_zoom;
                                                        var radius = jQuery('#car-locator-radius').val();
                                                        if (radius <= 100) {
                                                            map_zoom = 13;
                                                        } else if (radius <= 200) {
                                                            map_zoom = 11;
                                                        } else if (radius <= 300) {
                                                            map_zoom = 8;
                                                        } else if (radius <= 500) {
                                                            map_zoom = 7;
                                                        } else if (radius <= 700) {
                                                            map_zoom = 7;
                                                        } else if (radius <= 800) {
                                                            map_zoom = 5;
                                                        } else if (radius <= 900) {
                                                            map_zoom = 5;
                                                        } else if (radius <= 1000) {
                                                            map_zoom = 4;
                                                        }
                                                        var data = {
                                                            "map_id": "clt-maps"
                                                            , "google_maps_api_key": "AIzaSyDl9xs4iIG1KcXu8gdnXkdhFbAVJpgKQiM"
                                                            , "map_zoom": map_zoom
                                                            , "map_lat": jQuery('#pixad-car-locator-lat').val()
                                                            , "map_lng": jQuery('#pixad-car-locator-long').val()
                                                            , "icon_url": "https://autozone.templines.org/elementor/rental/wp-content/plugins/car-locator/img/spotlight.png"
                                                            , "icon_width": 27
                                                            , "icon_height": 43
                                                            , "claster_width": 53
                                                            , "claster_height": 53
                                                            , "claster_text_size": 12
                                                            , "info_block_summary": "« Summary"
                                                            , "info_block_readmore": "Read more »"
                                                            , "map_styles": [{
                                                                "elementType": "geometry"
                                                                , "stylers": [{
                                                                    "color": "#212121"
                                                                }]
                                                            }, {
                                                                "elementType": "labels.icon"
                                                                , "stylers": [{
                                                                    "visibility": "off"
                                                                }]
                                                            }, {
                                                                "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#757575"
                                                                }]
                                                            }, {
                                                                "elementType": "labels.text.stroke"
                                                                , "stylers": [{
                                                                    "color": "#212121"
                                                                }]
                                                            }, {
                                                                "featureType": "administrative"
                                                                , "elementType": "geometry"
                                                                , "stylers": [{
                                                                    "color": "#757575"
                                                                }]
                                                            }, {
                                                                "featureType": "administrative.country"
                                                                , "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#9e9e9e"
                                                                }]
                                                            }, {
                                                                "featureType": "administrative.land_parcel"
                                                                , "stylers": [{
                                                                    "visibility": "off"
                                                                }]
                                                            }, {
                                                                "featureType": "administrative.locality"
                                                                , "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#bdbdbd"
                                                                }]
                                                            }, {
                                                                "featureType": "poi"
                                                                , "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#757575"
                                                                }]
                                                            }, {
                                                                "featureType": "poi.park"
                                                                , "elementType": "geometry"
                                                                , "stylers": [{
                                                                    "color": "#181818"
                                                                }]
                                                            }, {
                                                                "featureType": "poi.park"
                                                                , "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#616161"
                                                                }]
                                                            }, {
                                                                "featureType": "poi.park"
                                                                , "elementType": "labels.text.stroke"
                                                                , "stylers": [{
                                                                    "color": "#1b1b1b"
                                                                }]
                                                            }, {
                                                                "featureType": "road"
                                                                , "elementType": "geometry.fill"
                                                                , "stylers": [{
                                                                    "color": "#2c2c2c"
                                                                }]
                                                            }, {
                                                                "featureType": "road"
                                                                , "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#8a8a8a"
                                                                }]
                                                            }, {
                                                                "featureType": "road.arterial"
                                                                , "elementType": "geometry"
                                                                , "stylers": [{
                                                                    "color": "#373737"
                                                                }]
                                                            }, {
                                                                "featureType": "road.highway"
                                                                , "elementType": "geometry"
                                                                , "stylers": [{
                                                                    "color": "#3c3c3c"
                                                                }]
                                                            }, {
                                                                "featureType": "road.highway.controlled_access"
                                                                , "elementType": "geometry"
                                                                , "stylers": [{
                                                                    "color": "#4e4e4e"
                                                                }]
                                                            }, {
                                                                "featureType": "road.local"
                                                                , "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#616161"
                                                                }]
                                                            }, {
                                                                "featureType": "transit"
                                                                , "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#757575"
                                                                }]
                                                            }, {
                                                                "featureType": "water"
                                                                , "elementType": "geometry"
                                                                , "stylers": [{
                                                                    "color": "#000000"
                                                                }]
                                                            }, {
                                                                "featureType": "water"
                                                                , "elementType": "labels.text.fill"
                                                                , "stylers": [{
                                                                    "color": "#3d3d3d"
                                                                }]
                                                            }]
                                                            , "photos": [{
                                                                "phone": "123456789"
                                                                , "company": "\u041d\u044c\u044e-\u0419\u043e\u0440\u043a, \u0421\u0428\u0410"
                                                                , "img": "https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/uploads\/2022\/01\/dealer-stores.jpeg"
                                                                , "latitude": "53.9006011"
                                                                , "longitude": "27.558972"
                                                            }, {
                                                                "phone": "123456789"
                                                                , "company": "\u041b\u043e\u043d\u0434\u043e\u043d, \u0412\u0435\u043b\u0438\u043a\u043e\u0431\u0440\u0438\u0442\u0430\u043d\u0438\u044f"
                                                                , "img": "https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/uploads\/2022\/01\/dealer-stores.jpeg"
                                                                , "latitude": "51.5072178"
                                                                , "longitude": "-0.1275862"
                                                            }, {
                                                                "phone": "123456789"
                                                                , "company": "\u041f\u043e\u043b\u044c\u0448\u0430"
                                                                , "img": "https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/uploads\/2022\/01\/dealer-stores.jpeg"
                                                                , "latitude": "51.919438"
                                                                , "longitude": "19.145136"
                                                            }, {
                                                                "phone": "123456789"
                                                                , "company": "\u0411\u0430\u0440\u0441\u0435\u043b\u043e\u043d\u0430, \u0418\u0441\u043f\u0430\u043d\u0438\u044f"
                                                                , "img": "https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/uploads\/2022\/01\/dealer-stores.jpeg"
                                                                , "latitude": "49.81749199999999"
                                                                , "longitude": "15.472962"
                                                            }, {
                                                                "phone": "123456789"
                                                                , "company": "\u0411\u0435\u043b\u044c\u0433\u0438\u044f"
                                                                , "img": "https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/uploads\/2022\/01\/dealer-stores.jpeg"
                                                                , "latitude": "50.503887"
                                                                , "longitude": "4.469936"
                                                            }]
                                                        };

                                                        mapCarsLocator.init(data);
                                                    });

                                                    //if( !jQuery('.pixad--city').val() ) {
                                                    //   jQuery('#radius-reset-show-hide').hide();
                                                    // }
                                                    // jQuery('.pixad--city').keyup(function() {
                                                    //     jQuery('#radius-reset-show-hide').show();
                                                    // });

                                                })

                                            </script>
                                            <input type="hidden" name="pixad-car-locator-radius" class="car-locator-radius" id="car-locator-radius" data-field="radius" value="">
                                            <input type="hidden" id="pix-min-radius" value="0">
                                            <input type="hidden" id="pix-max-radius" value="1000">
                                            <span>Radius</span>
                                            <input type="number" id="pixba_radius_max" class="pixba-radius-widget" readonly value="1000">
                                            <div class="btn-filter wrap__btn-skew-r js-filter" id="radius-reset-show-hide">
                                                <button data-href="http://autozone.templines.org/elementor/rental/vehicle-listings/" id="pixad-reset-button" class="btn-skew-r btn-effect"><span class="btn-skew-r__inner">Reset Filter</span></button>

                                            </div>
                                        </span>
                                    </section>
                                </form>
                                <div class="wrap-filter">

                                    <section class="widget block_content widget_mod-a pixad-filter" data-type="number" data-field="price">
                                        <h4 class="widget-title"><span>Price Range</span></h4>
                                        <div class="decor-1"></div>
                                        <div class="widget-content">
                                            <div class="slider-price" id="slider-price-two"></div>
                                            <span class="slider-price__wrap-input">
                                                <input data-type="number" data-field="price" class="slider-price__input" id="slider-price_min-two" name="pixad-price" value="0">
                                                <input type="hidden" data-type="number" data-field="price" class="slider-price__input" id="slider-price_max-two" name="pixad-price">
                                                <input type="hidden" id="pix-min-price-two" value="00">
                                                <input type="hidden" id="pix-max-price-two" value="3340">
                                                <input type="hidden" id="pix-max-slider-price-two" value="100000">
                                                <input type="hidden" id="pix-currency-symbol" value="&#036;">

                                                <input type="hidden" id="pix-thousand-two" value=",">
                                                <input type="hidden" id="pix-decimal-two" value=".">
                                                <input type="hidden" id="pix-decimal_number-two" value="0">
                                            </span>
                                        </div>
                                    </section>
                                    <section class="widget block_content widget_mod-a pixad-filter" data-type="check" data-field="body">
                                        <h4 class="widget-title"><span>Vehicle Body Type</span></h4>
                                        <div class="decor-1"></div>
                                        <div class="widget-content">
                                            <ul class="list-categories body-categories list-unstyled">
                                                <li class="list-categories__item">
                                                    <input data-type="check" data-field="body" type="checkbox" name="pixad-body" id="luxury-cars" value="luxury-cars">
                                                    <label for="luxury-cars">
                                                        <div class="body-icon-wrapper">
                                                            <img src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2022/01/convert-mini.png" alt="Luxury Cars"> </div>
                                                        <span class="auto_body_name">Luxury Cars</span>

                                                    </label>
                                                </li>
                                                <li class="list-categories__item">
                                                    <input data-type="check" data-field="body" type="checkbox" name="pixad-body" id="sports" value="sports">
                                                    <label for="sports">
                                                        <div class="body-icon-wrapper">
                                                            <img src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2022/01/coupe-mini.png" alt="Sports"> </div>
                                                        <span class="auto_body_name">Sports</span>

                                                    </label>
                                                </li>
                                                <li class="list-categories__item">
                                                    <input data-type="check" data-field="body" type="checkbox" name="pixad-body" id="suvs" value="suvs">
                                                    <label for="suvs">
                                                        <div class="body-icon-wrapper">
                                                            <img src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2022/01/suv-mini.png" alt="SUVS"> </div>
                                                        <span class="auto_body_name">SUVS</span>

                                                    </label>
                                                </li>
                                                <li class="list-categories__item">
                                                    <input data-type="check" data-field="body" type="checkbox" name="pixad-body" id="truck" value="truck">
                                                    <label for="truck">
                                                        <div class="body-icon-wrapper">
                                                            <img src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2022/01/picup-mini.png" alt="Truck"> </div>
                                                        <span class="auto_body_name">Truck</span>

                                                    </label>
                                                </li>
                                                <li class="list-categories__item">
                                                    <input data-type="check" data-field="body" type="checkbox" checked name="pixad-body" id="vans-trucks" value="vans-trucks">
                                                    <label for="vans-trucks">
                                                        <div class="body-icon-wrapper">
                                                            <img src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2022/01/picup-mini.png" alt="VANS &amp; TRUCKS"> </div>
                                                        <span class="auto_body_name">VANS &amp; TRUCKS</span>

                                                    </label>
                                                </li>
                                                <li class="list-categories__item">
                                                    <input data-type="check" data-field="body" type="checkbox" name="pixad-body" id="sedans" value="sedans">
                                                    <label for="sedans">
                                                        <div class="body-icon-wrapper">
                                                            <img src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2022/01/sedan-mini.png" alt="Sedans"> </div>
                                                        <span class="auto_body_name">Sedans</span>

                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </section>
                                </div>

                                <div class="btn">
                                    <div class="btn-filter wrap__btn-skew-r js-filter">
                                        <button data-href="http://autozone.templines.org/elementor/rental/vehicle-listings/" id="pixad-reset-button" class="btn-skew-r btn-effect"><span class="btn-skew-r__inner">Reset Filter</span></button>
                                    </div>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
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
    </body>
</div>
