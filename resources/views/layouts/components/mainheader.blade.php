    <!-- SITE HEADER STARTING -->
    <header id="">

        <div class="container ">
            <div class="row header__logo__address align-items-center mb-2 mb-md-0">
                <div class="col-6 col-md-4">
                    <a href="/">
                        <img src="/images/Logo.png" alt="" class="logo"></a>
                </div>
                <div class="col-6 col-md-8">
                    <div class="row align-items-center header__logo__address-icon-lang">
                        <div class="col-12 col-md-8 col-lg-9 text-right">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="dropdown d-inline-block">
                                <button class="btn  dropdown-toggle btn__lang" type="button" id="dropdownMenuButton"
                                    aria-expanded="false">
                                    Ўзбекча
                                </button>
                                <div class="dropdown-menu lang-dropdown-menu">
                                    <a class="dropdown-item" href="#">Ўзбекча</a>
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Ўзбекча</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row header__weather-money justify-content-end">
                <div class="col-12 col-md-9 col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-3 d-flex align-items-center justify-content-md-end text-right">
                            <i class="fas fa-cloud-meatball weather-logo"></i>
                            <div class="weather">
                                <p>+17 <span>C<sup>o</sup></span></p>
                                <div class="dropdown">
                                    <button class="btn weather-dropdown-btn dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Sirdaryo
                                    </button>
                                    <div class="dropdown-menu weather-dropdown-menu"
                                        aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Jizzax</a>
                                        <a class="dropdown-item" href="#">Samarqand</a>
                                        <a class="dropdown-item" href="#">Toshkent</a>
                                    </div>
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
                                    <a class="dropdown-item" href="#">UZS</a>
                                    <a class="dropdown-item" href="#">EVRO</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="purchase money-degree">
                                <p>Sotib olish</p>
                                <h5>10680.00 <i class="fas fa-sort-down"></i></h5>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <div class="sell money-degree">
                                <p>Sotish</p>
                                <h5>10745.00 <i class="fas fa-sort-up"></i></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.components.menu')

        @include('layouts.components.carousel')
</header>
<!-- SITE HEADER END -->
