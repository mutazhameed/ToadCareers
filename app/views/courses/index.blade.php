@extends('profiles._layout.default')

@section('header')

@stop
@section('content')
{{ link_to_route('courses.create', 'Add New') }}
@if(count($courses))
    <ul>
    @foreach($courses as $course)
        <li>
            {{link_to_route('courses.edit', $course->name, array($course->id))}}
            {{ Form::open(array('route' => array('courses.destroy', $course->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>

@endif

@stop