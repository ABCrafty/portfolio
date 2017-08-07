@extends('admin.layouts.app')

@section('title')
    Créer un projet - @parent
@endsection

@section('content')
    @include('layouts.errors._errors')

    <div class="form-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Index des projets</a></li>
            <li class="breadcrumb-item">Création d'un nouveau projet</li>
        </ol>

        <h1 title="Création d'un nouveau projet">Création d'un nouveau projet</h1>
        {!! Form::open(['route' => ['projects.store'], 'method' => 'post',
                    'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}

        @include('admin.projects._form')

        <button class="btn" href="{{ route('projects.index') }}">Retour</button>
        <button type="submit" class="btn blue-button">Créer un nouveau projet</button>
        {!! Form::close() !!}
    </div>
@endsection