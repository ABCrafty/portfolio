@extends('admin.layouts.app')

@section('title')
    Editer un projet - @parent
@endsection

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Projets</a></li>
        <li class="breadcrumb-item">Edit projet</li>
    </ol>
    <h1 title="Editer un projet">Editer un projet</h1>

    {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method' => 'patch',
            'enctype' => 'multipart/form-data', 'class' => ' form-bordered']) !!}

    @include('admin.projects._form')

    <button class="btn" href="{{ route('projects.index') }}">Retour</button>
    <button type="submit" class="btn blue-button">Mettre à jour</button>
    {!! Form::close() !!}

@endsection