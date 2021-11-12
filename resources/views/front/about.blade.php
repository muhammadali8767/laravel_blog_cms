@extends('layouts.main')

@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area" style="background-image: url(/img/banner/bradcam4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Biz haqimizda</h3>
                        <p><a href="{{ route('main') }}">Bosh sahifa</a> / Biz haqimizda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <!-- about_area_start  -->
    <div class="about_area add_padding">
        <div class="container">
            <div class="border_1px">
                <div class="row align-items-center">
                    <div class="col-xl-6  col-md-6">
                        <div class="about_thumb">
                            <img src="/img/stairs/17.jpg" alt="">
                            <div class="pattern_img d-none d-lg-block">
                                <img src="/img/pattern/pattern.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="about_info">
                            <h3>Biz sizning barcha qurilish xizmatlaringizga xizmat ko'rsatamiz</h3>
                            <p class="first_para"> "Qurilish - bu to'la xizmat ko'rsatuvchi qurilish kompaniyasi
                                echimlarni boshidan oxirigacha qurish. Bizning xodimlarimiz Nyu -Yorkda o'n yildan beri ishlaydi
                                yillar.</p>
                            <p>Lorem Ipsum oyatlarining ko'p variantlari mavjud, lekin ko'pchilik bor
                                qandaydir tarzda, in'ektsiya qilingan hazil yoki tasodifiy bo'lmagan so'zlar bilan o'zgargan
                                biroz ishonarli ko'rinishga ega.</p>
                            <a href="{{ route('contact') }}" class="boxed-btn3">Bizga bog'lanish</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- about_area_end  -->
    <!-- features_area_start -->
    <div class="features_area add_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Bizning afzalliklarimiz</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-sketch"></i>
                        </div>
                        <h3>Ijodiy reja va dizayn</h3>
                        <p>Lorem Ipsum oyatlarining ko'p variantlari mavjud, lekin ko'pchilik bor
                            o'zgarishlarga duch keldi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-helmet"></i>
                        </div>
                        <h3>Iqtidorli xodimlar</h3>
                        <p>Lorem Ipsum oyatlarining ko'p variantlari mavjud, lekin ko'pchilik bor
                            o'zgarishlarga duch keldi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <h3>Zamonaviy asbob uskunalar</h3>
                        <p>Lorem Ipsum oyatlarining ko'p variantlari mavjud, lekin ko'pchilik bor
                            o'zgarishlarga duch keldi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end -->

    @include('layouts.chose_us')
    @include('layouts.contact')
@endsection
