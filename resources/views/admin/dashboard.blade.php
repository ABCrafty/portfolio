@extends('admin.layouts.app')

@section('title')
    Dashboard Portfolio - @parent
@endsection

@section('content')
    <div class="container-fluid">
        <h1 title="tableau de bord">Tableau de bord</h1>
        <div class="row">
            <div class="stats-contain col-12 col-md-6 col-lg-4">
                <div class="stats">
                    <p>Nombre d'utilisateurs</p>
                    <div class="stats-numbers">{{ count($users) }}</div>
                </div>
            </div>


            <div class="stats-contain col-12 col-md-6 col-lg-4">
                <div class="stats">
                    <p>Nombre de projets</p>
                    <div class="stats-numbers">{{ count($projects) }}</div>
                </div>
            </div>

            <div class="stats-contain col-12 col-md-6 col-lg-4">
                <div class="stats ">
                    <p>Nombre d'articles</p>
                    <div class="stats-numbers">{{ count($articles) }}</div>
                </div>
            </div>

        </div>

        <div class="row">
                <div class="time-stats-container col-12 col-md-6 col-lg-4">
                    <div class="time-stats">
                        <p>Nombre d'utilisateurs inscrits cette année : {{ count($usersYear) }}</p>
                        <p>Nombre d'utilisateurs inscrits ce mois : {{ count($usersMonth) }}</p>
                        <p>Nombre d'utilisateurs inscrits aujourd'hui : {{ count($usersToday) }}</p>
                        <p>Nombre d'utilisateurs totaux : {{ count($users) }}</p>
                    </div>

                </div>

                <div class="time-stats-container col-12 col-md-6 col-lg-4">
                    <div class="time-stats">
                        <p>Nombre de projets créés cette année : {{ count($projectsYear) }}</p>
                        <p>Nombre de projets créés ce mois : {{ count($projectsMonth) }}</p>
                        <p>Nombre de projets créés aujourd'hui : {{ count($projectsToday) }}</p>
                        <p>Nombre de projets créés au total : {{ count($projects) }}</p>
                    </div>
                </div>

                <div class="time-stats-container col-12 col-md-6 col-lg-4">
                    <div class="time-stats">
                        <p>Nombre d'articles publiés aujourd'hui : {{ count($articlesToday) }}</p>
                        <p>Nombre d'articles publiés ce mois : {{ count($articlesMonth) }}</p>
                        <p>Nombre d'articles publiés cette année : {{ count($articlesYear) }}</p>
                        <p>Nombre d'articles publiés au total : {{ count($articles) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection