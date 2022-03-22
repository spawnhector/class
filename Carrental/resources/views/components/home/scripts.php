
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/autozone.templines.org\/elementor\/rental\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9"
        }
    };
    /*! This file is auto-generated */
    ! function(e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

        function s(e, t) {
            var a = String.fromCharCode;
            p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
            e = i.toDataURL();
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (!p || !p.fillText) return !1;
            switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case "flag":
                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                case "emoji":
                    return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
            t.DOMReady = !0
        }, t.supports.everything || (n = function() {
            t.readyCallback()
        }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
            "complete" === a.readyState && t.readyCallback()
        })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
    }(window, document, window._wpemojiSettings);
</script>

<script>
    var pixbaBookedDay = JSON.parse('[]');
</script>
<script>
    var pixbaBookedDayNew = JSON.parse('[]');

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <script src='https://autozone.templines.org/elementor/rental/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script> -->
<script src='https://autozone.templines.org/elementor/rental/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<!-- <script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-auto-deal/assets/js/pixad-ajax.js?ver=1' id='ajax_script-js'></script> -->
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/templines-helper-core/assets/js/kaswara/script.js?ver=1.0' id='templines_kaswara_js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/js/jquery-migrate-1.2.1.js?ver=3.3' id='migrate-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/js/modernizr.custom.js?ver=3.3' id='modernizr-js'></script>
<!-- <script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-booking-auto/js/fullcalendar.js?ver=5.9' id='pix-fullcalendar-js-js'></script> -->


<!-- <script>
    (function() {
        var widget_id = 'wGJkAn5OYv';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }
        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();
</script> -->
<script>
    function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {				 
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl)
                    if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl)
                    if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
        //});
    };
</script>

<script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
</script>

<script>
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
            console.log("To fix this, you can:");
            console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
            console.log("2. Find the double jQuery.js inclusion and remove it");
            return "Double Included jQuery Library";
        }
    }
</script>
<script src='https://autozone.templines.org/elementor/rental/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<!--  -->
<!-- <script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.3' id='contact-form-7-js'></script> -->
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-auto-deal/assets/js/bootstrap.min.js?ver=3.3.0' id='bootstrap-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-auto-deal/assets/js/jquery.magnific-popup.min.js?ver=1.0.0' id='magnific-popup-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.10' defer async id='tp-tools-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.10' defer async id='revmin-js'></script>
<script id='simple-likes-public-js-js-extra'>
    var simpleLikes = {
        "ajaxurl": "https:\/\/autozone.templines.org\/elementor\/rental\/wp-admin\/admin-ajax.php",
        "like": "Like",
        "unlike": "Unlike"
    };
</script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/templines-helper-core/function/like/js/likes-public.js' id='simple-likes-public-js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/templines-helper-core//assets/js/scripts.js?ver=5.9' id='templines__custom_admin_js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.1.0' id='jquery-blockui-js'></script>
<!--  -->
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.1.0' id='wc-add-to-cart-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.1.0' id='js-cookie-js'></script>
<!--  -->
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.1.0' id='woocommerce-js'></script>
<!--  -->
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.1.0' id='wc-cart-fragments-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/assets/degrees360/js/main.js?ver=1.1' id='autozone-degrees360js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/assets/degrees360/js/jquery.mobile.custom.min.js?ver=1.1' id='autozone-mobile360js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/assets/assets.min.js?ver=1.2' id='assets.min.js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3-wc.6.1.0' id='select2-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-includes/js/comment-reply.min.js?ver=5.9' id='comment-reply-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/js/waypoints.min.js?ver=3.3' id='waypoints-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/assets/header/slidebar.js?ver=1.1' id='slidebar-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/assets/header/header.js?ver=1.1' id='autozone-header-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/assets/header/slidebars.js?ver=1.1' id='slidebars-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/assets/header/doubletap.js?ver=1.1' id='doubletap-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/assets/sticky-kit/sticky-kit.js?ver=1.1' id='stickykit-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/js/wNumb.js?ver=1.1' id='wNumb-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/js/jquery.number.min.js?ver=1.1' id='jquery_number-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/js/custom.js?ver=1.1' id='autozone-custom-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/themes/autozone/js/calculator.js?ver=1.0' id='autozone-calculator-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/templines-helper-core/widgets/assets/js/change_language.js' id='custom-changer-lang-js-js'></script>

<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/templines-helper-core/assets/js/templines-ajax.js?ver=5.9' id='templines_ajax-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.5.0' id='elementor-webpack-runtime-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.5.0' id='elementor-frontend-modules-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-includes/js/jquery/ui/core.min.js?ver=1.13.0' id='jquery-ui-core-js'></script>

<script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.5.0",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "e_import_export": true,
            "additional_custom_breakpoints": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 18998,
            "title": "Autozone%20%E2%80%93%20Auto%20Dealer%20%26%20Car%20Rental%20Theme",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<!-- <script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.0' id='elementor-frontend-js'></script> -->

<script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi3;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider31"] = {
        once: RS_MODULES.modules["revslider31"] !== undefined ? RS_MODULES.modules["revslider31"].once : undefined,
        init: function() {
            window.revapi3 = window.revapi3 === undefined || window.revapi3 === null || window.revapi3.length === 0 ? document.getElementById("rev_slider_3_1") : window.revapi3;
            if (window.revapi3 === null || window.revapi3 === undefined || window.revapi3.length == 0) {
                window.revapi3initTry = window.revapi3initTry === undefined ? 0 : window.revapi3initTry + 1;
                if (window.revapi3initTry < 20) requestAnimationFrame(function() {
                    RS_MODULES.modules["revslider31"].init()
                });
                return;
            }
            window.revapi3 = jQuery(window.revapi3);
            if (window.revapi3.revolution == undefined) {
                revslider_showDoubleJqueryError("rev_slider_3_1");
                return;
            }
            revapi3.revolutionInit({
                revapi: "revapi3",
                sliderType: "carousel",
                DPR: "dpr",
                sliderLayout: "fullwidth",
                visibilityLevels: "1240,1024,778,480",
                gridwidth: 760,
                gridheight: 480,
                lazyType: "all",
                spinner: "spinner14",
                perspective: 600,
                perspectiveType: "local",
                spinnerclr: "#FFFFFF",
                editorheight: "480,600,600,600",
                responsiveLevels: "1240,1024,778,480",
                stopAtSlide: 1,
                stopAfterLoops: 0,
                stopLoop: true,
                startWithSlide: 3,
                carousel: {
                    showLayersAllTime: "all",
                    space: -250,
                    maxVisibleItems: 5,
                    maxRotation: 15,
                    vary_rotation: true,
                    minScale: 65,
                    vary_fade: true
                },
                progressBar: {
                    disableProgressBar: true
                },
                navigation: {
                    mouseScrollNavigation: false,
                    wheelCallDelay: 1000,
                    touch: {
                        touchenabled: true,
                        swipe_min_touches: 50
                    },
                    arrows: {
                        enable: true,
                        style: "custom",
                        left: {
                            h_offset: 30
                        },
                        right: {
                            h_offset: 30
                        }
                    }
                },
                parallax: {
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000
                },
                viewPort: {
                    global: true,
                    globalDist: "-200px",
                    enable: false,
                    visible_area: "20%"
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });

        }
    } // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) {
        window.RS_MODULES.checkMinimal();
    };
</script>

<script src="https://kit.fontawesome.com/1e7319fbc7.js" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-booking-auto/js/jquery.periodpicker.full.min.js?ver=5.9' id='pix-periodpicker-js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-booking-auto/js/jquery.timepicker.min.js?ver=5.9' id='pix-timepicker-js-js'></script>
<script src='https://autozone.templines.org/elementor/rental/wp-content/plugins/pix-booking-auto/js/jquery.datetimepicker.full.min.js?ver=5.9' id='pix-datetimepicker-js-js'></script>
<script>
    // $(document).ready(function(){
    // openLoginModal();   
    // });


    /*
    *
    * login-register modal
    * Autor: Creative Tim
    * Web-autor: creative.tim
    * Web script: http://creative-tim.com
    * 
    */
    function showRegisterForm(){
        $('.loginBox').fadeOut('fast',function(){
            $('.registerBox').fadeIn('fast');
            $('.login-footer').fadeOut('fast',function(){
                $('.register-footer').fadeIn('fast');
            });
            $('.modal-title').html('Register with');
        }); 
        $('.error').removeClass('alert alert-danger').html('');
        
    }
    function showLoginForm(){
        $('#loginModal .registerBox').fadeOut('fast',function(){
            $('.loginBox').fadeIn('fast');
            $('.register-footer').fadeOut('fast',function(){
                $('.login-footer').fadeIn('fast');    
            });
            
            $('.modal-title').html('Login with');
        });       
        $('.error').removeClass('alert alert-danger').html(''); 
    }

    function openLoginModal(){
        let checj = window.location.pathname.split('/')
        if (checj[1] == 'car') {
            if(validateBooking()) {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                showLoginForm();
                setTimeout(function(){
                    $('#loginModal').modal('show');    
                }, 230);
            };
        }else{
            showLoginForm();
            setTimeout(function(){
                $('#loginModal').modal('show');    
            }, 230);
        }
        
    }
    function openRegisterModal(){
        showRegisterForm();
        setTimeout(function(){
            $('#loginModal').modal('show');    
        }, 230);
        
    }

    function loginAjax(){
        /*   Remove this comments when moving to server
        $.post( "/login", function( data ) {
                if(data == 1){
                    window.location.replace("/home");            
                } else {
                    shakeModal(); 
                }
            });
        */

    /*   Simulate error message from the server   */
        // shakeModal();
    }

    function shakeModal(msg){
        $('#loginModal .modal-dialog').addClass('shake');
                $('.error').addClass('alert alert-danger').html(msg);
                $('input[type="password"]').val('');
                setTimeout( function(){ 
                    $('#loginModal .modal-dialog').removeClass('shake'); 
        }, 1000 ); 
    }

    
    var error = (err) => {
        $(".myAlert-top").show();
        $('#alert-message').text(err);
        setTimeout(function(){
            $(".myAlert-top").hide(); 
        }, 3000);
    };
</script>