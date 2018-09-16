<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IVA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{url ('js/script.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url ('css/style_1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .mySlides {
            display: none;
        }
    </style>
</head>
<body>

<div class="main">
    <div class="top_part">
        <a href="homePage">
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
            <li class="catalog"><a href="ringCatalog">КАТАЛОГ</a><i class="fa fa-caret-down" style="font-size:16px; margin-left: 5px;"></i>
                <ul class="sub_menu" style="z-index: 1;">
                    <li><a href ="ringCatalog">КОЛЬЦА</a></li>
                    <li><a href="braceletCatalog">БРАСЛЕТЫ</a></li>
                    <li><a href="necklacesCatalog">ОЖЕРЕЛЬЕ</a></li>
                    <li><a href="earringCatalog">СЕРЬГИ</a></li>
                </ul>
            </li>
            <li>
                <a href="gallery">ГАЛЕРЕЯ</a>
            </li>
            <li>
                <a href="aboutUs">О НАС</a>
            </li>
            <li>
                <a href="contacts">КОНТАКТЫ</a>
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
    <div id="slideshow">
        <div>
            <img src="{{asset ("images/slider1.jpg")}}">
        </div>
        <div>
            <img src="{{asset ("images/slider2.jpg")}}">
        </div>
        <div>
            <img src="{{asset ("images/slider3.jpg")}}">
        </div>
        <div>
            <img src="{{asset ("images/slider4.jpg")}}">
        </div>
    </div>

    <div class="news">
        <h2> САМЫЕ ПОПУЛЯРНЫЕ УКРАШЕНИЯ </h2>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="popup">
            <div class="closeBtn">x</div>
        </div>
    </div>


    <ul class="content">
        <li>
            <h4>О НАШИХ<br/> <span>КОЛЬЦАХ</span></h4>
            <div class="image"></div>
            <p><?php
                $text = "Среди потрясающих колец Iva особое место занимает легендарная модель Nirvana,
                мерцающая кристаллами многочисленных расцветок. В этой изумительной коллекции  есть также простые
                и в то же время прекрасные модели с родиевым покрытием и прозрачным кристальным паве,
                поистине роскошные позолоченные коктейльные кольца с восхитительными прозрачными кристаллами в
                 крапановой закрепке и чарующие яркие произведения из кристаллов цвета Black Diamond, Jet Hematite,
                 Jet и Satin в эксклюзивной закрепке Swarovski Pointiage.";
                echo substr ( "$text", 0, 350 ) . "<a href='aboutUs'>...</a>"?></p></p>
            <a href="ringCatalog" class="more"> КАТАЛОГ КОЛЕЦ</a>
        </li>

        <li>
            <h4>О НАШИХ<br/> <span>БРАСЛЕТАХ</span></h4>
            <div class="image"></div>
            <p><?php
                $text = "Браслеты Iva, от элегантных романтичных моделей с родиевым покрытием или
                 позолотой и акцентами из кристального паве до шикарных цепочек в урбанистическом стиле,
                  – это  воплощение современной философии роскоши и инновационного дизайна украшений, которым славится наш бренд.
                  Коллекция Swarovski из сезона в сезон пополняется потрясающими произведениями самых актуальных расцветок,
                   созданными с использованием новейших методик в соответствии с последними модными тенденциями.";
                echo substr ( "$text", 0, 350 ) . "<a href='aboutUs'>...</a>"?></p></p>
            <a href="braceletCatalog" class="more"> КАТАЛОГ БРАСЛЕТОВ</a>
        </li>

        <li>
            <h4>О НАШИХ<br/> <span>ОЖЕРЕЛЬЯХ</span></h4>
            <div class="image"></div>
            <p><?php
                $text = "Коллекция ожерелий Iva – это стильные украшения,
                от простых и в то же время прекрасных нитей с родиевым покрытием или позолотой,
                усыпанных  разноцветными кристаллами, до утончённых произведений,
                которые обязательно привлекут всеобщее внимание. Это изумительные образцы современного инновационного дизайна.";
                echo substr ( "$text", 0, 375 ) . "<a href='aboutUs'>...</a>"?></p></p>
            <a href="necklacesCatalog" class="more"> КАТАЛОГ ОЖЕРЕЛИЙ</a>
        </li>

        <li>
            <h4>О НАШИХ<br/> <span>СЕРЬГАХ</span></h4>
            <div class="image"></div>
            <p><?php
                $text = "В коллекции сверкающих серёжек Iva выделяются серьги-обручи в урбанистическом стиле с
                родиевым покрытием и паве из кристаллов цвета Fuchsia и Amethyst и прозрачных кристаллов;
                классические позолоченные серьги с одним прозрачным кристальным шатоном в обрамлении прозрачного кристального паве;
                 винтажные серьги с палладиевым покрытием, украшенные элегантными подвесками из кристаллов разных пастельных
                  оттенков голубого; и броские серьги с родиевым покрытием и сеткой Crystal Mesh.";
                echo substr ( "$text", 0, 300 ) . "<a href='aboutUs'>...</a>"?></p>
            <a href="earringCatalog" class="more"> КАТАЛОГ СЕРЕЖЕК</a>
        </li>
    </ul>
    <div class="copy"> Copyright &copy 2018</div>
</div>


</body>
</html>