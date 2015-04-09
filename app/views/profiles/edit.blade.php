@extends('_layout.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
    @if(Session::has('success'))
    <div class="alert alert-dismissible alert-success">{{ Session::get('success') }}</div>
    @endif
    @if($errors->has())
    @foreach ($errors->all() as $error)
    <div class="alert alert-dismissible alert-danger">{{ $error }}</div>
    @endforeach
    @endif
        <div class="page-header">
            <h1 id="forms">Edit Personal Information</h1>
        </div>
    </div>
</div>
        <div class="row">
            <div class="col-lg-10">
                <div class="well bs-component">
{{ Form::model($profile, array('route' => array('profiles.update', $profile->id), 'method' => 'put', 'class' => 'form-horizontal', 'files' => true)) }}
 <fieldset>
<div class="form-group">
        {{ Form::label('first_name', 'First Name', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name')) }}
        </div>
        {{ $errors->first('first_name', '<p class="text-danger">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('last_name', 'Last Name', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
        </div>
         {{ $errors->first('last_name', '<p class="text-danger">:message</p>') }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email', array('class' => 'col-lg-2 control-label')) }}
             <div class="col-lg-10">
            {{ Form::email('email', Auth::user()->email, array('class' => 'form-control', 'placeholder' => 'Email')) }}
            </div>
 {{ $errors->first('last_name', '<p class="text-danger">:message</p>') }}
            </div>
             <div class="form-group">
        {{ Form::label('gender', 'Gender', array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-10">
        {{ Form::select('gender', array(0 => 'Select..', 1 => 'Male', 2 => 'Female'),  $profile->gender, array('class' => 'form-control')) }}
        </div>
 {{ $errors->first('gender', '<p class="text-danger">:message</p>') }}
           </div>

            <div class="form-group">
        {{ Form::label('nationality', 'Nationality', array('class' => 'col-lg-2 control-label')) }}
         <div class="col-lg-10">
        {{ Form::select('nationality', CountriesLookup::lists('name', 'id'), null, array('class' => 'form-control')) }}
        </div>
 {{ $errors->first('nationality', '<p class="text-danger">:message</p>') }}
        </div>
         <div class="form-group">
        {{ Form::label('residence', 'Residence', array('class' => 'col-lg-2 control-label'), array('class' => 'form-control')) }}
         <div class="col-lg-10">
        {{ Form::select('residence', CountriesLookup::lists('name', 'id'), null, array('class' => 'form-control')) }}
        </div>
 {{ $errors->first('residence', '<p class="text-danger">:message</p>') }}
            </div>

          <div class="form-group">
        {{ Form::label('married', 'married', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::select('married', array(0 => 'Select..', 2 => 'Yes', 1 => 'No'), null, array('class' => 'form-control')) }}
        </div>
 {{ $errors->first('married', '<p class="text-danger">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('dob', 'Date of Birth', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('dob', null, array('class' => 'form-control', 'placeholder' => 'Date of Birth', 'id' => 'datepicker')) }}
        </div>
 {{ $errors->first('dob', '<p class="text-danger">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('mobile', 'Mobile number', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('mobile', null, array('class' => 'form-control', 'placeholder' => 'CellPhone')) }}
        </div>
 {{ $errors->first('mobile', '<p class="text-danger">:message</p>') }}
        </div>

         <div class="form-group">
        {{ Form::label('phone', 'Phone', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::text('phone', null, array('class' => 'form-control', 'placeholder' => 'LAnd Line')) }}
        </div>
 {{ $errors->first('phone', '<p class="text-danger">:message</p>') }}
        </div>

        <div class="form-group">
        {{ Form::label('address', 'Address', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('address', null, array('class' => 'form-control')) }}
        </div>
 {{ $errors->first('address', '<p class="text-danger">:message</p>') }}
        </div>
       @if($profile->cv_file)
       @if(file_exists(public_path().'\\uploads\\'.$profile->cv_file))
        <p>You have uploaded resume, <a href="{{'../../uploads/'.$profile->cv_file}}"> Download</a>, to replace it, upload new file.</p>
       @endif
       @endif

        <div class="form-group">
       {{ Form::label('cv_file', 'Resume File', array('class' => 'col-lg-2 control-label')) }}
       <div class="col-lg-10">
       {{ Form::file('cv_file') }}
        </div>
        </div>

         <div class="form-group">
        {{ Form::label('summary', 'Summary', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::textarea('summary', null, array('class' => 'form-control', 'placeholder' => 'Summary')) }}
        </div>
         {{ $errors->first('summary', '<p class="text-danger">:message</p>') }}
        </div>
   <span class="input-group-btn">
   {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
   </span>
   {{Form::close()}}

</fieldset>
{{ Form::close() }}

                </div>
            </div>
        </div>
@stop