@include('layouts.doctor_master')

        
<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Patients </a>
   </div>
 </nav><br>
 <div class="container-fluid">

   
<div class="row doctor-grid">
    @foreach($patient_details as $details)
    <a href='{{url("patient_history")}}/{{$details->admission_id}}'>

    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>{{$details->UHID}}</b></h4>
            <a href='{{url("patient_history")}}/{{$details->admission_id}}'>

            <h4 class="text-ellipsis" ><a href='{{url("patient_history")}}/{{$details->admission_id}}'>

                {{$details->first_name}} {{$details->middle_name}} {{$details->last_name}}</a></h4>
            <a href='{{url("patient_history")}}/{{$details->admission_id}}'>

                <h4>{{$details->admission_id}}</h4>

            <a href='{{url("patient_history")}}/{{$details->admission_id}}'>

                <div class="doc-prof">{{$details->bed_no}}Y {{$details->gender}}</div>

            <a href='{{url("patient_history")}}/{{$details->admission_id}}'>

                <h4>{{$details->DOA}}</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <a href='{{url("patient_history")}}/{{$details->admission_id}}'>

                <h4>{{$details->room_no}}/{{$details->bed_no}} {{$details->floor_no}} Floor</h4>

            <a href='{{url("patient_history")}}/{{$details->admission_id}}'>

                <h4 style="color: blue;">Cons:{{$details->consultant_name}}</h4>

        </div>
    </div>
    </a>
@endforeach
</div>
<!-- <div class="row">
    <div class="col-sm-12">
        <div class="see-all">
            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
        </div>
    </div>
</div> -->
</div>
</div>
</div>