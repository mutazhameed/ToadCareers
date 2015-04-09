 <fieldset>
<div class="form-group">
        {{ Form::label('name', 'Name', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }}
        </div>
        {{ $errors->first('name', '<p class="text-danger">:message</p>') }}
</div>
<div class="form-group">
        {{ Form::label('level', 'Level', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('level', array(1 => 'Excellent', 2 => 'Good', 3 => 'Basic'), null, array('class' => 'form-control', 'placeholder' => 'Level')) }}
        </div>
        {{ $errors->first('level', '<p class="text-danger">:message</p>') }}
    </div>
    </fieldset>