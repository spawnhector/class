<style>
    a:active,
    a:hover,
    div.pp_pic_holder a:focus {
        outline: 0
    }

    #filter li,
    .breadcrumb,
    .carousel-indicators,
    .dropdown-menu,
    .list-inline,
    .list-unstyled,
    .media-list,
    .nav,
    .pager {
        list-style: none
    }

    div.pp_default .pp_bottom,
    div.pp_default .pp_bottom .pp_left,
    div.pp_default .pp_bottom .pp_middle,
    div.pp_default .pp_bottom .pp_right,
    div.pp_default .pp_top,
    div.pp_default .pp_top .pp_left,
    div.pp_default .pp_top .pp_middle,
    div.pp_default .pp_top .pp_right {
        height: 13px
    }

    div.pp_default .pp_top .pp_left {
        background: url(../images/prettyPhoto/default/sprite.png) -78px -93px no-repeat
    }

    div.pp_default .pp_top .pp_middle {
        background: url(../images/prettyPhoto/default/sprite_x.png) top left repeat-x
    }

    div.pp_default .pp_top .pp_right {
        background: url(../images/prettyPhoto/default/sprite.png) -112px -93px no-repeat
    }

    div.pp_default .pp_content .ppt {
        color: #f8f8f8
    }

    div.pp_default .pp_content_container .pp_left {
        background: url(../images/prettyPhoto/default/sprite_y.png) -7px 0 repeat-y;
        padding-left: 13px
    }

    div.pp_default .pp_content_container .pp_right {
        background: url(../images/prettyPhoto/default/sprite_y.png) top right repeat-y;
        padding-right: 13px
    }

    div.pp_default .pp_next:hover {
        background: url(../images/prettyPhoto/default/sprite_next.png) center right no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_previous:hover {
        background: url(../images/prettyPhoto/default/sprite_prev.png) center left no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_expand {
        background: url(../images/prettyPhoto/default/sprite.png) 0 -29px no-repeat;
        cursor: pointer;
        width: 28px;
        height: 28px
    }

    div.pp_default .pp_expand:hover {
        background: url(../images/prettyPhoto/default/sprite.png) 0 -56px no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_contract {
        background: url(../images/prettyPhoto/default/sprite.png) 0 -84px no-repeat;
        cursor: pointer;
        width: 28px;
        height: 28px
    }

    div.pp_default .pp_contract:hover {
        background: url(../images/prettyPhoto/default/sprite.png) 0 -113px no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_close {
        width: 30px;
        height: 30px;
        background: url(../images/prettyPhoto/default/sprite.png) 2px 1px no-repeat;
        cursor: pointer
    }

    div.pp_default .pp_gallery ul li a {
        background: url(../images/prettyPhoto/default/default_thumb.png) center center #f8f8f8;
        border: 1px solid #aaa
    }

    div.pp_default .pp_social {
        margin-top: 7px
    }

    div.pp_default .pp_gallery a.pp_arrow_next,
    div.pp_default .pp_gallery a.pp_arrow_previous {
        position: static;
        left: auto
    }

    div.pp_default .pp_nav .pp_pause,
    div.pp_default .pp_nav .pp_play {
        background: url(../images/prettyPhoto/default/sprite.png) -51px 1px no-repeat;
        height: 30px;
        width: 30px
    }

    div.pp_default .pp_nav .pp_pause {
        background-position: -51px -29px
    }

    div.pp_default a.pp_arrow_next,
    div.pp_default a.pp_arrow_previous {
        background: url(../images/prettyPhoto/default/sprite.png) -31px -3px no-repeat;
        height: 20px;
        width: 20px;
        margin: 4px 0 0
    }

    div.pp_default a.pp_arrow_next {
        left: 52px;
        background-position: -82px -3px
    }

    div.pp_default .pp_content_container .pp_details {
        margin-top: 5px
    }

    div.pp_default .pp_nav {
        clear: none;
        height: 30px;
        width: 110px;
        position: relative
    }

    div.pp_default .pp_nav .currentTextHolder {
        font-family: Georgia;
        font-style: italic;
        color: #999;
        font-size: 11px;
        left: 75px;
        line-height: 25px;
        position: absolute;
        top: 2px;
        margin: 0;
        padding: 0 0 0 10px
    }

    div.pp_default .pp_arrow_next:hover,
    div.pp_default .pp_arrow_previous:hover,
    div.pp_default .pp_close:hover,
    div.pp_default .pp_nav .pp_pause:hover,
    div.pp_default .pp_nav .pp_play:hover {
        opacity: .7
    }

    div.pp_default .pp_description {
        font-size: 11px;
        font-weight: 700;
        line-height: 14px;
        margin: 5px 50px 5px 0
    }

    div.pp_default .pp_bottom .pp_left {
        background: url(../images/prettyPhoto/default/sprite.png) -78px -127px no-repeat
    }

    div.pp_default .pp_bottom .pp_middle {
        background: url(../images/prettyPhoto/default/sprite_x.png) bottom left repeat-x
    }

    div.pp_default .pp_bottom .pp_right {
        background: url(../images/prettyPhoto/default/sprite.png) -112px -127px no-repeat
    }

    div.pp_default .pp_loaderIcon {
        background: url(../images/prettyPhoto/default/loader.gif) center center no-repeat
    }

    div.light_rounded .pp_top .pp_left {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -88px -53px no-repeat
    }

    div.light_rounded .pp_top .pp_right {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -110px -53px no-repeat
    }

    div.light_rounded .pp_next:hover {
        background: url(../images/prettyPhoto/light_rounded/btnNext.png) center right no-repeat;
        cursor: pointer
    }

    div.light_rounded .pp_previous:hover {
        background: url(../images/prettyPhoto/light_rounded/btnPrevious.png) center left no-repeat;
        cursor: pointer
    }

    div.light_rounded .pp_expand {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -31px -26px no-repeat;
        cursor: pointer
    }

    div.light_rounded .pp_expand:hover {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -31px -47px no-repeat;
        cursor: pointer
    }

    div.light_rounded .pp_contract {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) 0 -26px no-repeat;
        cursor: pointer
    }

    div.light_rounded .pp_contract:hover {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) 0 -47px no-repeat;
        cursor: pointer
    }

    div.light_rounded .pp_close {
        width: 75px;
        height: 22px;
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -1px -1px no-repeat;
        cursor: pointer
    }

    div.light_rounded .pp_nav .pp_play {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -1px -100px no-repeat;
        height: 15px;
        width: 14px
    }

    div.light_rounded .pp_nav .pp_pause {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -24px -100px no-repeat;
        height: 15px;
        width: 14px
    }

    div.light_rounded .pp_arrow_previous {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) 0 -71px no-repeat
    }

    div.light_rounded .pp_arrow_next {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -22px -71px no-repeat
    }

    div.light_rounded .pp_bottom .pp_left {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -88px -80px no-repeat
    }

    div.light_rounded .pp_bottom .pp_right {
        background: url(../images/prettyPhoto/light_rounded/sprite.png) -110px -80px no-repeat
    }

    div.dark_rounded .pp_top .pp_left {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -88px -53px no-repeat
    }

    div.dark_rounded .pp_top .pp_right {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -110px -53px no-repeat
    }

    div.dark_rounded .pp_content_container .pp_left {
        background: url(../images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat-y
    }

    div.dark_rounded .pp_content_container .pp_right {
        background: url(../images/prettyPhoto/dark_rounded/contentPattern.png) top right repeat-y
    }

    div.dark_rounded .pp_next:hover {
        background: url(../images/prettyPhoto/dark_rounded/btnNext.png) center right no-repeat;
        cursor: pointer
    }

    div.dark_rounded .pp_previous:hover {
        background: url(../images/prettyPhoto/dark_rounded/btnPrevious.png) center left no-repeat;
        cursor: pointer
    }

    div.dark_rounded .pp_expand {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -31px -26px no-repeat;
        cursor: pointer
    }

    div.dark_rounded .pp_expand:hover {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -31px -47px no-repeat;
        cursor: pointer
    }

    div.dark_rounded .pp_contract {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) 0 -26px no-repeat;
        cursor: pointer
    }

    div.dark_rounded .pp_contract:hover {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) 0 -47px no-repeat;
        cursor: pointer
    }

    div.dark_rounded .pp_close {
        width: 75px;
        height: 22px;
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -1px -1px no-repeat;
        cursor: pointer
    }

    div.dark_rounded .pp_description {
        margin-right: 85px;
        color: #fff
    }

    div.dark_rounded .pp_nav .pp_play {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -1px -100px no-repeat;
        height: 15px;
        width: 14px
    }

    div.dark_rounded .pp_nav .pp_pause {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -24px -100px no-repeat;
        height: 15px;
        width: 14px
    }

    div.dark_rounded .pp_arrow_previous {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) 0 -71px no-repeat
    }

    div.dark_rounded .pp_arrow_next {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -22px -71px no-repeat
    }

    div.dark_rounded .pp_bottom .pp_left {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -88px -80px no-repeat
    }

    div.dark_rounded .pp_bottom .pp_right {
        background: url(../images/prettyPhoto/dark_rounded/sprite.png) -110px -80px no-repeat
    }

    div.dark_rounded .pp_loaderIcon {
        background: url(../images/prettyPhoto/dark_rounded/loader.gif) center center no-repeat
    }

    div.dark_square .pp_content,
    div.dark_square .pp_left,
    div.dark_square .pp_middle,
    div.dark_square .pp_right {
        background: #000
    }

    div.dark_square .pp_description {
        color: #fff;
        margin: 0 85px 0 0
    }

    div.dark_square .pp_loaderIcon {
        background: url(../images/prettyPhoto/dark_square/loader.gif) center center no-repeat
    }

    div.dark_square .pp_expand {
        background: url(../images/prettyPhoto/dark_square/sprite.png) -31px -26px no-repeat;
        cursor: pointer
    }

    div.dark_square .pp_expand:hover {
        background: url(../images/prettyPhoto/dark_square/sprite.png) -31px -47px no-repeat;
        cursor: pointer
    }

    div.dark_square .pp_contract {
        background: url(../images/prettyPhoto/dark_square/sprite.png) 0 -26px no-repeat;
        cursor: pointer
    }

    div.dark_square .pp_contract:hover {
        background: url(../images/prettyPhoto/dark_square/sprite.png) 0 -47px no-repeat;
        cursor: pointer
    }

    div.dark_square .pp_close {
        width: 75px;
        height: 22px;
        background: url(../images/prettyPhoto/dark_square/sprite.png) -1px -1px no-repeat;
        cursor: pointer
    }

    div.dark_square .pp_nav {
        clear: none
    }

    div.dark_square .pp_nav .pp_play {
        background: url(../images/prettyPhoto/dark_square/sprite.png) -1px -100px no-repeat;
        height: 15px;
        width: 14px
    }

    div.dark_square .pp_nav .pp_pause {
        background: url(../images/prettyPhoto/dark_square/sprite.png) -24px -100px no-repeat;
        height: 15px;
        width: 14px
    }

    div.dark_square .pp_arrow_previous {
        background: url(../images/prettyPhoto/dark_square/sprite.png) 0 -71px no-repeat
    }

    div.dark_square .pp_arrow_next {
        background: url(../images/prettyPhoto/dark_square/sprite.png) -22px -71px no-repeat
    }

    div.dark_square .pp_next:hover {
        background: url(../images/prettyPhoto/dark_square/btnNext.png) center right no-repeat;
        cursor: pointer
    }

    div.dark_square .pp_previous:hover {
        background: url(../images/prettyPhoto/dark_square/btnPrevious.png) center left no-repeat;
        cursor: pointer
    }

    div.light_square .pp_expand {
        background: url(../images/prettyPhoto/light_square/sprite.png) -31px -26px no-repeat;
        cursor: pointer
    }

    div.light_square .pp_expand:hover {
        background: url(../images/prettyPhoto/light_square/sprite.png) -31px -47px no-repeat;
        cursor: pointer
    }

    div.light_square .pp_contract {
        background: url(../images/prettyPhoto/light_square/sprite.png) 0 -26px no-repeat;
        cursor: pointer
    }

    div.light_square .pp_contract:hover {
        background: url(../images/prettyPhoto/light_square/sprite.png) 0 -47px no-repeat;
        cursor: pointer
    }

    div.light_square .pp_close {
        width: 75px;
        height: 22px;
        background: url(../images/prettyPhoto/light_square/sprite.png) -1px -1px no-repeat;
        cursor: pointer
    }

    div.light_square .pp_nav .pp_play {
        background: url(../images/prettyPhoto/light_square/sprite.png) -1px -100px no-repeat;
        height: 15px;
        width: 14px
    }

    div.light_square .pp_nav .pp_pause {
        background: url(../images/prettyPhoto/light_square/sprite.png) -24px -100px no-repeat;
        height: 15px;
        width: 14px
    }

    div.light_square .pp_arrow_previous {
        background: url(../images/prettyPhoto/light_square/sprite.png) 0 -71px no-repeat
    }

    div.light_square .pp_arrow_next {
        background: url(../images/prettyPhoto/light_square/sprite.png) -22px -71px no-repeat
    }

    div.light_square .pp_next:hover {
        background: url(../images/prettyPhoto/light_square/btnNext.png) center right no-repeat;
        cursor: pointer
    }

    div.light_square .pp_previous:hover {
        background: url(../images/prettyPhoto/light_square/btnPrevious.png) center left no-repeat;
        cursor: pointer
    }

    div.facebook .pp_top .pp_left {
        background: url(../images/prettyPhoto/facebook/sprite.png) -88px -53px no-repeat
    }

    div.facebook .pp_top .pp_middle {
        background: url(../images/prettyPhoto/facebook/contentPatternTop.png) top left repeat-x
    }

    div.facebook .pp_top .pp_right {
        background: url(../images/prettyPhoto/facebook/sprite.png) -110px -53px no-repeat
    }

    div.facebook .pp_content_container .pp_left {
        background: url(../images/prettyPhoto/facebook/contentPatternLeft.png) top left repeat-y
    }

    div.facebook .pp_content_container .pp_right {
        background: url(../images/prettyPhoto/facebook/contentPatternRight.png) top right repeat-y
    }

    div.facebook .pp_expand {
        background: url(../images/prettyPhoto/facebook/sprite.png) -31px -26px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_expand:hover {
        background: url(../images/prettyPhoto/facebook/sprite.png) -31px -47px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_contract {
        background: url(../images/prettyPhoto/facebook/sprite.png) 0 -26px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_contract:hover {
        background: url(../images/prettyPhoto/facebook/sprite.png) 0 -47px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_close {
        width: 22px;
        height: 22px;
        background: url(../images/prettyPhoto/facebook/sprite.png) -1px -1px no-repeat;
        cursor: pointer
    }

    div.facebook .pp_description {
        margin: 0 37px 0 0
    }

    div.facebook .pp_loaderIcon {
        background: url(../images/prettyPhoto/facebook/loader.gif) center center no-repeat
    }

    div.facebook .pp_arrow_previous {
        background: url(../images/prettyPhoto/facebook/sprite.png) 0 -71px no-repeat;
        height: 22px;
        margin-top: 0;
        width: 22px
    }

    div.facebook .pp_arrow_previous.disabled {
        background-position: 0 -96px;
        cursor: default
    }

    div.facebook .pp_arrow_next {
        background: url(../images/prettyPhoto/facebook/sprite.png) -32px -71px no-repeat;
        height: 22px;
        margin-top: 0;
        width: 22px
    }

    div.facebook .pp_arrow_next.disabled {
        background-position: -32px -96px;
        cursor: default
    }

    div.facebook .pp_nav {
        margin-top: 0
    }

    div.facebook .pp_nav p {
        font-size: 15px;
        padding: 0 3px 0 4px
    }

    div.facebook .pp_nav .pp_play {
        background: url(../images/prettyPhoto/facebook/sprite.png) -1px -123px no-repeat;
        height: 22px;
        width: 22px
    }

    div.facebook .pp_nav .pp_pause {
        background: url(../images/prettyPhoto/facebook/sprite.png) -32px -123px no-repeat;
        height: 22px;
        width: 22px
    }

    div.facebook .pp_next:hover {
        background: url(../images/prettyPhoto/facebook/btnNext.png) center right no-repeat;
        cursor: pointer
    }

    div.facebook .pp_previous:hover {
        background: url(../images/prettyPhoto/facebook/btnPrevious.png) center left no-repeat;
        cursor: pointer
    }

    div.facebook .pp_bottom .pp_left {
        background: url(../images/prettyPhoto/facebook/sprite.png) -88px -80px no-repeat
    }

    div.facebook .pp_bottom .pp_middle {
        background: url(../images/prettyPhoto/facebook/contentPatternBottom.png) top left repeat-x
    }

    div.facebook .pp_bottom .pp_right {
        background: url(../images/prettyPhoto/facebook/sprite.png) -110px -80px no-repeat
    }

    div.pp_overlay {
        background: #000;
        display: none;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 9500
    }

    div.pp_pic_holder {
        display: none;
        position: absolute;
        width: 100px;
        z-index: 10000
    }

    .pp_content {
        height: 40px;
        min-width: 40px
    }

    * html .pp_content {
        width: 40px
    }

    .pp_content_container {
        position: relative;
        text-align: left;
        width: 100%
    }

    .pp_content_container .pp_left {
        padding-left: 20px
    }

    .pp_content_container .pp_right {
        padding-right: 20px
    }

    .pp_content_container .pp_details {
        float: left;
        margin: 10px 0 2px
    }

    .pp_description {
        display: none;
        margin: 0
    }

    .pp_social {
        float: left;
        margin: 0
    }

    .pp_social .facebook {
        float: left;
        margin-left: 5px;
        width: 55px;
        overflow: hidden
    }

    .pp_social .twitter {
        float: left
    }

    .pp_nav {
        clear: right;
        float: left;
        margin: 3px 10px 0 0
    }

    .pp_nav p {
        float: left;
        margin: 2px 4px
    }

    .pp_nav .pp_pause,
    .pp_nav .pp_play {
        float: left;
        margin-right: 4px;
        text-indent: -10000px
    }

    a.pp_arrow_next,
    a.pp_arrow_previous {
        display: block;
        float: left;
        height: 15px;
        margin-top: 3px;
        overflow: hidden;
        text-indent: -10000px;
        width: 14px
    }

    .pp_hoverContainer {
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 2000
    }

    .pp_gallery {
        display: none;
        left: 50%;
        margin-top: -50px;
        position: absolute;
        z-index: 10000
    }

    .pp_gallery div {
        float: left;
        overflow: hidden;
        position: relative
    }

    .pp_gallery ul {
        float: left;
        height: 35px;
        position: relative;
        margin: 0 0 0 5px;
        padding: 0
    }

    .pp_gallery ul a {
        border: 1px solid rgba(0, 0, 0, .5);
        display: block;
        float: left;
        height: 33px;
        overflow: hidden
    }

    .pp_gallery ul a img {
        border: 0
    }

    .pp_gallery li {
        display: block;
        float: left;
        margin: 0 5px 0 0;
        padding: 0
    }

    .pp_gallery li.default a {
        background: url(../images/prettyPhoto/facebook/default_thumbnail.gif) no-repeat;
        display: block;
        height: 33px;
        width: 50px
    }

    a.pp_next,
    a.pp_previous {
        background: url(../images/prettyPhoto/light_rounded/btnNext.png) 10000px 10000px no-repeat;
        display: block;
        height: 100%;
        width: 49%;
        text-indent: -10000px
    }

    .pp_gallery .pp_arrow_next,
    .pp_gallery .pp_arrow_previous {
        margin-top: 7px !important
    }

    a.pp_next {
        float: right
    }

    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9,
    .owl-carousel .owl-item,
    a.pp_previous {
        float: left
    }

    a.pp_contract,
    a.pp_expand {
        cursor: pointer;
        display: none;
        height: 20px;
        position: absolute;
        right: 30px;
        text-indent: -10000px;
        top: 10px;
        width: 20px;
        z-index: 20000
    }

    .pp_loaderIcon,
    a.pp_close {
        display: block;
        position: absolute
    }

    a.pp_close {
        right: 0;
        top: 0;
        line-height: 22px;
        text-indent: -10000px
    }

    .pp_loaderIcon {
        height: 24px;
        left: 50%;
        top: 50%;
        width: 24px;
        margin: -12px 0 0 -12px
    }

    .pp_fade,
    .pp_gallery li.default a img,
    div.ppt {
        display: none
    }

    #pp_full_res {
        line-height: 1 !important
    }

    #pp_full_res .pp_inline p {
        margin: 0 0 15px
    }

    div.ppt {
        color: #fff;
        font-size: 17px;
        z-index: 9999;
        margin: 0 0 5px 15px
    }

    div.light_rounded .pp_content,
    div.pp_default .pp_content {
        background-color: #fff
    }

    div.facebook #pp_full_res .pp_inline,
    div.facebook .pp_content .ppt,
    div.light_rounded #pp_full_res .pp_inline,
    div.light_rounded .pp_content .ppt,
    div.light_square #pp_full_res .pp_inline,
    div.light_square .pp_content .ppt,
    div.pp_default #pp_full_res .pp_inline {
        color: #000
    }

    .pp_gallery li.selected a,
    .pp_gallery ul a:hover,
    div.pp_default .pp_gallery ul li a:hover,
    div.pp_default .pp_gallery ul li.selected a {
        border-color: #fff
    }

    div.dark_rounded .pp_details,
    div.dark_square .pp_details,
    div.facebook .pp_details,
    div.light_rounded .pp_details,
    div.light_square .pp_details,
    div.pp_default .pp_details {
        position: relative
    }

    div.facebook .pp_content,
    div.light_rounded .pp_bottom .pp_middle,
    div.light_rounded .pp_content_container .pp_left,
    div.light_rounded .pp_content_container .pp_right,
    div.light_rounded .pp_top .pp_middle,
    div.light_square .pp_content,
    div.light_square .pp_left,
    div.light_square .pp_middle,
    div.light_square .pp_right {
        background: #fff
    }

    div.light_rounded .pp_description,
    div.light_square .pp_description {
        margin-right: 85px
    }

    div.dark_rounded .pp_gallery a.pp_arrow_next,
    div.dark_rounded .pp_gallery a.pp_arrow_previous,
    div.dark_square .pp_gallery a.pp_arrow_next,
    div.dark_square .pp_gallery a.pp_arrow_previous,
    div.light_rounded .pp_gallery a.pp_arrow_next,
    div.light_rounded .pp_gallery a.pp_arrow_previous,
    div.light_square .pp_gallery a.pp_arrow_next,
    div.light_square .pp_gallery a.pp_arrow_previous {
        margin-top: 12px !important
    }

    div.dark_rounded .pp_arrow_previous.disabled,
    div.dark_square .pp_arrow_previous.disabled,
    div.light_rounded .pp_arrow_previous.disabled,
    div.light_square .pp_arrow_previous.disabled {
        background-position: 0 -87px;
        cursor: default
    }

    div.dark_rounded .pp_arrow_next.disabled,
    div.dark_square .pp_arrow_next.disabled,
    div.light_rounded .pp_arrow_next.disabled,
    div.light_square .pp_arrow_next.disabled {
        background-position: -22px -87px;
        cursor: default
    }

    div.light_rounded .pp_loaderIcon,
    div.light_square .pp_loaderIcon {
        background: url(../images/prettyPhoto/light_rounded/loader.gif) center center no-repeat
    }

    div.dark_rounded .pp_bottom .pp_middle,
    div.dark_rounded .pp_content,
    div.dark_rounded .pp_top .pp_middle {
        background: url(../images/prettyPhoto/dark_rounded/contentPattern.png) top left
    }

    div.dark_rounded .currentTextHolder,
    div.dark_square .currentTextHolder {
        color: #c4c4c4
    }

    div.dark_rounded #pp_full_res .pp_inline,
    div.dark_square #pp_full_res .pp_inline {
        color: #fff
    }

    .pp_bottom,
    .pp_top {
        height: 20px;
        position: relative
    }

    * html .pp_bottom,
    * html .pp_top {
        padding: 0 20px
    }

    .pp_bottom .pp_left,
    .pp_top .pp_left {
        height: 20px;
        left: 0;
        position: absolute;
        width: 20px
    }

    .pp_bottom .pp_middle,
    .pp_top .pp_middle {
        height: 20px;
        left: 20px;
        position: absolute;
        right: 20px
    }

    * html .pp_bottom .pp_middle,
    * html .pp_top .pp_middle {
        left: 0;
        position: static
    }

    .pp_bottom .pp_right,
    .pp_top .pp_right {
        height: 20px;
        left: auto;
        position: absolute;
        right: 0;
        top: 0;
        width: 20px
    }

    .owl-carousel .owl-wrapper:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0
    }

    .owl-carousel,
    .owl-carousel .owl-wrapper {
        display: none;
        position: relative
    }

    .owl-carousel .item {
        position: relative
    }

    .owl-carousel {
        width: 100%;
        -ms-touch-action: pan-y
    }

    .owl-carousel .owl-wrapper-outer {
        overflow: hidden;
        position: relative;
        width: 100%
    }

    .owl-carousel .owl-wrapper-outer.autoHeight {
        -webkit-transition: height .5s ease-in-out;
        -moz-transition: height .5s ease-in-out;
        -ms-transition: height .5s ease-in-out;
        -o-transition: height .5s ease-in-out;
        transition: height .5s ease-in-out
    }

    .owl-controls .owl-buttons div,
    .owl-controls .owl-page {
        cursor: pointer
    }

    .owl-controls {
        -khtml-user-select: none;
        user-select: none
    }

    .btn,
    .jelect,
    .noUi-target,
    .noUi-target * {
        -webkit-user-select: none;
        -moz-user-select: none
    }

    .btn,
    .noUi-target,
    .noUi-target * {
        -ms-user-select: none
    }

    .grabbing {
        cursor: url(grabbing.png) 8 8, move
    }

    .owl-carousel .owl-item,
    .owl-carousel .owl-wrapper {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0)
    }

    .owl-theme .owl-controls {
        position: absolute
    }

    .owl-theme_mod-a .owl-controls {
        text-align: center;
        top: -120px;
        right: 0
    }

    .owl-theme .owl-controls .owl-buttons div {
        position: relative;
        display: inline-block;
        width: 36px;
        height: 36px;
        margin-right: 3px;
        vertical-align: middle;
        color: #aaa;
        transition: all .3s;
        border: 2px solid #eee
    }

    .owl-theme .owl-controls .owl-buttons .owl-next:after,
    .owl-theme .owl-controls .owl-buttons .owl-next:before {
        right: -4px
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev:after,
    .owl-theme .owl-controls .owl-buttons .owl-prev:before {
        left: -4px
    }

    .owl-theme .owl-controls .owl-buttons .owl-next:before {
        top: 0;
        transform: skewX(20deg)
    }

    .owl-theme .owl-controls .owl-buttons .owl-next:after {
        bottom: 0;
        transform: skewX(-20deg)
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev:before {
        bottom: 0;
        transform: skewX(20deg)
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev:after {
        top: 0;
        transform: skewX(-20deg)
    }

    .owl-theme .owl-controls .owl-buttons div:hover,
    .owl-theme .owl-controls .owl-buttons div:hover:after,
    .owl-theme .owl-controls .owl-buttons div:hover:before {
        color: #9F9F9F;
        border-color: #9F9F9F
    }

    .owl-theme .owl-controls.clickable .owl-buttons div:hover {
        filter: Alpha(Opacity=100);
        opacity: 1;
        text-decoration: none
    }

    .owl-theme .owl-controls .owl-buttons div i {
        display: inline-block;
        padding-top: 2px;
        font-style: normal
    }

    .owl-theme .owl-controls .owl-buttons .owl-next i:after,
    .owl-theme .owl-controls .owl-buttons .owl-prev i:after {
        font-family: FontAwesome;
        font-size: 15px
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev i:after {
        content: "\f104"
    }

    .owl-theme .owl-controls .owl-buttons .owl-next i:after {
        content: "\f105"
    }

    .owl-theme .owl-controls .owl-page {
        display: inline-block;
        zoom: 1;
        padding-left: 3px;
        padding-right: 3px
    }

    .owl-theme .owl-controls .owl-page span {
        display: block;
        width: 8px;
        height: 8px;
        margin: 5px 3px;
        border: 1px solid #eee;
        transition: all .3s;
        transform: rotate(45deg)
    }

    .btn-default,
    .btn-primary,
    .btn-success {
        transform: skewX(-17deg)
    }

    .owl-theme .owl-controls .owl-page.active span,
    .owl-theme .owl-controls.clickable .owl-page:hover span {
        background-color: #fff;
        border-color: #eee
    }

    .owl-theme .owl-controls .owl-page span.owl-numbers {
        height: auto;
        width: auto;
        color: #FFF;
        padding: 2px 10px;
        font-size: 12px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px
    }

    .owl-item.loading {
        min-height: 150px;
        background: url(AjaxLoader.gif) center center no-repeat
    }

    .owl-theme_mod-c .owl-controls {
        right: 0;
        bottom: -65px
    }

    .owl-theme_mod-c .owl-controls .owl-page span {
        border-color: #999
    }

    .owl-theme_mod-d .owl-controls {
        width: 100%;
        text-align: center;
        bottom: -27px
    }

    .owl-theme_mod-d .owl-controls .owl-page span {
        border-color: #ccc
    }

    .noUi-target,
    .noUi-target * {
        -webkit-touch-callout: none;
        -ms-touch-action: none;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .noUi-base {
        width: 100%;
        height: 100%;
        position: relative
    }

    .noUi-origin {
        position: absolute;
        right: 0;
        top: 0;
        left: 0;
        bottom: 0
    }

    .noUi-handle {
        background: #fff;
        position: relative;
        z-index: 1;
        border-radius: 50%;
        border: 1px solid #eee
    }

    .noUi-stacking .noUi-handle {
        z-index: 10
    }

    .noUi-state-tap .noUi-origin {
        -webkit-transition: left .3s, top .3s;
        transition: left .3s, top .3s
    }

    .noUi-state-drag * {
        cursor: inherit !important
    }

    .noUi-horizontal {
        height: 10px;
        margin-bottom: 24px;
        margin-top: 40px
    }

    .noUi-horizontal .noUi-handle {
        height: 18px;
        left: -7px;
        top: -6px;
        width: 18px;
        cursor: pointer
    }

    .noUi-horizontal .noUi-handle:after {
        position: absolute;
        width: 8px;
        height: 8px;
        left: 4px;
        content: '';
        display: block;
        top: 4px;
        background-color: #999;
        border-radius: 50%
    }

    .noUi-horizontal.noUi-extended {
        padding: 0 15px
    }

    .noUi-horizontal.noUi-extended .noUi-origin {
        right: -15px
    }

    .noUi-vertical {
        width: 18px
    }

    .noUi-vertical .noUi-handle {
        width: 28px;
        height: 34px;
        left: -6px;
        top: -17px
    }

    .noUi-vertical.noUi-extended {
        padding: 15px 0
    }

    .noUi-vertical.noUi-extended .noUi-origin {
        bottom: -15px
    }

    .noUi-background {
        background: #FAFAFA
    }

    .noUi-origin+.noUi-origin {
        border: 0;
        background: #f5f5f5
    }

    .noUi-origin {
        -webkit-transition: background 450ms;
        transition: background 450ms;
        border-radius: 2px
    }

    .noUi-target {
        border: 1px solid #eee;
        background: #f5f5f5
    }

    .noUi-dragable {
        cursor: w-resize
    }

    .noUi-vertical .noUi-dragable {
        cursor: n-resize
    }

    .noUi-handle,
    button[disabled],
    html input[disabled] {
        cursor: default
    }

    .noUi-active {
        box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #DDD, 0 3px 6px -3px #BBB
    }

    .noUi-handle:after {
        left: 9px
    }

    .noUi-vertical .noUi-handle:after,
    .noUi-vertical .noUi-handle:before {
        width: 14px;
        height: 1px;
        left: 6px;
        top: 14px
    }

    .noUi-vertical .noUi-handle:after {
        top: 17px
    }

    [disabled] .noUi-connect,
    [disabled].noUi-connect {
        background: #B8B8B8
    }

    [disabled] .noUi-handle {
        cursor: not-allowed
    }

    #filter li a,
    [role=button] {
        cursor: pointer
    }

    .tooltip {
        border: 1px solid #D9D9D9;
        font: 400 12px/12px Arial;
        border-radius: 3px;
        background: #fff;
        top: -43px;
        padding: 5px;
        left: -9px;
        width: 50px
    }

    .tooltip strong {
        display: block;
        padding: 2px
    }

    #filter {
        padding-left: 0;
        margin-bottom: 50px
    }

    #filter li {
        display: inline-block;
        margin-bottom: 0
    }

    #filter li a {
        position: relative;
        display: block;
        margin-right: -3px;
        transition: all .3s
    }

    #filter li a.current,
    #filter li a:focus,
    #filter li a:hover {
        text-decoration: none
    }

    .title-action a {
        color: #fff !important;
        border-color: #526aff !important;
        background: #526aff !important
    }

    .isotope-skin2 .isotope-item {
        width: 31.18%;
        margin: 1%
    }

    .isotope-item {
        width: 24.9%
    }

    .isotope-item img {
        max-width: 100%;
        height: auto
    }

    .isotope-item:hover .slide-desc {
        opacity: 1
    }

    .isotope-item .slide-desc {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 20px;
        color: #fff;
        background: rgba(0, 0, 0, .6);
        opacity: 0;
        overflow: hidden;
        z-index: 9999;
        -webkit-transition: all .3s ease-out;
        -moz-transition: all .3s ease-out;
        -ms-transition: all .3s ease-out;
        -o-transition: all .3s ease-out;
        transition: all .3s ease-out;
        text-align: center
    }

    .isotope-item .slide-desc table,
    .isotope-item .slide-desc td {
        width: 100%;
        height: 100%;
        border: none;
        background: 0 0
    }

    hr,
    img {
        border: 0
    }

    .isotope-item {
        z-index: 2
    }

    .isotope-hidden.isotope-item {
        z-index: 1;
        pointer-events: none
    }

    .isotope,
    .isotope .isotope-item {
        -webkit-transition-duration: .8s;
        -moz-transition-duration: .8s;
        -ms-transition-duration: .8s;
        -o-transition-duration: .8s;
        transition-duration: .8s
    }

    .isotope {
        -webkit-transition-property: height, width;
        -moz-transition-property: height, width;
        -ms-transition-property: height, width;
        -o-transition-property: height, width;
        transition-property: height, width
    }

    .isotope .isotope-item {
        -webkit-transition-property: -webkit-transform, opacity;
        -moz-transition-property: -moz-transform, opacity;
        -ms-transition-property: -ms-transform, opacity;
        -o-transition-property: -o-transform, opacity;
        transition-property: transform, opacity
    }

    .isotope .isotope-item.no-transition,
    .isotope.no-transition,
    .isotope.no-transition .isotope-item {
        -webkit-transition-duration: 0s;
        -moz-transition-duration: 0s;
        -ms-transition-duration: 0s;
        -o-transition-duration: 0s;
        transition-duration: 0s
    }

    .isotope.infinite-scrolling {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none
    }

    /*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    /*!
 * Generated using the Bootstrap Customizer (http://bootstrap-3.ru/customize.php?id=240a3929a55a4e352470)
 * Config saved to config.json and https://gist.github.com/240a3929a55a4e352470
 */
    /*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
    html {
        font-family: sans-serif;
        -webkit-text-size-adjust: 100%
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    menu,
    nav,
    section,
    summary {
        display: block
    }

    audio,
    canvas,
    progress,
    video {
        display: inline-block;
        vertical-align: baseline
    }

    audio:not([controls]) {
        display: none;
        height: 0
    }

    [hidden],
    template {
        display: none
    }

    a {
        background-color: transparent
    }

    b,
    optgroup,
    strong {
        font-weight: 700
    }

    dfn {
        font-style: italic
    }

    h1 {
        margin: .67em 0
    }

    mark {
        background: #ff0;
        color: #000
    }

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sup {
        top: -.5em
    }

    sub {
        bottom: -.25em
    }

    img {
        vertical-align: middle
    }

    svg:not(:root) {
        overflow: hidden
    }

    hr {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        height: 0
    }

    pre,
    textarea {
        overflow: auto
    }

    code,
    kbd,
    pre,
    samp {
        font-size: 1em
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        color: inherit;
        font: inherit;
        margin: 0
    }

    button {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

    button,
    html input[type=button],
    input[type=reset],
    input[type=submit] {
        -webkit-appearance: button;
        cursor: pointer
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
        border: 0;
        padding: 0
    }

    input[type=checkbox],
    input[type=radio] {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        height: auto
    }

    input[type=search]::-webkit-search-cancel-button,
    input[type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    td,
    th {
        padding: 0
    }

    /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
    @media print {

        blockquote,
        img,
        pre,
        tr {
            page-break-inside: avoid
        }

        *,
        :after,
        :before {
            background: 0 0 !important;
            color: #000 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none !important
        }

        a,
        a:visited {
            text-decoration: underline
        }

        a[href]:after {
            content: " ("attr(href) ")"
        }

        abbr[title]:after {
            content: " ("attr(title) ")"
        }

        a[href^="#"]:after,
        a[href^="javascript:"]:after {
            content: ""
        }

        blockquote,
        pre {
            border: 1px solid #999
        }

        thead {
            display: table-header-group
        }

        img {
            max-width: 100% !important
        }

        h2,
        h3,
        p {
            orphans: 3;
            widows: 3
        }

        h2,
        h3 {
            page-break-after: avoid
        }

        .navbar {
            display: none
        }

        .btn>.caret,
        .dropup>.btn>.caret {
            border-top-color: #000 !important
        }

        .label {
            border: 1px solid #000
        }

        .table {
            border-collapse: collapse !important
        }

        .table td,
        .table th {
            background-color: #fff !important
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #ddd !important
        }
    }

    .img-thumbnail,
    body {
        background-color: #f5f5f5
    }

    @font-face {
        font-family: 'Glyphicons Halflings';
        src: url(../fonts/glyphicons-halflings-regular.eot);
        src: url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'), url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'), url(../fonts/glyphicons-halflings-regular.woff) format('woff'), url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'), url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')
    }

    .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings';
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .glyphicon-asterisk:before {
        content: "\2a"
    }

    .glyphicon-plus:before {
        content: "\2b"
    }

    .glyphicon-eur:before,
    .glyphicon-euro:before {
        content: "\20ac"
    }

    .glyphicon-minus:before {
        content: "\2212"
    }

    .glyphicon-cloud:before {
        content: "\2601"
    }

    .glyphicon-envelope:before {
        content: "\2709"
    }

    .glyphicon-pencil:before {
        content: "\270f"
    }

    .glyphicon-glass:before {
        content: "\e001"
    }

    .glyphicon-music:before {
        content: "\e002"
    }

    .glyphicon-search:before {
        content: "\e003"
    }

    .glyphicon-heart:before {
        content: "\e005"
    }

    .glyphicon-star:before {
        content: "\e006"
    }

    .glyphicon-star-empty:before {
        content: "\e007"
    }

    .glyphicon-user:before {
        content: "\e008"
    }

    .glyphicon-film:before {
        content: "\e009"
    }

    .glyphicon-th-large:before {
        content: "\e010"
    }

    .glyphicon-th:before {
        content: "\e011"
    }

    .glyphicon-th-list:before {
        content: "\e012"
    }

    .glyphicon-ok:before {
        content: "\e013"
    }

    .glyphicon-remove:before {
        content: "\e014"
    }

    .glyphicon-zoom-in:before {
        content: "\e015"
    }

    .glyphicon-zoom-out:before {
        content: "\e016"
    }

    .glyphicon-off:before {
        content: "\e017"
    }

    .glyphicon-signal:before {
        content: "\e018"
    }

    .glyphicon-cog:before {
        content: "\e019"
    }

    .glyphicon-trash:before {
        content: "\e020"
    }

    .glyphicon-home:before {
        content: "\e021"
    }

    .glyphicon-file:before {
        content: "\e022"
    }

    .glyphicon-time:before {
        content: "\e023"
    }

    .glyphicon-road:before {
        content: "\e024"
    }

    .glyphicon-download-alt:before {
        content: "\e025"
    }

    .glyphicon-download:before {
        content: "\e026"
    }

    .glyphicon-upload:before {
        content: "\e027"
    }

    .glyphicon-inbox:before {
        content: "\e028"
    }

    .glyphicon-play-circle:before {
        content: "\e029"
    }

    .glyphicon-repeat:before {
        content: "\e030"
    }

    .glyphicon-refresh:before {
        content: "\e031"
    }

    .glyphicon-list-alt:before {
        content: "\e032"
    }

    .glyphicon-lock:before {
        content: "\e033"
    }

    .glyphicon-flag:before {
        content: "\e034"
    }

    .glyphicon-headphones:before {
        content: "\e035"
    }

    .glyphicon-volume-off:before {
        content: "\e036"
    }

    .glyphicon-volume-down:before {
        content: "\e037"
    }

    .glyphicon-volume-up:before {
        content: "\e038"
    }

    .glyphicon-qrcode:before {
        content: "\e039"
    }

    .glyphicon-barcode:before {
        content: "\e040"
    }

    .glyphicon-tag:before {
        content: "\e041"
    }

    .glyphicon-tags:before {
        content: "\e042"
    }

    .glyphicon-book:before {
        content: "\e043"
    }

    .glyphicon-bookmark:before {
        content: "\e044"
    }

    .glyphicon-print:before {
        content: "\e045"
    }

    .glyphicon-camera:before {
        content: "\e046"
    }

    .glyphicon-font:before {
        content: "\e047"
    }

    .glyphicon-bold:before {
        content: "\e048"
    }

    .glyphicon-italic:before {
        content: "\e049"
    }

    .glyphicon-text-height:before {
        content: "\e050"
    }

    .glyphicon-text-width:before {
        content: "\e051"
    }

    .glyphicon-align-left:before {
        content: "\e052"
    }

    .glyphicon-align-center:before {
        content: "\e053"
    }

    .glyphicon-align-right:before {
        content: "\e054"
    }

    .glyphicon-align-justify:before {
        content: "\e055"
    }

    .glyphicon-list:before {
        content: "\e056"
    }

    .glyphicon-indent-left:before {
        content: "\e057"
    }

    .glyphicon-indent-right:before {
        content: "\e058"
    }

    .glyphicon-facetime-video:before {
        content: "\e059"
    }

    .glyphicon-picture:before {
        content: "\e060"
    }

    .glyphicon-map-marker:before {
        content: "\e062"
    }

    .glyphicon-adjust:before {
        content: "\e063"
    }

    .glyphicon-tint:before {
        content: "\e064"
    }

    .glyphicon-edit:before {
        content: "\e065"
    }

    .glyphicon-share:before {
        content: "\e066"
    }

    .glyphicon-check:before {
        content: "\e067"
    }

    .glyphicon-move:before {
        content: "\e068"
    }

    .glyphicon-step-backward:before {
        content: "\e069"
    }

    .glyphicon-fast-backward:before {
        content: "\e070"
    }

    .glyphicon-backward:before {
        content: "\e071"
    }

    .glyphicon-play:before {
        content: "\e072"
    }

    .glyphicon-pause:before {
        content: "\e073"
    }

    .glyphicon-stop:before {
        content: "\e074"
    }

    .glyphicon-forward:before {
        content: "\e075"
    }

    .glyphicon-fast-forward:before {
        content: "\e076"
    }

    .glyphicon-step-forward:before {
        content: "\e077"
    }

    .glyphicon-eject:before {
        content: "\e078"
    }

    .glyphicon-chevron-left:before {
        content: "\e079"
    }

    .glyphicon-chevron-right:before {
        content: "\e080"
    }

    .glyphicon-plus-sign:before {
        content: "\e081"
    }

    .glyphicon-minus-sign:before {
        content: "\e082"
    }

    .glyphicon-remove-sign:before {
        content: "\e083"
    }

    .glyphicon-ok-sign:before {
        content: "\e084"
    }

    .glyphicon-question-sign:before {
        content: "\e085"
    }

    .glyphicon-info-sign:before {
        content: "\e086"
    }

    .glyphicon-screenshot:before {
        content: "\e087"
    }

    .glyphicon-remove-circle:before {
        content: "\e088"
    }

    .glyphicon-ok-circle:before {
        content: "\e089"
    }

    .glyphicon-ban-circle:before {
        content: "\e090"
    }

    .glyphicon-arrow-left:before {
        content: "\e091"
    }

    .glyphicon-arrow-right:before {
        content: "\e092"
    }

    .glyphicon-arrow-up:before {
        content: "\e093"
    }

    .glyphicon-arrow-down:before {
        content: "\e094"
    }

    .glyphicon-share-alt:before {
        content: "\e095"
    }

    .glyphicon-resize-full:before {
        content: "\e096"
    }

    .glyphicon-resize-small:before {
        content: "\e097"
    }

    .glyphicon-exclamation-sign:before {
        content: "\e101"
    }

    .glyphicon-gift:before {
        content: "\e102"
    }

    .glyphicon-leaf:before {
        content: "\e103"
    }

    .glyphicon-fire:before {
        content: "\e104"
    }

    .glyphicon-eye-open:before {
        content: "\e105"
    }

    .glyphicon-eye-close:before {
        content: "\e106"
    }

    .glyphicon-warning-sign:before {
        content: "\e107"
    }

    .glyphicon-plane:before {
        content: "\e108"
    }

    .glyphicon-calendar:before {
        content: "\e109"
    }

    .glyphicon-random:before {
        content: "\e110"
    }

    .glyphicon-comment:before {
        content: "\e111"
    }

    .glyphicon-magnet:before {
        content: "\e112"
    }

    .glyphicon-chevron-up:before {
        content: "\e113"
    }

    .glyphicon-chevron-down:before {
        content: "\e114"
    }

    .glyphicon-retweet:before {
        content: "\e115"
    }

    .glyphicon-shopping-cart:before {
        content: "\e116"
    }

    .glyphicon-folder-close:before {
        content: "\e117"
    }

    .glyphicon-folder-open:before {
        content: "\e118"
    }

    .glyphicon-resize-vertical:before {
        content: "\e119"
    }

    .glyphicon-resize-horizontal:before {
        content: "\e120"
    }

    .glyphicon-hdd:before {
        content: "\e121"
    }

    .glyphicon-bullhorn:before {
        content: "\e122"
    }

    .glyphicon-bell:before {
        content: "\e123"
    }

    .glyphicon-certificate:before {
        content: "\e124"
    }

    .glyphicon-thumbs-up:before {
        content: "\e125"
    }

    .glyphicon-thumbs-down:before {
        content: "\e126"
    }

    .glyphicon-hand-right:before {
        content: "\e127"
    }

    .glyphicon-hand-left:before {
        content: "\e128"
    }

    .glyphicon-hand-up:before {
        content: "\e129"
    }

    .glyphicon-hand-down:before {
        content: "\e130"
    }

    .glyphicon-circle-arrow-right:before {
        content: "\e131"
    }

    .glyphicon-circle-arrow-left:before {
        content: "\e132"
    }

    .glyphicon-circle-arrow-up:before {
        content: "\e133"
    }

    .glyphicon-circle-arrow-down:before {
        content: "\e134"
    }

    .glyphicon-globe:before {
        content: "\e135"
    }

    .glyphicon-wrench:before {
        content: "\e136"
    }

    .glyphicon-tasks:before {
        content: "\e137"
    }

    .glyphicon-filter:before {
        content: "\e138"
    }

    .glyphicon-briefcase:before {
        content: "\e139"
    }

    .glyphicon-fullscreen:before {
        content: "\e140"
    }

    .glyphicon-dashboard:before {
        content: "\e141"
    }

    .glyphicon-paperclip:before {
        content: "\e142"
    }

    .glyphicon-heart-empty:before {
        content: "\e143"
    }

    .glyphicon-link:before {
        content: "\e144"
    }

    .glyphicon-phone:before {
        content: "\e145"
    }

    .glyphicon-pushpin:before {
        content: "\e146"
    }

    .glyphicon-usd:before {
        content: "\e148"
    }

    .glyphicon-gbp:before {
        content: "\e149"
    }

    .glyphicon-sort:before {
        content: "\e150"
    }

    .glyphicon-sort-by-alphabet:before {
        content: "\e151"
    }

    .glyphicon-sort-by-alphabet-alt:before {
        content: "\e152"
    }

    .glyphicon-sort-by-order:before {
        content: "\e153"
    }

    .glyphicon-sort-by-order-alt:before {
        content: "\e154"
    }

    .glyphicon-sort-by-attributes:before {
        content: "\e155"
    }

    .glyphicon-sort-by-attributes-alt:before {
        content: "\e156"
    }

    .glyphicon-unchecked:before {
        content: "\e157"
    }

    .glyphicon-expand:before {
        content: "\e158"
    }

    .glyphicon-collapse-down:before {
        content: "\e159"
    }

    .glyphicon-collapse-up:before {
        content: "\e160"
    }

    .glyphicon-log-in:before {
        content: "\e161"
    }

    .glyphicon-flash:before {
        content: "\e162"
    }

    .glyphicon-log-out:before {
        content: "\e163"
    }

    .glyphicon-new-window:before {
        content: "\e164"
    }

    .glyphicon-record:before {
        content: "\e165"
    }

    .glyphicon-save:before {
        content: "\e166"
    }

    .glyphicon-open:before {
        content: "\e167"
    }

    .glyphicon-saved:before {
        content: "\e168"
    }

    .glyphicon-import:before {
        content: "\e169"
    }

    .glyphicon-export:before {
        content: "\e170"
    }

    .glyphicon-send:before {
        content: "\e171"
    }

    .glyphicon-floppy-disk:before {
        content: "\e172"
    }

    .glyphicon-floppy-saved:before {
        content: "\e173"
    }

    .glyphicon-floppy-remove:before {
        content: "\e174"
    }

    .glyphicon-floppy-save:before {
        content: "\e175"
    }

    .glyphicon-floppy-open:before {
        content: "\e176"
    }

    .glyphicon-credit-card:before {
        content: "\e177"
    }

    .glyphicon-transfer:before {
        content: "\e178"
    }

    .glyphicon-cutlery:before {
        content: "\e179"
    }

    .glyphicon-header:before {
        content: "\e180"
    }

    .glyphicon-compressed:before {
        content: "\e181"
    }

    .glyphicon-earphone:before {
        content: "\e182"
    }

    .glyphicon-phone-alt:before {
        content: "\e183"
    }

    .glyphicon-tower:before {
        content: "\e184"
    }

    .glyphicon-stats:before {
        content: "\e185"
    }

    .glyphicon-sd-video:before {
        content: "\e186"
    }

    .glyphicon-hd-video:before {
        content: "\e187"
    }

    .glyphicon-subtitles:before {
        content: "\e188"
    }

    .glyphicon-sound-stereo:before {
        content: "\e189"
    }

    .glyphicon-sound-dolby:before {
        content: "\e190"
    }

    .glyphicon-sound-5-1:before {
        content: "\e191"
    }

    .glyphicon-sound-6-1:before {
        content: "\e192"
    }

    .glyphicon-sound-7-1:before {
        content: "\e193"
    }

    .glyphicon-copyright-mark:before {
        content: "\e194"
    }

    .glyphicon-registration-mark:before {
        content: "\e195"
    }

    .glyphicon-cloud-download:before {
        content: "\e197"
    }

    .glyphicon-cloud-upload:before {
        content: "\e198"
    }

    .glyphicon-tree-conifer:before {
        content: "\e199"
    }

    .glyphicon-tree-deciduous:before {
        content: "\e200"
    }

    .glyphicon-cd:before {
        content: "\e201"
    }

    .glyphicon-save-file:before {
        content: "\e202"
    }

    .glyphicon-open-file:before {
        content: "\e203"
    }

    .glyphicon-level-up:before {
        content: "\e204"
    }

    .glyphicon-copy:before {
        content: "\e205"
    }

    .glyphicon-paste:before {
        content: "\e206"
    }

    .glyphicon-alert:before {
        content: "\e209"
    }

    .glyphicon-equalizer:before {
        content: "\e210"
    }

    .glyphicon-king:before {
        content: "\e211"
    }

    .glyphicon-queen:before {
        content: "\e212"
    }

    .glyphicon-pawn:before {
        content: "\e213"
    }

    .glyphicon-bishop:before {
        content: "\e214"
    }

    .glyphicon-knight:before {
        content: "\e215"
    }

    .glyphicon-baby-formula:before {
        content: "\e216"
    }

    .glyphicon-tent:before {
        content: "\26fa"
    }

    .glyphicon-blackboard:before {
        content: "\e218"
    }

    .glyphicon-bed:before {
        content: "\e219"
    }

    .glyphicon-apple:before {
        content: "\f8ff"
    }

    .glyphicon-erase:before {
        content: "\e221"
    }

    .glyphicon-hourglass:before {
        content: "\231b"
    }

    .glyphicon-lamp:before {
        content: "\e223"
    }

    .glyphicon-duplicate:before {
        content: "\e224"
    }

    .glyphicon-piggy-bank:before {
        content: "\e225"
    }

    .glyphicon-scissors:before {
        content: "\e226"
    }

    .glyphicon-bitcoin:before,
    .glyphicon-btc:before,
    .glyphicon-xbt:before {
        content: "\e227"
    }

    .glyphicon-jpy:before,
    .glyphicon-yen:before {
        content: "\00a5"
    }

    .glyphicon-rub:before,
    .glyphicon-ruble:before {
        content: "\20bd"
    }

    .glyphicon-scale:before {
        content: "\e230"
    }

    .glyphicon-ice-lolly:before {
        content: "\e231"
    }

    .glyphicon-ice-lolly-tasted:before {
        content: "\e232"
    }

    .glyphicon-education:before {
        content: "\e233"
    }

    .glyphicon-option-horizontal:before {
        content: "\e234"
    }

    .glyphicon-option-vertical:before {
        content: "\e235"
    }

    .glyphicon-menu-hamburger:before {
        content: "\e236"
    }

    .glyphicon-modal-window:before {
        content: "\e237"
    }

    .glyphicon-oil:before {
        content: "\e238"
    }

    .glyphicon-grain:before {
        content: "\e239"
    }

    .glyphicon-sunglasses:before {
        content: "\e240"
    }

    .glyphicon-text-size:before {
        content: "\e241"
    }

    .glyphicon-text-color:before {
        content: "\e242"
    }

    .glyphicon-text-background:before {
        content: "\e243"
    }

    .glyphicon-object-align-top:before {
        content: "\e244"
    }

    .glyphicon-object-align-bottom:before {
        content: "\e245"
    }

    .glyphicon-object-align-horizontal:before {
        content: "\e246"
    }

    .glyphicon-object-align-left:before {
        content: "\e247"
    }

    .glyphicon-object-align-vertical:before {
        content: "\e248"
    }

    .glyphicon-object-align-right:before {
        content: "\e249"
    }

    .glyphicon-triangle-right:before {
        content: "\e250"
    }

    .glyphicon-triangle-left:before {
        content: "\e251"
    }

    .glyphicon-triangle-bottom:before {
        content: "\e252"
    }

    .glyphicon-triangle-top:before {
        content: "\e253"
    }

    .glyphicon-console:before {
        content: "\e254"
    }

    .glyphicon-superscript:before {
        content: "\e255"
    }

    .glyphicon-subscript:before {
        content: "\e256"
    }

    .glyphicon-menu-left:before {
        content: "\e257"
    }

    .glyphicon-menu-right:before {
        content: "\e258"
    }

    .glyphicon-menu-down:before {
        content: "\e259"
    }

    .glyphicon-menu-up:before {
        content: "\e260"
    }

    *,
    :after,
    :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    html {
        font-size: 10px
    }

    body {
        margin: 0;
        font-family: Ubuntu, Helvetica, Arial, sans-serif;
        font-size: 13px;
        line-height: 1.42857143;
        color: #777
    }

    button,
    input,
    select,
    textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    a {
        color: #dc2d13;
        text-decoration: none
    }

    a:focus,
    a:hover {
        color: #961f0d;
        text-decoration: underline
    }

    a:focus {
        outline: dotted thin;
        outline: -webkit-focus-ring-color auto 5px;
        outline-offset: -2px
    }

    figure {
        margin: 0
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img,
    .img-responsive,
    .thumbnail a>img,
    .thumbnail>img {
        display: block;
        max-width: 100%;
        height: auto
    }

    .img-rounded {
        border-radius: 6px
    }

    .img-thumbnail {
        padding: 4px;
        line-height: 1.42857143;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        display: inline-block;
        max-width: 100%;
        height: auto
    }

    .img-circle {
        border-radius: 50%
    }

    hr {
        margin-top: 18px;
        margin-bottom: 18px;
        border-top: 1px solid #eee
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0
    }

    .sr-only-focusable:active,
    .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        clip: auto
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit
    }

    .h1 .small,
    .h1 small,
    .h2 .small,
    .h2 small,
    .h3 .small,
    .h3 small,
    .h4 .small,
    .h4 small,
    .h5 .small,
    .h5 small,
    .h6 .small,
    .h6 small,
    h1 .small,
    h1 small,
    h2 .small,
    h2 small,
    h3 .small,
    h3 small,
    h4 .small,
    h4 small,
    h5 .small,
    h5 small,
    h6 .small,
    h6 small {
        font-weight: 400;
        line-height: 1;
        color: #999
    }

    .h1,
    .h2,
    .h3,
    h1,
    h2,
    h3 {
        margin-top: 18px;
        margin-bottom: 9px
    }

    .h1 .small,
    .h1 small,
    .h2 .small,
    .h2 small,
    .h3 .small,
    .h3 small,
    h1 .small,
    h1 small,
    h2 .small,
    h2 small,
    h3 .small,
    h3 small {
        font-size: 65%
    }

    .h4,
    .h5,
    .h6,
    h4,
    h5,
    h6 {
        margin-top: 9px;
        margin-bottom: 9px
    }

    .h4 .small,
    .h4 small,
    .h5 .small,
    .h5 small,
    .h6 .small,
    .h6 small,
    h4 .small,
    h4 small,
    h5 .small,
    h5 small,
    h6 .small,
    h6 small {
        font-size: 75%
    }

    .h1,
    h1 {
        font-size: 33px
    }

    .h2,
    h2 {
        font-size: 27px
    }

    .h3,
    h3 {
        font-size: 23px
    }

    .h4,
    h4 {
        font-size: 17px
    }

    .h5,
    h5 {
        font-size: 13px
    }

    .h6,
    h6 {
        font-size: 12px
    }

    p {
        margin: 0 0 25px
    }

    .lead {
        margin-bottom: 18px;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.4
    }

    @media (min-width:768px) {
        .lead {
            font-size: 19.5px
        }
    }

    .small,
    small {
        font-size: 92%
    }

    .mark,
    mark {
        background-color: #fcf8e3;
        padding: .2em
    }

    .text-right {
        text-align: right
    }

    .text-center {
        text-align: center
    }

    .text-justify {
        text-align: justify
    }

    .text-lowercase {
        text-transform: lowercase
    }

    .text-uppercase {
        text-transform: uppercase
    }

    .text-capitalize {
        text-transform: capitalize
    }

    .breadcrumb>li,
    .initialism,
    .nav-tabs>li>a,
    .panel-title {
        text-transform: uppercase
    }

    .text-muted {
        color: #999
    }

    .text-primary {
        color: #dc2d13
    }

    a.text-primary:focus,
    a.text-primary:hover {
        color: #ad230f
    }

    .text-success {
        color: #3c763d
    }

    a.text-success:focus,
    a.text-success:hover {
        color: #2b542c
    }

    .text-info {
        color: #31708f
    }

    a.text-info:focus,
    a.text-info:hover {
        color: #245269
    }

    .text-warning {
        color: #8a6d3b
    }

    a.text-warning:focus,
    a.text-warning:hover {
        color: #66512c
    }

    .text-danger {
        color: #a94442
    }

    a.text-danger:focus,
    a.text-danger:hover {
        color: #843534
    }

    .bg-primary {
        color: #fff;
        background-color: #dc2d13
    }

    a.bg-primary:focus,
    a.bg-primary:hover {
        background-color: #ad230f
    }

    .bg-success {
        background-color: #dff0d8
    }

    a.bg-success:focus,
    a.bg-success:hover {
        background-color: #c1e2b3
    }

    .bg-info {
        background-color: #d9edf7
    }

    a.bg-info:focus,
    a.bg-info:hover {
        background-color: #afd9ee
    }

    .bg-warning {
        background-color: #fcf8e3
    }

    a.bg-warning:focus,
    a.bg-warning:hover {
        background-color: #f7ecb5
    }

    .bg-danger {
        background-color: #f2dede
    }

    a.bg-danger:focus,
    a.bg-danger:hover {
        background-color: #e4b9b9
    }

    pre code,
    table {
        background-color: transparent
    }

    .page-header {
        padding-bottom: 8px;
        margin: 36px 0 18px;
        border-bottom: 1px solid #eee
    }

    dl,
    ol,
    ul {
        margin-top: 0
    }

    blockquote ol:last-child,
    blockquote p:last-child,
    blockquote ul:last-child,
    ol ol,
    ol ul,
    ul ol,
    ul ul {
        margin-bottom: 0
    }

    address,
    dl {
        margin-bottom: 18px
    }

    ol,
    ul {
        margin-bottom: 9px
    }

    .list-inline,
    .list-unstyled {
        padding-left: 0
    }

    .list-inline>li {
        display: inline-block;
        padding-left: 5px;
        padding-right: 5px
    }

    dd,
    dt {
        line-height: 1.42857143
    }

    dt {
        font-weight: 700
    }

    dd {
        margin-left: 0
    }

    @media (min-width:768px) {
        .dl-horizontal dt {
            float: left;
            width: 160px;
            clear: left;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .dl-horizontal dd {
            margin-left: 180px
        }

        .container {
            width: 750px
        }
    }

    abbr[data-original-title],
    abbr[title] {
        cursor: help;
        border-bottom: 1px dotted #999
    }

    .initialism {
        font-size: 90%
    }

    blockquote {
        position: relative;
        margin: 0 0 30px;
        font: italic 400 16px/26px 'Droid Serif';
        color: #222;
        padding: 15px 10px 9px 68px
    }

    blockquote:before {
        content: '\f10d';
        font: normal normal normal 14px/1 FontAwesome;
        position: absolute;
        left: 20px;
        top: 23px;
        font-size: 24px
    }

    kbd kbd,
    label {
        font-weight: 700
    }

    blockquote .small,
    blockquote footer,
    blockquote small {
        display: block;
        font-size: 80%;
        line-height: 1.42857143;
        color: #999
    }

    legend,
    pre {
        display: block;
        color: #333
    }

    blockquote .small:before,
    blockquote footer:before,
    blockquote small:before {
        content: '\2014 \00A0'
    }

    .blockquote-reverse,
    blockquote.pull-right {
        padding-right: 15px;
        padding-left: 0;
        border-right: 5px solid #eee;
        border-left: 0;
        text-align: right
    }

    code,
    kbd {
        padding: 2px 4px;
        font-size: 90%
    }

    caption,
    th {
        text-align: left
    }

    .blockquote-reverse .small:before,
    .blockquote-reverse footer:before,
    .blockquote-reverse small:before,
    blockquote.pull-right .small:before,
    blockquote.pull-right footer:before,
    blockquote.pull-right small:before {
        content: ''
    }

    .blockquote-reverse .small:after,
    .blockquote-reverse footer:after,
    .blockquote-reverse small:after,
    blockquote.pull-right .small:after,
    blockquote.pull-right footer:after,
    blockquote.pull-right small:after {
        content: '\00A0 \2014'
    }

    address {
        font-style: normal;
        line-height: 1.42857143
    }

    code,
    kbd,
    pre,
    samp {
        font-family: Menlo, Monaco, Consolas, "Courier New", monospace
    }

    code {
        color: #c7254e;
        background-color: #f9f2f4;
        border-radius: 4px
    }

    kbd {
        color: #fff;
        background-color: #333;
        border-radius: 3px;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
    }

    .table .table,
    pre {
        background-color: #f5f5f5
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    pre {
        padding: 8.5px;
        margin: 0 0 9px;
        font-size: 12px;
        line-height: 1.42857143;
        word-break: break-all;
        word-wrap: break-word;
        border: 1px solid #ccc;
        border-radius: 4px
    }

    pre code {
        padding: 0;
        font-size: inherit;
        color: inherit;
        white-space: pre-wrap;
        border-radius: 0
    }

    .container,
    .container-fluid {
        margin-right: auto;
        margin-left: auto;
        padding-left: 15px;
        padding-right: 15px
    }

    .pre-scrollable {
        overflow-y: scroll
    }

    @media (min-width:992px) {
        .container {
            width: 970px
        }
    }

    @media (min-width:1200px) {
        .container {
            width: 1170px
        }
    }

    .row {
        margin-left: -15px;
        margin-right: -15px
    }

    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
        position: relative;
        min-height: 1px;
        padding-left: 15px;
        padding-right: 15px
    }

    .col-xs-12 {
        width: 100%
    }

    .col-xs-11 {
        width: 91.66666667%
    }

    .col-xs-10 {
        width: 83.33333333%
    }

    .col-xs-9 {
        width: 75%
    }

    .col-xs-8 {
        width: 66.66666667%
    }

    .col-xs-7 {
        width: 58.33333333%
    }

    .col-xs-6 {
        width: 50%
    }

    .col-xs-5 {
        width: 41.66666667%
    }

    .col-xs-4 {
        width: 33.33333333%
    }

    .col-xs-3 {
        width: 25%
    }

    .col-xs-2 {
        width: 16.66666667%
    }

    .col-xs-1 {
        width: 8.33333333%
    }

    .col-xs-pull-12 {
        right: 100%
    }

    .col-xs-pull-11 {
        right: 91.66666667%
    }

    .col-xs-pull-10 {
        right: 83.33333333%
    }

    .col-xs-pull-9 {
        right: 75%
    }

    .col-xs-pull-8 {
        right: 66.66666667%
    }

    .col-xs-pull-7 {
        right: 58.33333333%
    }

    .col-xs-pull-6 {
        right: 50%
    }

    .col-xs-pull-5 {
        right: 41.66666667%
    }

    .col-xs-pull-4 {
        right: 33.33333333%
    }

    .col-xs-pull-3 {
        right: 25%
    }

    .col-xs-pull-2 {
        right: 16.66666667%
    }

    .col-xs-pull-1 {
        right: 8.33333333%
    }

    .col-xs-pull-0 {
        right: auto
    }

    .col-xs-push-12 {
        left: 100%
    }

    .col-xs-push-11 {
        left: 91.66666667%
    }

    .col-xs-push-10 {
        left: 83.33333333%
    }

    .col-xs-push-9 {
        left: 75%
    }

    .col-xs-push-8 {
        left: 66.66666667%
    }

    .col-xs-push-7 {
        left: 58.33333333%
    }

    .col-xs-push-6 {
        left: 50%
    }

    .col-xs-push-5 {
        left: 41.66666667%
    }

    .col-xs-push-4 {
        left: 33.33333333%
    }

    .col-xs-push-3 {
        left: 25%
    }

    .col-xs-push-2 {
        left: 16.66666667%
    }

    .col-xs-push-1 {
        left: 8.33333333%
    }

    .col-xs-push-0 {
        left: auto
    }

    .col-xs-offset-12 {
        margin-left: 100%
    }

    .col-xs-offset-11 {
        margin-left: 91.66666667%
    }

    .col-xs-offset-10 {
        margin-left: 83.33333333%
    }

    .col-xs-offset-9 {
        margin-left: 75%
    }

    .col-xs-offset-8 {
        margin-left: 66.66666667%
    }

    .col-xs-offset-7 {
        margin-left: 58.33333333%
    }

    .col-xs-offset-6 {
        margin-left: 50%
    }

    .col-xs-offset-5 {
        margin-left: 41.66666667%
    }

    .col-xs-offset-4 {
        margin-left: 33.33333333%
    }

    .col-xs-offset-3 {
        margin-left: 25%
    }

    .col-xs-offset-2 {
        margin-left: 16.66666667%
    }

    .col-xs-offset-1 {
        margin-left: 8.33333333%
    }

    .col-xs-offset-0 {
        margin-left: 0
    }

    @media (min-width:768px) {

        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9 {
            float: left
        }

        .col-sm-12 {
            width: 100%
        }

        .col-sm-11 {
            width: 91.66666667%
        }

        .col-sm-10 {
            width: 83.33333333%
        }

        .col-sm-9 {
            width: 75%
        }

        .col-sm-8 {
            width: 66.66666667%
        }

        .col-sm-7 {
            width: 58.33333333%
        }

        .col-sm-6 {
            width: 50%
        }

        .col-sm-5 {
            width: 41.66666667%
        }

        .col-sm-4 {
            width: 33.33333333%
        }

        .col-sm-3 {
            width: 25%
        }

        .col-sm-2 {
            width: 16.66666667%
        }

        .col-sm-1 {
            width: 8.33333333%
        }

        .col-sm-pull-12 {
            right: 100%
        }

        .col-sm-pull-11 {
            right: 91.66666667%
        }

        .col-sm-pull-10 {
            right: 83.33333333%
        }

        .col-sm-pull-9 {
            right: 75%
        }

        .col-sm-pull-8 {
            right: 66.66666667%
        }

        .col-sm-pull-7 {
            right: 58.33333333%
        }

        .col-sm-pull-6 {
            right: 50%
        }

        .col-sm-pull-5 {
            right: 41.66666667%
        }

        .col-sm-pull-4 {
            right: 33.33333333%
        }

        .col-sm-pull-3 {
            right: 25%
        }

        .col-sm-pull-2 {
            right: 16.66666667%
        }

        .col-sm-pull-1 {
            right: 8.33333333%
        }

        .col-sm-pull-0 {
            right: auto
        }

        .col-sm-push-12 {
            left: 100%
        }

        .col-sm-push-11 {
            left: 91.66666667%
        }

        .col-sm-push-10 {
            left: 83.33333333%
        }

        .col-sm-push-9 {
            left: 75%
        }

        .col-sm-push-8 {
            left: 66.66666667%
        }

        .col-sm-push-7 {
            left: 58.33333333%
        }

        .col-sm-push-6 {
            left: 50%
        }

        .col-sm-push-5 {
            left: 41.66666667%
        }

        .col-sm-push-4 {
            left: 33.33333333%
        }

        .col-sm-push-3 {
            left: 25%
        }

        .col-sm-push-2 {
            left: 16.66666667%
        }

        .col-sm-push-1 {
            left: 8.33333333%
        }

        .col-sm-push-0 {
            left: auto
        }

        .col-sm-offset-12 {
            margin-left: 100%
        }

        .col-sm-offset-11 {
            margin-left: 91.66666667%
        }

        .col-sm-offset-10 {
            margin-left: 83.33333333%
        }

        .col-sm-offset-9 {
            margin-left: 75%
        }

        .col-sm-offset-8 {
            margin-left: 66.66666667%
        }

        .col-sm-offset-7 {
            margin-left: 58.33333333%
        }

        .col-sm-offset-6 {
            margin-left: 50%
        }

        .col-sm-offset-5 {
            margin-left: 41.66666667%
        }

        .col-sm-offset-4 {
            margin-left: 33.33333333%
        }

        .col-sm-offset-3 {
            margin-left: 25%
        }

        .col-sm-offset-2 {
            margin-left: 16.66666667%
        }

        .col-sm-offset-1 {
            margin-left: 8.33333333%
        }

        .col-sm-offset-0 {
            margin-left: 0
        }
    }

    @media (min-width:992px) {

        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9 {
            float: left
        }

        .col-md-12 {
            width: 100%
        }

        .col-md-11 {
            width: 91.66666667%
        }

        .col-md-10 {
            width: 83.33333333%
        }

        .col-md-9 {
            width: 75%
        }

        .col-md-8 {
            width: 66.66666667%
        }

        .col-md-7 {
            width: 58.33333333%
        }

        .col-md-6 {
            width: 50%
        }

        .col-md-5 {
            width: 41.66666667%
        }

        .col-md-4 {
            width: 33.33333333%
        }

        .col-md-3 {
            width: 25%
        }

        .col-md-2 {
            width: 16.66666667%
        }

        .col-md-1 {
            width: 8.33333333%
        }

        .col-md-pull-12 {
            right: 100%
        }

        .col-md-pull-11 {
            right: 91.66666667%
        }

        .col-md-pull-10 {
            right: 83.33333333%
        }

        .col-md-pull-9 {
            right: 75%
        }

        .col-md-pull-8 {
            right: 66.66666667%
        }

        .col-md-pull-7 {
            right: 58.33333333%
        }

        .col-md-pull-6 {
            right: 50%
        }

        .col-md-pull-5 {
            right: 41.66666667%
        }

        .col-md-pull-4 {
            right: 33.33333333%
        }

        .col-md-pull-3 {
            right: 25%
        }

        .col-md-pull-2 {
            right: 16.66666667%
        }

        .col-md-pull-1 {
            right: 8.33333333%
        }

        .col-md-pull-0 {
            right: auto
        }

        .col-md-push-12 {
            left: 100%
        }

        .col-md-push-11 {
            left: 91.66666667%
        }

        .col-md-push-10 {
            left: 83.33333333%
        }

        .col-md-push-9 {
            left: 75%
        }

        .col-md-push-8 {
            left: 66.66666667%
        }

        .col-md-push-7 {
            left: 58.33333333%
        }

        .col-md-push-6 {
            left: 50%
        }

        .col-md-push-5 {
            left: 41.66666667%
        }

        .col-md-push-4 {
            left: 33.33333333%
        }

        .col-md-push-3 {
            left: 25%
        }

        .col-md-push-2 {
            left: 16.66666667%
        }

        .col-md-push-1 {
            left: 8.33333333%
        }

        .col-md-push-0 {
            left: auto
        }

        .col-md-offset-12 {
            margin-left: 100%
        }

        .col-md-offset-11 {
            margin-left: 91.66666667%
        }

        .col-md-offset-10 {
            margin-left: 83.33333333%
        }

        .col-md-offset-9 {
            margin-left: 75%
        }

        .col-md-offset-8 {
            margin-left: 66.66666667%
        }

        .col-md-offset-7 {
            margin-left: 58.33333333%
        }

        .col-md-offset-6 {
            margin-left: 50%
        }

        .col-md-offset-5 {
            margin-left: 41.66666667%
        }

        .col-md-offset-4 {
            margin-left: 33.33333333%
        }

        .col-md-offset-3 {
            margin-left: 25%
        }

        .col-md-offset-2 {
            margin-left: 16.66666667%
        }

        .col-md-offset-1 {
            margin-left: 8.33333333%
        }

        .col-md-offset-0 {
            margin-left: 0
        }
    }

    @media (min-width:1200px) {

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9 {
            float: left
        }

        .col-lg-12 {
            width: 100%
        }

        .col-lg-11 {
            width: 91.66666667%
        }

        .col-lg-10 {
            width: 83.33333333%
        }

        .col-lg-9 {
            width: 75%
        }

        .col-lg-8 {
            width: 66.66666667%
        }

        .col-lg-7 {
            width: 58.33333333%
        }

        .col-lg-6 {
            width: 50%
        }

        .col-lg-5 {
            width: 41.66666667%
        }

        .col-lg-4 {
            width: 33.33333333%
        }

        .col-lg-3 {
            width: 25%
        }

        .col-lg-2 {
            width: 16.66666667%
        }

        .col-lg-1 {
            width: 8.33333333%
        }

        .col-lg-pull-12 {
            right: 100%
        }

        .col-lg-pull-11 {
            right: 91.66666667%
        }

        .col-lg-pull-10 {
            right: 83.33333333%
        }

        .col-lg-pull-9 {
            right: 75%
        }

        .col-lg-pull-8 {
            right: 66.66666667%
        }

        .col-lg-pull-7 {
            right: 58.33333333%
        }

        .col-lg-pull-6 {
            right: 50%
        }

        .col-lg-pull-5 {
            right: 41.66666667%
        }

        .col-lg-pull-4 {
            right: 33.33333333%
        }

        .col-lg-pull-3 {
            right: 25%
        }

        .col-lg-pull-2 {
            right: 16.66666667%
        }

        .col-lg-pull-1 {
            right: 8.33333333%
        }

        .col-lg-pull-0 {
            right: auto
        }

        .col-lg-push-12 {
            left: 100%
        }

        .col-lg-push-11 {
            left: 91.66666667%
        }

        .col-lg-push-10 {
            left: 83.33333333%
        }

        .col-lg-push-9 {
            left: 75%
        }

        .col-lg-push-8 {
            left: 66.66666667%
        }

        .col-lg-push-7 {
            left: 58.33333333%
        }

        .col-lg-push-6 {
            left: 50%
        }

        .col-lg-push-5 {
            left: 41.66666667%
        }

        .col-lg-push-4 {
            left: 33.33333333%
        }

        .col-lg-push-3 {
            left: 25%
        }

        .col-lg-push-2 {
            left: 16.66666667%
        }

        .col-lg-push-1 {
            left: 8.33333333%
        }

        .col-lg-push-0 {
            left: auto
        }

        .col-lg-offset-12 {
            margin-left: 100%
        }

        .col-lg-offset-11 {
            margin-left: 91.66666667%
        }

        .col-lg-offset-10 {
            margin-left: 83.33333333%
        }

        .col-lg-offset-9 {
            margin-left: 75%
        }

        .col-lg-offset-8 {
            margin-left: 66.66666667%
        }

        .col-lg-offset-7 {
            margin-left: 58.33333333%
        }

        .col-lg-offset-6 {
            margin-left: 50%
        }

        .col-lg-offset-5 {
            margin-left: 41.66666667%
        }

        .col-lg-offset-4 {
            margin-left: 33.33333333%
        }

        .col-lg-offset-3 {
            margin-left: 25%
        }

        .col-lg-offset-2 {
            margin-left: 16.66666667%
        }

        .col-lg-offset-1 {
            margin-left: 8.33333333%
        }

        .col-lg-offset-0 {
            margin-left: 0
        }
    }

    .table,
    input[type=range],
    legend {
        width: 100%
    }

    caption {
        padding-top: 8px;
        padding-bottom: 8px;
        color: #999
    }

    .table {
        max-width: 100%;
        margin-bottom: 18px
    }

    .table>tbody>tr>td,
    .table>tbody>tr>th,
    .table>tfoot>tr>td,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>thead>tr>th {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #ddd
    }

    .table>thead>tr>th {
        vertical-align: bottom;
        border-bottom: 2px solid #ddd
    }

    .table>caption+thead>tr:first-child>td,
    .table>caption+thead>tr:first-child>th,
    .table>colgroup+thead>tr:first-child>td,
    .table>colgroup+thead>tr:first-child>th,
    .table>thead:first-child>tr:first-child>td,
    .table>thead:first-child>tr:first-child>th {
        border-top: 0
    }

    .table>tbody+tbody {
        border-top: 2px solid #ddd
    }

    .table-condensed>tbody>tr>td,
    .table-condensed>tbody>tr>th,
    .table-condensed>tfoot>tr>td,
    .table-condensed>tfoot>tr>th,
    .table-condensed>thead>tr>td,
    .table-condensed>thead>tr>th {
        padding: 5px
    }

    .table-bordered,
    .table-bordered>tbody>tr>td,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>td,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
        border: 1px solid #ddd
    }

    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
        border-bottom-width: 2px
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
        background-color: #f9f9f9
    }

    .table-hover>tbody>tr:hover,
    .table>tbody>tr.active>td,
    .table>tbody>tr.active>th,
    .table>tbody>tr>td.active,
    .table>tbody>tr>th.active,
    .table>tfoot>tr.active>td,
    .table>tfoot>tr.active>th,
    .table>tfoot>tr>td.active,
    .table>tfoot>tr>th.active,
    .table>thead>tr.active>td,
    .table>thead>tr.active>th,
    .table>thead>tr>td.active,
    .table>thead>tr>th.active {
        background-color: #f5f5f5
    }

    table col[class*=col-] {
        position: static;
        float: none;
        display: table-column
    }

    table td[class*=col-],
    table th[class*=col-] {
        position: static;
        float: none;
        display: table-cell
    }

    .btn-group>.btn-group,
    .btn-toolbar .btn,
    .btn-toolbar .btn-group,
    .btn-toolbar .input-group,
    .dropdown-menu {
        float: left
    }

    .table-hover>tbody>tr.active:hover>td,
    .table-hover>tbody>tr.active:hover>th,
    .table-hover>tbody>tr:hover>.active,
    .table-hover>tbody>tr>td.active:hover,
    .table-hover>tbody>tr>th.active:hover {
        background-color: #e8e8e8
    }

    .table>tbody>tr.success>td,
    .table>tbody>tr.success>th,
    .table>tbody>tr>td.success,
    .table>tbody>tr>th.success,
    .table>tfoot>tr.success>td,
    .table>tfoot>tr.success>th,
    .table>tfoot>tr>td.success,
    .table>tfoot>tr>th.success,
    .table>thead>tr.success>td,
    .table>thead>tr.success>th,
    .table>thead>tr>td.success,
    .table>thead>tr>th.success {
        background-color: #dff0d8
    }

    .table-hover>tbody>tr.success:hover>td,
    .table-hover>tbody>tr.success:hover>th,
    .table-hover>tbody>tr:hover>.success,
    .table-hover>tbody>tr>td.success:hover,
    .table-hover>tbody>tr>th.success:hover {
        background-color: #d0e9c6
    }

    .table>tbody>tr.info>td,
    .table>tbody>tr.info>th,
    .table>tbody>tr>td.info,
    .table>tbody>tr>th.info,
    .table>tfoot>tr.info>td,
    .table>tfoot>tr.info>th,
    .table>tfoot>tr>td.info,
    .table>tfoot>tr>th.info,
    .table>thead>tr.info>td,
    .table>thead>tr.info>th,
    .table>thead>tr>td.info,
    .table>thead>tr>th.info {
        background-color: #d9edf7
    }

    .table-hover>tbody>tr.info:hover>td,
    .table-hover>tbody>tr.info:hover>th,
    .table-hover>tbody>tr:hover>.info,
    .table-hover>tbody>tr>td.info:hover,
    .table-hover>tbody>tr>th.info:hover {
        background-color: #c4e3f3
    }

    .table>tbody>tr.warning>td,
    .table>tbody>tr.warning>th,
    .table>tbody>tr>td.warning,
    .table>tbody>tr>th.warning,
    .table>tfoot>tr.warning>td,
    .table>tfoot>tr.warning>th,
    .table>tfoot>tr>td.warning,
    .table>tfoot>tr>th.warning,
    .table>thead>tr.warning>td,
    .table>thead>tr.warning>th,
    .table>thead>tr>td.warning,
    .table>thead>tr>th.warning {
        background-color: #fcf8e3
    }

    .table-hover>tbody>tr.warning:hover>td,
    .table-hover>tbody>tr.warning:hover>th,
    .table-hover>tbody>tr:hover>.warning,
    .table-hover>tbody>tr>td.warning:hover,
    .table-hover>tbody>tr>th.warning:hover {
        background-color: #faf2cc
    }

    .table>tbody>tr.danger>td,
    .table>tbody>tr.danger>th,
    .table>tbody>tr>td.danger,
    .table>tbody>tr>th.danger,
    .table>tfoot>tr.danger>td,
    .table>tfoot>tr.danger>th,
    .table>tfoot>tr>td.danger,
    .table>tfoot>tr>th.danger,
    .table>thead>tr.danger>td,
    .table>thead>tr.danger>th,
    .table>thead>tr>td.danger,
    .table>thead>tr>th.danger {
        background-color: #f2dede
    }

    .table-hover>tbody>tr.danger:hover>td,
    .table-hover>tbody>tr.danger:hover>th,
    .table-hover>tbody>tr:hover>.danger,
    .table-hover>tbody>tr>td.danger:hover,
    .table-hover>tbody>tr>th.danger:hover {
        background-color: #ebcccc
    }

    .table-responsive {
        overflow-x: auto;
        min-height: .01%
    }

    @media screen and (max-width:767px) {
        .table-responsive {
            width: 100%;
            margin-bottom: 13.5px;
            overflow-y: hidden;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            border: 1px solid #ddd
        }

        .table-responsive>.table {
            margin-bottom: 0
        }

        .table-responsive>.table>tbody>tr>td,
        .table-responsive>.table>tbody>tr>th,
        .table-responsive>.table>tfoot>tr>td,
        .table-responsive>.table>tfoot>tr>th,
        .table-responsive>.table>thead>tr>td,
        .table-responsive>.table>thead>tr>th {
            white-space: nowrap
        }

        .table-responsive>.table-bordered {
            border: 0
        }

        .table-responsive>.table-bordered>tbody>tr>td:first-child,
        .table-responsive>.table-bordered>tbody>tr>th:first-child,
        .table-responsive>.table-bordered>tfoot>tr>td:first-child,
        .table-responsive>.table-bordered>tfoot>tr>th:first-child,
        .table-responsive>.table-bordered>thead>tr>td:first-child,
        .table-responsive>.table-bordered>thead>tr>th:first-child {
            border-left: 0
        }

        .table-responsive>.table-bordered>tbody>tr>td:last-child,
        .table-responsive>.table-bordered>tbody>tr>th:last-child,
        .table-responsive>.table-bordered>tfoot>tr>td:last-child,
        .table-responsive>.table-bordered>tfoot>tr>th:last-child,
        .table-responsive>.table-bordered>thead>tr>td:last-child,
        .table-responsive>.table-bordered>thead>tr>th:last-child {
            border-right: 0
        }

        .table-responsive>.table-bordered>tbody>tr:last-child>td,
        .table-responsive>.table-bordered>tbody>tr:last-child>th,
        .table-responsive>.table-bordered>tfoot>tr:last-child>td,
        .table-responsive>.table-bordered>tfoot>tr:last-child>th {
            border-bottom: 0
        }
    }

    fieldset,
    legend {
        padding: 0;
        border: 0
    }

    fieldset {
        margin: 0;
        min-width: 0
    }

    legend {
        margin-bottom: 18px;
        font-size: 19.5px;
        line-height: inherit;
        border-bottom: 1px solid #e5e5e5
    }

    .checkbox label,
    .checkbox-inline,
    .radio label,
    .radio-inline {
        padding-left: 20px;
        font-weight: 400;
        cursor: pointer;
        margin-bottom: 0
    }

    .checkbox-inline.disabled,
    .checkbox.disabled label,
    .form-control[disabled],
    .radio-inline.disabled,
    .radio.disabled label,
    fieldset[disabled] .checkbox label,
    fieldset[disabled] .checkbox-inline,
    fieldset[disabled] .form-control,
    fieldset[disabled] .radio label,
    fieldset[disabled] .radio-inline,
    fieldset[disabled] input[type=checkbox],
    fieldset[disabled] input[type=radio],
    input[type=checkbox].disabled,
    input[type=checkbox][disabled],
    input[type=radio].disabled,
    input[type=radio][disabled] {
        cursor: not-allowed
    }

    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px
    }

    .checkbox,
    .radio,
    input[type=file],
    input[type=range],
    output {
        display: block
    }

    input[type=search] {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-appearance: none
    }

    input[type=checkbox],
    input[type=radio] {
        margin: 4px 0 0;
        margin-top: 1px\9;
        line-height: normal
    }

    select[multiple],
    select[size] {
        height: auto
    }

    input[type=checkbox]:focus,
    input[type=file]:focus,
    input[type=radio]:focus {
        outline: dotted thin;
        outline: -webkit-focus-ring-color auto 5px;
        outline-offset: -2px
    }

    output {
        padding-top: 7px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #555
    }

    textarea {
        min-height: 160px
    }

    .entry-main .form-control,
    .entry-main input[type=email],
    .entry-main input[type=password],
    .entry-main input[type=tel],
    .entry-main input[type=text],
    .entry-main select,
    .entry-main textarea {
        background: #f7f7f7;
        border: 1px solid #eeeeed
    }

    .dropdown-menu,
    .modal-content {
        -webkit-background-clip: padding-box
    }

    .form-control,
    input[type=email],
    input[type=password],
    input[type=tel],
    input[type=text],
    select,
    textarea {
        display: block;
        width: 100%;
        height: 52px;
        font-size: 12px;
        line-height: 1.42857143;
        color: #999;
        background-color: #fff;
        background-image: none;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        border: none;
        margin-bottom: 18px;
        border-bottom: 1px solid transparent;
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        padding: 20px
    }

    .form-control:focus,
    input[type=password]:focus,
    input[type=tel]:focus,
    input[type=text]:focus,
    textarea:focus {
        border-color: #66afe9;
        outline: 0;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1)
    }

    .form-control::-moz-placeholder {
        color: #999;
        opacity: 1
    }

    .form-control:-ms-input-placeholder {
        color: #999
    }

    .form-control::-webkit-input-placeholder {
        color: #999
    }

    .has-success .checkbox,
    .has-success .checkbox-inline,
    .has-success .control-label,
    .has-success .form-control-feedback,
    .has-success .help-block,
    .has-success .radio,
    .has-success .radio-inline,
    .has-success.checkbox label,
    .has-success.checkbox-inline label,
    .has-success.radio label,
    .has-success.radio-inline label {
        color: #3c763d
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        background-color: #eee;
        opacity: 1
    }

    textarea.form-control {
        height: auto
    }

    @media screen and (-webkit-min-device-pixel-ratio:0) {

        input[type=date].form-control,
        input[type=datetime-local].form-control,
        input[type=month].form-control,
        input[type=time].form-control {
            line-height: 32px
        }

        .input-group-sm input[type=date],
        .input-group-sm input[type=datetime-local],
        .input-group-sm input[type=month],
        .input-group-sm input[type=time],
        input[type=date].input-sm,
        input[type=datetime-local].input-sm,
        input[type=month].input-sm,
        input[type=time].input-sm {
            line-height: 30px
        }

        .input-group-lg input[type=date],
        .input-group-lg input[type=datetime-local],
        .input-group-lg input[type=month],
        .input-group-lg input[type=time],
        input[type=date].input-lg,
        input[type=datetime-local].input-lg,
        input[type=month].input-lg,
        input[type=time].input-lg {
            line-height: 45px
        }
    }

    .form-group {
        margin-bottom: 15px
    }

    .checkbox,
    .radio {
        position: relative;
        margin-top: 10px;
        margin-bottom: 10px
    }

    .checkbox label,
    .radio label {
        min-height: 18px
    }

    .checkbox input[type=checkbox],
    .checkbox-inline input[type=checkbox],
    .radio input[type=radio],
    .radio-inline input[type=radio] {
        position: absolute;
        margin-left: -20px;
        margin-top: 4px\9
    }

    .checkbox+.checkbox,
    .radio+.radio {
        margin-top: -5px
    }

    .checkbox-inline,
    .radio-inline {
        position: relative;
        display: inline-block;
        vertical-align: middle
    }

    .checkbox-inline+.checkbox-inline,
    .radio-inline+.radio-inline {
        margin-top: 0;
        margin-left: 10px
    }

    .form-control-static {
        padding-top: 7px;
        padding-bottom: 7px;
        margin-bottom: 0;
        min-height: 31px
    }

    .form-control-static.input-lg,
    .form-control-static.input-sm {
        padding-left: 0;
        padding-right: 0
    }

    .form-group-sm .form-control,
    .input-sm {
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 12px
    }

    .input-sm {
        height: 30px;
        line-height: 1.5
    }

    select.input-sm {
        height: 30px;
        line-height: 30px
    }

    select[multiple].input-sm,
    textarea.input-sm {
        height: auto
    }

    .form-group-sm .form-control {
        height: 30px;
        line-height: 1.5
    }

    .form-group-lg .form-control,
    .input-lg {
        border-radius: 6px;
        padding: 10px 16px;
        font-size: 17px
    }

    .form-group-sm select.form-control {
        height: 30px;
        line-height: 30px
    }

    .form-group-sm select[multiple].form-control,
    .form-group-sm textarea.form-control {
        height: auto
    }

    .form-group-sm .form-control-static {
        height: 30px;
        min-height: 30px;
        padding: 6px 10px;
        font-size: 12px;
        line-height: 1.5
    }

    .input-lg {
        height: 45px;
        line-height: 1.33
    }

    select.input-lg {
        height: 45px;
        line-height: 45px
    }

    select[multiple].input-lg,
    textarea.input-lg {
        height: auto
    }

    .form-group-lg .form-control {
        height: 45px;
        line-height: 1.33
    }

    .form-group-lg select.form-control {
        height: 45px;
        line-height: 45px
    }

    .form-group-lg select[multiple].form-control,
    .form-group-lg textarea.form-control {
        height: auto
    }

    .form-group-lg .form-control-static {
        height: 45px;
        min-height: 35px;
        padding: 11px 16px;
        font-size: 17px;
        line-height: 1.33
    }

    .has-feedback {
        position: relative
    }

    .has-feedback .form-control {
        padding-right: 40px
    }

    .form-control-feedback {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
        display: block;
        width: 32px;
        height: 32px;
        line-height: 32px;
        text-align: center;
        pointer-events: none
    }

    .collapsing,
    .dropdown,
    .dropup {
        position: relative
    }

    .form-group-lg .form-control+.form-control-feedback,
    .input-group-lg+.form-control-feedback,
    .input-lg+.form-control-feedback {
        width: 45px;
        height: 45px;
        line-height: 45px
    }

    .form-group-sm .form-control+.form-control-feedback,
    .input-group-sm+.form-control-feedback,
    .input-sm+.form-control-feedback {
        width: 30px;
        height: 30px;
        line-height: 30px
    }

    .has-success .form-control {
        border-color: #3c763d;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-success .form-control:focus {
        border-color: #2b542c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
    }

    .has-success .input-group-addon {
        color: #3c763d;
        border-color: #3c763d;
        background-color: #dff0d8
    }

    .has-warning .checkbox,
    .has-warning .checkbox-inline,
    .has-warning .control-label,
    .has-warning .form-control-feedback,
    .has-warning .help-block,
    .has-warning .radio,
    .has-warning .radio-inline,
    .has-warning.checkbox label,
    .has-warning.checkbox-inline label,
    .has-warning.radio label,
    .has-warning.radio-inline label {
        color: #8a6d3b
    }

    .has-warning .form-control {
        border-color: #8a6d3b;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-warning .form-control:focus {
        border-color: #66512c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
    }

    .has-warning .input-group-addon {
        color: #8a6d3b;
        border-color: #8a6d3b;
        background-color: #fcf8e3
    }

    .has-error .checkbox,
    .has-error .checkbox-inline,
    .has-error .control-label,
    .has-error .form-control-feedback,
    .has-error .help-block,
    .has-error .radio,
    .has-error .radio-inline,
    .has-error.checkbox label,
    .has-error.checkbox-inline label,
    .has-error.radio label,
    .has-error.radio-inline label {
        color: #a94442
    }

    .has-error .form-control {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
    }

    .has-error .form-control:focus {
        border-color: #843534;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
    }

    .has-error .input-group-addon {
        color: #a94442;
        border-color: #a94442;
        background-color: #f2dede
    }

    .has-feedback label~.form-control-feedback {
        top: 23px
    }

    .has-feedback label.sr-only~.form-control-feedback {
        top: 0
    }

    .help-block {
        display: block;
        margin-top: 5px;
        margin-bottom: 10px;
        color: #737373
    }

    @media (min-width:768px) {

        .form-inline .form-control-static,
        .form-inline .form-group {
            display: inline-block
        }

        .form-inline .control-label,
        .form-inline .form-group {
            margin-bottom: 0;
            vertical-align: middle
        }

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }

        .form-inline .input-group {
            display: inline-table;
            vertical-align: middle
        }

        .form-inline .input-group .form-control,
        .form-inline .input-group .input-group-addon,
        .form-inline .input-group .input-group-btn {
            width: auto
        }

        .form-inline .input-group>.form-control {
            width: 100%
        }

        .form-inline .checkbox,
        .form-inline .radio {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle
        }

        .form-inline .checkbox label,
        .form-inline .radio label {
            padding-left: 0
        }

        .form-inline .checkbox input[type=checkbox],
        .form-inline .radio input[type=radio] {
            position: relative;
            margin-left: 0
        }

        .form-inline .has-feedback .form-control-feedback {
            top: 0
        }

        .form-horizontal .control-label {
            text-align: right;
            margin-bottom: 0;
            padding-top: 7px
        }
    }

    .btn-block,
    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
        width: 100%
    }

    .form-horizontal .checkbox,
    .form-horizontal .checkbox-inline,
    .form-horizontal .radio,
    .form-horizontal .radio-inline {
        margin-top: 0;
        margin-bottom: 0;
        padding-top: 7px
    }

    .form-horizontal .checkbox,
    .form-horizontal .radio {
        min-height: 25px
    }

    .form-horizontal .form-group {
        margin-left: -15px;
        margin-right: -15px
    }

    .form-horizontal .has-feedback .form-control-feedback {
        right: 15px
    }

    @media (min-width:768px) {
        .form-horizontal .form-group-lg .control-label {
            padding-top: 14.3px;
            font-size: 17px
        }

        .form-horizontal .form-group-sm .control-label {
            padding-top: 6px;
            font-size: 12px
        }
    }

    .btn {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        white-space: nowrap;
        padding: 11px 12px;
        font-size: 11px;
        line-height: 1;
        user-select: none;
        font-weight: 700;
        font-family: Raleway;
        transition: all .3s;
        border: none;
        border-radius: 0 !important
    }

    .btn-link,
    .input-group-addon,
    .popover,
    .tooltip {
        font-weight: 400
    }

    .btn.active.focus,
    .btn.active:focus,
    .btn.focus,
    .btn:active.focus,
    .btn:active:focus,
    .btn:focus {
        outline: dotted thin;
        outline: -webkit-focus-ring-color auto 5px;
        outline-offset: -2px
    }

    .btn.focus,
    .btn:focus,
    .btn:hover {
        color: #333;
        text-decoration: none
    }

    .btn.active,
    .btn:active {
        outline: 0;
        background-image: none;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn.disabled,
    .btn[disabled],
    fieldset[disabled] .btn {
        cursor: not-allowed;
        opacity: .65;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none
    }

    a.btn.disabled,
    fieldset[disabled] a.btn {
        pointer-events: none
    }

    .btn-default {
        color: #222;
        background-color: #fff;
        padding: 12px 16px
    }

    .btn-default.focus,
    .btn-default:focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c
    }

    .btn-default.active,
    .btn-default:active,
    .btn-default:hover,
    .open>.dropdown-toggle.btn-default {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad
    }

    .btn-default.active.focus,
    .btn-default.active:focus,
    .btn-default.active:hover,
    .btn-default:active.focus,
    .btn-default:active:focus,
    .btn-default:active:hover,
    .open>.dropdown-toggle.btn-default.focus,
    .open>.dropdown-toggle.btn-default:focus,
    .open>.dropdown-toggle.btn-default:hover {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c
    }

    .btn-default.active,
    .btn-default:active,
    .open>.dropdown-toggle.btn-default {
        background-image: none
    }

    .btn-default.disabled,
    .btn-default.disabled.active,
    .btn-default.disabled.focus,
    .btn-default.disabled:active,
    .btn-default.disabled:focus,
    .btn-default.disabled:hover,
    .btn-default[disabled],
    .btn-default[disabled].active,
    .btn-default[disabled].focus,
    .btn-default[disabled]:active,
    .btn-default[disabled]:focus,
    .btn-default[disabled]:hover,
    fieldset[disabled] .btn-default,
    fieldset[disabled] .btn-default.active,
    fieldset[disabled] .btn-default.focus,
    fieldset[disabled] .btn-default:active,
    fieldset[disabled] .btn-default:focus,
    fieldset[disabled] .btn-default:hover {
        background-color: #fff;
        border-color: #ccc
    }

    .btn-default .badge {
        color: #fff;
        background-color: #333
    }

    .btn-primary {
        color: #fff;
        background-color: #dc2d13;
        border-color: #c52811
    }

    .btn-primary.focus,
    .btn-primary:focus {
        color: #fff;
        background-color: #ad230f;
        border-color: #4f1007
    }

    .btn-primary:hover {
        color: #fff
    }

    .btn-primary.active,
    .btn-primary:active,
    .open>.dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #ad230f;
        border-color: #8c1d0c;
        background-image: none
    }

    .btn-primary.active.focus,
    .btn-primary.active:focus,
    .btn-primary.active:hover,
    .btn-primary:active.focus,
    .btn-primary:active:focus,
    .btn-primary:active:hover,
    .open>.dropdown-toggle.btn-primary.focus,
    .open>.dropdown-toggle.btn-primary:focus,
    .open>.dropdown-toggle.btn-primary:hover {
        color: #fff;
        background-color: #8c1d0c;
        border-color: #4f1007
    }

    .btn-primary.disabled,
    .btn-primary.disabled.active,
    .btn-primary.disabled.focus,
    .btn-primary.disabled:active,
    .btn-primary.disabled:focus,
    .btn-primary.disabled:hover,
    .btn-primary[disabled],
    .btn-primary[disabled].active,
    .btn-primary[disabled].focus,
    .btn-primary[disabled]:active,
    .btn-primary[disabled]:focus,
    .btn-primary[disabled]:hover,
    fieldset[disabled] .btn-primary,
    fieldset[disabled] .btn-primary.active,
    fieldset[disabled] .btn-primary.focus,
    fieldset[disabled] .btn-primary:active,
    fieldset[disabled] .btn-primary:focus,
    fieldset[disabled] .btn-primary:hover {
        background-color: #dc2d13;
        border-color: #c52811
    }

    .btn-primary .badge {
        color: #dc2d13;
        background-color: #fff
    }

    .btn-success {
        color: #fff;
        background-color: #555;
        border-color: #484848
    }

    .btn-success.focus,
    .btn-success:focus {
        color: #fff;
        background-color: #3b3b3b;
        border-color: #080808
    }

    .btn-success.active,
    .btn-success:active,
    .btn-success:hover,
    .open>.dropdown-toggle.btn-success {
        color: #fff;
        background-color: #3b3b3b;
        border-color: #2a2a2a
    }

    .btn-success.active.focus,
    .btn-success.active:focus,
    .btn-success.active:hover,
    .btn-success:active.focus,
    .btn-success:active:focus,
    .btn-success:active:hover,
    .open>.dropdown-toggle.btn-success.focus,
    .open>.dropdown-toggle.btn-success:focus,
    .open>.dropdown-toggle.btn-success:hover {
        color: #fff;
        background-color: #2a2a2a;
        border-color: #080808
    }

    .btn-success.active,
    .btn-success:active,
    .open>.dropdown-toggle.btn-success {
        background-image: none
    }

    .btn-success.disabled,
    .btn-success.disabled.active,
    .btn-success.disabled.focus,
    .btn-success.disabled:active,
    .btn-success.disabled:focus,
    .btn-success.disabled:hover,
    .btn-success[disabled],
    .btn-success[disabled].active,
    .btn-success[disabled].focus,
    .btn-success[disabled]:active,
    .btn-success[disabled]:focus,
    .btn-success[disabled]:hover,
    fieldset[disabled] .btn-success,
    fieldset[disabled] .btn-success.active,
    fieldset[disabled] .btn-success.focus,
    fieldset[disabled] .btn-success:active,
    fieldset[disabled] .btn-success:focus,
    fieldset[disabled] .btn-success:hover {
        background-color: #555;
        border-color: #484848
    }

    .btn-success .badge {
        color: #555;
        background-color: #fff
    }

    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da
    }

    .btn-info.focus,
    .btn-info:focus {
        color: #fff;
        background-color: #31b0d5;
        border-color: #1b6d85
    }

    .btn-info.active,
    .btn-info:active,
    .btn-info:hover,
    .open>.dropdown-toggle.btn-info {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc
    }

    .btn-info.active.focus,
    .btn-info.active:focus,
    .btn-info.active:hover,
    .btn-info:active.focus,
    .btn-info:active:focus,
    .btn-info:active:hover,
    .open>.dropdown-toggle.btn-info.focus,
    .open>.dropdown-toggle.btn-info:focus,
    .open>.dropdown-toggle.btn-info:hover {
        color: #fff;
        background-color: #269abc;
        border-color: #1b6d85
    }

    .btn-info.active,
    .btn-info:active,
    .open>.dropdown-toggle.btn-info {
        background-image: none
    }

    .btn-info.disabled,
    .btn-info.disabled.active,
    .btn-info.disabled.focus,
    .btn-info.disabled:active,
    .btn-info.disabled:focus,
    .btn-info.disabled:hover,
    .btn-info[disabled],
    .btn-info[disabled].active,
    .btn-info[disabled].focus,
    .btn-info[disabled]:active,
    .btn-info[disabled]:focus,
    .btn-info[disabled]:hover,
    fieldset[disabled] .btn-info,
    fieldset[disabled] .btn-info.active,
    fieldset[disabled] .btn-info.focus,
    fieldset[disabled] .btn-info:active,
    fieldset[disabled] .btn-info:focus,
    fieldset[disabled] .btn-info:hover {
        background-color: #5bc0de;
        border-color: #46b8da
    }

    .btn-info .badge {
        color: #5bc0de;
        background-color: #fff
    }

    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236
    }

    .btn-warning.focus,
    .btn-warning:focus {
        color: #fff;
        background-color: #ec971f;
        border-color: #985f0d
    }

    .btn-warning.active,
    .btn-warning:active,
    .btn-warning:hover,
    .open>.dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512
    }

    .btn-warning.active.focus,
    .btn-warning.active:focus,
    .btn-warning.active:hover,
    .btn-warning:active.focus,
    .btn-warning:active:focus,
    .btn-warning:active:hover,
    .open>.dropdown-toggle.btn-warning.focus,
    .open>.dropdown-toggle.btn-warning:focus,
    .open>.dropdown-toggle.btn-warning:hover {
        color: #fff;
        background-color: #d58512;
        border-color: #985f0d
    }

    .btn-warning.active,
    .btn-warning:active,
    .open>.dropdown-toggle.btn-warning {
        background-image: none
    }

    .btn-warning.disabled,
    .btn-warning.disabled.active,
    .btn-warning.disabled.focus,
    .btn-warning.disabled:active,
    .btn-warning.disabled:focus,
    .btn-warning.disabled:hover,
    .btn-warning[disabled],
    .btn-warning[disabled].active,
    .btn-warning[disabled].focus,
    .btn-warning[disabled]:active,
    .btn-warning[disabled]:focus,
    .btn-warning[disabled]:hover,
    fieldset[disabled] .btn-warning,
    fieldset[disabled] .btn-warning.active,
    fieldset[disabled] .btn-warning.focus,
    fieldset[disabled] .btn-warning:active,
    fieldset[disabled] .btn-warning:focus,
    fieldset[disabled] .btn-warning:hover {
        background-color: #f0ad4e;
        border-color: #eea236
    }

    .btn-warning .badge {
        color: #f0ad4e;
        background-color: #fff
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a
    }

    .btn-danger.focus,
    .btn-danger:focus {
        color: #fff;
        background-color: #c9302c;
        border-color: #761c19
    }

    .btn-danger.active,
    .btn-danger:active,
    .btn-danger:hover,
    .open>.dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925
    }

    .btn-danger.active.focus,
    .btn-danger.active:focus,
    .btn-danger.active:hover,
    .btn-danger:active.focus,
    .btn-danger:active:focus,
    .btn-danger:active:hover,
    .open>.dropdown-toggle.btn-danger.focus,
    .open>.dropdown-toggle.btn-danger:focus,
    .open>.dropdown-toggle.btn-danger:hover {
        color: #fff;
        background-color: #ac2925;
        border-color: #761c19
    }

    .btn-danger.active,
    .btn-danger:active,
    .open>.dropdown-toggle.btn-danger {
        background-image: none
    }

    .btn-danger.disabled,
    .btn-danger.disabled.active,
    .btn-danger.disabled.focus,
    .btn-danger.disabled:active,
    .btn-danger.disabled:focus,
    .btn-danger.disabled:hover,
    .btn-danger[disabled],
    .btn-danger[disabled].active,
    .btn-danger[disabled].focus,
    .btn-danger[disabled]:active,
    .btn-danger[disabled]:focus,
    .btn-danger[disabled]:hover,
    fieldset[disabled] .btn-danger,
    fieldset[disabled] .btn-danger.active,
    fieldset[disabled] .btn-danger.focus,
    fieldset[disabled] .btn-danger:active,
    fieldset[disabled] .btn-danger:focus,
    fieldset[disabled] .btn-danger:hover {
        background-color: #d9534f;
        border-color: #d43f3a
    }

    .btn-danger .badge {
        color: #d9534f;
        background-color: #fff
    }

    .btn-link {
        color: #dc2d13;
        border-radius: 0
    }

    .btn-link,
    .btn-link.active,
    .btn-link:active,
    .btn-link[disabled],
    fieldset[disabled] .btn-link {
        background-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-link,
    .btn-link:active,
    .btn-link:focus,
    .btn-link:hover {
        border-color: transparent
    }

    .btn-link:focus,
    .btn-link:hover {
        color: #961f0d;
        text-decoration: underline;
        background-color: transparent
    }

    .btn-link[disabled]:focus,
    .btn-link[disabled]:hover,
    fieldset[disabled] .btn-link:focus,
    fieldset[disabled] .btn-link:hover {
        color: #999;
        text-decoration: none
    }

    .btn-group-lg>.btn,
    .btn-lg {
        padding: 10px 16px;
        font-size: 17px;
        line-height: 1.33;
        border-radius: 6px
    }

    .btn-group-sm>.btn,
    .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-group-xs>.btn,
    .btn-xs {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    .btn-block {
        display: block
    }

    .btn-block+.btn-block {
        margin-top: 5px
    }

    .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear
    }

    .fade.in {
        opacity: 1
    }

    .collapse {
        display: none
    }

    .collapse.in {
        display: block
    }

    tr.collapse.in {
        display: table-row
    }

    tbody.collapse.in {
        display: table-row-group
    }

    .collapsing {
        height: 0;
        overflow: hidden;
        -webkit-transition-property: height, visibility;
        -o-transition-property: height, visibility;
        transition-property: height, visibility;
        -webkit-transition-duration: .35s;
        -o-transition-duration: .35s;
        transition-duration: .35s;
        -webkit-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease
    }

    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-top: 4px solid\9;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent
    }

    .dropdown-toggle:focus {
        outline: 0
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        text-align: left;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        background-clip: padding-box
    }

    .dropdown-menu-right,
    .dropdown-menu.pull-right {
        left: auto;
        right: 0
    }

    .dropdown-header,
    .dropdown-menu>li>a {
        display: block;
        padding: 3px 20px;
        line-height: 1.42857143;
        white-space: nowrap
    }

    .btn-group-vertical>.btn:not(:first-child):not(:last-child),
    .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn,
    .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0
    }

    .dropdown-menu .divider {
        height: 1px;
        margin: 8px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }

    .dropdown-menu>li>a {
        clear: both;
        font-weight: 400;
        color: #FFF
    }

    .dropdown-menu>li>a:focus,
    .dropdown-menu>li>a:hover {
        text-decoration: none
    }

    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:focus,
    .dropdown-menu>.active>a:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        background-color: #dc2d13
    }

    .dropdown-menu>.disabled>a,
    .dropdown-menu>.disabled>a:focus,
    .dropdown-menu>.disabled>a:hover {
        color: #999
    }

    .dropdown-menu>.disabled>a:focus,
    .dropdown-menu>.disabled>a:hover {
        text-decoration: none;
        background-color: transparent;
        background-image: none;
        filter: progid: DXImageTransform.Microsoft.gradient(enabled=false);
        cursor: not-allowed
    }

    .open>.dropdown-menu {
        display: block
    }

    .open>a {
        outline: 0
    }

    .dropdown-menu-left {
        left: 0;
        right: auto
    }

    .dropdown-header {
        font-size: 12px;
        color: #999
    }

    .dropdown-backdrop {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        z-index: 990
    }

    .nav-justified>.dropdown .dropdown-menu,
    .nav-tabs.nav-justified>.dropdown .dropdown-menu {
        top: auto;
        left: auto
    }

    .pull-right>.dropdown-menu {
        right: 0;
        left: auto
    }

    .dropup .caret,
    .navbar-fixed-bottom .dropdown .caret {
        border-top: 0;
        border-bottom: 4px dashed;
        border-bottom: 4px solid\9;
        content: ""
    }

    .dropup .dropdown-menu,
    .navbar-fixed-bottom .dropdown .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-bottom: 2px
    }

    @media (min-width:768px) {
        .navbar-right .dropdown-menu {
            left: auto;
            right: 0
        }

        .navbar-right .dropdown-menu-left {
            left: 0;
            right: auto
        }
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: inline-block;
        vertical-align: middle
    }

    .btn-group-vertical>.btn,
    .btn-group>.btn {
        position: relative;
        float: left
    }

    .btn-group-vertical>.btn.active,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .btn-group>.btn:hover {
        z-index: 2
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group {
        margin-left: -1px
    }

    .btn-toolbar {
        margin-left: -5px
    }

    .btn-toolbar>.btn,
    .btn-toolbar>.btn-group,
    .btn-toolbar>.input-group {
        margin-left: 5px
    }

    .btn .caret,
    .btn-group>.btn:first-child {
        margin-left: 0
    }

    .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .btn-group>.btn:last-child:not(:first-child),
    .btn-group>.dropdown-toggle:not(:first-child) {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    .btn-group .dropdown-toggle:active,
    .btn-group.open .dropdown-toggle {
        outline: 0
    }

    .btn-group>.btn+.dropdown-toggle {
        padding-left: 8px;
        padding-right: 8px
    }

    .btn-group>.btn-lg+.dropdown-toggle {
        padding-left: 12px;
        padding-right: 12px
    }

    .btn-group.open .dropdown-toggle {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
    }

    .btn-group.open .dropdown-toggle.btn-link {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-lg .caret {
        border-width: 5px 5px 0
    }

    .dropup .btn-lg .caret {
        border-width: 0 5px 5px
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group,
    .btn-group-vertical>.btn-group>.btn {
        display: block;
        float: none;
        width: 100%;
        max-width: 100%
    }

    .btn-group-vertical>.btn-group>.btn {
        float: none
    }

    .btn-group-vertical>.btn+.btn,
    .btn-group-vertical>.btn+.btn-group,
    .btn-group-vertical>.btn-group+.btn,
    .btn-group-vertical>.btn-group+.btn-group {
        margin-top: -1px;
        margin-left: 0
    }

    .btn-group-vertical>.btn:first-child:not(:last-child) {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn:last-child:not(:first-child) {
        border-bottom-left-radius: 4px;
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0
    }

    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .btn-group-justified {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate
    }

    .btn-group-justified>.btn,
    .btn-group-justified>.btn-group {
        float: none;
        display: table-cell;
        width: 1%
    }

    .btn-group-justified>.btn-group .btn {
        width: 100%
    }

    .btn-group-justified>.btn-group .dropdown-menu {
        left: auto
    }

    [data-toggle=buttons]>.btn input[type=checkbox],
    [data-toggle=buttons]>.btn input[type=radio],
    [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
    [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }

    .input-group,
    .input-group-btn,
    .input-group-btn>.btn,
    .nav>li,
    .nav>li>a,
    .navbar {
        position: relative
    }

    .input-group {
        display: table;
        border-collapse: separate
    }

    .input-group[class*=col-] {
        float: none;
        padding-left: 0;
        padding-right: 0
    }

    .input-group .form-control {
        position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0
    }

    .input-group-lg>.form-control,
    .input-group-lg>.input-group-addon,
    .input-group-lg>.input-group-btn>.btn {
        height: 45px;
        padding: 10px 16px;
        font-size: 17px;
        line-height: 1.33;
        border-radius: 6px
    }

    select.input-group-lg>.form-control,
    select.input-group-lg>.input-group-addon,
    select.input-group-lg>.input-group-btn>.btn {
        height: 45px;
        line-height: 45px
    }

    select[multiple].input-group-lg>.form-control,
    select[multiple].input-group-lg>.input-group-addon,
    select[multiple].input-group-lg>.input-group-btn>.btn,
    textarea.input-group-lg>.form-control,
    textarea.input-group-lg>.input-group-addon,
    textarea.input-group-lg>.input-group-btn>.btn {
        height: auto
    }

    .input-group-sm>.form-control,
    .input-group-sm>.input-group-addon,
    .input-group-sm>.input-group-btn>.btn {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px
    }

    select.input-group-sm>.form-control,
    select.input-group-sm>.input-group-addon,
    select.input-group-sm>.input-group-btn>.btn {
        height: 30px;
        line-height: 30px
    }

    select[multiple].input-group-sm>.form-control,
    select[multiple].input-group-sm>.input-group-addon,
    select[multiple].input-group-sm>.input-group-btn>.btn,
    textarea.input-group-sm>.form-control,
    textarea.input-group-sm>.input-group-addon,
    textarea.input-group-sm>.input-group-btn>.btn {
        height: auto
    }

    .input-group .form-control,
    .input-group-addon,
    .input-group-btn {
        display: table-cell
    }

    .nav>li,
    .nav>li>a {
        display: block
    }

    .input-group .form-control:not(:first-child):not(:last-child),
    .input-group-addon:not(:first-child):not(:last-child),
    .input-group-btn:not(:first-child):not(:last-child) {
        border-radius: 0
    }

    .input-group-addon,
    .input-group-btn {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle
    }

    .input-group-addon {
        padding: 6px 12px;
        font-size: 13px;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px
    }

    .input-group-addon.input-sm {
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 3px
    }

    .input-group-addon.input-lg {
        padding: 10px 16px;
        font-size: 17px;
        border-radius: 6px
    }

    .input-group-addon input[type=checkbox],
    .input-group-addon input[type=radio] {
        margin-top: 0
    }

    .input-group .form-control:first-child,
    .input-group-addon:first-child,
    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group>.btn,
    .input-group-btn:first-child>.dropdown-toggle,
    .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
    .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .input-group-addon:first-child {
        border-right: 0
    }

    .input-group .form-control:last-child,
    .input-group-addon:last-child,
    .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
    .input-group-btn:first-child>.btn:not(:first-child),
    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group>.btn,
    .input-group-btn:last-child>.dropdown-toggle {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    .input-group-addon:last-child {
        border-left: 0
    }

    .input-group-btn {
        font-size: 0;
        white-space: nowrap
    }

    .input-group-btn>.btn+.btn {
        margin-left: -1px
    }

    .input-group-btn>.btn:active,
    .input-group-btn>.btn:focus,
    .input-group-btn>.btn:hover {
        z-index: 2
    }

    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group {
        margin-right: -1px
    }

    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group {
        z-index: 2;
        margin-left: -1px
    }

    .nav {
        margin-bottom: 0;
        padding-left: 0
    }

    .nav>li>a {
        padding: 10px 15px
    }

    .nav>li>a:focus,
    .nav>li>a:hover {
        text-decoration: none
    }

    .nav>li.disabled>a {
        color: #999
    }

    .nav>li.disabled>a:focus,
    .nav>li.disabled>a:hover {
        color: #999;
        text-decoration: none;
        background-color: transparent;
        cursor: not-allowed
    }

    .nav .nav-divider {
        height: 1px;
        margin: 8px 0;
        overflow: hidden;
        background-color: #e5e5e5
    }

    .nav>li>a>img {
        max-width: none
    }

    .nav-tabs {
        box-shadow: -4px 0 0 0 #999;
        margin-left: 4px
    }

    .nav-tabs>li {
        float: left;
        margin-bottom: -1px
    }

    .nav-tabs>li>a {
        line-height: 1.42857143;
        font-family: Ubuntu;
        color: #999;
        font-weight: 700;
        margin-right: 2px;
        padding: 4px 15px
    }

    .nav-tabs>li>a:hover {
        border-color: #eee #eee #ddd
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        border-bottom-color: transparent;
        cursor: default
    }

    .nav-tabs.nav-justified {
        width: 100%;
        border-bottom: 0
    }

    .nav-tabs.nav-justified>li {
        float: none
    }

    .nav-tabs.nav-justified>li>a {
        text-align: center;
        margin-bottom: 5px;
        margin-right: 0;
        border-radius: 4px
    }

    .nav-tabs.nav-justified>.active>a,
    .nav-tabs.nav-justified>.active>a:focus,
    .nav-tabs.nav-justified>.active>a:hover {
        border: 1px solid #ddd
    }

    @media (min-width:768px) {
        .nav-tabs.nav-justified>li {
            display: table-cell;
            width: 1%
        }

        .nav-tabs.nav-justified>li>a {
            margin-bottom: 0;
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0
        }

        .nav-tabs.nav-justified>.active>a,
        .nav-tabs.nav-justified>.active>a:focus,
        .nav-tabs.nav-justified>.active>a:hover {
            border-bottom-color: #f5f5f5
        }
    }

    .nav-pills>li {
        float: left
    }

    .nav-justified>li,
    .nav-stacked>li {
        float: none
    }

    .nav-pills>li>a {
        border-radius: 4px
    }

    .nav-pills>li+li {
        margin-left: 2px
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        color: #fff;
        background-color: #dc2d13
    }

    .nav-stacked>li+li {
        margin-top: 2px;
        margin-left: 0
    }

    .nav-justified {
        width: 100%
    }

    .nav-justified>li>a {
        text-align: center;
        margin-bottom: 5px
    }

    .nav-tabs-justified {
        border-bottom: 0
    }

    .nav-tabs-justified>li>a {
        margin-right: 0;
        border-radius: 4px
    }

    .nav-tabs-justified>.active>a,
    .nav-tabs-justified>.active>a:focus,
    .nav-tabs-justified>.active>a:hover {
        border: 1px solid #ddd
    }

    @media (min-width:768px) {
        .nav-justified>li {
            display: table-cell;
            width: 1%
        }

        .nav-justified>li>a {
            margin-bottom: 0
        }

        .nav-tabs-justified>li>a {
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0
        }

        .nav-tabs-justified>.active>a,
        .nav-tabs-justified>.active>a:focus,
        .nav-tabs-justified>.active>a:hover {
            border-bottom-color: #f5f5f5
        }
    }

    .tab-content>.tab-pane {
        display: none;
        background-color: #fff;
        padding: 28px 47px 36px
    }

    .tab-content>.active {
        display: block
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .navbar {
        min-height: 50px;
        margin-bottom: 18px;
        border: 1px solid transparent
    }

    .navbar-collapse {
        overflow-x: visible;
        padding-right: 15px;
        padding-left: 15px;
        border-top: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
        -webkit-overflow-scrolling: touch
    }

    .navbar-collapse.in {
        overflow-y: auto
    }

    @media (min-width:768px) {
        .navbar {
            border-radius: 4px
        }

        .navbar-header {
            float: left
        }

        .navbar-collapse {
            width: auto;
            border-top: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .navbar-collapse.collapse {
            display: block !important;
            height: auto !important;
            padding-bottom: 0;
            overflow: visible !important
        }

        .navbar-collapse.in {
            overflow-y: visible
        }

        .navbar-fixed-bottom .navbar-collapse,
        .navbar-fixed-top .navbar-collapse,
        .navbar-static-top .navbar-collapse {
            padding-left: 0;
            padding-right: 0
        }
    }

    .embed-responsive,
    .modal,
    .modal-open,
    .progress {
        overflow: hidden
    }

    @media (max-device-width:480px) and (orientation:landscape) {

        .navbar-fixed-bottom .navbar-collapse,
        .navbar-fixed-top .navbar-collapse {
            max-height: 200px
        }
    }

    .container-fluid>.navbar-collapse,
    .container-fluid>.navbar-header,
    .container>.navbar-collapse,
    .container>.navbar-header {
        margin-right: -15px;
        margin-left: -15px
    }

    .navbar-static-top {
        z-index: 1000;
        border-width: 0 0 1px
    }

    .navbar-fixed-bottom,
    .navbar-fixed-top {
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030
    }

    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px
    }

    .navbar-fixed-bottom {
        bottom: 0;
        margin-bottom: 0;
        border-width: 1px 0 0
    }

    .navbar-brand {
        float: left;
        padding: 16px 15px;
        font-size: 17px;
        line-height: 18px;
        height: 50px
    }

    .navbar-brand:focus,
    .navbar-brand:hover {
        text-decoration: none
    }

    .navbar-brand>img {
        display: block
    }

    @media (min-width:768px) {

        .container-fluid>.navbar-collapse,
        .container-fluid>.navbar-header,
        .container>.navbar-collapse,
        .container>.navbar-header {
            margin-right: 0;
            margin-left: 0
        }

        .navbar-fixed-bottom,
        .navbar-fixed-top,
        .navbar-static-top {
            border-radius: 0
        }

        .navbar>.container .navbar-brand,
        .navbar>.container-fluid .navbar-brand {
            margin-left: -15px
        }
    }

    .navbar-toggle {
        position: relative;
        float: right;
        margin-right: 15px;
        padding: 9px 10px;
        margin-top: 8px;
        margin-bottom: 8px;
        background-color: transparent;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px
    }

    .navbar-toggle:focus {
        outline: 0
    }

    .navbar-toggle .icon-bar {
        display: block;
        width: 22px;
        height: 2px;
        border-radius: 1px
    }

    .navbar-toggle .icon-bar+.icon-bar {
        margin-top: 4px
    }

    .navbar-nav {
        margin: 8px -15px
    }

    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 18px
    }

    @media (max-width:767px) {
        .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .navbar-nav .open .dropdown-menu .dropdown-header,
        .navbar-nav .open .dropdown-menu>li>a {
            padding: 5px 15px 5px 25px
        }

        .navbar-nav .open .dropdown-menu>li>a {
            line-height: 18px
        }

        .navbar-nav .open .dropdown-menu>li>a:focus,
        .navbar-nav .open .dropdown-menu>li>a:hover {
            background-image: none
        }
    }

    .progress-bar-striped,
    .progress-striped .progress-bar,
    .progress-striped .progress-bar-success {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    @media (min-width:768px) {
        .navbar-toggle {
            display: none
        }

        .navbar-nav {
            float: left;
            margin: 0
        }

        .navbar-nav>li {
            float: left
        }

        .navbar-nav>li>a {
            padding-top: 16px;
            padding-bottom: 16px
        }
    }

    .navbar-form {
        padding: 10px 15px;
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
        margin: 9px -15px
    }

    @media (min-width:768px) {

        .navbar-form .form-control-static,
        .navbar-form .form-group {
            display: inline-block
        }

        .navbar-form .control-label,
        .navbar-form .form-group {
            margin-bottom: 0;
            vertical-align: middle
        }

        .navbar-form .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }

        .navbar-form .input-group {
            display: inline-table;
            vertical-align: middle
        }

        .navbar-form .input-group .form-control,
        .navbar-form .input-group .input-group-addon,
        .navbar-form .input-group .input-group-btn {
            width: auto
        }

        .navbar-form .input-group>.form-control {
            width: 100%
        }

        .navbar-form .checkbox,
        .navbar-form .radio {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle
        }

        .navbar-form .checkbox label,
        .navbar-form .radio label {
            padding-left: 0
        }

        .navbar-form .checkbox input[type=checkbox],
        .navbar-form .radio input[type=radio] {
            position: relative;
            margin-left: 0
        }

        .navbar-form .has-feedback .form-control-feedback {
            top: 0
        }

        .navbar-form {
            width: auto;
            border: 0;
            margin-left: 0;
            margin-right: 0;
            padding-top: 0;
            padding-bottom: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .navbar-text {
            float: left;
            margin-left: 15px;
            margin-right: 15px
        }

        .navbar-left {
            float: left !important
        }

        .navbar-right {
            float: right !important;
            margin-right: -15px
        }

        .navbar-right~.navbar-right {
            margin-right: 0
        }
    }

    .btn .badge,
    .btn .label {
        top: -1px;
        position: relative
    }

    @media (max-width:767px) {
        .navbar-form .form-group {
            margin-bottom: 5px
        }

        .navbar-form .form-group:last-child {
            margin-bottom: 0
        }
    }

    .navbar-nav>li>.dropdown-menu {
        margin-top: 0;
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
        margin-bottom: 0;
        border-radius: 4px 4px 0 0
    }

    .navbar-btn {
        margin-top: 9px;
        margin-bottom: 9px
    }

    .navbar-btn.btn-sm {
        margin-top: 10px;
        margin-bottom: 10px
    }

    .navbar-btn.btn-xs {
        margin-top: 14px;
        margin-bottom: 14px
    }

    .navbar-text {
        margin-top: 16px;
        margin-bottom: 16px
    }

    .navbar-default {
        background-color: #f8f8f8;
        border-color: #e7e7e7
    }

    .navbar-default .navbar-brand {
        color: #777
    }

    .navbar-default .navbar-brand:focus,
    .navbar-default .navbar-brand:hover {
        color: #5e5e5e;
        background-color: transparent
    }

    .navbar-default .navbar-nav>li>a,
    .navbar-default .navbar-text {
        color: #777
    }

    .navbar-default .navbar-nav>li>a:focus,
    .navbar-default .navbar-nav>li>a:hover {
        color: #333;
        background-color: transparent
    }

    .navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:focus,
    .navbar-default .navbar-nav>.active>a:hover {
        color: #555;
        background-color: #e7e7e7
    }

    .navbar-default .navbar-nav>.disabled>a,
    .navbar-default .navbar-nav>.disabled>a:focus,
    .navbar-default .navbar-nav>.disabled>a:hover {
        color: #ccc;
        background-color: transparent
    }

    .navbar-default .navbar-toggle {
        border-color: #ddd
    }

    .navbar-default .navbar-toggle:focus,
    .navbar-default .navbar-toggle:hover {
        background-color: #ddd
    }

    .navbar-default .navbar-toggle .icon-bar {
        background-color: #888
    }

    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        border-color: #e7e7e7
    }

    .navbar-default .navbar-nav>.open>a,
    .navbar-default .navbar-nav>.open>a:focus,
    .navbar-default .navbar-nav>.open>a:hover {
        background-color: #e7e7e7;
        color: #555
    }

    @media (max-width:767px) {
        .navbar-default .navbar-nav .open .dropdown-menu>li>a {
            color: #777
        }

        .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
        .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
            color: #333;
            background-color: transparent
        }

        .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
        .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
        .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
            color: #ccc;
            background-color: transparent
        }
    }

    .navbar-default .navbar-link {
        color: #777
    }

    .navbar-default .navbar-link:hover {
        color: #333
    }

    .navbar-default .btn-link {
        color: #777
    }

    .navbar-default .btn-link:focus,
    .navbar-default .btn-link:hover {
        color: #333
    }

    .navbar-default .btn-link[disabled]:focus,
    .navbar-default .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-default .btn-link:focus,
    fieldset[disabled] .navbar-default .btn-link:hover {
        color: #ccc
    }

    .navbar-inverse {
        background-color: #222;
        border-color: #080808
    }

    .navbar-inverse .navbar-brand {
        color: #999
    }

    .navbar-inverse .navbar-brand:focus,
    .navbar-inverse .navbar-brand:hover {
        color: #fff;
        background-color: transparent
    }

    .navbar-inverse .navbar-nav>li>a,
    .navbar-inverse .navbar-text {
        color: #999
    }

    .navbar-inverse .navbar-nav>li>a:focus,
    .navbar-inverse .navbar-nav>li>a:hover {
        color: #fff;
        background-color: transparent
    }

    .navbar-inverse .navbar-nav>.active>a,
    .navbar-inverse .navbar-nav>.active>a:focus,
    .navbar-inverse .navbar-nav>.active>a:hover {
        color: #fff;
        background-color: #080808
    }

    .navbar-inverse .navbar-nav>.disabled>a,
    .navbar-inverse .navbar-nav>.disabled>a:focus,
    .navbar-inverse .navbar-nav>.disabled>a:hover {
        color: #444;
        background-color: transparent
    }

    .navbar-inverse .navbar-toggle {
        border-color: #333
    }

    .navbar-inverse .navbar-toggle:focus,
    .navbar-inverse .navbar-toggle:hover {
        background-color: #333
    }

    .navbar-inverse .navbar-toggle .icon-bar {
        background-color: #fff
    }

    .navbar-inverse .navbar-collapse,
    .navbar-inverse .navbar-form {
        border-color: #101010
    }

    .navbar-inverse .navbar-nav>.open>a,
    .navbar-inverse .navbar-nav>.open>a:focus,
    .navbar-inverse .navbar-nav>.open>a:hover {
        background-color: #080808;
        color: #fff
    }

    @media (max-width:767px) {
        .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
            border-color: #080808
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
            background-color: #080808
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #999
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
            color: #fff;
            background-color: #080808
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
            color: #444;
            background-color: transparent
        }
    }

    .navbar-inverse .navbar-link {
        color: #999
    }

    .navbar-inverse .navbar-link:hover {
        color: #fff
    }

    .navbar-inverse .btn-link {
        color: #999
    }

    .navbar-inverse .btn-link:focus,
    .navbar-inverse .btn-link:hover {
        color: #fff
    }

    .navbar-inverse .btn-link[disabled]:focus,
    .navbar-inverse .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-inverse .btn-link:focus,
    fieldset[disabled] .navbar-inverse .btn-link:hover {
        color: #444
    }

    .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 18px;
        border-radius: 4px
    }

    .breadcrumb>li {
        display: inline-block;
        font-size: 12px;
        font-weight: 500
    }

    .breadcrumb>li+li:before {
        content: "\f0da";
        padding: 0 9px;
        color: #fff;
        font: normal normal normal 14px/1 FontAwesome
    }

    .breadcrumb>.active {
        color: #fff
    }

    .pagination {
        display: inline-block;
        padding-left: 0;
        margin: 41px 0 0
    }

    .pager li,
    .pagination>li {
        display: inline
    }

    .pagination>li>a,
    .pagination>li>span {
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
        color: #777
    }

    .pagination>li:first-child>a,
    .pagination>li:first-child>span {
        margin-left: 0
    }

    .pagination>li>a:focus,
    .pagination>li>a:hover,
    .pagination>li>span:focus,
    .pagination>li>span:hover {
        z-index: 3;
        color: #fff;
        background-color: #222
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        z-index: 2;
        color: #fff;
        background-color: #222;
        cursor: default
    }

    .pagination>.disabled>a,
    .pagination>.disabled>a:focus,
    .pagination>.disabled>a:hover,
    .pagination>.disabled>span,
    .pagination>.disabled>span:focus,
    .pagination>.disabled>span:hover {
        color: #999;
        background-color: #fff;
        border-color: #ddd;
        cursor: not-allowed
    }

    .pagination-lg>li>a,
    .pagination-lg>li>span {
        padding: 10px 16px;
        font-size: 17px;
        line-height: 1.33
    }

    .pagination-lg>li:first-child>a,
    .pagination-lg>li:first-child>span {
        border-bottom-left-radius: 6px;
        border-top-left-radius: 6px
    }

    .pagination-lg>li:last-child>a,
    .pagination-lg>li:last-child>span {
        border-bottom-right-radius: 6px;
        border-top-right-radius: 6px
    }

    .pagination-sm>li>a,
    .pagination-sm>li>span {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5
    }

    .badge,
    .label {
        font-weight: 700;
        line-height: 1;
        white-space: nowrap;
        text-align: center
    }

    .pagination-sm>li:first-child>a,
    .pagination-sm>li:first-child>span {
        border-bottom-left-radius: 3px;
        border-top-left-radius: 3px
    }

    .pagination-sm>li:last-child>a,
    .pagination-sm>li:last-child>span {
        border-bottom-right-radius: 3px;
        border-top-right-radius: 3px
    }

    .pager {
        padding-left: 0;
        margin: 18px 0;
        text-align: center
    }

    .pager li>a,
    .pager li>span {
        display: inline-block;
        padding: 5px 14px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 15px
    }

    .pager li>a:focus,
    .pager li>a:hover {
        text-decoration: none;
        background-color: #eee
    }

    .pager .next>a,
    .pager .next>span {
        float: right
    }

    .pager .previous>a,
    .pager .previous>span {
        float: left
    }

    .close,
    .list-group-item>.badge {
        float: right
    }

    .pager .disabled>a,
    .pager .disabled>a:focus,
    .pager .disabled>a:hover,
    .pager .disabled>span {
        color: #999;
        background-color: #fff;
        cursor: not-allowed
    }

    a.badge:focus,
    a.badge:hover,
    a.label:focus,
    a.label:hover {
        color: #fff;
        cursor: pointer;
        text-decoration: none
    }

    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        color: #fff;
        vertical-align: baseline;
        border-radius: .25em
    }

    .label:empty {
        display: none
    }

    .label-default {
        background-color: #999
    }

    .label-default[href]:focus,
    .label-default[href]:hover {
        background-color: grey
    }

    .label-primary {
        background-color: #dc2d13
    }

    .label-primary[href]:focus,
    .label-primary[href]:hover {
        background-color: #ad230f
    }

    .label-success {
        background-color: #555
    }

    .label-success[href]:focus,
    .label-success[href]:hover {
        background-color: #3b3b3b
    }

    .label-info {
        background-color: #5bc0de
    }

    .label-info[href]:focus,
    .label-info[href]:hover {
        background-color: #31b0d5
    }

    .label-warning {
        background-color: #f0ad4e
    }

    .label-warning[href]:focus,
    .label-warning[href]:hover {
        background-color: #ec971f
    }

    .label-danger {
        background-color: #d9534f
    }

    .label-danger[href]:focus,
    .label-danger[href]:hover {
        background-color: #c9302c
    }

    .badge {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        color: #fff;
        vertical-align: middle;
        background-color: #999;
        border-radius: 10px
    }

    .badge:empty {
        display: none
    }

    .media-object,
    .thumbnail {
        display: block
    }

    .btn-group-xs>.btn .badge,
    .btn-xs .badge {
        top: 0;
        padding: 1px 5px
    }

    .list-group-item.active>.badge,
    .nav-pills>.active>a>.badge {
        color: #dc2d13;
        background-color: #fff
    }

    .jumbotron,
    .jumbotron .h1,
    .jumbotron h1 {
        color: inherit
    }

    .list-group-item>.badge+.badge {
        margin-right: 5px
    }

    .nav-pills>li>a>.badge {
        margin-left: 3px
    }

    .jumbotron {
        padding-top: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;
        background-color: #eee
    }

    .jumbotron p {
        margin-bottom: 15px;
        font-size: 20px;
        font-weight: 200
    }

    .alert,
    .thumbnail {
        margin-bottom: 18px
    }

    .alert .alert-link,
    .close,
    .panel-title {
        font-weight: 700
    }

    .jumbotron>hr {
        border-top-color: #d5d5d5
    }

    .container .jumbotron,
    .container-fluid .jumbotron {
        border-radius: 6px
    }

    .jumbotron .container {
        max-width: 100%
    }

    @media screen and (min-width:768px) {
        .jumbotron {
            padding-top: 48px;
            padding-bottom: 48px
        }

        .container .jumbotron,
        .container-fluid .jumbotron {
            padding-left: 60px;
            padding-right: 60px
        }

        .jumbotron .h1,
        .jumbotron h1 {
            font-size: 59px
        }
    }

    .thumbnail {
        padding: 4px;
        line-height: 1.42857143;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out
    }

    .thumbnail a>img,
    .thumbnail>img {
        margin-left: auto;
        margin-right: auto
    }

    a.thumbnail.active,
    a.thumbnail:focus,
    a.thumbnail:hover {
        border-color: #dc2d13
    }

    .thumbnail .caption {
        padding: 9px;
        color: #333
    }

    .alert {
        padding: 15px;
        border: 1px solid transparent;
        border-radius: 4px
    }

    .alert h4 {
        margin-top: 0;
        color: inherit
    }

    .alert>p,
    .alert>ul {
        margin-bottom: 0
    }

    .alert>p+p {
        margin-top: 5px
    }

    .alert-dismissable,
    .alert-dismissible {
        padding-right: 35px
    }

    .alert-dismissable .close,
    .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit
    }

    .modal,
    .modal-backdrop {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    .alert-success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d
    }

    .alert-success hr {
        border-top-color: #c9e2b3
    }

    .alert-success .alert-link {
        color: #2b542c
    }

    .alert-info {
        background-color: #d9edf7;
        border-color: #bce8f1;
        color: #31708f
    }

    .alert-info hr {
        border-top-color: #a6e1ec
    }

    .alert-info .alert-link {
        color: #245269
    }

    .alert-warning {
        background-color: #fcf8e3;
        border-color: #faebcc;
        color: #8a6d3b
    }

    .alert-warning hr {
        border-top-color: #f7e1b5
    }

    .alert-warning .alert-link {
        color: #66512c
    }

    .alert-danger {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442
    }

    .alert-danger hr {
        border-top-color: #e4b9c0
    }

    .alert-danger .alert-link {
        color: #843534
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }

        to {
            background-position: 0 0
        }
    }

    @-o-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }

        to {
            background-position: 0 0
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 40px 0
        }

        to {
            background-position: 0 0
        }
    }

    .progress {
        height: 7px;
        margin-bottom: 18px;
        background-color: #f5f5f5;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
        box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .1);
        transform: skewX(25deg)
    }

    .progress-bar {
        float: left;
        width: 0%;
        height: 100%;
        font-size: 12px;
        line-height: 18px;
        color: #fff;
        text-align: center;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        -webkit-transition: width .6s ease;
        -o-transition: width .6s ease;
        transition: width .6s ease
    }

    .progress-bar-striped,
    .progress-striped .progress-bar {
        -webkit-background-size: 40px 40px;
        background-size: 40px 40px
    }

    .progress-bar.active,
    .progress.active .progress-bar {
        -webkit-animation: progress-bar-stripes 2s linear infinite;
        -o-animation: progress-bar-stripes 2s linear infinite;
        animation: progress-bar-stripes 2s linear infinite
    }

    .progress-bar-success {
        background-color: #555
    }

    .progress-striped .progress-bar-info,
    .progress-striped .progress-bar-warning {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .progress-bar-info {
        background-color: #5bc0de
    }

    .progress-bar-warning {
        background-color: #f0ad4e
    }

    .progress-bar-danger {
        background-color: #d9534f
    }

    .progress-striped .progress-bar-danger {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
    }

    .media {
        margin-top: 15px
    }

    .media:first-child {
        margin-top: 0
    }

    .media,
    .media-body {
        zoom: 1;
        overflow: hidden
    }

    .media-body {
        width: 10000px
    }

    .media-object.img-thumbnail {
        max-width: none
    }

    .media-right,
    .media>.pull-right {
        padding-left: 10px
    }

    .media-left,
    .media>.pull-left {
        padding-right: 10px
    }

    .media-body,
    .media-left,
    .media-right {
        display: table-cell;
        vertical-align: top
    }

    .jelect,
    .media-middle {
        vertical-align: middle
    }

    .media-bottom {
        vertical-align: bottom
    }

    .media-heading {
        margin-top: 0;
        margin-bottom: 5px
    }

    .media-list {
        padding-left: 0
    }

    .list-group {
        margin-bottom: 20px;
        padding-left: 0
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 10px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd
    }

    .list-group-item:first-child {
        border-top-right-radius: 4px;
        border-top-left-radius: 4px
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
    }

    a.list-group-item,
    button.list-group-item {
        color: #555
    }

    a.list-group-item .list-group-item-heading,
    button.list-group-item .list-group-item-heading {
        color: #333
    }

    a.list-group-item:focus,
    a.list-group-item:hover,
    button.list-group-item:focus,
    button.list-group-item:hover {
        text-decoration: none;
        color: #555;
        background-color: #f5f5f5
    }

    button.list-group-item {
        width: 100%;
        text-align: left
    }

    .list-group-item.disabled,
    .list-group-item.disabled:focus,
    .list-group-item.disabled:hover {
        background-color: #eee;
        color: #999;
        cursor: not-allowed
    }

    .list-group-item.disabled .list-group-item-heading,
    .list-group-item.disabled:focus .list-group-item-heading,
    .list-group-item.disabled:hover .list-group-item-heading {
        color: inherit
    }

    .list-group-item.disabled .list-group-item-text,
    .list-group-item.disabled:focus .list-group-item-text,
    .list-group-item.disabled:hover .list-group-item-text {
        color: #999
    }

    .list-group-item.active,
    .list-group-item.active:focus,
    .list-group-item.active:hover {
        z-index: 2;
        color: #fff;
        background-color: #dc2d13;
        border-color: #dc2d13
    }

    .list-group-item.active .list-group-item-heading,
    .list-group-item.active .list-group-item-heading>.small,
    .list-group-item.active .list-group-item-heading>small,
    .list-group-item.active:focus .list-group-item-heading,
    .list-group-item.active:focus .list-group-item-heading>.small,
    .list-group-item.active:focus .list-group-item-heading>small,
    .list-group-item.active:hover .list-group-item-heading,
    .list-group-item.active:hover .list-group-item-heading>.small,
    .list-group-item.active:hover .list-group-item-heading>small {
        color: inherit
    }

    .list-group-item.active .list-group-item-text,
    .list-group-item.active:focus .list-group-item-text,
    .list-group-item.active:hover .list-group-item-text {
        color: #fac9c1
    }

    .list-group-item-success {
        color: #3c763d;
        background-color: #dff0d8
    }

    a.list-group-item-success,
    button.list-group-item-success {
        color: #3c763d
    }

    a.list-group-item-success .list-group-item-heading,
    button.list-group-item-success .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-success:focus,
    a.list-group-item-success:hover,
    button.list-group-item-success:focus,
    button.list-group-item-success:hover {
        color: #3c763d;
        background-color: #d0e9c6
    }

    a.list-group-item-success.active,
    a.list-group-item-success.active:focus,
    a.list-group-item-success.active:hover,
    button.list-group-item-success.active,
    button.list-group-item-success.active:focus,
    button.list-group-item-success.active:hover {
        color: #fff;
        background-color: #3c763d;
        border-color: #3c763d
    }

    .list-group-item-info {
        color: #31708f;
        background-color: #d9edf7
    }

    a.list-group-item-info,
    button.list-group-item-info {
        color: #31708f
    }

    a.list-group-item-info .list-group-item-heading,
    button.list-group-item-info .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-info:focus,
    a.list-group-item-info:hover,
    button.list-group-item-info:focus,
    button.list-group-item-info:hover {
        color: #31708f;
        background-color: #c4e3f3
    }

    a.list-group-item-info.active,
    a.list-group-item-info.active:focus,
    a.list-group-item-info.active:hover,
    button.list-group-item-info.active,
    button.list-group-item-info.active:focus,
    button.list-group-item-info.active:hover {
        color: #fff;
        background-color: #31708f;
        border-color: #31708f
    }

    .list-group-item-warning {
        color: #8a6d3b;
        background-color: #fcf8e3
    }

    a.list-group-item-warning,
    button.list-group-item-warning {
        color: #8a6d3b
    }

    a.list-group-item-warning .list-group-item-heading,
    button.list-group-item-warning .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-warning:focus,
    a.list-group-item-warning:hover,
    button.list-group-item-warning:focus,
    button.list-group-item-warning:hover {
        color: #8a6d3b;
        background-color: #faf2cc
    }

    a.list-group-item-warning.active,
    a.list-group-item-warning.active:focus,
    a.list-group-item-warning.active:hover,
    button.list-group-item-warning.active,
    button.list-group-item-warning.active:focus,
    button.list-group-item-warning.active:hover {
        color: #fff;
        background-color: #8a6d3b;
        border-color: #8a6d3b
    }

    .list-group-item-danger {
        color: #a94442;
        background-color: #f2dede
    }

    a.list-group-item-danger,
    button.list-group-item-danger {
        color: #a94442
    }

    a.list-group-item-danger .list-group-item-heading,
    button.list-group-item-danger .list-group-item-heading {
        color: inherit
    }

    a.list-group-item-danger:focus,
    a.list-group-item-danger:hover,
    button.list-group-item-danger:focus,
    button.list-group-item-danger:hover {
        color: #a94442;
        background-color: #ebcccc
    }

    a.list-group-item-danger.active,
    a.list-group-item-danger.active:focus,
    a.list-group-item-danger.active:hover,
    button.list-group-item-danger.active,
    button.list-group-item-danger.active:focus,
    button.list-group-item-danger.active:hover {
        color: #fff;
        background-color: #a94442;
        border-color: #a94442
    }

    .panel-heading>.dropdown .dropdown-toggle,
    .panel-title>.small,
    .panel-title>.small>a,
    .panel-title>a,
    .panel-title>small,
    .panel-title>small>a {
        color: inherit
    }

    .list-group-item-heading {
        margin-top: 0;
        margin-bottom: 5px
    }

    .list-group-item-text {
        margin-bottom: 0;
        line-height: 1.3
    }

    .panel {
        margin-bottom: 18px;
        background-color: #fff;
        margin-left: 33px
    }

    .panel-body {
        padding: 0 15px
    }

    .panel-body p {
        margin-bottom: 15px
    }

    .panel-title,
    .panel>.list-group,
    .panel>.panel-collapse>.list-group,
    .panel>.panel-collapse>.table,
    .panel>.table,
    .panel>.table-responsive>.table {
        margin-bottom: 0
    }

    .panel-heading {
        padding: 25px 15px 17px
    }

    .panel-title {
        margin-top: 0;
        font-size: 14px;
        font-family: Raleway
    }

    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .panel>.list-group .list-group-item,
    .panel>.panel-collapse>.list-group .list-group-item {
        border-width: 1px 0;
        border-radius: 0
    }

    .panel>.table-responsive:last-child>.table:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,
    .panel>.table:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child {
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px
    }

    .panel>.list-group:first-child .list-group-item:first-child,
    .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
        border-top: 0;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .panel>.list-group:last-child .list-group-item:last-child,
    .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
        border-bottom: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0
    }

    .panel>.table-responsive:first-child>.table:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
    .panel>.table:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child {
        border-top-right-radius: 3px;
        border-top-left-radius: 3px
    }

    .list-group+.panel-footer,
    .panel-heading+.list-group .list-group-item:first-child {
        border-top-width: 0
    }

    .panel>.panel-collapse>.table caption,
    .panel>.table caption,
    .panel>.table-responsive>.table caption {
        padding-left: 15px;
        padding-right: 15px
    }

    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
        border-top-left-radius: 3px
    }

    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
        border-top-right-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
        border-bottom-left-radius: 3px
    }

    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
        border-bottom-right-radius: 3px
    }

    .panel>.panel-body+.table,
    .panel>.panel-body+.table-responsive,
    .panel>.table+.panel-body,
    .panel>.table-responsive+.panel-body {
        border-top: 1px solid #ddd
    }

    .panel>.table>tbody:first-child>tr:first-child td,
    .panel>.table>tbody:first-child>tr:first-child th {
        border-top: 0
    }

    .panel>.table-bordered,
    .panel>.table-responsive>.table-bordered {
        border: 0
    }

    .panel>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-bordered>thead>tr>td:first-child,
    .panel>.table-bordered>thead>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
        border-left: 0
    }

    .panel>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-bordered>thead>tr>td:last-child,
    .panel>.table-bordered>thead>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
        border-right: 0
    }

    .panel>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-bordered>thead>tr:first-child>td,
    .panel>.table-bordered>thead>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
        border-bottom: 0
    }

    .panel>.table-responsive {
        border: 0;
        margin-bottom: 0
    }

    .panel-group {
        margin-bottom: 10px;
        background-color: #fff;
        padding-bottom: 35px
    }

    .panel-group .panel {
        margin-bottom: 0;
        padding-left: 27px
    }

    .panel-group .panel+.panel {
        margin-top: 5px;
        border-top: 1px solid #eee
    }

    .panel-group .panel-heading {
        position: relative;
        color: #999
    }

    .panel-group .panel-footer {
        border-top: 0
    }

    .panel-group .panel-footer+.panel-collapse .panel-body {
        border-bottom: 1px solid #ddd
    }

    .panel-default>.panel-heading {
        color: #222
    }

    .panel-default>.panel-heading .badge {
        color: #f5f5f5;
        background-color: #333
    }

    .panel-default>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #ddd
    }

    .panel-primary {
        border-color: #dc2d13
    }

    .panel-primary>.panel-heading {
        color: #fff;
        background-color: #dc2d13;
        border-color: #dc2d13
    }

    .panel-primary>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #dc2d13
    }

    .panel-primary>.panel-heading .badge {
        color: #dc2d13;
        background-color: #fff
    }

    .panel-primary>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #dc2d13
    }

    .panel-success {
        border-color: #d6e9c6
    }

    .panel-success>.panel-heading {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6
    }

    .panel-success>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #d6e9c6
    }

    .panel-success>.panel-heading .badge {
        color: #dff0d8;
        background-color: #3c763d
    }

    .panel-success>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #d6e9c6
    }

    .panel-info {
        border-color: #bce8f1
    }

    .panel-info>.panel-heading {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1
    }

    .panel-info>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #bce8f1
    }

    .panel-info>.panel-heading .badge {
        color: #d9edf7;
        background-color: #31708f
    }

    .panel-info>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #bce8f1
    }

    .panel-warning {
        border-color: #faebcc
    }

    .panel-warning>.panel-heading {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc
    }

    .panel-warning>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #faebcc
    }

    .panel-warning>.panel-heading .badge {
        color: #fcf8e3;
        background-color: #8a6d3b
    }

    .panel-warning>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #faebcc
    }

    .panel-danger {
        border-color: #ebccd1
    }

    .panel-danger>.panel-heading {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1
    }

    .panel-danger>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #ebccd1
    }

    .panel-danger>.panel-heading .badge {
        color: #f2dede;
        background-color: #a94442
    }

    .panel-danger>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #ebccd1
    }

    .embed-responsive {
        position: relative;
        display: block;
        height: 0;
        padding: 0
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive embed,
    .embed-responsive iframe,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        border: 0
    }

    .embed-responsive-16by9 {
        padding-bottom: 56.25%
    }

    .embed-responsive-4by3 {
        padding-bottom: 75%
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
    }

    .well blockquote {
        border-color: #ddd;
        border-color: rgba(0, 0, 0, .15)
    }

    .well-lg {
        padding: 24px;
        border-radius: 6px
    }

    .well-sm {
        padding: 9px;
        border-radius: 3px
    }

    .close {
        font-size: 19.5px;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .2;
        filter: alpha(opacity=20)
    }

    .popover,
    .tooltip {
        font-family: Ubuntu, Helvetica, Arial, sans-serif;
        font-style: normal;
        letter-spacing: normal;
        line-break: auto;
        line-height: 1.42857143;
        text-shadow: none;
        text-transform: none;
        white-space: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal
    }

    .close:focus,
    .close:hover {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        opacity: .5;
        filter: alpha(opacity=50)
    }

    button.close {
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
        -webkit-appearance: none
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1050;
        -webkit-overflow-scrolling: touch;
        outline: 0
    }

    .modal.fade .modal-dialog {
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        -o-transform: translate(0, -25%);
        transform: translate(0, -25%);
        -webkit-transition: -webkit-transform .3s ease-out;
        -o-transition: -o-transform .3s ease-out;
        transition: transform .3s ease-out
    }

    .modal.in .modal-dialog {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px
    }

    .modal-content {
        position: relative;
        background-color: #fff;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        background-clip: padding-box;
        outline: 0
    }

    .modal-backdrop {
        position: fixed;
        z-index: 1040;
        background-color: #000
    }

    .modal-backdrop.fade {
        opacity: 0;
        filter: alpha(opacity=0)
    }

    .modal-backdrop.in {
        opacity: .5;
        filter: alpha(opacity=50)
    }

    .flex-direction-nav a,
    .tooltip {
        text-decoration: none;
        opacity: 0
    }

    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
        min-height: 16.43px
    }

    .modal-header .close {
        margin-top: -2px
    }

    .modal-title {
        margin: 0;
        line-height: 1.42857143
    }

    .modal-body {
        position: relative;
        padding: 20px
    }

    .modal-footer {
        padding: 20px;
        text-align: right;
        border-top: 1px solid #e5e5e5
    }

    .modal-footer .btn+.btn {
        margin-left: 5px;
        margin-bottom: 0
    }

    .modal-footer .btn-group .btn+.btn {
        margin-left: -1px
    }

    .modal-footer .btn-block+.btn-block {
        margin-left: 0
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    @media (min-width:768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto
        }

        .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
        }

        .modal-sm {
            width: 300px
        }
    }

    @media (min-width:992px) {
        .modal-lg {
            width: 900px
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        text-align: left;
        text-align: start;
        font-size: 12px;
        filter: alpha(opacity=0)
    }

    .tooltip.in {
        opacity: .9;
        filter: alpha(opacity=90)
    }

    .tooltip.top {
        margin-top: -3px;
        padding: 5px 0
    }

    .tooltip.right {
        margin-left: 3px;
        padding: 0 5px
    }

    .tooltip.bottom {
        margin-top: 3px;
        padding: 5px 0
    }

    .tooltip.left {
        margin-left: -3px;
        padding: 0 5px
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 3px 8px;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 4px
    }

    .tooltip-arrow {
        position: absolute;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }

    .tooltip.top .tooltip-arrow,
    .tooltip.top-left .tooltip-arrow,
    .tooltip.top-right .tooltip-arrow {
        bottom: 0;
        border-width: 5px 5px 0;
        border-top-color: #000
    }

    .tooltip.top .tooltip-arrow {
        left: 50%;
        margin-left: -5px
    }

    .tooltip.top-left .tooltip-arrow {
        right: 5px;
        margin-bottom: -5px
    }

    .tooltip.top-right .tooltip-arrow {
        left: 5px;
        margin-bottom: -5px
    }

    .tooltip.right .tooltip-arrow {
        top: 50%;
        left: 0;
        margin-top: -5px;
        border-width: 5px 5px 5px 0;
        border-right-color: #000
    }

    .tooltip.left .tooltip-arrow {
        top: 50%;
        right: 0;
        margin-top: -5px;
        border-width: 5px 0 5px 5px;
        border-left-color: #000
    }

    .tooltip.bottom .tooltip-arrow,
    .tooltip.bottom-left .tooltip-arrow,
    .tooltip.bottom-right .tooltip-arrow {
        border-width: 0 5px 5px;
        border-bottom-color: #000;
        top: 0
    }

    .tooltip.bottom .tooltip-arrow {
        left: 50%;
        margin-left: -5px
    }

    .tooltip.bottom-left .tooltip-arrow {
        right: 5px;
        margin-top: -5px
    }

    .tooltip.bottom-right .tooltip-arrow {
        left: 5px;
        margin-top: -5px
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: none;
        max-width: 276px;
        padding: 1px;
        text-align: left;
        text-align: start;
        text-decoration: none;
        font-size: 13px;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2)
    }

    .carousel-caption,
    .carousel-control {
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
    }

    .jelect-current,
    .jelect-option {
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .popover.top {
        margin-top: -10px
    }

    .popover.right {
        margin-left: 10px
    }

    .popover.bottom {
        margin-top: 10px
    }

    .popover.left {
        margin-left: -10px
    }

    .popover-title {
        margin: 0;
        padding: 8px 14px;
        font-size: 13px;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-radius: 5px 5px 0 0
    }

    .popover-content {
        padding: 9px 14px
    }

    .popover>.arrow,
    .popover>.arrow:after {
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid
    }

    .carousel,
    .carousel-inner {
        position: relative
    }

    .popover>.arrow {
        border-width: 11px
    }

    .popover>.arrow:after {
        border-width: 10px;
        content: ""
    }

    .popover.bottom>.arrow:after,
    .popover.left>.arrow:after,
    .popover.right>.arrow:after,
    .popover.top>.arrow:after {
        content: " "
    }

    .popover.top>.arrow {
        left: 50%;
        margin-left: -11px;
        border-bottom-width: 0;
        border-top-color: #999;
        border-top-color: rgba(0, 0, 0, .25);
        bottom: -11px
    }

    .popover.top>.arrow:after {
        bottom: 1px;
        margin-left: -10px;
        border-bottom-width: 0;
        border-top-color: #fff
    }

    .popover.right>.arrow {
        top: 50%;
        left: -11px;
        margin-top: -11px;
        border-left-width: 0;
        border-right-color: #999;
        border-right-color: rgba(0, 0, 0, .25)
    }

    .popover.right>.arrow:after {
        left: 1px;
        bottom: -10px;
        border-left-width: 0;
        border-right-color: #fff
    }

    .popover.bottom>.arrow {
        left: 50%;
        margin-left: -11px;
        border-top-width: 0;
        border-bottom-color: #999;
        border-bottom-color: rgba(0, 0, 0, .25);
        top: -11px
    }

    .popover.bottom>.arrow:after {
        top: 1px;
        margin-left: -10px;
        border-top-width: 0;
        border-bottom-color: #fff
    }

    .popover.left>.arrow {
        top: 50%;
        right: -11px;
        margin-top: -11px;
        border-right-width: 0;
        border-left-color: #999;
        border-left-color: rgba(0, 0, 0, .25)
    }

    .popover.left>.arrow:after {
        right: 1px;
        border-right-width: 0;
        border-left-color: #fff;
        bottom: -10px
    }

    .carousel-inner {
        overflow: hidden;
        width: 100%
    }

    .carousel-inner>.item {
        display: none;
        position: relative;
        -webkit-transition: .6s ease-in-out left;
        -o-transition: .6s ease-in-out left;
        transition: .6s ease-in-out left
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img {
        line-height: 1
    }

    @media all and (transform-3d),
    (-webkit-transform-3d) {
        .carousel-inner>.item {
            -webkit-transition: -webkit-transform .6s ease-in-out;
            -o-transition: -o-transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px
        }

        .carousel-inner>.item.active.right,
        .carousel-inner>.item.next {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            left: 0
        }

        .carousel-inner>.item.active.left,
        .carousel-inner>.item.prev {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            left: 0
        }

        .carousel-inner>.item.active,
        .carousel-inner>.item.next.left,
        .carousel-inner>.item.prev.right {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            left: 0
        }
    }

    .carousel-inner>.active,
    .carousel-inner>.next,
    .carousel-inner>.prev {
        display: block
    }

    .carousel-inner>.active {
        left: 0
    }

    .carousel-inner>.next,
    .carousel-inner>.prev {
        position: absolute;
        top: 0;
        width: 100%
    }

    .carousel-inner>.next {
        left: 100%
    }

    .carousel-inner>.prev {
        left: -100%
    }

    .carousel-inner>.next.left,
    .carousel-inner>.prev.right {
        left: 0
    }

    .carousel-inner>.active.left {
        left: -100%
    }

    .carousel-inner>.active.right {
        left: 100%
    }

    .carousel-control {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 15%;
        opacity: .5;
        filter: alpha(opacity=50);
        font-size: 20px
    }

    .carousel-control.left {
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
        background-repeat: repeat-x;
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1)
    }

    .carousel-control.right {
        left: auto;
        right: 0;
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
        background-repeat: repeat-x;
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1)
    }

    .carousel-control:focus,
    .carousel-control:hover {
        outline: 0;
        color: #fff;
        text-decoration: none;
        opacity: .9;
        filter: alpha(opacity=90)
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next,
    .carousel-control .icon-prev {
        position: absolute;
        top: 50%;
        margin-top: -10px;
        z-index: 5;
        display: inline-block
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .icon-prev {
        left: 50%;
        margin-left: -10px
    }

    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next {
        right: 50%;
        margin-right: -10px
    }

    .carousel-control .icon-next,
    .carousel-control .icon-prev {
        width: 20px;
        height: 20px;
        line-height: 1;
        font-family: serif
    }

    .carousel-control .icon-prev:before {
        content: '\2039'
    }

    .carousel-control .icon-next:before {
        content: '\203a'
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        margin-left: -30%;
        padding-left: 0;
        text-align: center
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        border: 1px solid #fff;
        border-radius: 10px;
        cursor: pointer;
        background-color: #000\9;
        background-color: rgba(0, 0, 0, 0)
    }

    .carousel-indicators .active {
        margin: 0;
        width: 12px;
        height: 12px;
        background-color: #fff
    }

    .carousel-caption {
        position: absolute;
        left: 15%;
        right: 15%;
        bottom: 20px;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px
    }

    .carousel-caption .btn,
    .text-hide {
        text-shadow: none
    }

    @media screen and (min-width:768px) {

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            width: 30px;
            height: 30px;
            margin-top: -15px;
            font-size: 30px
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            margin-left: -15px
        }

        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            margin-right: -15px
        }

        .carousel-caption {
            left: 20%;
            right: 20%;
            padding-bottom: 30px
        }

        .carousel-indicators {
            bottom: 20px
        }
    }

    .btn-group-vertical>.btn-group:after,
    .btn-group-vertical>.btn-group:before,
    .btn-toolbar:after,
    .btn-toolbar:before,
    .clearfix:after,
    .clearfix:before,
    .container-fluid:after,
    .container-fluid:before,
    .container:after,
    .container:before,
    .dl-horizontal dd:after,
    .dl-horizontal dd:before,
    .form-horizontal .form-group:after,
    .form-horizontal .form-group:before,
    .modal-footer:after,
    .modal-footer:before,
    .nav:after,
    .nav:before,
    .navbar-collapse:after,
    .navbar-collapse:before,
    .navbar-header:after,
    .navbar-header:before,
    .navbar:after,
    .navbar:before,
    .pager:after,
    .pager:before,
    .panel-body:after,
    .panel-body:before,
    .row:after,
    .row:before {
        content: " ";
        display: table
    }

    .btn-group-vertical>.btn-group:after,
    .btn-toolbar:after,
    .clearfix:after,
    .container-fluid:after,
    .container:after,
    .dl-horizontal dd:after,
    .form-horizontal .form-group:after,
    .modal-footer:after,
    .nav:after,
    .navbar-collapse:after,
    .navbar-header:after,
    .navbar:after,
    .pager:after,
    .panel-body:after,
    .row:after {
        clear: both
    }

    .center-block {
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .pull-right {
        float: right !important
    }

    .pull-left {
        float: left !important
    }

    .hide {
        display: none !important
    }

    .show {
        display: block !important
    }

    .hidden,
    .visible-lg,
    .visible-lg-block,
    .visible-lg-inline,
    .visible-lg-inline-block,
    .visible-md,
    .visible-md-block,
    .visible-md-inline,
    .visible-md-inline-block,
    .visible-sm,
    .visible-sm-block,
    .visible-sm-inline,
    .visible-sm-inline-block,
    .visible-xs,
    .visible-xs-block,
    .visible-xs-inline,
    .visible-xs-inline-block {
        display: none !important
    }

    .invisible {
        visibility: hidden
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        background-color: transparent;
        border: 0
    }

    .flex-direction-nav a,
    .flex-direction-nav a:before {
        color: rgba(0, 0, 0, .8);
        text-shadow: 1px 1px 0 rgba(255, 255, 255, .3)
    }

    .affix {
        position: fixed
    }

    @-ms-viewport {
        width: device-width
    }

    @media (max-width:767px) {
        .visible-xs {
            display: block !important
        }

        table.visible-xs {
            display: table !important
        }

        tr.visible-xs {
            display: table-row !important
        }

        td.visible-xs,
        th.visible-xs {
            display: table-cell !important
        }

        .visible-xs-block {
            display: block !important
        }

        .visible-xs-inline {
            display: inline !important
        }

        .visible-xs-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width:768px) and (max-width:991px) {
        .visible-sm {
            display: block !important
        }

        table.visible-sm {
            display: table !important
        }

        tr.visible-sm {
            display: table-row !important
        }

        td.visible-sm,
        th.visible-sm {
            display: table-cell !important
        }

        .visible-sm-block {
            display: block !important
        }

        .visible-sm-inline {
            display: inline !important
        }

        .visible-sm-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width:992px) and (max-width:1199px) {
        .visible-md {
            display: block !important
        }

        table.visible-md {
            display: table !important
        }

        tr.visible-md {
            display: table-row !important
        }

        td.visible-md,
        th.visible-md {
            display: table-cell !important
        }

        .visible-md-block {
            display: block !important
        }

        .visible-md-inline {
            display: inline !important
        }

        .visible-md-inline-block {
            display: inline-block !important
        }
    }

    @media (min-width:1200px) {
        .visible-lg {
            display: block !important
        }

        table.visible-lg {
            display: table !important
        }

        tr.visible-lg {
            display: table-row !important
        }

        td.visible-lg,
        th.visible-lg {
            display: table-cell !important
        }

        .visible-lg-block {
            display: block !important
        }

        .visible-lg-inline {
            display: inline !important
        }

        .visible-lg-inline-block {
            display: inline-block !important
        }

        .hidden-lg {
            display: none !important
        }
    }

    @media (max-width:767px) {
        .hidden-xs {
            display: none !important
        }
    }

    @media (min-width:768px) and (max-width:991px) {
        .hidden-sm {
            display: none !important
        }
    }

    @media (min-width:992px) and (max-width:1199px) {
        .hidden-md {
            display: none !important
        }
    }

    .visible-print {
        display: none !important
    }

    @media print {
        .visible-print {
            display: block !important
        }

        table.visible-print {
            display: table !important
        }

        tr.visible-print {
            display: table-row !important
        }

        td.visible-print,
        th.visible-print {
            display: table-cell !important
        }
    }

    .visible-print-block {
        display: none !important
    }

    @media print {
        .visible-print-block {
            display: block !important
        }
    }

    .visible-print-inline {
        display: none !important
    }

    @media print {
        .visible-print-inline {
            display: inline !important
        }
    }

    .visible-print-inline-block {
        display: none !important
    }

    @media print {
        .visible-print-inline-block {
            display: inline-block !important
        }

        .hidden-print {
            display: none !important
        }
    }

    @font-face {
        font-family: flexslider-icon;
        src: url(fonts/flexslider-icon.eot);
        /* src: url(fonts/flexslider-icon.eot?#iefix) format('embedded-opentype'), url(fonts/flexslider-icon.woff) format('woff'), url(fonts/flexslider-icon.ttf) format('truetype'), url(fonts/flexslider-icon.svg#flexslider-icon) format('svg'); */
        font-weight: 400;
        font-style: normal
    }

    .flex-container a:focus,
    .flex-container a:hover,
    .flex-slider a:focus,
    .flex-slider a:hover {
        outline: 0
    }

    .flex-control-nav,
    .flex-direction-nav,
    .slides,
    .slides>li {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .flex-pauseplay span {
        text-transform: capitalize
    }

    .flexslider {
        padding: 0;
        margin: 0 0 8px;
        position: relative;
        zoom: 1;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: ''0 1px 4px rgba(0, 0, 0, .2);
        -moz-box-shadow: ''0 1px 4px rgba(0, 0, 0, .2);
        -o-box-shadow: ''0 1px 4px rgba(0, 0, 0, .2);
        box-shadow: ''0 1px 4px rgba(0, 0, 0, .2)
    }

    .flexslider .slides>li {
        display: none;
        -webkit-backface-visibility: hidden;
        cursor: pointer
    }

    .flexslider .slides:after {
        content: "\0020";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0
    }

    html[xmlns] .flexslider .slides {
        display: block
    }

    * html .flexslider .slides {
        height: 1%
    }

    .no-js .flexslider .slides>li:first-child {
        display: block
    }

    .flexslider .slides {
        zoom: 1
    }

    .flexslider .slides img {
        display: block;
        max-width: 100%;
        height: auto
    }

    .flex-viewport {
        max-height: 2000px;
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -ms-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease
    }

    .loading .flex-viewport {
        max-height: 300px
    }

    .carousel li {
        margin-right: 5px
    }

    .carousel-product {
        margin-bottom: 30px
    }

    .carousel-product .slides>li {
        position: relative;
        margin-right: 10px
    }

    .carousel-product .slides>li:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, .6);
        transition: all .3s
    }

    .carousel-product .slides>li:hover:after {
        background-color: rgba(0, 0, 0, 0)
    }

    .flex-direction-nav a {
        display: block;
        width: 40px;
        height: 40px;
        margin: -20px 0 0;
        position: absolute;
        top: 50%;
        z-index: 10;
        overflow: hidden;
        cursor: pointer;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out
    }

    .flex-direction-nav a:focus {
        outline-style: none
    }

    .jelect-current:focus,
    .jelect:focus {
        outline: 0
    }

    .flex-direction-nav a:before {
        font-family: flexslider-icon;
        font-size: 40px;
        display: inline-block;
        content: '\f001';
        line-height: 1
    }

    .flex-direction-nav a.flex-next:before {
        content: '\f002'
    }

    .flex-direction-nav .flex-prev {
        left: -50px
    }

    .flex-direction-nav .flex-next {
        right: -50px;
        text-align: right
    }

    .flexslider:hover .flex-direction-nav .flex-prev {
        opacity: .7;
        left: 10px
    }

    .flexslider:hover .flex-direction-nav .flex-prev:hover {
        opacity: 1
    }

    .flexslider:hover .flex-direction-nav .flex-next {
        opacity: .7;
        right: 10px
    }

    .flexslider:hover .flex-direction-nav .flex-next:hover {
        opacity: 1
    }

    .flex-direction-nav .flex-disabled {
        opacity: 0 !important;
        filter: alpha(opacity=0);
        cursor: default
    }

    .flex-pauseplay a {
        display: block;
        width: 20px;
        height: 20px;
        position: absolute;
        bottom: 5px;
        left: 10px;
        opacity: .8;
        z-index: 10;
        overflow: hidden;
        cursor: pointer;
        color: #000
    }

    .flex-pauseplay a:before {
        font-family: flexslider-icon;
        font-size: 20px;
        display: inline-block;
        content: '\f004'
    }

    .flex-pauseplay a:hover {
        opacity: 1
    }

    .flex-pauseplay a.flex-play:before {
        content: '\f003'
    }

    .flex-control-nav {
        width: 100%;
        position: absolute;
        bottom: -40px;
        text-align: center
    }

    .flex-control-nav li {
        margin: 0 6px;
        display: inline-block;
        zoom: 1
    }

    .flex-control-paging li a {
        width: 11px;
        height: 11px;
        display: block;
        background: #666;
        background: rgba(0, 0, 0, .5);
        cursor: pointer;
        text-indent: -9999px;
        -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
        -moz-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
        -o-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
        box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px
    }

    .flex-control-paging li a:hover {
        background: #333;
        background: rgba(0, 0, 0, .7)
    }

    .flex-control-paging li a.flex-active {
        background: #000;
        background: rgba(0, 0, 0, .9);
        cursor: default
    }

    .flex-control-thumbs {
        margin: 5px 0 0;
        position: static;
        overflow: hidden
    }

    .flex-control-thumbs li {
        width: 25%;
        float: left;
        margin: 0
    }

    .jelect-current:after,
    .jelect-current:before {
        top: 0;
        margin: auto;
        content: ''
    }

    .flex-control-thumbs img {
        width: 100%;
        height: auto;
        display: block;
        opacity: .7;
        cursor: pointer;
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -ms-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease
    }

    .flex-control-thumbs img:hover {
        opacity: 1
    }

    .flex-control-thumbs .flex-active {
        opacity: 1;
        cursor: default
    }

    @media screen and (max-width:860px) {
        .flex-direction-nav .flex-prev {
            opacity: 1;
            left: 10px
        }

        .flex-direction-nav .flex-next {
            opacity: 1;
            right: 10px
        }
    }

    .jelect {
        position: relative;
        display: inline-block;
        cursor: pointer;
        user-select: none;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        color: #888
    }

    .jelect-input {
        display: none !important
    }

    .jelect-current {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        padding: 11px 36px 11px 24px;
        overflow-wrap: normal;
        clip-path: polygon(7% 0, 100% 0, 93% 100%, 0 100%);
        background-color: #f5f5f5;
        font-size: 12px;
        color: #999;
        -webkit-clip-path: polygon(7% 0, 100% 0, 93% 100%, 0 100%)
    }

    .jelect-current:before {
        position: absolute;
        left: 10px;
        bottom: 0;
        display: block;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat
    }

    .jelect-current:after {
        position: absolute;
        right: 18px;
        bottom: 1px;
        width: 0;
        height: 0;
        border-top: 5px solid #555;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent
    }

    .jelect-options {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 2000;
        margin-top: 1px;
        display: none;
        max-height: 194px;
        overflow-y: auto;
        overflow-x: hidden;
        padding-left: 0;
        background: #fff;
        box-shadow: 1px 1px 4px 1px #eee
    }

    .jelect-options_state_active {
        display: block
    }

    .jelect-option {
        position: relative;
        overflow: hidden;
        margin-bottom: 1px;
        padding: 8px 16px;
        display: block;
        height: 38px;
        font-size: 13px;
        line-height: 22px;
        color: #222;
        box-shadow: 0 1px 0 #ccc;
        overflow-wrap: normal;
        -webkit-transition: 125ms ease-out;
        -o-transition: 125ms ease-out;
        transition: 125ms ease-out
    }

    .jelect-option:last-child {
        margin-bottom: 0;
        box-shadow: none
    }

    .jelect-option:hover,
    .jelect-option_state_active {
        text-decoration: underline;
        color: #fff
    }

    .jelect-option:before {
        position: absolute;
        top: 0;
        left: 10px;
        bottom: 0;
        margin: auto;
        display: block;
        width: 16px;
        height: 16px;
        background-repeat: no-repeat;
        content: ''
    }

    .cd-product-viewer-wrapper {
        text-align: center;
        padding: 0
    }

    .cd-product-viewer-wrapper>div {
        display: inline-block;
        width: 100%
    }

    .cd-product-viewer-wrapper .product-viewer {
        position: relative;
        z-index: 1;
        display: inline-block;
        overflow: hidden;
        width: 100%;
        min-height: 560px
    }

    .cd-product-viewer-wrapper img {
        display: block;
        position: relative;
        z-index: 1
    }

    .cd-product-viewer-wrapper .product-sprite {
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        height: 100%;
        width: 1600%;
        background: url(../img/img-sprite.png) center center no-repeat;
        background-size: 100%;
        opacity: 0;
        -webkit-transition: opacity .3s;
        -moz-transition: opacity .3s;
        transition: opacity .3s
    }

    .cd-product-viewer-wrapper.loaded .product-sprite {
        opacity: 1;
        cursor: ew-resize
    }

    .cd-product-viewer-handle {
        position: relative;
        z-index: 2;
        width: 60%;
        max-width: 300px;
        border-radius: 50em;
        margin: 1em auto 3em;
        height: 4px;
        background: #4d4d4d
    }

    .cd-product-viewer-handle .fill {
        position: absolute;
        z-index: 1;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        border-radius: inherit;
        background: #b54240;
        -webkit-transform: scaleX(0);
        -moz-transform: scaleX(0);
        -ms-transform: scaleX(0);
        -o-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: left center;
        -moz-transform-origin: left center;
        -ms-transform-origin: left center;
        -o-transform-origin: left center;
        transform-origin: left center;
        -webkit-transition: -webkit-transform .5s;
        -moz-transition: -moz-transform .5s;
        transition: transform .5s
    }

    .no-csstransitions .cd-product-viewer-handle .fill {
        display: none
    }

    .loaded .cd-product-viewer-handle .fill {
        opacity: 0;
        -webkit-transition: -webkit-transform .3s, opacity .2s .3s;
        -moz-transition: -moz-transform .3s, opacity .2s .3s;
        transition: transform .3s, opacity .2s .3s
    }

    .cd-product-viewer-handle .handle {
        position: absolute;
        z-index: 2;
        display: inline-block;
        height: 44px;
        width: 44px;
        left: 0;
        top: -20px;
        background: url(../img/cd-arrows.svg) center center no-repeat #b54240;
        border-radius: 50%;
        box-shadow: 0 0 0 6px rgba(181, 66, 64, .3), 0 0 20px rgba(0, 0, 0, .2);
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
        color: transparent;
        -webkit-transform: translateX(-50%) scale(0);
        -moz-transform: translateX(-50%) scale(0);
        -ms-transform: translateX(-50%) scale(0);
        -o-transform: translateX(-50%) scale(0);
        transform: translateX(-50%) scale(0);
        -webkit-transition: box-shadow .2s;
        -moz-transition: box-shadow .2s;
        transition: box-shadow .2s
    }

    .cd-product-viewer-handle .handle:active {
        box-shadow: 0 0 0 0 rgba(181, 66, 64, 0), 0 0 20px rgba(0, 0, 0, .2)
    }

    .loaded .cd-product-viewer-handle .handle {
        -webkit-transform: translateX(-50%) scale(1);
        -moz-transform: translateX(-50%) scale(1);
        -ms-transform: translateX(-50%) scale(1);
        -o-transform: translateX(-50%) scale(1);
        transform: translateX(-50%) scale(1);
        -webkit-animation: cd-bounce .3s .3s;
        -moz-animation: cd-bounce .3s .3s;
        animation: cd-bounce .3s .3s;
        -webkit-animation-fill-mode: both;
        -moz-animation-fill-mode: both;
        animation-fill-mode: both;
        cursor: ew-resize
    }

    @-webkit-keyframes cd-bounce {
        0% {
            -webkit-transform: translateX(-50%) scale(0)
        }

        60% {
            -webkit-transform: translateX(-50%) scale(1.1)
        }

        100% {
            -webkit-transform: translateX(-50%) scale(1)
        }
    }

    @-moz-keyframes cd-bounce {
        0% {
            -moz-transform: translateX(-50%) scale(0)
        }

        60% {
            -moz-transform: translateX(-50%) scale(1.1)
        }

        100% {
            -moz-transform: translateX(-50%) scale(1)
        }
    }

    @keyframes cd-bounce {
        0% {
            -webkit-transform: translateX(-50%) scale(0);
            -moz-transform: translateX(-50%) scale(0);
            -ms-transform: translateX(-50%) scale(0);
            -o-transform: translateX(-50%) scale(0);
            transform: translateX(-50%) scale(0)
        }

        60% {
            -webkit-transform: translateX(-50%) scale(1.1);
            -moz-transform: translateX(-50%) scale(1.1);
            -ms-transform: translateX(-50%) scale(1.1);
            -o-transform: translateX(-50%) scale(1.1);
            transform: translateX(-50%) scale(1.1)
        }

        100% {
            -webkit-transform: translateX(-50%) scale(1);
            -moz-transform: translateX(-50%) scale(1);
            -ms-transform: translateX(-50%) scale(1);
            -o-transform: translateX(-50%) scale(1);
            transform: translateX(-50%) scale(1)
        }
    }

    /*! Swipebox v1.3.0 | Constantin Saguin csag.co | MIT License | github.com/brutaldesign/swipebox */
    html.swipebox-html.swipebox-touch {
        overflow: hidden !important
    }

    #swipebox-overlay img {
        border: none !important
    }

    #swipebox-overlay {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 99999 !important;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    #swipebox-container {
        position: relative;
        width: 100%;
        height: 100%
    }

    #swipebox-slider {
        -webkit-transition: -webkit-transform .4s ease;
        transition: transform .4s ease;
        height: 100%;
        left: 0;
        top: 0;
        width: 100%;
        white-space: nowrap;
        position: absolute;
        display: none;
        cursor: pointer
    }

    #swipebox-slider .slide {
        height: 100%;
        width: 100%;
        line-height: 1px;
        text-align: center;
        display: inline-block
    }

    #swipebox-slider .slide:before {
        content: "";
        display: inline-block;
        height: 50%;
        width: 1px;
        margin-right: -1px
    }

    #swipebox-slider .slide .swipebox-inline-container,
    #swipebox-slider .slide .swipebox-video-container,
    #swipebox-slider .slide img {
        display: inline-block;
        max-height: 100%;
        max-width: 100%;
        margin: 0;
        padding: 0;
        width: auto;
        height: auto;
        vertical-align: middle
    }

    #swipebox-slider .slide .swipebox-video-container {
        background: 0 0;
        max-width: 1140px;
        max-height: 100%;
        width: 100%;
        padding: 5%;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    #swipebox-slider .slide .swipebox-video-container .swipebox-video {
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        overflow: hidden;
        position: relative
    }

    #swipebox-slider .slide .swipebox-video-container .swipebox-video iframe {
        width: 100% !important;
        height: 100% !important;
        position: absolute;
        top: 0;
        left: 0
    }

    #swipebox-slider .slide-loading {
        background: url(../img/loader.gif) center center no-repeat
    }

    #swipebox-bottom-bar,
    #swipebox-top-bar {
        -webkit-transition: .5s;
        transition: .5s;
        position: absolute;
        left: 0;
        z-index: 999;
        height: 50px;
        width: 100%
    }

    #swipebox-bottom-bar {
        bottom: -50px
    }

    #swipebox-bottom-bar.visible-bars {
        -webkit-transform: translate3d(0, -50px, 0);
        transform: translate3d(0, -50px, 0)
    }

    #swipebox-top-bar {
        top: -50px;
        color: #fff !important;
        font-size: 15px;
        line-height: 43px;
        font-family: Helvetica, Arial, sans-serif
    }

    #swipebox-top-bar.visible-bars {
        -webkit-transform: translate3d(0, 50px, 0);
        transform: translate3d(0, 50px, 0)
    }

    #swipebox-title {
        display: block;
        width: 100%;
        text-align: center
    }

    #swipebox-close,
    #swipebox-next,
    #swipebox-prev {
        background-image: url(../img/icons.png);
        background-repeat: no-repeat;
        border: none !important;
        text-decoration: none !important;
        cursor: pointer;
        width: 50px;
        height: 50px;
        top: 0
    }

    #swipebox-arrows {
        display: block;
        margin: 0 auto;
        width: 100%;
        height: 50px
    }

    #swipebox-prev {
        background-position: -32px 13px;
        float: left
    }

    #swipebox-next {
        background-position: -78px 13px;
        float: right
    }

    #swipebox-close {
        top: 0;
        right: 0;
        position: absolute;
        z-index: 9999;
        background-position: 15px 12px
    }

    .swipebox-no-close-button #swipebox-close {
        display: none
    }

    #swipebox-next.disabled,
    #swipebox-prev.disabled {
        opacity: .3
    }

    .swipebox-no-touch #swipebox-overlay.rightSpring #swipebox-slider {
        -webkit-animation: rightSpring .3s;
        animation: rightSpring .3s
    }

    .swipebox-no-touch #swipebox-overlay.leftSpring #swipebox-slider {
        -webkit-animation: leftSpring .3s;
        animation: leftSpring .3s
    }

    .swipebox-touch #swipebox-container:after,
    .swipebox-touch #swipebox-container:before {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
        content: ' ';
        position: absolute;
        z-index: 999;
        top: 0;
        height: 100%;
        width: 20px;
        opacity: 0
    }

    .swipebox-touch #swipebox-container:before {
        left: 0;
        -webkit-box-shadow: inset 10px 0 10px -8px #656565;
        box-shadow: inset 10px 0 10px -8px #656565
    }

    .swipebox-touch #swipebox-container:after {
        right: 0;
        -webkit-box-shadow: inset -10px 0 10px -8px #656565;
        box-shadow: inset -10px 0 10px -8px #656565
    }

    .swipebox-touch #swipebox-overlay.leftSpringTouch #swipebox-container:before,
    .swipebox-touch #swipebox-overlay.rightSpringTouch #swipebox-container:after {
        opacity: 1
    }

    @-webkit-keyframes rightSpring {

        0%,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @keyframes rightSpring {

        0%,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @-webkit-keyframes leftSpring {

        0%,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    @keyframes leftSpring {

        0%,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    @media screen and (min-width:800px) {
        #swipebox-close {
            right: 10px
        }

        #swipebox-arrows {
            width: 92%;
            max-width: 800px
        }
    }

    #swipebox-overlay {
        background: #0d0d0d
    }

    #swipebox-bottom-bar,
    #swipebox-top-bar {
        text-shadow: 1px 1px 1px #000;
        background: #000;
        opacity: .95
    }
</style>