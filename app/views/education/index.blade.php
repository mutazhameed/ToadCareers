@extends('profiles._layout.default')

@section('header')

@stop
@section('content')
{{ link_to_route('education.create', 'Add New') }}
@if(count($educations))
    <ul>
    @foreach($educations as $edu)
        <li>
            {{link_to_route('education.edit', $edu->school, array($edu->id))}}
            {{ Form::open(array('route' => array('education.destroy', $edu->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>
@endif

@stop