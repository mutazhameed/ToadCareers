 <fieldset>
<div class="form-group">
        {{ Form::label('name', 'Name', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }}
        </div>
        {{ $errors->first('name', '<p class="text-danger">:message</p>') }}
           </div>
           <div class="form-group">
        {{ Form::label('description', 'Description', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'Description')) }}
        </div>
        {{ $errors->first('description', '<p class="text-danger">:message</p>') }}
        </div>
        <div class="form-group">
        {{ Form::label('date', 'Date', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('date', null, array('class' => 'form-control', 'placeholder' => 'Date', 'id' => 'datepicker')) }}
        </div>
        {{ $errors->first('date', '<p class="text-danger">:message</p>') }}
        </div>
        </fieldset>