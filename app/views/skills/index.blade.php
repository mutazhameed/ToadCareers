@extends('profiles._layout.default')

@section('header')

@stop
@section('content')
{{ link_to_route('skills.create', 'Add New') }}
@if(count($skills))
    <ul>
    @foreach($skills as $skill)
        <li>
            {{link_to_route('skills.edit', $skill->name, array($skill->id))}}
            {{ Form::open(array('route' => array('skills.destroy', $skill->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>

@endif

@stop