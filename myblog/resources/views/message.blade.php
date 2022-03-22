<x-app-layout>
    {{-- <x-slot name="header"> --}}
    @section('content')
        @extends('layouts.dashboard')
        <div x-data="setup()" :class="{ 'dark': isDark }">
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white"
                style="margin-top: 42px;width:100%">
                @extends('layouts.header')
                <style>
                    .compose {
                    z-index: 10;
                    position: fixed;
                    bottom: 0;
                    right: 0;
                    height: 70%;
                    width: 40%;
                    background: white;
                    }

                    .minimized {
                    height: 30px;
                    }

                    .header1 {
                    color: white;
                    display: flex;
                    padding: 5px;
                    padding-left: 10px;
                    justify-content: space-between;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                    background: #303030;
                    margin-bottom: 5px;
                    }

                    #compose-options button {
                    background: inherit;
                    cursor: pointer;
                    border: none;
                    color: white;
                    }

                    form {
                    height: 100px;
                    margin: 0px 5px;
                    }

                    trix-editor {
                    height: 80%;
                    overflow-y: auto;
                    }

                    .d-none {
                    display: none;
                    }

                    .topm{
                        padding: 10px;
                    }
                    .topm input{
                        width:100%;
                        /* margin: 10px; */

                    }
                    #to{
                        /* border: 1px solid red; */
                        padding-left: 25px;

                    }
                    #subj{
                        /* border: 1px solid red; */
                        padding-left: 57px;

                    }
                    .tom{
                        position: absolute;
                        left: 11px;
                        background: black;
                        color: white;
                        padding: -0.5px;
                        padding-right: 4px;
                        padding-left: 4px;
                    }
                    .spac{
                        margin: 10px;
                    }
                    #mcontent{
                        width: 100%;
                        height: 300px;
                        padding: 30px;
                    }
                    #mcontent::-webkit-scrollbar{
                        width: 0em;
                    }
                    .mfooter{
                        padding-left: 20px;
                    }
                    .btn.btn-success{
                        padding: 5px;
                    }
                </style>
                    <div class="h-full mt-14 mb-10" style="margin-left:20px;">

                        <aside id="sidebar" class="nano">
                            <div class="nano-content">
                                <div class="logo-container"><span class="logo glyphicon glyphicon-envelope"></span>WEMail</div><a
                                    class="compose-button" onclick="compose()">Compose</a>
                                <menu class="menu-segment">
                                    <ul>
                                        <li class="active" id="inbox_button" onclick="inbox()"><a>Inbox<span> ({{$inbox}})</span></a></li>
                                        <li><a >Important</a></li>
                                        <li id="sent_button" onclick="sent()"><a >Sent<span> ({{$sent_count}})</span></a></li>
                                        <li><a >Drafts</a></li>
                                        <li><a >Trash</a></li>
                                    </ul>
                                </menu>
                                <div class="separator"></div>
                                <div class="menu-segment">
                                    <ul class="labels">
                                        <li class="title">Labels <span class="icon">+</span></li>
                                        <li><a href="#">Dribbble <span class="ball pink"></span></a></li>
                                        <li><a href="#">Roommates <span class="ball green"></span></a></li>
                                        <li><a href="#">Bills <span class="ball blue"></span></a></li>
                                    </ul>
                                </div>
                                <div class="separator"></div>
                                <div class="menu-segment">
                                    <ul class="chat">
                                        <li class="title">Chat <span class="icon">+</span></li>
                                        <li><a ><span class="ball green"></span>Laura Turner</a></li>
                                        <li><a ><span class="ball green"></span>Kevin Jones</a></li>
                                        <li><a ><span class="ball blue"></span>John King</a></li>
                                        <li><a ><span class="ball blue"></span>Jenny Parker</a></li>
                                        <li><a ><span class="ball blue"></span>Paul Green</a></li>
                                        <li><a  class="italic-link">See offline list</a></li>
                                    </ul>
                                </div>
                                <div class="bottom-padding"></div>
                            </div>
                        </aside>
                        <form action="{{route('edit.message')}}" method="post">
                          @csrf
                          <div class="inbox" id="inbox">
                              <main id="main">
                                  <div class="overlay"></div>
                                  <header class="header">
                                      <div class="search-box">
                                          <input placeholder="Search..."><span class="icon glyphicon glyphicon-search"></span>
                                      </div>
                                      <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span class="line"></span><span
                                                  class="line"></span><span class="line"></span><span class="line line-angle1"></span><span
                                                  class="line line-angle2"></span></a>Inbox<a><span
                                                  class="icon glyphicon glyphicon-chevron-down"></span></a></h1>
                                  </header>
                                  <div class="action-bar">
                                    <ul>
                                        {{-- <li><button type="submit" name=""><a class="icon  glyphicon glyphicon-chevron-down"></button></a></li> --}}
                                        <li><button type="submit"><a class="icon  glyphicon glyphicon-refresh"></a></button></li>
                                        <li><button type="submit" name="delete"><svg id="Capa_1" enable-background="new 0 0 515.556 515.556" height="20" viewBox="0 0 515.556 515.556" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z"/><path d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z"/></svg></button></li>
                                        <li><button type="submit"><a class="icon  red glyphicon glyphicon-remove"></a></button></li>
                                        <li><button type="submit"><a class="icon  red glyphicon glyphicon-flag"></a></button></li>
                                    </ul>
                                  </div>
                                  <div id="main-nano-wrapper" class="nano">
                                      <div class="nano-content">
                                          <ul class="message-list">
                                              {{-- {{dd($message)}} --}}
                                              {!!$inboxs!!}
                                          </ul>
                                          {{-- <a href="#" class="load-more-link">Show more messages</a> --}}
                                      </div>
                                  </div>
                              </main>
                          </div>
                          <div class="sent" id="sent" style="display: none">
                              <main id="main">
                                  <div class="overlay"></div>
                                  <header class="header">
                                      <div class="search-box">
                                          <input placeholder="Search..."><span class="icon glyphicon glyphicon-search"></span>
                                      </div>
                                      <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span class="line"></span><span
                                                  class="line"></span><span class="line"></span><span class="line line-angle1"></span><span
                                                  class="line line-angle2"></span></a>Sent<a><span
                                                  class="icon glyphicon glyphicon-chevron-down"></span></a></h1>
                                  </header>
                                  <div class="action-bar">
                                      <ul>
                                          {{-- <li><button type="submit"><a class="icon  glyphicon glyphicon-chevron-down"></button></a></li> --}}
                                          <li><button type="submit"><a class="icon  glyphicon glyphicon-refresh"></a></button></li>
                                          <li><button type="submit"><svg id="Capa_1" enable-background="new 0 0 515.556 515.556" height="20" viewBox="0 0 515.556 515.556" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z"/><path d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z"/></svg></button></li>
                                          <li><button type="submit"><a class="icon  red glyphicon glyphicon-remove"></a></button></li>
                                          <li><button type="submit"><a class="icon  red glyphicon glyphicon-flag"></a></button></li>
                                        </form>
                                      </ul>
                                  </div>
                                  <div id="main-nano-wrapper" class="nano">
                                      <div class="nano-content">
                                          <ul class="message-list">
                                              {{-- {{dd($message)}} --}}
                                              {!!$sent!!}
                                          </ul>
                                          {{-- <a href="#" class="load-more-link">Show more messages</a> --}}
                                      </div>
                                  </div>
                              </main>
                          </div>
                        </form>
                        <div id="message">
                            
                        </div>
                        <div class="compose d-none" id="popup">
                            <div class="to_compose" id="to_compose">
                                <div class="header1">
                                    New Message
                                    <div id="compose-options">
                                    <a onclick="minimize()"><i class="fa fa-window-minimize" aria-hidden="true"></i></a>
                                    <a onclick="exit()"><i class="fa fa-lg fa-times" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <form  action={{ route('message.store') }} method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="topm">
                                        <div class="spac">
                                            <input type="text" name="to" id="to"><span class="tom">To</span><br>
                                        </div>
                                        <div class="spac">
                                            <input type="text" name="subj" id="subj"><span class="tom">Subject</span><br>
                                        </div>
                                    </div>
                                    <textarea name="mcontent" id="mcontent" placeholder="Message"></textarea>
                                    <div class="mfooter">
                                        <button type="submit" class="btn btn-success">SEND</button>
                                    </div>
                                </form>
                            </div>
                            <div class="to_reply" style="display: none" id="to_reply">
                                <div class="header1">
                                    Reply
                                    <div id="compose-options">
                                    <a onclick="minimize()"><i class="fa fa-window-minimize" aria-hidden="true"></i></a>
                                    <a onclick="exit()"><i class="fa fa-lg fa-times" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <form  action={{ route('message.reply') }} method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input hidden id="replyto" name="to" value="">
                                    <input hidden id="replyid" name="message_id" value="">
                                    {{-- <div class="topm">
                                        <div class="spac">
                                            <input type="text" name="to" id="to"><span class="tom">To</span><br>
                                        </div>
                                        <div class="spac">
                                            <input type="text" name="subj" id="subj"><span class="tom">Subject</span><br>
                                        </div>
                                    </div> --}}
                                    <textarea name="mcontent" id="mcontent" placeholder="Message"></textarea>
                                    <div class="mfooter">
                                        <button type="submit" class="btn btn-success">SEND</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
        </div>
        <script>
            $(document).ready(function() {
            
            // $('[data-toggle="popover"]').popover({
            //     html: true,
            //     trigger: 'hover',
            //     placement: 'bottom',
            //     content: function () { 
            //         return '<p class="tag-content"></p><span class="tag-search">Reply</span>'; 
            //     }
            // });
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
            });

            function show_to_reply() {
                if (document.getElementById('message-reply').style.display == 'none') {
                    $('.message-reply').slideDown()
                } else {
                    $('.message-reply').slideUp()
                }
            }

            function sent(){
                document.getElementById('inbox').style.display = 'none'
                document.getElementById('sent').style.display = 'block'
                $('#inbox_button').removeClass('active')
                $('#sent_button').addClass('active')
            }
            function inbox(){
                document.getElementById('inbox').style.display = 'block'
                document.getElementById('sent').style.display = 'none'
                $('#inbox_button').addClass('active')
                $('#sent_button').removeClass('active')
            }

            function minimize() {
            $("#popup").addClass("minimized");
            $("#compose-options").html(
                "<a onclick='maximize()'><i class='fa fa-window-maximize' aria-hidden='true'></i></a> <a onclick='exit()'><i class='fa fa-lg fa-times' aria-hidden='true'></i></a>"
            );
            }

            function maximize() {
            $("#popup").removeClass("minimized");
            $("#compose-options").html(
                "<a onclick='minimize()'><i class='fa fa-window-minimize' aria-hidden='true'></i></a> <a onclick='exit()'><i class='fa fa-lg fa-times' aria-hidden='true'></i></a>"
            );
            }

            function exit() {
            $("#popup").addClass("d-none");
            }

            function compose() {
                if ($("#popup").hasClass("d-none")) {
                    $("#popup").removeClass("d-none");
                } else {
                    // alert("Popup already open!");
                }
            }
            var message_id = 0
            var message_from = 0
            function get_message(id,from) {
                message_id = id
                message_from = from
            }

            
            function replym() {
                if ($("#popup").hasClass("d-none")) {
                    $("#popup").removeClass("d-none");
                    document.getElementById('to_compose').style.display = 'none'
                    document.getElementById('to_reply').style.display = 'block'
                    document.getElementById('replyid').value = message_id
                    document.getElementById('replyto').value = message_from
                } else {
                    // alert("Popup already open!");
                }
            }
            jQuery(document).ready(function ($) {
                
                
  var cols = {},
    messageIsOpen = false;

  cols.showOverlay = function () {
    $("body").addClass("show-main-overlay");
  };
  cols.hideOverlay = function () {
    $("body").removeClass("show-main-overlay");
  };

  cols.showMessage = function () {
    $("body").addClass("show-message");
    messageIsOpen = true;
  };
  cols.hideMessage = function () {
    $("body").removeClass("show-message");
    $("#main .message-list li").removeClass("active");
    messageIsOpen = false;
  };

  cols.showSidebar = function () {
    $("body").addClass("show-sidebar");
  };
  cols.hideSidebar = function () {
    $("body").removeClass("show-sidebar");
  };

  // Show sidebar when trigger is clicked

  $(".trigger-toggle-sidebar").on("click", function () {
    cols.showSidebar();
    cols.showOverlay();
  });

  $(".trigger-message-close").on("click", function () {
    cols.hideMessage();
    cols.hideOverlay();
  });

  // When you click on a message, show it
  
  $("#main .message-list li").on("click", function (e) {
    var item = $(this),
      target = $(e.target);

    if (target.is("label")) {
      item.toggleClass("selected");
    } else {
        if (messageIsOpen && item.is(".active")) {
            cols.hideMessage();
            cols.hideOverlay();
        } else {
            if (messageIsOpen) {
                cols.hideMessage();
                item.addClass("active");
                setTimeout(function () {
                    cols.showMessage();
                }, 300);
            } else {
                    // $('.message-reply').slideUp()
                const xhttp = new XMLHttpRequest();
                // const post_id = document.getElementById('post-id').value
                let url = new URL('http://127.0.0.1:8000/dashboard/message/'+message_id+'');
                xhttp.onload = function() {
                    document.getElementById('message').innerHTML = this.responseText
                    // console.log(this.responseText)

                    
                }
                xhttp.open('GET', url);
                xhttp.send()
                item.addClass("active");
                cols.showMessage();
            }
        cols.showOverlay();
      }
    }
  });

  // This will prevent click from triggering twice when clicking checkbox/label

  $(".checkbox-wrapper").on("click", function (e) {
    e.stopImmediatePropagation();
    console.log('yes')
  });

  // When you click the overlay, close everything

  $("#main > .overlay").on("click", function () {
    cols.hideOverlay();
    cols.hideMessage();
    cols.hideSidebar();
  });

  // Enable sexy scrollbars
  $(".nano").nanoScroller();

  // Disable links

  $("a").on("click", function (e) {
    e.preventDefault();
  });

  // Search box responsive stuff

  $(".search-box input").on("focus", function () {
    if ($(window).width() <= 1360) {
      cols.hideMessage();
    }
  });
});

/*! nanoScrollerJS - v0.8.0 - 2014
 * https://jamesflorentino.github.com/nanoScrollerJS/
 * Copyright (c) 2014 James Florentino; Licensed MIT */
(function ($, window, document) {
  "use strict";
  var BROWSER_IS_IE7,
    BROWSER_SCROLLBAR_WIDTH,
    DOMSCROLL,
    DOWN,
    DRAG,
    KEYDOWN,
    KEYUP,
    MOUSEDOWN,
    MOUSEMOVE,
    MOUSEUP,
    MOUSEWHEEL,
    NanoScroll,
    PANEDOWN,
    RESIZE,
    SCROLL,
    SCROLLBAR,
    TOUCHMOVE,
    UP,
    WHEEL,
    cAF,
    defaults,
    getBrowserScrollbarWidth,
    hasTransform,
    isFFWithBuggyScrollbar,
    rAF,
    transform,
    _elementStyle,
    _prefixStyle,
    _vendor;
  

  /**
    @property SCROLLBAR
    @type String
    @static
    @final
    @private
   */
  SCROLLBAR = "scrollbar";

  /**
    @property SCROLL
    @type String
    @static
    @final
    @private
   */
  SCROLL = "scroll";

  /**
    @property MOUSEDOWN
    @type String
    @final
    @private
   */
  MOUSEDOWN = "mousedown";

  /**
    @property MOUSEMOVE
    @type String
    @static
    @final
    @private
   */
  MOUSEMOVE = "mousemove";

  /**
    @property MOUSEWHEEL
    @type String
    @final
    @private
   */
  MOUSEWHEEL = "mousewheel";

  /**
    @property MOUSEUP
    @type String
    @static
    @final
    @private
   */
  MOUSEUP = "mouseup";

  /**
    @property RESIZE
    @type String
    @final
    @private
   */
  RESIZE = "resize";

  /**
    @property DRAG
    @type String
    @static
    @final
    @private
   */
  DRAG = "drag";

  /**
    @property UP
    @type String
    @static
    @final
    @private
   */
  UP = "up";

  /**
    @property PANEDOWN
    @type String
    @static
    @final
    @private
   */
  PANEDOWN = "panedown";

  /**
    @property DOMSCROLL
    @type String
    @static
    @final
    @private
   */
  DOMSCROLL = "DOMMouseScroll";

  /**
    @property DOWN
    @type String
    @static
    @final
    @private
   */
  DOWN = "down";

  /**
    @property WHEEL
    @type String
    @static
    @final
    @private
   */
  WHEEL = "wheel";

  /**
    @property KEYDOWN
    @type String
    @static
    @final
    @private
   */
  KEYDOWN = "keydown";

  /**
    @property KEYUP
    @type String
    @static
    @final
    @private
   */
  KEYUP = "keyup";

  /**
    @property TOUCHMOVE
    @type String
    @static
    @final
    @private
   */
  TOUCHMOVE = "touchmove";

  /**
    @property BROWSER_IS_IE7
    @type Boolean
    @static
    @final
    @private
   */
  BROWSER_IS_IE7 =
    window.navigator.appName === "Microsoft Internet Explorer" &&
    /msie 7./i.test(window.navigator.appVersion) &&
    window.ActiveXObject;

  /**
    @property BROWSER_SCROLLBAR_WIDTH
    @type Number
    @static
    @private
   */
  BROWSER_SCROLLBAR_WIDTH = null;
  rAF = window.requestAnimationFrame;
  cAF = window.cancelAnimationFrame;
  _elementStyle = document.createElement("div").style;
  _vendor = (function () {
    var i, transform, vendor, vendors, _i, _len;
    vendors = ["t", "webkitT", "MozT", "msT", "OT"];
    for (i = _i = 0, _len = vendors.length; _i < _len; i = ++_i) {
      vendor = vendors[i];
      transform = vendors[i] + "ransform";
      if (transform in _elementStyle) {
        return vendors[i].substr(0, vendors[i].length - 1);
      }
    }
    return false;
  })();
  _prefixStyle = function (style) {
    if (_vendor === false) {
      return false;
    }
    if (_vendor === "") {
      return style;
    }
    return _vendor + style.charAt(0).toUpperCase() + style.substr(1);
  };
  transform = _prefixStyle("transform");
  hasTransform = transform !== false;

  
  getBrowserScrollbarWidth = function () {
    var outer, outerStyle, scrollbarWidth;
    outer = document.createElement("div");
    outerStyle = outer.style;
    outerStyle.position = "absolute";
    outerStyle.width = "100px";
    outerStyle.height = "100px";
    outerStyle.overflow = SCROLL;
    outerStyle.top = "-9999px";
    document.body.appendChild(outer);
    scrollbarWidth = outer.offsetWidth - outer.clientWidth;
    document.body.removeChild(outer);
    return scrollbarWidth;
  };
  isFFWithBuggyScrollbar = function () {
    var isOSXFF, ua, version;
    ua = window.navigator.userAgent;
    isOSXFF = /(?=.+Mac OS X)(?=.+Firefox)/.test(ua);
    if (!isOSXFF) {
      return false;
    }
    version = /Firefox\/\d{2}\./.exec(ua);
    if (version) {
      version = version[0].replace(/\D+/g, "");
    }
    return isOSXFF && +version > 23;
  };

  /**
    @class NanoScroll
    @param element {HTMLElement|Node} the main element
    @param options {Object} nanoScroller's options
    @constructor
   */
  NanoScroll = (function () {
    function NanoScroll(el, options) {
      this.el = el;
      this.options = options;
      BROWSER_SCROLLBAR_WIDTH ||
        (BROWSER_SCROLLBAR_WIDTH = getBrowserScrollbarWidth());
      this.$el = $(this.el);
      this.doc = $(this.options.documentContext || document);
      this.win = $(this.options.windowContext || window);
      this.$content = this.$el.children("." + options.contentClass);
      this.$content.attr("tabindex", this.options.tabIndex || 0);
      this.content = this.$content[0];
      if (
        this.options.iOSNativeScrolling &&
        this.el.style.WebkitOverflowScrolling != null
      ) {
        this.nativeScrolling();
      } else {
        this.generate();
      }
      this.createEvents();
      this.addEvents();
      this.reset();
    }

    

    NanoScroll.prototype.preventScrolling = function (e, direction) {
      if (!this.isActive) {
        return;
      }
      if (e.type === DOMSCROLL) {
        if (
          (direction === DOWN && e.originalEvent.detail > 0) ||
          (direction === UP && e.originalEvent.detail < 0)
        ) {
          e.preventDefault();
        }
      } else if (e.type === MOUSEWHEEL) {
        if (!e.originalEvent || !e.originalEvent.wheelDelta) {
          return;
        }
        if (
          (direction === DOWN && e.originalEvent.wheelDelta < 0) ||
          (direction === UP && e.originalEvent.wheelDelta > 0)
        ) {
          e.preventDefault();
        }
      }
    };

    

    NanoScroll.prototype.nativeScrolling = function () {
      this.$content.css({
        WebkitOverflowScrolling: "touch"
      });
      this.iOSNativeScrolling = true;
      this.isActive = true;
    };

    NanoScroll.prototype.updateScrollValues = function () {
      var content;
      content = this.content;
      this.maxScrollTop = content.scrollHeight - content.clientHeight;
      this.prevScrollTop = this.contentScrollTop || 0;
      this.contentScrollTop = content.scrollTop;
      if (!this.iOSNativeScrolling) {
        this.maxSliderTop = this.paneHeight - this.sliderHeight;
        this.sliderTop =
          this.maxScrollTop === 0
            ? 0
            : (this.contentScrollTop * this.maxSliderTop) / this.maxScrollTop;
      }
    };

    NanoScroll.prototype.setOnScrollStyles = function () {
      var cssValue;
      if (hasTransform) {
        cssValue = {};
        cssValue[transform] = "translate(0, " + this.sliderTop + "px)";
      } else {
        cssValue = {
          top: this.sliderTop
        };
      }
      if (rAF) {
        if (!this.scrollRAF) {
          this.scrollRAF = rAF(
            (function (_this) {
              return function () {
                _this.scrollRAF = null;
                _this.slider.css(cssValue);
              };
            })(this)
          );
        }
      } else {
        this.slider.css(cssValue);
      }
    };

    

    NanoScroll.prototype.createEvents = function () {
      this.events = {
        down: (function (_this) {
          return function (e) {
            _this.isBeingDragged = true;
            _this.offsetY = e.pageY - _this.slider.offset().top;
            _this.pane.addClass("active");
            _this.doc
              .bind(MOUSEMOVE, _this.events[DRAG])
              .bind(MOUSEUP, _this.events[UP]);
            return false;
          };
        })(this),
        drag: (function (_this) {
          return function (e) {
            _this.sliderY = e.pageY - _this.$el.offset().top - _this.offsetY;
            _this.scroll();
            if (
              _this.contentScrollTop >= _this.maxScrollTop &&
              _this.prevScrollTop !== _this.maxScrollTop
            ) {
              _this.$el.trigger("scrollend");
            } else if (
              _this.contentScrollTop === 0 &&
              _this.prevScrollTop !== 0
            ) {
              _this.$el.trigger("scrolltop");
            }
            return false;
          };
        })(this),
        up: (function (_this) {
          return function (e) {
            _this.isBeingDragged = false;
            _this.pane.removeClass("active");
            _this.doc
              .unbind(MOUSEMOVE, _this.events[DRAG])
              .unbind(MOUSEUP, _this.events[UP]);
            return false;
          };
        })(this),
        resize: (function (_this) {
          return function (e) {
            _this.reset();
          };
        })(this),
        panedown: (function (_this) {
          return function (e) {
            _this.sliderY =
              (e.offsetY || e.originalEvent.layerY) - _this.sliderHeight * 0.5;
            _this.scroll();
            _this.events.down(e);
            return false;
          };
        })(this),
        scroll: (function (_this) {
          return function (e) {
            _this.updateScrollValues();
            if (_this.isBeingDragged) {
              return;
            }
            if (!_this.iOSNativeScrolling) {
              _this.sliderY = _this.sliderTop;
              _this.setOnScrollStyles();
            }
            if (e == null) {
              return;
            }
            if (_this.contentScrollTop >= _this.maxScrollTop) {
              if (_this.options.preventPageScrolling) {
                _this.preventScrolling(e, DOWN);
              }
              if (_this.prevScrollTop !== _this.maxScrollTop) {
                _this.$el.trigger("scrollend");
              }
            } else if (_this.contentScrollTop === 0) {
              if (_this.options.preventPageScrolling) {
                _this.preventScrolling(e, UP);
              }
              if (_this.prevScrollTop !== 0) {
                _this.$el.trigger("scrolltop");
              }
            }
          };
        })(this),
        wheel: (function (_this) {
          return function (e) {
            var delta;
            if (e == null) {
              return;
            }
            delta =
              e.delta ||
              e.wheelDelta ||
              (e.originalEvent && e.originalEvent.wheelDelta) ||
              -e.detail ||
              (e.originalEvent && -e.originalEvent.detail);
            if (delta) {
              _this.sliderY += -delta / 3;
            }
            _this.scroll();
            return false;
          };
        })(this)
      };
    };

    

    NanoScroll.prototype.addEvents = function () {
      var events;
      this.removeEvents();
      events = this.events;
      if (!this.options.disableResize) {
        this.win.bind(RESIZE, events[RESIZE]);
      }
      if (!this.iOSNativeScrolling) {
        this.slider.bind(MOUSEDOWN, events[DOWN]);
        this.pane
          .bind(MOUSEDOWN, events[PANEDOWN])
          .bind("" + MOUSEWHEEL + " " + DOMSCROLL, events[WHEEL]);
      }
      this.$content.bind(
        "" + SCROLL + " " + MOUSEWHEEL + " " + DOMSCROLL + " " + TOUCHMOVE,
        events[SCROLL]
      );
    };

    

    NanoScroll.prototype.removeEvents = function () {
      var events;
      events = this.events;
      this.win.unbind(RESIZE, events[RESIZE]);
      if (!this.iOSNativeScrolling) {
        this.slider.unbind();
        this.pane.unbind();
      }
      this.$content.unbind(
        "" + SCROLL + " " + MOUSEWHEEL + " " + DOMSCROLL + " " + TOUCHMOVE,
        events[SCROLL]
      );
    };

    

    NanoScroll.prototype.generate = function () {
      var contentClass,
        cssRule,
        currentPadding,
        options,
        paneClass,
        sliderClass;
      options = this.options;
      (paneClass = options.paneClass),
        (sliderClass = options.sliderClass),
        (contentClass = options.contentClass);
      if (
        !this.$el.find("." + paneClass).length &&
        !this.$el.find("." + sliderClass).length
      ) {
        this.$el.append(
          '<div class="' +
            paneClass +
            '"><div class="' +
            sliderClass +
            '" /></div>'
        );
      }
      this.pane = this.$el.children("." + paneClass);
      this.slider = this.pane.find("." + sliderClass);
      if (BROWSER_SCROLLBAR_WIDTH === 0 && isFFWithBuggyScrollbar()) {
        currentPadding = window
          .getComputedStyle(this.content, null)
          .getPropertyValue("padding-right")
          .replace(/\D+/g, "");
        cssRule = {
          right: -14,
          paddingRight: +currentPadding + 14
        };
      } else if (BROWSER_SCROLLBAR_WIDTH) {
        cssRule = {
          right: -BROWSER_SCROLLBAR_WIDTH
        };
        this.$el.addClass("has-scrollbar");
      }
      if (cssRule != null) {
        this.$content.css(cssRule);
      }
      return this;
    };

    

    NanoScroll.prototype.restore = function () {
      this.stopped = false;
      if (!this.iOSNativeScrolling) {
        this.pane.show();
      }
      this.addEvents();
    };

    

    NanoScroll.prototype.reset = function () {
      var content,
        contentHeight,
        contentPosition,
        contentStyle,
        contentStyleOverflowY,
        paneBottom,
        paneHeight,
        paneOuterHeight,
        paneTop,
        parentMaxHeight,
        right,
        sliderHeight;
      if (this.iOSNativeScrolling) {
        this.contentHeight = this.content.scrollHeight;
        return;
      }
      if (!this.$el.find("." + this.options.paneClass).length) {
        this.generate().stop();
      }
      if (this.stopped) {
        this.restore();
      }
      content = this.content;
      contentStyle = content.style;
      contentStyleOverflowY = contentStyle.overflowY;
      if (BROWSER_IS_IE7) {
        this.$content.css({
          height: this.$content.height()
        });
      }
      contentHeight = content.scrollHeight + BROWSER_SCROLLBAR_WIDTH;
      parentMaxHeight = parseInt(this.$el.css("max-height"), 10);
      if (parentMaxHeight > 0) {
        this.$el.height("");
        this.$el.height(
          content.scrollHeight > parentMaxHeight
            ? parentMaxHeight
            : content.scrollHeight
        );
      }
      paneHeight = this.pane.outerHeight(false);
      paneTop = parseInt(this.pane.css("top"), 10);
      paneBottom = parseInt(this.pane.css("bottom"), 10);
      paneOuterHeight = paneHeight + paneTop + paneBottom;
      sliderHeight = Math.round(
        (paneOuterHeight / contentHeight) * paneOuterHeight
      );
      if (sliderHeight < this.options.sliderMinHeight) {
        sliderHeight = this.options.sliderMinHeight;
      } else if (
        this.options.sliderMaxHeight != null &&
        sliderHeight > this.options.sliderMaxHeight
      ) {
        sliderHeight = this.options.sliderMaxHeight;
      }
      if (
        contentStyleOverflowY === SCROLL &&
        contentStyle.overflowX !== SCROLL
      ) {
        sliderHeight += BROWSER_SCROLLBAR_WIDTH;
      }
      this.maxSliderTop = paneOuterHeight - sliderHeight;
      this.contentHeight = contentHeight;
      this.paneHeight = paneHeight;
      this.paneOuterHeight = paneOuterHeight;
      this.sliderHeight = sliderHeight;
      this.slider.height(sliderHeight);
      this.events.scroll();
      this.pane.show();
      this.isActive = true;
      if (
        content.scrollHeight === content.clientHeight ||
        (this.pane.outerHeight(true) >= content.scrollHeight &&
          contentStyleOverflowY !== SCROLL)
      ) {
        this.pane.hide();
        this.isActive = false;
      } else if (
        this.el.clientHeight === content.scrollHeight &&
        contentStyleOverflowY === SCROLL
      ) {
        this.slider.hide();
      } else {
        this.slider.show();
      }
      this.pane.css({
        opacity: this.options.alwaysVisible ? 1 : "",
        visibility: this.options.alwaysVisible ? "visible" : ""
      });
      contentPosition = this.$content.css("position");
      if (contentPosition === "static" || contentPosition === "relative") {
        right = parseInt(this.$content.css("right"), 10);
        if (right) {
          this.$content.css({
            right: "",
            marginRight: right
          });
        }
      }
      return this;
    };

    

    NanoScroll.prototype.scroll = function () {
      if (!this.isActive) {
        return;
      }
      this.sliderY = Math.max(0, this.sliderY);
      this.sliderY = Math.min(this.maxSliderTop, this.sliderY);
      this.$content.scrollTop(
        (((this.paneHeight - this.contentHeight + BROWSER_SCROLLBAR_WIDTH) *
          this.sliderY) /
          this.maxSliderTop) *
          -1
      );
      if (!this.iOSNativeScrolling) {
        this.updateScrollValues();
        this.setOnScrollStyles();
      }
      return this;
    };

    

    NanoScroll.prototype.scrollBottom = function (offsetY) {
      if (!this.isActive) {
        return;
      }
      this.$content
        .scrollTop(this.contentHeight - this.$content.height() - offsetY)
        .trigger(MOUSEWHEEL);
      this.stop().restore();
      return this;
    };

    

    NanoScroll.prototype.scrollTop = function (offsetY) {
      if (!this.isActive) {
        return;
      }
      this.$content.scrollTop(+offsetY).trigger(MOUSEWHEEL);
      this.stop().restore();
      return this;
    };

    

    NanoScroll.prototype.scrollTo = function (node) {
      if (!this.isActive) {
        return;
      }
      this.scrollTop(this.$el.find(node).get(0).offsetTop);
      return this;
    };

    

    NanoScroll.prototype.stop = function () {
      if (cAF && this.scrollRAF) {
        cAF(this.scrollRAF);
        this.scrollRAF = null;
      }
      this.stopped = true;
      this.removeEvents();
      if (!this.iOSNativeScrolling) {
        this.pane.hide();
      }
      return this;
    };

    

    NanoScroll.prototype.destroy = function () {
      if (!this.stopped) {
        this.stop();
      }
      if (!this.iOSNativeScrolling && this.pane.length) {
        this.pane.remove();
      }
      if (BROWSER_IS_IE7) {
        this.$content.height("");
      }
      this.$content.removeAttr("tabindex");
      if (this.$el.hasClass("has-scrollbar")) {
        this.$el.removeClass("has-scrollbar");
        this.$content.css({
          right: ""
        });
      }
      return this;
    };

    

    NanoScroll.prototype.flash = function () {
      if (this.iOSNativeScrolling) {
        return;
      }
      if (!this.isActive) {
        return;
      }
      this.reset();
      this.pane.addClass("flashed");
      setTimeout(
        (function (_this) {
          return function () {
            _this.pane.removeClass("flashed");
          };
        })(this),
        this.options.flashDelay
      );
      return this;
    };

    return NanoScroll;
  })();
  $.fn.nanoScroller = function (settings) {
    return this.each(function () {
      var options, scrollbar;
      if (!(scrollbar = this.nanoscroller)) {
        options = $.extend({}, defaults, settings);
        this.nanoscroller = scrollbar = new NanoScroll(this, options);
      }
      if (settings && typeof settings === "object") {
        $.extend(scrollbar.options, settings);
        if (settings.scrollBottom != null) {
          return scrollbar.scrollBottom(settings.scrollBottom);
        }
        if (settings.scrollTop != null) {
          return scrollbar.scrollTop(settings.scrollTop);
        }
        if (settings.scrollTo) {
          return scrollbar.scrollTo(settings.scrollTo);
        }
        if (settings.scroll === "bottom") {
          return scrollbar.scrollBottom(0);
        }
        if (settings.scroll === "top") {
          return scrollbar.scrollTop(0);
        }
        if (settings.scroll && settings.scroll instanceof $) {
          return scrollbar.scrollTo(settings.scroll);
        }
        if (settings.stop) {
          return scrollbar.stop();
        }
        if (settings.destroy) {
          return scrollbar.destroy();
        }
        if (settings.flash) {
          return scrollbar.flash();
        }
      }
      return scrollbar.reset();
    });
  };
  $.fn.nanoScroller.Constructor = NanoScroll;
})(jQuery, window, document);

//# sourceMappingURL=jquery.nanoscroller.js.map

        </script>
    @endsection
    </div>
</x-app-layout>





