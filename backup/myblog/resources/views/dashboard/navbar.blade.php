<nav class="navbar navbar-default navbar-fixed-top navbar-top" style="position: fixed;top:48px">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="hamburger btn-link" style="outline: none">
                <span class="hamburger-inner"></span>
            </button>
            @section('breadcrumbs')
            <ol class="breadcrumb hidden-xs">
                @php
                $segments = array_filter(explode('/', str_replace(route('dashboard'), '', Request::url())));
                $url = route('dashboard');
                @endphp
                @if(count($segments) == 0)
                    <li class="active"><i class="voyager-boat"></i> {{ __('voyager::generic.dashboard') }}</li>
                @else
                    <li class="active">
                        <a href="{{ route('dashboard')}}"><i class="voyager-boat"></i> {{ __('voyager::generic.dashboard') }}</a>
                    </li>
                    @foreach ($segments as $segment)
                        @php
                        $url .= '/'.$segment;
                        @endphp
                        @if ($loop->last)
                            <li>{{ __($segment) }}</li>
                        @else
                            <li>
                                <a href="{{ $url }}">{{ __($segment) }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ol>
            <ul class="second_navbar_button">
                <li>
                    <a href="">FLIRT</a>
                </li>
                <li>
                    <a href="">GIFT</a>
                </li>
                <li>
                    <a href="">SHUFFLE</a>
                </li>
            </ul>

            <div class="chat_box" id="chat_box">
            </div>
            @show

        </div>
    </div>
</nav>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>


<script>

    $(document).ready(function(){

        
        function chat(elmnt,clr){
                const xhttp = new XMLHttpRequest();
                let url = new URL("http://127.0.0.1:8000/dashboard/"+clr+"/chat");
                xhttp.onload = function() {
                    document.getElementById('chat_box').innerHTML = this.responseText
                }
                xhttp.open("GET", url);
                xhttp.send();
            }
        
    })
</script>
