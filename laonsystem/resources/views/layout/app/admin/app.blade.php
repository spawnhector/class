
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <title>Dashboard - JUMBO Admin</title> 
  

  <!-- Generics -->
  <link rel="icon" href="https://yetiadmin.yetithemes.net/demo/assets/images/favicon/favicon-32.png" sizes="32x32">
  <link rel="icon" href="https://yetiadmin.yetithemes.net/demo/assets/images/favicon/favicon-128.png" sizes="128x128">
  <link rel="icon" href="https://yetiadmin.yetithemes.net/demo/assets/images/favicon/favicon-192.png" sizes="192x192">

  <!-- Android -->
  <link rel="shortcut icon" href="https://yetiadmin.yetithemes.net/demo/assets/images/favicon/favicon-196.png" sizes="196x196">

  <!-- iOS -->
  <link rel="apple-touch-icon" href="https://yetiadmin.yetithemes.net/demo/assets/images/favicon/favicon-152.png" sizes="152x152">
  <link rel="apple-touch-icon" href="https://yetiadmin.yetithemes.net/demo/assets/images/favicon/favicon-167.png" sizes="167x167">
  <link rel="apple-touch-icon" href="https://yetiadmin.yetithemes.net/demo/assets/images/favicon/favicon-180.png" sizes="180x180">

  <link rel="stylesheet" href="https://yetiadmin.yetithemes.net/demo/assets/css/style.css" />
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/modal.css')}}">
  <link rel="stylesheet" href="{{asset('css/scroll.css')}}">
  <link rel="stylesheet" href="{{asset('css/adminstyle.css')}}">
  <link rel="stylesheet" href="https://yetiadmin.yetithemes.net/demo/assets/css/style.css">
  @livewireScripts
  @livewireStyles
</head>

<body>

    <!-- Top Bar -->
    <header class="top-bar">

        <!-- Menu Toggler -->
        <button type="button" class="menu-toggler" data-toggle="menu"><i class="fas fa-bars"></i></button>

        <!-- Brand -->
        <span class="brand">JUMBO</span>

        <!-- Search -->
        <div class="hidden md:block ltr:ml-10 rtl:mr-10">
            @livewire('admin.search')
        </div>

        <!-- Right -->
        <div class="flex items-center ltr:ml-auto rtl:mr-auto">

            <!-- Dark Mode -->
            <label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Toggle Dark Mode">
                <input id="darkModeToggler" type="checkbox">
                <span></span>
            </label>
            <!-- Notifications -->
            <div class="dropdown self-stretch">
                <button type="button"
                    class="relative flex items-center h-full btn-link ltr:ml-1 rtl:mr-1 px-2 text-2xl leading-none"
                    data-toggle="custom-dropdown-menu" data-tippy-arrow="true" data-tippy-placement="bottom-end"><i class="fas fa-bell"></i>
                    <span
                        class="absolute top-0 right-0 rounded-full border border-primary -mt-1 -mr-1 px-2 leading-tight text-xs font-body text-primary">3</span>
                </button>
                <div class="custom-dropdown-menu">
                    <div class="flex items-center px-5 py-2">
                        <h5 class="mb-0 uppercase">Notifications</h5>
                        <button class="btn btn_outlined btn_warning uppercase ltr:ml-auto rtl:mr-auto">Clear All</button>
                    </div>
                    <hr>
                    <div class="p-5 hover:bg-primary-100 dark:hover:bg-primary-900">
                        <a href="#">
                            <h6 class="uppercase">Heading One</h6>
                        </a>
                        <p>Lorem ipsum dolor, sit amet consectetur.</p>
                        <small>Today</small>
                    </div>
                    <hr>
                    <div class="p-5 hover:bg-primary-100 dark:hover:bg-primary-900">
                        <a href="#">
                            <h6 class="uppercase">Heading Two</h6>
                        </a>
                        <p>Mollitia sequi dolor architecto aut deserunt.</p>
                        <small>Yesterday</small>
                    </div>
                    <hr>
                    <div class="p-5 hover:bg-primary-100 dark:hover:bg-primary-900">
                        <a href="#">
                            <h6 class="uppercase">Heading Three</h6>
                        </a>
                        <p>Nobis reprehenderit sed quos deserunt</p>
                        <small>Last Week</small>
                    </div>
                </div>
            </div>

            <!-- User Menu -->
            <div class="dropdown">
                <button class="flex items-center ltr:ml-4 rtl:mr-4 text-gray-700" data-toggle="custom-dropdown-menu"
                    data-tippy-arrow="true" data-tippy-placement="bottom-end">
                    <span class="avatar">JU</span>
                </button>
                <div class="custom-dropdown-menu w-64">
                    <div class="p-5">
                        <a href="#"
                            class="flex items-center text-gray-700 dark:text-gray-500 hover:text-primary dark:hover:text-primary">
                            <span class="la la-power-off text-2xl leading-none ltr:mr-2 rtl:ml-2"></span>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu Bar -->
    @livewire('admin.sidebar')
    <!-- Customizer -->
    <aside id="customizer" class="sidebar sidebar_customizer">

        <!-- Toggler -->
        <button class="sidebar-toggler" data-toggle="customizer"><span class="animate-spin-slow"><i class="fas fa-cog"></i></span></button>

        <!-- Theme Customizer -->
        <div class="flex items-center justify-between h-20 p-4">
            <div>
                <h2>Theme Customizer</h2>
                <p>Customize & Preview</p>
            </div>
            <button type="button" class="close text-2xl leading-none hover:text-primary la la-times"
                data-toggle="customizer"></button>
        </div>
        <hr>
        <div class="overflow-y-auto">
            <div class="flex items-center justify-between p-4">
                <h5>Dark Mode</h5>
                <label class="switch switch_outlined">
                    <input data-toggle="darkMode" type="checkbox">
                    <span></span>
                </label>
            </div>
            <hr>
            <div class="flex items-center justify-between p-4">
                <h5>RTL</h5>
                <label class="switch switch_outlined">
                    <input data-toggle="rtl" type="checkbox">
                    <span></span>
                </label>
            </div>
            <hr>
            <div class="p-4">
                <h5>Menu Type</h5>
                <div class="mt-5">
                    <label class="custom-radio">
                        <input type="radio" name="menuType" checked data-toggle="menu-type" data-value="default">
                        <span></span>
                        <span>Default</span>
                    </label>
                    <label class="custom-radio mt-2">
                        <input type="radio" name="menuType" data-toggle="menu-type" data-value="hidden">
                        <span></span>
                        <span>Hidden</span>
                    </label>
                    <label class="custom-radio mt-2">
                        <input type="radio" name="menuType" data-toggle="menu-type" data-value="icon-only">
                        <span></span>
                        <span>Icon Only</span>
                    </label>
                    <label class="custom-radio mt-2">
                        <input type="radio" name="menuType" data-toggle="menu-type" data-value="wide">
                        <span></span>
                        <span>Wide</span>
                    </label>
                </div>
            </div>
        </div>
    </aside>

    <!-- Workspace -->
    <main class="workspace overflow-hidden">

       @yield('body')

        <!-- Footer -->
        <footer class="mt-auto">
            <div class="footer">
                <span class='uppercase'>&copy; 2021 JUMBO LOAN</span>
                <nav class="ltr:ml-auto rtl:mr-auto">
                    <a href="mailto:Ronald Hector<ronaldhector32@gmail.com>?subject=Support">Support</a>
                    <span class="divider">|</span>
                    <a href="#" target="_blank">AmberGroup</a>
                </nav>
            </div>
        </footer>

    </main>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/1e7319fbc7.js" crossorigin="anonymous"></script>
    <script src="https://yetiadmin.yetithemes.net/demo/assets/js/vendor.js" async="async"></script>
    <script src="https://yetiadmin.yetithemes.net/demo/assets/js/chart.min.js" async="async"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1"></script> -->
    <script src="https://yetiadmin.yetithemes.net/demo/assets/js/script.js" async="async"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" async="async"></script>

</body>

</html>