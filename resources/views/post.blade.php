@extends('layouts.layout')
@include('includes.comments')

@section('main_content')
    <div class="main-content">
        <div class="main-content-inner content-width">


            <!-- Main Column / Sidebar -->

            <div class="column-container">


                <!-- Main Column -->

                <div class="column-three-qtr">


                    <!-- Blog Post -->

                    <div class="blog-post actual-post">
                        <!-- Title -->
                        <h1>{{ $singleNews->title }}</h1>
                        <!-- Meta -->
                        <div class="blog-meta">
                            <div class="meta-item"><div class="meta-title published">Дата:</div><a href="#">{{ $singleNews->created_at }}</a></div>
                            <div class="meta-item"><div class="meta-title views">Просмотры:</div><a href="#">{{ $singleNews->views }}</a></div>
                            <div class="meta-item"><div class="meta-title comments">Комментарии:</div><a href="#">{{ $comments->count() }}</a></div>
                            <div class="meta-item"><div class="meta-title tags">Теги:</div><a href="#">новости</a>, <a href="#">шаблоны</a></div>
                        </div>


                        <!-- Content -->

                        <div class="blog-content">

                            <div class="media">
                                <div id="portfolio-blog-slider-container">

                                    <div id="portfolio-blog-slider">

                                        <!-- Actual Images -->

                                        <img alt="" src="{{ asset('images') }}/placeholders/{{ $singleNews->img_name }}" class="fullwidth">

                                        <!-- END Actual Images -->

                                    </div>


                                    <!-- Slide Controls -->

                                    <div class="portfolio-blog-slider-controls">
                                        <div id="portfolio-blog-slider-prev"></div>
                                        <div id="portfolio-blog-slider-next"></div>
                                    </div>

                                    <!-- END Slide Controls -->


                                </div>
                            </div>

                            <!-- END Image -->


                            <!-- H3 Title -->
                            <h3>{{ $singleNews->sub_title }}</h3>
                            <!-- Paragraph -->
                            <p>{{ $singleNews->content }}</p>
                        </div>

                        <!-- END Content -->


                    </div>

                    <!-- END Blog Post -->



                    <!-- Share Links -->

                    <ul class="post-sharing">
                        <li><a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Поделиться в Facebook</div></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Поделиться в Twitter</div></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">Поделиться в LinkedIn</div></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i><div class="tooltip">Поделиться в Pinterest</div></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Поделиться в Google+</div></a></li>
                    </ul>

                    <!-- END Share Links -->



                    <!-- Divider -->

                    <div class="divider"></div>

                    <!-- END Divider -->



                    <!-- Reader Comments -->
                    <div class="comments">
                        @yield('comments')
                    </div>

                    <!-- END Reader Comments -->



                    <!-- Divider -->

                    <div class="divider"></div>

                    <!-- END Divider -->



                    <!-- Post Comment Form -->

                    <div class="comment-form">
                        <h2>Оставить комментарий</h2>
                        <form id="comment-form" name="comment-form" method="post" action="/comment">
                            @csrf
                            <input type="hidden" name="id" value="{{ $singleNews->id }}">
                            <textarea name="comment" placeholder="Сообщение *"></textarea>
                            <input type="submit" class="accent" value="Готово">
                        </form>
                    </div>

                    <!-- END Post Comment Form -->


                </div>

                <!-- END Main Column -->



                <!-- Sidebar -->

                <div class="column-one-fourth sidebar">


                    <!-- Categories -->

                    <div class="sidebar-widget categories">
                        <!-- Title -->
                        <h3>Категории новостей</h3>
                        <!-- Category Links -->
                        <a href="#">Название категории</a>
                        <a href="#">Название категории</a>
                        <a href="#">Название категории</a>
                        <a href="#">Название категории</a>
                    </div>

                    <!-- END Categories -->



                    <!-- Search -->

                    <div class="sidebar-widget search">
                        <!-- Title -->
                        <h3>Поиск по сайту</h3>
                        <!-- Search Form -->
                        <form name="blog-search" method="get" action="#">
                            <div class="container">
                                <!-- Textbox -->
                                <input type="text" id="blog-search" name="blog-search" placeholder="Искать">
                                <!-- Search Button -->
                                <input type="submit" id="go" class="go" value="&#xf002;">
                            </div>
                        </form>
                    </div>

                    <!-- END Search -->



                    <!-- Latest Project -->

                    <div class="sidebar-widget project">
                        <!-- Title -->
                        <h3>Новость дня</h3>
                        <!-- Image -->
                        <a href="#" class="image-link"><img alt="" src="images\placeholders\preview4.jpg" class="fullwidth"></a>
                        <!-- Project Title -->
                        <h3 class="sub-title"><a href="#">Заголовок новости</a></h3>
                        <!-- Tags -->
                        <div class="tags">Категория</div>
                    </div>

                    <!-- END Latest Project -->



                    <!-- Popular Posts -->

                    <div class="sidebar-widget posts">
                        <!-- Title -->
                        <h3>Последнее</h3>


                        <!-- Post -->

                        <div class="post">
                            <!-- Image Column -->
                            <div class="img-column">
                                <a href="blog-post.html" class="image-link mini"><img alt="" src="images\placeholders\preview9-mini.jpg" class="fullwidth"></a>
                            </div>
                            <!-- Content Column -->
                            <div class="content-column">
                                <!-- Post Title -->
                                <h3 class="sub-title"><a href="blog-post.html">Взаимодействие корпорации и клиента экономит баинг и селлинг.</a></h3>
                                <!-- Date -->
                                <div class="date">31 августа 2016</div>
                            </div>
                        </div>

                        <!-- END Post -->



                        <!-- Post -->

                        <div class="post">
                            <!-- Image Column -->
                            <div class="img-column">
                                <a href="blog-post.html" class="image-link mini"><img alt="" src="images\placeholders\preview11-mini.jpg" class="fullwidth"></a>
                            </div>
                            <!-- Content Column -->
                            <div class="content-column">
                                <!-- Post Title -->
                                <h3 class="sub-title"><a href="blog-post.html">Взаимодействие корпорации и клиента экономит баинг и селлинг.</a></h3>
                                <!-- Date -->
                                <div class="date">31 августа 2016</div>
                            </div>
                        </div>

                        <!-- END Post -->



                        <!-- Post -->

                        <div class="post">
                            <!-- Image Column -->
                            <div class="img-column">
                                <a href="blog-post.html" class="image-link mini"><img alt="" src="images\placeholders\preview8-mini.jpg" class="fullwidth"></a>
                            </div>
                            <!-- Content Column -->
                            <div class="content-column">
                                <!-- Post Title -->
                                <h3 class="sub-title"><a href="blog-post.html">Взаимодействие корпорации и клиента экономит баинг и селлинг.</a></h3>
                                <!-- Date -->
                                <div class="date">31 августа 2016</div>
                            </div>
                        </div>

                        <!-- END Post -->


                    </div>

                    <!-- END Popular Posts -->


                </div>

                <!-- END Sidebar -->


            </div>

            <!-- END Main Column / Sidebar -->


        </div>
    </div>
@endsection