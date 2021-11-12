@extends('layouts.main')

@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area" style="background-image: url(/img/banner/bradcam4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Yangiliklar</h3>
                        <p><a href="{{ route('main') }}">Bosh sahifa</a> / Yangiliklar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        @foreach($posts as $post)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ $post->img }}" alt="">
                                    <a href="{{ route('single-blog', $post) }}" class="blog_item_date">
                                        <h3>{{ $post->day }}</h3>
                                        <p>{{ $post->month }}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('single-blog', $post) }}">
                                        <h2>{{ $post->title }}</h2>
                                    </a>
                                    <p>{!! $post->text !!}</p>
                                    <ul class="blog-info-link">
                                    <li><a href="{{ route('single-blog', $post) }}"><i class="fa fa-user"></i> {{ $post->category->title }}</a></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach

                        {{ $posts->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection
