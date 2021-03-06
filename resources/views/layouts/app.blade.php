<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{url ('js/script.js')}}"></script>
    <script src="{{url ('js/ajax.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url ('css/style_1.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: url("{{asset('images/background.jpg')}}");
        }
    </style>
</head>
<body>

<div class="main">
    <div class="top_part">
        <a href="/homePage">
            <div id="logo"></div>
        </a>
        <ul id="social">
            <li><a href="http://www.facebook.com" class="soc_1"></a></li>
            <li><a href="http://www.google.com" class="soc_2"></a></li>
            <li><a href="http://www.twitter.com" class="soc_3"></a></li>
        </ul>
    </div>

    <div class="phone_menu">
        <ul class="main_menu">
            <li class="catalog"><a href="ringCatalog">КАТАЛОГ</a><i class="fa fa-caret-down"
                                                                    style="font-size:16px; margin-left: 5px;"></i>
                <ul class="sub_menu" style="z-index: 1;">
                    <li><a href="/ringCatalog">КОЛЬЦА</a></li>
                    <li><a href="/braceletCatalog">БРАСЛЕТЫ</a></li>
                    <li><a href="/necklacesCatalog">ОЖЕРЕЛЬЕ</a></li>
                    <li><a href="/earringCatalog">СЕРЕЖКИ</a></li>
                </ul>
            </li>
            <li><a href="/gallery">ГАЛЕРЕЯ</a>
            </li>
            <li><a href="/aboutUs">О НАС</a>
            </li>
            <li><a href="/contacts">КОНТАКТЫ</a>
            </li>
            @if (Auth::guest())
                <li style="float: right"><a href="{{ route('login') }}">ВОЙТИ</a></li>
                <li style="float: right"><a href="{{ route('register') }}">РЕГИСТРАЦИЯ</a></li>
            @else
                <li class="login" style="float: right">
                    <a role="button" aria-expanded="false">
                        {{ Auth::user()->name }}<i class="fa fa-caret-down"
                                                   style="font-size:16px; margin-left: 5px;"></i>
                    </a>
                    <ul class="login_sub_menu" style="z-index: 1;">
                        <li class="sub_login">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                ВЫЙТИ
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endif

                    </ul>
                </li>
        </ul>
    </div>

<div id="app">
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
