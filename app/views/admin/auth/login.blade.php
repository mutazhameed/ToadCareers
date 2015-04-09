@extends('admin._layout.admin')
@section('header')
<h1>Login</h1>
@stop
@section('content')
<h1>login</h1>
{{ Form::open(array('route' => 'admin.login.post')) }}
<ul>
    <li>
        {{ Form::label('user_name', 'User Name') }}
        {{ Form::text('user_name') }}
        {{ $errors->first('user_name', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ $errors->first('password', '<p class="error">:message</p>') }}
    </li>
    <li>
        {{ Form::submit('Login') }}
    </li>
    </ul>
{{ Form::close() }}
@stop