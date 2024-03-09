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
                <nav class="space-x-4 text-orange-300 text-sm sm:text-base flex items-center"> <!-- Added 'flex items-center' -->
                    <a href="{{ url('blog') }}">Blog</a>
                    <a href="{{ url('about') }}">About</a>
                    <a href="{{ url('destinations') }}">Destinations</a>
                    <a href="{{ route('contact') }}">Contact</a>
                    <div class="search-dropdown">
                        <a href="#" class="search-option">Search Country</a>
                        <div class="dropdown-content">
                            <a href="{{ route('search', ['query' => 'Spain']) }}">Spain</a>
                            <a href="{{ route('search', ['query' => 'France']) }}">France</a>
                            <a href="{{ route('search', ['query' => 'Iceland']) }}">Iceland</a>
                            <!-- Add more countries as needed -->
                        </div>
                    </div>
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
        <div class="container">
            <div class="row justify-content-center">
                <h3>{{__('messages.blog')}}</h3>
            </div>
        </div>
    </div>
</body>

</html>
