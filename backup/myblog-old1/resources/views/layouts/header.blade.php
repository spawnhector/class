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
 </li>
 --}}
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
 <div class="notification" style="display: none" id="notification" onmouseleave="hide_noty()">
    <div class="head"><p>Notification</p></div>
    <?php $count_noty = 0;?>
    <div class="main" role="main" class="ui-content">
     <?php 
     function custom_echo1($x, $length)
     {
        if (strlen($x) <= $length)
        { 
            echo "<span class='content'>$x</span>" ; 
        }else{
            $y=substr($x, 0, $length) . '...' ;
            echo "<span class=''>$y</span>"; 
            
        } 
    } 
     function custom_echo2($x, $length)
     {
         $check = explode(' ',$x);
         $check1 = explode('@',$check[6]);
         $check2= $check1[1];
         if ($check2 == Auth::user()->name) {
             $replace_this = '@'.Auth::user()->name;
             $with = "your";
             $replacement = str_replace($replace_this, $with, $x);
             if (strlen($replacement) <= $length)
            { 
                echo "<span class='content'>$replacement</span>" ; 
            }else{
                $y=substr($replacement, 0, $length) . '...' ;
                echo "<span class=''>$y</span>"; 
            }
         }else{
            if (strlen($x) <= $length)
            { 
                echo "<span class='content'>$x</span>" ; 
            }else{
                $y=substr($x, 0, $length) . '...' ;
                echo "<span class=''>$y</span>"; 
            }
         }
    } 
    
    ?> 
    @foreach (Auth::user()->unreadNotifications as $notifications)
        <?php ++$count_noty;?>
        @if ($count_noty == 6)
            <style>
                .main{
                    Overflow-y:scroll; 
                    height:276px;
                    margin-left: 11px;
                }
                .main::-webkit-scrollbar{
                    width: 1em;
                }
            </style>
        @endif
        @switch($notifications->data['type'])
            @case('friend')
                <ul class="section four">
                    <div class="text four"><img class="notify_img" src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>" alt=""></div>
                    <li class="rect four">
                        <p>{{ custom_echo1($notifications->data['content'], 39) }}
                            <a href={{route('confirmfriend',[$notifications->data['typeid'],$notifications->id])}} class=''>view</a>
                            </p>
                        <?php 
                        $origin = new DateTime($notifications->created_at);
                        $target = new DateTime('now');
                        $interval = $origin->diff($target);
                        ?>
                        <span class="timestamp" style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i class="fa fa-clock-"></i>
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
                <ul class="section four">
                    <div class="text four"><img class="notify_img" src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>" alt=""></div>
                    <li class="rect four">
                        <p>{{ custom_echo1($notifications->data['content'], 39) }}
                            <a href="#" class=''>view</a>
                        </p>
                        <?php 
                        $origin = new DateTime($notifications->created_at);
                        $target = new DateTime('now');
                        $interval = $origin->diff($target);
                        ?>
                        <span class="timestamp" style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i class="fa fa-clock-"></i>
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
                <ul class="section four" data-role="listview">
                    <div class="text four"><img class="notify_img" src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>" alt=""></div>
                    <li class="rect four">
                        <p>{{ custom_echo1($notifications->data['content'], 47) }}
                            <a href="#" class=''>view</a>
                        </p>
                        <?php 
                        $origin = new DateTime($notifications->created_at);
                        $target = new DateTime('now');
                        $interval = $origin->diff($target);
                        ?>
                        <span class="timestamp" style="position: absolute;right: -90px;bottom: 2px;color:whitesmoke;"><i class="fa fa-clock-"></i>
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
                <ul class="section four">
                    <div class="text four"><img class="notify_img" src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>" alt=""></div>
                    <li class="rect four">
                        <p>{{ custom_echo1($notifications->data['content'], 47) }}
                            <a href="#" class=''>view</a>
                        </p>
                        <?php 
                        $origin = new DateTime($notifications->created_at);
                        $target = new DateTime('now');
                        $interval = $origin->diff($target);
                        ?>
                        <span class="timestamp" style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i class="fa fa-clock-"></i>
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
                <ul class="section four">
                    <div class="text four"><img class="notify_img" src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>" alt=""></div>
                    <li class="rect four">
                        <p>{{ custom_echo1($notifications->data['content'], 47) }}
                            <a href="#" class=''>view</a>
                        </p>
                        <?php 
                        $origin = new DateTime($notifications->created_at);
                        $target = new DateTime('now');
                        $interval = $origin->diff($target);
                        ?>
                        <span class="timestamp" style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i class="fa fa-clock-"></i>
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
                <ul class="section four">
                    <div class="text four"><img class="notify_img" src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>" alt=""></div>
                    <li class="rect four">
                        <p>{{ custom_echo1($notifications->data['content'], 47) }}
                            <a href="#" class=''>view</a>
                        </p>
                        <?php 
                        $origin = new DateTime($notifications->created_at);
                        $target = new DateTime('now');
                        $interval = $origin->diff($target);
                        ?>
                        <span class="timestamp" style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i class="fa fa-clock-"></i>
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
                <ul class="section four">
                    <div class="text four"><img class="notify_img" src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>" alt=""></div>
                    <li class="rect four">
                        <p>{{ custom_echo1($notifications->data['content'], 47) }}
                            <a href={{route('show-post',[$notifications->data['typeslug'],$notifications->id])}} class=''>view</a>
                        </p>
                        <?php 
                        $origin = new DateTime($notifications->created_at);
                        $target = new DateTime('now');
                        $interval = $origin->diff($target);
                        ?>
                        <span class="timestamp" style="position: absolute;right: -82px;bottom: 2px;color:whitesmoke;"><i class="fa fa-clock-"></i>
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
                <ul class="section four">
                    <div class="text four"><img class="notify_img" src="http://localhost/xampp/myblog/storage/app/public/<?php echo $notifications->data['avatar']; ?>" alt=""></div>
                    <li class="rect four">
                        <p>{{ custom_echo2($notifications->data['content'], 43) }}
                            <a href={{route('show-comment',[$notifications->data['typeslug'],$notifications->id])}} class=''>view</a>
                        </p>
                        <?php 
                        $origin = new DateTime($notifications->created_at);
                        $target = new DateTime('now');
                        $interval = $origin->diff($target);
                        ?>
                        <span class="timestamp" style="position: absolute;right: -92px;bottom: 2px;color:whitesmoke;"><i class="fa fa-clock-"></i>
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
            });

            function showNotification() {
                const $ = selector => document.querySelector(selector)
                const notification = $('.notification')
                const bellSvg = $('svg')
                const bellSvgPath = $('svg path')
                const wrapperHide = $('.wrapper')
                const numHide = $('.num')
                const bellHide = $('.bell')

                if (notification.style.display == 'none') {
                    notification.style.display = 'block'
                    wrapperHide.classList.remove('animate')
                } else {
                    notification.style.display = 'none'
                    wrapperHide.classList.add('animate')
                }
            }
            function hide_noty(){
                const $ = selector => document.querySelector(selector)
                const wrapperHide = $('.wrapper')
                setTimeout(() => {
                    notification.style.display = 'none'
                    wrapperHide.classList.add('animate')
                }, 5000)
            }
        </script>