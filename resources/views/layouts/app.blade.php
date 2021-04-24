<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="img">
        <img src="{{ asset('img/animals.svg') }}" alt="">
    </div>


    <nav class="nav-bar-nav">

            <!--APPLICATION NAME -->
            <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Galleria') }}
            </a>
             <!--APPLICATION NAME -->

            @guest

            @if (Route::has('login'))
                <ul class="nav-item">
                    <li >
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                </ul>
            @endif

            @if (Route::has('register'))
                <ul class="nav-item">
                    <li >
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                </ul>
            @endif
                @else

                    <a id="navbarDropdown" class="name-bar" href="#">
                            {{ Auth::user()->name }}
                    </a>

                    <a class="logt" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                     <!--THIS FORM IS SUBMITTED BY JS -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            @endguest

            <hr>
        </nav>

        @yield('content')

</body>
</html>
