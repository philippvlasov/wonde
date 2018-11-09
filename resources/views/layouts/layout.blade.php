<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Wonde - универсальный бизнес шаблон сайта</title>

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    @if(Route::is('post'))
        <script type="text/javascript" src="{{ asset('js\portfolio-blog-slider-settings.js') }}"></script>
    @endif
</head>

<body class="light-bg {{ Route::is('main') ? 'home' : null }}">

<div class="main-container">
    @section('top_bar')
        <div class="topbar-outer dark">
            <div class="topbar content-width">
                <div class="table fullheight">
                    <div class="table-cell fullheight middle">
                        <div class="logo">
                            <a href="{{ route('main') }}"><img alt="" src="{{ asset('images\topbar\logo_white.png') }}"
                                                      height="17">
                            </a>
                        </div>
                    </div>
                </div>

                <ul class="topsocial">
                    <li><a href="#"><i class="fa fa-linkedin-square"></i>
                            <div class="tooltip">LinkedIn</div>
                        </a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i>
                            <div class="tooltip">Facebook</div>
                        </a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i>
                            <div class="tooltip">Twitter</div>
                        </a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus"></i>
                            <div class="tooltip">Google+</div>
                        </a>
                    </li>
                </ul>

                <ul class="topnav">
                    <li><a href="index.html" class="current">Главная</a>
                    </li>
                    <li><a href="about.html">О компании</a>
                    </li>
                    <li><a href="portfolio.html" class="drop">Проекты</a>
                        <ul>
                            <li><a href="#">Название проекта №1</a></li>
                            <li><a href="#">Название проекта №2</a></li>
                            <li><a href="#">Название проекта №3</a></li>
                            <li><a href="#">Название проекта №4</a></li>
                            <li><a href="#">Название проекта №5</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html" class="drop">Новости</a>
                        <ul>
                            <li><a href="blog.html">Категории</a>
                            </li>
                            <li><a href="blog-post.html">Описание новости</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Контакты</a>
                    </li>
                </ul>

                <a href="#" class="mobilenav-click">
                    <div class="mobilenav-button-container">
                        <div class="mobilenav-button-inner">
                            <div class="mobilenav-button"></div>
                        </div>
                    </div>
                </a>

                <div class="mobilenav-container">
                    <ul class="mobilenav">
                    </ul>
                </div>
            </div>
        </div>
    @show

    @yield('banner')

    @yield('main_content')

    <div class="footer-container">

        <div class="spacer"></div>

        <div class="content-width">
            <div class="client-logos-container">

                <div class="client-logos-title">
                    <span>Наши партнеры</span>
                </div>

                <div id="clients-back"></div>
                <div id="clients-next"></div>

                <div class="carousel">
                    <ul id="clients-carousel" class="column-container">

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="{{ asset('images\client-logos\logo1.png') }}">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="{{ asset('images\client-logos\logo2.png') }}">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="{{ asset('images\client-logos\logo3.png') }}">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="{{ asset('images\client-logos\logo4.png') }}">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="{{ asset('images\client-logos\logo5.png') }}">
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="{{ asset('images\client-logos\logo6.png') }}">
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-infobar">
            <div class="content-width">
                <!-- Text -->
                Мы предоставляем только проверенную информацию. Все права защищены.
            </div>
        </div>

        <div class="footer">
            <div class="content-width">


                <!-- Four Columns -->

                <div class="column-container">

                    <div class="column-one-fourth">
                        <img alt="" src="{{ asset('images\topbar\logo_white.png') }}" height="17" width="57"
                             class="logo">
                        <p>Маркетингово-ориентированное издание, как следует из вышесказанного, редко соответствует
                            рыночным ожиданиям.</p>
                        <p>Психологическая среда, безусловно, порождает продуктовый ассортимент.</p>
                        <p><a href="about.html">Читать далее</a>
                        </p>
                    </div>

                    <div class="column-one-fourth">
                        <img alt="" src="{{ asset('images\topbar\logo_white.png') }}" height="17" width="57"
                             class="logo">
                        <p>Маркетингово-ориентированное издание, как следует из вышесказанного, редко соответствует
                            рыночным ожиданиям.</p>
                        <p>Психологическая среда, безусловно, порождает продуктовый ассортимент.</p>
                        <p><a href="about.html">Читать далее</a>
                        </p>
                    </div>

                    <div class="column-one-fourth">
                        <h3>Галерея</h3>
                        <div class="footer-flickr-container">
                            <script type="text/javascript" src="{{ asset('js\flickr.js') }}"></script>
                        </div>
                    </div>
                    <div class="column-one-fourth">

                        <h3>Подписаться</h3>
                        <div class="footer-newsletter">
                            <form id="newsletter" name="newsletter" method="post" action="#">
                                <div class="container">
                                    <input type="text" name="name" class="textbox" placeholder="Email Address">
                                    <input type="submit" name="submit" id="submit" value="Готово" class="button">
                                </div>
                            </form>
                        </div>

                        <h3>Ждем Вас</h3>

                        <ul class="footer-social">
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square"></i>
                                    <div class="tooltip">LinkedIn</div>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i>
                                    <div class="tooltip">Facebook</div>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i>
                                    <div class="tooltip">Twitter</div>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i>
                                    <div class="tooltip">Google+</div>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i>
                                    <div class="tooltip">YouTube</div>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i>
                                    <div class="tooltip">Pinterest</div>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="footer-lower-container">

                    <ul class="footer-lower">
                        <li><a href="index.html">Главная</a>
                        </li>
                        <li><a href="about.html">О нас</a>
                        </li>
                        <li><a href="portfolio.html">Проекты</a>
                        </li>
                        <li><a href="blog.html">Новости</a>
                        </li>
                        <li><a href="contact.html">Контакты</a>
                        </li>
                    </ul>

                    <div class="footer-copyright">
                        &copy; 2016 | Wonde - универсальный бизнес шаблон сайта
                    </div>

                </div>

                <a class="top-of-page-link" href="#"><i class="fa fa-chevron-up"></i></a>

            </div>
        </div>

    </div>

</div>

</body>

</html>