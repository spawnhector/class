<!-- Header -->
<div class="fixed w-full flex items-center justify-between h-14 text-white z-10"
    style="position: fixed;top:0;width:1450px">

    <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline"
            style="margin-left: 50px">

        </a>

        <ul class="flex items-center" style="outline: none">
            {{-- <li>
     <button aria-hidden="true" @click="toggleTheme"
         class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none">
         <svg x-show="isDark" width="24" height="24"
             class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
         </svg>
         <svg x-show="!isDark" width="24" height="24"
             class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
         </svg>
     </button>
 </li> --}}
            <ul class="navbar_topp">
                <li>
                    <a href="">Message</a>
                </li>
                
                <li>
                    <a href="">Friend's</a>
                </li>
                
                <li>
                    <a href="">Follower's</a>
                </li>
                
                <li>
                    <a href="">Analytics</a>
                </li>
                
                <li>
                    <a href="">Advertise</a>
                </li>
            </ul>
            <div class="search2 container" style="position: absolute;top: -25px;right: -765px;">
                <input type="text" name="search" id="search1" placeholder="Search...">
                <div class="search"></div>
                <section class="main2" style="display: none"  onmouseleave="hide_search()">
                        <ul  class="results" id="resultd">
                        </ul>
               </section>
            </div>
            <ul>
                @if (Auth::user()->unreadNotifications->count() > 0)
                    <div class='wrapper' onclick="showNotification()">
                        <div class='num'>{{ Auth::user()->unreadNotifications->count() }}</div>

                        <svg width="150px" height="70px" viewBox="0 0 1280 800" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xml:space="preserve"
                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                            <path
                                d="M590.832,448.337C589.517,447.337 587.981,446.403 587.268,445.76C585.646,444.297 584.799,442.068 583.9,439.879C583.076,437.287 583.226,434.708 583.826,432.105C598.194,409.92 613.659,388.608 615.226,353.606C614.434,313.878 623.308,291.788 636.25,278.444C646.872,265.203 661.154,255.282 678.585,248.44L678.682,248.392L678.782,248.315C678.544,246.767 678.498,245.016 678.624,243.268C678.695,242.277 678.846,241.558 678.891,240.782C678.979,239.258 679.235,237.743 679.617,236.244C683.002,222.955 697.006,213.234 710.971,213.252C725.736,213.271 740.731,223.402 743.195,238.331C743.829,242.172 743.947,245.478 743.635,248.315L743.674,248.315C743.666,249.147 743.627,249.95 743.552,250.709C764.033,255.522 778.234,269.91 790.363,287.817C800.055,309.26 808.132,332.749 805.903,365.982C807.185,397.309 827.417,409.547 831.671,424.611C823.129,420.685 814.503,416.156 805.461,414.136C798.061,410.999 790.252,409.309 782.342,408.311C774.976,406.891 767.529,405.671 759.828,405.082C750.158,403.271 740.388,402.951 730.57,403.341C735.655,405.566 740.848,407.555 746.861,408.442C750.394,408.979 753.871,409.508 756.3,409.982C760.698,410.838 765.552,412.122 769.691,413.057C773.005,413.806 776.268,414.71 779.84,415.717C783.341,416.652 786.619,417.054 789.637,418.667C792.317,419.256 794.42,421.268 796.434,422.357C798.768,423.618 800.839,425.135 802.242,427.168L804.335,430.933C805.091,433.967 805.325,437.021 804.201,440.126C803.005,442.829 801.051,444.819 798.698,446.434C798.065,446.976 797.42,447.494 796.76,447.981C793.873,451.945 782.789,456.794 765.653,460.908C763.77,461.469 761.844,461.906 759.865,462.219C742.58,465.912 720.171,468.804 694.412,469.557C642.401,471.078 599.137,456.184 590.832,448.337Z"
                                style="fill:#fff;" />
                            <g transform="matrix(1,0,0,1,-7.83975,-8.3859)">

                                <circle class='bell' cx="696.599" cy="475.846" r="27.99" />

                            </g>

                        </svg>
                    </div>
                    <?php 
                    $friend_request_count = 0;
                    $comments_count = 0;
                    ?>
                    @foreach (Auth::user()->unreadNotifications as $notifications)
                        @switch($notifications->data['type'])
                            @case('friend')
                                <?php ++$friend_request_count;?>
                                @break
                            @case('comment')
                                <?php ++$comments_count;?>
                                @break
                            @default
                                
                        @endswitch
                    @endforeach
                    <div class="notification slider" style="display: none" id="notification" onmouseleave="hide_noty()">
                        <div id="noty">
                            <div class="head">
                                <p>Notification
                                <div class="friends" style="position: absolute;right: 386px;top: -10px;">
                                    <div class='num1'>{{ $friend_request_count }}</div>
                                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <title>Layer 1</title>
                                            <path id="svg_2" fill="#5F83CF"
                                                d="m25.80485,34.27525c-0.0253,-0.0339 -0.0591,-0.0678 -0.0928,-0.1017c-0.7259,-0.7037 -1.7641,-1.1615 -2.6503,-1.6278c-0.0507,-0.0254 -0.0929,-0.0509 -0.1435,-0.0763c-0.4305,-0.2289 -0.8778,-0.4493 -1.3083,-0.6782c-0.6668,-0.3477 -1.5025,-0.6443 -1.7895,-1.382c-0.1983,-0.4918 -0.276,-1.3927 -0.3203,-2.1195l0.008,0l1.5953,0l-0.3967,-0.4726c0,0 1.7726,-0.3545 1.7726,-0.4896c0,-0.1435 -0.6162,-0.9369 -0.6162,-0.9369c0.0725,-0.3031 0.1478,-0.5921 0.2521,-0.886c0.106,-0.2985 0.2125,-0.5973 0.3003,-0.9019c0.1186,-0.4112 0.0954,-0.8838 0.0691,-1.3064c-0.0337,-0.54 -0.1219,-1.0766 -0.249,-1.6021c-0.1385,-0.572 -0.3249,-1.1335 -0.564,-1.6714c-0.236,-0.5308 -0.5243,-1.0418 -0.8827,-1.5c-0.3347,-0.4279 -0.7345,-0.8119 -1.2051,-1.0876c-0.4652,-0.2725 -0.9917,-0.4256 -1.5314,-0.4344c-0.6479,-0.0105 -1.2829,0.1781 -1.8614,0.4596c-0.3524,0 -0.7038,0.0573 -1.0372,0.1715c-0.6487,0.2223 -1.2055,0.6517 -1.6458,1.1713c-0.4773,0.5633 -0.827,1.2294 -1.0715,1.9237c-0.2546,0.7232 -0.3988,1.4875 -0.4248,2.2537c-0.0127,0.3734 0.0032,0.7481 0.0527,1.1186c0.0239,0.1794 0.0558,0.3578 0.0965,0.5341c0.0536,0.2324 0.1422,0.4412 0.222,0.6649c0.0541,0.1516 0.0947,0.3098 0.1369,0.4652c0.0566,0.2081 0.1101,0.4173 0.1599,0.6272c0,0 -0.6161,0.7934 -0.6161,0.9369c0,0.1351 1.7725,0.4896 1.7725,0.4896l-0.3883,0.4726l1.5699,0c-0.0365,0.7336 -0.1003,1.636 -0.2953,2.1195c-0.287,0.7376 -1.1564,1.0343 -1.8232,1.3819c-0.4896,0.2544 -0.9791,0.5003 -1.4602,0.7546c-0.8779,0.4663 -1.9245,0.9241 -2.6504,1.6278c-0.0253,0.0339 -0.0591,0.0678 -0.0844,0.1017c-0.5992,0.6952 -0.8018,1.5006 -0.8356,1.6702l11.2851,0l2.1692,0l5.3176,0c-0.0338,-0.1696 -0.2364,-0.975 -0.8357,-1.6702z" />
                                            <path id="svg_3" fill="whitesmoke"
                                                d="m32.64135,24.86475c-0.0093,0.0372 -0.0186,0.0744 -0.0279,0.1117c-0.0279,0.1396 -0.0652,0.2792 -0.1117,0.4188c-0.0279,0.0931 -0.0558,0.1862 -0.0838,0.2886c-0.0279,0.0838 -0.0744,0.1768 -0.1489,0.2699c-0.0186,0.0279 -0.0465,0.0559 -0.0745,0.0745c-0.0372,0.0465 -0.093,0.0931 -0.1489,0.121c-0.0186,0.0186 -0.0372,0.0372 -0.0651,0.0372c-0.0466,0.0279 -0.1024,0.0465 -0.1583,0.0465c0,0 -0.0093,0.0373 -0.0186,0.1117c0,0.028 -0.0093,0.0652 -0.0186,0.1117c-0.0372,0.2234 -0.1024,0.5957 -0.1862,0.9215c-0.0186,0.0931 -0.0465,0.1769 -0.0744,0.2606c-0.0186,0.0838 -0.0466,0.1583 -0.0838,0.2141c-0.0093,0.0372 -0.0279,0.0652 -0.0465,0.0931l-0.3258,0.4002c0.0186,0.3444 0.0372,0.6981 0.0744,1.0425c0.0187,0.121 0.028,0.242 0.0559,0.3537c0.0279,0.1582 0.0558,0.3072 0.1024,0.4561c0.0186,0.0838 0.0558,0.1675 0.0837,0.2513c0.2886,0.7353 0.8378,1.0146 1.4986,1.359c0.484,0.2513 0.9773,0.5026 1.4521,0.7539c0.8842,0.4654 1.9267,0.9215 2.6527,1.6196c0.0372,0.0372 0.0559,0.0651 0.0931,0.1024c0.2141,0.2513 0.3816,0.5119 0.5119,0.7539c0,0.0093 0,0.0186 0.0093,0.0279c0.0745,0.1583 0.1397,0.3072 0.1862,0.4282c0,0.0093 0,0.0186 0.0093,0.0279c0.0372,0.121 0.0745,0.2234 0.0931,0.2979c0.0093,0.0372 0.0093,0.0651 0.0186,0.0837c0,0.0187 0.0093,0.028 0.0093,0.0373c-0.4997,0 -0.9994,0 -1.4991,0c-1.1059,0 -2.2119,0 -3.3178,0c-1.1248,0 -2.2495,0 -3.3742,0c-0.3588,0 -0.7176,0 -1.0764,0c-0.117,0 -0.2339,0 -0.3508,0c-0.1548,0 -0.2666,0.03 -0.3157,-0.1565c-0.3209,-1.2181 -1.0895,-2.2112 -2.0813,-2.9332c-0.5514,-0.4015 -1.0948,-0.7387 -1.6967,-1.0546c0.0652,-0.0373 0.121,-0.0652 0.1955,-0.1024c0.6701,-0.3444 0.9788,-0.5097 1.2673,-1.245c0.2606,-0.6702 0.2699,-1.3962 0.3165,-2.1036l-0.3258,-0.4002c-0.242,-0.3537 -0.4282,-1.7127 -0.4282,-1.7127c-0.2885,-0.0093 -0.5119,-0.3164 -0.5957,-0.5491c-0.1117,-0.391 -0.2327,-0.7447 -0.2792,-1.1542c-0.0372,-0.2886 -0.0931,-0.6516 0.1396,-0.8936c0.0372,-0.0372 0.3816,-0.121 0.4189,-0.0186c-0.028,-0.0745 -0.0745,-1.8988 -0.0745,-1.8988s-0.2327,-1.089 -0.0186,-1.964c0.2234,-0.8749 0.6888,-1.3589 1.3962,-1.3589c0,0 1.3552,-1.2814 3.5512,-0.769l0.36681,0.09331" />
                                            <path id="svg_4" opacity="0.1"
                                                d="m32.64475,24.86545c-0.01,0.04 -0.02,0.07 -0.03,0.11c-0.03,0.14 -0.07,0.28 -0.11,0.42c-0.03,0.09 -0.06,0.19 -0.09,0.29c-0.02,0.08 -0.07,0.18 -0.15,0.27c-0.01,0.03 -0.04,0.05 -0.07,0.07c-0.04,0.05 -0.09,0.1 -0.15,0.12c-0.02,0.02 -0.04,0.04 -0.06,0.04c-0.05,0.03 -0.11,0.05 -0.16,0.05c0,0 0,0 0,0.01l-0.05,0c-1.08,0 -1.95,-0.87 -1.95,-1.95l0,-1.38c0,1.07 0.6889,0.4262 1.7689,0.4262l1.0511,1.5238z" />
                                            {{-- <path stroke="null" id="svg_6" fill="#F43734" d="m38.472046,26.2491l-6.523918,0c-1.097201,0 -1.986594,-0.8732 -1.986594,-1.9502l0,-8.9063c0,-1.0771 0.889394,-1.9503 1.986594,-1.9503l6.523918,0c1.097201,0 1.986594,0.8732 1.986594,1.9503l0,8.9063c0,1.077 -0.889394,1.9502 -1.986594,1.9502z"/> --}}
                                            {{-- <path transform="rotate(-3 34.69194793701163,19.804096221923736) " id="svg_7" fill="#FFFFFF" d="m35.86155,22.992197l-0.7798,0l0,-4.9684c-0.1877,0.179 -0.434,0.3581 -0.7384,0.5371c-0.3049,0.179 -0.5784,0.3133 -0.821,0.4029l0,-0.7538c0.4361,-0.205 0.8173,-0.4533 1.1436,-0.745s0.5574,-0.5747 0.6931,-0.849l0.5025,0l0,6.3762z"/> --}}

                                        </g>
                                    </svg>
                                </div>

                                <div class="comment">
                                    <div class='num2'>{{ $comments_count }}</div>
                                    <?xml version="1.0" ?><svg style="enable-background:new 0 0 48 48;" version="1.1"
                                        viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Icons">
                                            <g>
                                                <path
                                                    d="M14.33435,22.4524h-3.2677c-0.4676,0-0.85,0.3825-0.85,0.8499v8.7c0,0.4675,0.3824,0.85,0.85,0.85    h1.32l-0.18,2l2.3573-1.8133c0.1573-0.121,0.3503-0.1867,0.5488-0.1867h9.9239c0.4639,0,0.84-0.376,0.84-0.8399v-2.2251    L14.33435,22.4524z"
                                                    style="fill:#F4F4F4;" />
                                                <path
                                                    d="M27.09625,18.3123h-12.3896c-0.55,0-1,0.4601-1,1.01v2.15v0.9801v7.1699c0,0.55,0.45,0.99,1,0.99    h11.17h0.93l3.07,2.36l-0.22-2.36h1.57c0.54,0,1-0.44,1-0.99l0.0212-2.9758L27.09625,18.3123z"
                                                    style="fill:#5F83CF;" />
                                                <path
                                                    d="M32.25125,26.9078l-0.01,1.38h-3.58c-1.08,0-1.95-0.88-1.95-1.95v-1.38    c0,1.08,0.9821,1.2525,2.0621,1.2525L32.25125,26.9078z"
                                                    style="opacity:0.1;" />
                                                <g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                </p>
                            </div>
                            <?php $count_noty = 0; ?>
                            <div class="main1 slider__items" role="main">
                                <?php
                                function custom_echo1($x, $length)
                                {
                                    if (strlen($x) <= $length) {
                                        echo "<span class='content'>$x  </span>"." ";
                                    } else {
                                        $y = substr($x, 0, $length) . '...'.' ';
                                        echo "<span class=''>$y</span>"." ";
                                    }
                                }
                                function custom_echo2($x, $length)
                                {
                                    $check = explode(' ', $x);
                                    $check1 = explode('@', $check[6]);
                                    $check2 = $check1[1];
                                    if ($check2 == Auth::user()->name) {
                                        $replace_this = '@' . Auth::user()->name;
                                        $with = 'your';
                                        $replacement = str_replace($replace_this, $with, $x);
                                        if (strlen($replacement) <= $length) {
                                            echo "<span class='content'>$replacement</span>"." ";
                                        } else {
                                            $y = substr($replacement, 0, $length) . '...'.' ';
                                            echo "<span class=''>$y</span>"." ";
                                        }
                                    } else {
                                        if (strlen($x) <= $length) {
                                            echo "<span class='content'>$x</span>";
                                        } else {
                                            $y = substr($x, 0, $length) . '...'.' ';
                                            echo "<span class=''>$y</span>"." ";
                                        }
                                    }
                                }
                                
                                ?>
                                @foreach (Auth::user()->unreadNotifications as $notifications)
                                    <?php ++$count_noty; ?>
                                    @if ($count_noty == 6)
                                        <style>
                                            .main1 {
                                                Overflow-y: scroll;
                                                height: 273px;
                                                margin-left: 5px;
                                            }

                                            .main1::-webkit-scrollbar {
                                                width: 1em;
                                            }

                                        </style>
                                    @endif
                                    @switch($notifications->data['type'])
                                        @case('friend')
                                            <ul class="section four slider__item">
                                                <div class="text four"><img class="notify_img"
                                                        src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>"
                                                        alt=""></div>
                                                <li class="rect four">
                                                    <p>{{ custom_echo1($notifications->data['content'], 39) }}
                                                        <a href={{ route('confirmfriend', [$notifications->data['typeid'], $notifications->id]) }}
                                                            class=''>view</a>
                                                    </p>
                                                    <?php
                                                    $origin = new DateTime($notifications->created_at);
                                                    $target = new DateTime('now');
                                                    $interval = $origin->diff($target);
                                                    ?>
                                                    <span class="timestamp"
                                                        style="position: absolute;right: -90px;bottom: 2px;color:whitesmoke;"><i
                                                            class="fa fa-clock-"></i>
                                                        <?php if ($interval->y != 0) {
                                                            echo $interval->y . ' ' . 'Year';
                                                        } elseif ($interval->m != 0) {
                                                            echo $interval->m . ' ' . 'Months';
                                                        } elseif ($interval->d != 0) {
                                                            echo $interval->d . ' ' . 'Day';
                                                        } elseif ($interval->h != 0) {
                                                            echo $interval->h . ' ' . 'Hour';
                                                        } elseif ($interval->i != 0) {
                                                            echo $interval->i . ' ' . 'Min';
                                                        } elseif ($interval->s != 0) {
                                                            echo $interval->s . ' ' . 'Sec';
                                                        } ?>
                                                        Ago
                                                    </span>
                                                </li>
                                            </ul>
                                        @break
                                        @case('friendconfirm')
                                            <ul class="section four slider__item">
                                                <div class="text four"><img class="notify_img"
                                                        src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>"
                                                        alt=""></div>
                                                <li class="rect four">
                                                    <p>{{ custom_echo1($notifications->data['content'], 39) }}
                                                        <a href="#" class=''>view</a>
                                                    </p>
                                                    <?php
                                                    $origin = new DateTime($notifications->created_at);
                                                    $target = new DateTime('now');
                                                    $interval = $origin->diff($target);
                                                    ?>
                                                    <span class="timestamp"
                                                        style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i
                                                            class="fa fa-clock-"></i>
                                                        <?php if ($interval->y != 0) {
                                                            echo $interval->y . ' ' . 'Year';
                                                        } elseif ($interval->m != 0) {
                                                            echo $interval->m . ' ' . 'Months';
                                                        } elseif ($interval->d != 0) {
                                                            echo $interval->d . ' ' . 'Day';
                                                        } elseif ($interval->h != 0) {
                                                            echo $interval->h . ' ' . 'Hour';
                                                        } elseif ($interval->i != 0) {
                                                            echo $interval->i . ' ' . 'Min';
                                                        } elseif ($interval->s != 0) {
                                                            echo $interval->s . ' ' . 'Sec';
                                                        } ?>
                                                        Ago
                                                    </span>
                                                </li>
                                            </ul>
                                        @break
                                        @case('like')
                                            <ul class="section four slider__item" data-role="listview">
                                                <div class="text four"><img class="notify_img"
                                                        src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>"
                                                        alt=""></div>
                                                <li class="rect four">
                                                    <p>{{ custom_echo1($notifications->data['content'], 47) }}
                                                        <a href="#" class=''>view</a>
                                                    </p>
                                                    <?php
                                                    $origin = new DateTime($notifications->created_at);
                                                    $target = new DateTime('now');
                                                    $interval = $origin->diff($target);
                                                    ?>
                                                    <span class="timestamp"
                                                        style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i
                                                            class="fa fa-clock-"></i>
                                                        <?php if ($interval->y != 0) {
                                                            echo $interval->y . ' ' . 'Year';
                                                        } elseif ($interval->m != 0) {
                                                            echo $interval->m . ' ' . 'Months';
                                                        } elseif ($interval->d != 0) {
                                                            echo $interval->d . ' ' . 'Day';
                                                        } elseif ($interval->h != 0) {
                                                            echo $interval->h . ' ' . 'Hour';
                                                        } elseif ($interval->i != 0) {
                                                            echo $interval->i . ' ' . 'Min';
                                                        } elseif ($interval->s != 0) {
                                                            echo $interval->s . ' ' . 'Sec';
                                                        } ?>
                                                        Ago
                                                    </span>
                                                </li>
                                            </ul>
                                        @break
                                        @case('unlike')
                                            <ul class="section four slider__item">
                                                <div class="text four"><img class="notify_img"
                                                        src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>"
                                                        alt=""></div>
                                                <li class="rect four">
                                                    <p>{{ custom_echo1($notifications->data['content'], 47) }}
                                                        <a href="#" class=''>view</a>
                                                    </p>
                                                    <?php
                                                    $origin = new DateTime($notifications->created_at);
                                                    $target = new DateTime('now');
                                                    $interval = $origin->diff($target);
                                                    ?>
                                                    <span class="timestamp"
                                                        style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i
                                                            class="fa fa-clock-"></i>
                                                        <?php if ($interval->y != 0) {
                                                            echo $interval->y . ' ' . 'Year';
                                                        } elseif ($interval->m != 0) {
                                                            echo $interval->m . ' ' . 'Months';
                                                        } elseif ($interval->d != 0) {
                                                            echo $interval->d . ' ' . 'Day';
                                                        } elseif ($interval->h != 0) {
                                                            echo $interval->h . ' ' . 'Hour';
                                                        } elseif ($interval->i != 0) {
                                                            echo $interval->i . ' ' . 'Min';
                                                        } elseif ($interval->s != 0) {
                                                            echo $interval->s . ' ' . 'Sec';
                                                        } ?>
                                                        Ago
                                                    </span>
                                                </li>
                                            </ul>
                                        @break
                                        @case('follow')
                                            <ul class="section four slider__item">
                                                <div class="text four"><img class="notify_img"
                                                        src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>"
                                                        alt=""></div>
                                                <li class="rect four">
                                                    <p>{{ custom_echo1($notifications->data['content'], 47) }}
                                                        <a href="#" class=''>view</a>
                                                    </p>
                                                    <?php
                                                    $origin = new DateTime($notifications->created_at);
                                                    $target = new DateTime('now');
                                                    $interval = $origin->diff($target);
                                                    ?>
                                                    <span class="timestamp"
                                                        style="position: absolute;right: -90px;bottom: 2px;color:whitesmoke;"><i
                                                            class="fa fa-clock-"></i>
                                                        <?php if ($interval->y != 0) {
                                                            echo $interval->y . ' ' . 'Year';
                                                        } elseif ($interval->m != 0) {
                                                            echo $interval->m . ' ' . 'Months';
                                                        } elseif ($interval->d != 0) {
                                                            echo $interval->d . ' ' . 'Day';
                                                        } elseif ($interval->h != 0) {
                                                            echo $interval->h . ' ' . 'Hour';
                                                        } elseif ($interval->i != 0) {
                                                            echo $interval->i . ' ' . 'Min';
                                                        } elseif ($interval->s != 0) {
                                                            echo $interval->s . ' ' . 'Sec';
                                                        } ?>
                                                        Ago
                                                    </span>
                                                </li>
                                            </ul>
                                        @break
                                        @case('unfollow')
                                            <ul class="section four slider__item">
                                                <div class="text four"><img class="notify_img"
                                                        src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>"
                                                        alt=""></div>
                                                <li class="rect four">
                                                    <p>{{ custom_echo1($notifications->data['content'], 47) }}
                                                        <a href="#" class=''>view</a>
                                                    </p>
                                                    <?php
                                                    $origin = new DateTime($notifications->created_at);
                                                    $target = new DateTime('now');
                                                    $interval = $origin->diff($target);
                                                    ?>
                                                    <span class="timestamp"
                                                        style="position: absolute;right: -90px;bottom: 2px;color:whitesmoke;"><i
                                                            class="fa fa-clock-"></i>
                                                        <?php if ($interval->y != 0) {
                                                            echo $interval->y . ' ' . 'Year';
                                                        } elseif ($interval->m != 0) {
                                                            echo $interval->m . ' ' . 'Months';
                                                        } elseif ($interval->d != 0) {
                                                            echo $interval->d . ' ' . 'Day';
                                                        } elseif ($interval->h != 0) {
                                                            echo $interval->h . ' ' . 'Hour';
                                                        } elseif ($interval->i != 0) {
                                                            echo $interval->i . ' ' . 'Min';
                                                        } elseif ($interval->s != 0) {
                                                            echo $interval->s . ' ' . 'Sec';
                                                        } ?>
                                                        Ago
                                                    </span>
                                                </li>
                                            </ul>
                                        @break
                                        @case('post')
                                            <ul class="section four slider__item">
                                                <div class="text four"><img class="notify_img"
                                                        src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>"
                                                        alt=""></div>
                                                <li class="rect four">
                                                    <p>{{ custom_echo1($notifications->data['content'], 47) }}
                                                        <a href={{ route('show-post', [$notifications->data['typeslug'], $notifications->id]) }}
                                                            class=''>view</a>
                                                    </p>
                                                    <?php
                                                    $origin = new DateTime($notifications->created_at);
                                                    $target = new DateTime('now');
                                                    $interval = $origin->diff($target);
                                                    ?>
                                                    <span class="timestamp"
                                                        style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i
                                                            class="fa fa-clock-"></i>
                                                        <?php if ($interval->y != 0) {
                                                            echo $interval->y . ' ' . 'Year';
                                                        } elseif ($interval->m != 0) {
                                                            echo $interval->m . ' ' . 'Months';
                                                        } elseif ($interval->d != 0) {
                                                            echo $interval->d . ' ' . 'Day';
                                                        } elseif ($interval->h != 0) {
                                                            echo $interval->h . ' ' . 'Hour';
                                                        } elseif ($interval->i != 0) {
                                                            echo $interval->i . ' ' . 'Min';
                                                        } elseif ($interval->s != 0) {
                                                            echo $interval->s . ' ' . 'Sec';
                                                        } ?>
                                                        Ago
                                                    </span>
                                                </li>
                                            </ul>
                                        @break
                                        @case('comment')
                                            <ul class="section four slider__item">
                                                <div class="text four"><img class="notify_img"
                                                        src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>"
                                                        alt=""></div>
                                                <li class="rect four">
                                                    <p>{{ custom_echo2($notifications->data['content'], 39) }}
                                                        <a href={{ route('show-comment', [$notifications->data['typeslug'], $notifications->id]) }}
                                                            class=''>view</a>
                                                    </p>
                                                    <?php
                                                    $origin = new DateTime($notifications->created_at);
                                                    $target = new DateTime('now');
                                                    $interval = $origin->diff($target);
                                                    ?>
                                                    <span class="timestamp"
                                                        style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i
                                                            class="fa fa-clock-"></i>
                                                        <?php if ($interval->y != 0) {
                                                            echo $interval->y . ' ' . 'Year';
                                                        } elseif ($interval->m != 0) {
                                                            echo $interval->m . ' ' . 'Months';
                                                        } elseif ($interval->d != 0) {
                                                            echo $interval->d . ' ' . 'Day';
                                                        } elseif ($interval->h != 0) {
                                                            echo $interval->h . ' ' . 'Hour';
                                                        } elseif ($interval->i != 0) {
                                                            echo $interval->i . ' ' . 'Min';
                                                        } elseif ($interval->s != 0) {
                                                            echo $interval->s . ' ' . 'Sec';
                                                        } ?>
                                                        Ago
                                                    </span>
                                                </li>
                                            </ul>
                                        @break
                                        @default
                                    @endswitch
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class='wrapper'>
                        <div class='num'>{{ Auth::user()->unreadNotifications->count() }}</div>

                        <svg width="150px" height="70px" viewBox="0 0 1280 800" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xml:space="preserve"
                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                            <path
                                d="M590.832,448.337C589.517,447.337 587.981,446.403 587.268,445.76C585.646,444.297 584.799,442.068 583.9,439.879C583.076,437.287 583.226,434.708 583.826,432.105C598.194,409.92 613.659,388.608 615.226,353.606C614.434,313.878 623.308,291.788 636.25,278.444C646.872,265.203 661.154,255.282 678.585,248.44L678.682,248.392L678.782,248.315C678.544,246.767 678.498,245.016 678.624,243.268C678.695,242.277 678.846,241.558 678.891,240.782C678.979,239.258 679.235,237.743 679.617,236.244C683.002,222.955 697.006,213.234 710.971,213.252C725.736,213.271 740.731,223.402 743.195,238.331C743.829,242.172 743.947,245.478 743.635,248.315L743.674,248.315C743.666,249.147 743.627,249.95 743.552,250.709C764.033,255.522 778.234,269.91 790.363,287.817C800.055,309.26 808.132,332.749 805.903,365.982C807.185,397.309 827.417,409.547 831.671,424.611C823.129,420.685 814.503,416.156 805.461,414.136C798.061,410.999 790.252,409.309 782.342,408.311C774.976,406.891 767.529,405.671 759.828,405.082C750.158,403.271 740.388,402.951 730.57,403.341C735.655,405.566 740.848,407.555 746.861,408.442C750.394,408.979 753.871,409.508 756.3,409.982C760.698,410.838 765.552,412.122 769.691,413.057C773.005,413.806 776.268,414.71 779.84,415.717C783.341,416.652 786.619,417.054 789.637,418.667C792.317,419.256 794.42,421.268 796.434,422.357C798.768,423.618 800.839,425.135 802.242,427.168L804.335,430.933C805.091,433.967 805.325,437.021 804.201,440.126C803.005,442.829 801.051,444.819 798.698,446.434C798.065,446.976 797.42,447.494 796.76,447.981C793.873,451.945 782.789,456.794 765.653,460.908C763.77,461.469 761.844,461.906 759.865,462.219C742.58,465.912 720.171,468.804 694.412,469.557C642.401,471.078 599.137,456.184 590.832,448.337Z"
                                style="fill:#fff;" />
                            <g transform="matrix(1,0,0,1,-7.83975,-8.3859)">

                                <circle class='bell' cx="696.599" cy="475.846" r="27.99" />

                            </g>

                        </svg>
                    </div>
                    <div class="notification" style="display: none" id="notification">
                        @foreach (Auth::user()->notifications as $notifications)
                            <div class="section four">
                                <div class="text four"></div>
                                <div class="rect four">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </ul>
            <div class="divider"></div>
            <ul class="nav navbar-nav @if (__('voyager::generic.is_rtl')=='true' ) navbar-left @else navbar-right @endif">
                <li class="dropdown profile">
                    <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button"
                        aria-expanded="false"><img
                            src="http://localhost/xampp/myblog/storage/app/public/{{ Auth::user()->avatar }}"
                            class="profile-img" style="
                                             margin-right: 40px;
                                             margin-top: -5px;
                                         "> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-animated" style="
                                         margin-top: 35px;
                                         min-width: 222px;
                                         color: grey;
                                         right: 50px;
                                     ">
                        <li class="profile-img">
                            {{-- <img src="{{ $user_avatar }}" class="profile-img"> --}}
                            <div class="profile-body">
                                <h6>{{ Auth::user()->email }}</h6>
                            </div>
                        </li>
                        <?php $nav_items = config('voyager.dashboard.navbar_items'); ?>
                        @if (is_array($nav_items) && !empty($nav_items))
                            @foreach ($nav_items as $name => $item)
                                <li {!! isset($item['classes']) && !empty($item['classes']) ? 'class="' . $item['classes'] . '"' : '' !!}>
                                    @if (isset($item['route']) && $item['route'] == 'voyager.logout')
                                        <form action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-block">
                                                @if (isset($item['icon_class']) && !empty($item['icon_class']))
                                                    <i class="{!! $item['icon_class'] !!}"></i>
                                                @endif
                                                {{ __($name) }}
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ isset($item['route']) && Route::has($item['route']) ? route($item['route']) : (isset($item['route']) ? $item['route'] : '#') }}"
                                            {!! isset($item['target_blank']) && $item['target_blank'] ? 'target="_blank"' : '' !!}>
                                            @if (isset($item['icon_class']) && !empty($item['icon_class']))
                                                <i class="{!! $item['icon_class'] !!}"></i>
                                            @endif
                                            {{ __($name) }}
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>
            </ul>
            <li>
            </li>
        </ul>
    </div>
</div>
<!-- ./Header -->


@if (Auth::user()->unreadNotifications->count() > 0)
    <button hidden id="got_notification" value={{ 1 }}></button>
@else
    <button hidden id="got_notification" value=""></button>
@endif
<script>
    $(document).ready(function() {
        var notification = document.getElementById("got_notification").value;
        if (notification != "") {
            const $ = selector => document.querySelector(selector)
            $('.wrapper').classList.add('animate')
        }
        function stickyInit($){

            function check_sticky(){
                if ( $("#search_result_no").hasClass("search_result_no") ) {
                    const $ = selector => document.querySelector(selector)
                    $('.search_result_n').classList.add('search_result_body')
                }
            }

            window.setInterval(check_sticky,500);
        }
        $(document).click(function() {
            const $ = selector => document.querySelector(selector)
            if ($('.main2').style.display == 'block') {
                $('.main2').style.display = 'none'
            }
        })
        jQuery(document).ready(function ($) {

        stickyInit($);

        });
        function search(query = "") {
            const $ = selector => document.querySelector(selector)
            const notification = $('.notification')

            const xhttp = new XMLHttpRequest();
            let url = new URL('http://127.0.0.1:8000/dashboard/'+query+'/search');
            xhttp.onload = function() {
                $('.main2').style.display = 'block'
                $('.results').innerHTML = this.responseText
                console.log(this.responseText);
            }
            xhttp.open("GET", url);
            xhttp.send();
        }
        $(document).on('keyup','#search1',function () {
                var query = $(this).val()
                if (query != "") {
                    if (query != ".") {
                        search(query)
                    } else {
                        console.log("Cant search for that")
                    }
                } else {
                    const $ = selector => document.querySelector(selector)
                    document.getElementById('search1').placeholder = 'Search HHUB..'
                    console.log('Search HHUB..')
                }
            })
    });

    function showNotification() {
        const $ = selector => document.querySelector(selector)
        const notification = $('.notification')
        // const bellSvg = $('svg')
        // const bellSvgPath = $('svg path')
        const wrapperHide = $('.wrapper')
        const numHide = $('.num')
        // const bellHide = $('.bell')

        if (notification.style.display == 'none') {
            notification.style.display = 'block'
            wrapperHide.classList.remove('animate')
        } else {
            notification.style.display = 'none'
            wrapperHide.classList.add('animate')
        }
    }

    function hide_noty() {
        const $ = selector => document.querySelector(selector)
        const wrapperHide = $('.wrapper')
        setTimeout(() => {
            notification.style.display = 'none'
            wrapperHide.classList.add('animate')
        }, 2000)
    }
    function hide_search() {
        const $ = selector => document.querySelector(selector)
        setTimeout(() => {
                $('.main2').style.display = 'none'
        }, 2000)
    }

    
    function chat(elmnt,clr){
            const xhttp = new XMLHttpRequest();
            let url = new URL("http://127.0.0.1:8000/dashboard/"+clr+"/chat");
            xhttp.onload = function() {
                document.getElementById('chat_box').innerHTML = this.responseText
            }
            xhttp.open("GET", url);
            xhttp.send();
        }
</script>
