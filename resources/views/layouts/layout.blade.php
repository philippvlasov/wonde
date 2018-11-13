<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Wonde - универсальный бизнес шаблон сайта</title>

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    @if(Route::is('post' || 'blog_post'))
        <script type="text/javascript" src="{{ asset('js\portfolio-blog-slider-settings.js') }}"></script>
    @endif
    @if(Route::is('portfolio'))
        <script type="text/javascript" src="{{ asset('js\jquery.mixitup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js\portfolio-settings.js') }}"></script>
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
                    <li><a href="{{ route('main') }}" class="{{ Route::is('main') ? 'current' : null }}">Главная</a>
                    </li>
                    <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'current' : null }}">О компании</a>
                    </li>
                    <li><a href="{{ route('portfolio') }}" class="{{ Route::is('portfolio') ? 'current' : null }}">Проекты</a>
                    </li>
                    <li><a href="{{ route('blog') }}" class="{{ Route::is('blog') ? 'current' : null }}">Новости</a>
                    </li>
                    <li><a href="{{ route('contacts') }}" class="{{ Route::is('contacts') ? 'current' : null }}">Контакты</a>
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

        @yield('partners')

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

                    @foreach($randomNews as $item)

                        <div class="column-one-fourth">
                            <img alt="" src="{{ asset('images\topbar\logo_white.png') }}" height="17" width="57"
                                 class="logo">
                            <p>{{ $item->short_content }}</p>
                            <p><a href="post/{{ $item->id }}">Читать далее</a>
                            </p>
                        </div>

                    @endforeach

                    <div class="column-one-fourth">
                        <h3>Галерея</h3>
                        <div class="footer-flickr-container">
                            {{--<script type="text/javascript" src="{{ asset('js\flickr.js') }}"></script>--}}

                            @foreach($galleryPics as $picture)

                                <div class="flickr_badge_image">
                                    <a target="_blank" href="{{ $picture->img_link }}" class="image-link mini">
                                        <img src="{{ $picture->img_link }}" alt="{{ $picture->img_link }}">
                                    </a>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="footer-lower-container">

                    <ul class="footer-lower">
                        <li><a href="{{ route('main') }}">Главная</a>
                        </li>
                        <li><a href="{{ route('about') }}">О нас</a>
                        </li>
                        <li><a href="{{ route('portfolio') }}">Проекты</a>
                        </li>
                        <li><a href="{{ route('blog') }}">Новости</a>
                        </li>
                        <li><a href="{{ route('contacts') }}">Контакты</a>
                        </li>
                    </ul>

                    <div class="footer-copyright">
                        &copy; {{ now()->year }} | Wonde - универсальный бизнес шаблон сайта
                    </div>

                </div>

                <a class="top-of-page-link" href="#"><i class="fa fa-chevron-up"></i></a>

            </div>
        </div>
    </div>

</div>

</body>

</html>