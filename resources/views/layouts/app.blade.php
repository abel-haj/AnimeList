<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.v4.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.v4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slate.v4.min.css') }}" rel="stylesheet">

    <!-- Owl Carousel Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}"> -->
    <!-- <script type="application/javascript" src="{{ asset('js/owl.carousel.min.js') }}" defer></script> -->
    <style>
        .bg-darker {background-color:#1c1e22;}
    </style>
    @yield('style')
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="#">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ (strpos(Route::currentRouteName(), 'home') === 0) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}
                @if (strpos(Route::currentRouteName(), 'home') === 0)
                    <span class='sr-only'>(current)</span>
                @endif
                </a>
            </li>
            <li class="nav-item {{ (strpos(Route::currentRouteName(), 'featured') === 0) ? 'active' : '' }}">
                <a class="nav-link" href="#">{{ __('Featured') }}
                @if (strpos(Route::currentRouteName(), 'featured') === 0)
                    <span class='sr-only'>(current)</span>
                @endif
                </a>
            </li>
            <li class="nav-item {{ (strpos(Route::currentRouteName(), 'about') === 0) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}
                @if (strpos(Route::currentRouteName(), 'about') === 0)
                    <span class='sr-only'>(current)</span>
                @endif
                </a>
            </li>
            <li class="nav-item {{ (strpos(Route::currentRouteName(), 'contact') === 0) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}
                @if (strpos(Route::currentRouteName(), 'contact') === 0)
                    <span class='sr-only'>(current)</span>
                @endif
                </a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="{{ __('Search') }}">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">{{ __('Search') }}</button>
            </form>
            @guest
                <ul class="navbar-nav ml-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                </ul>
            @else
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}</a>
                <div class="dropdown-menu" style="left:unset;right:0;">
                    <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    <!-- <a class="dropdown-item" href="{{ route('manage') }}">{{ __('Manage Anime') }}</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                </div>
            </li>
            </ul>
            @endguest
        </div>
    </nav>

    <main class="">
        @include('inc.messages')
        @yield('content')
    </main>

    <footer class="p-5 bg-darker text-center">
        @2020
        <a class="" href=""></a>
    </footer>
    </div>
</body>
</html>
