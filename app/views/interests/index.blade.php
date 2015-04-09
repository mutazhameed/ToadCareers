@extends('profiles._layout.default')

@section('header')

@stop
@section('content')
{{ link_to_route('interests.create', 'Add New') }}
@if(count($interests))
    <ul>
    @foreach($interests as $interest)
        <li>
            {{CategoriesLookup::where('id', '=', $interest->cat_id)->pluck('name')}}
            {{ Form::open(array('route' => array('interests.destroy', $interest->id), 'method' => 'delete', 'class' => 'destroy')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
        </li>
    @endforeach

    </ul>

@endif

@stop