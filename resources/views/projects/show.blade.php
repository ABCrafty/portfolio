@extends('layouts.app')

@section('title')
    {{ $project->title }} - @parent
@endsection

@section('content')
    <h1 class="project-title">{{ $project->title }}</h1>

    <div class="project-show-container">
        <div class="project-logo-tech">
            <a class="blue-button" target="_blank" href="http://{{ $project->link }}"
               title="lien externe vers le site du projet">Se rendre sur le site</a>
            <div class="project-logo">
                <img src="/{{ $project->logo }}" alt="logo projet" title="logo projet">
            </div>

            <div class="project-tech">
                <h2>Technologies utilisées</h2>
                <ul class="tech">
                    @foreach(explode(', ', $project->tech) as $tech)
                        <li class="tag">{{ $tech }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="project-content">
            <p>{!! $project->body !!}</p>
        </div>

        <div class="owl-carousel owl-theme project-images">
            @foreach(unserialize($project->images) as $image)
                <div class="item"><img src="/{{ $image }}" alt=""></div>
            @endforeach
        </div>
    </div>
@endsection