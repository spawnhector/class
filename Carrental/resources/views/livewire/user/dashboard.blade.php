<div>
    <style>
        /* body.page-template-page-home {
            background-color: #121212;
        } */

    </style>
    <script src="https://kit.fontawesome.com/1e7319fbc7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://codepen.io/milesmanners/pen/JLPRaG.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <script src="https://qmixi.github.io/slide-nav/dist/slideNav.js"></script>
    <script src="https://codepen.io/milesmanners/pen/WOeOrV.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/726875/fontawesome.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/726875/solid.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://codepen.io/milesmanners/pen/XgYOPy.js"></script>
    <script src='https://autozone.templines.org/elementor/rental/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
    <script src='https://autozone.templines.org/elementor/rental/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/car-locator/inc/widget/js/jquery.geocomplete.js' id='tmpray_geocomplete-js'></script>
    <script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/car-locator/inc/markerclusterer.js?ver=5.9' id='markerclusterer-js-js'></script>
    <script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/car-locator/inc/map-cars-locator.js?ver=5.9' id='map-cars-locator-js-js'></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    @include('components.user.style.main')
    @include('components.user.script.main')
    <body class="" data-scrolling-animations="false" data-header="fixed-header">

        {{-- <div id="page-preloader">

            <div class="thecube">
                <div class="cube c1"></div>
                <div class="cube c2"></div>
                <div class="cube c4"></div>
                <div class="cube c3"></div>
            </div>
        </div> --}}
        @include('components.home.headerItems')
        <div class="layout-theme animated-css tmpl-plugins-activated " data-header="nosticky" data-header-top="2">

            @include('components.home.header')
            <div id="">
                <div class="container">
                    <div class="col nav" id="sidebar">
                        <nav>
                            <ul style="list-style-type: none;">
                                <li class="search">
                                    <input class="form-control" id="search" placeholder="Search..." />
                                    <button class="btn-search"><i class="fa fa-lg fa-search"></i></button>
                                </li>
                                <li class="nav-text">Dashboards</li>
                                <li><a class="active" href="#section1">Overview</a></li>
                                <li><a href="#section2">Rented Vehicle</a></li>
                                <li><a href="#section3">Vehicle List</a></li>
                                <li><a href="#section4">Dealers Locator</a></li>
                                <li class="nav-text">More</li>
                                <li><a href="#section5">Contact Us</a></li>
                                {{-- <li><a href="#section6">Bootstrap docs</a></li>
                                <li><a href="#section7">Light UI</a></li>
                                <li><a href="#section8">Example modal</a></li> --}}
                                <li>
                                    <div class="divider"></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col" style="margin-left: 218px;">
                        <div class="row fluid section" id="section1">
                            @include('components.user.userStat')
                        </div>
                        <div class="divider"></div>
                        <div class="row section" id="section2">
                            @include('components.user.rentedvehicle')
                        </div>
                        <div class="divider"></div>
                        <div class="row section" id="section3">
                            @include('components.user.vehiclelist')
                        </div>
                        <div class="divider"></div>
                        <div class="row section" id="section4">
                            @include('components.user.dealerslocator')
                        </div>
                        <div class="divider"></div>
                        <div class="row top section" id="section5">
                            @include('components.user.contactUs')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="csrf" value="{{csrf_token()}}">
        <script>
            window.RS_MODULES = window.RS_MODULES || {};
            window.RS_MODULES.modules = window.RS_MODULES.modules || {};
            window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
            window.RS_MODULES.defered = true;
            window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
            window.RS_MODULES.type = 'compiled';

        </script>
        <script src="https://qmixi.github.io/slide-nav/dist/slideNav.js"></script>
        <script>
            /*
                * slide-nav
                * ES6 Vanilla.js navigation plugin to simple use on one-page websites.
                * https://github.com/qmixi/slide-nav
                *
                * A project by Piotr Kumorek
                * Released under the MIT license.
                */

            window.slide = new SlideNav();

        </script>
        @include('components.user.script.updateAccount')
    </body>
</div>
