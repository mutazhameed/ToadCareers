@extends('_layout.default')
@section('content')

<div class="row">
    <div class="col-lg-12">
     <div class="page-header">
                <h1 id="forms">Login</h1>
            </div>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-dismissible alert-success">{{ Session::get('success') }}</div>
    @endif
    @if($errors->has())
    @foreach ($errors->all() as $error)
    <div class="alert alert-dismissible alert-danger">{{ $error }}</div>
    @endforeach
    @endif

        <div class="row">
            <div class="col-lg-6">
                <div class="well bs-component">
                    {{ Form::open(array('route' => 'login.post', 'class' => 'form-horizontal')) }}
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
                <span class="input-group-btn">
            {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
            </span>
            </fieldset>

            {{ Form::close() }}
            {{ link_to_route('password.remind', 'Forgot your password?') }}

             </div>
         </div>
     </div>
@stop