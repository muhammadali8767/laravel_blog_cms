<div class="container ">
    <div class="row header__logo__address align-items-center mb-2 mb-md-0">
        <div class="col-6 col-md-4">
            <a href="{{ route('main') }}">
                <img src="/images/logo.png" alt="" class="logo">
                СИРДАРЁ ЭРКИН ИКТИСОДИЙ ЗОНАСИ ДИРЕКЦИЯСИ
            </a>
        </div>
        <div class="col-6 col-md-8">
            <div class="row align-items-center header__logo__address-icon-lang">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @switch(app()->getLocale())
                                @case('en')
                                    English
                                @break
                                @case('ru')
                                    Русский
                                @break
                                @case('uz')
                                    Ўзбекча
                                @break
                                @default
                                    Ўзбекча
                                    @break
                                @endswitch
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @if (app()->getLocale() != 'uz')
                                    <a class="dropdown-item" href="?locale=uz">Ўзбекча</a>
                                @endif
                                @if (app()->getLocale() != 'ru')
                                    <a class="dropdown-item" href="?locale=ru">Русский</a>
                                @endif
                                @if (app()->getLocale() != 'en')
                                    <a class="dropdown-item" href="?locale=en">English</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row header__weather-money justify-content-end">
            <div class="col-12 col-md-9 col-lg-4 d-flex text-lg-right justify-content-end align-items-center">
                {{-- <i class="fas fa-cloud-meatball weather-logo"></i> --}}
                <div class="weather" id="weather">
                    {{-- <p>+17 <span>C<sup>o</sup></span></p>
                    <div class="dropdown">
                        <button class="btn weather-dropdown-btn dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Uzbekiston
                        </button>

                    </div> --}}
                </div>
                <div class="dropdown ml-5">
                    <button class="btn money-btn dropdown-toggle valyuta-name" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </button>
                    <div class="dropdown-menu money-dropdown-menu valyuta-list" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item valyuta" href="#" data-val="rub">Россия рубли</a>
                        <a class="dropdown-item valyuta" href="#" data-val="usd">АҚШ доллари</a>
                        <a class="dropdown-item valyuta" href="#" data-val="eur">EВРО</a>
                        <a class="dropdown-item valyuta" href="#" data-val="cny">Хитой юани</a>
                    </div>
                </div>
                {{-- <div class="purchase money-degree ml-2">

                    <h5 class="valyuta-logo"></h5>
                </div> --}}
                <div class="sell money-degree ml-2">
                    <h5 class="valyuta-show"></h5>
                </div>
            </div>
        </div>
    </div>
