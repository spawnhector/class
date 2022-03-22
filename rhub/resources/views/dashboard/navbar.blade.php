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
            @show
        </div>
    </div>
</nav>
