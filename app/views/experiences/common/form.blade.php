 <fieldset>
<div class="form-group">
        {{ Form::label('company', 'Company', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('company', null, array('class' => 'form-control', 'placeholder' => 'Company')) }}
        </div>
        {{ $errors->first('company', '<p class="text-danger">:message</p>') }}
        </div>
         <div class="form-group">
        {{ Form::label('location', 'Location', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('location', CountriesLookup::lists('name', 'id'), null, array('class' => 'form-control', 'placeholder' => 'Location')) }}
        </div>
        {{ $errors->first('location', '<p class="text-danger">:message</p>') }}

  </div>
           <div class="form-group">
        {{ Form::label('title', 'Title', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
        </div>
        {{ $errors->first('title', '<p class="text-danger">:message</p>') }}

  </div>
           <div class="form-group">
        {{ Form::label('description', 'Description', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'Description')) }}
        </div>
        {{ $errors->first('description', '<p class="text-danger">:message</p>') }}
  </div>
           <div class="form-group">

           {{ Form::label('start_date', 'start date', array('class' => 'col-lg-2 control-label')) }}
           <div class="col-lg-10">
           {{ Form::text('start_date', null, array('class' => 'form-control', 'placeholder' => 'Start Date', 'id' => 'datepicker')) }}
           </div>
           {{ $errors->first('start_date', '<p class="text-danger">:message</p>') }}
     </div>
              <div class="form-group">
           {{ Form::label('end_date', 'End Date', array('class' => 'col-lg-2 control-label')) }}
           <div class="col-lg-10">
           {{ Form::text('end_date', null, array('class' => 'form-control', 'placeholder' => 'End Date', 'id' => 'datepicker')) }}
           </div>
           {{ $errors->first('end_date', '<p class="text-danger">:message</p>') }}
</div>
         <div class="form-group">
        {{ Form::CHECKBOX('current_job', null, array('class' => 'form-control')).' Current Job' }}
        {{ $errors->first('current_job', '<p class="text-danger">:message</p>') }}
</div>
</fieldset>
