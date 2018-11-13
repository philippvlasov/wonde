@extends('layouts.adminLayout')

@section('content')

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>News Title</th>
            <th>Text</th>
            <th>Date Created</th>
            <th>User Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($allComments as $item)

            <tr>
                <td>{{ $item->id }}</td>
                <td><a href="{{ route('news.show', ['id' => $item->news_id]) }}">{{ $item->getRelation('news')->title }}</a></td>
                <td><a href="{{ route('comments.show', ['id' => $item->id]) }}">{{ $item->comment_text }}</a></td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->user_name }}</td>
                <td>
                    <a href="{{ route('news.edit', ['id' => $item->id]) }}" class="settings" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                    <a href="" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i>
                        <form action="{{ route('comments.destroy', ['id' => $item->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                        </form>
                    </a>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

    <div class="clearfix">
        {{ $allComments->links() }}
    </div>

@endsection