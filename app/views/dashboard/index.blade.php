@extends('_layout.default')

@section('header')


@stop
@section('content')
<?php
$educations = Education::where('user_id', '=', Auth::user()->id)->get();
$achievements = Achievement::where('user_id', '=', Auth::user()->id)->get();
$certificates = Certificate::where('user_id', '=', Auth::user()->id)->get();
$courses = Course::where('user_id', '=', Auth::user()->id)->get();
$experiences = Experience::where('user_id', '=', Auth::user()->id)->get();
$languages = Language::where('user_id', '=', Auth::user()->id)->get();
$skills = Skill::where('user_id', '=', Auth::user()->id)->get();
$interests = Categoryofinterest::where('user_id', '=', Auth::user()->id)->get();

?>



<div class="bs-docs-section">
<h2>Tips</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante</p>
</div>
<div class="page-header">
    <div class="row">
        <div class="bs-component">
                <h2 id="personal">Personal Data</h2>
                {{ link_to_route('profiles.edit', 'Edit Your Personal Information', array(Profile::where('user_id', '=', Auth::user()->id)->pluck('id')), array('class' => 'label label-info')) }}
                   @foreach($profile as $pro)
                    <ul class="list-group">
                        <li class="list-group-item">
                        <span class="text-muted">First Name: </span>
                        {{ $pro->first_name }}
                        </li>
                        <li class="list-group-item">
                         <span class="text-muted">Last Name: </span>
                            {{ $pro->last_name }}
                        </li>
                        <li class="list-group-item">
                        <span class="text-muted">Email: </span>
                        {{ Auth::user()->email }}
                        </li>
                        <li class="list-group-item">
                        <span class="text-muted">Gender: </span>
                        @if($pro->gender==1)Male @elseif($pro->gender==2) Female @endif
                        </li>
                        <li class="list-group-item">
                        <span class="text-muted">Nationality: </span>
                        {{ CountriesLookup::where('id', '=', $pro->nationality)->pluck('name') }}
                        </li>
                        <li class="list-group-item">
                        <span class="text-muted">Residence: </span>
                        {{ CountriesLookup::where('id', '=', $pro->residence)->pluck('name') }}
                        </li>
                        <li class="list-group-item">
                        <span class="text-muted">Mariel Status: </span>
                        @if($pro->married==2) Married @elseif($pro->married==1) Single @endif
                        </li>
                        <li class="list-group-item">
                        <span class="text-muted">Date of Birth: </span>
                        {{ $pro->dob }}
                        </li>
                       <li class="list-group-item">
                        <span class="text-muted">Mobile: </span>
                        {{ $pro->mobile }}
                        </li>
                       <li class="list-group-item">
                        <span class="text-muted">Phone: </span>
                        {{ $pro->phone }}
                        </li>
                       <li class="list-group-item">
                        <span class="text-muted">Address: </span>
                       {{ $pro->address }}
                        </li>
                       <li class="list-group-item">
                        <span class="text-muted">Summary: </span>
                        {{ $pro->summary }}
                        </li>
                       <li class="list-group-item">
                        <span class="text-muted">Resume: </span>
                        @if($pro->cv_file)
                         @if(file_exists(public_path().'\\uploads\\'.$pro->cv_file))
                           <a href="uploads/{{$pro->cv_file}}"> Download</a>
                         @else
                         No upload
                         @endif
                         @else
                         No upload
                         @endif

                        </li>

                    </ul>
                     @endforeach
                </div>

    </div>
</div>

<div class="page-header">
    <div class="row">
        <div class="bs-component">
                <h2 id="education">Education</h2>
{{ link_to_route('education.create', 'Add New Education',null, array('class' => 'label label-info')) }}
@if(count($educations))
    <ul class="list-group">
    @foreach($educations as $edu)
        <li class="list-group-item">
            <h4 class="list-group-item-heading">{{link_to_route('education.edit', $edu->school, array($edu->id))}}</h4>
            <span class="text-muted">{{$edu->entrance_date}}, {{$edu->graduation_date}}</span>
            <p><strong>{{ $edu->major }}</strong>, {{ $edu->description }}</p>
            {{ Form::open(array('route' => array('education.destroy', $edu->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>
@endif
</div>
</div>
</div>

<div class="page-header">
    <div class="row">
        <div class="bs-component">
<h2 id="experience">Experience</h2>
{{ link_to_route('experiences.create', 'Add New Experience',null, array('class' => 'label label-info')) }}
@if(count($experiences))
    <ul class="list-group">
    @foreach($experiences as $experience)
        <li class="list-group-item">
        @if($experience->current_job==1)
        <span>Current Job</span>
        @endif
            <h4 class="list-group-item-heading">{{link_to_route('experiences.edit', $experience->company, array($experience->id))}}</h4>
             <span class="text-muted">{{$experience->start_date}}, {{$experience->end_date}}</span>
              <p><strong>{{ $experience->title }}</strong>, {{ $edu->description }}</p>
            {{ Form::open(array('route' => array('experiences.destroy', $experience->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>

@endif
</div>
</div>
</div>


<div class="page-header">
    <div class="row">
        <div class="bs-component">
<h2 id="achievements">Achievements</h2>
{{ link_to_route('achievements.create', 'Add New Achievement',null, array('class' => 'label label-info')) }}
@if(count($achievements))
    <ul class="list-group">
    @foreach($achievements as $achievement)
         <li class="list-group-item">
            <h4 class="list-group-item-heading">{{link_to_route('achievements.edit', $achievement->name, array($achievement->id))}}</h4>
            <span class="text-muted">{{$achievement->date}}</span>
            <p>{{ $achievement->description }}</p>
            {{ Form::open(array('route' => array('achievements.destroy', $achievement->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif
</div>
</div>
</div>


<div class="page-header">
    <div class="row">
        <div class="bs-component">
<h2 id="courses">Courses</h2>
{{ link_to_route('courses.create', 'Add New Course',null, array('class' => 'label label-info')) }}
@if(count($courses))
    <ul class="list-group">
    @foreach($courses as $course)
         <li class="list-group-item">
            <h4 class="list-group-item-heading">{{link_to_route('courses.edit', $course->name, array($course->id))}}</h4>
            <span class="text-muted">{{$course->date}}</span>
            <p>{{ $course->description }}</p>
            {{ Form::open(array('route' => array('courses.destroy', $course->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif
</div>
</div>
</div>

<div class="page-header">
    <div class="row">
        <div class="bs-component">
<h2 id="certificates">Certificates</h2>
{{ link_to_route('certificates.create', 'Add New Certificate',null, array('class' => 'label label-info')) }}
@if(count($certificates))
     <ul class="list-group">
    @foreach($certificates as $certificate)
         <li class="list-group-item">
            <h4 class="list-group-item-heading">{{link_to_route('certificates.edit', $certificate->name, array($certificate->id))}}</h4>
            <span class="text-muted">{{$certificate->date}}</span>
            <p><strong>{{ $certificate->license_num }}</strong>, {{ $certificate->authority }}</p>
            {{ Form::open(array('route' => array('certificates.destroy', $certificate->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif
</div>
</div>
</div>

<div class="page-header">
    <div class="row">
        <div class="bs-component">
<h2 id="skills">Skills</h2>
{{ link_to_route('skills.create', 'Add New Skill',null, array('class' => 'label label-info')) }}
@if(count($skills))
    <ul class="list-group">
    @foreach($skills as $skill)
        <li class="list-group-item">
            <h4 class="list-group-item-heading">{{link_to_route('skills.edit', $skill->name, array($skill->id))}}</h4>
            <p>{{ $skill->name }}</p>
            {{ Form::open(array('route' => array('skills.destroy', $skill->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif
</div>
</div>
</div>

<div class="page-header">
    <div class="row">
        <div class="bs-component">
<h2 id="languages">Languages</h2>
{{ link_to_route('languages.create', 'Add New Language',null, array('class' => 'label label-info')) }}
@if(count($languages))
    <ul class="list-group">
    @foreach($languages as $language)
        <li class="list-group-item">
           <h4 class="list-group-item-heading"> {{link_to_route('languages.edit', LanguagesLookup::where('id', '=', $language->lang_id)->pluck('name'), array($language->id))}}</h4>
            {{ Form::open(array('route' => array('languages.destroy', $language->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif
</div>
</div>
</div>

<div class="page-header">
    <div class="row">
        <div class="bs-component">
<h2 id="catOfInterest">Categories of Interest</h2>
{{ link_to_route('interests.create', 'Add New Category',null, array('class' => 'label label-info')) }}
@if(count($interests))
     <ul class="list-group">
    @foreach($interests as $interest)
        <li class="list-group-item">
          <h4 class="list-group-item-heading">{{CategoriesLookup::where('id', '=', $interest->cat_id)->pluck('name')}}</h4>
            @if($interest->notifications==1)
            <span>Subscribed for notifications</span>
            @endif
            {{ Form::open(array('route' => array('interests.destroy', $interest->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </li>
    @endforeach
    </ul>
@endif
</div>
</div>
</div>


@stop