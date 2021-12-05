@extends('layouts.main')

@section('content')

<div class="container-fluid globus__img header__bg d-flex justify-content-center p-0">
    <img src="/images/globus.png" alt="">
    <div class="container contact__address-contact-text">
        <h3>@lang('contact.contact_title')</h3>
        <div>
            <ul>
                <li class="name">МАНЗИЛ</li>
                <li>541 Melville Ave, Palo Alto,</li>
                <li>CA 94301,</li>
                <li>United States</li>
            </ul>
            <ul>
                <li class="name">КОНТАКТЛАР</li>
                <li>+998 91 457 12 12</li>
                <li>info@fezsirdaryo.uz</li>
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
                    <select name="location" required>
                        <option>Мавзуни танланг</option>
                        <option value="toshkent">Toshkent</option>
                        <option value="samarqand">Samarqand</option>
                        <option value="buxoro">Buxoro</option>
                    </select>
                    <textarea name="text" cols="30" rows="10" placeholder="Хабар матни" required></textarea>
                    <button type="submit">Jo’natish</button>
                    <div class="number-mail">
                        <div class="number-box">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <p>Биз билан боғланиш учун</p>
                                <h5>+998 99 878 17 31</h5>
                            </div>
                        </div>
                        <div class="mail-box">
                            <i class="far fa-envelope"></i>
                            <div>
                                <p>Биз билан боғланиш учун</p>
                                <h5>+998 99 878 17 31</h5>
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
    </div>
</section>


@endsection
