<div class="category">
    <h4>@lang('sidebar.Бўлимда')</h4>
    <ul>
        <li>
            <a href="{{ route('bussiness') }}" @if (Route::is('bussiness')) class="active" @endif>
                @lang('menu.start_business')
            </a>
        </li>
        <li>
            <a href="{{ route('why') }}" @if (Route::is('why')) class="active" @endif>
                @lang('menu.why')
            </a>
        </li>
        <li>
            <a href="{{ route('privilege') }}" @if (Route::is('privilege')) class="active" @endif>
                @lang('menu.preferences')
            </a>
        </li>
        <li>
            <a href="{{ route('project') }}" @if (Route::is('project')) class="active" @endif>
                @lang('menu.successful projects')
            </a>
        </li>
        <li>
            <a href="{{ route('activity_types') }}" @if (Route::is('activity_types')) class="active" @endif>
                @lang('menu.types of activities')
            </a>
        </li>
    </ul>
</div>
<div class="news__inner work">
    <h5 class="news__inner-title">@lang('sidebar.Иш вақти')</h5>
    <div class="job__time">
        <i class="far fa-clock"></i>
        @lang('sidebar.Ду - Ша') 08:00 - 19:00
    </div>
    <div class="job__time">
        <i class="fas fa-mug-hot"></i>
        13:00 - 14:00
    </div>
</div>
<div class="social">
    <h5>@lang('sidebar.Фойдали ҳаволалар')</h5>
    <ul>
        <li>
            <a href="#!">
                <img src="/images/oliy.jpg" alt="jpg">
                <span>
                    Ўзбекистон Республикаси Давлат солиқ қўмитас</span>
            </a>
        </li>
        <li>
            <a href="#!">
                <img src="/images/oliy.jpg" alt="jpg">
                <span>
                    Ўзбекистон Республикаси Давлат солиқ қўмитас</span>
            </a>
        </li>
        <li>
            <a href="#!">
                <img src="/images/oliy.jpg" alt="jpg">
                <span>
                    Ўзбекистон Республикаси Давлат солиқ қўмитас</span>
            </a>
        </li>
        <li>
            <a href="#!">
                <img src="/images/oliy.jpg" alt="jpg">
                <span>
                    Ўзбекистон Республикаси Давлат солиқ қўмитас</span>
            </a>
        </li>
    </ul>
</div>
