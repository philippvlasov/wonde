@extends('layouts.adminLayout')

@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach

            </ul>
        </div>
    @endif

    @if(Route::is('news.edit'))

    <form method="post" action="{{ route('news.update', ['id' => $singleNews->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <p>Title:</p>
            <input type="text" class="form-control" name="title" value="{{ $singleNews->title }}">
        </div>
        <div class="form-group">
            <div class="form-group">
                <img src="{{ asset($singleNews->img_name) }}" alt="">
                <p>Image path:</p>
                <input type="file" name="img_name">
            </div>
        </div>
        <div class="form-group">
            <p>Short content:</p>
            <textarea name="short_content" class="form-control"  cols="30" rows="5">{{ $singleNews->short_content }}</textarea>
        </div>
        <div class="form-group">
            <p>Sub title:</p>
            <textarea name="sub_title" class="form-control"  cols="30" rows="5">{{ $singleNews->sub_title }}</textarea>
        </div>
        <div class="form-group">
            <p>Content:</p>
            <textarea name="post_content" class="form-control"  cols="30" rows="10">{{ $singleNews->content }}</textarea>
        </div>
        <div class="form-group">
            <p>Category id: ({{ $singleNews->getRelation('category')->category_name }})</p>
            <input type="number" class="form-control" name="category_id" value="{{ $singleNews->category_id }}" required>
        </div>
        <div class="form-group">
            <p>Views: </p>
            <input type="number" class="form-control" name="views" value="{{ $singleNews->views }}"  required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @endif

    @if(Route::is('news.create'))

        <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <p>Title:</p>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <p>Image path:</p>
                <input type="file" name="img_name" required>
            </div>
            <div class="form-group">
                <p>Short content:</p>
                <textarea name="short_content" class="form-control"  cols="30" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <p>Sub title:</p>
                <textarea name="sub_title" class="form-control"  cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <p>Content:</p>
                <textarea name="post_content" class="form-control"  cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <p>Category id: </p>
                <input type="number" class="form-control" name="category_id" required>
            </div>
            <div class="form-group">
                <p>Views: </p>
                <input type="number" class="form-control" name="views" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @endif

    @if(Route::is('comments.edit'))

        <form method="post" action="{{ route('comments.update', ['id' => $singleComment->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <p>User name</p>
                <input type="text" class="form-control" name="user_name" value="{{ $singleComment->user_name }}">
            </div>

            <div class="form-group">
                <p>Short content:</p>
                <textarea name="comment_text" class="form-control"  cols="30" rows="5">{{ $singleComment->comment_text }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @endif


@endsection