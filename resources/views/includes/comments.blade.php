@section('comments')

        <h2>Комментарии к статьи</h2>

        @if(! empty($comments->count() > 0))

            @foreach($comments as $comment)

                <div class="comment">
                    <!-- Username -->
                    <div class="username">
                        <a href="#">{{ $comment->user_name }}</a> пишет:
                    </div>
                    <!-- Date -->
                    <div class="date">
                        {{ $comment->created_at }}
                    </div>
                    <!-- Message -->
                    <div class="message">
                        <p>{{ $comment->comment_text }}</p>
                    </div>
                    <!-- Reply Link -->
                    {{--<div class="link">--}}
                    {{--<a href="#">Ответить</a>--}}
                    {{--</div>--}}
                </div>

            @endforeach

        @endif

@endsection
