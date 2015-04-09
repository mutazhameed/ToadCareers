@extends('profiles._layout.default')

@section('header')

@stop
@section('content')
{{ link_to_route('certificates.create', 'Add New') }}
@if(count($certificates))
    <ul>
    @foreach($certificates as $certificate)
        <li>
            {{link_to_route('certificates.edit', $certificate->name, array($certificate->id))}}
            {{ Form::open(array('route' => array('certificates.destroy', $certificate->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>

@endif

@stop