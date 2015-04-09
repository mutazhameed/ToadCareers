@extends('admin._layout.admin')
@section('intoheader')
<script type="text/javascript">
$(document).ready(function(){
    $('#example').DataTable();
});
</script>
@stop
@section('content')
<div class="page-header">
    <div class="row">
        <div class="bs-component">
                <h2 id="personal">Vacancies</h2>
{{ link_to_route('admin.vacancies.create', 'add new',null, array('class' => 'btn btn-primary')) }}
         </div>
         </div>
         </div>
<div class="row">
        <div class="bs-component">
@if(count($vacancies))
<table id="example" class="display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Applicants</th>
      <th>Job Title</th>
      <th>Open at</th>
      <th>Closing Date</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
        <th>Applicants</th>
        <th>Job Title</th>
        <th>Open at</th>
        <th>Closing Date</th>
    </tr>
  </tfoot>
  <tbody>

    @foreach($vacancies as $vacancy)
     <tr>
    <td>
    [{{ link_to_route('vacancies.applicants',ApplicantsVacancies::where('vacancy_id', '=', $vacancy->id)->count(), $vacancy->id) }}]
    </td>
    <td>
    {{ link_to_route('admin.vacancies.edit', $vacancy->title, array($vacancy->id)) }}
    </td>
    <td>
    {{ $vacancy->open_date }}
    </td>
    <td>
    {{ $vacancy->closing_date }}
    </td>
    @endforeach

  </tbody>
</table>
@endif
</div>
</div>
@stop