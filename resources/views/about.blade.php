@extends('layouts.layout')
@section('main_content')

    <div class="main-content">
        <div class="main-content-inner content-width">

            <h1>Информация о нашей компании.</h1>

            <!-- Title -->
            <h3>Осведомленность о бренде синхронизирует креативный социальный статус, повышая конкуренцию. Воздействие на потребителя недостижимо. Психологическая среда позиционирует конвергентный сегмент рынка, работая над проектом.</h3>
            <!-- Text -->
            <p>Рыночная ситуация создает связанный конкурент. Агентская комиссия регулярно усиливает анализ зарубежного опыта, не считаясь с затратами. Креатив определяет обществвенный продукт. Искусство медиапланирования, как следует из вышесказанного, усиливает комплексный маркетинг. Потребление индуцирует конвергентный жизненный цикл продукции. Медийный канал обычно правомочен.</p>

            <div class="spacer"></div>

            <div class="column-container">


                <!-- One Third -->

                <div class="column-one-third center">
                    <div class="icon-container big-icon">
                        <!-- Icon Backing -->
                        <div class="icon-backing" style="background-color: #63885F;">
                            <!-- Icon -->
                            <i class="fa fa-heart"></i>
                        </div>
                    </div>
                    <!-- Title -->
                    <h3>Дизайн</h3>
                    <!-- Text -->
                    <p>Ребрендинг, конечно, недостаточно тормозит конструктивный рекламный бриф.</p>
                </div>

                <div class="column-one-third center">
                    <div class="icon-container big-icon">
                        <!-- Icon Backing -->
                        <div class="icon-backing" style="background-color: #d28762;">
                            <!-- Icon -->
                            <i class="fa fa-flag"></i>
                        </div>
                    </div>
                    <!-- Title -->
                    <h3>Верстка</h3>
                    <!-- Text -->
                    <p>Ребрендинг, конечно, недостаточно тормозит конструктивный рекламный бриф.</p>
                </div>

                <div class="column-one-third center">
                    <div class="icon-container big-icon">
                        <!-- Icon Backing -->
                        <div class="icon-backing" style="background-color: #6E6588;">
                            <!-- Icon -->
                            <i class="fa fa-table"></i>
                        </div>
                    </div>
                    <!-- Title -->
                    <h3>Разработка</h3>
                    <!-- Text -->
                    <p>Ребрендинг, конечно, недостаточно тормозит конструктивный рекламный бриф.</p>
                </div>

            </div>

            <div class="divider"></div>

            <ul class="team column-container">

                @foreach($employees as $employee)

                    <li class="column-one-fourth">
                        <!-- Image -->
                        <div class="image-wrapper">
                            <img alt="" src="{{ asset($employee->img) }}" class="fullwidth">
                        </div>
                        <!-- Title -->
                        <h3>{{ $employee->name }}</h3>
                        <!-- Excerpt -->
                        <p>{{ $employee->slogan }}</p>
                        <!-- Social -->
                        <ul class="social">
                            <li>
                                <a href="{{ $employee->ln_link }}"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                            </li>
                            <li>
                                <a href="{{ $employee->fb_link }}"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                            </li>
                            <li>
                                <a href="{{ $employee->tw_link }}"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                            </li>
                            <li>
                                <a href="{{ $employee->g_link }}"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                            </li>
                        </ul>
                    </li>

                @endforeach

            </ul>
        </div>
    </div>

@endsection