@extends('admin._layout.admin')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="bs-component">
                <h2 id="personal">Search</h2>
         </div>
         </div>
         </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="well bs-component">
{{ Form::model(null, array('route' => array('search.results'), 'class' => 'form-horizontal')) }}
     <fieldset>
    <div class="form-group">
    {{ Form::label('vacancy', 'Vacancy', array('class' => 'col-lg-2 control-label')) }}
    <div class="col-lg-10">
    {{ Form::select('vacancy', Vacancy::lists('title', 'id'), null, array('class' => 'form-control')) }}
    </div>
    {{ Form::text('query', null, array( 'placeholder' => 'Search query...', 'class' => 'form-control' )) }}
    </div>
    <h3>search in:</h3>

    <div class="form-group">
    {{ Form::checkbox('summary'). " Summary." }}
    {{ Form::checkbox('achievement'). " Achievements." }}
    {{ Form::checkbox('certifications'). " Certifications." }}
    {{ Form::checkbox('courses'). " Courses." }}
    {{ Form::checkbox('education'). " Education." }}
    {{ Form::checkbox('experience'). " Achievements." }}
    {{ Form::checkbox('languages'). " Languages." }}
    {{ Form::checkbox('skills'). " Skills." }}
     </div>

    <span class="input-group-btn">
       {{ Form::submit('Search', array('class' => 'btn btn-primary')) }}
       </span>
    </fieldset>
    {{ Form::close() }}
</div>
</div>
</div>
@stop
