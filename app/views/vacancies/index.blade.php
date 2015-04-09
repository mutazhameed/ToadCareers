@extends('_layout.default')
@section('intoheader')
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/jquery.dataTables.min.css') }}
    {{ HTML::style('css/jquery.dataTables.css') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/jquery.dataTables.min.js') }}
<script type="text/javascript">
$(document).ready(function(){
    $('#example').DataTable();
});
</script>
@stop
@section('header')
{{ link_to_route('dashboard', 'Your Profile'). " | " }}
@if(Auth::check())
{{ link_to_route('logout', 'Logout') }}
@else
{{ link_to_route('user.create', 'Register') }}
{{ link_to_route('login', 'Login') }}
@endif
@stop
@section('content')
<div class="page-header">
    <div class="row">
        <div class="bs-component">
                <h2 id="personal">Vacancies</h2>
         </div>
         </div>
         </div>
<div class="row">
        <div class="bs-component">
           <table id="example" class="display" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Job Title</th>
                  <th>Closing Date</th>
                  <th>Company</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Job Title</th>
                    <th>Closing Date</th>
                    <th>Company</th>
                </tr>
              </tfoot>
              <tbody>
@foreach($vacancies as $vacancy)
    <tr>
        <td>
        {{ link_to_route('vacancy', $vacancy->title, array($vacancy->id)) }}
        </td>
        <td>
        {{ date('Y-m-d', strtotime($vacancy->closing_date)) }}
        </td>
         <td>
        <a href="{{ CompaniesLookup::where('id', '=', $vacancy->company_id)->pluck('url') }}" target="_blank" title="{{ CompaniesLookup::where('id', '=', $vacancy->company_id)->pluck('name') }}" >{{ CompaniesLookup::where('id', '=', $vacancy->company_id)->pluck('name') }}</a>
        </td>
     </tr>
@endforeach
</tbody>
</table>
</div>
</div>

 @stop