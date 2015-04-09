 <fieldset>
<div class="form-group">
        {{ Form::label('school', 'School', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('school', null, array('class' => 'form-control', 'placeholder' => 'School')) }}
        </div>
        {{ $errors->first('school', '<p class="error">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('entrance_date', 'Entrance Date', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('entrance_date', null, array('class' => 'form-control', 'placeholder' => 'Entrance Date', 'id' => 'datepicker')) }}
        </div>
        {{ $errors->first('entrance_date', '<p class="error">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('graduation_date', 'Graduation Date', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('graduation_date', null, array('class' => 'form-control', 'Graduation Date' => 'Name', 'id' => 'datepicker')) }}
        </div>
        {{ $errors->first('graduation_date', '<p class="error">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('country', 'Country', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('country', CountriesLookup::lists('name', 'id'), null, array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('country', '<p class="error">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('major', 'Field of Study', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('major', null, array('class' => 'form-control', 'placeholder' => 'Major')) }}
        </div>
        {{ $errors->first('major', '<p class="error">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('grade', 'Grade', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('grade', array(1 => 'First Class', 2 => 'Second Upper Class', 3 => 'Second Class', 4 => 'Third Class'), null, array('class' => 'form-control', 'placeholder' => 'Grade')) }}
        </div>
        {{ $errors->first('grade', '<p class="error">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('activities_social', 'Activities and Social', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('activities_social', null, array('class' => 'form-control', 'placeholder' => 'Social Activities')) }}
        </div>
        {{ $errors->first('activities_social', '<p class="error">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('description', 'description', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'Description')) }}
        </div>
        {{ $errors->first('description', '<p class="error">:message</p>') }}
        </div>
</fieldset>