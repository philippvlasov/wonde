@extends('layouts.layout')
@include('includes.sidebar')

@section('main_content')

    <div class="main-content">
        <div class="main-content-inner content-width">


            <!-- Main Column / Sidebar -->

            <div class="column-container">

                <!-- Main Column -->

                <div class="column-three-qtr">

                    @foreach($allNews as $item)

                        <div class="blog-post">
                            <!-- Title -->
                            <h1><a href="{{ route('post', ['id' => $item->id]) }}">{{ $item->title }}</a></h1>
                            <!-- Meta -->
                            <div class="blog-meta">
                                <div class="meta-item">
                                    <div class="meta-title published">Дата:</div>
                                    {{ $item->created_at }}</div>
                                <div class="meta-item">
                                    <div class="meta-title views">Просмотры:</div>
                                    {{ $item->views }}</div>
                                <div class="meta-item">
                                    <div class="meta-title comments">Комментарии:</div>
                                    {{ count($item->getRelation('comments')) }}</div>
                                <div class="meta-item">
                                    <div class="meta-title tags">Теги</div>
                                    {{ $item->getRelation('category')->category_name }}</div>
                            </div>
                            <!-- Image -->
                            <a href="{{ route('post', ['id' => $item->id]) }}" class="media image-link"><img alt=""
                                                                                         src="{{ asset($item->img_name) }}"
                                                                                         class="fullwidth"></a>
                            <!-- Excerpt -->
                            <div class="blog-content">
                                <p>{{ $item->short_content }}</p>
                                <!-- Read More Button -->
                                <a href="{{ route('post', ['id' => $item->id]) }}" class="button accent">Читать далее</a>
                            </div>
                        </div>

                    @endforeach


                    <div class="blog-nav">
                        {{ $allNews->links() }}
                    </div>

                </div>

            @yield('sidebar')

            </div>

        </div>
    </div>

@endsection