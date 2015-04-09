@extends('profiles._layout.default')

@section('header')

@stop
@section('content')
{{ link_to_route('languages.create', 'Add New') }}
@if(count($languages))
    <ul>
    @foreach($languages as $language)
        <li>
            {{link_to_route('languages.edit', LanguagesLookup::where('id', '=', $language->lang_id)->pluck('name'), array($language->id))}}
            {{ Form::open(array('route' => array('languages.destroy', $language->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>

@endif

@stop