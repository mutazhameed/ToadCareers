@extends('admin._layout.admin')
@section('intoheader')
<script type="text/javascript">
$(document).ready(function(){
    $('#example').DataTable();
});
</script>
<script type="text/javascript">
function updateStat(id){
var url = document.forms.namedItem("statusForm").action;
var sta = document.getElementById("statusfor"+id).value;
document.getElementById("message"+id).innerHTML="Saving...";
var appid = id;
var dataString = '?status='+sta+'&amp;appid='+appid;
var $post = {};
$post.appid = id;
$post.status = sta;
$.ajax({
    type: "POST",
    url : url,
    data : $post,
    cache: false,
    success : function(data){
    document.getElementById("message"+id).innerHTML="Saved";
    },
    error : function(data) {
    document.getElementById("message"+id).innerHTML="Failed";
    }
});

}
</script>
@stop
@section('content')
<div class="page-header">
    <div class="row">
        <div class="bs-component">
                <h2 id="personal">Applicants</h2>
         </div>
         </div>
         </div>
<div class="row">
        <div class="bs-component">
@if(isset($data))
search tearm: {{ $q }}
<h2>{{ Vacancy::where('id', '=', $vac)->pluck('title') }}</h2>
<?php $profiles = Profile::wherein('user_id', $data)->get() ?>
total applicants found: {{ count($profiles) }}
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Resume</th>
            <th>Applicant Name</th>
            <th>Years of Experience</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Resume</th>
            <th>Applicant Name</th>
            <th>Years of Experience</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Status</th>
            <th></th>
        </tr>
    </tfoot>
<tbody>
@if(count($profiles))
@foreach($profiles as $pro)
<?php $applicant = ApplicantsVacancies::where('applicant_id', '=', $pro->user_id )->where('vacancy_id', '=', $vac)->get() ?>
@foreach($applicant as $ap)
<?php
$appid = $ap->id;
$apyoe = $ap->years_of_experience;
$apstatus = $ap->status;
?>
@endforeach
<tr>
    <td>
    @if($pro->cv_file)
    @if(file_exists(public_path().'\\uploads\\'.$pro->cv_file))
    <a href="../uploads/{{$pro->cv_file}}"> Download</a>
    @else
    No upload
    @endif
    @else
    No upload
    @endif
    </td>
    <td>{{ link_to_route('search.applicant', $pro->first_name." ".$pro->last_name, $pro->user_id, array('target' => '_blank')) }}</td>
    <td>{{ $apyoe }}</td>
    <td><?php echo date_diff(date_create($pro->dob), date_create('today'))->y; ?></td>
    <td>{{ Profile::getGender($pro->gender) }}</td>
    {{ Form::model($applicant, array('route' => array('vacancies.applicant', $appid), 'id' => 'statusForm')) }}
    <td >{{ Form::select('status', array(0 => 'Received', 1 => 'Screened', 2 => 'Shortlisted', 3 => 'Called For Interview'), $apstatus, array('id' => 'statusfor'.$appid, 'onChange' => "updateStat($appid)")) }}</td>
    <td >
    {{ Form::close() }}
<span id="message{{$appid}}"></span>
    </td>
</tr>
@endforeach
@endif
</tbody>
</table>
@else
please make a search {{ link_to_route('search', 'here') }}.
@endif
</div>
</div>
@stop
