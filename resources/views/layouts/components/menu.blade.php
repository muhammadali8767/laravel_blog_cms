<nav class="main__menu">
    <div class="container">
        <div class="row d-flex align-items-center header__nav-menu d-none">
            <div class="col-5 col-lg-9">
                <i class="fas fa-bars menu__btn"></i>
                <ul class="header__menu">
                    <i class="fas fa-times menu__close"></i>
                    <li><a href="{{ route('main') }}">@lang('menu.main')</a></li>
                    <li class="dropdown__parent">
                        <i class="fas fa-chevron-right d-inline d-lg-none"></i>  @lang('menu.about')
                        <ul class="dropdown__menu">
                            <li>
                                <a href="{{ route('about') }}">@lang('menu.about')</a>
                            </li>
                            <li>
                                <a href="{{ route('territory') }}">@lang('menu.direction') </a>
                            </li>
                            <li>
                                <a href="{{ route('eiz-vazifasi') }}">@lang('menu.functions')</a>
                            </li>
                            <li>
                                <a href="{{ route('sirdaryo-eiz-mk') }}">@lang('menu.council') </a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown__parent">
                        <i class="fas fa-chevron-right d-inline d-lg-none"></i>  @lang('menu.business')
                        <ul class="dropdown__menu">
                            <li>
                                <a href="{{ route('bussiness') }}">@lang('menu.start_business')</a>
                            </li>
                            <li>
                                <a href="{{ route('why') }}">@lang('menu.why')</a>

                            </li>
                            <li>
                                <a href="{{ route('privilege') }}">@lang('menu.preferences')</a>
                            </li>
                            <li>
                                <a href="{{ route('activity_types') }}">@lang('menu.types of activities')</a>

                            </li>
                            <li>
                                <a href="{{ route('project') }}">@lang('menu.successful projects')</a>

                            </li>

                        </ul>
                    </li>
                    <li><a href="{{ route('news') }}">@lang('menu.news')</a></li>
                    <li><a href="{{ route('multimedia') }}">@lang('menu.multimedia')</a></li>
                    <li><a href="{{ route('contact') }}">@lang('menu.contact')</a></li>
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
