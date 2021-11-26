@extends('layouts.main')

@section('content')

    <div class="news">
        <h2>@lang('menu.why')</h2>
        <div class="news__category">
            <a href="{{ route('main') }}">@lang('menu.main')</a>
            <span>/</span>
            <a href="#">@lang('menu.business')</a>
            <span>/</span>
            <a href="#">@lang('menu.why')</a>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    @include('layouts.components.left_sidebar')
                </div>
                <div class="col-12 col-md-7">
                    <ol type="1">
                        <li>“Жиззах” МИЗ ҳудудида махсус солиқ ва божхона имтиёзлари амал қилади.</li>
                        <li> Ишлаб чиқариш ва муҳандислик-коммуникация инфратузилмаси мавжуд. </li>
                        <li>Сифатли ва барқарор энергия ва сув ресурслари таъминоти.</li>
                        <li> Инвесторларга хизмат кўрсатиш учун қулай шароит.</li>
                        <li> Географик қулай жойлашув. </li>
                        <li> Минерал-хомашё ресурслари мавжуд. </li>
                        <li> Малакали меҳнат ресурслари.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


@endsection
