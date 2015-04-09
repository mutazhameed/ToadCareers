@extends('profiles._layout.default')

@section('header')


@stop
@section('content')

<ul>
@foreach($profile as $pro)
{{ link_to_route('profiles.edit', 'Edit', array($pro->id)) }}
<li>FN: {{ $pro->first_name }}</li>
<li>LN: {{ $pro->last_name }}</li>
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
   </li>
@endforeach
</ul>


@stop