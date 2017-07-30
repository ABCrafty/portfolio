@extends('layouts.app')

@section('title')
    @parent - Accueil
@endsection

@section('content')
    <div id="homepage" style="background: url('images/rhone.jpg') no-repeat center center">
        <div class="homepage-container">
            <h1>Alexandre Black</h1>
            <h2>Développeur FullStack</h2>
            <p>25 ans</p>

            <a href="#projects" class="js-scrollTo">
                <div class="link-projects">
                    <p>Découvrez mes projets</p>
                    <i class="fa fa-arrow-down" aria-hidden="true"></i>
                </div>
            </a>
        </div>
    </div> <!-- #homepage -->

    <div id="projects" class="page">
        <h3>Projets/Réalisations</h3>
        <div class="projects-container">

            <!-- projet -->
            <ul class="grid cs-style">

                <li class="project">
                    <figure>
                        <img src="images/kipponlogo.jpg" alt="img01">
                        <figcaption>
                            <h5>Titre</h5>
                            <a href="">En savoir plus</a>
                        </figcaption>
                    </figure>
                </li>

                <li class="project">
                    <figure>
                        <img src="images/kipponlogo.jpg" alt="img01">
                        <figcaption>
                            <h5>Titre</h5>
                            <a href="">En savoir plus</a>
                        </figcaption>
                    </figure>
                </li>

                <li class="project">
                    <figure>
                        <img src="images/kipponlogo.jpg" alt="img01">
                        <figcaption>
                            <h5>Titre</h5>
                            <a href="">En savoir plus</a>
                        </figcaption>
                    </figure>
                </li>


                @if(count($projects) > 0)
                    {{--@foreach($projects as $project)--}}
                        {{--<li class="project">--}}
                            {{--<figure>--}}
                                {{--<img src="{{$project['logo']}}" alt="img01">--}}
                                {{--<figcaption>--}}
                                    {{--<h5>{{$project['title']}}</h5>--}}
                                    {{--<a href="{{ route('front.projects.show') }}">En savoir plus</a>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</li>--}}
                    {{--@endforeach--}}
                @endif
            </ul>
            <div class="project other-projects">
                <p>Pour découvrir mes autres projets c'est</p>
                <a href="{{ route('front.projects.index') }}" class="home-project-link">Par ici !</a>
            </div>
        </div>
    </div> <!-- #project -->

    <div id="about" class="page">
        <div class="commitments">
            <h3>Mes engagements</h3>
            <div class="commitments-container">
                <div class="commitment-contain">
                    <div class="commitment">
                        <i class="fa fa-code" aria-hidden="true"></i>
                        <h4>Intégration</h4>
                        <p>
                            Une bonne page commence par une bonne intégration. Armé de SASS et Bootstrap, amoureux du CSS,
                            je pratique le pixel perfect. Amenez-moi une maquette et je vous la transforme en page web
                            sans problème !
                        </p>
                    </div>
                </div>

                <div class="commitment-contain">
                    <div class="commitment">
                        <i class="fa fa-superpowers" aria-hidden="true"></i>
                        <h4>FrontEnd</h4>
                        <p>
                            Une page bien intégrée c'est cool. Une page bien intégrée et interactive c'est
                            encore plus cool ! Que vous ayez besoin de jQuery pour un site ou d'Angular pour une application,
                            votre projet m'enthousiasme déjà !
                        </p>
                    </div>
                </div>

                <div class="commitment-contain">
                    <div class="commitment">
                        <i class="fa fa-code-fork" aria-hidden="true"></i>
                        <h4>BackEnd</h4>
                        <p>
                            Au-delà de la façade, je vous propose également une solution BackEnd sous Laravel
                            pour automatiser vos sites, les rendre dynamiques et sécurisés !
                        </p>
                    </div>
                </div>

                <div class="commitment-contain">
                    <div class="interests commitment">
                        <p>Les technos que je souhaite apprendre : </p>
                        <ul>
                            <?php // @foreach($learntech as $tech) ?>
                            <li class="tag">Angular 2</li>
                            <li class="tag">Symfony</li>
                            <li class="tag">ES6/Next</li>
                            <li class="tag">TypeScript</li>
                            <?php // @endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- .commitments -->
    </div> <!-- #about -->
@endsection