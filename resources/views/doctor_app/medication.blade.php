@include("layouts.patient_reports_master")


<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Patient Medication </a>
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
            <h5><b>Patient Medication </b></h5>
  
            <div class="card-box form-row" >
            <div class="col-lg-6 " style="border-style: double; padding:10px">
                <h4 class="card-title">Current Medication</h4>
              <table>
                <thead>
                    <th>List Of Medicine</th>
                    <th>Date</th>
                    <th>Consultant Name</th>
                    <th>Dossage</th>
                </thead>
               
                <tbody>
                    
                    <tr>
                        <td>Med 1</td>
                        <td>20/07/2022 </td>      
                        <td>Mantu</td>  
                        <td>30</td>    
                    </tr>
                    <tr>
                        <td>Med 1</td>
                        <td>20/07/2022 </td>      
                        <td>Mantu</td>  
                        <td>30</td>    
                    </tr>
                </tbody>
              </table>
               
                <hr>
                <button type="button" class="btn btn-dark">Show Previous Data</button>
                <button type="button" class="btn btn-dark">Home</button>
            </div>
            <div class="col-lg-6" style="border-style: double; padding:10px">
                <h4 class="card-title">Past Medication</h4>
                <table>
                    <thead>
                        <th>List Of Medicine</th>
                        <th>Date</th>
                        <th>Consultant Name</th>
                        <th>Dossage</th>
                    </thead>
                   
                    <tbody>
                        
                        <tr>
                            <td>Med 1</td>
                            <td>20/07/2022 </td>      
                            <td>Mantu</td>  
                            <td>30</td>    
                        </tr>
                        <tr>
                            <td>Med 1</td>
                            <td>20/07/2022 </td>      
                            <td>Mantu</td>  
                            <td>30</td>    
                        </tr>
                    </tbody>
                  </table>
                
                <hr>
            </div>
             </div>
             </div>
             </div>
 </div>
