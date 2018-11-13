@extends('layouts.layout')

@section('main_content')

    <div class="main-content">
        <div class="main-content-inner content-width">

            <div class="relative">

                <!-- Page Title -->

                <h1>Наши последние проекты</h1>

                <!-- END Title -->


                <!-- Filters -->

                <!-- Ensure all filter tags are in the "show all" data-filter -->
                <div class="portfolio-filtering">
                    <ul id="portfolio-filters">
                        <li><span class="filter active" data-filter="branding coding identity">Все</span></li>
                        <li><span class="filter" data-filter="branding">Новые</span></li>
                        <li><span class="filter" data-filter="coding">Популярные</span></li>
                        <li><span class="filter" data-filter="identity">Лучшие</span></li>
                    </ul>
                </div>

                <!-- END Filters -->

            </div>

            <!-- 4 Column Portfolio Grid -->

            <!-- Add filter tags to each li class -->
            <ul class="column-container grid" id="portfolio">

                @foreach($lastNews as $item)

                    <li class="column-one-fourth portfolio-item branding">
                        <!-- Image -->
                        <a href="{{ route('post', ['id' => $item->id]) }}" class="image-link"><img alt="" src="{{ asset($item->img_name) }}" class="fullwidth"></a>
                        <!-- Title -->
                        <h3><a href="{{ route('post', ['id' => $item->id]) }}">{{ $item->title }}</a></h3>
                        <!-- Tags -->
                        <div class="tags">{{ $item->short_content }}</div>
                    </li>

                @endforeach

                @foreach($popularNews as $item)

                    <li class="column-one-fourth portfolio-item coding">
                        <!-- Image -->
                        <a href="{{ route('post', ['id' => $item->id]) }}" class="image-link"><img alt="" src="{{ asset($item->img_name) }}" class="fullwidth"></a>
                        <!-- Title -->
                        <h3><a href="{{ route('post', ['id' => $item->id]) }}">{{ $item->title }}</a></h3>
                        <!-- Tags -->
                        <div class="tags">{{ $item->short_content }}</div>
                    </li>

                @endforeach

                @foreach($bestNews as $item)

                    <li class="column-one-fourth portfolio-item identity">
                        <!-- Image -->
                        <a href="{{ route('post', ['id' => $item->id]) }}" class="image-link"><img alt="" src="{{ asset($item->img_name) }}" class="fullwidth"></a>
                        <!-- Title -->
                        <h3><a href="{{ route('post', ['id' => $item->id]) }}">{{ $item->title }}</a></h3>
                        <!-- Tags -->
                        <div class="tags">{{ $item->short_content }}</div>
                    </li>

            @endforeach

            </ul>

            <!-- END 4 Column Portfolio Grid -->


        </div>
    </div>

@endsection