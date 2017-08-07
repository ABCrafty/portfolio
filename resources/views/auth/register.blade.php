@extends('layouts.app')

@section('title')
    Créer un compte - @parent
@endsection

@section('content')

        <div class="container-fluid login-container">
            <div class="row">
                <div class="col-12 login-form">
                    <h1>S'enregistrer</h1>

                    {!! Form::open(['route' => ['register.store'], 'method' => 'post',
                'enctype' => 'multipart/form-data', 'class' => ' form-bordered form-horizontal']) !!}



                    <div class="form-group form-custom <?php if($errors->has('username')) { echo 'has-danger';} ?>">
                        <div class="col-3">
                            {!! Form::label('username', 'Nom', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-12">
                            {!! Form::text('username', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('username', '<span class="help-block">Ce champ est obligatoire</span>') !!}
                        </div>
                    </div>

                    <div class="form-group form-custom <?php if($errors->has('email')) { echo 'has-danger';} ?>">
                        <div class="col-3">
                            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-12">
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('email', '<span class="help-block">Ce champ est obligatoire</span>') !!}
                            {!! $errors->first('email', '<p class="help-block">Cet email existe peut-être déjà</p>') !!}

                        </div>
                    </div>

                    <div class="form-group form-custom <?php if($errors->has('password')) { echo 'has-danger';} ?>">
                        <div class="col-3">
                            {!! Form::label('password', 'Mot de passe', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-12 password-field">
                            {!! Form::password('password', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('password', '<span class="help-block">Ce champ est obligatoire</span>') !!}
                        </div>
                    </div>

                    <div class="form-group form-custom <?php if($errors->has('password_confirmation')) { echo 'has-danger';} ?>">
                        <div class="col-6">
                            {!! Form::label('password_confirmation', 'Confirmer le mot de passe', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-12 password-field">
                            {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
                            @if($errors->first())
                                <span class="help-block">Vérifiez que le mot de passe est identique</span>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn blue-button">Créer un nouveau compte</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection