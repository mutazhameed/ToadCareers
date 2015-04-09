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
            <h1 id="forms">Add Experience</h1>
        </div>
    </div>
</div>
        <div class="row">
            <div class="col-lg-10">
                <div class="well bs-component">
{{ Form::open(array('route' => array('experiences.store'), 'class' => 'form-horizontal')) }}
    @include('experiences.common.form')
<span class="input-group-btn">
{{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
</span>
{{Form::close()}}

             </div>
         </div>
     </div>
@stop