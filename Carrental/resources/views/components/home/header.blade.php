<header class="header header-topbar-view header-topbarbox-1-left header-topbarbox-2-right    
            header-normal-width navbar-fixed-top header-background-trans-black-rgba00
            header-color-white header-logo-white header-navibox-1-left header-navibox-2-right header-navibox-3-right header-navibox-4-right
            wide-header1--trans-black--menu-marker-arrow-normal-1-1-35-disable-0-0-1-0-1-+ (800) 650 743-tel://+1234567890
            ">
    <div class="container container-boxed-width">
        <nav id="nav" class="navbar">
            <div class="container ">
                <div class="header-navibox-1">
                    <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button ">
                        <span class="toggle-menu-button-icon"><span></span> <span></span> <span></span> <span></span>
                            <span></span> <span></span></span>
                    </button>
                    <a class="navbar-brand scroll" href="/" style="max-width:130px;top:-5px;left:0px;">
                        OffTime Rental
                    </a>
                </div>
                @if (Auth::check())
                    @if (Auth::user()->role == 'user')
                        <div class="header-navibox-2">
                            <ul id="menu-main-menu-1" class="yamm main-menu nav navbar-nav  menu-marker-arrow">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18998 current_page_item menu-item-19550 dropdown"><a href="/dashboard">Dashboard</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18998 current_page_item menu-item-19550 dropdown"><a href="/list">Vehicle List</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18998 current_page_item menu-item-19550 dropdown"><a href="/mycars">My Car's</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7522 dropdown"><a href="/profile">Profile</a>
                                    <ul class="dropdown-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19513 dropdown"><a href="/billing">Billing</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19513 dropdown"><a href="/setting">Setting</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19512 dropdown"><a wire:click='logout'>Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endif
                @else
                    <div class="header-navibox-3">
                        <ul class="nav navbar-nav hidden-xs">
                            <li class="no-hover header-button">
                                <a class="autozone-custom-button" href="tel://+1234567890">
                                    + (876) 841 4652 </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-navibox-2">
                        <ul id="menu-main-menu-1" class="yamm main-menu nav navbar-nav  menu-marker-arrow">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18998 current_page_item menu-item-19550 dropdown"><a href="/">Home</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7522 dropdown"><a href="/list">Our Cars</a>
                                <ul class="dropdown-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19513 dropdown"><a href="/list">Vehicle Listings</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19512 dropdown"><a href="/dealer-locator-2">Dealer Locator</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7456 dropdown"><a href="/blog">Our News</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7529 dropdown"><a href="/contact">Contact</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7529 dropdown"><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </nav>
    </div>
    
</header>