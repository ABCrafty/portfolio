<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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


    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>

@if($flash = session('message'))
    <div class="alert alert-success alert-flash" role="alert">
        <p>{{ $flash }}<span class="mr-auto"><i class="fa fa-times" aria-hidden="true"></i></span></p>
    </div>
@endif

<header>
    @include('layouts.partials._menu')
</header>
<main role="main">
    @yield('content')
</main>

<footer>
    @include('layouts.partials._footer')
</footer>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
