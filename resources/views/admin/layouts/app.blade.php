<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

<head>
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>

@if($flash = session('message'))
    <div class="alert alert-success alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

@if($flash = session('warning'))
    <div class="alert alert-warning alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

@if($flash = session('danger'))
    <div class="alert alert-danger alert-admin animated bounceInRight" role="alert">
        <p>{{ $flash }}</p>
    </div>
@endif

<div class="admin-container">

    <main role="main">
        <div class="row no-gutters">
            <div class="sidebar-admin">
                <div class="admin-button">
                    <a href="{{ route('dashboard.index') }}">Admin <span class="show-sidebar">Portfolio</span></a>
                </div>
                <div class="sidebar-profile">
                    <div class="admin-pic">
                        @if(auth()->user()->avatar)
                            <img src="/{{ auth()->user()->avatar }}" alt="">
                        @else
                            <img src="{{ url('images/gravatar.png') }}" alt="">
                        @endif
                    </div>
                    <div class="admin-info">
                        <p>Bonjour {{ auth()->user()->username }}</p>
                        <div class="admin-actions">
                            <a href="{{ route('users.edit', auth()->user()->id) }}"><i class="fa fa-id-card" aria-hidden="true"></i></a>
                            <a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
                <ul class="list-unstyled menu-admin">
                    <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-tachometer" aria-hidden="true"></i>
                            <span class="show-sidebar">Tableau de bord</span></a></li>
                    @if($homepage)
                        <li><a href="{{ route('homepage.edit', ['id' => $homepage->id]) }}"> <i class="fa fa-home" aria-hidden="true"></i><span class="show-sidebar">Page d'accueil</span></a></li>
                    @else
                        <li><a href="{{ route('homepage.create') }}"><i class="fa fa-home" aria-hidden="true"></i> <span class="show-sidebar">Page d'accueil</span></a></li>
                    @endif
                    <li><a href="{{ route('projects.index') }}"><i class="fa fa-book" aria-hidden="true"></i>
                            <span class="show-sidebar">Projets</span></a></li>
                    <li><a href="{{ route('blog.index') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                            <span class="show-sidebar">Blog</span></a></li>
                    <li><a href="{{ route('about.index') }}"><i class="fa fa-user-md" aria-hidden="true"></i>
                            <span class="show-sidebar">Page à propos</span></a></li>
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-user" aria-hidden="true"></i>
                            <span class="show-sidebar">Utilisateurs</span></a></li>
                </ul>
            </div>
            <div class="admin-main-content">
                <div class="admin-header">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle dropdown-custom-style" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="admin-pic-dropdown">
                                @if(auth()->user()->avatar)
                                    <img src="/{{ auth()->user()->avatar }}" alt="">
                                @else
                                    <img src="{{ url('images/gravatar.png') }}" alt="">
                                @endif
                            </div>
                            {{ auth()->user()->username }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('users.edit', auth()->user()->id) }}">Voir mon profil</a>
                            <a class="dropdown-item" href="{{ route('home') }}">Retourner sur le site</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Me déconnecter</a>
                        </div>
                    </div>
                </div>
                <div class="admin-content">
                    @yield('content')
                </div>
            </div>
        </div>

    </main>
</div>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('OwlCarousel2/dist/owl.carousel.js') }}"></script>
@stack('scripts');
</body>

</html>
