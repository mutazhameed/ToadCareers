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
            <h1 id="forms">Password Reset</h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="well bs-component">
        {{ Form::open(array('route' => array('password.update', $token, 'class' => 'form-horizontal'))) }}
            <fieldset>
            <div class="form-group">
                {{ Form::label('email', 'Email', array('class' => 'col-lg-2 control-label')) }}
                <div class="col-lg-10">
                    {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
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
                          {{ Form::label('password_confirmation', 'Password Confirmation', array('class' => 'col-lg-2 control-label')) }}
                          <div class="col-lg-10">
                              {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password Confirmation')) }}
                          </div>
                          {{ $errors->first('password_confirmation', '<p class="text-danger">:message</p>') }}
                      </div>
            {{ Form::hidden('token', $token) }}
            <span class="input-group-btn">
                {{ Form::submit('Reset', array('class' => 'btn btn-primary')) }}
            </span>
            </fieldset>
        {{ Form::close() }}
        </div>
    </div>
</div>

@stop