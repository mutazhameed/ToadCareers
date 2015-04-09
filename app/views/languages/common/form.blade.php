<fieldset>
<div class="form-group">
        {{ Form::label('lang_id', 'Name', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('lang_id', LanguagesLookup::lists('name', 'id'), null, array('class' => 'form-control', 'placeholder' => 'Language')) }}
        </div>
        {{ $errors->first('lang_id', '<p class="text-danger">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('level', 'Level', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('level', array(1 => 'Elementary proficiency', 2 => 'Limited working proficiency', 3 => 'Professional working proficiency', 4 => 'Full professional proficiency', 5 => 'Native or bilingual proficiency'), null, array('class' => 'form-control', 'placeholder' => 'Language')) }}
        </div>
        {{ $errors->first('level', '<p class="text-danger">:message</p>') }}
</div>
</fieldset>