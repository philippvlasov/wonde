@extends('layouts.adminLayout')

@section('content')

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Date Created</th>
            <th>Short content</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($allNews as $item)

            <tr>
                <td>{{ $item->id }}</td>
                <td><a href="{{ route('news.show', ['id' => $item->id]) }}"><img src="{{ asset($item->img_name) }}" class="avatar" alt="Avatar">{{ $item->title }}</a></td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->short_content }}</td>
                <td>
                    <a href="{{ route('news.edit', ['id' => $item->id]) }}" class="settings" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                    <a href="" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i>
                        <form action="{{ route('news.destroy', ['id' => $item->id]) }}" method="post">
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
        {{ $allNews->links() }}
    </div>

@endsection