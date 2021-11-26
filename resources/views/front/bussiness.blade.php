@extends('layouts.main')

@section('content')
    <div class="news">
        <h2>@lang('menu.start_business')</h2>
        <div class="news__category">
            <a href="{{ route('main') }}">@lang('menu.main')</a>
            <span>/</span>
            <a href="#">@lang('menu.business')</a>
            <span>/</span>
            <a href="#">@lang('menu.start_business')</a>
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
