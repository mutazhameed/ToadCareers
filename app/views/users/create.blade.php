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
            <h1 id="forms">Register</h1>
        </div>
    </div>
</div>
<div class="row">
            <div class="col-lg-6">
                <div class="well bs-component">
{{ Form::open(array('route' => array('user.store'), 'method' => 'post', 'class' => 'form-horizontal')) }}
<fieldset>
         <div class="form-group">
        {{ Form::label('email', 'Email', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
        </div>
        {{ $errors->first('email', '<p class="text-danger">:message</p>') }}
        </div>
         <div class="form-group">
        {{ Form::label('password', 'Password', array('class' => 'col-lg-2 control-label')) }}
        <div class="col-lg-10">
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
        </div>
        {{ $errors->first('password', '<p class="text-danger">:message</p>') }}
        </div>
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
         <span class="input-group-btn">
        {{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
        </span>


{{ Form::close() }}
</fieldset>
</div>
</div>
</div>
@stop