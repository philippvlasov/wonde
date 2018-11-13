@extends('layouts.layout')
@include('includes.comments')
@include('includes.sidebar')

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
                            <div class="meta-item"><div class="meta-title published">Дата:</div>{{ $singleNews->created_at }}</div>
                            <div class="meta-item"><div class="meta-title views">Просмотры:</div>{{ $singleNews->views }}</div>
                            <div class="meta-item"><div class="meta-title comments">Комментарии:</div>{{ $comments->count() }}</div>
                            <div class="meta-item"><div class="meta-title tags">Категория:</div>{{ $singleNews->getRelation('category')->category_name }}</div>
                        </div>


                        <!-- Content -->

                        <div class="blog-content">

                            <div class="media">
                                <div id="portfolio-blog-slider-container">

                                    <div id="portfolio-blog-slider">

                                        <!-- Actual Images -->

                                        <img alt="" src="{{ asset($singleNews->img_name) }}" class="fullwidth">

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

                @yield('sidebar')

            </div>

            <!-- END Main Column / Sidebar -->


        </div>
    </div>
@endsection