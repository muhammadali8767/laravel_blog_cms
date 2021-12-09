<div class="container-fluid ">
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
                    <div class="dropdown d-inline-block">
                        <button class="btn  dropdown-toggle btn__lang" type="button" id="dropdownMenuButton"
                            aria-expanded="false">
                            {{-- check language --}}
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
                            {{-- set language --}}
                            <div class="dropdown-menu lang-dropdown-menu">
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
            <div class="col-12 col-md-9 col-lg-4">
                <div class="row align-items-center">
                    <div class="col-3 d-flex justify-content-center align-items-center justify-content-md-end text-right">
                        {{-- <i class="fas fa-cloud-meatball weather-logo"></i> --}}
                        <div class="weather">
                            <p>+17 <span>C<sup>o</sup></span></p>
                            <div class="dropdown">
                                <button class="btn weather-dropdown-btn dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Uzbekiston
                                </button>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <div class="dropdown">
                            <button class="btn money-btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                USD
                            </button>
                            <div class="dropdown-menu money-dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Rubl</a>
                                <a class="dropdown-item" href="#">Dollar</a>
                                <a class="dropdown-item" href="#">EVRO</a>
                                <a class="dropdown-item" href="#">Yuan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <div class="purchase money-degree">
                          
                            <h5>1$  </h5>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <div class="sell money-degree">
                            <h5>1000 sum</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
