@extends('layouts.app')

@section('content')
    <h1 class="project-title">{{$project['title']}}</h1>

    <div class="project-show-container">
        <div class="project-logo-tech">
            <a class="blue-button" target="_blank" href="http://{{ $project->link }}">Se rendre sur le site</a>
            <div class="project-logo">
                <img src="/{{ $project->logo }}" alt="">
            </div>

            <div class="project-tech">
                <h3>Technologies utilisées</h3>
                <ul class="tech">
                    @foreach($usedTech as $tech)
                        <li class="tag">{{ $tech }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="project-content">
            <p>{{$project['body']}}</p>
        </div>

        <div class="owl-carousel owl-theme project-images">
            @foreach(unserialize($project->images) as $image)
                <div class="item"><img src="/{{ $image }}" alt=""></div>
            @endforeach
        </div>
    </div>
@endsection