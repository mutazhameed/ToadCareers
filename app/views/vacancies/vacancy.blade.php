@extends('._layout.default')

 @section('content')

<div class="page-header">


 @if(Auth::user())
     @if(ApplicantsVacancies::getIfApplied($vacancy->id))
     <div class="alert alert-dismissible alert-success">
    <p>You have applied for this job!</p>
    </div>
     @endif
@endif
<h2>Title: {{ $vacancy->title }}</h2>

<p>Posting Date: {{ $vacancy->open_date }}</p>
<p>Closing Date: {{ $vacancy->closing_date }}</p>
<p>Classification: {{ JobCalssificationsLookup::where('id', '=' ,$vacancy->classification)->pluck('name') }}</p>
<p>Company: <a href="{{ CompaniesLookup::where('id', '=', $vacancy->company_id)->pluck('url') }}" title="{{ CompaniesLookup::where('id', '=', $vacancy->company_id)->pluck('name') }}" target="_blank"> {{ CompaniesLookup::where('id', '=', $vacancy->company_id)->pluck('name') }}</a></p>
<p>Category: {{ CategoriesLookup::where('id', '=', $vacancy->cat_id)->pluck('name') }}</p>
<p>Salary: {{ $vacancy->salary }}</p>
<p>Summary: <br/>{{ $vacancy->summary }}</p>
<p>Description: <br/>{{ $vacancy->description }}</p>
<p>Responsibilities: <br/>{{ $vacancy->responsibilities }}</p>
<p>Qualifications and Experience: <br/>{{ $vacancy->qualifications_experience }}</p>
<p>Skills Knowledge: <br/>{{ $vacancy->skills_knowledge }}</p>
@if(Auth::user())
@unless(ApplicantsVacancies::getIfApplied($vacancy->id))
{{ Form::open(array('route' => array('vacancy.apply', $vacancy->id), 'class' => 'form-horizontal')) }}

        {{ Form::label('years_of_experience', 'Years of Experience', array('class' => 'col-lg-2 control-label')) }}
        {{ Form::text('years_of_experience',0 , array( 'placeholder' => 'Years of Experience', 'size' => 5)) }}

        {{ Form::submit('Apply', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endunless
@else
{{ link_to_route('login', 'login to apply', null, array('class' => 'btn btn-info')) }}

@endif
</div>

 @stop
