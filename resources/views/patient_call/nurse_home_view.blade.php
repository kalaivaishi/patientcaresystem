@include('layouts.patient_call_master')

   <meta http-equiv="refresh" content="20">

<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(34, 34, 198);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Nurse </a>
   </div>
 </nav><br>
 <div class="container-fluid">
    <div class="card" style="padding: 10px;">
        <form method="post" action="{{url('get_nurse_details')}}">
            @csrf
            <div class="form-row">
              <div class="col-xs-4">
                <label>Ward</label>
                <input type="text" class="form-control" name="ward_no" id="ward_no" placeholder="Enter Ward Number">
              </div>
          </div><br><br>
          <div class="form-row">
              <div class="col-xs-4">
             <button type="submit" class="btn btn-primary">Submit</button>
         </div>
            </div>
          </form>
    </div>

