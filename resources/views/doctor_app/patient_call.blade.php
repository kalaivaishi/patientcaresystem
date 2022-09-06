@include("layouts.patient_reports_master")
        
<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Patient Call </a>
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
            <div class="col-lg-12 " style="border-style: double; padding:10px">
                <h4 class="card-title">Patient Call</h4>
              <table style="width: 100%;">
                <thead>
                    <th>Call </th>
                    <th>Time</th>
                    <th>Patient Name</th>
                    <th>Ward</th>
                    <th>Bed</th>
                    <th>Doctor Remarks</th>
                </thead>
               
                <tbody>
                    
                    <tr>
                        <td>Call 1</td>
                        <td>05:30.p.m</td>      
                        <td>Mantu</td>  
                        <td>30</td>   
                        <td>Deluxe</td> 
                        <td>Fever</td>
                    </tr>
                    <tr>
                        <td>Call 2</td>
                        <td>06:30.p.m</td>      
                        <td>Mantu</td>  
                        <td>30</td>   
                        <td>Deluxe</td> 
                        <td>Fever</td>  
                    </tr>
                </tbody>
              </table>
               
                <hr>
            </div>
            
             </div>
             </div>
             </div>
 </div>
