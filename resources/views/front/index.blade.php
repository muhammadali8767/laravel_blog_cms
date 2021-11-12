@extends('layouts.main')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center overlay" style="background-image: url(/img/banner/banner6.jpg)">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Biz sizning zinalaringizni ishonchli quramiz</h3>
                                <p>Zina.uZ bilan zinalaringizni ishonchli quring</p>
                                <a href="{{ route('services') }}" class="boxed-btn3">Bizning xizmatlarimiz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center overlay" style="background-image: url(/img/banner/banner5.jpg)">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Biz sizning zinalaringizni ishonchli quramiz</h3>
                                <p>Zina.uZ bilan zinalaringizni ishonchli quring</p>
                                <a href="{{ route('services') }}" class="boxed-btn3">Bizning xizmatlarimiz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center overlay" style="background-image: url(/img/banner/banner8.jpg)">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Biz sizning zinalaringizni ishonchli quramiz</h3>
                                <p>Zina.uZ bilan zinalaringizni ishonchli quring</p>
                                <a href="{{ route('services') }}" class="boxed-btn3">Bizning xizmatlarimiz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center overlay" style="background-image: url(/img/banner/banner12.jpg)">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Biz sizning zinalaringizni ishonchli quramiz</h3>
                                <p>Zina.uZ bilan zinalaringizni ishonchli quring</p>
                                <a href="{{ route('services') }}" class="boxed-btn3">Bizning xizmatlarimiz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- features_area_start -->
    <div class="features_area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-sketch"></i>
                        </div>
                        <h3>Ijodiy Reja va Dizayn</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have
                            suffered alteration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-helmet"></i>
                        </div>
                        <h3>Iqtidorli Xodimlar</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have
                            suffered alteration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <h3>Zamonaviy Asboblar</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have
                            suffered alteration.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end -->

    <!-- about_area_start  -->
    <div class="about_area">
        <div class="container">
            <div class="border_1px">
                <div class="row align-items-center">
                    <div class="col-xl-6  col-md-6">
                        <div class="about_thumb">
                            <img src="/img/stairs/4.jpg" alt="">
                            <div class="pattern_img d-none d-lg-block">
                                <img src="/img/pattern/pattern.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="about_info">
                            <h3>Biz sizga barcha qurilish xizmatlarini ko'rsatamiz</h3>
                            <p class="first_para"> “Zuna.uZ – bu to‘liq xizmat ko‘rsatuvchi qurilish kompaniyasi bo‘lib, boshidan oxirigacha qurilish yechimlarini taklif etadi. Xodimlarimiz Toshkentda o‘n yildan beri faoliyat yuritib kelmoqda.</p>
                            <p>There are many variations of passages of lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable.</p>
                            <a href="{{ route('about') }}" class="boxed-btn3">Biz haqimizda</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- about_area_end  -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Bizning xizmatlarimiz</h3>
                    </div>
                </div>
            </div>
            <div class="border_bottom_1px position-relative">
                <div class="pattern_img d-none d-xl-block">
                    <img src="/img/pattern/pattern.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="service_active owl-carousel">
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="/img/service/1.jpg" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>texnik xizmat ko'rsatish va ta'mirlash </h3>
                                    </a>
                                    <p>There are many variations of passages of lorem Ipsum available.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="/img/service/2.jpg" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>Bino qurilishi</h3>
                                    </a>
                                    <p>There are many variations of passages of lorem Ipsum available.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="/img/service/3.jpg" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>Ko'prik va yo'l qurilishi</h3>
                                    </a>
                                    <p>There are many variations of passages of lorem Ipsum available.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="/img/service/1.jpg" alt="">
                                </div>
                                <div class="service_info">
                                    <a href="#">
                                        <h3>texnik xizmat ko'rsatish va ta'mirlash </h3>
                                    </a>
                                    <p>There are many variations of passages of lorem Ipsum available.</p>
                                    <a class="d-flex align-items-center" href="#">More <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- service_area_end  -->

    <!-- gallery_area-START -->
    <div class="gallery_area">
        <div class="container">
            <div class="gallery_nav">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                        <h3 class="gallery_title">Bizning ajoyib loyihalarimizni <br> ko'rib chiqing</h3>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-menu">
                            <button class="active" data-filter="*">Hammasi</button>
                            <button data-filter=".cat1">Arxitektura</button>
                            <button data-filter=".cat2">Bino</button>
                            <button data-filter=".cat3">Ko'prik</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row grid no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="/img/gallery/1.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Xizmat va ta'mirlash</h3>
                                <div class="icon">
                                    <a href="{{ route('project-details') }}">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="/img/gallery/2.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Xizmat va ta'mirlash</h3>
                                <div class="icon">
                                    <a href="{{ route('project-details') }}">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat2">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="/img/gallery/3.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Xizmat va ta'mirlash</h3>
                                <div class="icon">
                                    <a href="{{ route('project-details') }}">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="/img/gallery/4.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Xizmat va ta'mirlash</h3>
                                <div class="icon">
                                    <a href="{{ route('project-details') }}">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat2 cat3 cat4">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="/img/gallery/5.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Xizmat va ta'mirlash</h3>
                                <div class="icon">
                                    <a href="{{ route('project-details') }}">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat2">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="/img/gallery/6.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Xizmat va ta'mirlash</h3>
                                <div class="icon">
                                    <a href="{{ route('project-details') }}">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat4 cat1">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="/img/gallery/7.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Xizmat va ta'mirlash</h3>
                                <div class="icon">
                                    <a href="{{ route('project-details') }}">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat2 cat3 cat4">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="/img/gallery/8.png" alt="">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Xizmat va ta'mirlash</h3>
                                <div class="icon">
                                    <a href="{{ route('project-details') }}">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery_area-END -->

    <!-- more_pro_btn_start  -->
    <a href="{{ route('project') }}" class="more_pro_btn">Boshqa loyihalar</a>
    <!-- more_pro_btn_end  -->

    @include('layouts.chose_us')
    @include('layouts.contact')
@endsection
