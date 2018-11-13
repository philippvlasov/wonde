@extends('layouts.adminLayout')

@section('content')

    @if(Route::is('news.show'))

        <h5>Id {{ $singleNews->id }}</h5>
        <h4>Title: {{ $singleNews->title }}</h4>
        <h4>Category: {{ $singleNews->getRelation('category')->category_name }}</h4>

        <div>
            <img class="newsAvatar" src="{{ asset($singleNews->img_name) }}" alt="{{ $singleNews->img_name }}">
        </div>

        <h4>{{ $singleNews->short_content }}</h4>
        <h4>{{ $singleNews->sub_title }}</h4>
        <h4>{{ $singleNews->content }}</h4>

        <h4>Date: {{ $singleNews->created_at }}</h4>
        <h4>Views: {{ $singleNews->views }}</h4>

        <a href="{{ route('news.edit', ['id' => $singleNews->id]) }}">
            <h3>Edit</h3>
        </a>

    @endif

    @if(Route::is('comments.show'))

        <h5>Id {{ $singleComment->id }}</h5>

        <h4><a href="{{ route('news.show', ['id' => $singleComment->news_id]) }}">News ID {{ $singleComment->news_id }}</a></h4>
        <h4>User name {{ $singleComment->user_name }}</h4>
        <h4>{{ $singleComment->comment_text }}</h4>

        <h4>Date: {{ $singleComment->created_at }}</h4>

        <a href="{{ route('comments.edit', ['id' => $singleComment->id]) }}">
            <h3>Edit</h3>
        </a>

    @endif

@endsection