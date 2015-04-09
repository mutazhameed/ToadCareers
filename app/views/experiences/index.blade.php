@extends('profiles._layout.default')

@section('header')

@stop
@section('content')
{{ link_to_route('experiences.create', 'Add New') }}
@if(count($experiences))
    <ul>
    @foreach($experiences as $experience)
        <li>
            {{link_to_route('experiences.edit', $experience->company, array($experience->id))}}
            {{ Form::open(array('route' => array('experiences.destroy', $experience->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>

@endif

@stop