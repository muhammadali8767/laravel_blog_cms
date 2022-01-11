@extends('layouts.main')

@section('content')

    <div class="container-fluid globus__img header__bg d-flex justify-content-center p-0">
        <img src="/images/globus.png" alt="">
        <div class="container contact__address-contact-text">
            <h3>@lang('contact.contact_title')</h3>
            <div>
                <ul>
                    @lang('contact.manzil')
                </ul>
                <ul>
                    @lang('contact.kontaktlar')
                </ul>
            </div>
        </div>
    </div>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 form__parent">
                    <form action="{{ route('post-contact') }}" method="POST">
                        @csrf
                        <h4>@lang('contact.contact_title')
                        </h4>
                        <div class="input__box">
                            <input type="text" name="name" placeholder="Исмингиз" required>
                            <input type="text" name="phone" placeholder="Телефон рақамингиз" required>
                        </div>
                        <div class="input__box">
                            <input type="text" name="location" placeholder="Мавзу" required style="width: 100%">
                        </div>
                        <textarea name="text" cols="30" rows="10" placeholder="Хабар матни" required></textarea>
                        <button type="submit">Yuborish</button>
                        <div class="number-mail">
                            <div class="number-box">
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <p>@lang('contact.Биз билан боғланиш учун')</p>
                                    <h5>+998 (67) 227 00 37</h5>
                                </div>
                            </div>
                            <div class="mail-box">
                                <i class="far fa-envelope"></i>
                                <div>
                                    <p>@lang('contact.Биз билан боғланиш учун')</p>
                                    <h5>fezsirdarya@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 d-none d-md-block ">
                    <div class="form__img">
                        <img src="/images/contact_img.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 mt-5">
                    <!--The div element for the map -->
                    <div id="map" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyRWpYZQwk45PQBLF4Fy6DAGqEJRkeetw&callback=initMap&libraries=&v=weekly"
        async>
    </script>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = {
                lat: 40.504009,
                lng: 68.775202
            };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
    </script>

@endsection
