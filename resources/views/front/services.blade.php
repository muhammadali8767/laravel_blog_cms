@extends('layouts.main')

@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area" style="background-image: url(/img/banner/bradcam5.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Bizning xizmatlarimiz</h3>
                        <p><a href="{{ route('main') }}">Bosh sahifa</a> / Bizning xizmatlarimiz</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- service_area_start  -->
    <div class="service_area add_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="/img/service/1.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <a href="{{ route('single-blog', [1]) }}">
                                <h3>maintenance & Repair </h3>
                            </a>
                            <p>There are many variations of passages of lorem Ipsum available.</p>
                            <a class="d-flex align-items-center" href="{{ route('single-blog', [1]) }}">Davomi <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="/img/service/2.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <a href="{{ route('single-blog', [1]) }}">
                                <h3>Building Construction </h3>
                            </a>
                            <p>There are many variations of passages of lorem Ipsum available.</p>
                            <a class="d-flex align-items-center" href="{{ route('single-blog', [1]) }}">Davomi <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="/img/service/3.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <a href="{{ route('single-blog', [1]) }}">
                                <h3>Bridge & Road Construction</h3>
                            </a>
                            <p>There are many variations of passages of lorem Ipsum available.</p>
                            <a class="d-flex align-items-center" href="{{ route('single-blog', [1]) }}">Davomi <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="/img/service/4.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <a href="{{ route('single-blog', [1]) }}">
                                <h3>maintenance & Repair </h3>
                            </a>
                            <p>There are many variations of passages of lorem Ipsum available.</p>
                            <a class="d-flex align-items-center" href="{{ route('single-blog', [1]) }}">Davomi <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="/img/service/5.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <a href="{{ route('single-blog', [1]) }}">
                                <h3>Building Construction </h3>
                            </a>
                            <p>There are many variations of passages of lorem Ipsum available.</p>
                            <a class="d-flex align-items-center" href="{{ route('single-blog', [1]) }}">Davomi <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service">
                        <div class="thumb">
                            <img src="/img/service/6.jpg" alt="">
                        </div>
                        <div class="service_info">
                            <a href="{{ route('single-blog', [1]) }}">
                                <h3>Bridge & Road Construction</h3>
                            </a>
                            <p>There are many variations of passages of lorem Ipsum available.</p>
                            <a class="d-flex align-items-center" href="{{ route('single-blog', [1]) }}">Davomi <i class="ti-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- service_area_end  -->
    @include('layouts.chose_us')
    @include('layouts.contact')
@endsection
