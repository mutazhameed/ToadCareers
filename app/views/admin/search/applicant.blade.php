@extends('admin._layout.admin')

@section('header')


@stop
@section('content')
<?php


?>
<h2 id="personal">Personal Data</h2>
<ul>
@foreach($profile as $pro)

<li>FN: {{ $pro->first_name }}</li>
<li>LN: {{ $pro->last_name }}</li>
<li>Email: {{ Auth::user()->email }}</li>
<li>Gender: @if($pro->gender==1)Male @elseif($pro->gender==2) Female @endif</li>
<li>Nationality: {{ CountriesLookup::where('id', '=', $pro->nationality)->pluck('name') }}</li>
<li>Residence: {{ CountriesLookup::where('id', '=', $pro->residence)->pluck('name') }}</li>
<li>Mariel Status: @if($pro->married==2) Married @elseif($pro->married==1) Single @endif</li>
<li>Date of Birth: {{ $pro->dob }}</li>
<li>Mobile: {{ $pro->mobile }}</li>
<li>Phone: {{ $pro->phone }}</li>
<li>Address: {{ $pro->address }}</li>
<li>Summary: {{ $pro->summary }} </li>
<li>Resume:
@if($pro->cv_file)
 @if(file_exists(public_path().'\\uploads\\'.$pro->cv_file))
   <a href="uploads/{{$pro->cv_file}}"> Download</a>
 @else
 No upload
 @endif
 @else
 No upload
 @endif
@endforeach
 </li>
</ul>

<h2 id="education">Education</h2>
@if(count($educations))
    <ul>
    @foreach($educations as $edu)
        <li>
            {{$edu->school}}

        </li>
    @endforeach

    </ul>
@endif

<h2 id="experience">Experience</h2>
@if(count($experiences))
    <ul>
    @foreach($experiences as $experience)
        <li>
            {{$experience->company}}

        </li>
    @endforeach

    </ul>

@endif
<h2 id="achievements">Achievements</h2>
@if(count($achievements))
    <ul>
    @foreach($achievements as $achievement)
        <li>
            {{$achievement->name}}

        </li>
    @endforeach

    </ul>

@endif
<h2 id="courses">Courses</h2>
@if(count($courses))
    <ul>
    @foreach($courses as $course)
        <li>
            {{$course->name}}

        </li>
    @endforeach

    </ul>

@endif

<h2 id="certificates">Certificates</h2>
@if(count($certificates))
    <ul>
    @foreach($certificates as $certificate)
        <li>
            {{ $certificate->name}}

        </li>
    @endforeach

    </ul>

@endif
<h2 id="skills">Skills</h2>
@if(count($skills))
    <ul>
    @foreach($skills as $skill)
        <li>
            {{$skill->name}}

        </li>
    @endforeach

    </ul>

@endif
<h2 id="languages">Languages</h2>
@if(count($languages))
    <ul>
    @foreach($languages as $language)
        <li>
            {{LanguagesLookup::where('id', '=', $language->lang_id)->pluck('name')}}

        </li>
    @endforeach

    </ul>

@endif
<h2 id="catOfInterest">Categories of Interest</h2>
@if(count($interests))
    <ul>
    @foreach($interests as $interest)
        <li>
            {{CategoriesLookup::where('id', '=', $interest->cat_id)->pluck('name')}}
            @if($interest->notifications==1)
            <span> receive</span>
            @endif

        </li>
    @endforeach

    </ul>

@endif



@stop