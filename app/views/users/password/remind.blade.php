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
            <h1 id="forms">Password reminder</h1>
        </div>
    </div>
</div>
<div class="row">
            <div class="col-lg-6">
                <div class="well bs-component">
{{ Form::open(array('route' => 'password.request', 'class' => 'form-horizontal')) }}
 <div class="form-group">
 {{ Form::label('email', 'Email', array('class' => 'col-lg-2 control-label')) }}
 <div class="col-lg-10">
  {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
</div>
{{ $errors->first('email', '<p class="text-danger">:message</p>') }}
</div>
 <span class="input-group-btn">
  {{ Form::submit('Send me the link', array('class' => 'btn btn-primary')) }}
  </span>


{{ Form::close() }}
</div>
  </div>
  </div>
@stop