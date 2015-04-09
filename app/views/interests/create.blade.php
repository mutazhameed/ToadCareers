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
            <h1 id="forms">Add Category of Intersete</h1>
        </div>
    </div>
</div>
        <div class="row">
            <div class="col-lg-10">
                <div class="well bs-component">
{{ Form::open(array('route' => array('interests.store'), 'class' => 'form-horizontal')) }}
<fieldset>
<div class="form-group">
  {{ Form::label('cat_id', 'Category', array('class' => 'col-lg-2 control-label')) }}
  <div class="col-lg-10">
   {{ Form::select('cat_id', CategoriesLookup::lists('name', 'id'), null, array('class' => 'form-control', 'placeholder' => 'Language')) }}
</div>
</div>

<div class="form-group">
   {{ Form::checkbox('notifications'). " Receive notification about new vacancies in this category" }}
</div>
<span class="input-group-btn">
{{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
</span>
</fieldset>
{{Form::close()}}
             </div>
         </div>
     </div>
@stop