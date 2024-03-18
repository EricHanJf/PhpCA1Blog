<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
// Determine if the navigation bar should be small based on scroll position
$scrollClass = isset($_GET['scroll']) && $_GET['scroll'] === 'down' ? 'small' : '';
?>
<script>
    window.addEventListener('scroll', function() {
        var header = document.querySelector('header');
        if (window.scrollY > 0) {
            header.classList.add('small');
        } else {
            header.classList.remove('small');
        }
    });
</script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Cvew4w8tDFAAgvIy+P3Ge2UCFegmD4JHwDZi4AGGZPl/oRtmjKuMbBIo3Tg/NxGR4Zco9FUcImbOtKi2E4Mw6w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoURqguj-ghlk7AqxvjNo-Y_t8MhP0D4s&callback=initMap" async defer></script>
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-cool-gray-600 py-6 <?php echo $scrollClass; ?>">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div class="travelworldTitle">
                    <a href="{{ url('/') }}" class="text-lgInHeader font-semibold text-orange-200 no-underline">
                        {{ config('app.name', 'TravelBlog') }}
                    </a>
                </div>
                <nav class="space-x-4 text-orange-300 text-sm sm:text-base flex items-center navbar">
                    <a href="{{ url('blog') }}">Blog</a>
                    {{-- <a href="{{ url('destinations') }}">Destinations</a> --}}
                    {{-- <a href="{{ route('contact') }}">Contact</a> --}}
                    <a href="{{ route('picturescollection') }}">City Gallery</a> 
                    <a href="{{ route('map') }}">Map</a>
                    <div class="search-dropdown">
                        <a href="#" class="search-option">Destinations</a>
                        <div class="dropdown-content">
                            <a href="{{ route('search', ['query' => 'Spain']) }}">Spain</a>
                            <a href="{{ route('search', ['query' => 'France']) }}">France</a>
                            <a href="{{ route('search', ['query' => 'Iceland']) }}">Iceland</a>
                            <a href="{{ route('search', ['query' => 'Ireland']) }}">Ireland</a>
                            <a href="{{ route('search', ['query' => 'Netherland']) }}">Netherland</a>
                            <a href="{{ route('search', ['query' => 'Italy']) }}">Italy</a>
                            <a href="{{ route('search', ['query' => 'London']) }}">London</a>

                            <!-- Add more countries as needed -->
                        </div>
                    </div>
                    <a href="{{ url('about') }}">About</a>
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>
        
                        <a href="{{ route('logout') }}" class="no-underline hover:underline"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        

        @yield('content')
    </div>
    <div>
        @include('layouts.footer')
        {{-- <div class="container">
            <div class="row justify-content-center">
                <h3>{{__('messages.blog')}}</h3>
            </div>
        </div> --}}
    </div>
</body>

</html>
