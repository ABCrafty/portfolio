<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Site portfolio d'Alexandre Black | Contient un portfolio et des articles">
    <meta name="keyword" content="Alexandre Black, Lyon, Developpeur, Web, PHP, JavaScript, jQuery, Bootstrap, SASS">
    <meta name="twitter:site" content="@Kuro_KD"/>
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}"/>
    <meta property="og:title" content="Alexandre Black">
    <meta property="og:description" content="Site portfolio d'Alexandre Black | Contient un portfolio et des articles"/>
    <meta property="og:image" content="{{ asset('images/logo.png') }}"/>
    <meta property="og:url" content="http://www.alexandreblack.fr" />
    <meta property="og:site_name" content="Alexandre Black" />
    <meta property="og:type" content="website" />
    <meta name="geo.region" content="FR" />
    <meta name="geo.placename" content="Lyon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
        Alexandre Black Portfolio
        @show
    </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('OwlCarousel2/dist/assets/owl.carousel.css') }}">


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

@if($flash = session('message'))
    <div class="alert alert-success alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

<header role="banner">
    @include('layouts.partials._menu')
</header>
<main role="main">
    @yield('content')
</main>

<footer role="footer">
    @include('layouts.partials._footer')
</footer>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('OwlCarousel2/dist/owl.carousel.js') }}"></script>

</body>
</html>
