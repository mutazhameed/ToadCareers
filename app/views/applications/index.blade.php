@extends('_layout.default')

@section('header')


@stop
@section('content')
<div class="page-header">
    <div class="row">
        <div class="bs-component">
                <h2 id="personal">Applications Status</h2>
@if(count($applications))
<table class="table table-striped table-hover ">
                <thead>
                  <tr>
                    <th>Job Title</th>
                    <th>Date Applied</th>
                    <th>Current Status</th>
                  </tr>
                </thead>
                <tbody>
    @foreach($applications as $application)
            <tr>
            <td>{{ Vacancy::where('id', '=', $application->vacancy_id)->pluck('title') }}</td>
            <td> {{ Vacancy::where('id', '=', $application->vacancy_id)->pluck('created_at') }}</td>
            <td> {{ Vacancy::getApplication($application->status) }}</td>
            </tr>
    @endforeach
 </tbody>
</table>
@endif
</div>
</div>
</div>
@stop