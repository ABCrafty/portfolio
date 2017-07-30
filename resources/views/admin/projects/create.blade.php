@extends('admin.layouts.app')

@section('content')
    @include('layouts.errors._errors')

    <div class="form-container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Tableau de bord</a></li>
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Index des projets</a></li>
            <li class="breadcrumb-item">Création d'un nouveau projet</li>
        </ol>

        <h1>Création d'un nouveau projet</h1>
        {!! Form::open(['route' => ['projects.store'], 'method' => 'post',
                    'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}

        @include('admin.projects._form')

        {!! Form::close() !!}
    </div>
@endsection