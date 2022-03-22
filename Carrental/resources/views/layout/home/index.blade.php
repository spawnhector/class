<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        @include('components.home.links')
        @include('components.home.style.alert')
        @include('components.home.style.buttonstyle')
        @include('components.home.scripts')
        <script src="{{asset('js/location.js')}}"></script>
        <script src="{{asset('js/payment.js')}}"></script>
        <script src="{{asset('js/validateBooking.js')}}"></script>
        <script src="https://kit.fontawesome.com/1e7319fbc7.js" crossorigin="anonymous"></script>
        <!-- start Simple Custom CSS and JS -->
        @livewireScripts
        @livewireStyles
    </head>
    
    @yield('body')
    @if (!Auth::check())
        @include('components.modal')
    @endif
    <script src="{{asset('js/bookcar.js')}}"></script>
    @include('components.alert')
</html>