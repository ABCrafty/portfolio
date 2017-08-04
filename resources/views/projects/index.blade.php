@extends('layouts.app')

@section('content')
    <div class="front-project-container" style="background: url('images/canards.jpg') no-repeat center center">
        <div class="projects-contain">
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
        </div>

        {{ $projects->links() }}

    </div>
@endsection