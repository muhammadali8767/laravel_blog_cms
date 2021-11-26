@extends('layouts.main')

@section('content')

<div class="news">
    <h2>@lang('menu.types of activities')</h2>
    <div class="news__category">
        <a href="{{ route('main') }}">@lang('menu.main')</a>
        <span>/</span>
        <a href="#">@lang('menu.business')</a>
        <span>/</span>
        <a href="#">@lang('menu.types of activities')</a>
    </div>
</div>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                @include('layouts.components.left_sidebar')
            </div>
            <div class="col-12 col-md-7">
                <p>«Сирдарё» МИЗ ҳудудида моддий-хомашё ресурсларини қайта ишлаш, махсус индустриал зона корхоналари ўртасида кооперация алоқаларини ўрнатиш ва республика миқёсида саноат кооперациясини ривожлантириш ва маҳаллий хомашё ва материаллар негизида юқори технологияли маҳсулотлар ишлаб чиқариш учун барча имкониятлар яратилган.
                    <br>
                    «Сирдарё» МИЗни ривожлантиришнинг устувор йўналишлари асосида қуйидаги тармоқ корхоналарини жойлаштириш мўлжалланган:</p>
                <ul>
                   <li>Электроника</li>
                   <li>Машинасозлик</li>
                   <li>Қурилиш материаллари</li>
                   <li>Кимё саноати</li>
                   <li>Енгил саноат</li>
                   <li>Озиқ-овқат саноати</li>
                   <li>Фармацевтика, тиббиёт ва косметика маҳсулотлари</li>
                   <li>Тери ва терини қайта ишлаш</li>
                   <li>Бошқа йўналишлар</li>

               </ul>


            </div>
        </div>
    </div>
</div>


@endsection
