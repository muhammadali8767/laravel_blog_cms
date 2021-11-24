<nav class="main__menu">
    <div class="container">
        <div class="row d-flex align-items-center header__nav-menu d-none">
            <div class="col-5 col-lg-9">
                <i class="fas fa-bars menu__btn"></i>
                <ul class="header__menu">
                    <i class="fas fa-times menu__close"></i>
                    <li><a href="{{ route('main') }}">Бош саҳифа</a></li>
                    <li class="dropdown__parent">
                        <i class="fas fa-chevron-right d-inline d-lg-none"></i>  Биз ҳақимизда
                        <ul class="dropdown__menu">
                            <li>
                                <a href="{{ route('about') }}">Биз ҳақимизда</a>
                            </li>
                            <li>
                                <a href="{{ route('territory') }}">«Сирдарё» ЭИЗ Дирекцияси </a>
                            </li>
                            <li>
                                <a href="{{ route('eiz-vazifasi') }}">«Сирдарё» ЭИЗнинг вазифалари</a>
                            </li>
                            <li>
                                <a href="{{ route('sirdaryo-eiz-mk') }}">«Сирдарё» ЭИЗ маъмурий кенгаши </a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown__parent">
                        <i class="fas fa-chevron-right d-inline d-lg-none"></i>  «Сирдарё» ЭИЗ бизнес
                        <ul class="dropdown__menu">
                            <li>
                                <a href="{{ route('bussiness') }}">Бизнесни қандай бошлайман?  </a>

                            </li>
                            <li>
                                <a href="{{ route('why') }}">Нима учун «Сирдарё» ЭИЗ?</a>

                            </li>
                            <li>
                                <a href="{{ route('privilege') }}">Имтиёз ва преферециялар  </a>
                            </li>
                            <li>
                                <a href="{{ route('activity_types') }}">«Сирдарё» эиз ҳудудидаги фаолият турлари  </a>

                            </li>
                            <li>
                                <a href="{{ route('project') }}"> Мувофаққиятли лойиҳалар </a>

                            </li>

                        </ul>
                    </li>
                    <li><a href="{{ route('news') }}">Янгиликлар</a></li>
                    <li><a href="{{ route('multimedia') }}">Мултимедия</a></li>
                    <li><a href="{{ route('contact') }}">Алоқалар</a></li>
                </ul>
            </div>
            <div class="col-7 col-lg-3 d-flex justify-content-end">
                <a class="office_phone" href="tel: +998998781731">
                    +998 (99) 878 17 31
                </a>
            </div>
        </div>
    </div>
</nav>
