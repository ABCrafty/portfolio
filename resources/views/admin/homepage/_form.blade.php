<div class="form-group form-custom <?php if($errors->has('username')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('username', 'Nom du créateur', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
        {!! $errors->first('username', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('job')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('job', 'Métier', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('job', null, ['class' => 'form-control']) !!}
        {!! $errors->first('job', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('age')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('age', 'Age du créateur', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('age', null, ['class' => 'form-control']) !!}
        {!! $errors->first('age', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('other_projects')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('other_projects', 'Texte pour les autres projets', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('other_projects', null, ['class' => 'form-control']) !!}
        {!! $errors->first('other_projects', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('commitment1_title')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('commitment1_title', 'Titre premier engagement', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('commitment1_title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('commitment1_title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('commitment1_content')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('commitment1_content', 'Contenu premier engagement', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('commitment1_content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('commitment1_content', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('commitment2_title')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('commitment2_title', 'Titre deuxième engagement', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('commitment2_title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('commitment2_title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('commitment2_content')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('commitment2_content', 'Contenu deuxième engagement', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('commitment2_content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('commitment2_content', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('commitment3_title')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('commitment3_title', 'Titre troisième engagement', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('commitment3_title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('commitment3_title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('commitment3_content')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('commitment3_content', 'Contenu troisième engagement', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::textarea('commitment3_content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('commitment3_content', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('tech_title')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('tech_title', 'Titre carré tech', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('tech_title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tech_title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<div class="form-group form-custom <?php if($errors->has('tech')) { echo 'has-danger';} ?>">
    <div class="col col-md-3">
        {!! Form::label('tech', 'Les tech à apprendre', ['class' => 'control-label']) !!}
    </div>
    <div class="col-12">
        {!! Form::text('tech', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tech', '<span class="help-block">Ce champ est obligatoire</span>') !!}
    </div>
</div>

<button type="submit" class="btn green-button">Mettre à jour</button>