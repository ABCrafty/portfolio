@extends('layouts.app')

@section('title')
    @parent - Accueil
@endsection

@section('content')
    <div id="homepage" style="background: url('images/rhone.jpg') no-repeat center center">
        <div class="homepage-container">
            <h1>@if(isset($homepage)){{ $homepage->username }}  @endif</h1>
            <h2>@if(isset($homepage)) {{ $homepage->job }} @endif</h2>
            <p>@if(isset($homepage)) {{ $homepage->age }}  @endif ans</p>

            <a href="#projects" class="js-scrollTo animated">
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
            <div class="project-homepage-container">

                @if(count($projects) > 0)
                    @foreach($projects as $project)
                        <div class="project custom-animated">
                            <div class="project-logo">
                                <a href="{{ route('front.projects.show', $project->id) }}">
                                    <img src="/{{ $project->logo }}" alt="">
                                </a>

                            </div>
                            <div class="project-menu">

                                <h5> {{ $project->title }}</h5>
                                <a href="{{ route('front.projects.show', $project->id) }}">En savoir plus</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Aucun projet</p>
                @endif
                    <div class="other-projects-contain">
                        <div class="other-projects">
                            <p>@if(isset($homepage)){{ $homepage->other_projects }}  @endif</p>
                            <a href="{{ route('front.projects.index') }}" class="home-project-link">Par ici !</a>
                        </div>
                    </div>


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
                        <h4>@if(isset($homepage)){{ $homepage->commitment1_title }}  @endif</h4>
                        <p>@if(isset($homepage)){{ $homepage->commitment1_content }}  @endif</p>
                    </div>
                </div>

                <div class="commitment-contain">
                    <div class="commitment">
                        <i class="fa fa-superpowers" aria-hidden="true"></i>
                        <h4>@if(isset($homepage)){{ $homepage->commitment2_title }}  @endif</h4>
                        <p>@if(isset($homepage)){{ $homepage->commitment2_content }}  @endif</p>
                    </div>
                </div>

                <div class="commitment-contain">
                    <div class="commitment">
                        <i class="fa fa-code-fork" aria-hidden="true"></i>
                        <h4>@if(isset($homepage)){{ $homepage->commitment3_title }}  @endif</h4>
                        <p>@if(isset($homepage)){{ $homepage->commitment3_content }}  @endif</p>
                    </div>
                </div>

                <div class="commitment-contain">
                    <div class="interests commitment">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <h4>@if(isset($homepage)){{ $homepage->tech_title }}  @endif</h4>
                        <ul>
                            @foreach($learnTech as $tech)
                                <li class="tag">{{ $tech }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- .commitments -->
    </div> <!-- #about -->
@endsection