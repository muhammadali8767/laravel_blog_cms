@extends('layouts.main')

@section('content')
    <div class="news">
        <h2>Бизнесни қандай бошлайман?</h2>
        <div class="news__category">
            <a href="/index.html">Bosh Sahifa</a>
            <span>/</span>
            <a href="#!">«Сирдарё» ЭИЗ бизнес </a>
            <span>/</span>
            <a href="/bussiness_how_begin.html">Бизнесни қандай бошлайман? </a>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    @include('layouts.components.left_sidebar')
                </div>
                <div class="col-12 col-md-7">
                    <img src="/images/bussines.jpg" alt="jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection
