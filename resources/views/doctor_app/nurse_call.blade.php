@include('layouts.patient_reports_master')

<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Nurse Call </a>
   </div>
 </nav><br>
  
 <div class="container-fluid">
    <div class="card" style="padding: 10px;">

            <h5 style="color: orangered;">Patient Information</h5>
            <div class="form-row">
              <div class="col-xs-2">
                <label>Uhid</label>
                <input type="text" class="form-control" id="uhid" value="{{$patient_details->UHID}}">
              </div>
              <div class="col-xs-2">
                <label>Admission_Id</label>
                <input type="text" class="form-control" id="admission_id" value="{{$patient_details->admission_id}}">
              </div>
              <div class="col-xs-2">
                <label>Admission_Date</label>
                <input type="text" class="form-control" value="{{$patient_details->DOA}}">
              </div>
              <div class="col-xs-2">
                <label>Patient_Name</label>
                <input type="text" class="form-control" value="{{$patient_details->first_name}} {{$patient_details->middle_name}} {{$patient_details->last_name}}">
              </div>
              <div class="col-xs-2">
                <label>Age/Sex</label>
                <input type="text" class="form-control" value="{{$patient_details->room_no}}/{{$patient_details->gender}}">
              </div>
              <div class="col-xs-2">
                <label>Admission_Purpose</label>
                <input type="text" class="form-control" value="{{$patient_details->admission_purpose}}">
              </div>
              <div class="col-xs-2">
                <label>Ward</label>
                <input type="text" class="form-control" value="{{$patient_details->ward_no}}" id="ward_no">
              </div>
              <div class="col-xs-2">
                <label>Room</label>
                <input type="text" class="form-control" value="{{$patient_details->room_no}}" id="room_no">
              </div>
              <div class="col-xs-2">
                <label>Bed</label>
                <input type="text" class="form-control" value="{{$patient_details->bed_no}}" id="bed_no">
              </div>
              <div class="col-xs-2">
                <label>Attender_Phone</label>
                <input type="text" class="form-control" value="{{$patient_details->mobile_no1}}">
              </div>

             
            </div>
          
    </div>
  </div>
 <div class="container-fluid">
    <!-- <div class="tab">
     
      </div> -->
      <form method="post" action="{{url('consultant_observe')}}">
          @csrf
        <input type="hidden" class="form-control" name="uhid" id="uhid" value="{{$patient_details->UHID}}">
        <input type="hidden" class="form-control" value="{{$patient_details->ward_no}}" name="ward_no" id="ward_no">
        <input type="hidden" class="form-control" value="{{$patient_details->room_no}}" name="room_no" id="room_no">
        <input type="hidden" class="form-control" value="{{$patient_details->bed_no}}" name="bed_no" id="bed_no">
        <input type="hidden" class="form-control" name="observate_id" value="{{$nurse_observe->observation_id}}">
            <div class="form-group">
              <label>Description</label>
              <input type="text" class="form-control" placeholder="Enter Description" id="description" name="description">
            </div>
            <div class="form-group">
              <label >Background</label>
              <input type="text" class="form-control"  placeholder="Enter background" id="background" name="background">
            </div>
             <div class="col-xs-2">
              <b><label>Nurse Description</label></b>
              <b><input type="text" class="form-control" id="nurse_description" value="{{$nurse_observe->description}}"></b>
            </div>
            <div class="col-xs-2">
              <b><label> Nurse Background</label></b>
              <b><input type="text" class="form-control" id="nurse_background" value="{{$nurse_observe->background}}"></b>
            </div><br><br>
            <!-- <div class="form-group">
                <h5>Temperature :37℃ ;Pulse :60-99 beats per/min;Bp:128/80 mm Hg;
                    Respiratory Rate:12/16 breathe per/min;Spo2
                </h5>
            </div> -->
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
           
          </form>
        </div>
      </div>
   
 </div>

<script>
  

   function nurse_observ(observe_id)
   {
            var uhid = $("#uhid").val();
            var ward_no = $("#ward_no").val();
            var room_no = $("#room_no").val();
            var bed_no = $("#bed_no").val();
            //var observe_id = $("#observe_id").val();
            $.ajax({
                url:"{{url('nurse_observe')}}",
                type: "post",
                data: {
                    uhid: uhid,
                    ward_no: ward_no,
                    room_no: room_no,
                    bed_no: bed_no,
                    observe_id: observe_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(data){
                  
                  $("#observate_id").val(data.observation_id);
                  $("#nurse_description").val(data.description);
                  $("#nurse_background").val(data.background);
                },
                error:function(data)
                {
                    console.log(data);
                }
            });
    }

</script>