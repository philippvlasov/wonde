@section('sidebar')

    <div class="column-one-fourth sidebar">


        <!-- Categories -->

        <div class="sidebar-widget categories">
            <!-- Title -->
            <h3>Категории новостей</h3>
            <!-- Category Links -->

            @foreach($categories as $category)

                <a href="{{ route('category',
                            ['category' => $category->category_uri]) }}">
                    {{ $category->category_name }}</a>

            @endforeach

        </div>


        <div class="sidebar-widget search">
            <!-- Title -->
            <h3>Поиск по сайту</h3>
            <!-- Search Form -->
            <form id="blog-search" name="blog-search" method="post" action="/blog">
                @csrf
                <div class="container">
                    <!-- Textbox -->
                    <input type="text" id="blog-search" name="search" placeholder="Искать">
                    <!-- Search Button -->
                    <input type="submit" id="go" class="go" value="&#xf002;">
                </div>
            </form>
        </div>


        <div class="sidebar-widget project">
            <!-- Title -->
            <h3>Новость дня</h3>
            <!-- Image -->
            <a href="{{ route('post', ['id' => $dayTop->id]) }}" class="image-link"><img alt="" src="{{ asset($dayTop->img_name) }}" class="fullwidth"></a>
            <!-- Project Title -->
            <h3 class="sub-title"><a href="#">{{ $dayTop->title }}</a></h3>
            <!-- Tags -->
            <div class="tags">{{ $dayTop->getRelation('category')->category_name }}</div>
        </div>

        <!-- END Latest Project -->



        <!-- Popular Posts -->

        <div class="sidebar-widget posts">
            <!-- Title -->
            <h3>Последнее</h3>


            @foreach($lastNews as $item)

                <div class="post">
                    <!-- Image Column -->
                    <div class="img-column">
                        <a href="{{ route('post', ['id' => $item->id]) }}" class="image-link mini"><img alt="" src="{{ asset($item->img_name) }}" class="fullwidth"></a>
                    </div>
                    <!-- Content Column -->
                    <div class="content-column">
                        <!-- Post Title -->
                        <h3 class="sub-title"><a href="{{ route('post', ['id' => $item->id]) }}">{{ $item->title }}</a></h3>
                        <!-- Date -->
                        <div class="date">{{ $item->date }}</div>
                    </div>
                </div>

            @endforeach

        </div>

        <!-- END Popular Posts -->


    </div>

@endsection