<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> IVA </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{url ('js/script.js')}}"></script>
    <script src="{{url ('js/ajax.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url ('css/style_1.css')}}">
    <style>body {
            color: white;
        }</style>


    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>

    <!--
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.rtl.min.css"/>
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
            <li class="catalog"><a href="/ringCatalog">КАТАЛОГ</a><i class="fa fa-caret-down"
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

    @yield('content')

    <div class="copy"> Copyright &copy 2018</div>
    <div class="popupGallery">
        <div class="closeBtn">x</div>
    </div>
</body>
</html>
