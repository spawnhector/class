<div class="col-md-4">
    <aside class="sidebar ">

        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Open modal
        </button> --}}
        <div id="booking_car_info" class="">
            <div class="booking_form " id="booking_form">
                <span class="car-details__price-inner">&#036;{{$vehicle->price}}<span class="after-price-text">/ per day</span></span>
                <h3 class="booking_form_title">Booking Form</h3>

                    <div class="wrap_fields">
                        <div class="rb_field">
                            <input type="hidden" value="{{$slug}}" id="vehicle_id">
                            <input type="hidden" value="{{$vehicle->price}}" id="vehicle_cost">
                            <input type="hidden" value="{{$vehicle->name}}" id="vehicle_name">
                            <label>Pick-up Location</label>
                            <select class="required" id="start_location">
                                <option value="">
                                    Select Location </option>

                                <option value="location">location</option>
                            </select>
                        </div>
                        <div class="rb_field">
                            <label>Drop-off Location</label>
                            <select class="required" id="finish_location">
                                <option value="">
                                    Select Location </option>
                                <option value="location">location</option> 
                            </select>
                        </div>
                        <div class="rb_field">
                            <label>Pick-up Date</label>
                            <input type="text" placeholder="Select date" id="datetimepicker_simple" data-min_date="3" data-work_days="" data-work_time="" autocomplete="" readonly>
                            <input type="hidden" id="pixad_format_date" value="j/m/Y H:i">
                        </div>
                        <div class="rb_field ">
                            <label>Drop-off Date</label>
                            <input type="text" class="" placeholder="Select date" value="" id="datetimepicker_end" autocomplete="off" readonly>
                        </div>
                        <script>
                            jQuery.noConflict()(function($) {
                                jQuery(".hours_price_title_contain input").on("click", function() {
                                    $(".hours_price_title_contain input").not(this).prop("checked", false);
                                });
                            });
                        </script>
                        <div class="hours_price_title_contain">
                        </div>
                        <div class="pixba_contact_modal">
                        </div>
                        <input type="hidden" id="booking_timepicker" value="1">
                    </div>
                    <span class="booking-price-info">Save Up 30% to rental from 3 days</span><span class="booking-price-info">Save Up 50% to rental from 3 days</span><span class="booking-price-info">Save Up 70% to rental from 3 days</span>
                    <div class="extra_service">
                        <h3 class="extra_service_title">Extra Resource</h3>
                        <div class="ovacrs_resource">
                            <span class="extra_service_category">Category 1</span>
                            <div class="extra_service_title_item">
                                <div class="extr-left">
                                    <input id="child_seat" type="checkbox">
                                    CHILD SEAT </input>
                                </div>
                                <div class="extr-right">
                                    <div class="resource">
                                        <span class="dur_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    &#36; </span>
                                                30 </span>
                                        </span>
                                        <span class="slash">
                                            /
                                        </span>
                                        <span class="dur_val">
                                        </span>
                                        <span class="dur_type">
                                            Day </span>
                                    </div>
                                </div>
                            </div>

                            <div class="extra_service_title_item">
                                <div class="extr-left">
                                    <input id="gps_navigation" type="checkbox" >
                                    GPS NAVIGATION </input>
                                </div>
                                <div class="extr-right">
                                    <div class="resource">
                                        <span class="dur_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    &#36; </span>
                                                100 </span>
                                        </span>
                                        <span class="slash">
                                            /
                                        </span>
                                        <span class="dur_val">
                                        </span>
                                        <span class="dur_type">
                                            Total </span>
                                    </div>
                                </div>
                            </div>

                            <div class="extra_service_title_item">
                                <div class="extr-left">
                                    <input id="additional_driver" type="checkbox">
                                    ADDITIONAL DRIVER </input>
                                </div>
                                <div class="extr-right">
                                    <div class="resource">
                                        <span class="dur_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    &#36; </span>
                                                50 </span>
                                        </span>
                                        <span class="slash">
                                            /
                                        </span>
                                        <span class="dur_val">
                                        </span>
                                        <span class="dur_type">
                                            Day </span>
                                    </div>
                                </div>
                            </div>

                            <div class="extra_service_title_item">
                                <div class="extr-left">
                                    <input id="wifi_access" type="checkbox">
                                    WIFI ACCESS </input>
                                </div>
                                <div class="extr-right">
                                    <div class="resource">
                                        <span class="dur_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    &#36; </span>
                                                10 </span>
                                        </span>
                                        <span class="slash">
                                            /
                                        </span>
                                        <span class="dur_val">
                                        </span>
                                        <span class="dur_type">
                                            Day </span>
                                    </div>
                                </div>
                            </div>

                            <span class="extra_service_category">Category 2</span>
                            <div class="extra_service_title_item">
                                <div class="extr-left">
                                    <input id="winter_package" type="checkbox">
                                    WINTER PACKAGE </input>
                                </div>
                                <div class="extr-right">
                                    <div class="resource">
                                        <span class="dur_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    &#36; </span>
                                                80 </span>
                                        </span>
                                        <span class="slash">
                                            /
                                        </span>
                                        <span class="dur_val">
                                        </span>
                                        <span class="dur_type">
                                            Total </span>
                                    </div>
                                </div>
                            </div>

                            <div class="extra_service_title_item">
                                <div class="extr-left">
                                    <input id="bski_rack" type="checkbox">
                                    SKI RACK </input>
                                </div>
                                <div class="extr-right">
                                    <div class="resource">
                                        <span class="dur_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    &#36; </span>
                                                120 </span>
                                        </span>
                                        <span class="slash">
                                            /
                                        </span>
                                        <span class="dur_val">
                                        </span>
                                        <span class="dur_type">
                                            Day </span>
                                    </div>
                                </div>
                            </div>

                            <div class="extra_service_title_item">
                                <div class="extr-left">
                                    <input id="full_insurance" type="checkbox">
                                    FULL INSURANCE </input>
                                </div>
                                <div class="extr-right">
                                    <div class="resource">
                                        <span class="dur_price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    &#36; </span>
                                                200 </span>
                                        </span>
                                        <span class="slash">
                                            /
                                        </span>
                                        <span class="dur_val">
                                        </span>
                                        <span class="dur_type">
                                            Total </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Auth::check())
                        @if (Auth::user()->role == 'user')
                            @if (count(auth()->user()->rentedById($slug)) != 0)
                                <button class="submit btn_tran" type="submit">
                                    You booked this vehicle
                                </button>
                            @else
                                <button onclick='bookCar()' class="submit btn_tran" type="submit">
                                    Booking this vehicle
                                </button>
                            @endif
                        @endif
                    @else
                        <button data-toggle="modal" class="submit btn_tran" onclick="openLoginModal()" type="submit">Booking this car</button>
                    @endif
            </div>
        </div>
        <section class="widget">
            <h3 class="widget-title">Related Cars</h3>
            <div class="decor-1"></div>
            <div class="widget-content">
                <section class="widget-post1 clearfix">
                    <div class="widget-post1__img">
                        <a href="https://autozone.templines.org/elementor/rental/autos/ford-mustang-gt/" title="Ford Mustang GT">
                            <img width="150" height="150" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2010_ford_mustang_gt-1280x800-1-150x150.jpeg" class="img-responsive wp-post-image" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2010_ford_mustang_gt-1280x800-1-150x150.jpeg 150w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2010_ford_mustang_gt-1280x800-1-300x300.jpeg 300w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/2010_ford_mustang_gt-1280x800-1-100x100.jpeg 100w" sizes="(max-width: 150px) 100vw, 150px" /> </a>
                    </div>
                    <div class="widget-post1__inner">
                        <h3 class="widget-post1__title"><a href="https://autozone.templines.org/elementor/rental/autos/ford-mustang-gt/" title="Ford Mustang GT">Ford Mustang GT</a></h3>
                        <div class="widget-post1__price">Price: &#036;180<span class="after-price-text">/ per day</span></div>
                        <div class="widget-post1__description">This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy...</div>
                    </div>
                </section>
                <section class="widget-post1 clearfix">
                    <div class="widget-post1__img">
                        <a href="https://autozone.templines.org/elementor/rental/autos/audi-q3-quattro-s-line-2018/" title="Audi Q3 Quattro">
                            <img width="150" height="150" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/audi_q3_quattro_s_line_2018_4k-1280x720-1-150x150.jpeg" class="img-responsive wp-post-image" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/audi_q3_quattro_s_line_2018_4k-1280x720-1-150x150.jpeg 150w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/audi_q3_quattro_s_line_2018_4k-1280x720-1-300x300.jpeg 300w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/audi_q3_quattro_s_line_2018_4k-1280x720-1-100x100.jpeg 100w" sizes="(max-width: 150px) 100vw, 150px" /> </a>
                    </div>
                    <div class="widget-post1__inner">
                        <h3 class="widget-post1__title"><a href="https://autozone.templines.org/elementor/rental/autos/audi-q3-quattro-s-line-2018/" title="Audi Q3 Quattro">Audi Q3 Quattro</a></h3>
                        <div class="widget-post1__price">Price: &#036;190<span class="after-price-text">/ per day</span></div>
                        <div class="widget-post1__description">This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy...</div>
                    </div>
                </section>
                <section class="widget-post1 clearfix">
                    <div class="widget-post1__img">
                        <a href="https://autozone.templines.org/elementor/rental/autos/renault-megane-rs-trophy/" title="Renault Trophy">
                            <img width="150" height="150" src="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/renault_megane_rs_trophy_4k_2018-1280x720-1-150x150.jpeg" class="img-responsive wp-post-image" alt="" loading="lazy" srcset="https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/renault_megane_rs_trophy_4k_2018-1280x720-1-150x150.jpeg 150w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/renault_megane_rs_trophy_4k_2018-1280x720-1-300x300.jpeg 300w, https://autozone.templines.org/elementor/rental/wp-content/uploads/2020/02/renault_megane_rs_trophy_4k_2018-1280x720-1-100x100.jpeg 100w" sizes="(max-width: 150px) 100vw, 150px" /> </a>
                    </div>
                    <div class="widget-post1__inner">
                        <h3 class="widget-post1__title"><a href="https://autozone.templines.org/elementor/rental/autos/renault-megane-rs-trophy/" title="Renault Trophy">Renault Trophy</a></h3>
                        <div class="widget-post1__price">Price: &#036;180<span class="after-price-text">/ per day</span></div>
                        <div class="widget-post1__description">This 2018 model car is Brilliant Black Crystal Pearlcoat with a Black/Diesel Gray interior. Buy...</div>
                    </div>
                </section>
            </div>
        </section>
        <div class="widget widget_mod-b">
            <div class="wrap-social-block wrap-social-block_mod-a">

                <div class="social-block ">
                    <div class="social-block__inner">
                        <span class="social-block__title">Share This</span>
                        <div class="a2a_kit a2a_kit_size_18 addtoany_list" data-a2a-url="https://autozone.templines.org/elementor/rental/autos/ford-mustang-gt-fastback/" data-a2a-title="Ford Fastback"><a class="a2a_button_facebook" href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fautozone.templines.org%2Felementor%2Frental%2Fautos%2Fford-mustang-gt-fastback%2F&amp;linkname=Ford%20Fastback" title="Facebook" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_twitter" href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fautozone.templines.org%2Felementor%2Frental%2Fautos%2Fford-mustang-gt-fastback%2F&amp;linkname=Ford%20Fastback" title="Twitter" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_email" href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fautozone.templines.org%2Felementor%2Frental%2Fautos%2Fford-mustang-gt-fastback%2F&amp;linkname=Ford%20Fastback" title="Email" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>