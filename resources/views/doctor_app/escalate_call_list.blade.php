@include('layouts.patient_reports_master')


<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Escalate Calls </a>
   </div>
 </nav><br>
<div class="card-box form-row" >
    <div class="col-lg-9" style="border-style: double; padding:10px">
<div class="row nurse_grid">
    @foreach($nurse_observe as $details)
  <input type="hidden" name="observe_id" id="observe_id" value="{{$details->observation_id}}">
    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-2" style="fill: aquamarine;">
      @if($details->status == '' && $details->consultant_description == '')
      
        <a href="{{url('doc_nurse_call')}}/{{$details->observation_id}}" id="nurse_observe">

          <div class="profile-widget" style="background-color: grey">

            <h4 style="color: black;"><b>{{$details->UHID}}</b></h4>
            <h4 style="color: white;"><b>Ward {{$details->ward_no}}</b></h4>
            <h4 style="color: white;"><b>Bed {{$details->bed_no}}</b></h4>
        </div>

        @endif
      </div>
      </a>
        @endforeach
     </div>
  </div>
</div>
</div>
</div>
</div>


