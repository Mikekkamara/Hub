<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div class="img">
            <img src="{{ asset('img/animals.svg') }}" alt="">
        </div>
<div class="log-bar">
    @if(Route::has('login'))
        <div class="link-container">
            @auth
                <a href="{{ url('/home') }}" class="btn-log" >{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="btn-reg">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" >{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif


    <div class="c-container">
        <p >
            {{ config('app.name', 'Galleria') }}
        </p>

        <div class="link-wel">
            <ul >
                <li>
                    <a href="#" class="ab-wel" title="Documentation">About Us</a>
                </li>
                <li>
                    <a href="#" class="cont-wel" title="Contacts">Contacts</a>
                </li>

            </ul>
        </div>
    </div>
</div>

</body>
</html>
