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
<h2 id="personal">Applicants for Vacancy</h2>
         </div>
         </div>
         </div>
<div class="row">
        <div class="bs-component">
@if(count($vacancies))

    @foreach($vacancies as $vacancy)
        <h2>{{ $vacancy->title }}</h2>
    @endforeach
    @if(count($applicants))
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
@foreach($applicants as $applicant)
    <?php $profile = Profile::where('user_id', '=', $applicant->applicant_id)->get() ?>
    @foreach($profile as $pro)
    <tr>
        <td>
        @if(file_exists(public_path().'\\uploads\\'.$pro->cv_file))
        <a href="../../../uploads/{{$pro->cv_file}}"> Download</a>
        @else
        No upload
        @endif
        </td>
        <td>
        {{ link_to_route('search.applicant', $pro->first_name." ".$pro->last_name, $pro->user_id, array('target' => '_blank')) }}
        </td>
        <td>
        {{ $applicant->years_of_experience }}
        </td>
        <td>
        <?php echo date_diff(date_create($pro->dob), date_create('today'))->y; ?>
        </td>
        <td>
        {{ Profile::getGender($pro->gender) }}
        </td>
        {{ Form::model($applicant, array('route' => array('vacancies.applicant', $applicant->id), 'id' => 'statusForm')) }}
        <td>
        {{ Form::select('status', array(0 => 'Received', 1 => 'Screened', 2 => 'Shortlisted', 3 => 'Called For Interview'), $applicant->status, array('id' => 'statusfor'.$applicant->id, 'onChange' => "updateStat($applicant->id)")) }}
        </td>
        <td>
        {{ Form::close() }}
        <span id="message{{$applicant->id}}"></span>
        </td>
    </tr>
    @endforeach
@endforeach
</tbody>
</table>
@endif
@endif
</div>
</div>
@stop
