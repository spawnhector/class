@extends('welcome')


@section('body')

    <style>
        .swal2-show {
            top: 30px;
            right: 9px;
        }

        .swal2-title {
            text-transform: uppercase;
            color: #EE244C;
        }

        .swal2-file {
            opacity: 0;
        }

        /* .swal2-input{
                        border: none;
                  border-bottom: solid 1px #ccc;
                  width: 100%;
                  padding: 10px 0;
                  transition: border-color 0.2s ease, box-shadow 0.2s ease;
                    }
                    .swal2-input:focus{
                        outline: none;
                  border-color: #20cfb8;
                  box-shadow: 0 1px 0 0 #20cfb8;
                    } */
        .swal2-input[type=number] {
            max-width: 16em;
        }

        .swal2-input[type=number]:focus {
            outline: none;
        }

    </style>
    <style>
        .swal2-popup.swal2-toast .swal2-html-container input {
            width: 36px;
            height: 20px;
            line-height: 20px;
            font-size: 20px;
            text-align: center;
            border: none;
            border-bottom: 1px solid gray;
            margin: 5px;
        }

        .swal2-actions {
            z-index: 0;
        }

        .country-select .country-list {
            position: fixed;
        }
        .iti__country-list {
            position: fixed;
        }

        .swal2-popup.swal2-toast .swal2-html-container {
            text-align: center
        }

        .swal2-popup.swal2-toast .swal2-title {
            font-size: 15px;
            margin: 5px;
        }

        .register-email {
            border: 1px solid #ee244c;
            border-radius: 15px;
            padding: 0px 10px 4px 10px;
            background-color: #7367f0;
            color: white;
            margin-top: 10px;
        }

        .swal2-popup.swal2-toast .swal2-styled {
            font-size: 12px;
        }

        .swal2-styled.swal2-confirm {
            font-size: 12px;
        }

        .swal2-styled.swal2-cancel {
            font-size: 12px;
        }

        #load {
            position: absolute;
            font-size: 22px;
            width: 600px;
            height: 36px;
            left: 50%;
            top: 20%;
            margin-left: -508px;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
        }

        #load div {
            position: absolute;
            width: 20px;
            height: 36px;
            opacity: 0;
            font-family: Helvetica, Arial, sans-serif;
            animation: move 2s linear infinite;
            -o-animation: move 2s linear infinite;
            -moz-animation: move 2s linear infinite;
            -webkit-animation: move 2s linear infinite;
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            color: #ff2933;
        }

        #load div:nth-child(2) {
            animation-delay: 0.2s;
            -o-animation-delay: 0.2s;
            -moz-animation-delay: 0.2s;
            -webkit-animation-delay: 0.2s;
        }

        #load div:nth-child(3) {
            animation-delay: 0.4s;
            -o-animation-delay: 0.4s;
            -webkit-animation-delay: 0.4s;
            -webkit-animation-delay: 0.4s;
        }

        #load div:nth-child(4) {
            animation-delay: 0.6s;
            -o-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            -webkit-animation-delay: 0.6s;
        }

        #load div:nth-child(5) {
            animation-delay: 0.8s;
            -o-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            -webkit-animation-delay: 0.8s;
        }

        #load div:nth-child(6) {
            animation-delay: 1s;
            -o-animation-delay: 1s;
            -moz-animation-delay: 1s;
            -webkit-animation-delay: 1s;
        }

        #load div:nth-child(7) {
            animation-delay: 1.2s;
            -o-animation-delay: 1.2s;
            -moz-animation-delay: 1.2s;
            -webkit-animation-delay: 1.2s;
        }

        @keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }

            35% {
                left: 41%;
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            65% {
                left: 59%;
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            100% {
                left: 100%;
                -moz-transform: rotate(-180deg);
                -webkit-transform: rotate(-180deg);
                -o-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-moz-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }

            35% {
                left: 41%;
                -moz-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            65% {
                left: 59%;
                -moz-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            100% {
                left: 100%;
                -moz-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }

            35% {
                left: 41%;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            65% {
                left: 59%;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            100% {
                left: 100%;
                -webkit-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

        @-o-keyframes move {
            0% {
                left: 0;
                opacity: 0;
            }

            35% {
                left: 41%;
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            65% {
                left: 59%;
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
                opacity: 1;
            }

            100% {
                left: 100%;
                -o-transform: rotate(-180deg);
                transform: rotate(-180deg);
                opacity: 0;
            }
        }

    </style>
    <main id="main">
        <div class="container">
            <!--MAIN SLIDE-->
            <div class="wrap-main-slide">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                    data-dots="false">
                    {!! $course_slide !!}
                </div>
            </div>

            <!--BANNER-->
            <div class="wrap-banner style-twin-default">
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="{{ asset('image/home-1-banner-1.jpg') }}" alt="" width="580" height="190">
                        </figure>
                    </a>
                </div>
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="{{ asset('image/home-1-banner-2.jpg') }}" alt="" width="580" height="190">
                        </figure>
                    </a>
                </div>
            </div>

            <!--On Sale-->
            @if ($course_sale != null)
                <div class="wrap-show-advance-info-box style-1 has-countdown">
                    <h3 class="title-box">Course On Sale</h3>
                    <div class="wrap-countdown mercado-countdown" data-expire={{ $course_end_date }}></div>
                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5"
                        data-loop="false" data-nav="true" data-dots="false"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                        {!! $course_sale !!}

                    </div>
                </div>
            @endif

            <!--Latest Products-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Latest Products</h3>
                <div class="wrap-top-banner">
                    <a href="#" class="link-banner banner-effect-2">
                        <figure><img src="{{ asset('image/digital-electronic-banner.jpg') }}" width="1170" height="240"
                                alt=""></figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="digital_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('image/products/digital_04.jpg') }}"
                                                        width="800" height="800"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                    Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('image/products/digital_17.jpg') }}"
                                                        width="800" height="800"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                    Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('image/products/digital_15.jpg') }}"
                                                        width="800" height="800"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                    Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('image/products/digital_01.jpg') }}"
                                                        width="800" height="800"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                    Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('image/products/digital_21.jpg') }}"
                                                        width="800" height="800"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                    Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('image/products/digital_03.jpg') }}"
                                                        width="800" height="800"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                    Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('image/products/digital_04.jpg') }}"
                                                        width="800" height="800"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                    Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('image/products/digital_05.jpg') }}"
                                                        width="800" height="800"
                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Product Categories-->
            <div class="wrap-show-advance-info-box style-1">
                <h3 class="title-box">Product Categories</h3>
                <div class="wrap-top-banner">
                    <a href="#" class="link-banner banner-effect-2">
                        <figure><img src="assets/images/fashion-accesories-banner.jpg" width="1170" height="240" alt="">
                        </figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            <a href="#fashion_1a" class="tab-control-item active">Smartphone</a>
                            <a href="#fashion_1b" class="tab-control-item">Watch</a>
                            <a href="#fashion_1c" class="tab-control-item">Laptop</a>
                            <a href="#fashion_1d" class="tab-control-item">Tablet</a>
                        </div>
                        <div class="tab-contents">

                            <div class="tab-content-item active" id="fashion_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_01.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Lois Caron LCS-4027 Analog Watch - For
                                                    Men</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_02.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Business Men Leather Laptop Tote Bags
                                                    Man Crossbody </span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_09.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes -
                                                    Alberto Torresi</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_03.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes -
                                                    Alberto Torresi</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_07.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_08.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_06.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_05.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1b">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container "
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_03.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_07.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_08.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_09.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_02.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_05.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_08.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_04.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1c">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_02.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_03.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_04.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_05.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_06.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_07.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_08.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_09.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1d">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_05.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="product-rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_04.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="product-rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_03.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="product-rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_02.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="product-rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_01.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="product-rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_06.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="product-rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_08.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="product-rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                        </div>
                                    </div>

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="assets/images/products/fashion_09.jpg" width="800"
                                                        height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item bestseller-label">Bestseller</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quic view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless
                                                    Omnidirectional Speaker [White]</span></a>
                                            <div class="product-rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="wrap-price"><ins>
                                                    <p class="product-price">$168.00</p>
                                                </ins> <del>
                                                    <p class="product-price">$250.00</p>
                                                </del></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <form action="login/student" method="post" class="hide_login">
            @csrf
            <input hidden type="text" name="log_username" id="student_username" value="">
            <input hidden type="password" name="log_password" id="student_password" value="">
            <input type="submit" id="login_button">
        </form>
        <form action="login/student" method="post" class="hide_login" enctype="multipart/form-data" id="fileUploadForm">
            @csrf
            <input hidden type="text" name="fullname" id="fullname" value="">
            <input hidden type="text" name="username" id="username" value="">
            <input hidden type="text" name="reg_country" id="reg_country" value="">
            <input hidden type="text" name="number" id="number" value="">
            <input hidden type="file" name="photo" id="photo" value="" class="form-control">
            <input hidden type="text" name="stud_email" id="stud_email" value="">
            <input hidden type="password" name="stud_password" id="stud_password" value="">
            <input type="submit" id="btnSubmit">
        </form>

    </main>
@endsection
