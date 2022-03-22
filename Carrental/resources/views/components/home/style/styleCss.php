<style>
    /* ************************************************   
Theme Name: Autozone
Author: <a href="http://templines.com/">Templines</a>
Text Domain: autozone
Version: 6.04
Description: Auto Dealer theme.
Theme URI:  http://templines.org/autozone/
Author URI: https://themeforest.net/user/templines/portfolio
License: themeforest licenses
License URI: http://themeforest.net/licenses
Tags: left-sidebar, right-sidebar, custom-header, custom-menu, editor-style
*/

/* ======= WORDPRESS ELEMENTS ======= */

.aligncenter {
    margin: 0 auto;
    display: block;
}

img[class*="wp-image-"] {
    display: block;
    max-width: 100%;
    height: auto;
}

.wp-caption {
    text-align: left;
}

.wp-caption-text {
    text-align: left;
    padding-top: 10px;
}

.gallery-caption {
    text-align: left;
}

.alignright {
    text-align: right;
    float: right;
}

.alignleft {
    text-align: left;
    float: left;
}

.aligncenter {
    text-align: center;
}

.bypostauthor {
    text-align: left;
}

blockquote.alignleft,
.wp-caption.alignleft,
img.alignleft {
    margin: 0.4211em 1.6842em 1.6842em 0;
}

blockquote.alignright,
.wp-caption.alignright,
img.alignright {
    margin: 0.4211em 0 1.6842em 1.6842em;
}

blockquote.aligncenter,
.wp-caption.aligncenter,
img.aligncenter {
    margin-top: 0.4211em;
    margin-bottom: 1.6842em;
}

.wp-caption.alignleft,
.wp-caption.alignright,
.wp-caption.aligncenter {
    margin-bottom: 1.2632em;
}

.alignleft {
    display: inline;
    float: left;
}

.alignright {
    display: inline;
    float: right;
}

.aligncenter {
    display: block;
    margin-right: auto;
    margin-left: auto;
}

.rtd h1:not([class]),
.rtd h2:not([class]),
.rtd h3:not([class]),
.rtd h4:not([class]),
.rtd h5:not([class]),
.rtd h6:not([class]),
.woocommerce-tabs h1,
.woocommerce-tabs h2,
.woocommerce-tabs h3,
.woocommerce-tabs h4,
.woocommerce-tabs h5,
.woocommerce-tabs h6 {
    font-family: Raleway;
    font-weight: 700;
    color: #333;
    margin: 0 0 10px 0;
    padding: 0;
}

html blockquote:not([class]) {
    padding: 45px 45px 45px 70px;
    margin: 0 0 20px;
    font-size: 14px;
    border-left: 0;
    line-height: 1.666;
    background: #f2f2f2;
    position: relative;
    border: 0;
    overflow: hidden;
    min-height: 100px;
    color: #333;
}

html blockquote:not([class]):after {
    content: "\f10d";
    font-family: 'FontAwesome';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    color: #fff;
    font-size: 21px;
    height: 20px;
    position: absolute;
    left: 20px;
    text-transform: none;
    top: 20px;
    z-index: 777;
    color: #dc2d13;
}

html blockquote:not([class]):before {
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    display: block;
    position: absolute;
    left: -77px;
    top: -82px;
    width: 110px;
    height: 140px;
    content: '';
    display: inline-block;
}

.blog-item-quote .blog-item_desc {
    width: 80%;
    margin: 0px auto;
    float: none !important;
}

.blog-item-quote .blog-item_text {
    border: none !important;
}

.blog-quote-source {
    font-weight: 700;
    text-align: right;
    display: inline-block;
    text-align: right;
    width: 100%;
}

.rtd p:not([class]),
.rtd ul:not([class]) {
    color: #666;
    font-size: 13px;
    line-height: 1.777;
}

.rtd ul:not([class]) {
    padding-left: 10px;
    list-style: none;
    margin-bottom: 10px;
}


.rtd ul:not([class]) ul {
    margin-bottom: 0;
}


.rtd ul:not([class]) ol {
    margin-bottom: 0;
}


.rtd ol:not([class]) ul {
    margin-bottom: 0;
}


.rtd ul:not([class]) li ol li:before {
    display: none;
}

.rtd ul li:not([class]) {
    margin: 0;
    line-height: 1.777;
}

.rtd li:not([class]):before {
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    display: inline-block;
    margin-right: 10px;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

ul.list-styled li.disabled {
    color: #c8c9cc;
}

ul.list-styled.list-style-ok li::before {
    content: '\f00c';
    color: #28ad62;
}

ul.list-styled.list-style-ok li.disabled::before {
    content: '\f00d';
    color: #c8c9cc;
}

.rtd img {
    max-width: 100%;
    height: auto;
}

.wp-caption {
    text-align: left;
    max-width: 100%;
}

.rtd table:not([class]) {
    margin: 20px 0;
    background: #fff;
}

.rtd table:not([class]) td,
.rtd table:not([class]) th {
    padding: 10px;
    border: 1px solid #d0d2d7;
}

.rtd ul:not([class]) li::before {
    font-size: 6px;
    width: 1.555em;
    content: '\f111';
    text-align: center;
    vertical-align: middle;
}

.rtd ul ul:not([class]) li::before {
    content: '\f10c';
}

.rtd ol:not([class]) {
    margin-left: 10px;
    margin-bottom: 10px;
    padding: 0;
}


.rtd ol:not([class]) ol {
    margin-bottom: 0;
}

.rtd ol:not([class]) li {
    padding-bottom: 0px;
    line-height: 1.444;
}

.wrap-media img {
    max-width: 100%;
    height: auto;
}

.gallery-icon a {
    text-align: center;
    display: inline-block;
}

.rtd iframe {
    max-width: 100%;
    max-height: 100%;
}


/*Sidebar*/

aside .widget-title + ul {
    margin-left: 0;
    padding-left: 0;
}

aside .widget-title + ul > li,
aside .menu > li {
    padding: 5px 0;
    margin: 0 0 10px 0;
    list-style: none;
    border-bottom: 1px solid #ececec;
    font-size: 12px;
    color: #666;
    line-height: 1.55;
    text-transform: uppercase;
    position: relative;
}

aside .children {
    margin: 10px 0px 5px 10px;
}

aside ul .children li {
    padding: 5px 0;
    margin: 0 0 10px 0;
    list-style: none;
    font-size: 12px;
    color: #666;
    text-transform: uppercase;
    font-weight: 700;
    border-bottom: 0 !important;
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}

.widget_product_categories .children {
    display: none;
}

.widget_product_categories .current-cat .children {
    display: block;
}

.widget_product_categories .children {
    margin: 0px 0px 5px 10px;
}

.widget_product_categories .children a {
    font-size: 10px;
}

aside .widget-title + ul li a,
aside .menu li a {
    font-size: 12px;
    color: #666;
    text-transform: uppercase;
    font-weight: normal !important;
    line-height: 1.888;
}

aside ul {
    margin-left: 10px;
    padding: 0;
}

aside li a + .count {
    font-weight: normal;
    float: right;
}

.entry-media img {
    max-width: 100%;
    height: auto;
}

aside .menu li:hover .dropdown-menu {
    display: block !important;
}


/*SIdebar Widgets*/

aside img {
    max-width: 100%;
    height: auto;
    margin: 10px 0;
}

aside select {
    max-width: 100%;
    border: 1px solid #ececec;
    padding: 5px;
    margin: 5px 0;
    border-radius: 0;
    font-size: 12px;
    color: #333;
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
    width: 100%;
}

aside table {
    width: 100%;
}

aside table td,
aside table th {
    border: 1px solid #ddd;
    padding: 5px;
    text-align: center;
}

aside table td a {
    color: #333;
}

.widget_rss .rss-date {
    display: inline-block;
    width: 100%;
    color: #666;
    padding: 10px 0;
    font-weight: normal;
}

.widget_rss .rssSummary {
    font-weight: normal;
    text-transform: none;
    line-height: 20px;
}

.widget_rss cite {
    font-size: 12px;
    display: inline-block;
    text-align: right;
    width: 100%;
    font-weight: normal;
    text-transform: none;
}

.rsswidget {
    font-size: 12px;
    color: #666;
}

.widget_search label,
.widget_search input[type="submit"],
.woocommerce-product-search input[type="submit"] {
    display: none !important;
}

.woocommerce-product-search input[type="search"],
.widget_search input[type="search"],
.widget_search input[type="text"] {
    width: 100%;
    margin-bottom: 30px;
    float: left;
    margin-right: 0%;
    background: #f7f7f7;
    border: 1px solid #eeeeed;
    padding: 10px;
}



.sidebar .widget_mc4wp_form_widget input[type="email"] {
    width: 100%;
    margin-bottom: 30px;
    float: left;
    margin-right: 0%;
    background: #f7f7f7;
    border: 1px solid #eeeeed;
    padding: 10px;
}


.sidebar .widget_mc4wp_form_widget .btn {
    display: none;
}


.textwidget {
    line-height: 20px;
}

.textwidget img {
    margin-bottom: 5px;
}

.footer ul,
.footer li {
    list-style: none;
    margin: 0;
    text-align: center;
}

.text-white * {
    color: #fff;
}


/*Headers*/

html .header-cart {
    margin: -6px 10px 28px 2px;
}

html .header .navbar-brand {
    margin-top: -10px;
    max-width: 200px;
}

html .navbar {
    border-bottom: none;
    border-top: 1px solid rgba(255, 255, 255, 0.15);
}

html .top-bar {
    border-bottom: 1px solid rgba(255, 255, 255, 0.4) !important;
    background: linear-gradient(0deg, rgba(186, 209, 241, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
    padding-top: 0;
    padding-bottom: 0;
    margin-bottom: 1px;
}

html .header-navibox-4 {
    border-right: 0;
    border-left: 0;
    padding-right: 0 !important;
    margin-left: 0 !important;
}

.header-social-link a {
    padding: 0px 8px !important;
}

html .mobile-slidebar-menu .submenu-controll {
    top: 3px !important;
}


html .submenu-controll {
    top: 33px !important;
}

html .yamm > li:before {
    bottom: -15px;
}

.header-social-link a i {
    color: rgba(255, 255, 255, 0.5) !important;
    font-size: 14px;
}


/* jarallax */

.jarallax {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    z-index: 1;
    position: relative;
    width: 100%;
}

.jarallax-content,
.jarallax-content-inner {
    width: 100%;
}

.background-attachment-fixed {
    display: inline-block;
    width: 100%;
}

.vc_row_use_jarallax.vc_row {
    margin-left: 0;
    margin-right: 0;
}

.vc_row.vc_row-flex > .vc_column_container.vc_row_use_jarallax > .vc_column-inner .wpb_wrapper {
    display: flex;
    height: 100%;
}

.vc_row.vc_row-flex > .vc_column_container > .vc_column-inner .wpb_wrapper .jarallax {
    display: flex;
    height: 100%;
}

.vc_row.vc_row-flex > .vc_column_container > .vc_column-inner .wpb_wrapper .jarallax .jarallax-content {
    display: flex;
    height: 100%;
}

html .vc_row.vc_row-no-padding .vc_column-inner {
    padding-top: 0;
}

.vc_gitem-woocommerce-product-price_labeled {
    color: #dc2d13;
    font-size: 20px;
}

.navbar .navbar-nav > li > a {
    position: relative;
}

.yamm:not(.cl-effect-1, .cl-effect-18, .cl-effect-12) .current-menu-item > a:before,
.yamm:not(.cl-effect-1, .cl-effect-18, .cl-effect-12) .current-page-parent > a:before {
    content: '';
    display: block;
    border-top: 4px solid transparent;
    position: absolute;
    top: -4px;
    z-index: 777;
    width: 100%;
}



.navbar .main-menu > li.current-menu-item:first-child + li a:before,
.navbar .main-menu > li.current-menu-item:first-child + li + li a:before,
.navbar .main-menu > li.current-menu-item:first-child + li + li + li a:before,
.navbar .main-menu > li.current-menu-item:first-child + li + li + li + li a:before,
.navbar .main-menu > li.current-menu-item:first-child + li + li + li + li + li a:before,
.navbar .main-menu > li:first-child + li + li + li + li + li + li a:before {
    display: none !important;
}

html .cl-effect-1 .submenu-controll {
    right: -3px;
}


.cl-effect-1 li > a {
    margin: 0 5px !important;
}


html .pixad-features-list li {
    list-style: none;
    margin-bottom: 1%;
    margin-top: 0;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Raleway;
    color: #222;
    display: inline-block;
    width: 30%;
    border-top: 0;
    margin-right: 3%;
    vertical-align: top;
    line-height: 1.7;
    padding-top: 6px;
}

.fullscreen-center-menu .current-menu-item > a:before,
.fullscreen-center-menu .current-page-parent > a:before {
    display: none !important;
}

.ua-safari .top-bar {
    background: none !important;
}


/* version 1.1.2  (25.10.2016) by Alex */

.pp_nav,
.pp_social {
    display: none !important;
}

html .footer {
    clear: both;
}

input.pixba-radius-widget {
    border: 0px;
    width: 50%;
}

.slider-grid__inner_mod-a .slider-grid__name {
    max-width: 290px;
    margin-right: 10px;
}

.slider-grid__inner_mod-b .slider-grid__name {
    max-width: 220px;
    margin-right: 10px;
}

.wrap-filter {
    position: relative;
    z-index: 77;
}

#map-fix {
    left: 0 !important;
    margin: 0 !important;
    overflow: hidden !important;
    position: relative !important;
    width: 100% !important;
}


/* Jaralax Safari fix*/

.vc_row.vc_row-flex > .vc_column_container.vc_row_use_jarallax > .vc_column-inner .wpb_wrapper {
    display: flex;
    height: 100%;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.vc_row.vc_row-flex > .vc_column_container.vc_row_use_jarallax > .vc_column-inner .wpb_wrapper .jarallax {
    display: flex;
    height: 100%;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}


/* WOO */

html .woocommerce form.checkout_coupon,
html .woocommerce form.login,
html .woocommerce form.register,
html .woocommerce .woocommerce-ResetPassword {
    border: 0;
    padding: 20px;
    margin: 2em 0;
    background: #fff;
    text-align: left;
    border-radius: 0;
    box-shadow: none;

}

html .woocommerce label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 10px;
    font-size: 12px;
    font-weight: 600;
    color: #1c1f23;
    text-transform: uppercase;
}


html .woocommerce form .form-row label,
html .woocommerce-page form .form-row label {
    display: block;
    font-weight: normal;
    text-transform: none;
    color: inherit;
}

.woocommerce-form__label-for-checkbox {
    display: inline-block !important;
    width: 100%;
    padding-top: 10px;
}

html .woocommerce form .form-row {
    padding: 10px 0;
    margin: 0 0 0px;
}

html .checkout .woocommerce form .form-row {
    padding: 0;
    margin: 0 0 0px;
}

html .checkout .form-row label {
    padding-top: 15px;
}

textarea.input-text {
    border: 1px solid #eaeaeb;
    padding: 15px;
    min-height: 120px;
}

html .woocommerce td,
html .woocommerce th {
    border: 1px solid #eaeaeb;
    padding: 10px 15px;
    font-weight: normal;
    background: #fff;
}



#payment {
    padding-top: 20px;
}

#payment ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

html .woocommerce label[for="rememberme"] {
    padding: 20px 0 0 0
}

html .woocommerce .woocommerce-MyAccount-navigation {
    float: left;
    width: 30%;
    margin-bottom: 40px;
}

html .woocommerce .woocommerce-MyAccount-content {
    float: right;
    width: 68%;
}

.woocommerce-MyAccount-navigation li {
    list-style: none;
    margin-bottom: 10px;
    border-bottom: 1px solid #ececec;
    padding-bottom: 10px;
    text-transform: uppercase;
}

.woocommerce-MyAccount-navigation ul {
    padding: 20px;
    margin: 0;
    text-align: left;
    border: 0;
    background: #fff;
}

.woocommerce-MyAccount-navigation ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.woocommerce-MyAccount-navigation ul li,
.woocommerce-MyAccount-navigation ul a {
    color: #444444;
}

.woocommerce-MyAccount-navigation ul li:before {
    display: none;
}

.woocommerce-MyAccount-navigation ul li a:before {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: "\f152";
    color: #cccccc;
    padding-right: 10px;
    font-size: 14px;
}

.woocommerce-MyAccount-navigation ul {
    padding: 20px 20px 10px 20px !important;
}

.is-active a {
    font-weight: 600;
}

#place_order {
    float: none !important;
    width: 100%;
    padding: 12px;
    margin-top: 20px;
}

.woocommerce-checkout #payment {
    background: #f9f9f9;
    border-radius: 0;
    padding: 20px;
    margin: 30px 0;
}

.table > thead td {
    vertical-align: bottom;
    border-bottom: 2px solid #999;
    text-transform: uppercase;
    padding-bottom: 27px;
    font-size: 12px;
    padding-top: 33px;
    font-weight: 600;
    color: #1c1f23;
}

.woocommerce #content table.cart td.actions .input-text,
.woocommerce table.cart td.actions .input-text,
.woocommerce-page #content table.cart td.actions .input-text,
.woocommerce-page table.cart td.actions .input-text {
    min-width: 300px;
    font-size: 12px;
    padding: 10px;
}

.shop_table.shop_table_responsive {
    width: 100%;
    margin: 10px 0;
}

.cart_totals h2 {
    font-size: 16px;
}

.woocommerce-cart .wc-proceed-to-checkout a.checkout-button {
    display: block;
    text-align: center;
    margin-bottom: 1em;
}




.order_details,
.customer_details {
    margin: 0;
    padding: 0;
    list-style: none;
    width: 100%;
    margin-bottom: 25px;
    display: inline-block;
}

.woocommerce address {
    line-height: 1.7;
    background: #fff;
    padding: 15px;
}

.woocommerce-checkout-review-order-table {
    width: 100%;
}

.title h2,
header h2 {
    font-size: 20px;
}

.woocommerce-thankyou-order-received {
    font-weight: 700;
    color: #1c1f23;
    text-transform: uppercase;
    font-size: 20px;
}

html .woocommerce legend {
    width: 100%;
    padding: 0;
    margin-bottom: 5px;
    padding-top: 25px;
    font-size: 21px;
    line-height: inherit;
    color: #333;
    border: 0;
    border-bottom: 1px dotted #e5e5e5;
    margin-top: 26px;
    display: inline-block;
    font-weight: 600;
    padding-bottom: 10px;
}

html .woocommerce-checkout #payment .payment_method_paypal .about_paypal {
    float: none;
    line-height: 52px;
    font-size: .83em;
    padding-left: 10px;
}

.woocommerce-account .addresses .title h3,
html .woocommerce legend,
.woocommerce-MyAccount-content h2,
.title h3,
.woocommerce h2 {
    text-transform: none;
    font-size: 18px;
    font-weight: normal;
}

.woocommerce-account .addresses .title h3 {
    padding-bottom: 15px;
    border-bottom: 1px dotted #ccc;
}

.woocommerce form .form-row input.input-text,
.woocommerce form .form-row textarea {
    border: 1px solid #eeeeee;
    padding: 10px;
}

.coupon {
    padding-left: 20px;
}

@media (max-width:900px) {

    html .current-menu-item > a::before,
    .current-page-parent > a::before {
        display: none !important;
    }
}

html .woocommerce a.remove {
    margin: 0 auto;
}

html .woocommerce-cart table.cart img {
    width: 100px;
    box-shadow: none;
    margin: 0 auto;
    display: block;
}

.woocommerce #respond input#submit.disabled,
.woocommerce #respond input#submit:disabled,
.woocommerce #respond input#submit:disabled[disabled],
.woocommerce a.button.disabled,
.woocommerce a.button:disabled,
.woocommerce a.button:disabled[disabled],
.woocommerce button.button.disabled,
.woocommerce button.button:disabled,
.woocommerce button.button:disabled[disabled],
.woocommerce input.button.disabled,
.woocommerce input.button:disabled,
.woocommerce input.button:disabled[disabled] {
    visibility: hidden;
}


/* Jaralax Safari fix*/

.vc_row.vc_row-flex > .vc_column_container.vc_row_use_jarallax > .vc_column-inner .wpb_wrapper {
    display: flex;
    height: 100%;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.vc_row.vc_row-flex > .vc_column_container.vc_row_use_jarallax > .vc_column-inner .wpb_wrapper .jarallax {
    display: flex;
    height: 100%;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.top-bar .current-menu-item > a:before,
.top-bar .current-page-parent > a:before {
    display: none !important;
}

.header-background-trans-black-rgba0 .dropdown-menu > li > a {
    color: #333;
}

@media (max-width:480px) {
    html .owl-brands a {
        display: block;
        margin: 0 auto 20px;
    }
}

@media (max-width:1000px) {
    .sidebar {
        width: 100%;
        clear: both;
    }
}

.tab-pane input[type=text],
.tab-pane input[type=tel],
.tab-pane input[type=password],
.tab-pane input[type=email],
.tab-pane textarea,
.tab-pane select {
    border: 1px solid #ddd !important;
}

.header-top-nav-menu a {
    padding: 0 10px !important;
}


/* Woo responsive */

@media (max-width:480px) {

    .woocommerce ul.products li.product,
    .woocommerce-page ul.products li.product {
        float: none !important;
        margin: 2% 0 !important;
        width: 100% !important;
    }

    .woocommerce .woocommerce-ordering,
    .woocommerce-page .woocommerce-ordering {
        float: none !important;
    }

    .woocommerce #content div.product div.images,
    .woocommerce div.product div.images,
    .woocommerce-page #content div.product div.images,
    .woocommerce-page div.product div.images,
    .woocommerce #content div.product div.summary,
    .woocommerce div.product div.summary,
    .woocommerce-page #content div.product div.summary,
    .woocommerce-page div.product div.summary,
    .woocommerce .cart-collaterals .cart_totals,
    .woocommerce-page .cart-collaterals .cart_totals,
    .woocommerce-cart .cart-collaterals .cart_totals table th,
    .woocommerce .col2-set .col-1,
    .woocommerce-page .col2-set .col-1,
    .woocommerce .col2-set .col-2,
    .woocommerce-page .col2-set .col-2 {
        float: none !important;
        width: 100% !important;
    }

    .woocommerce #content div.product .woocommerce-tabs ul.tabs li,
    .woocommerce div.product .woocommerce-tabs ul.tabs li,
    .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li,
    .woocommerce-page div.product .woocommerce-tabs ul.tabs li {
        width: 100% !important;
    }

    .woocommerce thead,
    .woocommerce tfoot {
        display: none !important;
    }

    .woocommerce td,
    .woocommerce tr,
    .woocommerce th {
        display: inline-block;
        width: 100%;
        text-align: center;
    }

    html .coupon {
        padding-left: 0;
        width: 100%;
    }

    html .woocommerce-cart table.cart input {
        iddle;
        line-height: 1;
        width: 100%;
    }

    html .woocommerce-cart table.cart td.actions .coupon .input-text {
        margin: 0 0 20px 0;
        outline: 0;
        line-height: 1;
    }

    html .woocommerce #content table.cart td.actions .input-text,
    html .woocommerce table.cart td.actions .input-text,
    html .woocommerce-page #content table.cart td.actions .input-text,
    html .woocommerce-page table.cart td.actions .input-text {
        width: 100%;
    }
}


.widget-post1__title a {
    color: #555;
}

.pixad-makes-models-select {
    margin-bottom: 10px;
}


#carousel .slides > li {
    margin: 0 5px;
}


.wrap-nav-tabs .nav-tabs > li > a {
    cursor: pointer;
}

html .pixad-features-list li.equipment-icon-set {
    position: relative;
    padding-top: 7px;
    padding-left: 16px;
}

html .pixad-features-list li.equipment-icon-set i {
    position: absolute;
    left: -7px;
    top: 10px;
}




html .woocommerce ul.products li.last,
html .woocommerce-page ul.products li.last {
    margin-right: 0;
}

.woocommerce-loop-product__title {
    color: #222;
    padding: 0 25px;
    line-height: 1.3;
}

aside ul.sub-categories {
    margin-left: 20px;
}


html .main-slider {
    display: block;
}


#swipebox-top-bar {
    display: none !important;
}


.list-categories__item input[type="checkbox"] {
    position: relative;
    top: -3px;
}




.list-categories__item {
    padding-bottom: 5px;
}


@media (max-width:767px) {

    .slider-grid__item img {
        width: 100% !important;
        max-width: inherit !important;

    }

}






@media screen and (-ms-high-contrast: active),
(-ms-high-contrast: none) {

    html .main-slider:after {
        right: 50%;
    }


}


@media (min-width:767px) {


    html .header.sticky .normal-logo {
        display: none !important;
    }

    html .header.sticky .scroll-logo {
        display: block !important;
    }

}


@media (max-width:767px) {


    .col2-right + .col-md-4 {
        clear: both;
    }


    .col2-left + .col-md-4 {
        clear: both;
    }

}



html .list-type__link:hover .list-type__info {
    padding-top: 0;
}

.list-type__item {
    vertical-align: top;
}


.ua-safari .pixad-features-list i {
    top: -5px;
}


.car-details__price-inner .auto-sale-price del {
    font-size: 18px;
}

.card__price-number .auto-sale-price {
    display: block;
    font-size: 16px;
    padding-bottom: 10px;
    color: grey;
}



.dropdown-menu .dropdown-menu {
    left: 100%;
    top: 0px !important;
}


@media (max-width:767px) {

    .submenu-controll {
        right: 23px !important;
        width: 8px !important;
        margin-top: 10px;
        height: 8px !important;
        border-top: 1px solid #fff !important;
        border-right: 1px solid #fff !important;
        -o-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(134deg);
    }

    html [data-off-canvas*=left],
    html [data-off-canvas*=right] {
        overflow: scroll !important;
    }

}


.top-bar ul {
    display: inline-block;
    vertical-align: top;
}

.top-bar .menu-item {
    position: relative;
    top: -3px;
}



html .mobile-slidebar-menu .menu-mobile-button {
    display: none !important;
}

html [data-off-canvas*=left] .navbar-nav > li .dropdown-menu {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    margin-left: 0px !important;
    padding: 0 0 0 15px !important;
    width: 100%;
    margin: 0 !important;
}



.mobile-slidebar-menu li.dropdown {
    height: 32px;
    overflow: hidden;
}


.mobile-slidebar-menu .dropdown-open-mobile,
.mobile-slidebar-menu li.dropdown li.dropdown {
    height: auto !important;
}

.mobile-slidebar-menu .dropdown-menu {
    display: none !important;
}

.mobile-slidebar-menu .dropdown-open-mobile .dropdown-menu {
    display: block !important;
    opacity: 1 !important;
    visibility: visible !important;
}

html .submenu-controll {
    z-index: 999;
}


html .submenu-controll-inner {
    top: -2px;
}

html [data-off-canvas*=left] li ul .submenu-controll-inner {
    top: 6px;
}

.car-details .tab-content > .tab-pane,
#tab3 {
    padding: 30px 30px 30px !important;
}

.car-details .tab-content > .tab-pane {
    font-size: 14px;
    line-height: 1.88;
    overflow: hidden;
}


.car-details .form-contact {
    margin-top: 0;
}

#single-pixad-autos-modal .modal-body,
#single-pixad-extra-modal .modal-body {
    position: relative;
    padding: 0px 40px 20px 40px;
    overflow: hidden;
}


@media (min-width:1000px) {

    .autos-container .col-md-9 {
        max-width: 74.9%;
    }

}

.slider-grid__inner_mod-a .slider-grid__btn {
    text-transform: uppercase;
}

.models_list_item:hover .mli_count {
    background-color: #222 !important;
}

html body .mli_count {
    background-color: #ddd !important;
    transition: all .3s;
}

.models_list_item a {
    padding-bottom: 0 !important;
}



.switcher-list li img {
    opacity: 0.6;
}

.switcher-list li.active img,
.switcher-list li:hover img {
    opacity: 1;
}



/* RENTAL PAGE CHANGES 31.08.2018  */



.kswr-row-deco[data-position=bottom][data-decoration=both-side-outside][data-size=medium],
.kswr-row-deco[data-position=bottom][data-decoration=both-side-outside][data-size=medium][data-half=right] {
    min-height: 150px;
}

.no-row-overlay {
    overflow: inherit !important;
}


@media (min-width: 1240px) {

    .img-no-responsive img {
        max-width: initial !important;
        height: initial !important;
    }

}



.waer .vc_column_container {
    z-index: 10;
}

/* Dev Rental */

/* Section 1*/

html .fad .vc_column-inner .wpb_wrapper {
    box-shadow: 3px 4px 30px rgba(0, 0, 0, 0.08);
    padding-bottom: 60px;
    margin-bottom: 20px;
    border-bottom: solid 2px #555555;
}

.fad .vc_column-inner .wpb_wrapper:hover {
    background: #dc2d13 !important;
    border-bottom: solid 2px #dc2d13;
    z-index: 10000;
}

html .dad .kswr-row-element-back {
    position: inherit !important;
}

.fad .wpb_wrapper:hover .kswr-icon-ic i {
    color: #fff !important;
    -webkit-text-fill-color: #fff !important;
    text-fill-color: #fff !important;
}

html .fad .vc_column-inner .wpb_wrapper:hover .kswr-heading-title.kswr-shortcode-element.tmpl-title-font {
    color: #fff !important;
    -webkit-text-fill-color: #fff !important;
}

html .fad .vc_column-inner .wpb_wrapper:hover .kswr-heading-content.kswr-shortcode-element.tmpl-theme-font {
    color: #fff !important;
}

/* Section 3*/

.gar .kswr-icon-thatc.kswr-theelement {
    display: flex;
    justify-content: flex-end;
}

/* Section 4 */
.bae .wpb_column.vc_column_container.vc_col-sm-12 {
    z-index: 4;
}

/* Section News */

html .entry-main_mod-a {
    background: #fff;
}

/* Responsive */

@media (max-width: 1199px) {
    html .nan .kswr-heading-container {
        text-align: center !important;
    }

    .gar .kswr-icon-thatc.kswr-theelement {
        display: flex;
        justify-content: center;
    }

    html .hr .wpb_single_image.vc_align_right {
        text-align: center;
    }
}

.tmpl-title-font {
    font-family: Raleway !important;
    font-weight: 700 !important;
}

html .kswr-imcgal-container[data-layout=left] .kswr-imcgal-item:nth-of-type(2) {
    left: -17%;
}

html .kswr-imcgal-container[data-layout=right] .kswr-imcgal-item:nth-of-type(2) {
    right: -17%;
}



html .kswr-imcgal-container[data-layout=left] .kswr-imcgal-item:hover {
    left: -37%;
}

html .kswr-imcgal-container[data-layout=right] .kswr-imcgal-item:hover {
    right: -37%;
}



html .kswr-imcgal-container[data-layout=bottom] .kswr-imcgal-item:nth-of-type(2) {
    bottom: -20%;
}

html .kswr-imcgal-container[data-layout=bottom]:hover .kswr-imcgal-item:nth-of-type(2) {
    bottom: -30% !important;
}



/* Home search */



.hsearch_style_1 .list-categories.body-categories .list-categories__item label {
    padding: 20px;
    background: #fff;
}



.hsearch_style_2 {
    background: #fff;
    padding: 30px 20px 20px 20px;
    /* background-image: url(media/bg/texture-1.gif); */
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
}


.hsearch_style_2 .slider-price__wrap-input {
    margin-top: -15px;
}


.hsearch_style_2.vc-auto-search .select_mod-a {
    margin: 0 10px 40px 10px !important;
}


.hsearch_style_2.vc-auto-search .list-categories__item {
    width: 16.3% !important;
}


.hsearch_style_2.vc-auto-search #slider-year_max,
.hsearch_style_2.vc-auto-search #slider-mileage_max,
.hsearch_style_2.vc-auto-search #slider-engine_max {
    float: right;
}


.hsearch_style_2 .list-categories.body-categories .list-categories__item label {
    padding: 20px;
    background: #fff;
}

.home-search-heading {
    font-size: 24px;
    text-transform: uppercase;
}


.vc-auto-search.hsearch_style_2 .jelect-current {
    background: #f5f5f5 !important;
    clip-path: none !important;
    text-align: left;
    color: #222;
}


.home-search-label {
    text-transform: uppercase;
    font-size: 12px;
    color: #ccc;
    padding-top: 10px;

}

.vc-auto-search .select_mod-a {
    position: relative;
}

.vc-auto-search .home-search-label {
    top: 37px;
    left: 0;
    position: absolute;
    z-index: 1;
}


.btn .home-search-label {
    position: relative !important;
    top: 0 !important;
    left: 0 !important;
}


.btn .home-search-label a {
    display: inline-block;
    width: 100%;
    text-align: center;
    color: #ccc;
}

.vc-auto-search div.select {
    display: inline-block;
    width: 19%;
    margin: 0 0.5% 0;
    vertical-align: top;
    max-width: 220px;
    margin-bottom: 35px;
}

.vc-auto-search .slider-price {
    display: inline-block;
    width: 100%;
    margin: 0 1% 0;
    vertical-align: top;
    position: relative;
}

.vc-auto-search .btn {
    display: inline-block;
    vertical-align: top;
    margin: 0;
    padding: 0 1% 0;
}

.vc-auto-search .noUi-target {
    margin: 15px 0 0 0;
}

.tmpl-slide-price-left .currency-symbol {
    float: left;
    padding-top: 16px;
    margin-right: 4px;
}

.tmpl-slide-price-right .currency-symbol {
    float: left;
    padding-top: 16px;
    margin-right: 0;
    position: relative;
    right: 0;
}

.tmpl-slide-price-left {
    float: left;
}

.tmpl-slide-price-right {
    float: right;
}

html .vc-auto-search .slider-price__input {
    display: inline-block;
    width: 56px;
    margin: 10px 0;
    height: 33px;
    font-size: 12px;
    color: #222;
    border: none;
    background-color: #fff;
    text-align: center;
}

html .vc-auto-search #slider-price_min {
    float: left;
    padding: 0 !important;
    text-align: left;
    background: transparent;
}

html .vc-auto-search #slider-price_min + span {
    display: none;
}

html .vc-auto-search #slider-price_max {
    float: right;
    padding: 0 !important;
    text-align: right;
    background: transparent;
}

html .vc-auto-search .noUi-base {
    width: 100%;
    height: 100%;
    position: relative;
    background: #fff;
}


.vc-auto-search {
    text-align: center;
}


html .jelect-current {
    height: auto;
}

.vc-auto-search .jelect-current,
.vc-auto-search div.select {
    background: #fff !important;
    text-align: left;
    color: #222;
}



.vc-auto-search .wrap__btn-skew-r {
    margin-top: 0;
    padding-left: 12px;
    padding-right: 12px;
    overflow: hidden;
}

.vc-auto-search .btn-filter {
    margin-left: 0;
    margin-top: -2px;
}

.vc-auto-search .jelect-options {
    box-shadow: none;
}

.vc-auto-search .list-categories__item {
    width: 16% !important;
}

.home-template .ui-title-inner {
    margin-bottom: 12px !important;
    line-height: 1.5;
}

html .wpb_column,
html .wpb_row {
    position: relative;
    z-index: inherit;
}

html .vc_parallax > * {
    position: relative;
    z-index: inherit;
}


.page-template-page-home .pix-ajax-loader {
    display: none !important;
}




.home-template .vc_row {
    z-index: 77
}

html body div .icon-setting-menu {
    background-color: #dc2d13 !important;
}

.kswr-ibi-container[data-layout=icontop] .kswr-icon-container {
    display: inline-block;
    overflow: hidden;
}


.kswr-button-bg {
    transform: skewX(-17deg);
    border-left: 0 !important;
    border-top: 0 !important;
    border-bottom: 0 !important;
}

.kswr-slickslider-container .slick-dots li button {
    transform: rotate(45deg);
}

.syn-hotspot-markerinsider {
    position: relative;
    font-size: 19px !important;
    left: 5px !important;
    top: -1px !important;
}



.kswr-slickslider-container[data-arrows-position=middle] .slick-arrow {
    border-radius: 100px !important;
}


.kswr-slickslider-container[data-arrows-position=middle].slick-next:after,
.kswr-slickslider-container[data-arrows-position=middle] .slick-prev:after {
    top: 2px !important;
}




/* Custom team  1*/

.km-teammate-container[data-style=style1]:hover .km-teammate-np,
.km-teammate-container[data-style=style1]:hover .km-teammate-soc {
    margin-top: 0 !important;
}

.km-teammate-container[data-style=style1]:hover .km-teammate-position {
    margin-top: 0 !important;
}

.km-teammate-container[data-style=style1]:hover .km-teammate-info {
    margin-top: 0 !important;
}

.km-teammate-container[data-style=style1] .km-teammate-name,
.km-teammate-container[data-style=style1] .km-teammate-position {
    color: #fff !important;
}

.km-teammate-container[data-style=style1]:hover .km-teammate-name,
.km-teammate-container[data-style=style1]:hover .km-teammate-position {
    color: #fff !important;
    opacity: 1 !important;
    text-align: center;
}

.km-teammate-container[data-style=style1]:hover .km-teammate-info {
    margin-top: 15px !important;
}

.km-teammate-container[data-style=style1] .km-teammate-soc a {
    margin-left: 5px;
    margin-right: 5px;
    display: inline-block;
    float: none;
    width: 20px;
    height: 20px;
    line-height: 33px;
    font-size: 18px;
    color: #fff !important;
    text-decoration: none !important;
    margin-top: 10px;
    text-align: center;
}

.km-teammate-container[data-style=style1] .km-teammate-soc {
    display: inline-block;
    float: none;
    text-align: center;
    margin-top: 7px;
}

.km-teammate-container[data-style=style1] .km-teammate-soc a:hover {
    opacity: 0.9;
}

.km-teammate-container[data-style=style1] .km-teammate-content {
    display: none !important;
}

.km-teammate-container[data-style=style1] .km-teammate-img:before {
    display: block;
    content: "";
    width: 100%;
    float: left;
    height: 100%;
    position: absolute;
    z-index: 1;
    top: 0%;
    left: 0;
    background: rgba(0, 0, 0, .5);
    opacity: 0;
}

.km-teammate-container[data-style=style1] .km-teammate-np {
    display: inline-block;
    float: none;
    left: 0;
    right: 0;
    text-align: center;
    width: 100%;
}

.km-teammate-container[data-style=style1] .km-teammate-position {
    display: inline-block;
    float: none;
    text-align: center;
}

.km-teammate-container[data-style=style1] .km-teammate-info {
    margin-top: 0 !important;
    padding-top: 20px !important;
    padding-bottom: 20px !important;
    z-index: 3;
    color: #fff;
    background: transparent;
    position: absolute;
    bottom: 10%;
    height: auto;
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    opacity: 0;
}

.km-teammate-container[data-style=style1]:hover .km-teammate-info,
.km-teammate-container[data-style=style1]:hover .km-teammate-img:before {
    opacity: 1;
}


/* Custom team  2*/

.km-teammate-container[data-style=style2]:hover .km-teammate-np,
.km-teammate-container[data-style=style2]:hover .km-teammate-soc {
    margin-top: 0 !important;
}

.km-teammate-container[data-style=style2]:hover .km-teammate-position {
    margin-top: 0 !important;
}

.km-teammate-container[data-style=style2]:hover .km-teammate-info {
    margin-top: 0 !important;
}

.km-teammate-container[data-style=style2]:hover .km-teammate-name,
.km-teammate-container[data-style=style2]:hover .km-teammate-position {
    color: #fff !important;
    opacity: 1 !important;
}

.km-teammate-container[data-style=style2]:hover .km-teammate-info {
    margin-top: 15px !important;
}

.km-teammate-container[data-style=style2] .km-teammate-soc a {
    margin-left: 5px;
    margin-right: 5px;
    display: inline-block;
    float: none;
    background: #d64d3a;
    border-radius: 100px;
    width: 30px;
    height: 30px;
    line-height: 33px;
    font-size: 12px;
    color: #fff !important;
    text-decoration: none !important;
    margin-top: 10px;
}

.km-teammate-container[data-style=style2] .km-teammate-soc a:hover {
    opacity: 0.9;
}

html .km-teammate-container[data-style=style2]:hover .km-teammate-soc {
    margin-top: 0 !important;
    position: absolute;
    top: 40%;
    width: 100%;
    display: inline-block;
    left: 0;
}

.km-teammate-container[data-style=style2] .km-teammate-info {
    margin-top: 0 !important;
    padding-top: 20px !important;
    padding-bottom: 20px !important;
}

.km-teammate-container[data-style=style2]:hover .km-teammate-info {
    background: #3180ab;
    margin-top: 0 !important;
    overflow: hidden;
    height: 100px;
}

.km-teammate-container[data-style=style2] .km-teammate-content {
    display: none !important;
}


/* Custom team  3*/

.km-teammate-container[data-style=style3] .km-teammate-info {
    position: relative;
}

.km-teammate-container[data-style=style3]:hover .km-teammate-soc {
    opacity: 1;
}

.km-teammate-container[data-style=style3] .km-teammate-soc {
    color: #ffffff !important;
    background: #dc2d13;
    top: -61px;
    position: absolute;
    left: 0;
    padding: 5px;
    opacity: 0;
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    transform: skewX(-17deg);
    max-width: 90%;
    left: 5%;
}


.km-teammate-container[data-style=style3] .km-teammate-soc a {
    transform: skewX(17deg);
}



.km-teammate-container[data-style=style3] .km-teammate-img {
    border-bottom: 1px solid #e1e1e1;
    max-width: 89%;
    left: 5%;
}


.km-testimonial[data-style=style1] .km-testimonial-name {
    margin-bottom: 5px;
}

.km-testimonial[data-style=style1] .km-testimonial-pic {
    margin-bottom: 5px;
    padding-top: 5px !important;
}

html .km-testimonial[data-style=style1][data-childstyle=style5] .km-testimonial-icon {
    position: relative;
    margin-top: 0;
}

.km-teammate-position {
    font-style: normal !important;
}


.post_mod-a .entry-main {
    background: #fff;
}

body.page-template-page-home {
    background-color: #fff;
}

.pix-lastnews-light .btn {
    margin-bottom: 25px;
}

.pixba-radius-search {
    padding-bottom: 35px !important;
}

.pixba-radius-search,
.slider-price {
    margin-top: 0px !important;
}

#search-car,
#pixad--city {
    width: 100%;
    margin-bottom: 0;
    float: left;
    margin-right: 0%;
    background: #f7f7f7;
    border: 0;
    padding: 0 10px;
    height: 45px;
}

.pac-container {
    margin-top: -30px;
}

.ui-subtitle-block_mod-a p {
    margin-bottom: 0;
}



@media (max-width:768px) {

    html .vc-auto-search div.select {
        display: inline-block;
        width: 100%;
        margin: 0 0 20px 0;
        vertical-align: top;
        max-width: 220px;
    }

    html .models_list_item {
        width: 100%;
    }

    html .main-block {
        margin-bottom: 50px !important;
    }

}


/* Theme My Login Custom */


.tml {
    background: #fff;
    padding: 50px;
    max-width: 600px;
    margin: 0 auto;
}


aside .tml {
    padding: 0 !important;
}


.tml input[type="text"],
.tml input[type="password"],
.tml input[type="email"] {
    width: 100%;
    margin-bottom: 30px;
    float: left;
    margin-right: 0%;
    background: #f7f7f7;
    border: 1px solid #eeeeed;
    padding: 10px;
}


.tml .tml-label {
    font-weight: normal;
    padding-bottom: 10px;
}

.tml-links,
.tml-user-links {
    list-style: none;
    margin: 0;
    padding: 10px 0 10px 0;
}

.tml a {
    color: inherit;
}

.tml-checkbox {
    margin-right: 5px !important;
}

.tml-action-confirmaction .success,
.tml-error,
.tml-message,
.tml-success {
    background: #f8f8f8;
}


.tml-user-avatar {
    display: inline-block;
    float: left;
    margin-right: 15px;
}

.widget_theme_my_login .widget-title {
    display: none !important;
}

.tml-field-wrap {
    clear: both;
}

.tml-links li {
    padding-bottom: 5px;
}





/* Header Sticky Fixed */



.layout-theme[data-header='nosticky'] .header.sticky .top-bar {
    display: none;
}

.admin-bar .layout-theme[data-header='nosticky'] .header.sticky {
    top: 32px !important;
}



html .kameleon-cf7-container[data-style=qaswara] .km_cf7-input-container.filled .km_cf7-input,
html .kameleon-cf7-container[data-style=qaswara] .km_cf7-input:focus {
    border: 1px solid #eeeeed !important;
}


.layout-theme[data-header='nosticky'] .header-color-white.sticky {
    background: linear-gradient(0deg, rgba(186, 209, 241, 0) 0, rgba(0, 0, 0, .9) 100%) !important;
}

.header-color-dark.sticky {
    background: linear-gradient(0deg, rgba(186, 209, 241, 0) 0, rgba(0, 0, 0, .9) 100%) !important;
}


.layout-theme[data-header='nosticky'] .header-color-white.sticky .normal-logo {
    display: block !important;
}

.layout-theme[data-header='nosticky'] .header-color-white.sticky .scroll-logo {
    display: none !important;
}

@media (max-width:767px) {

    .layout-theme[data-header='nosticky'] .header {
        position: absolute !important;
    }

}




.tmpl-plugins-not-activated .header-cart {
    display: none;
}


.tmpl-plugins-not-activated .sticky.post .entry-media {
    min-height: 90px;
}



/* 30.11.18 */


html .pixad-features-list li {
    width: 44% !important;
}


@media (max-width:768px) {
    html .tab-content .pixad-features-list li {
        width: 100% !important;
        max-width: inherit !important;
    }
}



html .tab-content .pixad-features-list li {
    position: relative;
    padding-left: 20px;
    padding-top: 7px;
}


html .tab-content .pixad-features-list li {
    position: relative;
    padding-left: 20px;
}

html .tab-content .pixad-features-list i.features-icon {
    position: absolute !important;
    left: 0 !important;
    top: 0 !important;
}


html .autozone_calculator input[type=text] {
    height: 20px;
    color: #555;
    background-color: #fff;
    border: 1px solid #ddd !important;
    padding: 15px;
    margin-top: 10px;
}


.autozone_calculator_results {
    margin-top: 20px;
}

.autozone_calculator_report {
    background: #555;
    padding: 25px;
}

.autozone_calculator .labeled {
    padding-bottom: 0;
    color: #666666;
    font-weight: normal;
}



.autozone_calculator_report * {
    color: #fff !important;
}


.autozone_calculator_report .list-descriptions dt {
    display: inline-block;
    margin-left: 0;
    transition: all .3s;
    text-transform: uppercase;
    width: 100%;
    padding-bottom: 0px;
    padding-left: 15px;
    vertical-align: top;
    font-size: 11px;
    position: relative;
}


.autozone_calculator_report .list-categories__link:before,
.autozone_calculator_report .list-descriptions dt:before {
    margin-right: 10px;
    vertical-align: middle;
    content: '\f0da';
    font-size: 11px !important;
    margin-top: 0;
    position: absolute;
    left: 0;
    top: 1px;
}


.autozone_calculate_btn {
    color: #fff !important;
    text-decoration: none !important;
    cursor: pointer !important;
}

html .autozone_calculator_report dl {
    margin-bottom: 0 !important;
}


aside .widget_mod-b {
    margin-top: 0px;
    padding-top: 0;
    padding-left: 80px;
}

.tmpl-plugins-not-activated .navbar .navbar-nav li.header-button a.autozone-custom-button {
    display: none !important;
}

/*12.11.18*/

html .sidebar {
    padding-top: 0;
}

.car-booking {
    display: inline-block;
    width: 100%;
}

.car-booking a {
    background-color: #dc2d13;
    padding: 15px !important;
    font-size: 14px;
    font-weight: 700;
    color: #fff !important;
    border: none;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 0;
    margin-top: 0;
    width: 100%;
    text-align: center;
    text-decoration: none !important;
    transition: all 0.3s ease 0s;
    cursor: pointer;
}

.car-booking a:hover {
    opacity: 0.9;
}

.car-booking i {
    color: #fff;
    margin-top: 0;
    margin-right: 12px;
    transition: all 0.3s ease 0s;
    position: relative;
    top: 1px;
    font-size: 16px;
    left: 0;
}

.booking_form {
    min-width: 900px;
}

aside .booking_form {
    min-width: auto;
}

#single-pixad-booking-modal .modal-dialog {
    z-index: 9999;
}


#single-pixad-booking-modal .modal-dialog {
    width: 90% !important;
    margin: 10% auto;
    display: inline-block;
    max-width: 1400px;
}

#single-pixad-booking-modal {
    text-align: center;
}


#single-pixad-booking-modal label,
.extra_service_title_item .extr-left,
.extra_service_title_item .extr-right {
    color: #222;
}

#booking_car_form {
    padding: 0;
    margin: 0;
    text-align: left;
}

#single-pixad-booking-modal .modal-body {
    position: relative;
    padding: 0;
}

#single-pixad-autos-modal .modal-dialog,
#single-pixad-extra-modal .modal-dialog {
    padding-top: 2%;
}

#single-pixad-extra-modal .modal-dialog,
#single-pixad-extra-modal .modal-dialog {
    padding-top: unset;
    height: 100%;
    margin: auto;
    top: auto;
    bottom: auto;
    align-items: center;
    vertical-align: middle;
    display: flex;
    z-index: 9999;
}

#single-pixad-extra-modal .modal-dialog .modal-content .modal-body {
    width: 600px;
    column-count: 2;
}

#single-pixad-extra-modal .modal-dialog .modal-content .modal-body .extra_service_title_item {
    display: inline-flex;
    width: 100%;
}

#single-pixad-extra-modal .modal-dialog .modal-content .modal-body .extra_service_title_item .extr-left {
    width: 50%;
}

#single-pixad-extra-modal .modal-dialog .modal-content .modal-body .extra_service_title_item .extr-right {
    width: 45%;
    text-align: right;
    margin-right: 15px;
}

#pixad-listing.list .card__desc_wrap {
    max-width: 70%;
    float: left;
}

#pixad-listing.list .card__price {
    max-width: 29%;
    float: right;
    padding-right: 3%;
}


.comment-list .comment-info-content * {
    font-style: normal;
}

html .comment-reply .btn {
    background-color: #f8f8f8;
    box-shadow: none;
}

html .comment-reply .btn:hover {
    color: #fff;
}

.after-price-text {
    color: #999;
    font-size: 12px;
    padding-left: 5px;
}

.car-details__price-inner .after-price-text {
    color: #fff;
    font-size: 14px;
    padding-left: 5px;
    font-weight: 400;
}

.card__wrap-label.sale {
    display: none !important;
}

#pixad-listing.grid .auto-sale-price del {
    display: none;
}


.slider-grid__inner_mod-b .slider-grid__price .after-price-text {
    display: block;
    font-size: 11px;
}


.slider-grid__inner_mod-b .slider-grid__price del {
    display: none;
}


.slider-grid__inner_mod-b .slider-grid__price {
    text-align: center;
}

@media (max-width: 768px) {
    .list-progress__inner {
        max-width: 57%;
    }
}

#pixad-listing.list .star-rating {
    margin-top: -5px !important;
    margin-bottom: 10px !important;
}

#pixad-listing.grid .star-rating {
    margin-top: -7px;
    margin-bottom: 15px;
}

.auto-promo-image {
    text-align: center;
}

.auto-promo-image img {
    max-width: 90%;
    height: auto;
}

#pixad-listing.list .promo_gallery_wrapper {
    clear: both;
    display: inline-block;
    width: 100%;
    position: absolute;
    top: 15px;
    right: 0;
    text-align: right;
}



#pixad-listing.list .promo_gallery_wrapper ul {
    margin-left: 0;
    padding-left: 0;
}

#pixad-listing.list .promo_gallery_wrapper li {
    display: inline-block;
    padding: 0 1% 1% 1%;
    max-width: 13%;
    text-align: left;
}


#pixad-listing.list .promo_gallery_wrapper li img {
    max-width: 50px;
    height: auto;
}


aside .promo_gallery_wrapper ul {
    margin: 0;
    padding: 0;
    list-style: none;
    text-align: center;
}


aside .promo_gallery_wrapper.auto-promo-inline ul li {
    display: inline-block;
    text-align: center;
    list-style: none;
    margin: 3%;
    padding: 0;
    width: 26%;
}


aside .promo_gallery_wrapper ul img {
    max-width: 100%;
    height: auto;
    margin: 10px 0 0 0;
}


aside .promo_gallery_wrapper li {
    display: inline-block;
    text-align: center;
    list-style: none;
    margin: 0;
    padding: 0;
    width: 100%;
}

.tab-content .comment-reply {
    display: none !important;
}

.tab-content .star-rating {
    margin-bottom: 10px;
}

html #findCarNowForm .period_picker_input .period_button_text {
    color: #222;
}

html .period_picker_input {
    border: 0;
    line-height: 38px;
}


html .period_picker_input .period_button_text {
    color: #999;
}


html .period_picker_input:before,
html .rb_field select {
    background: #f5f5f5;
    color: #999;
}

/* Custom Post Widget */

.custom-post-item img {
    width: 100%;
    height: auto;
}

.custom-post-item .cpi-image-wrapper {
    margin-bottom: 20px;
}

.custom-post-item h4 {
    margin: 0;
    padding: 0 0 20px 0;
    font-size: 20px;
    font-weight: 600;
}

.custom-post-item .cpi-image-wrapper a {
    display: block;
    height: 100%;
}

.custom-post-item ul {
    list-style: none;
    display: flex;
    padding-left: 0;
    padding: 7px 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    margin-bottom: 25px;
}

.custom-post-item ul li {
    margin-right: 15px;
    color: #999;
    font-size: 14px;
}

.custom-post-item ul li i {
    margin-right: 5px;
}

.custom-post-item h4 a {
    color: #222;
    line-height: 1.7;
    font-size: 20px;
}


.cpi-excerpt {
    font-size: 14px;
    line-height: 1.7;
    padding-bottom: 25px;
}

.cpi-link-more {
    font-size: 16px;
    font-weight: 500;
    color: inherit;
    display: none;
}


.cpi-link-more span {
    padding-left: 3px;
}



.custom-post-padding {
    background: #fff;
    padding: 10px;
    text-align: center;
}

.custom-post-item.custom-post-padding h4,
.custom-post-item.custom-post-padding .cpi-excerpt {
    text-align: center;
}

.custom-post-item.custom-post-padding .cpi-date-wrapper,
.custom-post-item.custom-post-padding .cpi-link-more {
    display: none;
}


.custom-post-item.custom-post-padding .cpi-excerpt {
    padding: 0 25px 25px 25px;
}


html .kswr-slickslider-container[data-arrows-position=middle] .slick-next {
    right: -35px;
}

html .kswr-slickslider-container[data-arrows-position=middle] .slick-prev {
    left: -35px;
}

.widget .section_letter .letter .letter__inner {
    width: auto;
}


@media (max-width: 600px) {

    .home-template .post .entry-main__inner {
        padding-right: 60px !important;
    }

    .home-template .post .entry-title a {
        padding-right: 62px;
        font-size: 14px;
    }

    html .home-template .post_mod-a:nth-child(even) .entry-date,
    html .home-template .post_mod-a:nth-child(odd) .entry-date {
        left: auto;
        right: 25px;
    }


}


#pixad-listing.list .card__title {
    margin-top: 0;
    position: relative;
    z-index: 9;
}

#pixad-listing .card__img {
    position: relative;
    z-index: 10;
}


.error404 .min-header,
.error404 .header,
.error404 .block-title,
.error404 .footer {
    display: none !important;
}



.page-404 {
    text-align: center;
}



.listing-car-item-meta .after-price-text {
    color: #fff;
    font-size: 10px;
    font-weight: normal;
}



/* TAXI DEMO */



.amount-taxi .list-progress__item:nth-child(1) {
    background-image: url(images/taxi/box1.png) !important;
}

.amount-taxi .list-progress__item:nth-child(2) {
    background-image: url(images/taxi/box2.png) !important;
}

.amount-taxi .list-progress__item:nth-child(3) {
    background-image: url(images/taxi/box3.png) !important;
}

.amount-taxi .list-progress__item:nth-child(4) {
    background-image: url(images/taxi/box4.png) !important;
}

@media only screen and (max-width:480px) {

    html .amount-taxi .list-progress__item .list-progress__inner {
        text-align: center;
        margin-left: 0;
        padding-top: 20px;
        width: 100%;
        float: none;
    }

}



.amount-taxi .list-progress__name {
    color: #222222 !important;
}

.amount-taxi .list-progress__item {
    width: 250px !important;
    height: 120px;
    margin-right: 0px;
    margin-left: 0px;
}

.amount-taxi .list-progress__item .list-progress__inner {
    text-align: center;
    margin-left: 60px;
}

.amount-taxi .list-progress__item .icon {
    display: none;
}

.amount-taxi .list-progress .chart {
    color: #222 !important;
}



html .header-menu-middle .top-bar {
    background: #f4f4f4 !important;
}

.header-menu-middle .header-navibox-2 {
    border-bottom: 0 !important;
    border-top: 0 !important;
    background: #1c1c1c !important;
}


.header-menu-middle .header-navibox-2 li a {
    text-transform: uppercase;
    color: #fff !important;
}

.header-menu-middle .yamm li {
    display: inline-block;
    list-style: none;
    margin: 0;
    padding: 0;
    float: none;
}

.header-menu-middle .yamm {
    float: none;
    width: 100%;
    text-align: center;
}


.header-menu-middle .header-social-link a i {
    color: #222 !important;
}


.header-menu-middle .top-bar ul {
    display: inline-block;
    vertical-align: top;
    float: none;
    margin-right: 15px;
}

.header-menu-middle .top-bar .header-social-link {
    position: relative;
    top: 2px;
}

.header-menu-middle .header-social-link a {
    padding: 0px 5px !important;
}


.header-menu-middle .top-bar li {
    display: inline-block;
    font-size: 14px;
    text-transform: none;
    margin-left: 5px;
    font-weight: normal;
}


.header-menu-middle .phone-menu-info span {
    display: inline-block;
    width: 100%;
    font-weight: 600;
}

.header-menu-middle .phone-menu-info span:first-child {
    font-size: 15px;
    font-weight: normal;
}

.header-menu-middle .phone-menu i {
    font-size: 30px;
    position: absolute;
    top: 13px;
    margin-right: 0;
    left: 0;
}

.header-menu-middle .phone-menu-info {
    display: inline-block;
    vertical-align: top;
}


.header-menu-middle .header-navibox-search {
    position: relative;
    padding-top: 10px;
    padding-left: 20px;
}


.header-menu-middle input[type=text] {
    border: 1px solid #ddd;
    box-shadow: none;
    padding: 2px 20px 2px 10px;
    height: 40px;
    border-radius: 0 !important;

}


.header-menu-middle .header-navibox-search .btn {
    position: relative;
    right: 10px;
    top: 0;
    padding: 9px 12px 8px 15px;
    height: 40px;
}

.header-menu-middle .header-navibox-search .btn span {
    transform: skewX(17deg);
    display: block;
    font-size: 17px;
    color: #fff;
}

.header-menu-middle #nav > .container {
    position: relative;
    padding: 25px 0 30px 0;
}


.header-menu-middle .nav-custom-info-wrap {
    text-align: right;
}


.header-menu-middle .header-cart-count {
    position: absolute;
    top: -5px;
    right: -8px;
    padding: 4px 0 1px 0px;
    border-radius: 100px;
    font-size: 9px;
    width: 17px;
    height: 17px;
    line-height: 11px;
    text-align: center;
    color: #fff;
    font-weight: normal;
}


.nav-custom-info {
    display: inline-block;
    vertical-align: top;
    padding-left: 10px;
    position: relative;
}

.nav-custom-info .striped-icon-nav {
    font-size: 17px;
    position: relative;
    z-index: 2;
    width: 49px;
    height: 50px;
    margin: auto;
    cursor: pointer;
    -webkit-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
    text-align: center;
    border-radius: 0;
    line-height: 50px;
    background: none;
    border: 1px solid #ddd;
    float: left;
    margin-right: 0;
    top: 4px;
}


.nav-custom-info:hover .header_type5_block1_content {
    display: block;
}

.header_type5_block1_content {
    float: none;
    background: #fff;
    position: absolute;
    z-index: 77;
    top: 60px;
    right: 0;
    border: 1px solid #ddd;
    padding: 20px;
    text-align: left;
    width: 200px;
    display: none;
}

.header_type5_rblock_link a {
    color: #fff !important;
}

.nav-custom-cart .header_type5_block1_content {
    min-width: 300px;
    padding: 0;
}


.nav-custom-cart .media img {
    min-width: 130px;
}

.nav-custom-info .striped-icon-nav {
    font-size: 17px;
    position: relative;
    z-index: 2;
    width: 49px;
    height: 50px;
    margin: auto;
    cursor: pointer;
    -webkit-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
    text-align: center;
    border-radius: 0;
    line-height: 50px;
    background: none;
    border: 1px solid #ddd;
    float: left;
    margin-right: 0;
    top: 4px;
}




@media (max-width: 1000px) {


    html .promo-set {
        bottom: 20px;
        right: auto;
        left: 20px;
    }

}


#booking_car_info .car-details__price-inner {
    transform: skewX(0deg);
}


html #booking_car_info .booking_form {
    background: #fff !important;
    border: 0;
    padding-bottom: 0;
}



#booking_car_info .rb_field input[type=text] {
    background: #f5f5f5;
    color: #999;
    border: 1px solid #eeeeee;
    height: 40px;
}

.hide_end_time {
    display: none;
}

.tab-content .data-list-descriptions .dd-item {
    float: left;
    width: 47%;
    margin-left: 2%;

}

.tab-content .data-list-descriptions {
    overflow: hidden;
}

.tab-content .widget {
    padding: 0;
}

.tab-content .widget-content {
    margin-top: 0;
    margin-bottom: 0;
}

.vc-auto-search div.select input[type=text] {
    height: 39px;
    padding: 5px 10px;
    margin: 0;
    color: #222;
}

.vc-auto-search .jelect-current {
    padding: 11px 36px 11px 10px;
}


aside .pix-input-time {
    height: 39px !important;
    color: #999 !important;
    background-color: #f5f5f5 !important;
    padding: 5px 10px !important;
}



@media (max-width: 768px) {

    #pixad-listing.grid .col-md-4 {
        max-width: 49%;
        display: inline-block;
        vertical-align: top;
        padding: 0;
    }

    #pixad-listing.grid .slider-grid__inner {
        margin-bottom: 0;
    }

    #pixad-listing.grid .tmpl-slider-grid__info li {
        padding: 0px;
        font-size: 11px;
    }

    #pixad-listing.grid .tmpl-slider-grid__name {
        font-size: 12px !important;
    }

    #pixad-listing.grid .tmpl-slider-grid__info {
        padding-bottom: 0;
    }

    #pixad-listing.grid .tmpl-slider-grid__info li:first-child:before,
    #pixad-listing.grid .tmpl-slider-grid__info li:after {
        display: none;
    }

    #pixad-listing.grid .card__img {
        padding-top: 0;
    }


    #pixad-listing.grid .slider-grid__inner_mod-b .slider-grid__price {
        font-size: 11px;
    }

    html #pixad-listing.grid .card__wrap-label {
        top: 6px;
        left: 10px;
    }


    html body .sorting__item {
        width: auto;
        margin-right: 8px;
    }

    html .sorting__title {
        display: none !important;
    }

    html .sorting__item.view-by {
        float: left;
    }


}


.staff-no-skill {
    background: #fff;
    transition: all .3s;
}

.staff-no-skill .staff-progress {
    display: none;
}



.post .entry-footer {
    clear: both;
}


html .b-submit__aside-step-inner-info {
    width: 77%;
}


html .b-submit__aside-step-inner-icon {
    width: 17%;
}

html .b-submit__aside-step-inner-info h4 {
    font-size: 11px;
    line-height: 1.3;
}

html .b-submit__aside-step-inner {
    padding: 20px 0px 15px 15px;
}

.pms-account-subscription-details-table td:first-of-type {
    /* background-image: url(media/bg/texture-1.gif) !important; */
}

.pms-account-subscription-details-table td {
    padding: 10px 20px;
    border: 1px solid #ddd;
    background: #fff;
}

.pms-form {
    margin-bottom: 1em;
    background: #fff;
    padding: 30px;
    border: 1px solid #ddd;
    display: block;
    margin: 0 auto;
    max-width: 500px;
    text-align: center;
}

.pms-form > input[type=submit] {
    margin-bottom: 10px;
}

.pms-form input[type=text],
.pms-form input[type=password],
.pms-form input[type=email],
.pms-form input[type=textarea],
#pms_login input[type=text],
#pms_login input[type=password],
#pms_login input[type=email] {
    width: 100%;
    background: #f5f5f5;
    color: #999;
}

#pms_register-form {
    max-width: 800px;
    text-align: left;
}

#pms_register-form .pms-field {
    width: 45%;
    display: inline-block;
    vertical-align: top;
    margin: 2%;
    margin-bottom: 0;
    text-align: left;
}

.pixad-text-warning {
    color: red;
}

#single-pixad-autos-modal .modal-content,
#single-pixad-extra-modal .modal-content {
    background: #f5f5f5;
}

.elementor-default #single-pixad-autos-modal .modal-content,
.elementor-default #single-pixad-extra-modal .modal-content {
    background: #fff;
}

.img-compare-none {
    display: none;
}

#slider-price_min-two {
    width: 50%;
    margin: 0 25%;

}

.car-locator-container {
    width: 255px;
}

.car-locator-container img {
    padding-bottom: 10px;
}

.car-locator-phone {
    font-size: 16px;
    color: #0172dc;
    position: relative;
}


.car-locator-phone:hover {
    text-decoration: none;
    color: red;
}

.car-locator-company {
    font-weight: bold;
    font-size: 14px;
    color: #222;
    line-height: 1.5;
    padding-bottom: 5px;
}


.car-locator-phone:before {
    font-family: 'FontAwesome';
    content: "\f095";
    display: inline-block;
    padding-right: 5px;
    position: relative;
    font-size: 18px;
    top: 2px;
}



.sticky .btn-default:hover {
    color: #fff !important;
}



/* Block: Button */

.wp-block-button {
    color: #fff;
    margin-bottom: 25px;
}

.wp-block-button.alignleft {
    margin-right: 20px;
}

.wp-block-button.alignright {
    margin-left: 20px;
}


.wp-block-button:not(.is-style-outline) .wp-block-button__link {
    background-color: #dc2d13;
    transition: all .2s ease-in;
}

.wp-block-button:not(.is-style-outline) .wp-block-button__link:hover {
    background-color: #222;
}


.wp-block-button.is-style-outline .wp-block-button__link {
    border-color: #dc2d13;
    color: #dc2d13;
    transition: all .2s ease-in
}

.wp-block-button.is-style-outline .wp-block-button__link:hover {
    border-color: #222;
    color: #222;
}


.wp-block-button:not(.is-style-outline) a.wp-block-button__link {
    color: #fff;
}

.wp-block-button__link a {
    text-decoration: underline;
}


.tmpl-plugins-not-activated .post-nav {
    display: none;
}

.tmpl-plugins-not-activated .comment-respond {
    margin-top: 45px;
}




/* Block: Cover */


.wp-block-cover.has-background-dim,
.wp-block-media-text {
    margin-bottom: 1.1rem;
}


.wp-block-cover-text a {
    color: #fff !important;
}

.wp-block-cover-text a:hover {
    color: #fff !important;
    text-decoration: underline !important;
}


.wp-block-gallery.columns-2.is-cropped,
.wp-block-gallery.columns-3.is-cropped,
.wp-block-gallery.columns-4.is-cropped,
.wp-block-gallery.columns-5.is-cropped,
.wp-block-gallery.columns-6.is-cropped,
.wp-block-gallery.columns-7.is-cropped,
.wp-block-gallery.columns-8.is-cropped {
    margin-bottom: 1.1rem;
}

.blocks-gallery-grid + .blocks-gallery-caption {
    position: relative;
    top: -10px;
}


.wp-block-cover-image-text,
.wp-block-cover-text,
section.wp-block-cover-image h2 {
    color: #fff !important;
}

.wp-block-cover.alignleft {
    margin-right: 25px;
}

.wp-block-cover.alignright {
    margin-left: 25px;
}


.wp-block-gallery.alignleft {
    margin-right: 25px;
}

.wp-block-gallery.alignright {
    margin-left: 25px;
}

.post_mod-b .entry-content .wp-block-quote {
    border-left: 3px solid #222;
}


.post_mod-b .entry-content blockquote {
    position: relative;
    margin: 0 0 30px !important;
    font: italic 400 16px/26px 'Droid Serif';
    color: #222;
    padding: 25px 25px 25px 60px !important;
    background: #f7f7f7;
}


.post_mod-b .entry-content .wp-block-pullquote blockquote {
    padding-left: 25px !important;
    width: 100%;
    max-width: 100% !important;
    text-align: center;
}


.post_mod-b .entry-content .wp-block-pullquote.has-background blockquote {
    background: none !important;
}




.post_mod-b .entry-content .wp-block-pullquote blockquote:before {
    left: 50%;
    top: -8px;
    margin-left: -3px;
}

.entry-content iframe {
    max-width: 100%;
    height: 400px;
}


.entry-content .wp-block-calendar {
    margin: 20px 0;
}

.entry-content .wp-block-calendar table {
    margin: 20px 0;
}


.entry-content .wp-block-latest-posts.wp-block-latest-posts__list,
.entry-content .wp-block-latest-comments,
.entry-content .wp-block-rss {
    padding-left: 0;
}

.entry-content .wp-block-search .wp-block-search__input {
    display: block;
    width: 100%;
    height: 52px;
    font-size: 12px;
    line-height: 1.42857143;
    color: #999;
    background-color: #f7f7f7;
    background-image: none;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    border: 1px solid #eeeeed;
    margin-bottom: 18px;
    border-bottom: 1px solid transparent;
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    padding: 20px;
}

.entry-content .wp-block-search .wp-block-search__button {
    background-color: #dc2d13;
    padding: 14px 29px 14px;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    border: none;
    box-shadow: 5px 0 0 0 #555;
    height: 52px;
    text-transform: uppercase;
    margin-left: -3px;
}

.wp-block-group__inner-container {
    padding: 0px;
    margin-bottom: 20px;
}


html .entry-main .entry-meta__item {
    color: #222;
}


html .entry-main .entry-meta__item a {
    color: #999;
}

html .entry-main .entry-meta__item a:hover {
    color: #222;
}



html .post .entry-media {
    background: transparent;
}


.tmpl-plugins-not-activated .post .decor-1 {
    margin-bottom: 25px;
}


.tmpl-plugins-not-activated .comment-list {
    margin-top: 45px;
}

.pingback,
.trackback {
    list-style: none;
    padding-bottom: 15px;
}

.no-comments {
    padding-top: 25px;
}


.entry-media blockquote + a {
    display: none;
}


html .post .entry-title,
html .post .entry-title a {
    word-break: break-word;
    padding-right: 60px;
}



html .tmpl-plugins-not-activated .sticky.post .entry-media {
    min-height: auto;
}

html .tmpl-plugins-not-activated .sticky.post .entry-main__inner:after {
    background-color: #222;
}


html .tmpl-plugins-not-activated .entry-media .entry-btn {
    display: none;
}


html .tmpl-plugins-not-activated .sticky.post .post-btn {
    color: #fff;
    background-color: #dc2d13;
}


html .tmpl-plugins-not-activated .sticky.post {
    border: 2px solid #222;
}

.sidebar .comment-author-link a,
.sidebar .rsswidget {
    font-weight: bold !important;
}


.sidebar .widget_rss .rss-date {
    color: #999;
}

.sidebar .tagcloud a {
    font-size: 10px !important;
    text-transform: uppercase;
    border: 1px solid #eee;
    padding: 10px;
    color: #777 !important;
    display: inline-block;
    margin-bottom: 4px;
    line-height: 0.70;
}


.sidebar .tagcloud a:hover {
    text-decoration: none;
    color: #fff !important;
}

.sidebar .submenu-controll-inner {
    display: none;
}

.sidebar .wp-calendar-nav {
    padding: 20px;
}

.tmpl-plugins-not-activated .header-navibox-3 {
    display: none;
}


html body .submenu-controll-inner {
    top: 7px;
}








.fl-login-sub-menu {
    -webkit-transform: translateY(30px);
    -ms-transform: translateY(30px);
    transform: translateY(30px);
    z-index: 999;
    position: absolute;
    padding: 35px 25px;
    top: 70px;
    background: #fff;
    max-width: 380px;
    width: 375px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    border: 1px solid #eaeaeb;
    -webkit-transition: .3s ease;
    -o-transition: .3s ease;
    transition: .3s ease;
    visibility: hidden;
    opacity: 0;
}

.fl-login-sub-menu.opened {
    opacity: 1;
    visibility: visible;
    -webkit-transition: .3s ease;
    -o-transition: .3s ease;
    transition: .3s ease;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
}

.fl-login-sub-menu .fl-login-form-entry.login-in .fl-login_form {
    display: block;
}

.fl-login-sub-menu .fl-login-form-entry.login-in .fl-register-sub-menu {
    display: none;
}

.fl-login-sub-menu .fl-login-form-entry.register .fl-register-sub-menu {
    display: block;
}

.fl-login-sub-menu .fl-login-form-entry.register .fl-login_form {
    display: none;
}

.fl-login-sub-menu .fl-login-form-entry.loading {
    -webkit-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
    opacity: 0.8;
}


.fl-login-sub-menu .input {
    background: #f7f7f7;
    border: 1px solid #eeeeed;
}

.fl-login_form .login_form_title,
.fl-register-sub-menu .register_form_title {
    padding-bottom: 15px;
    margin-top: -10px;
    padding-top: 0;
}

.registration-text {
    padding-right: 10px;
}

.fl-login_form .remember--lost-password-wrapper .remember-login-checkbox-label {
    font-weight: normal;
}

.lost-password-link {
    padding-left: 5px;
}

.fl-login_form .registration-text-wrapper a {
    font-weight: 300;
}

.fl-login-sub-menu p {
    margin-bottom: 10px;
}

.fl-login_form .login-submit,
.fl-register-sub-menu .submit {
    margin-bottom: 20px;
}

.woocommerce-ResetPassword.lost_reset_password {
    max-width: 700px;
    margin: 0 auto 30px !important;
}

@media only screen and (max-width:768px) {

    html .fl-login-register--header {
        display: none !important;
    }

}





/*Magnific Gallery*/




.mfp-zoom-in {}

.mfp-zoom-in .mfp-figure,
.mfp-zoom-in .mfp-iframe-holder .mfp-iframe-scaler {
    opacity: 0;
    transition: all 0.3s ease-out;
    transform: scale(0.98);
}

.mfp-zoom-in.mfp-bg,
.mfp-zoom-in .mfp-preloader {
    opacity: 0;
    transition: all 0.3s ease-out;
}

.mfp-zoom-in.mfp-image-loaded .mfp-figure,
.mfp-zoom-in.mfp-ready .mfp-iframe-holder .mfp-iframe-scaler {
    opacity: 1;
    transform: scale(1);
}

.mfp-zoom-in.mfp-ready.mfp-bg,
.mfp-zoom-in.mfp-ready .mfp-preloader {
    opacity: 0.85;
}

.mfp-zoom-in.mfp-removing .mfp-figure,
.mfp-zoom-in.mfp-removing .mfp-iframe-holder .mfp-iframe-scaler {
    transform: scale(0.98);
    opacity: 0;
}

.mfp-zoom-in.mfp-removing.mfp-bg,
.mfp-zoom-in.mfp-removing .mfp-preloader {
    opacity: 0;
}

.mfp-iframe-scaler {
    overflow: visible;
}

.mfp-zoom-out-cur {
    cursor: auto;
}

.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
    cursor: pointer;
}

.mfp-close:before {
    display: none !important;
    font: normal normal normal 14px/1 FontAwesome;
    content: "\f00d";
    font-size: 28px;
    position: relative;
    top: -3px;
}


.mfp-title {
    display: none !important;
}


/*BOOKING HOURS*/


html .extra_service_category_icon {
    margin-right: 7px;
    font-size: 15px;
    color: #222 !important;
}


html aside .extra_service_category {
    font-weight: bold;
    color: #222;
    display: inline-block;
    text-transform: uppercase;
}


html aside .extra_service_category {
    margin-top: 25px;
}


html .hours_price_title_item span {
    font-weight: 500;
    font-size: 13px;
    padding-top: 7px;
    padding-left: 2px;
    color: #222;
}

html .hours_price_title_item input[type=checkbox] {
    margin-left: 5px;
    top: 5px;
    position: relative;
}


html .hours_price_title_item label.pixad_price_hour {
    padding-bottom: 0;
}


html #single-pixad-extra-modal .modal-dialog .modal-content .modal-body .extra_service_title_item {
    padding-bottom: 5px;
}








/*widget block_content*/

html .wp-block-group__inner-container h2 {
    color: #333333;
    font-size: 14px;
    text-transform: uppercase;
    margin-bottom: 25px;
    font-weight: bold;
    position: relative;
}


html .wp-block-group__inner-container h2:after {
    position: absolute;
    top: -5px;
    left: -32px;
    width: 4px;
    height: 25px;
    background-color: #999;
    content: '';
}

html .wp-block-group {
    padding: 0;
    margin-bottom: 25px;
}


html .wp-block-latest-posts.wp-block-latest-posts__list li a {
    font-size: 14px;
    font-weight: normal;
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    color: inherit;
}

.wp-block-group ol.wp-block-latest-comments {
    margin-left: 0;
    padding: 0;
    background: transparent;
}

html .wp-block-latest-posts.wp-block-latest-posts__list,
.wp-block-archives-list wp-block-archives {
    list-style: none;
    padding-left: 0;
    margin-left: 0;
}


.wp-block-archives-list.wp-block-archives {
    list-style: none;
    padding-left: 0;
    margin-left: 0;
}

.wp-block-group footer {
    background: transparent;
    color: #222;
    line-height: 25px;
}


.wp-block-group footer a,
.wp-block-archives-list.wp-block-archives a,
.wp-block-group a {
    color: #222;
}

.widget.widget_search .wp-block-search__inside-wrapper {
    position: relative;
}

#block-2 .wp-block-search__label {
    display: none;
}

#wp-block-search__input-1 {
    color: #2a2d32;
    text-transform: uppercase;
    background: none;
    box-shadow: none !important;
    outline: none;
    border: none;
    border: 1px solid #dddddd;
    border-radius: 0;
    border-radius: none;
    padding-left: 0;
    height: 50px;
    font-size: 12px;
    color: #000;
    line-height: 1.7;
}


html #block-2 .wp-block-search .wp-block-search__button {
    background: #f7f7f7;
    border: 1px solid #ccc;
    padding: 0.375em 0.625em;
    color: #32373c;
    margin-left: 0;
    word-break: normal;
    background: #ff6400;
    color: #fff;
    width: auto;
    line-height: 20px;
    text-transform: uppercase;
    padding: 13px 14px;
    border: 0;
    right: 0;
    top: 0;
    height: 49px;
    font-size: 11px;
}


html .wp-block-group footer a {
    color: #222;
    text-decoration: underline;
}


html .sidebar-item select {
    max-width: 100%;
    width: 100%;
    border: 1px solid #ddd;
    padding: 6px;
}

.sidebar #today {
    background-color: #222;
    color: #fff;
}


.sidebar #today a {
    color: #fff;
}


.wp-block-group__inner-container li {
    padding: 5px 0;
    margin: 0 0 10px 0;
    list-style: none;
    border-bottom: 1px solid #ececec;
    font-size: 12px;
    color: #666;
    line-height: 1.55;
    text-transform: uppercase;
    position: relative;
}

.wp-block-latest-posts.wp-block-latest-posts__list li a {
    color: #222;
}


html .widget .wp-block-group {
    margin-bottom: 0;
}


html .widget .wp-block-group__inner-container {
    padding: 0px;
    margin-bottom: 0;
}

.widget {
    padding: 26px 32px 0;
    overflow: hidden;
}


.elementor-widget-templines-vehicle-search {
    position: relative;
    z-index: 77;
}

.sidebar .widget {
    overflow: scroll;
}




.mobile-filter {
    display: none !important;
}

.card__label,
.link,
.ui-subtitle-block_mod-a,
.ui-subtitle-block_mod-b,
.ui-title-block,
.ui-title-inner,
.ui-title-page,
input[type=submit] {
    text-transform: uppercase
}

.block-title:after,
.block-title:before,
.border-section-top:after,
.border-section-top:before,
.btn-effect:after,
.decor-1:after,
.decor-2:after,
.decor-2:before,
.helper:before,
.vc_row-overlay:after {
    content: ''
}

.footer-title,
.home-template .wpb_content_element {
    margin-bottom: 0
}

.block-title,
.btn-effect,
.footer,
.home-template,
.ui-btn_wrap {
    overflow: hidden
}

.bg_inner,
.logged-in,
.rtd {
    position: relative
}

.form-search__input:focus,
select:focus {
    outline-style: none
}

html.js {
    margin-top: 0 !important
}

.logged-in.admin-bar {
    top: 32px
}

body p {
    font-weight: 300;
    line-height: 1.6923
}

.ui-title-block,
.ui-title-page {
    font-weight: 700
}

input::-webkit-input-placeholder {
    color: #aaa
}

input::-moz-placeholder {
    color: #aaa
}

img.pull-right {
    padding-left: 20px
}

.form-contact .text-center {
    text-align: center;
    width: 100%
}

img.pull-left {
    padding-right: 20px
}

.text-black * {
    color: #222
}

.text-black .ui-title-block {
    color: #222 !important
}

.text-black .ui-subtitle-block_mod-a {
    color: #777 !important
}

#wrapper {
    margin: auto
}



.ui-title-page {
    margin-bottom: 30px;
    padding-right: 10px;
    padding-left: 10px;
    font-family: Ubuntu;
    font-size: 34px;
    color: #fff
}

.brand-link,
.card__label,
.footer-title,
.ui-title-block,
.ui-title-inner {
    font-family: Raleway
}

.ui-title-block {
    font-size: 40px;
    color: #222
}

.text-white .ui-title-block_mod-a,
.text-white .ui-title-block_mod-a * {
    color: #fff
}

.ui-title-block_mod-a {
    color: #222
}

.ui-subtitle-block_mod-a {
    font-size: 16px;
    font-weight: 400;
    letter-spacing: .1em
}

.ui-subtitle-block_mod-b {
    font-size: 13px;
    font-weight: 300;
    color: #777
}

.ui-title-inner {
    margin-bottom: 12px;
    font-size: 16px;
    font-weight: 700;
    color: #222
}

.ui-title-inner a {
    color: #222
}

.ui-title-inner_mod-a {
    font-size: 20px
}

.ui-description {
    font-size: 14px;
    font-weight: 500;
    color: #555
}

.brand-link,
.card-list__title,
.card__label,
.card__price,
.link,
.sorting__title {
    font-weight: 500;
}

.link {
    display: inline-block;
    margin-bottom: 18px;
    margin-left: 4px;
    padding: 4px 17px;
    font-size: 13px;
    color: #555
}

.btn-primary.btn-effect:after {
    background-color: #000
}

.ui-btn_wrap {
    display: block
}

.ui-btn_mod-a {
    display: inline-block;
    transform: skewX(10deg)
}

.ui-btn_mod-a_inner {
    display: block;
    transform: skewX(-10deg)
}

.br {
    display: block
}

.helper,
.helper:before {
    display: inline-block;
    vertical-align: middle
}

.helper:before {
    width: 0;
    height: 100%
}

.rtd .vc_row-padding-both {
    padding-top: 10px !important;
    padding-bottom: 10px !important
}

.dropdown-menu .vc_row-padding-both {
    padding: 30px !important
}

.vc_row-padding-both {
    padding-top: 80px !important;
    padding-bottom: 80px !important
}

.vc_row-padding-top {
    padding-top: 42px !important
}

.rtd .vc_row-padding-top {
    padding-top: 10px !important
}

.vc_row-padding-bottom {
    padding-bottom: 42px !important
}

.rtd .vc_row-padding-bottom {
    padding-bottom: 10px !important
}

.vc_row-padding-both .bg_inner,
.vc_row-padding-top .bg_inner {
    margin-top: -50px
}

input[type=submit],
button[type=submit] {
    background-color: #dc2d13;
    padding: 15px 29px 14px;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    border: none;
    box-shadow: 5px 0 0 0 #555
}

html span.wpcf7-not-valid-tip {
    margin-top: -10px;
    margin-bottom: 10px
}

.bg_inner {
    z-index: 99 !important;
    margin-top: -25px;
    padding-bottom: 80px;
    top: -10px
}

.section-title-box {
    position: relative;
    z-index: 8 !important;
    padding-bottom: 60px
}

.owl-theme .owl-controls {
    position: absolute;
    z-index: 9
}

.vc_row-overlay {
    display: inline-block;
    position: absolute !important;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0
}

.decor-1:after,
.vc_row-overlay:after {
    display: block
}

.vc_row-overlay:after {
    background-color: rgba(0, 0, 0, .1);
    position: absolute;
    left: 0;
    top: 0;
    z-index: 0;
    width: 100%;
    height: 100%
}

.decor-1,
.decor-1:after {
    width: 30px;
    border-top: 1px solid #ccc
}

.vc_row-overlay .wpb_column {
    position: relative;
    z-index: 3
}

@media (min-width:1601px) {
    .big-img.wpb_single_image img {
        max-width: none !important;
        min-width: 100%
    }
}

@media (max-width:1600px) {
    .big-img.wpb_single_image img {
        height: auto;
        max-width: 800px !important;
        vertical-align: top;
        min-width: 100%
    }
}

.decor-1 {
    margin-bottom: 20px
}

.decor-1:after {
    margin-top: 2px;
    margin-left: 10px
}

.decor-1_mod-a,
.decor-1_mod-a:after {
    border-top: 1px solid rgba(204, 204, 204, .8)
}

.decor-1_mod-b {
    display: inline-block;
    width: 170px;
    margin: 17px 0 20px -15px
}

.decor-1_mod-b:after {
    width: 170px;
    margin-left: 20px
}

.decor-1_mod-c {
    margin-top: 17px;
    margin-bottom: 30px;
    margin-left: 30px
}

.tab-content .decor-1 {
    margin-top: 19px
}

.decor-2,
.vdecore-bottom .decor-2 {
    display: inline-block;
    margin-top: 6px;
    text-align: center
}

.vdecore-bottom .decor-2 {
    position: absolute;
    bottom: 30px;
    left: 50%;
    z-index: 300;
    margin-left: -20px
}

.decor-2 {
    position: relative
}

.decor-2:after,
.decor-2:before {
    position: absolute;
    top: 5px;
    display: block;
    width: 14px;
    height: 14px;
    transform: rotate(45deg)
}

.decor-2:before {
    right: -10px
}

.decor-2:after {
    left: -10px
}

.decor-2 .icon {
    position: relative;
    display: inline-block;
    width: 23px;
    height: 23px;
    font-size: 12px;
    line-height: 1;
    color: #555;
    border: 3px solid #f5f5f5;
    border-radius: 3px;
    background-color: #ddd;
    z-index: 1;
    transform: rotate(45deg);
    vertical-align: inherit;
    margin: 0
}

.card,
.decor-3 {
    background-color: #fff
}

.decor-2 .icon:before {
    display: block;
    margin: 3px 0 0 1px;
    transform: rotate(-45deg)
}

.decor-3 {
    display: inline-block;
    width: 14px;
    height: 14px;
    margin-right: 14px;
    margin-left: 3px;
    font-size: 8px;
    vertical-align: middle;
    border: 1px solid #ccc;
    transform: rotate(45deg);
    text-align: left
}

.decor-3:before {
    display: block;
    margin: 4% 0 0 32%;
    line-height: 1;
    transform: rotate(-45deg);
    font-size: 8px
}

.brand-link {
    display: block;
    font-size: 14px;
    margin: 40px 0 0;
    height: 40px
}

.brand-link .icon {
    display: inline-block;
    margin-top: 3px;
    padding-right: 10px;
    padding-left: 10px;
    font-size: 9px;
    vertical-align: text-top
}

.border-section-top {
    position: relative;
    overflow: hidden;
    padding-top: 110px
}


.elementor-container .border-section-top {
    padding-top: 45px;
}



.border-section-top:after,
.border-section-top:before {
    position: absolute;
    top: 20px;
    width: 170px;
    height: 80px
}

.border-section-top:before {
    left: -70px;
    box-shadow: 4px 1px 0 2px #f5f5f5;
    transform: skew(-58deg, 10deg)
}

.border-section-top:after {
    right: -70px;
    box-shadow: -4px 1px 0 2px #f5f5f5;
    transform: skew(58deg, -10deg)
}

.border-section-top_mod-a:after,
.border-section-top_mod-a:before {
    background-color: #222
}

.border-section-bottom {
    position: relative;
    bottom: -5px;
    z-index: 10;
    display: inline-block;
    width: 100%
}

.border-section-bottom:after,
.border-section-bottom:before {
    position: absolute;
    bottom: -2px;
    content: ''
}

.border-section-bottom:before {
    right: 127px;
    width: 165px;
    height: 54px;
    background-color: #f5f5f5;
    transform: skewX(-42deg)
}

.border-section-bottom:after {
    right: 35px;
    border-right: 50px solid transparent;
    border-bottom: 55px solid #f5f5f5;
    border-left: 50px solid transparent
}

.border-section-bottom_mod-a:before {
    right: 112px;
    width: 150px;
    height: 15px
}

.border-section-bottom_mod-a:after {
    right: 74px;
    border-right-width: 15px;
    border-bottom-width: 15px;
    border-left-width: 15px
}

.btn-inner {
    display: block;
    transform: skewX(17deg)
}

.btn-effect {
    position: relative;
    z-index: 1
}

.btn-effect:after {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 120%;
    height: 50%;
    opacity: 0;
    z-index: -1;
    transition: all .3s ease 0s;
    transform: translateX(-50%) translateY(-50%) rotate(45deg)
}

.btn-effect:hover:after {
    height: 350%;
    opacity: 1
}

.block-title {
    position: relative;
    display: block;
    margin-bottom: 40px;
    text-align: center
}

.block-title__inner {
    background-position: center top;
    padding-top: 120px;
    padding-bottom: 60px;
    background-size: cover
}


.header-menu-middle + .block-title .block-title__inner {
    padding-top: 35px;
    padding-bottom: 60px;
}

.block-title:after,
.block-title:before {
    position: absolute;
    bottom: -3vw;
    width: 50.01%;
    height: 8vw;
    background-color: #f5f5f5;
    z-index: 101
}

.block-title:before {
    left: 0;
    transform: skewY(4.5deg)
}

.block-title:after {
    right: 0;
    transform: skewY(-4.5deg)
}

.sorting {
    margin-bottom: 30px;
    padding-top: 20px;
    padding-bottom: 10px;
    /* background-image: url(media/bg/texture-1.gif); */
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1)
}

.sorting__inner {
    margin-left: 5px;
    padding-left: 34px;
    box-shadow: -5px 0 0 0 #999
}

.sorting__item {
    display: inline-block;
    margin-right: 30px;
    padding-bottom: 10px
}

.sorting__item.view-by {
    float: right
}

.sorting__item.view-by a.active {
    color: #222
}

.sorting__item.view-by a {
    font-size: 16px;
    margin: 7px 5px 5px;
    color: #999;
    background: #fff;
    border: 1px solid #ddd;
    padding: 2px;
    width: 28px;
    display: inline-block;
    height: 28px;
    text-align: center;
    line-height: 23px
}

.sorting__item.view-by:hover {
    color: #222
}

.sorting__item.view-by .sorting__title {
    display: inline-block;
    margin-right: 10px;
    font-size: 12px;
    color: #555;
    text-transform: uppercase
}

.select_mod-a {
    width: 190px
}

.card {
    margin-bottom: 25px;
    padding: 24px 21px 10px
}

.card__img {
    position: relative;
    float: left;
    width: 235px;
    margin-bottom: 15px
}

.card__wrap-label {
    position: absolute;
    top: 15px;
    left: 18px;
    padding: 10px 16px;
    background: red;
    box-shadow: 5px 0 0 0 #fff;
    transform: skewX(-18deg);
    z-index: 1
}

.grid .card__wrap-label {
    position: absolute;
    top: 10px;
    left: 18px;
    padding: 7px 12px
}

.card__wrap-label.sale {
    position: absolute;
    top: 13px;
    left: 10px;
    bottom: auto;
    padding: 0;
    line-height: 3;
    z-index: 99;
    border-radius: 100%;
    width: 40px;
    height: 40px;
    text-align: center;
    color: #fff;
    transform: none;
    box-shadow: none
}

.card__title {
    margin-top: 12px;
    margin-bottom: 19px;
    margin-left: 0;
}



#pixad-listing.list .card__title {
    margin-top: 0
}

.card__label {
    display: block;
    font-size: 11px;
    color: #fff;
    transform: skewX(18deg)
}

.card__list,
.card__price,
.footer__item,
.header .logo,
.header-contacts__item,
html .header-cart-count {
    display: inline-block
}

.card__inner {
    margin-left: 270px
}

.card__description p {
    margin-bottom: 0;
}

.card__list {
    width: 400px
}

.card-list__row {
    float: left;
    width: 50%;
    margin-bottom: 5px;
    padding-right: 5px;
    font-size: 14px;
    color: #777;
}

.card-list__title {
    padding-right: 2px;
    color: #222;
}

.card__price {
    padding-bottom: 20px;
    font-size: 13px;
    line-height: 18px;
    color: #555;
    vertical-align: top
}

.card__price-number {
    display: block;
    margin-top: 7px;
    font-size: 24px
}

.wrap-nav-tabs {
    margin-bottom: 15px;
    padding: 14px 0 12px;
    /* background-image: url(media/bg/texture-1.gif); */
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1)
}

.wrap-nav-tabs ul a {
    color: #555;
    cursor: default;
    background-color: transparent !important;
    border: 0 !important
}

.accordion .panel .icon,
.accordion .panel-heading .collapsed .btn-collapse {
    background-color: transparent
}

.wrap-nav-tabs ul {
    box-shadow: none !important;
    border: 0 !important;
    border-left: #999 5px solid !important;
    margin-left: 0
}

.accordion .panel-heading .btn-collapse {
    position: absolute;
    top: 15px;
    left: -29px;
    display: block
}

.accordion .panel .icon {
    float: right;
    width: 45px;
    text-align: center
}

.accordion .btn-collapse .icon {
    font: normal normal 30px Raleway;
    line-height: 1
}

.accordion .btn-collapse .icon:before {
    display: block;
    content: '-'
}

.accordion .btn-collapse.collapsed .icon:before {
    margin-top: 1px;
    content: '+'
}

.header {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 110
}

html .dropdown-menu > li > a {
    padding: 7px 20px;
    text-transform: uppercase !important;
    font-size: 12px !important
}

.copyright,
.footer-title,
.footer__btn,
.footer__name,
.letter__btn,
.link-img__title,
.list-services:hover .list-services__title,
.list-staff__wrap_name,
.list-type__name,
.main-block,
.main-slider__btn_inner,
.main-slider__title,
.reviews__category,
.reviews__name,
.reviews__title,
.sidebar label,
.social-block__title {
    text-transform: uppercase
}

.top-bar {
    padding-top: 17px;
    padding-bottom: 6px;
    border-bottom: 1px solid rgba(255, 255, 255, .4) !important;
    background: linear-gradient(0deg, rgba(186, 209, 241, 0) 0, rgba(0, 0, 0, .5) 100%) !important
}

.header-contacts {
    float: left
}

html [data-off-canvas] li a:hover {
    color: #dc2d13
}

html .header-cart-count {
    position: absolute;
    top: -5px;
    right: -14px;
    padding: 4px 0 1px 1px;
    border-radius: 100px;
    font-size: 10px;
    width: 17px;
    height: 17px;
    line-height: 12px;
    text-align: center;
    color: #fff;
    font-weight: 400
}

.header-contacts__item {
    margin-right: 30px;
    color: #fff
}

.header-contacts__item .icon {
    margin-right: 10px
}

.header .social-links {
    float: right;
    margin-right: -12px
}

.list-progress__item .list-progress__inner,
.list-staff__item:nth-child(odd) .list-staff__media {
    float: left
}

.header .social-links > li > a {
    padding-right: 7px;
    padding-left: 7px;
    font-size: 14px;
    color: rgba(255, 255, 255, .5)
}

.header .social-links > li > a:hover {
    color: #fff
}

.header__inner {
    margin-top: 3px;
    border-top: 1px solid rgba(255, 255, 255, .15)
}

.header .logo {
    margin-top: 30px
}

header .navbar-brand img {
    max-width: 100%;
    height: auto
}




.footer {
    padding-bottom: 40px;
    text-align: center;
    padding-top: 45px
}

.footer .border-section-top {
    overflow: initial
}

.footer .border-section-top:after,
.footer .border-section-top:before {
    top: 17px
}

.footer-title {
    margin-top: 10px;
    font-size: 30px;
    font-weight: 700;
    color: #fff
}

.footer__name,
.footer__text {
    font-size: 16px;
    display: inline-block
}

.footer__item {
    margin-top: 46px;
    margin-right: 21px;
    margin-left: 21px
}

.footer__name {
    margin-top: 32px;
    margin-bottom: 10px;
    padding-right: 4px;
    padding-left: 5px;
    color: rgba(255, 255, 255, .5);
    letter-spacing: .1em
}

.footer__text {
    color: #fff
}

.copyright,
.footer__btn:hover {
    color: #999
}

.footer__wrap-btn {
    position: relative;
    width: 300px;
    margin-top: -70px;
    margin-right: auto;
    margin-left: auto;
    border-top: 132px solid #181819;
    border-right: 150px solid transparent;
    border-left: 150px solid transparent;
    z-index: 10;
    text-align: center
}

.footer__btn {
    position: absolute;
    top: -53px;
    left: -10px;
    font-size: 12px;
    color: #999;
    text-decoration: none !important
}

.title-subtitle-wrapper {
    padding-top: 25px;
}

.tab-content .title-subtitle-wrapper {
    padding-top: 0;
}

.title-subtitle-wrapper .title,
.title-subtitle-wrapper .subtitle {
    position: relative;
    margin-top: 0;
    margin-bottom: 12px;
    font-size: 15px;
    color: #222;
    clear: both;
}

.title-subtitle-wrapper .subtitle {
    font-size: 12px;
    color: #777;
    margin-top: -3px;
    font-weight: 400;
}




.about-autor__social a:hover,
.list-categories__link:hover,
.list-descriptions dt:hover,
.list-staff__social > li > a:hover,
.list-tags__link:hover,
.list-type__link:hover,
.post-btn:hover,
.social-block:hover,
.social-block__list > li > a:hover,
.social-links > li > a:hover {
    text-decoration: none
}

.footer__btn:after,
.footer__btn:before {
    position: absolute;
    content: ''
}

.footer__btn:before {
    top: -38px;
    left: -14px;
    border-right: 25px solid transparent;
    border-bottom: 33px solid red;
    border-left: 25px solid transparent;
    z-index: 15
}

.footer__btn:after {
    top: -23px;
    left: 2px;
    border-right: 9px solid transparent;
    border-bottom: 10px solid #eee;
    border-left: 9px solid transparent;
    z-index: 15
}

.copyright {
    margin-top: 43px
}

.copyright__link {
    color: #222
}

.footer .social-links {
    margin-top: 30px
}

.footer .social-links > li > a {
    width: 34px;
    height: 34px;
    padding-top: 7px;
    font-size: 16px;
    color: #999;
    border: 2px solid #999;
    border-radius: 50%;
    background-color: #222127;
    opacity: .5;
    transition: all .3s
}

.link-img__link,
.link-img__title {
    color: #fff;
    transition: all .3s;
    display: block
}

.footer .social-links > li > a:hover {
    opacity: 1
}

.list-mark {
    padding-top: 15px;
    padding-bottom: 15px
}

.list-mark li {
    margin-bottom: 12px
}

.social-links > li > a {
    transition: all .3s
}

.wrap-link-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%
}

.link-img {
    position: absolute;
    top: 0;
    margin-bottom: 0
}

.link-img__item {
    width: 180px
}

.link-img__link:after,
.link-img__link:before {
    width: 100%;
    content: ''
}

.link-img__link {
    position: relative;
    border-bottom-width: 5px;
    border-bottom-style: solid;
    overflow: hidden;
    text-align: center
}

.link-img__link:before {
    position: absolute;
    top: 0;
    left: .1px;
    height: 100%;
    background-color: rgba(0, 0, 0, .5);
    transition: all .3s
}

.link-img__link:after {
    position: absolute;
    top: -38px;
    left: 0;
    height: 50px;
    background-color: #f5f5f5
}

.link-img__link:hover {
    border-color: #222
}

.link-img__link:hover:before {
    background-color: rgba(0, 0, 0, .8)
}

.link-img__title {
    font: 600 15px Raleway;
    text-shadow: 0 0 3px rgba(0, 0, 0, .6);
    transform: rotate(90deg)
}

.link-img__wrap-title {
    position: absolute;
    bottom: 0;
    left: 0;
    margin-bottom: 60px
}

.link-img_mod-a {
    left: 15px
}

.link-img_mod-b {
    right: 10px
}

.link-img_mod-a .link-img__wrap-title {
    right: 0;
    margin-right: -105px;
    line-height: 1
}

.link-img_mod-b .link-img__wrap-title {
    right: 0;
    margin-left: -110px;
    line-height: 1
}

.link-img_mod-a .link-img__link:after {
    transform: skewY(8deg)
}

.link-img_mod-b .link-img__link:after {
    transform: skewY(-8deg)
}

.main-block {
    margin: 40px 350px 86px;
    font-family: Raleway;
    color: #555
}

.main-block__label {
    margin-bottom: 16px;
    font-size: 13px;
    font-weight: 600
}

.main-block__title {
    margin-top: 35px;
    margin-bottom: 46px;
    font-size: 15px;
    font-weight: 700
}

.list-services:hover * {
    color: #222 !important;
}

.main-block__title strong {
    display: block;
    margin-bottom: 7px;
    font-size: 30px
}

.list-services {
    position: relative;
    margin-bottom: 0;
    padding: 70px 22px 30px 0;
    background: #222;
    transition: all 1s
}

.list-services:after {
    position: absolute;
    top: 0;
    right: 0;
    width: 1px;
    height: 100%;
    background-color: #555;
    content: ''
}

.list-services .icon {
    display: block;
    margin-bottom: 70px;
    margin-left: 40px;
    font-size: 70px
}

.list-services i {
    display: block;
    margin-bottom: 70px;
    margin-left: 40px;
    font-size: 70px
}

.list-services svg {
    display: block;
    margin-bottom: 70px;
    margin-left: 40px;
    width: 70px;
    height: fit-content;
}


.list-services .icon:before {
    font-size: 70px
}

.list-services .decor-1 {
    margin-left: 40px
}

.list-services__title {
    margin-bottom: 15px;
    font-family: Raleway;
    font-size: 18px;
    color: #fff
}

.list-services__title * {
    color: #fff
}

.list-services:hover .list-services__title * {
    color: #dc2d13
}

.list-services__title strong {
    display: block;
    margin-top: 4px;
    font-size: 20px;
    font-weight: 600
}

.list-services__description {
    display: none;
    margin-bottom: 17px;
    font-size: 13px;
    line-height: 1.38
}

.list-services__inner {
    padding-left: 35px;
    border-left: 5px solid transparent;
    transition: all .3s
}

.list-services:hover {
    margin-bottom: 0;
    border-bottom: 5px solid #ddd;
    /* background: url(media/bg/texture-1.gif) */
}

.list-progress__item,
.mli_img_wrapper {
    background-size: contain;
    background-repeat: no-repeat
}

.list-services:hover:after {
    content: none
}

.list-staff__info:after,
.list-staff__media:after {
    content: '';
    transition: all .3s
}

.list-services:hover .list-services__description {
    display: block
}

.list-services:hover .decor-1,
.list-services:hover .list-services__title strong {
    display: none
}

.list-services:hover .list-services__title {
    font-size: 16px;
    font-weight: 700
}

.list-services:hover .list-services__inner {
    border-left-color: #999
}

.list-services:hover .icon {
    margin-top: 7px;
    font-size: 85px
}

.list-progress {
    margin-top: 0;
    margin-bottom: 70px;
    text-align: center
}

.list-progress__item {
    position: relative;
    display: inline-block;
    margin-right: 7px;
    margin-left: 7px;
    padding: 20px 0 0;
    vertical-align: top;
    background-position: 0 0
}

.list-progress__item .icon,
.list-progress__item i {
    float: left;
    margin: 0 0 0 30px;
    min-width: 80px
}

.list-progress__item:nth-child(2) .icon,
.list-progress__item:nth-child(3) .icon {
    position: relative;
    top: 12px;
    left: 12px
}

.list-progress__item:nth-child(1) {
    width: 350px;
    height: 122px;
    background-image: url(media/figure/figure-1.svg)
}

.list-progress__item:nth-child(2) {
    width: 360px;
    height: 118px;
    background-image: url(media/figure/figure-2.svg);
    background-position: 0 100%
}

.list-progress__item:nth-child(3) {
    width: 349px;
    height: 120px;
    background-image: url(media/figure/figure-3.png)
}

.list-progress__inner {
    display: inline-block;
    text-align: left
}

.list-progress .chart {
    font-size: 34px;
    font-weight: 700;
    color: #fff
}

.list-progress .icon,
.list-progress i,
.list-progress svg {
    display: inline-block;
    margin-right: 22px;
    line-height: 1
}

.list-progress__item:nth-child(1) .icon,
.list-progress__item:nth-child(1) i {
    font-size: 78px
}

.list-progress__item:nth-child(1) svg {
    width: 78px
}


.list-progress__item:nth-child(2) .icon,
.list-progress__item:nth-child(2) i {
    font-size: 53px
}

.list-progress__item:nth-child(2) svg {
    width: 53px
}


.list-progress__item:nth-child(3) .icon,
.list-progress__item:nth-child(3) i {
    font-size: 58px
}

.list-progress__item:nth-child(3) svg {
    width: 58px
}


.list-progress__name {
    display: block;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    color: #999
}

.list-brands {
    margin-top: 40px
}

.list-brands__item {
    width: 20%;
    margin-right: -2px;
    margin-left: -1px
}

.owl-brands a {
    margin-right: 3px;
    margin-left: 3px;
    background-color: #fff;
    box-shadow: 0 4px 0 0 #ececec;
    display: inline-block;
    padding: 20px;
    cursor: default;
    max-width: 218px
}

.owl-brands a img {
    width: 100%;
    height: auto
}

.list-brands__img {
    padding: 28px 15px
}

.list-type {
    margin-top: 50px;
    margin-bottom: 100px;
    padding-left: 0;
    list-style-type: none;
    text-align: center
}

.list-type__item {
    display: inline-block;
    width: 360px;
    margin: 0 8px 48px;
    padding-left: 23px;
    border-right: 1px solid #333;
    overflow: hidden;
    text-align: center
}

.list-type__link {
    display: block;
    padding-top: 10px;
    width: 360px;
    height: 210px;
    font-family: Raleway;
    color: #fff;
    border-top: 1px solid #333;
    border-left: 5px solid #dc2d13;
    border-bottom: 1px solid #333;
    background-color: rgba(0, 0, 0, .4);
    transition: all .3s;
    transform: skewX(6deg)
}

.list-type__link:hover {
    color: #fff
}

.list-type__item .icon {
    display: inline-block;
    margin-bottom: 0;
    font-size: 131px;
    line-height: 1;
    width: 100%;
    height: auto;
    min-height: 130px
}

.list-type__name {
    padding-top: 5px;
    font-size: 16px;
    font-weight: 600
}

.list-type__link:hover .list-type__name {
    display: none
}

.list-type__info {
    display: none !important;
    padding-top: 5px;
    font-size: 22px;
    font-weight: 600
}

.list-type__link:hover .list-type__info {
    display: block !important
}

.list-type__inner {
    transform: skewX(-6deg)
}

.list-type__inner span {
    transform: skewX(-6deg) !important;
    display: block
}


.list-type__inner img {
    max-width: 150px !important;
    padding-top: 12px;
}

.list-staff {
    margin: 0 -35px
}

.list-staff__item {
    display: inline-block;
    width: 540px;
    margin-right: 31px;
    margin-bottom: 40px;
    margin-left: 31px;
    vertical-align: top
}

.list-staff__media {
    position: relative;
    width: 270px;
    transition: all .3s
}

.list-staff__media:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.list-staff__item:hover .list-staff__media:after {
    background-color: rgba(0, 0, 0, .65)
}

.list-staff__info,
.reviews {
    background-color: #fff;
    transition: all .3s
}

.list-staff__item:nth-child(even) .list-staff__media {
    float: right
}

.list-staff__item:nth-child(odd) .list-staff__inner {
    margin-left: 270px;
    text-align: left
}

.list-staff__item:nth-child(even) .list-staff__inner {
    margin-right: 270px
}

.list-staff__info {
    position: relative;
    padding-top: 40px;
    padding-bottom: 15px
}

.list-staff__info:after {
    position: absolute;
    top: 50px;
    border-top: 25px solid transparent;
    border-bottom: 25px solid transparent
}

.list-staff__item:nth-child(odd) .list-staff__info:after {
    left: -15px;
    border-right: 15px solid #fff
}

.list-staff__item:nth-child(even) .list-staff__info:after {
    right: -15px;
    border-left: 15px solid #fff
}

.list-staff__item:nth-child(even) .list-staff__info {
    text-align: right
}

.list-staff__wrap_name {
    padding-right: 21px;
    transition: all .3s
}

.list-staff__item:nth-child(odd) .list-staff__wrap_name {
    margin-right: 5px;
    margin-left: 27px;
    box-shadow: 5px 0 0 0 #999
}

.list-staff__item:nth-child(even) .list-staff__wrap_name {
    margin-left: 5px;
    box-shadow: -5px 0 0 0 #999
}

.list-staff__name {
    font-family: Raleway;
    font-size: 15px;
    font-weight: 700;
    color: #222;
    transition: all .3s
}

.list-staff__item:hover .list-staff__categories,
.list-staff__item:hover .list-staff__description,
.list-staff__item:hover .list-staff__name {
    color: #fff
}

.list-staff__item:nth-child(odd):hover .list-staff__wrap_name {
    box-shadow: 5px 0 0 0 #eee
}

.list-staff__item:nth-child(even):hover .list-staff__wrap_name {
    box-shadow: -5px 0 0 0 #eee
}

.list-staff__item:nth-child(odd) .decor-1 {
    margin-right: auto;
    margin-left: 36px
}

.list-staff__item:nth-child(even) .decor-1 {
    margin-right: 36px;
    margin-left: auto
}

.list-staff__categories {
    margin-bottom: 16px;
    padding-top: 3px;
    font-size: 11px;
    font-weight: 500;
    color: #999;
    transition: all .3s
}

.list-staff__description {
    padding-right: 26px;
    padding-left: 26px;
    transition: all .3s;
    color: #777;
    padding-bottom: 20px
}

.list-staff__social {
    position: absolute;
    bottom: 25px;
    width: 100%;
    opacity: 0;
    z-index: 10;
    transition: all .3s;
    text-align: center
}

.list-staff__item:hover .list-staff__social {
    opacity: 1
}

.list-staff__social > li {
    padding-right: 3px;
    padding-left: 3px
}

.list-staff__social > li > a {
    width: 34px;
    height: 34px;
    padding-top: 7px;
    font-size: 14px;
    color: #888;
    border: 2px solid #999;
    border-radius: 50%;
    transition: all .3s
}

.list-staff__social > li > a:hover {
    color: #fff;
    border-color: #fff
}

.staff-progress {
    margin-top: 33px;
    margin-right: 10px;
    margin-left: 20px
}

.staff-progress__title {
    margin-bottom: 22px;
    font-family: Raleway;
    font-size: 12px;
    font-weight: 700;
    color: #555
}

.models_list_wrapper {
    display: flex;
    margin: 20px 0;
    flex-wrap: wrap;
    justify-content: center
}

.models_list_item {
    width: 150px;
    margin: 2px;
    background-color: #fff;
    text-align: center;
    border: 1px solid #ddd
}

.models_list_item:hover {
    border-color: #222
}

.models_list_item a {
    display: block;
    padding: 10px 0;
    color: #000
}

.models_list_item a:hover {
    text-decoration: none;
    color: inherit
}

.mli_img_wrapper {
    margin: 5px;
    height: 135px;
    background-position: center
}

.mli_count {
    margin-top: 20px;
    padding: 4px;
    background-color: #fe1f24;
    color: #fff;
    font-weight: 700
}

.reviews {
    position: relative;
    margin-right: 15px;
    margin-left: 15px;
    padding-top: 25px;
    padding-bottom: 38px;
    overflow: hidden
}

.reviews:after {
    position: absolute;
    right: 30px;
    bottom: 25px;
    font: normal normal normal 39px/1 FontAwesome;
    color: rgba(34, 34, 34, .06);
    content: '\f10e'
}

.reviews__name,
.reviews__title {
    font-family: Raleway;
    font-weight: 700;
    transition: all .3s
}

.iviewSlider:after,
.main-slider:after,
.main-slider:before,
.map:after,
.map:before,
.thecube .cube:before {
    content: ''
}

.reviews:hover {
    color: #fff;
    background-color: #222;
    box-shadow: 0 0 15px 0 rgba(0, 0, 0, .3);
    transition: all .3s
}

.reviews:hover:after {
    color: rgba(255, 255, 255, .06)
}

.reviews__title {
    margin-top: 14px;
    margin-bottom: 13px;
    padding-top: 4px;
    padding-bottom: 4px;
    padding-left: 40px;
    font-size: 16px;
    color: #222;
    border-left: 4px solid #999;
    text-align: left
}

.reviews:hover .reviews__title {
    color: #fff
}

.reviews .decor-1 {
    margin-left: 45px
}

.reviews__text {
    padding: 11px 15px 21px 45px;
    color: #777
}

.reviews__img {
    float: left;
    width: 55px;
    height: 55px;
    margin-left: 44px;
    border-radius: 50%;
    overflow: hidden
}

.reviews__inner {
    margin-top: 8px;
    margin-left: 115px
}

.reviews__name {
    color: #555
}

.reviews__category {
    font-size: 10px;
    font-weight: 500;
    color: #999;
    transition: all .3s
}

.reviews:hover .reviews__category,
.reviews:hover .reviews__name {
    color: #fff
}

.map {
    position: relative;
    margin-top: 50px;
    margin-bottom: 60px;
    z-index: 0
}

.map img {
    margin: 0 auto
}

.map:after,
.map:before {
    position: absolute;
    bottom: -4vw;
    width: 50%;
    height: 7vw;
    background-color: #f5f5f5;
    z-index: 1
}

.map:before {
    left: 0;
    transform: skewY(6deg)
}

.map:after {
    right: 0;
    transform: skewY(-6deg)
}

.form-contact {
    margin-top: 40px
}

.form-contact__btn {
    padding: 16px 31px;
    color: #fff;
    border: none;
    box-shadow: 5px 0 0 0 #555;
    text-transform: uppercase
}

.form-contact__btn.btn-effect:after {
    background-color: #222
}

.car-details + .wrap-section-border {
    margin-bottom: 30px;
    margin-top: 30px
}

.car-details__title,
.pixad-features-list li {
    margin-top: 0;
    font-weight: 700;
    font-family: Raleway
}

.car-details__wrap-title {
    margin-bottom: 20px;
    padding-top: 17px;
    padding-right: 25px;
    padding-bottom: 18px;
    /* background-image: url(media/bg/texture-1.gif); */
    overflow: hidden
}


.car-details .carousel-product {
    margin-bottom: 10px;
}

.car-details__title {
    float: left;
    margin-bottom: 0;
    margin-left: 4px;
    padding-top: 7px;
    padding-bottom: 9px;
    padding-left: 26px;
    font-size: 26px;
    color: #222
}

.car-details__wrap-price {
    float: right;
    margin-left: 30px;
    overflow: hidden
}

.car-details__price {
    display: block;
    margin-right: -10px;
    margin-left: 40px;
    padding: 1px 31px 1px 25px;
    font-size: 30px;
    font-weight: 700;
    color: #fff;
    overflow: hidden;
    transform: skewX(-12deg)
}

.car-details__price-inner {
    display: block;
    transform: skewX(12deg);
    font-weight: 400;
    font-size: 28px;
    line-height: 46px;
}

#slider-product img {
    width: 100%;
    height: auto
}

#slider-product .prettyPhoto {
    display: block;
    height: 420px;
    overflow: hidden
}

@media only screen and (max-width:1200px) {
    #slider-product .prettyPhoto {
        height: 346px
    }

    html .main-block {
        margin: 40px 375px 86px;
    }

}

@media only screen and (max-width:991px) {



    html .youzify-hdr-v7 .youzify-profile-photo {
        margin-top: 100px;
    }

    .youzify-search-header .youzify-search-landing-image {
        height: 100% inherit !important;
        min-height: inherit !important;
    }


    .groups .youzify-search-landing-image-text,
    .members .youzify-search-landing-image-text {
        display: none;
    }

    .b-submit__aside {
        display: none;
    }

    #slider-product .prettyPhoto {
        height: 400px
    }

    .vc-auto-search .btn {
        margin-top: 20px;
    }

    .vc-auto-search .home-search-label {
        display: none;
    }


    html .main-block {
        margin: 0;
    }


    html .main-block {
        margin-bottom: 50px !important;
    }


    .wrap-link-img {
        display: none;
    }

}

@media only screen and (max-width:768px) {




    html body .vc-auto-search div.select {
        display: inline-block;
        width: 100%;
        margin: 0 0 20px 0;
        vertical-align: top;
        max-width: none;
    }


    #slider-product .prettyPhoto {
        height: 340px
    }

    .card__img {
        width: 100%;
        text-align: center;
        background: #fff;
        margin: 0;
        padding: 10px 0 0
    }

    #pixad-listing .tmpl-gray-footer {
        background: #fff;
        min-height: auto;
        clear: both
    }

    html #pixad-listing .tmpl-gray-footer {
        min-height: auto;
        padding-top: 20px
    }

    .card__img img {
        margin: 0 auto;
        display: inline-block;
        width: 100%;
    }

    html #pixad-listing.list .card__desc_wrap {
        max-width: 100%;
        float: none;
    }

    html .sorting__item {
        display: inline-block;
        margin-right: 30px;
        padding-bottom: 10px;
        width: 100%;
        text-align: center
    }

    .single-add-to-compare .pull-left,
    .single-add-to-compare .pull-right {
        float: none !important;
        text-align: center
    }

    html .single-add-to-compare {
        padding-top: 17px;
        padding-bottom: 17px
    }

    .sorting {
        overflow: hidden
    }

    html .grid .card__wrap-label {
        top: 25px
    }
}

@media only screen and (max-width:650px) {

    html body .pixad-features-list li {
        width: 100% !important;
    }

    #slider-product .prettyPhoto {
        height: 300px
    }

    .logged-in.admin-bar {
        top: 0;
        padding-top: 32px;
    }

    .logged-in .header .navbar {
        position: relative;
        top: 32px;
    }


    .logged-in .mobile-slidebar-menu {
        padding-top: 30px;
    }

}


@media only screen and (max-width:480px) {


    .sidebar-show .btn {
        text-align: center;
        width: 100%;
    }


    .sidebar-show .widget_mod-a {
        padding: 46px 32px 35px;
        max-width: 260px;
        margin: 0 auto;
        background: #fff;
    }

    .mobile-filter {
        display: block !important;
    }

    .mobile-menu-trigger {
        position: fixed;
        top: -15px;
        right: 6px;
        z-index: 999;
        font-size: 45px;
        display: none;
    }


    .mobile-menu-trigger:hover {
        color: #222;
    }

    .mobile-filter {
        display: block;
        float: left;
        padding-top: 10px;
        padding-left: 20px;
        text-transform: uppercase;
    }


    .sticky-bar .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: scroll;
        z-index: 997;
        background: #fff;
        display: none;
    }

    .sticky-bar .sidebar.sidebar-show {
        display: block !important;
    }

    html.sidebysidepage,
    html.sidebysidepage body {
        overflow-x: hidden !important;

    }

    html body .header-full-width.header-navibox-2-left .header-navibox-1 {
        left: 0;
    }



    .logged-in.admin-bar {
        top: 0;
        padding-top: 32px;
    }

    html body .pwb-all-brands .pwb-brands-cols-outer .pwb-brands-col3 {
        padding: 1%;
        width: 100%;
    }


    html .woocommerce-cart table.cart td.actions .coupon .input-text {
        float: none;
        margin: 0 4px 10px 0;
        width: 100%;
    }

    html .coupon {
        padding-left: 0 !important;
    }

    html .header-cart {
        margin: 0;
        position: relative;
        left: auto;
        top: -24px;
        right: 57px;
    }

    .mobile-slidebar-menu .header-cart {
        display: none !important;
    }

    html .woocommerce-order-details,
    .woocommerce-customer-details {
        width: 100%;
        display: inline-block;
        vertical-align: top;
    }

    html .woocommerce-customer-details {
        padding-left: 0;
    }



    html .post_mod-a:nth-child(even) .entry-date {
        left: auto;
        right: 10px;
    }

    html .post .entry-main__inner:after {
        display: none;
    }

    html .post_mod-a:nth-child(odd) .entry-content,
    .post_mod-a:nth-child(odd) .entry-main__inner {
        padding-right: 0;
    }



    html .woocommerce-cart table.cart td.actions .coupon .input-text {
        float: none;
        width: 100%;
    }

    html .pix-lastnews-light .btn {
        float: left !important;
    }

    html #pixad-listing.list .promo_gallery_wrapper {
        clear: both;
        display: none;
        width: 100%;
        position: relative;
        top: 0;
        right: 0;
        text-align: left;
    }


    html #pixad-listing.list .card__price {
        max-width: 100%;
        float: none;
    }

    html #pixad-listing.list .card__list {
        max-width: 100%;
        float: none;
    }

    html .car-details__title {
        float: none;
        margin-bottom: 0;
        margin-left: 4px;
        padding-top: 7px;
        padding-bottom: 9px;
        padding-left: 26px;
    }

    html .car-details__wrap-price {
        float: none;
        margin-left: -10px;
        overflow: hidden;
        display: inline-block;
        margin-top: 10px;
    }


    html .comment-list {
        margin-top: 0;
        padding: 25px 0px 25px 0px;
        background-color: #fff;
        margin-bottom: 0;
    }

    .wrap-nav-tabs li,
    .pixad-features-list li {
        display: inline-block !important;
        width: 100% !important;
        float: none !important;
    }

    #slider-product .prettyPhoto {
        height: 210px
    }

    #slider-product img {
        width: auto;
        height: 100%;
        max-width: none
    }
}

.letter {
    padding: 0 50px
}

.letter__info {
    font-weight: 300;
    line-height: 30px;
    color: rgba(255, 255, 255, .7);
}

.letter__title {
    margin-bottom: 14px;
    font-family: Raleway;
    font-size: 24px;
    font-weight: 600;
    line-height: 33px;
    color: #fefefe
}

.letter__btn {
    float: right;
    font-family: Raleway;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    border-right: 2px solid #fff
}

.letter__inner {
    float: left;
    width: 450px;
    line-height: 26px;
}

.wrap-social-block {
    display: inline-block;
    width: 210px;
    margin-top: 29px;
    margin-left: -7px;
    padding-left: 8px;
    vertical-align: top;
    overflow: hidden
}

.social-block {
    display: block;
    width: 215px;
    padding: 10px 0;
    background-color: #555;
    transform: skewX(-22deg)
}

.social-block__inner,
.social-block_mod-b,
.wrap-social-block_mod-c .social-block {
    transform: skewX(22deg)
}

.social-block_mod-a {
    margin-left: 20px;
    padding: 14px 0;
    background-color: transparent
}

.social-block_mod-b {
    display: inline-block;
    margin-left: 9px
}

.social-block__inner {
    display: block;
    width: 100%;
    margin-left: 27px
}

.wrap-social-block_mod-a .social-block {
    border: 2px solid #fff;
    cursor: pointer
}

.wrap-social-block_mod-a .social-block__inner {
    color: #fff
}

.social-block__title {
    display: inline-block;
    font-size: 10px;
    font-weight: 500;
    color: #fff;
    vertical-align: middle
}

.social-block__list {
    display: inline-block;
    margin-bottom: 0;
    margin-left: 15px;
    vertical-align: middle
}

.social-block__list > li > a {
    font-size: 14px;
    color: #999;
    transition: all .3s
}

.social-block__list > li > a:hover {
    color: #fff
}

.wrap-social-block_mod-c {
    margin-top: 0
}

.wrap-social-block_mod-c .social-block__inner {
    transform: skewX(-22deg)
}

.vdecore-bottom {
    display: inline-block;
    width: 100%;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: 99
}

.vdecore-bottom:after,
.vdecore-bottom:before {
    position: absolute;
    bottom: -3vw;
    width: 51%;
    height: 8vw;
    background-color: #f5f5f5;
    z-index: 101;
    content: ''
}

.vdecore-bottom:before {
    left: 0;
    transform: skewY(4.5deg)
}

.vdecore-bottom:after {
    right: 0;
    transform: skewY(-4.5deg)
}

.vdecore-bottom .decor-2:after,
.vdecore-bottom .decor-2:before {
    top: 5px;
    display: block;
    width: 30px;
    height: 30px
}

.vdecore-bottom .decor-2 .icon {
    width: 38px;
    height: 38px;
    font-size: 27px
}

.main-slider__item {
    position: relative;
    margin-bottom: 50px
}

.iviewSlider:after {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .5);
    z-index: 100
}

.main-slider__title {
    font-size: 40px;
    font-weight: 700;
    color: #fff
}

.main-slider__subtitle {
    margin-bottom: 25px;
    font-family: Raleway;
    font-size: 26px;
    font-weight: 500
}

.main-slider__text {
    font-size: 16px;
    font-weight: 400
}

.main-slider__price {
    display: inline-block;
    font-size: 36px;
    font-weight: 500;
    vertical-align: middle
}

.main-slider__link {
    display: inline-block;
    width: 36px;
    height: 38px;
    margin-top: 5px;
    margin-left: 20px;
    padding-top: 8px;
    vertical-align: middle;
    transform: skewX(-16deg);
    text-align: center
}

.main-slider__link .icon {
    font-size: 15px;
    color: #fff;
    transform: skewX(10deg);
    position: relative;
    top: 3px;
    left: 11px
}

.main-slider__btn {
    display: inline-block;
    padding: 7px 0;
    background-color: rgba(0, 0, 0, .4);
    transform: skewX(16deg)
}

.slider-grid__hover,
.slider-grid__name {
    background-color: rgba(0, 0, 0, .7);
    transition: all .3s
}

.col-md-5 .slider-grid__name {
    background-color: rgba(0, 0, 0, .7) !important
}

.main-slider__btn_inner {
    display: inline-block;
    padding: 5px 20px !important;
    font-family: Ubuntu;
    color: #fff;
    transform: skewX(-16deg);
    text-align: center
}

.slider-services {
    height: 310px;
    margin-top: 0;
    margin-bottom: 25px
}

.slider-grid {
    margin-bottom: 55px
}

.slider-grid__inner {
    position: relative;
    margin-bottom: 30px;
    color: #fff
}

.slider-grid__name {
    display: inline-block;
    font-family: Raleway;
    font-weight: 600
}

.slider-grid__wrap-name {
    position: absolute;
    bottom: 0;
    left: 0;
    color: #fff
}

.slider-grid__inner *,
.slider-grid__wrap-name * {
    color: #fff
}

.slider-grid__hover {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0
}

.slider-grid__inner:hover .slider-grid__hover {
    opacity: 1
}

.slider-grid__inner:hover .slider-grid__name {
    background-color: rgba(0, 0, 0, 0)
}

.slider-grid__info {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 12px;
    font-weight: 300
}

.slider-grid__info .icon {
    margin-right: 7px;
    font-size: 14px
}

.slider-grid__info li {
    margin-bottom: 3px
}

.slider-grid__btn {
    position: absolute;
    top: 20px;
    left: 26px
}

.slider-grid__btn span.btn-inner {
    color: #333
}

.slider-grid__btn:hover span.btn-inner {
    color: #fff
}

.slider-grid__inner_mod-a .slider-grid__name {
    padding: 14px 28px;
    font-size: 16px;
    vertical-align: bottom;
    margin-right: 0
}

.slider-grid__inner_mod-a .slider-grid__price {
    display: inline-block;
    margin-left: -3px;
    padding: 12px 28px 13px;
    font-size: 18px;
    vertical-align: bottom
}

.slider-grid__inner_mod-b .slider-grid__name {
    position: absolute;
    bottom: 0;
    z-index: 10;
    padding: 10px 20px;
    font-size: 14px
}

.slider-grid__inner_mod-b .slider-grid__price {
    position: absolute;
    right: 10px;
    bottom: 10px;
    padding: 4px 13px;
    font-size: 15px;
    font-weight: 500
}

.slider-gallery {
    margin-top: 53px;
    margin-bottom: 155px
}


.elementor-container .slider-gallery {
    margin-top: 0;
    margin-bottom: 0;
}

.slider-gallery__item {
    position: relative;
    height: 177px;
    margin: 0 5px;
    text-align: center
}

.slider-gallery__item img {
    width: 100%;
    height: auto
}

.slider-gallery__item .icon {
    display: block;
    margin-top: 60px;
    font-size: 16px;
    width: auto
}

.slider-gallery__item .icon_video-link {
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: 50px;
    height: 50px;
    margin-top: -25px;
    margin-left: -25px;
    padding-top: 17px;
    font-size: 14px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, .8);
    box-shadow: 0 0 0 5px rgba(255, 255, 255, .32);
    z-index: 10
}

.slider-gallery__title {
    margin-top: 16px;
    font-family: Raleway;
    font-size: 15px;
    font-weight: 600;
    padding: 0 47px
}

.slider-gallery__link {
    position: relative;
    display: block;
    color: #fff;
    overflow: hidden
}

.slider-gallery__link:hover {
    color: #fff;
    text-decoration: none
}

.slider-gallery__hover {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .75);
    opacity: 0;
    transition: all .3s
}

.slider-gallery__hover:hover {
    opacity: 1
}

.owl-item:nth-child(4n+1) .slider-gallery__link {
    -webkit-clip-path: polygon(0 0, 100% 0, 93% 100%, 0 100%);
    clip-path: polygon(0 0, 100% 0, 93% 100%, 0 100%)
}

.owl-item:nth-child(4n+2) .slider-gallery__link {
    -webkit-clip-path: polygon(7% 0, 93% 0, 100% 100%, 0 100%);
    clip-path: polygon(7% 0, 93% 0, 100% 100%, 0 100%)
}

.owl-item:nth-child(4n+3) .slider-gallery__link {
    -webkit-clip-path: polygon(0 0, 100% 0, 93% 100%, 7% 100%);
    clip-path: polygon(0 0, 100% 0, 93% 100%, 7% 100%)
}

.owl-item:nth-child(4n+4) .slider-gallery__link {
    -webkit-clip-path: polygon(7% 0, 100% 0, 100% 100%, 0 100%);
    clip-path: polygon(7% 0, 100% 0, 100% 100%, 0 100%)
}

.slider-reviews {
    margin-top: 54px;
    margin-bottom: 54px
}


.elementor-section .slider-reviews {
    margin-top: 0;
    margin-bottom: 0;
}

#loader {
    position: fixed;
    z-index: 100500;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-color: rgba(255, 255, 255, .95);
    background-position: center;
}

#filter_loader {
    display: none;
    position: fixed;
    z-index: 100500;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-color: rgba(255, 255, 255, .95);
    background-position: center;
}

.preloaderjs .spinner {
    display: none !important
}

.preloaderjs#page-preloader {
    background: rgba(46, 46, 46, .99) !important
}

#page-preloader {
    position: fixed;
    z-index: 100500;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #2e2e2e;
    background: rgba(0, 0, 0, .95)
}

#page-preloader .spinner,
#page-preloader .thecube {
    position: absolute;
    z-index: 1001;
    display: block;
    width: 100px;
    height: 100px;
    margin-top: -50px;
    margin-left: -50px
}

#page-preloader .spinner {
    top: 50%;
    left: 50%;
    -webkit-animation: spin 2.5s infinite linear;
    animation: spin 2.5s infinite linear;
    border: 3px solid transparent;
    border-top-color: #e7e4d7;
    border-radius: 50%
}

#page-preloader .spinner:after,
#page-preloader .spinner:before {
    position: absolute;
    content: '';
    border-radius: 50%
}

#page-preloader .spinner:before {
    top: 5px;
    right: 5px;
    bottom: 5px;
    left: 5px;
    -webkit-animation: spin 2s infinite linear;
    animation: spin 2s infinite linear;
    border: 3px solid transparent;
    border-top-color: #71383e
}

#page-preloader .spinner:after {
    top: 15px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    -webkit-animation: spin 1s infinite linear;
    animation: spin 1s infinite linear;
    border: 3px solid transparent;
    border-top-color: #efa96b
}

#page-preloader .thecube {
    top: 50%;
    left: 50%
}

.thecube {
    width: 75px;
    height: 75px;
    margin: 50px auto 0;
    position: relative;
    -webkit-transform: rotateZ(45deg);
    -moz-transform: rotateZ(45deg);
    -ms-transform: rotateZ(45deg);
    -o-transform: rotateZ(45deg);
    transform: rotateZ(45deg)
}

.thecube .cube {
    -webkit-transform: rotateZ(45deg);
    -moz-transform: rotateZ(45deg);
    -ms-transform: rotateZ(45deg);
    transform: rotateZ(45deg);
    float: left;
    width: 50%;
    height: 50%;
    position: relative;
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1)
}

.page-loading,
.thecube .cube:before {
    height: 100%;
    left: 0;
    top: 0;
    width: 100%
}

.thecube .cube:before {
    position: absolute;
    background-color: #ff3740;
    -webkit-animation: foldthecube 2.4s infinite linear both;
    -moz-animation: foldthecube 2.4s infinite linear both;
    -ms-animation: foldthecube 2.4s infinite linear both;
    -o-animation: foldthecube 2.4s infinite linear both;
    animation: foldthecube 2.4s infinite linear both;
    -webkit-transform-origin: 100% 100%;
    -moz-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    -o-transform-origin: 100% 100%;
    transform-origin: 100% 100%
}

.thecube .c2 {
    -webkit-transform: scale(1.1) rotateZ(90deg);
    -moz-transform: scale(1.1) rotateZ(90deg);
    -ms-transform: scale(1.1) rotateZ(90deg);
    -o-transform: scale(1.1) rotateZ(90deg);
    transform: scale(1.1) rotateZ(90deg)
}

.thecube .c3 {
    -webkit-transform: scale(1.1) rotateZ(180deg);
    -moz-transform: scale(1.1) rotateZ(180deg);
    -ms-transform: scale(1.1) rotateZ(180deg);
    -o-transform: scale(1.1) rotateZ(180deg);
    transform: scale(1.1) rotateZ(180deg)
}

.thecube .c4 {
    -webkit-transform: scale(1.1) rotateZ(270deg);
    -moz-transform: scale(1.1) rotateZ(270deg);
    -ms-transform: scale(1.1) rotateZ(270deg);
    -o-transform: scale(1.1) rotateZ(270deg);
    transform: scale(1.1) rotateZ(270deg)
}

.thecube .c2:before {
    -webkit-animation-delay: .3s;
    -moz-animation-delay: .3s;
    -ms-animation-delay: .3s;
    -o-animation-delay: .3s;
    animation-delay: .3s
}

.thecube .c3:before {
    -webkit-animation-delay: .6s;
    -moz-animation-delay: .6s;
    -ms-animation-delay: .6s;
    -o-animation-delay: .6s;
    animation-delay: .6s
}

.thecube .c4:before {
    -webkit-animation-delay: .9s;
    -moz-animation-delay: .9s;
    -ms-animation-delay: .9s;
    -o-animation-delay: .9s;
    animation-delay: .9s
}

@-webkit-keyframes foldthecube {

    0%,
    10% {
        -webkit-transform: perspective(140px) rotateX(-180deg);
        -moz-transform: perspective(140px) rotateX(-180deg);
        -ms-transform: perspective(140px) rotateX(-180deg);
        -o-transform: perspective(140px) rotateX(-180deg);
        transform: perspective(140px) rotateX(-180deg);
        opacity: 0
    }

    25%,
    75% {
        -webkit-transform: perspective(140px) rotateX(0);
        -moz-transform: perspective(140px) rotateX(0);
        -ms-transform: perspective(140px) rotateX(0);
        -o-transform: perspective(140px) rotateX(0);
        transform: perspective(140px) rotateX(0);
        opacity: 1
    }

    100%,
    90% {
        -webkit-transform: perspective(140px) rotateY(180deg);
        -moz-transform: perspective(140px) rotateY(180deg);
        -ms-transform: perspective(140px) rotateY(180deg);
        -o-transform: perspective(140px) rotateY(180deg);
        transform: perspective(140px) rotateY(180deg);
        opacity: 0
    }
}

@keyframes foldthecube {

    0%,
    10% {
        -webkit-transform: perspective(140px) rotateX(-180deg);
        -moz-transform: perspective(140px) rotateX(-180deg);
        -ms-transform: perspective(140px) rotateX(-180deg);
        -o-transform: perspective(140px) rotateX(-180deg);
        transform: perspective(140px) rotateX(-180deg);
        opacity: 0
    }

    25%,
    75% {
        -webkit-transform: perspective(140px) rotateX(0);
        -moz-transform: perspective(140px) rotateX(0);
        -ms-transform: perspective(140px) rotateX(0);
        -o-transform: perspective(140px) rotateX(0);
        transform: perspective(140px) rotateX(0);
        opacity: 1
    }

    100%,
    90% {
        -webkit-transform: perspective(140px) rotateY(180deg);
        -moz-transform: perspective(140px) rotateY(180deg);
        -ms-transform: perspective(140px) rotateY(180deg);
        -o-transform: perspective(140px) rotateY(180deg);
        transform: perspective(140px) rotateY(180deg);
        opacity: 0
    }
}

.page-loading {
    background: rgba(255, 255, 255, .8);
    content: "";
    position: fixed;
    z-index: 2147483647
}

.page-preloader > .thecube {
    left: 50%;
    margin-left: -30px;
    margin-top: -70px;
    position: absolute;
    top: 50%
}

.pix-dynamic-content,
.sidebar label {
    position: relative
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0);
        transform: rotate(0)
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@keyframes spin {
    0% {
        -webkit-transform: rotate(0);
        transform: rotate(0)
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

video {
    width: 100%
}

.flex-active-slide:after {
    display: none !important
}



html body .wpb_map_wraper iframe {
    pointer-events: none
}

.footer .logo {
    text-align: center;
    display: inline-block;
    width: 100%;
    margin-top: 80px
}

.footer .logo img {
    margin: 0 auto
}

.pix-ajax-loader {
    display: none
}

.pix-ajax-loader.ajax-loading {
    display: block
}

.sidebar label {
    font-weight: 400;
    padding-left: 3px;
    top: -2px
}

html .slider-price__input {
    display: inline-block;
    width: 70px;
    margin: 10px;
    height: 25px;
    font-size: 10px;
    color: #fff;
    border: none;
    background-color: #444;
    text-align: center
}

#cssload-wrapper {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 201;
    overflow: hidden;
    background-color: rgba(255, 255, 255, .8);
    display: flex;
    align-items: center;
    justify-content: center
}

.cssload-loader {
    width: 146px;
    height: 146px;
    border: 1px solid #000;
    position: relative;
    border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%
}

.cssload-loader .cssload-loading {
    font-size: 10px;
    position: absolute;
    width: 100%;
    text-align: center;
    line-height: 14px;
    font-family: 'Century Gothic', sans-serif;
    font-style: italic;
    left: 0;
    top: 50%;
    margin-top: 19px;
    color: #000;
    font-weight: 700;
    text-transform: uppercase;
    -o-text-transform: uppercase;
    -ms-text-transform: uppercase;
    -webkit-text-transform: uppercase;
    -moz-text-transform: uppercase
}

.about-autor__name,
.post .entry-title,
.post-link,
.post-nav__link,
.post-nav__title {
    font-family: Raleway;
    text-transform: uppercase
}

.cssload-loader-circle-1 {
    width: 135px;
    height: 135px;
    left: 5px;
    top: 5px;
    border: 1px solid #000;
    position: absolute;
    border-right-color: transparent;
    border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    animation: spin 3.45s linear infinite;
    -o-animation: spin 3.45s linear infinite;
    -ms-animation: spin 3.45s linear infinite;
    -webkit-animation: spin 3.45s linear infinite;
    -moz-animation: spin 3.45s linear infinite
}

.cssload-loader-circle-2 {
    width: 123px;
    height: 123px;
    left: 5px;
    top: 5px;
    border: 1px solid transparent;
    position: absolute;
    border-right-color: #e81512;
    border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    animation: spin 5.75s linear infinite;
    -o-animation: spin 5.75s linear infinite;
    -ms-animation: spin 5.75s linear infinite;
    -webkit-animation: spin 5.75s linear infinite;
    -moz-animation: spin 5.75s linear infinite
}

.cssload-loader .cssload-line {
    width: 10px;
    height: 2px;
    background: #000;
    position: absolute
}

.cssload-loader .cssload-line:nth-child(1) {
    left: 16px;
    top: 50%;
    margin-top: -1px
}

.cssload-loader .cssload-line:nth-child(2) {
    transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    left: 32px;
    top: 32px
}

.cssload-loader .cssload-line:nth-child(3) {
    top: 16px;
    left: 50%;
    width: 2px;
    height: 10px
}

.cssload-loader .cssload-line:nth-child(4) {
    transform: rotate(135deg);
    -o-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    -moz-transform: rotate(135deg);
    right: 32px;
    top: 32px
}

.cssload-loader .cssload-line:nth-child(5) {
    right: 16px;
    top: 50%;
    margin-top: -1px
}

.cssload-loader .cssload-line:nth-child(6) {
    transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    right: 32px;
    bottom: 32px;
    background: #e81512
}

.cssload-loader .cssload-subline {
    position: absolute;
    width: 3px;
    height: 2px;
    background: #000
}

.cssload-loader .cssload-subline:nth-child(7) {
    transform: rotate(22.5deg);
    -o-transform: rotate(22.5deg);
    -ms-transform: rotate(22.5deg);
    -webkit-transform: rotate(22.5deg);
    -moz-transform: rotate(22.5deg);
    left: 20px;
    top: 49px
}

.cssload-loader .cssload-subline:nth-child(8) {
    transform: rotate(67.5deg);
    -o-transform: rotate(67.5deg);
    -ms-transform: rotate(67.5deg);
    -webkit-transform: rotate(67.5deg);
    -moz-transform: rotate(67.5deg);
    left: 49px;
    top: 20px
}

.cssload-loader .cssload-subline:nth-child(9) {
    transform: rotate(112.5deg);
    -o-transform: rotate(112.5deg);
    -ms-transform: rotate(112.5deg);
    -webkit-transform: rotate(112.5deg);
    -moz-transform: rotate(112.5deg);
    right: 49px;
    top: 20px
}

.cssload-loader .cssload-subline:nth-child(10) {
    transform: rotate(157.5deg);
    -o-transform: rotate(157.5deg);
    -ms-transform: rotate(157.5deg);
    -webkit-transform: rotate(157.5deg);
    -moz-transform: rotate(157.5deg);
    right: 20px;
    top: 49px
}

.cssload-loader .cssload-subline:nth-child(11) {
    transform: rotate(22.5deg);
    -o-transform: rotate(22.5deg);
    -ms-transform: rotate(22.5deg);
    -webkit-transform: rotate(22.5deg);
    -moz-transform: rotate(22.5deg);
    right: 19px;
    bottom: 48px;
    background: #e81512
}

.cssload-loader .cssload-needle {
    width: 14px;
    height: 14px;
    border: 1px solid #000;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -8px 0 0 -8px;
    z-index: 1;
    border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    animation: pegIt 3.45s infinite ease-in-out;
    -o-animation: pegIt 3.45s infinite ease-in-out;
    -ms-animation: pegIt 3.45s infinite ease-in-out;
    -webkit-animation: pegIt 3.45s infinite ease-in-out;
    -moz-animation: pegIt 3.45s infinite ease-in-out
}

.cssload-loader .cssload-needle:before {
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 3.5px 49px 3.5px 0;
    border-color: transparent #e81512 transparent transparent;
    position: absolute;
    right: 50%;
    top: 50%;
    margin: -3.5px 0 0;
    border-radius: 0 50% 50% 0;
    -o-border-radius: 0 50% 50% 0;
    -ms-border-radius: 0 50% 50% 0;
    -webkit-border-radius: 0 50% 50% 0;
    -moz-border-radius: 0 50% 50% 0
}

@keyframes pegIt {

    0%,
    100% {
        transform: rotate(0)
    }

    16% {
        transform: rotate(75deg)
    }

    25% {
        transform: rotate(55deg)
    }

    30% {
        transform: rotate(90deg)
    }

    36% {
        transform: rotate(170deg)
    }

    42% {
        transform: rotate(150deg)
    }

    50% {
        transform: rotate(227deg)
    }
}

@-o-keyframes pegIt {

    0%,
    100% {
        -o-transform: rotate(0)
    }

    16% {
        -o-transform: rotate(75deg)
    }

    25% {
        -o-transform: rotate(55deg)
    }

    30% {
        -o-transform: rotate(90deg)
    }

    36% {
        -o-transform: rotate(170deg)
    }

    42% {
        transform: rotate(150deg)
    }

    50% {
        -o-transform: rotate(227deg)
    }
}

@-ms-keyframes pegIt {

    0%,
    100% {
        -ms-transform: rotate(0)
    }

    16% {
        -ms-transform: rotate(75deg)
    }

    25% {
        -ms-transform: rotate(55deg)
    }

    30% {
        -ms-transform: rotate(90deg)
    }

    36% {
        -ms-transform: rotate(170deg)
    }

    42% {
        transform: rotate(150deg)
    }

    50% {
        -ms-transform: rotate(227deg)
    }
}

@-webkit-keyframes pegIt {

    0%,
    100% {
        -webkit-transform: rotate(0)
    }

    16% {
        -webkit-transform: rotate(75deg)
    }

    25% {
        -webkit-transform: rotate(55deg)
    }

    30% {
        -webkit-transform: rotate(90deg)
    }

    36% {
        -webkit-transform: rotate(170deg)
    }

    42% {
        transform: rotate(150deg)
    }

    50% {
        -webkit-transform: rotate(227deg)
    }
}

@-moz-keyframes pegIt {

    0%,
    100% {
        -moz-transform: rotate(0)
    }

    16% {
        -moz-transform: rotate(75deg)
    }

    25% {
        -moz-transform: rotate(55deg)
    }

    30% {
        -moz-transform: rotate(90deg)
    }

    36% {
        -moz-transform: rotate(170deg)
    }

    42% {
        transform: rotate(150deg)
    }

    50% {
        -moz-transform: rotate(227deg)
    }
}

@keyframes spin {
    0% {
        transform: rotate(0)
    }

    100% {
        transform: rotate(360deg)
    }
}

@-o-keyframes spin {
    0% {
        -o-transform: rotate(0)
    }

    100% {
        -o-transform: rotate(360deg)
    }
}

@-ms-keyframes spin {
    0% {
        -ms-transform: rotate(0)
    }

    100% {
        -ms-transform: rotate(360deg)
    }
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0)
    }

    100% {
        -webkit-transform: rotate(360deg)
    }
}

@-moz-keyframes spin {
    0% {
        -moz-transform: rotate(0)
    }

    100% {
        -moz-transform: rotate(360deg)
    }
}

.woocommerce-breadcrumb a {
    color: #777
}

html .vc_gitem_row .vc_gitem-col {
    padding: 20px;
    /* background: url(media/bg/texture-1.gif); */
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1)
}

.vc_gitem-animate-blurOut .vc_gitem_row .vc_gitem-col,
.vc_gitem-animate-flipHorizontalFadeIn .vc_gitem_row .vc_gitem-col,
.vc_gitem-animate-scaleRotateIn .vc_gitem_row .vc_gitem-col,
.vc_gitem-animate-slideBottom .vc_gitem_row .vc_gitem-col {
    background: 0 0 !important;
    padding: 0;
    box-shadow: 0
}

.entry-main_mod-a,
.post-nav {
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1)
}

.vc_grid-gutter-30px .vc_gitem_row .vc_gitem-col * {
    color: #333
}

.vc_gitem-animate-blurOut .vc_gitem_row .vc_gitem-col *,
.vc_gitem-animate-flipHorizontalFadeIn .vc_gitem_row .vc_gitem-col * {
    color: #fff
}

.vc_gitem-animate-blurOut .vc_gitem_row .vc_gitem-col * {
    color: #fff !important
}

html .vc_btn3.vc_btn3-color-juicy-pink,
html .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat {
    color: #fff !important;
    background-color: #dc2d13;
    border-radius: 0;
    text-transform: uppercase;
    font-size: 11px
}

html .vc_btn3.vc_btn3-color-blue,
html .vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat {
    color: #fff;
    border-radius: 0;
    background-color: #dc2d13;
    text-transform: uppercase
}

.vc_btn3.vc_btn3-color-blue:hover,
html .vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat:focus,
html .vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat:hover,
html .vc_btn3.vc_btn3-color-blue:focus {
    background-color: #dc2d13
}

.vc_gitem-animate-goTop20 .vc_custom_heading * {
    color: #333 !important
}

html .vc_gitem_row .vc_gitem-col .vc_btn3-container {
    display: block;
    margin-bottom: 0;
    max-width: 100%
}

.vc_gitem-animate-slideTop .vc_general.vc_btn3 {
    background-color: #dc2d13 !important
}

html .vc_gitem-animate-goTop20 .vc_custom_heading {
    margin-top: 15px
}

html .post_mod-a .entry-main {
    min-height: 280px
}

html .vc_grid-filter.vc_grid-filter-size-md .vc_grid-filter-item {
    font-size: 100%;
    padding: 15px 26px;
    border-radius: 0;
    background: #fff;
    text-transform: uppercase
}

html .vc_btn3.vc_btn3-color-sky.vc_btn3-style-flat:focus,
html .vc_btn3.vc_btn3-color-sky.vc_btn3-style-flat:hover,
html .vc_btn3.vc_btn3-color-sky:focus,
html .vc_btn3.vc_btn3-color-sky:hover,
html .vc_grid-filter.vc_grid-filter-color-grey > .vc_grid-filter-item.vc_active,
html .vc_grid-filter.vc_grid-filter-color-grey > .vc_grid-filter-item:hover {
    background-color: #dc2d13;
    color: #fff
}

html .vc_btn3.vc_btn3-color-sky,
html .vc_btn3.vc_btn3-color-sky.vc_btn3-style-flat {
    border-radius: 0;
    color: #fff;
    background-color: #dc2d13
}

html .vc_grid-filter.vc_grid-filter-color-grey > .vc_grid-filter-item.vc_active > span,
html .vc_grid-filter.vc_grid-filter-color-grey > .vc_grid-filter-item:hover > span {
    color: #fff
}

html .vc_grid-filter {
    margin-left: 0;
    margin-bottom: 50px;
    list-style: none;
    padding: 0
}

.vc_custom_heading h4 {
    text-transform: uppercase
}

.vc_custom_heading h5 {
    text-transform: uppercase;
    font-size: 16px
}

.center-content {
    display: block;
    margin-left: auto;
    margin-right: auto;
    text-align: center
}

.center-content .decor-1 {
    margin: 30px auto 0;
    height: 30px
}

#tab3 {
    display: block !important;
    position: absolute;
    padding: 10px
}

#tab3 .auto_contact_desc {
    padding-bottom: 25px
}

#tab3 #contact-map {
    margin-top: 0
}

#tab3.active {
    position: inherit
}

.tab-content > .tab-pane {
    font-size: 12px;
    line-height: 1.88
}

.tab-content > .tab-pane iframe {
    margin: 0 auto;
    display: block
}

html #contact-map {
    margin: 20px auto 0
}

.entry-media .owl-theme .owl-controls {
    bottom: 15px;
    left: 15px;
    position: absolute
}

.bg-inner,
.section-bg {
    position: relative
}

.entry-media .owl-theme .owl-controls .owl-buttons div {
    background: #fff;
    border-color: #fff
}

.entry-media .owl-theme .owl-controls .owl-buttons div i {
    display: inline-block;
    padding-top: 6px;
    font-style: normal;
    margin-left: 13px
}

.post-btn,
.post-btn__inner,
.section-bg-2:before {
    display: block
}

.wrap-section-border {
    margin-bottom: -165px
}

.bg-inner {
    z-index: 10
}

.section-bg-2:before,
.section-bg:after {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: .1;
    content: ''
}

.section-bg_second {
    background-color: #181818
}

.section-bg:after {
    top: 0;
    left: 0;
    background-size: cover
}

.section-bg .bg-inner {
    padding-top: 30px;
    padding-bottom: 80px
}

footer .section-bg .bg-inner {
    padding-top: 50px;
    padding-bottom: 50px
}

.entry-main,
.post,
.post .entry-media,
.section_default,
.section_map,
.section_mod-a {
    position: relative
}

.section_default {
    padding-top: 90px;
    padding-bottom: 130px
}

.section_mod-a {
    padding-top: 40px;
    padding-bottom: 65px
}

.section_mod-a:before {
    bottom: -30px;
    background: url(media/bg/1.png) bottom center no-repeat
}

.section_mod-a .ui-title-inner {
    margin-top: 0
}

.section_mod-a .brand-link {
    margin-top: 55px
}

.section_mod-b {
    height: 678px
}

.section_mod-b:after {
    background-image: url(media/bg/2.jpg)
}

.section_mod-c:after {
    background-image: url(media/bg/3.jpg)
}

.section_mod-d {
    padding-bottom: 70px;
    background: url(media/bg/10.png) 100% 100% no-repeat
}

.section_mod-d .ui-subtitle-block_mod-b {
    margin-bottom: 65px
}

.section_mod-d .link {
    margin-top: 23px
}

.section_mod-d .decor-1 + .link {
    margin-top: 0
}

.section_mod-e:after {
    background-image: url(media/bg/5.jpg)
}

.section_mod-f:after {
    background-image: url(media/bg/6.jpg)
}

.section_mod-g:after {
    background-image: url(media/bg/7.jpg)
}

.section_mod-h {
    padding-bottom: 100px
}

.section_mod-h:after {
    /* background-image: url(media/bg/9.jpg) */
}

.section_mod-e:before {
    bottom: -30px;
    background: url(media/bg/4.jpg) 0 100% no-repeat
}

.section_mod-i {
    padding-top: 100px;
    padding-bottom: 45px
}

.section_brands {
    margin-top: 100px;
    padding-bottom: 0
}

.section_brands .ui-title-inner {
    margin-top: 40px;
    margin-bottom: 0
}

.section_list-post {
    padding-top: 106px;
    padding-bottom: 60px
}

.section_list-post .ui-subtitle-block_mod-b {
    margin-bottom: 56px
}

.section_list-post .ui-title-block {
    margin-top: 0
}

.section_map {
    padding-top: 100px;
    padding-bottom: 50px
}

.section_map:before {
    bottom: -30px;
    background: url(media/bg/7.jpg) 100% 100% no-repeat
}

.section_map .ui-title-inner {
    margin-top: 43px;
    margin-bottom: 25px
}

.section_letter {
    color: #fff
}

.section_letter .bg-inner {
    padding-top: 28px;
    padding-bottom: 48px;
    overflow: hidden
}

.section_letter:after {
    /* background-image: url(media/bg/12.jpg) */
}

.wrap-post {
    margin-right: -15px;
    margin-bottom: 25px;
    margin-left: -15px;
    text-align: center
}

.post {
    margin-bottom: 40px
}

.post .entry-media {
    background: #eee
}

.entry-media-not-image .entry-media {
    background: 0 0 !important
}

.sticky.post .entry-media {
    background: #eee !important;
    min-height: 150px
}

.post .entry-media img {
    margin: 0 auto
}

.entry-main {
    padding: 50px 50px 20px 50px;
    background: #fff;
    transition: all .3s
}

.entry-main_mod-a {
    /* background: url(media/bg/texture-1.gif) */
}

.post .entry-title {
    font-size: 18px;
    font-weight: 700
}

.heading-news {
    margin-top: -60px;
    padding-bottom: 40px
}

.post .entry-title,
.post .entry-title a {
    margin-top: 0;
    margin-bottom: 13px;
    padding-right: 50px;
    color: #222
}

.post .entry-meta {
    text-transform: uppercase;
    display: none;
}





.elementor-section .post .entry-meta__item {
    margin-right: 15px;
    font-size: 11px;
    font-weight: 500;
    text-transform: uppercase;
    color: #999
}

.post .entry-meta__item a {
    margin: 0 0 0 px
}

.post .entry-main__inner {
    position: relative;
    margin-bottom: 25px
}

.post .entry-main__inner:after {
    position: absolute;
    top: 0;
    left: -50px;
    width: 5px;
    height: 100%;
    background-color: #999;
    content: '';
    transition: all .3s
}

.post .entry-content {
    padding-top: 0;
    line-height: 27px;
    margin-top: 0;
}

.post .entry-date {
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 1px;
    box-shadow: 0 0 0 5px rgba(255, 255, 255, .22);
    transform: rotate(45deg)
}

.post_mod-a .post-hover,
.post_mod-c .post-hover {
    height: 100%;
    position: absolute;
    transition: all .3s
}

.post .entry-date__inner {
    display: block;
    margin: 5px 0 0;
    font-family: Ubuntu;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    vertical-align: middle;
    transform: rotate(-45deg);
    text-transform: uppercase;
    text-align: center
}

.post .entry-btn {
    position: absolute;
    top: 25px;
    left: 30px;
    transition: all .3s
}

.entry-date__number {
    font-size: 15px
}

.wrap-post-btn {
    display: inline-block;
    padding-right: 7px;
    border-left: 1px solid #eee;
    overflow: hidden
}

.post-btn {
    margin-left: -8px;
    padding: 12px 18px;
    font-size: 10px;
    font-weight: 500;
    color: #555;
    vertical-align: top;
    border: 1px solid #eee;
    background-color: #fff;
    transform: skewX(22deg);
    text-transform: uppercase
}

.about-autor__name,
.post-link {
    font-weight: 700
}

.post-btn:hover {
    color: #fff
}

.post-btn__inner {
    transform: skewX(-22deg)
}

.post .decor-1 {
    margin-bottom: 15px
}

.post .entry-footer {
    margin-top: 30px;
    margin-bottom: 15px
}

.post-link {
    font-size: 11px;
    color: #222
}

.post .ui-title-inner {
    margin-bottom: 18px;
    padding-top: 20px;
    font-size: 14px
}

.post .wrap-social-block {
    margin-top: 0;
    margin-bottom: 20px
}

.post_mod-a .entry-date {
    top: 61px
}

.post_mod-a .entry-media {
    max-width: 470px
}

.post_mod-a.zigzag-disable .entry-media,
.post_mod-a.zigzag-disable .about-autor__img {
    float: left;
}

.post_mod-a.zigzag-disable .entry-main {
    margin-right: 0 !important;
}


.post_mod-a.zigzag-disable .entry-main {
    margin-left: 470px !important;
    padding-left: 74px !important;
}


.post_mod-a.zigzag-disable .entry-date {
    right: auto !important;
    left: -25px !important;
}


.post_mod-a.zigzag-disable .entry-main__inner:after {
    right: -50px !important;
    left: auto !important;
}

.about-autor__img,
.post_mod-a:nth-child(even) .entry-media {}

.post_mod-a .post-hover {
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, .6);
    opacity: 0;
    text-align: center
}

.post_mod-a:hover .post-hover {
    opacity: 1
}

.post_mod-a .post-hover .icon {
    display: inline-block;
    font-size: 20px;
    color: #fff;
    vertical-align: middle
}

.post_mod-a .entry-main {
    padding-top: 55px;
    padding-bottom: 33px;
    transition: all .3s
}

.post_mod-a:nth-child(odd) .entry-main {
    margin-right: 470px
}

.post_mod-a:nth-child(even) .entry-main {
    margin-left: 470px;
    padding-left: 74px
}

.post_mod-a:nth-child(even) .entry-date {
    left: -25px
}

.post_mod-a:nth-child(odd) .entry-date {
    right: -25px
}

.post_mod-a:nth-child(odd) .entry-content,
.post_mod-a:nth-child(odd) .entry-main__inner {
    padding-right: 70px
}

.post_mod-a:nth-child(even) .entry-main__inner:after {
    right: -20px;
    left: auto
}

.post_mod-b {
    margin-bottom: 0
}

.post_mod-b .entry-date {
    top: -25px;
    right: 50px
}

.post_mod-b.entry-media-not-image .entry-date {
    top: 40px;
    right: 40px
}

.post_mod-b .entry-content {
    padding-top: 0
}

.post_mod-c {
    display: inline-block;
    width: 355px;
    margin-right: 15px;
    margin-bottom: 50px;
    margin-left: 15px;
    vertical-align: top;
    text-align: left
}

.post_mod-c .entry-main {
    padding-top: 58px;
    padding-bottom: 35px
}

.post_mod-c .entry-title {
    font-size: 14px;
    margin-bottom: 5px
}

.post_mod-c .post-hover {
    top: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0)
}

.post_mod-c:hover .post-hover {
    background-color: rgba(0, 0, 0, .5)
}

.post_mod-c .entry-date {
    position: absolute;
    top: -24px;
    right: 50px
}

.post_mod-c .entry-date__inner {
    margin-top: 3px;
    margin-left: 0;
    text-align: center
}

.post_mod-d {
    margin-bottom: 50px
}

.about-autor {
    position: relative;
    padding: 34px 84px 34px 34px;
    color: #fff;
    display: inline-block;
    width: 100%
}

.about-autor__inner {
    margin-left: 147px
}

.about-autor__name {
    margin-top: 5px;
    margin-bottom: 5px;
    font-size: 13px;
    color: #fefefe
}

.about-autor__categorie {
    margin-bottom: 18px;
    font-size: 11px;
    font-weight: 500;
    color: rgba(255, 255, 255, .6);
    text-transform: uppercase
}

.about-autor__description {
    font-size: 13px;
    font-weight: 300;
    line-height: 20px
}

.post-nav__link,
.post-nav__title {
    font-weight: 700
}

.about-autor__social {
    position: absolute;
    top: 0;
    right: 0
}

.about-autor__social a {
    display: block;
    padding: 17px 28px;
    color: #fff;
    border-bottom: 1px solid #fff;
    border-left: 1px solid #fff;
    transition: all .3s
}

.about-autor__social a:hover {
    color: #ccc
}

.about-autor .decor-1,
.about-autor .decor-1:after {
    border-top-color: rgba(204, 204, 204, .7)
}

.post-nav {
    margin: 45px 0 0 0;
    background: #fff;
}

.post-nav__item {
    display: inline-block;
    width: 50%;
    margin-right: -2px;
    margin-left: -1px;
    padding: 50px 25px;
    vertical-align: top
}

.post-nav__img {
    width: 75px;
    height: 75px
}

.post-nav__title {
    font-size: 15px;
    line-height: 18px;
    color: #222
}

.post-nav__link {
    display: block;
    margin-top: 22px;
    font-size: 12px;
    color: #555
}

.post-nav__item:nth-child(odd) {
    text-align: right
}

.post-nav__item:nth-child(odd) .post-nav__inner {
    margin-right: 95px
}

.post-nav__item:nth-child(even) .post-nav__inner {
    margin-left: 95px
}

.post-nav__item:nth-child(odd) .post-nav__img {
    float: right
}

.post-nav__item:nth-child(even) .post-nav__img {
    float: left
}

.post-nav .decor-3 {
    margin-top: -2px;
    margin-left: 14px;
    text-align: left
}

.blog-item_img img {
    max-width: 100%;
    height: auto
}

.comment-list cite a {
    font: 700 12px Raleway;
    color: #222
}

.widget-post1__title,
.widget-title {
    font-family: Raleway;
    font-weight: 700
}


.widget-title i {
    margin-right: 10px;
}

.comment-meta {
    padding: 5px 0
}

.comment-list {
    margin-top: 45px;
    padding: 25px 25px;
    background-color: #fff;
    margin-bottom: 0;
}

.comment-list .comment-info-content {
    margin-left: 100px;
    padding-bottom: 10px;
    padding-left: 20px;
    border-bottom: 1px dotted #eee;
}

.comment-list .comment-author {
    float: left;
    width: 95px;
    height: 95px;
    border: 5px solid #eee;
    border-radius: 50%;
    overflow: hidden
}

.social-blog__item,
.widget-post1,
.widget_mod-a {
    border-bottom: 1px solid #eee
}

.comment-list .comment-author img {
    width: 100%;
    height: auto
}

.comment-list .comment {
    list-style: none;
    margin: 0 0 10px;
    padding: 0 0 10px;
    position: relative
}

.comment-list ol.children {
    margin-top: 20px
}

.comment-respond {
    padding: 25px 40px 25px 50px;
    background-color: #fff;
    margin-bottom: 50px;
    display: inline-block;
    width: 100%;
    margin-top: 45px;
}

.car-details .comment-respond {
    padding: 0 20px 20px 20px;
    margin-bottom: 0;
    margin-top: 0;
}

.car-details .comment-respond p {
    margin-bottom: 15px;
}

.car-details .comment-form-rating label {
    margin-top: 0;
}

.comment-respond i input[type=password],
.comment-respond i input[type=tel],
.comment-respond input[type=email],
.comment-respond input[type=text],
.comment-respond textarea {
    margin-bottom: 22px;
    background-color: #f5f5f5
}

.comment-respond .wrap__btn-skew-r {
    margin-top: 10px;
    padding-left: 12px;
    padding-right: 12px;
    overflow: hidden
}

.comment-reply {
    position: absolute;
    top: 0;
    right: 10px
}

.comment-reply .btn {
    background-color: #f8f8f8
}

#comment-nav-below .screen-reader-text {
    color: #222;
    font-size: 19px;
    text-transform: uppercase;
    margin: 0 0 10px;
    padding: 0
}

#comment-nav-below .nav-next,
#comment-nav-below .nav-previous {
    position: relative;
    top: -8px;
    line-height: 40px
}

.sidebar {
    margin-bottom: 40px;
    padding-top: 5px;
    padding-bottom: 50px;
    background-color: #fff
}

.widget_mod-a {
    padding: 46px 32px 35px
}

.pixba-radius-search {
    padding-bottom: 0 !important;
    overflow: hidden;
}


.pixba-radius-search .btn-filter {
    margin-top: 20px;
    margin-bottom: 10px;
}

html .sidebar .widget-post1,
html .sidebar .widget_mod-a {
    border-bottom: 0;
    padding-bottom: 0
}

.widget {
    padding: 26px 32px 0
}



.widget_mod-b {
    margin-top: 30px;
    padding-left: 80px
}

.widget_mod-c {
    padding-bottom: 16px
}

.widget-slider {
    padding-bottom: 0
}

.widget-title {
    position: relative;
    margin-top: 0;
    margin-bottom: 12px;
    font-size: 15px;
    color: #222;
    text-transform: uppercase;
    clear: both
}

.widget-title:before {
    position: absolute;
    top: -5px;
    left: -32px;
    width: 4px;
    height: 25px;
    background-color: #999;
    content: ''
}

.list-categories__link:before,
.list-descriptions dt:before {
    margin-right: 10px;
    vertical-align: middle;
    content: '\f0da';
    font-size: 11px !important;
    margin-top: 0;
    position: absolute;
    left: 0;
    top: 13px;
}

.widget-content {
    margin-top: 35px;
    margin-bottom: 8px
}

.widget-post1 {
    margin-top: 25px;
    padding-bottom: 26px
}

.widget-post1__img {
    float: left;
    width: 75px
}

.widget-post1__inner {
    margin-left: 100px
}

.widget-post1__title {
    margin-top: 10px;
    margin-bottom: 6px;
    font-size: 14px;
    line-height: 18px;
    color: inherit;
    text-align: left;
    font-family: inherit;
    font-weight: 500;
}

.widget-post1__price {
    margin-bottom: 6px;
    font: 500 13px Ubuntu;
    text-align: left;
    text-transform: uppercase
}

.widget-post1__description {
    font-weight: 300
}

.widget-post1__reviews {
    margin-top: 13px
}

.widget-banner {
    margin-bottom: 30px
}

.list-categories__link {
    display: block;
    margin-bottom: 12px;
    margin-left: 8px;
    font-weight: 500;
    color: #555;
    transition: all .3s;
    text-transform: uppercase
}

.list-categories__link:before {
    display: inline-block;
    font: normal normal normal 7px/1 FontAwesome
}

.list-categories__more {
    display: block;
    margin-top: 27px;
    margin-left: 9px;
    font-size: 11px;
    font-weight: 500
}

.list-descriptions dt {
    display: inline-block;
    margin-left: 2px;
    font-weight: 500;
    color: #222;
    transition: all .3s;
    text-transform: uppercase;
    width: 50%;
    padding-bottom: 0px;
    padding-left: 0px;
    vertical-align: top;
    font-size: 12px;
}

.tab-content .list-descriptions dd,
.tab-content .list-descriptions dt {
    padding-bottom: 0;
    margin-bottom: 0;
    padding-top: 0;
    margin-top: 0;
    padding-left: 0 !important;
    margin-left: 0 !important;
}


.tab-content .list-descriptions dt {
    width: 40%;
}


.tab-content .list-descriptions dd {
    width: 55%;
}


.tech-group dd,
.tech-group dt {
    font-size: 12px;
}


.tech-group .title i {
    font-size: 19px;
    margin-right: 7px;
    position: relative;
    top: 1px;
}



.tech-group .title {
    font-size: 16px;
    font-weight: 700;
    color: #222;
    text-transform: uppercase;
}

.dd-item {
    border-bottom: 1px dotted #ddd;
    padding: 10px 0 5px 10px;
    position: relative;
}




.tab-content .list-descriptions dd {
    margin-bottom: 0px !important;
    padding-left: 15px !important;
    font-size: 13px;
}

.list-descriptions dt:before {
    display: inline-block;
    font: normal normal normal 7px/1 FontAwesome;
}

.list-descriptions dd {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 17px;
    font-weight: 300;
    line-height: 1.7;
    width: 40%;
    vertical-align: top;
}


.tech-group {
    display: inline-block;
    vertical-align: top;
    width: 100%;
}



.slider-price {
    max-width: 200px
}

.slider-price__wrap-input {
    display: block;
    margin-bottom: 5px
}

.slider-price__input {
    display: inline-block;
    width: 70px;
    margin: 0 10px;
    font-size: 10px;
    color: #fff;
    border: none;
    background-color: #444;
    text-align: center
}

.wrap__btn-skew-r {
    margin-top: 42px;
    padding-left: 12px;
    padding-right: 12px;
    overflow: hidden
}

.btn-skew-r {
    margin-left: -20px;
    padding: 15px 29px 14px;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    border: none;
    box-shadow: 5px 0 0 0 #555;
    transform: skewX(18deg);
    text-transform: uppercase
}

.btn-skew-r__inner {
    display: block;
    transform: skewX(-18deg)
}

.btn-skew-r.btn-effect:after {
    background-color: orange;
}

.list-tags__link {
    display: block;
    padding: 10px 18px;
    font-size: 11px;
    font-weight: 500;
    color: #222;
    background-color: #f5f5f5;
    box-shadow: 0 3px 0 0 #ccc;
    transition: all .3s;
    text-transform: uppercase
}

.list-tags__link:hover {
    color: #fff;
    box-shadow: 0 3px 0 0 #555
}

.list-tags > li {
    margin-bottom: 15px;
    padding-left: 0
}

.social-blog {
    padding-left: 0;
    list-style-type: none
}

.social-blog__item {
    position: relative;
    margin-bottom: 22px;
    padding-bottom: 23px;
    padding-left: 24px;
    font-weight: 300;
    line-height: 1.53;
    color: #888
}

.social-blog__item:before {
    position: absolute;
    top: 2px;
    left: 0;
    font: normal normal normal 14px/1 FontAwesome;
    content: '\f099'
}

.social-blog__link,
.social-blog__link a {
    margin-top: 7px;
    font-weight: 500;
    color: #555
}

.social-blog__link:hover {
    color: #555
}

.widget_searce {
    margin-bottom: 27px;
    padding-top: 33px
}

.form-search {
    position: relative;
    padding-bottom: 17px;
    border-bottom: 1px solid #ccc
}

.form-search__input {
    width: 100%;
    padding: 0 30px 0 5px;
    font-family: Ubuntu;
    font-size: 13px;
    font-weight: 400;
    color: #ccc;
    border: none
}

.form-search__submit {
    position: absolute;
    top: -2px;
    right: 0;
    font-size: 16px;
    color: #999;
    border: none;
    background-color: transparent
}

.form-search__input::-webkit-input-placeholder {
    color: #aaa
}

.form-search__input::-moz-placeholder {
    color: #aaa
}

.btn-filter {
    margin-left: 40px
}

@media (min-width:992px) and (max-width:1199px) {

    .list-progress__item: nth-child(1),
    .list-progress__item: nth-child(3) {
        width: 290px
    }

    .list-progress__item:nth-child(2) {
        width: 300px;
        background-position: 0 3px
    }

    .list-type__item,
    .list-type__link {
        width: 290px
    }

    .list-staff__item {
        width: 440px
    }

    .list-staff__media {
        width: 210px
    }

    .list-staff__item:nth-child(odd) .list-staff__inner {
        margin-left: 210px
    }

    .list-staff__item:nth-child(even) .list-staff__inner {
        margin-right: 210px
    }
}

@media (max-width:991px) {

    .list-staff,
    .main-block,
    .post_mod-a: nth-child(even) .entry-main {
        margin-left: 0
    }

    .list-staff,
    .main-block,
    .post_mod-a:nth-child(odd) .entry-main {
        margin-right: 0
    }


    .post_mod-a:nth-child(even) .entry-main {
        margin-left: 0;
    }

    .iview-caption {
        top: 37vw;
        right: -60vw;
        text-align: right
    }

    .header .logo {
        left: 23px;
        position: absolute;
        top: -15px
    }

    .yamm .nav > li > a {
        padding-top: 20px
    }

    .list-progress__item:nth-child(1),
    .list-progress__item:nth-child(3) {
        width: 350px;
        background-image: url(media/figure/figure-2.svg)
    }

    .post_mod-a:nth-child(even) .entry-media,
    .post_mod-a:nth-child(odd) .entry-media {
        float: none
    }

    .list-staff {
        text-align: center
    }

    .wrap-link-img {
        position: relative;
        height: 260px;
        margin-bottom: 30px
    }

    .link-img__item {
        width: 170px
    }

    .post_mod-a:nth-child(even) .entry-date {
        left: 10px
    }

    .post_mod-a:nth-child(odd) .entry-date {
        right: 10px
    }

    .ui-title-inner {
        line-height: 1.5
    }

    .section_mod-d {
        background: 0 0
    }

    .section_brands {
        margin-top: 0
    }

    .list-brands__item {
        width: 200px;
        margin-bottom: 20px
    }

    .owl-item:nth-child(4n+1) .slider-gallery__link,
    .owl-item:nth-child(4n+2) .slider-gallery__link,
    .owl-item:nth-child(4n+3) .slider-gallery__link,
    .owl-item:nth-child(4n+4) .slider-gallery__link {
        -webkit-clip-path: none;
        clip-path: none
    }

    .card-list__row {
        float: none;
        width: 100%
    }

    .card__price {
        margin-top: 20px
    }

    .about-autor__social li:last-child a {
        border-bottom: 1px solid #fff
    }
}

@media (max-width:767px) {


    html .header-menu-middle #nav > .container .col-xs-12 {
        text-align: center;
    }

    .header-menu-middle .nav-custom-info-wrap,
    .header-menu-middle .phone-menu {
        display: none;
    }


    html .header-menu-middle .header-navibox-search {
        padding-top: 50px;
        padding-left: 25px;
        padding-right: 25px;
    }


    html .header-menu-middle.header .navbar-brand {
        margin-top: -5px !important;
    }

    .layout-theme[data-header='nosticky'] .header-menu-middle.header {
        position: relative !important;
    }


    .header-menu-middle.header + .block-title .block-title__inner {
        background-position: center top;
        padding-top: 60px;
        padding-bottom: 60px;
        background-size: cover;
    }



    .top-header,
    .wrap-link-img {
        text-align: center
    }

    .card__img,
    .header .social-links,
    .header-contacts,
    .list-staff__item:nth-child(even) .list-staff__media,
    .list-staff__item:nth-child(odd) .list-staff__media {
        float: none
    }

    .card__inner,
    .list-staff__item:nth-child(odd) .list-staff__inner,
    .post-nav__item:nth-child(even) .post-nav__inner {
        margin-left: 0
    }

    .list-staff__item:nth-child(even) .list-staff__inner,
    .post-nav__item:nth-child(odd) .post-nav__inner,
    .yamm .nav {
        margin-right: 0
    }

    .yamm {
        top: 20px
    }

    html .yamm .nav {
        display: none
    }

    html .yamm .collapse .nav {
        display: block
    }

    html .yamm .nav > li > a {
        padding: 25px
    }

    .wrap-link-img {
        display: none;
        height: auto
    }

    .header-contacts {
        margin-bottom: 15px
    }

    .navbar-nav {
        margin: 0
    }

    .link-img {
        position: relative;
        margin-bottom: 20px
    }

    .link-img_mod-a {
        left: 0
    }

    .link-img_mod-b {
        right: 0
    }

    .owl-theme_mod-a .owl-controls {
        top: -30px
    }

    .list-staff__item {
        width: auto;
        background-color: #FFF
    }

    .list-staff__info:after {
        content: none
    }

    .post_mod-a {
        margin-top: 10px
    }

    .card__inner {
        margin-top: 20px
    }

    .card__list {
        width: 100%
    }

    .pagination > li > a,
    .pagination > li > span {
        margin-bottom: 10px
    }

    .letter__inner {
        width: 100%;
        float: none
    }

    .post-nav__item:nth-child(even) .post-nav__img,
    .post-nav__item:nth-child(odd) .post-nav__img {
        display: none
    }
}

@media (max-width:480px) {


    #findCarNowForm {
        padding: 10%;
    }


    html .tech-group {
        width: 100%;
    }

    .post .entry-title a,
    html .post .entry-title {
        padding-right: 0;
        font-size: 14px;
    }

    html .comment-list .comment-info-content {
        margin-left: 0;
        padding-bottom: 15px;
        padding-left: 0;
        float: none
    }

    html .comment-list .comment-author {
        float: none;
        margin-bottom: 20px;
    }

    html .comment-respond {
        padding: 25px 0px 25px 0px;
        margin-bottom: 50px;
    }

    html .comment-list ol.children {
        margin-left: 0;
        margin-top: 20px;
        padding-left: 0
    }

    .owl-theme .owl-controls {
        display: none !important
    }

    #iview div.iview-directionNav,
    .border-section-bottom:after,
    .border-section-bottom:before,
    .border-section-top:after,
    .border-section-top:before,
    .iview-caption {
        display: none
    }

    html .list-progress__item {
        background: rgba(0, 0, 0, 0) !important;
        margin-bottom: 20px !important;
        margin-left: -40px;
        padding-top: 5px
    }

    html .big-img.wpb_single_image img {
        height: auto;
        margin-top: 40px;
        max-width: 100% !important;
        min-width: 100%;
        vertical-align: top
    }

    html .list-type {
        margin-left: -40px
    }

    html .list-staff__media {
        margin: 0 auto
    }

    .about-autor__inner,
    .comments-list .children,
    .comments-list .comment-inner,
    .link-img_mod-b .link-img__wrap-title {
        margin-left: 0
    }

    html .list-type__link {
        transform: skewX(0);
        web-kit-transform: skewX(0);
        width: 100%
    }

    .link-img__item {
        width: 40%
    }

    .link-img_mod-a .link-img__wrap-title {
        margin-right: 0
    }

    .list-progress__item {
        padding-top: 5px
    }

    .slider-gallery {
        margin-top: 73px
    }

    .iview-controlNav {
        top: 0;
        bottom: auto;
        right: 0
    }

    .list-staff__item {
        margin-left: 0;
        margin-right: 0
    }

    .entry-meta__item {
        display: block
    }

    .block-title .bg-inner {
        padding-bottom: 25px;
        padding-top: 0;
    }

    .sorting__title {
        font-size: 11px
    }

    .sorting__item {
        margin-right: 5px
    }

    .post_mod-c {
        width: auto
    }

    .post-nav__item {
        width: 100%;
        display: block
    }

    .about-autor__img {
        float: none;
        margin-bottom: 25px
    }

    .post .entry-main {
        padding-left: 35px
    }

    .comments-list .avatar-placeholder {
        float: none
    }
}

.card__price-number,
.color_primary,
.comments-list .comment-datetime,
.decor-3,
.footer-title__inner,
.link-img__link:hover .link-img__title,
.list-categories__link:before,
.list-categories__link:hover,
.list-descriptions dt:before,
.list-progress .icon,
.list-progress i,
.list-services:hover .list-services__title,
.main-block__title strong,
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:focus,
.nav-tabs > li > a:hover,
.social-blog__item:before,
.ui-title-inner .icon:before,
.widget-post1__price,
a,
blockquote:before {
    color: #dc2d13
}

.list-progress svg {
    fill: #dc2d13
}

.about-autor,
.bg-color_primary,
.border-section-top_mod-b:after,
.border-section-top_mod-b:before,
.btn-default:after,
.btn-effect:after,
.btn-skew-r,
.car-details__price,
.decor-2:after,
.decor-2:before,
.jelect-option:hover,
.jelect-option_state_active,
.list-staff__item:hover .list-staff__info,
.list-tags__link:hover,
.list-type__link:hover,
.main-slider__link,
.noUi-origin,
.owl-theme_mod-c .owl-controls .owl-page.active span,
.owl-theme_mod-c .owl-controls.clickable .owl-page:hover span,
.owl-theme_mod-d .owl-controls .owl-page.active span,
.owl-theme_mod-d .owl-controls.clickable .owl-page:hover span,
.post .entry-date,
.post:hover .entry-main__inner_mod-a:after,
.progress-bar,
.section-bg_primary,
.slider-grid__price,
.ui-btn_mod-a,
.yamm .navbar-toggle {
    background-color: #dc2d13
}

.link-img__link,
.list-type__link:hover,
.owl-theme_mod-c .owl-controls .owl-page.active span,
.owl-theme_mod-c .owl-controls.clickable .owl-page:hover span,
.owl-theme_mod-d .owl-controls .owl-page.active span,
.owl-theme_mod-d .owl-controls.clickable .owl-page:hover span {
    border-color: #dc2d13
}

#iview div.iview-directionNav a.iview-nextNav:hover:before,
.list-staff__item:nth-child(even):hover .list-staff__info:after,
.reviews:hover .reviews__title {
    border-left-color: #dc2d13
}

#iview div.iview-directionNav a.iview-prevNav:hover:before,
.list-staff__item:nth-child(odd):hover .list-staff__info:after {
    border-right-color: #dc2d13
}

.form-control:focus,
.header.sticky .navbar {
    border-bottom-color: #DC2D13
}

.btn-default,
.btn-success {
    box-shadow: 5px 0 0 0 #dc2d13
}

.yamm .nav > li > a:hover {
    box-shadow: 0 -5px 0 0 #dc2d13;
    background: 0 0 !important
}

.car-details__title,
.link,
.list-type__link,
.main-slider__btn {
    box-shadow: -4px 0 0 0 #dc2d13
}

.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover,
.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover {
    box-shadow: 0 3px 0 0 #dc2d13
}

.slider-grid .owl-page span:hover,
.slider-grid .owl-page.active span {
    background-color: #dc2d13 !important;
    border-color: #dc2d13 !important
}

html .header-cart-count {
    background: #dc2d13 !important
}

html body .fullscreen-center-menu li > a:hover,
html body .header li > a:hover {
    color: #dc2d13 !important
}

html body [off-canvas] li a:hover {
    color: #dc2d13
}

@media (max-width:600px) {

    html .ui-title-page {
        font-size: 16px;
        padding-top: 50px;
    }

    .post .entry-main__inner {
        padding-right: 0px !important
    }

    .gallery-item {
        float: none !important;
        margin-top: 10px;
        text-align: center;
        width: 100% !important
    }

    .gallery-caption {
        text-align: center !important
    }

    .entry-content iframe {
        width: 100%;
        height: 250px
    }

    html .entry-main {
        padding: 50px 20px 20px !important
    }
}

#pixad-listing.grid .card__img {
    width: 100%
}

#pixad-listing .tmpl-gray-footer {
    background: #fff;
    min-height: 290px
}

#pixad-listing.grid .tmpl-slider-grid__name {
    font-size: 16px;
    text-align: center;
    padding: 1px 20px 20px;
    display: inline-block;
    width: 100%;
    line-height: 1.3
}

#pixad-listing .tmpl-slider-grid__name {
    font-size: 20px;
    text-align: center;
    color: #222 !important;
    padding: 20px;
    display: inline-block;
    width: 100%;
    font-weight: 600
}

#pixad-listing .tmpl-slider-grid__info {
    display: inline-block;
    width: 100%;
    text-align: center;
    padding-bottom: 20px
}

#pixad-listing .tmpl-slider-grid__info li {
    display: inline-block;
    text-align: center;
    position: relative;
    padding: 0 10px 0px 10px;
    color: #222;
    text-transform: uppercase;
    font-size: 12px;
    margin-bottom: 15px;
}

#pixad-listing .tmpl-slider-grid__info li i {
    display: block;
    margin: 2px auto 0;
    font-size: 20px;
    color: #222;
    height: 27px;
    width: 50px
}



.custom-auto-grid {
    background: #fff;
    display: inline-block;
    text-align: center;
    color: inherit;
}

.custom-auto-grid .tmpl-slider-grid__name {
    font-size: 16px;
    text-align: center;
    padding: 1px 20px 20px;
    display: inline-block;
    width: 100%;
    line-height: 1.3;
    color: inherit;
    font-weight: 600;
    color: #222;
}


.custom-auto-grid #pixad-listing .tmpl-slider-grid__info {
    display: inline-block;
    width: 100%;
    text-align: center;
    padding-bottom: 20px
}

.custom-auto-grid .tmpl-slider-grid__info li {
    display: inline-block;
    text-align: center;
    position: relative;
    padding: 0 10px 0px 10px;
    color: #222;
    text-transform: uppercase;
    font-size: 12px;
    margin-bottom: 15px;
}

.custom-auto-grid .tmpl-slider-grid__info li i {
    display: block;
    margin: 2px auto 0;
    font-size: 20px;
    color: #222;
    height: 27px;
    width: 50px
}


.custom-auto-grid .tmpl-slider-grid__info li:last-child:before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 20px;
    border-right: 1px solid #ddd;
}


.custom-auto-grid .card__img {
    position: relative;
    float: none;
    width: 100%;
    margin-bottom: 19px;
}

.custom-auto-grid .tmpl-slider-grid__info li:after {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    height: 20px;
    border-right: 1px solid #ddd;
}


.custom-auto-grid .star-rating {
    margin-left: calc(50% - 35px);
    margin-bottom: 22px;
}

.custom-auto-grid .card__img {
    float: none;
}

.custom-auto-grid .tmpl-gray-footer {
    text-align: center;
    color: inherit;
}

/* @font-face {
    font-family: autofont;
    font-weight: 400;
    font-style: normal
} */

[class*=" autofont-"]:before,
[class^=autofont-]:before {
    font-family: autofont !important
}

[class*=" autofont-"],
[class^=autofont-] {
    font-family: autofont !important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.autofont-speedometer:before {
    content: "\e94e"
}

.autofont-steering-wheel:before {
    content: "\e939"
}

#pixad-listing .tmpl-slider-grid__info li:first-child:before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 20px;
    border-right: 1px solid #ddd
}

#pixad-listing .tmpl-slider-grid__info li:after {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    height: 20px;
    border-right: 1px solid #ddd
}

html .compose-mode .vc_section_amounts {
    display: inline-block;
    width: 100%
}

html .compose-mode .vc_section_amount,
html .compose-mode .vc_section_brand,
html .compose-mode .vc_section_team,
html .compose-mode .vc_section_team_member {
    display: inline-block
}

html .compose-mode .vc_row[data-vc-full-width].vc_hidden {
    display: none
}

#single-pixad-autos-modal .modal-dialog {
    z-index: 9999
}

#single-pixad-autos-modal .modal-title {
    color: #222
}

.modal-content {
    overflow: hidden
}

.modal-title {
    text-transform: uppercase
}

.list-categories.body-categories {
    display: flex;
    flex-wrap: wrap;
    margin-left: 0
}

.auto_body_name,
.list-categories.body-categories .list-categories__item input[type=checkbox] {
    display: none
}

.list-categories.body-categories .list-categories__item {
    text-align: center;
    width: 48%;
    padding: 1%
}

.list-categories.body-categories .list-categories__item label {
    height: 100%;
    margin: 1px;
    padding: 3px;
    border: 1px solid #eee;
    cursor: pointer;
    width: 100%;
    text-align: center
}

.list-categories.body-categories .body-icon-wrapper {
    min-height: 40px
}

.list-categories.body-categories .list-categories__item input[type=checkbox]:checked + label {
    border: 1px solid #222
}

.modal-body .form-control,
.modal-body input[type=email],
.modal-body input[type=password],
.modal-body input[type=tel],
.modal-body input[type=text],
.modal-body textarea {
    background: #f7f7f7;
    border: 1px solid #eeeeed
}

#single-pixad-autos-modal div.wpcf7-response-output {
    color: #222
}

.carousel-product .slides > li.auto-thumb-video:before {
    font: normal normal normal 14px/1 FontAwesome;
    content: "\f01d";
    position: absolute;
    left: 45px;
    top: 14px;
    display: block;
    z-index: 999;
    color: #fff;
    font-size: 36px
}

html .carousel-product .slides > li.auto-thumb-video:after {
    background-color: rgba(0, 0, 0, .6)
}

html .carousel-product .slides > li:after {
    background-color: rgba(0, 0, 0, .4)
}

html .flexslider .slides img {
    display: block;
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0
}

#slider-product iframe {
    max-width: 100%;
    height: 100%;
    width: 100%
}

.km_cf7-input {
    background: #fff !important
}

html .kameleon-cf7-container .km_cf7-btn-txt-r {
    color: #fff;
    box-shadow: 5px 0 0 0 #555
}

html .kameleon-cf7-container .km_cf7-btn-txt-h {
    background-color: #222 !important;
    box-shadow: 5px 0 0 0 #999
}

.full-width .dropdown-menu {
    min-width: 100%
}

.pixad-form-control {
    height: auto !important
}

.pixad-form-control.pixad-features-upload {
    height: auto !important;
    padding-bottom: 0 !important;
    margin-bottom: 25px
}

.pixad-form-control.pixad-features-upload.pixad-body-styles {
    padding-bottom: 30px !important
}

.pixad-features-upload input[type=checkbox] {
    position: absolute;
    margin-left: -20px
}

.pixad-features-upload.pixad-features-list .pixad-exist {
    padding-left: 25px;
    padding-top: 16px;
    max-height: 190px
}

.pixad-form-horizontal {
    padding: 0
}

html .pixad-features-list.pixad-features-upload li {
    list-style: none;
    margin-bottom: 1%;
    margin-top: 0;
    font-weight: 500;
    text-transform: none;
    font-size: 14px;
    color: #222;
    display: inline-block;
    width: 45%;
    margin-right: 3%;
    vertical-align: top;
    border-top: none
}

.pixad-features-upload .pixad-exist label {
    font-weight: 500;
    cursor: pointer
}

.pixad-features-upload .pixad-body-icon,
.pixad-features-upload .pixad-body-image {
    position: relative
}

.pixad-features-upload .pixad-body-image img {
    max-width: 74px;
    position: absolute;
    right: 0;
    bottom: 0
}

.pixad-features-upload .pixad-body-icon input[type=checkbox],
.pixad-features-upload .pixad-body-image input[type=checkbox] {
    bottom: 13px
}

.pixad-body-image label span {
    display: inline-block;
    width: 100%;
    text-align: left;
    padding-top: 5px;
    position: relative;
    top: 2px
}

.pixad-features-list {
    list-style: none;
    margin: 0;
    padding: 0
}

.pixad-features-list li {
    list-style: none;
    margin-bottom: 7px;
    margin-top: 0;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Raleway;
    color: #222;
    display: inline-block;
    width: 33%
}

.pixad-features-list i {
    font-style: normal;
    color: #222;
    font-size: 20px;
    margin-right: 5px;
    position: relative;
    top: 0
}

.pixad-features-list i.features-icon {
    font-family: arial
}

.pixad-features-list .pixad-none i {
    color: #999;
    top: 0
}

.pixad-features-list .pixad-none {
    color: #999
}

html .pixad-features-list li {
    list-style: none;
    margin-bottom: 0px;
    margin-top: 0;
    font-weight: 500;
    font-size: 12px;
    color: #222;
    font-family: inherit;
    display: inline-block;
    width: 30%;
    border-bottom: 1px dotted #ddd;
    margin-right: 3%;
    vertical-align: top;
    padding-top: 0;
    padding-bottom: 5px;
    text-transform: uppercase;
}

.widget_dealer ul {
    list-style: none;
    margin: 0;
    padding: 0
}

.widget_dealer ul li {
    display: inline-block;
    width: 47%;
    vertical-align: top;
    padding-bottom: 0;
    position: relative;
    margin-right: 2%;
}

.header .navbar .navbar-nav li.header-button {
    margin-top: -13px;
    margin-left: 10px;
    margin-right: 0
}

.header .navbar .navbar-nav li.header-button a {
    max-width: 110px;
    text-align: center;
    padding: 5px;
    cursor: pointer
}

.header.header-color-white .navbar .navbar-nav li.header-button a {
    border: 1px solid rgba(255, 255, 255, .2) !important;
    font-size: 14px;
    border-radius: 0 !important;
    padding: 7px 21px !important;
    margin-top: 5px !important
}

.header.header-color-black .navbar .navbar-nav li.header-button a {
    border: 1px solid rgba(0, 0, 0, .2) !important
}

.navbar .navbar-nav li.header-button a.autozone-sell-car {
    background: #f76d2b;
    border-radius: 3px !important;
    display: inline-block !important;
    line-height: 1.4 !important;
    margin-top: 11px !important;
    max-width: 100% !important;
    padding: 5px 13px !important;
    width: auto !important;
}

.navbar .navbar-nav li.header-button a.autozone-custom-button {
    color: #fff !important;
    background: 0 0 !important border-radius: 3px !important;
    display: inline-block !important;
    line-height: 1.4 !important;
    margin-top: 11px !important;
    max-width: 100% !important;
    padding: 5px 13px !important;
    width: auto !important
}

.header.header-color-white a.autozone-sell-car {
    color: #fff !important;
    background: 0 0 !important
}

.header-full-width .autozone-sell-car {
    margin-right: 25px !important
}

.header.header-color-white .navbar .navbar-nav li.header-button a.autozone-sell-car:hover,
.navbar .navbar-nav li.header-button a.autozone-custom-button:hover {
    background: rgba(255, 255, 255, .2) !important
}




.tml .tml-action-links li {
    border: none;
    border-right: 1px solid #eee;
    float: left;
    line-height: 1 !important;
    list-style: none;
    margin: 0 .5em 0 0 !important;
    padding: 0 .5em 0 0 !important
}

.slidebar-menu a:before {
    display: none !important
}

.after-title {
    display: inline;
    font-size: 18px;
    color: #666;
    margin: 0 auto;
    position: relative
}

.after-title:after,
.after-title:before {
    content: "";
    display: block;
    border-bottom: 2px solid red;
    width: 25px;
    position: absolute;
    top: 12px
}

.after-title:before {
    left: -36px
}

.after-title:after {
    right: -36px
}

.after-title-color2 {
    color: #ccc
}

#request_info_form,
#schedule_td_form {
    display: none;
    max-width: 600px
}

.wd-auto_sell_page {
    margin: 0 auto;
    display: inline-block !important;
    background: #ecba00;
    color: #fff !important;
    text-transform: uppercase;
    width: 100%
}

.wd-image,
.wd-name {
    display: inline-block
}

html .wd-name {
    display: none;
}


html .wd-update {
    text-transform: uppercase;
    font-size: 11px;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    color: #fff !important;
    background: rgba(0, 0, 0, 0.8);
    padding: 3px 5px;
}

.wd-auto_sell_page_btn {
    text-align: center;
    padding: 0
}

.wd-image img {
    max-width: 100%;
    height: auto;
    margin: 0 0 5px
}

.wd-image {
    height: 54px;
    margin: 0;
    padding: 0;
    overflow: hidden
}

.wd-name {
    padding-bottom: 2px;
    font-size: 11px
}

.wd-msg {
    background: #f5f5f5;
    padding: 10px 15px 10px 15px !important;
    width: 100% !important;
    margin: 0 0 20px
}

.wd-update {
    text-transform: uppercase;
    font-size: 11px;
    display: block
}

.m-submit1 .b-infoBar,
.m-submit2 .b-infoBar,
.m-submit3 .b-infoBar,
.m-submit4 .b-infoBar,
.m-submit5 .b-infoBar {
    padding: 35px 0
}

.b-infoBar__progress-line {
    box-shadow: 0 0 5px rgba(0, 0, 0, .2);
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px
}

.b-infoBar__progress-line-step {
    height: 7px;
    width: 25%;
    float: left;
    position: relative
}

.b-infoBar__progress-line-step-circle {
    border: 1px solid #cfcfcf;
    position: absolute;
    width: 25px;
    height: 25px;
    border-radius: 100%;
    left: -1px;
    top: -9px;
    text-align: center
}

.b-infoBar__progress-line-step-circle-inner {
    position: absolute;
    width: 13px;
    height: 13px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    background-color: #ccc;
    border-radius: 100%
}

.b-infoBar__progress-line-step-circle.m-last {
    right: -25px;
    left: auto
}

.b-submit {
    padding: 75px 0 180px
}

.b-submit__aside {
    border-bottom: 7px solid #555
}

.b-submit__aside-step {
    background: #737373;
    background: -moz-linear-gradient(top, #737373 0, #656565 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #737373), color-stop(100%, #656565));
    background: -webkit-linear-gradient(top, #737373 0, #656565 100%);
    background: -o-linear-gradient(top, #737373 0, #656565 100%);
    background: -ms-linear-gradient(top, #737373 0, #656565 100%);
    background: linear-gradient(to bottom, #737373 0, #656565 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#737373', endColorstr='#656565', GradientType=0);
    padding: 25px 0 25px 25px;
    border-bottom: 1px solid #555
}

.b-submit__aside-step.m-active {
    background: #444;
    border-color: #444
}

.b-submit__aside-step h3 {
    text-transform: uppercase;
    margin: 0 0 15px;
    font: 700 12px Ubuntu, sans-serif;
    color: #fff
}

.b-submit__aside-step:last-child {
    border-bottom: none
}

.b-submit__aside-step-inner {
    padding: 20px 10px 15px 20px;
    background: #444;
    position: relative;
    height: 70px
}

.b-submit__aside-step-inner-info-triangle {
    width: 0;
    height: 0;
    border-top: 35px solid transparent;
    border-left: 30px solid red;
    border-bottom: 35px solid transparent;
    position: absolute;
    left: 100%;
    top: 0;
    z-index: 100
}

.b-submit__aside-step-inner-icon {
    width: 35px;
    float: left
}

.b-submit__aside-step-inner-icon span.fa {
    font-size: 22px;
    margin-top: 3px;
    color: #fff
}

.b-submit__aside-step-inner-info {
    float: left;
    margin-left: 7px
}

.b-submit__aside-step-inner-info h4 {
    font: 700 14px Ubuntu, sans-serif;
    margin: 0 0 3px;
    padding-left: 5px;
    border-left: 4px solid #f76d2b;
    text-transform: uppercase;
    line-height: 1;
    color: #fff
}

.b-submit__aside-step-inner.m-active {
    background: red
}

.b-submit__aside-step-inner-info p {
    font: 400 11px Ubuntu, sans-serif;
    margin: 0;
    color: #b4b4b4;
    padding-top: 6px
}

.b-submit__aside-step-inner.m-active .b-submit__aside-step-inner-info h4 {
    border-color: #fff
}

.b-submit__aside-step-inner.m-active .b-submit__aside-step-inner-info p {
    color: #fff
}

.b-submit__main {
    margin-left: 50px
}

.b-submit__main-element {
    margin-bottom: 35px
}

.b-infoBar__progress-line-step.m-active {
    background: url(images/backgrounds/progress.jpg) repeat-x
}

.m-submit2 .b-submit__main-element {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #eee
}

.b-submit__main p {
    font: 400 13px Ubuntu, sans-serif;
    margin: 0 0 35px;
    line-height: 1.7
}

.b-submit__main-file .s-headerSubmit,
.m-submit2 .s-headerSubmit {
    margin-bottom: 35px
}

.b-submit__main-element.m-border {
    border-bottom: none !important
}

.b-submit__main-file {
    margin-bottom: 65px
}

.b-submit__main-contacts,
.b-submit__main-file:last-child {
    margin-bottom: 35px
}

.b-submit__main-file label.btn.m-btn {
    font: 600 10px Ubuntu, sans-serif;
    cursor: pointer;
    padding-left: 15px;
    border: 1px solid #ddd
}

.b-submit__main-file label.btn.m-btn span.fa {
    width: 20px;
    height: 20px;
    font-size: 12px;
    padding: 4px;
    margin-left: 10px
}

.b-submit__main-file label.btn.m-btn + label {
    margin-left: 15px;
    font: 600 10px Ubuntu, sans-serif;
    vertical-align: middle
}

.b-submit__main-file textarea {
    height: 190px
}

.b-submit__main-contacts:first-child {
    margin-bottom: 65px
}

.b-submit__main-contacts:last-of-type {
    margin-bottom: 0
}

.b-submit__main-contacts .s-headerSubmit,
.b-submit__main-plan .s-headerSubmit {
    margin-bottom: 35px
}

.b-submit__main-contacts p,
.b-submit__main-plan p {
    margin-bottom: 50px
}

.b-submit__main-contacts-price {
    padding: 35px 45px;
    background: url(images/backgrounds/blue.png) -90px center no-repeat #2475ce
}

.b-submit__main-contacts-price h6 {
    font: 600 16px Ubuntu, sans-serif;
    margin: 14px 0 0;
    text-transform: uppercase
}

.b-submit__main-contacts-price-input {
    position: relative
}

.b-submit__main-contacts-price-input input[type=text] {
    background: #fff !important;
    padding-left: 60px;
    padding-right: 85px
}

.b-submit__main-contacts-price-input span.fa {
    position: absolute;
    font-size: 20px;
    padding-right: 10px;
    border-right: 1px solid #ccc;
    color: #ccc;
    left: 20px;
    top: 13px
}

.b-submit__main-contacts-price-input-usd,
.b-submit__main-contacts-price-note,
.b-submit__main-contacts-select select {
    font: 600 10px Ubuntu, sans-serif
}

.b-submit__main-contacts-price-input-usd {
    display: inline-block;
    position: absolute;
    top: 6px;
    right: 8px;
    padding: 10px 15px;
    border-radius: 30px;
    text-transform: uppercase
}

.b-submit__main-contacts-price-note {
    text-align: center;
    margin-top: 10px
}

.b-submit__main-contacts-inputSelect {
    position: relative
}

.b-submit__main-contacts-inputSelect input[type=text] {
    padding-right: 95px
}

.b-submit__main-contacts-select {
    position: absolute;
    display: inline-block;
    top: 5px;
    background: 0 0;
    right: 5px
}

.b-submit__main-contacts-select select {
    background: #fff !important;
    border: none;
    height: auto;
    padding: 10px 25px 10px 15px;
    z-index: 100;
    cursor: pointer
}

.b-submit__main-contacts-select select + span.fa {
    top: 11px !important;
    right: 12px !important
}

.b-submit__main-contacts-check {
    position: relative;
    margin-bottom: 40px
}

.b-submit__main-contacts-check > span {
    font: 400 13px Ubuntu, sans-serif;
    padding: 0 25px 0 10px;
    vertical-align: super
}

.b-submit__main-contacts-check .s-submitCheck {
    font: 700 13px Ubuntu, sans-serif;
    margin-right: 15px
}

.b-submit__main-contacts-check .s-submitCheckLabel span.fa {
    font: normal normal normal 14px/1 FontAwesome
}

.b-submit__main-plan {
    margin-bottom: 65px
}

.b-submit__main-plan .b-submit__main-contacts-price {
    padding-top: 60px;
    padding-bottom: 60px
}

.b-submit__main-contacts-price-plan {
    font: 600 16px Ubuntu, sans-serif;
    text-transform: uppercase;
    text-align: center;
    line-height: 2.5
}

.b-submit__main-contacts-price-plan span {
    font: 800 22px Ubuntu, sans-serif;
    margin-left: 5px
}

.b-submit__main-contacts-price-plan > a {
    font: 600 10px Ubuntu, sans-serif;
    text-decoration: none;
    display: inline-block;
    padding: 8px 22px;
    border-radius: 30px;
    margin-left: 10px;
    vertical-align: top;
    margin-top: 3px
}

.b-submit__main-plan-money {
    font: 700 20px Ubuntu, sans-serif;
    margin-left: 10px
}

.b-submit__main-plan-money-note {
    font: 400 13px Ubuntu, sans-serif
}

.b-submit__main-plan label.s-submitCheckLabel {
    border-radius: 100%;
    text-align: center;
    position: relative
}

.b-submit__main-plan label.s-submitCheckLabel span.m-circle {
    width: 8px;
    height: 8px;
    border-radius: 100%;
    position: absolute;
    margin: auto;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0
}

a.btn.m-btn.m-pay span.fa {
    width: 25px;
    height: 25px;
    font-size: 14px;
    padding: 5px;
    margin-left: 13px
}

a.btn.m-btn.m-pay {
    font: 600 12px Ubuntu, sans-serif;
    border: 1px solid #ddd;
    padding-left: 18px;
    padding-top: 6px;
    padding-bottom: 6px;
    margin-top: 4px
}

a.btn.m-btn.m-pay:hover {
    border-color: #f76d2b
}

.b-submit__main-plan + button[type=submit] {
    margin-top: 15px
}

.b-submit__main-plan:last-of-type {
    margin-bottom: 0
}

.pixad-control-input select {
    height: 35px !important;
    border: 0;
    display: inline-block;
    color: #999
}

.required-field {
    color: red;
}

.pixad-control-label,
html .pixad-form-horizontal .pixad-control-label {
    font-size: 14px;
    font-weight: 400;
    text-align: left;
    margin-bottom: 10px;
    padding-top: 0;
    display: inline-block;
    width: 100%
}

#clear_gallery,
#clear_thumbnail_id,
#manage_gallery,
#manage_thumbnail_id {
    -webkit-appearance: button;
    cursor: pointer;
    border: 1px solid #ddd;
    background: #ddd;
    padding: 10px 20px;
    margin: 0 10px 15px 0;
    color: #222;
    text-transform: uppercase;
    font-size: 11px
}

#clear_gallery:hover,
#clear_thumbnail_id:hover,
#manage_gallery:hover,
#manage_thumbnail_id:hover {
    border: 1px solid #222;
    background: #222;
    color: #fff
}

.pixad-control-input input[type=submit] {
    margin: 0 auto;
    display: block;
    width: 100%
}

html .pixad-form-control {
    border: 0 !important
}

.step-section {
    overflow: hidden;
    margin-bottom: 23px;
    border: #ddd 1px solid;
    padding: 25px;
    margin-left: 25px;
    background: #fff;
}


.step-section .pixad-form-control {
    border: 0 !important;
    background: #f5f5f5 !important;
    padding-bottom: 15px !important;
    padding: 10px 15px !important;
}

.step-section .pixad-form-group {
    margin-left: 0;
    margin-right: 2%;
    width: 47%;
    vertical-align: top;
    float: left;
}

#step05.step-section .pixad-form-group,
#step02.step-section .pixad-form-group {
    width: 100% !important;
    margin: 0 !important;
    float: none !important;
}

@media only screen and (max-width:768px) {

    .step-section .pixad-form-group {
        width: 100% !important;
        margin: 0 !important;
        float: none !important;
    }


    html .step-section {
        margin-left: 0;
    }


}



.step-section .pixad-form-group:nth-child(even) {
    float: right;
    margin-right: 0;
}

.step-section .pixad-form-group:nth-child(odd) {
    clear: both;
}

.b-submit__aside-step-inner-info-triangle {
    display: none
}

.m-active .b-submit__aside-step-inner-info-triangle {
    display: block
}

.container-fluid .sidebar-wrapper {
    margin: 0 -10px
}

.screen-reader-text,
.screen-reader-text span,
.ui-helper-hidden-accessible {
    border: 0;
    clip: rect(1px, 1px, 1px, 1px);
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
    word-wrap: normal !important
}

.add-car-to-site {
    z-index: 999999;
    background-color: #dc2d13;
    opacity: 0;
    -webkit-transition: all .25s ease;
    -moz-transition: all .25s ease;
    -o-transition: all .25s ease;
    transition: all .25s ease;
    position: fixed;
    top: 0;
    width: 100%;
    left: 0;
    padding: 10px 0 20px
}

.add-car-to-site-visible {
    top: 0;
    opacity: 1
}

.add-car-to-site .auto-title {
    display: block;
    padding-top: 10px;
    color: #fff !important;
    font-weight: 400;
    text-transform: uppercase
}



.modal-content .form-control,
.modal-content input[type=email],
.modal-content input[type=password],
.modal-content input[type=tel],
.modal-content input[type=text],
.modal-content select,
.modal-content textarea {
    margin-bottom: 0;
}

/*   COMMENTS  RATING  */



#reviews #comments ol.commentlist ul.children .star-rating {
    display: none
}


.star-rating {
    float: none;
    overflow: hidden;
    position: relative;
    height: 1em;
    line-height: 1;
    font-size: 1em;
    width: 5.4em;
    font-family: star;
}



.star-rating:before {
    content: "\73\73\73\73\73";
    color: #d3ced2;
    float: left;
    top: 0;
    left: 0;
    position: absolute
}



.star-rating span {
    overflow: hidden;
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    padding-top: 1.5em
}



.star-rating span:before {
    content: "\53\53\53\53\53";
    top: 0;
    position: absolute;
    left: 0;
    color: orange;
}




.main-content-product-rating .star-rating {
    margin: .5em 4px 0 0;
    float: left
}



.products .star-rating {
    margin: 0 0 .5em;
    float: none
}



.hreview-aggregate .star-rating {
    margin: 10px 0 0
}





p.stars a:before,
.main-content p.stars a:hover ~ a:before {
    content: "\e021"
}




p.stars a {
    position: relative;
    height: 1em;
    width: 1em;
    text-indent: -999em;
    display: inline-block;
    text-decoration: none;
    color: orange;
    font-size: 16px;
}



p.stars a:before {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 1em;
    height: 1em;
    line-height: 1;
    font-family: WooCommerce;
    text-indent: 0
}




p.stars.selected a.active:before,


p.stars:hover a:before {
    content: "\e020"
}



p.stars.selected a.active ~ a:before {
    content: "\e021"
}



p.stars.selected a:not(.active):before {
    content: "\e020"
}

.star-rating * {
    font-family: star;
}

.star-rating {
    float: none;
    overflow: hidden;
    position: relative;
    height: 1em;
    line-height: 1;
    font-size: 1em;
    width: 5.4em;
    font-family: star
}



.star-rating:before {
    content: "\73\73\73\73\73";
    color: #d3ced2;
    float: left;
    top: 0;
    left: 0;
    position: absolute
}




.star-rating span {
    overflow: hidden;
    float: left;
    top: 0;
    left: 0;
    position: absolute;
    padding-top: 1.5em
}



.star-rating span:before {
    content: "\53\53\53\53\53";
    top: 0;
    position: absolute;
    left: 0;
    color: orange;
}




.main-content-product-rating .star-rating {
    margin: .5em 4px 0 0;
    float: left
}



.products .star-rating {
    margin: 0 0 .5em;
    float: none;
}



.hreview-aggregate .star-rating {
    margin: 10px 0 0
}

.main-content .slider-grid__inner .star-rating {
    margin-left: calc(50% - 35px);
}


/* Favorites home*/


.customer-favourites .product_list_widget li {
    width: 49%;
    display: inline-block;
    vertical-align: top;
}


.customer-favourites ul.product_list_widget li img {
    float: left !important;
    margin-left: 0 !important;
    width: 95px !important;
    height: auto !important;
    box-shadow: none !important;
    margin-top: 0 !important;
    margin-right: 15px !important;
}


html .customer-favourites ul.product_list_widget li a {
    display: block;
    font-weight: 500;
    color: #222;
    padding-bottom: 8px;
    font-size: 16px;
}

html .customer-favourites .widget {
    padding: 0;
}


html .customer-favourites .star-rating {
    padding-bottom: 22px;
}

html .customer-favourites .del .customer-favourites .woocommerce-Price-amount {
    color: inherit !important;
}


html .customer-favourites ul.product_list_widget li {
    padding: 10px 0 15px;
    margin: 0;
    list-style: none;
}


.woocommerce del .woocommerce-Price-amount {
    opacity: .7;
    color: #777;
}


.woocommerce ins {
    text-decoration: none;
}


.customer-favourites .woocommerce-Price-amount {
    font-size: 16px;
}

.product_list_widget .product-title {
    font-size: 14px;
    color: #222;
    text-transform: none;
    font-weight: 500;
    line-height: 1.4;
}

@media only screen and (max-width:480px) {

    .product_list_widget .product-title {
        display: inline-block;
        width: 100%;
        padding-top: 10px;
    }

}

/* hot-deal-mod */

.hot-deal-card {
    max-width: 400px;
    text-align: center;
    background: #fff;
    border: 2px solid #f4f4f4;
    padding: 25px;
}



.woocommerce .hot-deal-card .star-rating {
    float: none;
    margin: 15px auto;
}

.woocommerce .hot-deal-card .name-item a {
    font-weight: 600;
    color: #222;
    font-size: 24px;
}


.b-hot-deal-mod .b-hot-deal {
    border-color: transparent;
}

.b-hot-deal-mod .b-hot-deal .hot-deal-card {
    padding: 35px 30px 28px;
    text-align: center;
    background: #fff;
    box-shadow: 0px 5px 14px #ccc;
    border: 1px solid #ddd;
}

.b-hot-deal-mod .ds-custom {
    margin: 0 0 25px;
}

.hot-deal-card .card-info {
    margin: 0 10%;
}


.card-info .caption {
    padding-bottom: 25px;
}

.card-info .deal,
.card-info .regular {
    font-weight: 600;
    color: #222;
}


.card-info .product-price-old,
.card-info .woocommerce-Price-amount.amount {
    font-weight: 600;
    font-size: 20px;
}

.b-hot-deal-mod .ds-custom .ds-element {
    background: #fff;
    border-left: 1px solid #ddd;
    outline: 0;
}

.deal > span,
.card-info .regular > span {
    text-transform: uppercase;
    line-height: 1.6;
    font-weight: normal;
}

.hot-deal-mod-item .image {
    margin-top: -18px;
}

.hot-deal-mod-item .image:after {
    display: none;
}

.hot-deal-mod-item .detail-info {
    margin-top: 22px;
}

.hot-deal-mod-item .detail-info .heading-line {
    margin-top: 5px;
    padding-bottom: 22px;
}

.hot-deal-mod-item .detail-info .name-item {
    font-size: 24px;
    font-weight: 500;
    margin: 0;
    color: #222;
    padding-bottom: 10px;
}

.hot-deal-mod-item .detail-info .caption .product-description {
    margin-top: 15px;
}

.hot-deal-mod-item .detail-info .caption .product-description p {
    margin-top: 0;
    margin-bottom: 15px;
}

.hot-deal-mod-item .detail-info .caption .product-description a {
    color: #222;
    font-weight: 700;
    text-decoration: none;
}

/* countdown timer */

.ds-custom {
    display: block;
    margin: 40px 0 45px;
}

.ds-custom .ds-element {
    float: left;
    vertical-align: middle;
    padding: 0px 18px;
    background: #f6f6f6;
    max-width: 78px;
    margin-right: 0;
}

.ds-custom .ds-element:last-child {
    margin-right: 0;
    border-right: 1px solid #ddd;
}

.ds-custom .ds-element .ds-element-title {
    display: table-footer-group;
    font-size: 11px;
    text-transform: uppercase;
    color: #444444;
    position: relative;
    top: 10px;
}

.ds-custom .ds-element .ds-element-value {
    font-size: 20px;
    font-weight: bold;
    display: table-header-group;
    color: #444444;
    position: relative;
}

.ds-custom .ds-element .ds-element-value:after {
    content: '';
    position: relative;
    display: block;
    margin: 0 auto;
    width: 10px;
    height: 2px;
}

.summary .pwb-single-product-brands img {
    margin: 10px 10px 0px 0;
    max-width: 120px;
}

html .pwb-all-brands .pwb-brands-cols-outer .pwb-brands-col3 {
    padding: 1%;
    width: 16%;
    float: none;
    text-align: center;
    display: inline-block;
    vertical-align: top;
}

html .pwb-all-brands .pwb-brands-cols-outer .pwb-brands-col3 p {
    margin-bottom: 0;
    padding-bottom: 0;
    text-align: center;
}


html .pwb-all-brands .pwb-brands-cols-outer .pwb-brands-col3 img {
    max-width: 100%;
    height: auto;
}


aside .pwb-columns-2 {
    width: 33%;
}

html .pwb-all-brands .pwb-pagination-wrapper {
    margin-top: 20px;
    padding-top: 10px;
    border-top: 0;
    text-align: center;
    border: 0;
}

#gallery-2 img {
    max-width: 120px;
    height: auto;
}

html #gallery-2 .gallery-item {
    float: left;
    margin-top: 0;
    text-align: center;
    width: 26%;
    margin: 2%;
}


#pixad-listing.list .card__inner .decor-1 {
    display: none;
}



.fl-login-register--header {
    border-radius: 3px !important;
    display: inline-block !important;
    max-width: 100% !important;
    width: auto !important;
    color: #fff !important;
    background: 0 0 !important;
    margin-left: 25px !important;
    cursor: pointer;
}

.fl-login-register--header .fl-header-register-delimiter {
    padding: 0 5px;
}

.fl-login-register--header .fl-header-register-delimiter {
    font-size: 10px;
    text-transform: uppercase;
    line-height: 1;
    letter-spacing: .1em;
}

.fl-login-register--header i {
    margin-right: 5px;
}

.fl-login_form .login_form_title,
.fl-register-sub-menu .register_form_title {
    color: #222222 !important;
}

.fl-login_form .login_form_title,
.fl-register-sub-menu .register_form_title {
    color: #222222 !important;
}

.fl-login_form .login-submit .btn-skew-r {
    transform: skewX(0deg);
    margin-left: 0px;
}

.fl-login_form .login_form_title,
.fl-register-sub-menu .registration-text {
    color: #222222 !important;
}

.fl-login_form .fl-register-sub-menu a {
    color: #dc2d13 !important;
}

.fl-register-sub-menu .reg_passmail {
    color: #222222 !important;
}

.fl-login_form .reg_passmail {
    color: #222222 !important;
}

.fl-login_form span {
    color: #222222 !important;
}

.fl-login_form span {
    color: #222222 !important;
}

.fl-register-sub-menu .register-text-link a {
    color: #dc2d13 !important;
}

.fl-login_form .registration-text-wrapper a {
    color: #dc2d13 !important;
}

.fl-login_form .remember--lost-password-wrapper .remember-login-checkbox-label {
    color: #222222 !important;
}

.fl-login_form .remember--lost-password-wrapper a {
    color: #dc2d13;
}



/*NEW FOR ELEMENTOR*/




html .post_mod-a:nth-child(even) .entry-main__inner:after {
    right: -50px;
    left: auto;
}



.elementor .list-services:hover svg {
    fill: #222 !important;
}

.elementor .list-services svg {
    margin-bottom: 23px;
    margin-left: 41px;
    width: 104px;
    height: fit-content;
}


.elementor .list-services:hover .list-services__inner {
    border-left-color: #dc2d13;
}

.elementor .list-services {
    padding: 50px 50px 50px 0;
}


.elementor .list-services__title a {
    opacity: 0.8;
}


.elementor .list-services__title strong {
    padding-top: 6px;
}


.elementor .list-services:hover {
    background-color: #fff;
}


.elementor .list-services:hover .list-services__title {
    display: none;
}


.elementor .list-services__description {
    font-size: 13px;
    line-height: 23px;
}




.elementor .owl-theme .owl-controls .owl-page.active span {
    border-color: #ddd !important;
}


.elementor .list-progress__item svg {
    width: 78px;
    height: 75px;
    margin-right: 30px;
    margin-left: 40px;
}

.elementor .list-progress__item .icon,
.list-progress__item svg {
    float: left;
    margin: 0 0 0 30px;
    min-width: 80px;
}



.elementor .list-type__inne_figure {
    height: 126px;
}



.elementor .list-type__inner img {
    max-width: 138px !important;
    padding-top: 19px;
}




.elementor .list-type__info {
    font-size: 17px;
    font-weight: 600;
    text-transform: uppercase;
    opacity: 0.8;
}


.elementor .list-staff__description p {
    margin-bottom: 0;
}



.elementor .main-slider__link .icon {
    top: -33px;
    left: 16px;
}



.elementor-page .home-template + .footer {
    margin-top: -45px;
}

.wresize.elementor-page .wrap-section-border {
    display: none !important;
}


.footer-sidebar-top {
    margin-bottom: 35px;
    display: inline-block;
}

.footer-sidebar-top .footer__contacts {
    width: 100%;
}

.footer-sidebar-top .footer__contacts .footer__name {
    display: block;
}

.widget_tm_theme_helper_social_profiles .social-links {
    margin-top: 60px;
    display: inline-block;
}



@media (max-width:1000px) {

    .owl-theme_mod-a .owl-controls {
        display: none !important;
    }

    html .post {
        max-width: 465px;
        margin: 0 auto;
        margin-bottom: 40px;
    }

    .elementor-container .list-progress__item {
        margin-bottom: 25px;
    }


}


@media (max-width:1000px) {



    html .home-template .vc-auto-search .jelect-current {
        padding-left: 30px;
    }

    html .home-template .post_mod-a:nth-child(even) .entry-date,
    html .home-template .post_mod-a:nth-child(odd) .entry-date {
        top: -24px !important;
        right: 45px;
        left: auto !important;
    }



    .elementor-container .post_mod-a:nth-child(odd) .entry-content,
    .elementor-container .post_mod-a:nth-child(odd) .entry-main__inner {
        padding-right: 0;
    }


    .elementor-container .post_mod-a:nth-child(even) .entry-main {
        padding-left: 45px;
    }


    .elementor-container .slider-grid__item {
        max-width: 475px;
        margin: 0 auto;
    }


    .elementor-container .owl-theme_mod-c .owl-controls {

        display: none !important;
    }

}


@media (max-width:980px) {

    html .vc-auto-search .btn {
        margin-top: 0;
    }

}


@media (max-width:767px) {



    html body .header .navbar-brand {
        margin-top: -9px !important;
    }


    .elementor-container .list-staff__item {
        display: inline-block;
        width: 40%;
    }

    .elementor-container .list-progress {
        margin-top: 0;
        margin-bottom: 0;
    }


    .elementor-container .list-staff__item {
        width: auto;
        background-color: #FFF;
        max-width: 269px;
    }


    .elementor-container .border-section-top,
    .border-section-bottom {
        display: none !important;
    }


    .elementor-container .slider-grid__item img,
    .elementor-container .slider-grid__item {
        width: 480px !important;
        max-width: 100% !important;
        margin: 0 auto;
    }


    .elementor-container .list-staff {
        margin: 0;
    }


    .elementor-container .home-template .post .entry-title a {
        line-height: 24px !important;
    }




}


@media (max-width:480px) {


    .elementor-container .list-staff__item {
        width: 100%;
    }

    .elementor-container .slider-grid,
    .elementor-container .slider-grid .owl-item {
        width: 100% !important;
    }

    .elementor-container .list-type {
        margin-bottom: 0;
    }

    .elementor-container .list-type,
    .elementor-container .list-progress__item {
        margin-left: 0 !important;
    }


}







.elementor-default .modal-content .form-control,
.elementor-default .modal-content input[type=email],
.elementor-default .modal-content input[type=password],
.elementor-default .modal-content input[type=tel],
.elementor-default .modal-content input[type=text],
.elementor-default .modal-content select,
.elementor-default .modal-content textarea {
    margin-bottom: 15px;
}


aside .button {
    background-color: #ecba00;
    border: none;
    padding: 12px 25px 12px !important;
    font-size: 14px;
    font-weight: 600;
    color: #fff !important;
    border: none;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 10px;
    width: 100%;
    text-align: center;
    margin-top: 10px;
    text-decoration: none !important;
}


.autozone_calculator_results .list-descriptions dd {
    margin-bottom: 8px;
}


.elementor-default .sorting__item.view-by a i {
    font-size: 17px;
    position: relative;
    top: 1px;
}

.elementor-default .card__title {
    margin-bottom: 18px;
}



html .elementor .list-services svg {
    fill: #fff;
}


html .elementor .top-bar li i {
    margin-right: 5px;
}


html .elementor .top-bar li {
    margin-left: 0;
    margin-right: 10px;
}


/*YOUZIFY*/




html .youzify-page {
    background-color: #F5F5F5 !important;
}


.top-bar .icon {
    margin-right: 7px;
}

.header-topbarbox-2 .fa-user {
    margin-right: 7px;
}


.header-topbarbox-1 li {
    margin-left: 0;
    margin-right: 5px;
}

.card__img .fa,
.top-bar .fa,
.autos-container .fa,
.car-details .fa {
    font-family: FontAwesome !important;
}



.bp-user.info .block-title,
.bp-user.my-activity .block-title,
.bp-user.comments .block-title,
.bp-user.my-friends .block-title,
.bp-user.my-groups .block-title,
.bp-user.forums .block-title,
.groups .block-title,
.bp-user.overview .block-title,
.directory.members .block-title,
.bp-user.autos .block-title,
.bp-user.add_autos .block-title,
.bp-user.posts .block-title,
.bp-user.groups.info .block-title,
.bp-user.notifications .block-title {
    display: none !important;
}

.bp-user .youzify-search-header {
    display: none !important;
}

.youzify-404-profile .youzify-profile-header {
    display: none !important;
}


.youzify-user-actions {
    display: none !important;
}

.bp-user.autos div.item-list-tabs,
.bp-user.add_autos div.item-list-tabs,
.bp-user.posts div.item-list-tabs {
    display: none !important;
}


.groups .youzify-search-landing-image-text,
.members .youzify-search-landing-image-text {
    top: 63%;
}




html .youzify-page {
    background-color: #F5F5F5 !important;
}


.youzify-main-column .card-list__row {
    margin-bottom: 5px !important;
}


.youzify-main-column #pixad-listing.list .card__price,
.youzify-main-column .card-list__title {
    font-weight: bold;
}

html .youzify img {
    margin: 0;
}

html .youzify-global-wall .youzify-page-main-content {
    padding: 0;
}


html .youzify-hdr-v6 .youzify-profile-photo {
    margin: 115px auto 30px;
}

.youzify-main-column.grid-column .youzify-group-data .youzify-cover {
    display: none !important;
}


html .youzify-hdr-v7 .youzify-name h2 {
    color: #222;
    font-size: 24px;
    font-weight: bold;
    margin-top: -9px;
}


html .youzify-directory .pagination .page-numbers {
    background: #fff;
    color: #222;
}



html .youzify-wall-embed .youzify-embed-avatar {
    border-radius: 100px;
    overflow: hidden;
}


html .youzify .activity-header .activity-head p > a:first-of-type,
html .youzify-shared-wrapper a.youzify-post-author {
    color: #222;
}


html #youzify-groups-list .item .item-title a {
    text-transform: uppercase;
    color: #222;
}



.youzify-sidebar .youzify-membership-form-cover {
    display: none !important;
}


html .youzify .activity-inner:before {
    display: block;
    content: "";
    background: #f6f6f6;
    width: 20px;
    height: 20px;
    position: absolute;
    top: -6px;
    left: 20px;
    -webkit-transform: rotate(25deg);
    -ms-transform: rotate(60deg);
    transform: rotate(50deg);
}


html .youzify .activity-inner {
    background: #f6f6f6;
    padding: 20px;
    margin: 0 19px;
    position: relative;
}


.activity-content .youzify-wall-embed.youzify-wall-embed-user {
    background: #fff;
}


html .header.header-background-trans-black-rgba00 .dropdown-menu:before {
    display: block;
    content: "";
    background: #fff;
    width: 20px;
    height: 20px;
    position: absolute;
    top: -6px;
    left: 20px;
    -webkit-transform: rotate(25deg);
    -ms-transform: rotate(60deg);
    transform: rotate(50deg);
}


#youzify .activity-meta a.unfav:before,
#youzify .activity-meta a.unfav {
    color: #222;
}


html update-post,
html #youzify-wall-form .youzify-wall-actions .youzify-wall-post {
    background: #222 !important;
}


#youzify-group-buttons .group-button a,
.autozone_calculate_btn {
    position: relative;
    text-transform: uppercase;
    font-size: 13px;
}



html #youzify-groups-list .action a {
    font-size: 12px;
    text-transform: uppercase;
}


html #youzify-groups-list .action .group-button .leave-group {
    color: #222;
    border: 1px solid #ddd;
}

.group-button .group-button.join-group,
.group-button .group-button.request-membership,
.group-button .group-button.pending.membership-requested,
#youzify-group-buttons a.leave-group {
    position: relative;
    color: #fff;

}


html #youzify-group-buttons .group-button a,
html .autobtn {
    color: #fff;
}

.my-groups #buddypress.youzify #youzify-groups-list .action a,
.my-groups .youzify #youzify-groups-list .action a {
    min-width: 223px;
    left: -10px;
}

#youzify-groups-directory .group-button .group-button.join-group,
#youzify-groups-directory .group-button .group-button.request-membership,
#youzify-groups-directory .group-button .group-button.pending.membership-requested {
    max-width: 90%;
}


.activity-content .group-button .group-button.join-group,
.activity-content .group-button .group-button.request-membership,
.activity-content .group-button .group-button.pending.membership-requested {
    display: none !important
}

#youzify-group-buttons .group-button a:after,
.autozone_calculate_btn:after,
.group-button .group-button.join-group:after,
.group-button .group-button.request-membership:after,
.group-button .group-button.pending.membership-requested:after {
    display: inline-block;
    content: "";
    background-color: green;
    position: absolute;
    top: 0;
    right: -10px;
    height: 100%;
    width: 20px;
    transform: skewX(18deg);
    border-right: 5px solid #555;
}


html .group-members #search-members-form #members_search_submit {
    border-radius: 0;
    position: relative;
}

.youzify-group-submit-form .autobtn {
    display: inherit;
}

.autobtn {
    position: relative;
    display: inline-block;
    font-family: 'Raleway';
    font-weight: bold;
    font-size: 14px;
}


html .autobtn:after {
    display: inline-block;
    content: "";
    background-color: green;
    position: absolute;
    top: 0;
    right: -10px;
    height: 100%;
    width: 20px;
    transform: skewX(18deg);
    border-right: 5px solid #555;
}


.autozone_calculate_btn {
    width: 94% !important;
}



html .autobtn.autobtn-skewx:after {
    display: inline-block;
    content: "";
    position: absolute;
    top: 0;
    right: -10px;
    height: 100%;
    width: 20px;
    transform: skewX(-18deg);
    border-right: 0;
    background: #fff;
}


html .autobtn.autobtn-skewx:before {
    display: inline-block;
    content: "";
    position: absolute;
    top: 0;
    left: -10px;
    height: 100%;
    width: 20px;
    transform: skewX(-18deg);
    border-right: 0;
    background: #fff;
}

.youzify-posting-form-actions .skew {
    transform: skewX(-18deg);
    border: 2px solid #222;
    overflow: hidden;
    display: inline-block;
    float: right;
    margin-top: 20px;
    margin-right: 16px;
}

.skew {
    transform: skewX(-18deg);
    border: 2px solid #222;
}

.skew button {
    transform: skewX(18deg);
}

.groups-members-search label {
    margin-right: -10px !important;
}


html update-post,
html #youzify-wall-form .youzify-wall-actions .youzify-wall-post {
    background: transparent !important;
    border: 0;
    color: #222 !important;
    font-weight: bold;
    font-size: 12px;
    padding: 5px 18px;
}

.youzify-sidebar .widget-content .widget-title:before,
.youzify-group-infos-widget .youzify-group-widget-title:before,
.youzify-group-widget-title i,
.youzify-widget-title i {
    display: none;
}

.youzify-sidebar .widget-content .widget-title:after,
.youzify-group-infos-widget .youzify-group-widget-title:after,
.youzify-widget-title:after {
    position: absolute;
    top: 12px;
    left: 0;
    width: 4px;
    height: 25px;
    background-color: #999;
    content: '';
}

.youzify-group-widget-title,
.youzify-widget-title {
    position: relative;
}


html .youzify-widget .youzify-widget-title {
    margin: 0;
    color: #222;
    font-size: 14px;
    font-weight: bold;
    line-height: 22px;
    padding: 15px 35px 15px 26px;
    letter-spacing: initial;
    font-family: Raleway !important;
}

.youzify-sidebar .widget-content .widget-title,
.youzify-group-widget-title,
html .youzify-group-infos-widget .youzify-group-widget-title,
.youzify-widget-title {
    font-weight: bold;
    margin: 0;
    border: none;
    color: #222;
    font-size: 13px;
    font-weight: 700;
    line-height: 22px;
    letter-spacing: 0;
    padding: 15px 25px;
    border-bottom: 1px solid #f2f2f2;
    font-family: 'Raleway';
    text-transform: uppercase;
}


html #group-settings-form fieldset legend,
html .youzify-group-settings-tab fieldset legend {
    font-size: 12px;
    font-weight: bold;
    display: block;
    background: #eee;
    padding: 11px 20px;
    border: 0;
    text-transform: uppercase;
    color: #222 !important;
}


html .youzify-hdr-v7 .youzify-snumber {
    color: #222;
    font-size: 20px;
}


.section_letter .social-block__inner {
    margin-left: 40px;
}




html aside .button {
    font-size: 14px;
    font-weight: 700;
    font-family: 'Raleway';
}


html .autozone_calculator input[type=text] {
    height: 20px;
    color: #555;
    background-color: #f5f5f5;
    border: 0;
    padding: 20px 18px;
    margin-top: 10px;
}


.item-title a {
    color: #222 !important;
}


.activity-content .youzify-embed-action {
    display: none;
}


html #whats-new-post-in-box {
    float: none;
    margin-right: 0px;
    display: block;
}


.sidebar .widget-post1__description {
    display: none;
}


.sidebar .widget-post1__inner .auto-sale-price {
    display: none;
}







.youzify-content .pixad_autos_pagination {
    display: inline-block;
    padding-left: 0;
    margin: 41px 0 0;
}

.youzify-content .pixad_autos_pagination .page-numbers {
    display: inline;
    position: relative;
    float: left;
    padding: 8px 12px;
    line-height: 1.42857143;
    text-decoration: none;
    background-color: #fff;
    font-size: 12px;
    font-weight: 500;
    box-shadow: 0 3px 0 0 #ccc;
    margin-right: 6px;
    color: #777;
}

.youzify-content .pixad_autos_pagination .page-numbers.current {
    z-index: 2;
    color: #fff;
    background-color: #222;
    cursor: default;
    box-shadow: 0 3px 0 0 #dc2d13;
}

.youzify-content .step-section {
    margin-left: 0px;
}

.youzify-content .step-section .pixad-control-input .nice-select {
    display: none;
}

.youzify-content .step-section .pixad-control-input select {
    display: inline-block !important;
    width: 100% !important;
    margin-bottom: 18px !important;
}


.tm-autos-top-edit-button {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #fff;
    border-radius: 5px;
    padding: 5px;
    color: #222;
    transition: all .3s ease-in-out;
    box-shadow: 4px 2px 1px rgb(0 0 0 / 4%);
    text-decoration: none !important;
}

.tm-autos-top-edit-button:hover {
    background-color: #222;
    color: #fff !important;
}

.tm-autos-top-edit-button:hover * {
    color: #fff !important;
}



.tm-autos-top-edit-button * {
    color: #222;
}




.fl-author-information {
    padding: 0;
}

.fl-author-information .fl-author-meta-contain {
    display: flex;
    margin: 0;
    padding: 25px;
    /* background-image: url(media/bg/texture-1.gif); */
    border-bottom: 1px solid #eee;
}

.fl-author-information .fl-author-meta-contain .fl-author-avatar {
    width: 60px;
}

.fl-author-avatar img {
    border-radius: 50%;
}


.fl-author-meta {
    line-height: 12px;
    margin-left: 13px;
    margin-top: auto;
    margin-bottom: auto;
}


.fl-author-name {
    line-height: 18px;
    font-size: 20px;
    font-weight: 600;
    color: #222;
    display: block;
    margin-bottom: 11px;
    text-transform: capitalize;
    padding-top: 3px;
}


.fl-author-meta .fl-author-membership {
    font-size: 14px;
    color: #777777;
}

.fl-author-information .fl-author-contact-contain {
    display: inline-block;
    padding: 10px 25px 10px 40px;
    width: 100%;
}

.fl-author-contact i {
    width: 40px;
    height: 40px;
    background-color: #f5f5f5;
    border-radius: 50%;
    margin-right: 13px;
    position: relative;
    color: #222;
    display: inline-table;
    margin-top: auto;
    margin-bottom: auto;
}


.fl-author-contact span {
    position: relative;
    line-height: 26px;
    margin-top: auto;
    margin-bottom: auto;
    font-size: 15px;
}

.youzify_profile_link .youzify_profile_link_button {
    background-color: #f44153;
    color: #fff;
    width: 100%;
    text-align: center;
}


.fl-author-contact-contain .fl-author-contact {
    display: flex;
    position: relative;
    margin: 10px 0;
}


.fl-author-contact i:before {
    position: relative;
    left: 15px;
    top: 13px;
}

.fl-author-information .youzify_profile_link {
    padding: 0 25px;
    background: transparent;
    margin-bottom: 10px;
}


.fl-author-information .youzify_profile_link_button {
    background-color: #ecba00;
    border: none;
    padding: 12px 25px 12px !important;
    font-size: 14px;
    font-weight: 500;
    color: #fff !important;
    border: none;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 10px;
    width: 91%;
    text-align: center;
    margin-top: 10px;
    text-decoration: none !important;
    position: relative;
    margin-left: 3%;
}


.fl-author-information .youzify_profile_link_button:after {
    display: inline-block;
    content: "";
    background-color: green;
    position: absolute;
    top: 0;
    right: -10px;
    height: 100%;
    width: 20px;
    transform: skewX(18deg);
    border-right: 5px solid #555;
}



.templines-label-status-pending {
    background-color: red !important;
}

.templines-label-status-publish {
    background-color: green !important;
}

.youzify-main-column .tmpl-list-footer {
    display: none !important;
}


.tm-autos-top-draft-button {
    position: absolute;
    bottom: 7px;
    right: 10px;
    background-color: #fff;
    border-radius: 5px;
    padding: 5px;
    color: #222;
    transition: all .3s ease-in-out;
    box-shadow: 4px 2px 1px rgb(0 0 0 / 4%);
    text-decoration: none !important;
}


.tm-autos-top-draft-button:hover {
    background-color: red;
    color: #fff !important;
}


.page-builder-icon-box-wrap .icon_box_wrap .kswr-ibi-icon-ct svg {
    width: 80px;
    height: 80px;
}



html .page-builder-icon-box-wrap .icon_box_wrap:hover .kswr-ibi-icon-ct svg,
html .page-builder-icon-box-wrap .icon_box_wrap:hover .kswr-ibi-icon-ct svg * {
    fill: #fff !important;
}

.elementor-widget-templines-autos .pixad-body-filter li {
    list-style: none;
    line-height: 1.777;
    margin: 0 10px 0px 0 !important;
    text-transform: uppercase;
    padding: 8px 20px;
    position: relative;
    display: inline-block;
    cursor: pointer;
}

.elementor-widget-templines-autos .pixad-body-filter li.active {
    color: #fff;
}


.elementor-widget-templines-autos .pixad-body-filter li.active[data-val='all']:after {
    display: inline-block;
    content: "";
    background-color: green;
    position: absolute;
    top: 0;
    left: -10px;
    height: 100%;
    width: 20px;
    transform: skewX(-18deg);
    border-right: 0;
}


.elementor-widget-templines-autos .pixad-body-filter li.active:last-child:after {
    display: inline-block;
    content: "";
    background-color: green;
    position: absolute;
    top: 0;
    right: -10px;
    height: 100%;
    width: 20px;
    transform: skewX(18deg);
    border-right: 0;
}


html .elementor-widget-templines-autos .pixad-body-filter {
    padding: 15px 35px 45px;
    text-align: left;
    display: block !important;
    float: left;
}


.templines_all_autos_btn {
    float: right;
}

.templines_all_autos_btn + #pixad-listing {
    clear: both;
}


.elementor-widget-templines-autos .pixad-body-filter li.active[data-val='all'] {
    padding-right: 25px;
}

.elementor-widget-templines-autos .pixad-body-filter li.active:last-child {
    padding-left: 25px;
}


html .km-testimonial[data-style=style1] .km-testimonial-pic {
    margin-bottom: 10px;
    padding-top: 20px !important;
}


html .km-testimonial[data-style=style1] .km-testimonial-icon {
    padding-bottom: 0 !important;
    padding-top: 20px !important;
}


html .reviews__inner {
    margin-top: 12px;
}



html .slider-reviews .reviews__text {
    padding: 0px 15px 27px 45px;
}



.page-template-page-home.elementor-page .footer {
    margin-top: -40px;
}


.testimonial-content-span {
    max-width: 885px;
    margin: 0 auto;
    display: inline-block;
}


html .page-builder-icon-box-wrap .icon_box_wrap .kswr-ibi-bottom .kswr-ibi-content {
    padding: 0 45px;
}


html .youzify-search-landing-image-container {
    background-color: #222;
}


.youzify-hdr-v1 .youzify-header-cover {
    height: 360px;
}


.post_mod-a.zigzag-enable:nth-child(odd) .entry-media {
    float: right;
}


.post_mod-a.zigzag-enable:nth-child(even) .entry-media {
    float: left;
}

</style>