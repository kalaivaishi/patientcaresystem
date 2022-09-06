@include('layouts.patient_reports_master')

<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Emergency Calls </a>
   </div>
 </nav><br>
<div class="card-box form-row" >
    <div class="col-lg-9" style="border-style: double; padding:10px">
<div class="row nurse_grid">
    @foreach($patient_details as $patient_info)
    
    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-2" style="fill: aquamarine;">
        
         <button type="button" class="btn" data-toggle="modal" data-target="#complete_call"
                                                data-uhid="{{$patient_info->UHID}}"
                                            data-admiss_id="{{$patient_info->admission_id}}"
                                                data-ward_no="{{$patient_info->ward_no}}"
                                                data-room_no="{{$patient_info->room_no}}"
                                                data-bed_no="{{$patient_info->bed_no}}" >
        <div class="profile-widget" style="background-color: red">

            <h4 style="color: black;"><b>{{$patient_info->UHID}}</b></h4>
            <h4 style="color: white;"><b>Ward {{$patient_info->ward_no}}</b></h4>
            <h4 style="color: white;"><b>Bed {{$patient_info->bed_no}}</b></h4>
        </div>
    </div>
  </button>
@endforeach
</div>

</div>

</div>
</div>