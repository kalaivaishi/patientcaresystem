@include("layouts.patient_reports_master")


<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Vitals </a>
   </div>
 </nav><br>
 <div class="container-fluid">
    <div class="card" style="padding: 10px;">
         <form>
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
                <label>Attender Phone</label>
                <input type="text" class="form-control" value="{{$patient_details->mobile_no1}}">
                
              </div>

             
            </div>
          </form>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box form-row" >
            
            <div class="col-lg-6 " style="border-style: double; padding:10px">
                <h4 class="card-title">Vitals</h4>
              <table>
               
                <tbody>
                    <tr>
                        <td>Temparature</td>
                        <td>37 &#8451;</td>
                    </tr>
                    <tr>
                        <td>Heart Rate</td>
                        <td>60-99 beats per minute </td>            
                    </tr>
                    <tr>
                      <td>Pulse</td>
                      <td>60-99 beats per minute </td>            
                  </tr>
                  <tr>
                    <td>BP</td>
                    <td>128/80 mm Hg</td>            
                </tr>
                <tr>
                  <td>Respiratory Rate</td>
                  <td>12/16 breathe per minute</td>            
              </tr>
              <tr>
                <td>Oxygen Saturation</td>
                <td>95-100%</td>            
            </tr>
                </tbody>
              </table>
               
                <hr>
                <button type="button" class="btn btn-dark">Show Previous Data</button>
                <button type="button" class="btn btn-dark">Home</button>
            </div>
            <div class="col-lg-6" style="border-style: double; padding:10px">
                <h4 class="card-title">Graph</h4>
                <table>
                  <tr>
                    <td><h5>Temperature Graph</h5><img src="../../static/images/graph/bp.jpg"></td>
                    <td><h5>Pulse</h5><img src="../../static/images/graph/pulse.png" style="height: 230px;width:220px;"></td>
                  </tr>
                  <tr>
                    <td><h5>BP</h5><img src="../../static/images/graph/sugar.png" style="height: 230px;width:220px;"></td>
                    <td><H5>RR</H5><img src="../../static/images/graph/bp.jpg"></td>
                  </tr>
                  <tr>
                    <td><h5>Oxygen</h5><img src="../../static/images/graph/pulse.png"></td>
                    <td><h5>RR</h5><img src="../../static/images/graph/sugar.png" style="height: 180px;width:220px;"></td>
                  </tr>
                </table>
                
                <hr>
            </div>
             </div>
             </div>
             </div>
   

</div>
