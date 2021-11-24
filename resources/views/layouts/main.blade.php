<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome Connect Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Bootstrap Link Connect -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Owl-carousel Link Connect -->
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.default.min.css">

    <!-- My Style Link Connect -->
    <link rel="stylesheet" href="/styles/style.css">
    <title>"Сирдарё" эркин иктисодий зонаси Дирекцияси – "Сирдарё" эркин иктисодий зонаси Дирекцияси расмий веб сайти</title>
</head>
<body>
    <div class="scroll__top">
        <i class="fas fa-arrow-alt-circle-up"></i>
    </div>

    <header>
        @include('layouts.components.top')

        @include('layouts.components.menu')

        {{-- if index page --}}
        @if (request()->routeIs('main'))
            @include('layouts.components.carousel')
        @endif
    </header>

    @yield('content')

    @include('layouts.components.footer')

    <script src="/owl-carousel/jquery.min.js"></script>
    <script src="/owl-carousel/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
