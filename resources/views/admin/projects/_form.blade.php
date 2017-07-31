<div class="form-group form-custom <?php if($errors->has('title')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('title', 'Titre du projet', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('body')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('body', 'Présentation du projet', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        {!! $errors->first('body', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>


<div class="form-group form-custom <?php if($errors->has('logo')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('logo', 'Logo du projet', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::file('logo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('logo', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('images')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('images', 'Images du projet', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::file('images', null, ['class' => 'form-control']) !!}
        {!! $errors->first('images', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('link')) { echo 'has-danger';} ?>">
    <div class="col-3">
        {!! Form::label('link', 'Lien vers le site du projet', ['class' => 'control-label']) !!}
    </div>

    <div class="col-12">
        {!! Form::text('link', null, ['class' => 'form-control']) !!}
        {!! $errors->first('link', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>