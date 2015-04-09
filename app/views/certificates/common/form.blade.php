 <fieldset>
<div class="form-group">
{{ Form::label('name', 'Name', array('class' => 'col-lg-2 control-label')) }}
<div class="col-lg-10">
{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }}
</div>
{{ $errors->first('name', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
{{ Form::label('authority', 'Authority', array('class' => 'col-lg-2 control-label')) }}
<div class="col-lg-10">
{{ Form::text('authority', null, array('class' => 'form-control', 'placeholder' => 'Authority')) }}
</div>
{{ $errors->first('authority', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
{{ Form::label('license_num', 'License Number', array('class' => 'col-lg-2 control-label')) }}
<div class="col-lg-10">
{{ Form::text('license_num', null, array('class' => 'form-control', 'placeholder' => 'license Number')) }}
</div>
{{ $errors->first('license_num', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
{{ Form::label('url', 'Link', array('class' => 'col-lg-2 control-label')) }}
<div class="col-lg-10">
{{ Form::text('url', null, array('class' => 'form-control', 'placeholder' => 'Link')) }}
</div>
{{ $errors->first('url', '<p class="error">:message</p>') }}
</div>
<div class="form-group">
{{ Form::label('date', 'Date', array('class' => 'col-lg-2 control-label')) }}
<div class="col-lg-10">
{{ Form::text('date', null, array('class' => 'form-control', 'placeholder' => 'Date', 'id' => 'datepicker')) }}
</div>
{{ $errors->first('date', '<p class="error">:message</p>') }}
</div>
</fieldset>