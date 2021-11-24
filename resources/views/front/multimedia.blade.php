@extends('layouts.main')

@section('content')

    <div class="news">
        <h2>Мултимедия </h2>
        <div class="news__category">
            <a href="#!">Bosh Sahifa</a>
            <span>/</span>
            <a href="./mutimedia.html">Мултимедия </a>
        </div>

    </div>
    <div class="news__items news__inner">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-6 col-lg-8 news__inner_one-col">
                    <h5 class="news__inner-title">Фотогалерея </h5>
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <img src="/images/multimedia 1.png" alt="png" class="img-fluid">
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <img src="/images/mutimedia  2.png" alt="png" class="img-fluid">
                        </div>

                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <img src="/images/mutimedia  4.png" alt="png" class="img-fluid">
                        </div>

                        <div class="col-6 col-md-6 col-lg-4 mb-4 ">
                            <img src="/images/mutimedia  5.png" alt="png" class="img-fluid">
                        </div>

                        <div class="col-6 col-md-6 col-lg-4 mb-4 ">
                            <img src="/images/mutimedia  6.png" alt="png" class="img-fluid">
                        </div>

                        <div class="col-6 col-md-6 col-lg-4 mb-4 ">
                            <img src="/images/mutimedia  3.png" alt="png" class="img-fluid">
                        </div>



                    </div>
                    <h5 class="news__inner-title">Видеогалерея </h5>
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <div class="video__item">
                                <video src="" poster="/images/mutimedia  2.png" class="img-fluid"></video>
                                <div class="video__hover">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <div class="video__item">
                                <video src="" poster="/images/mutimedia  2.png" class="img-fluid"></video>
                                <div class="video__hover">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <div class="video__item">
                                <video src="" poster="/images/mutimedia  2.png" class="img-fluid"></video>
                                <div class="video__hover">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <div class="video__item">
                                <video src="" poster="/images/mutimedia  2.png" class="img-fluid"></video>
                                <div class="video__hover">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <div class="video__item">
                                <video src="" poster="/images/mutimedia  2.png" class="img-fluid"></video>
                                <div class="video__hover">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                            </div>

                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <div class="video__item">
                                <video src="" poster="/images/mutimedia  2.png" class="img-fluid"></video>
                                <div class="video__hover">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    @include('layouts.components.right_sidebar')
                </div>
            </div>
        </div>
    </div>


@endsection