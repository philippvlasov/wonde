@section('partners')

    <div class="content-width">
        <div class="client-logos-container">

            <div class="client-logos-title">
                <span>Наши партнеры</span>
            </div>

            <div id="clients-back"></div>
            <div id="clients-next"></div>

            <div class="carousel">
                <ul id="clients-carousel" class="column-container">

                    @foreach($partners as $partner)

                        <li class="">
                            <div class="logo-outer">
                                <div class="logo-inner">
                                    <!-- Actual Logo -->
                                    <img alt="" src="images\client-logos\{{ $partner->img }}">
                                </div>
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

@endsection