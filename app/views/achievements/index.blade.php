@extends('_layout.default')

@section('header')

@stop
@section('content')
{{ link_to_route('achievements.create', 'Add New') }}
@if(count($achievements))
    <ul>
    @foreach($achievements as $achievement)
        <li>
            {{link_to_route('achievements.edit', $achievement->name, array($achievement->id))}}
            {{ Form::open(array('route' => array('achievements.destroy', $achievement->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>

@endif

@stop