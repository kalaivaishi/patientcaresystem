@include('layouts.master')
@section('title','Awaiting Request')

        <!--Main Content-->
<div class="page-wrapper">
    <div class="content">
<!-- Main Dashboard -->
    <div class="row">
        <div class="col-12">
            <div class="card">
    <div class="card-box mb-0">
             <!-- content -->
<!-- Main Dashboard -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="box-outer">
                        <div id="Patient_R" class="h-100">
                            <div class="patient-registration">
                              <div class="top-heading lightgreen_bg">
                                <h3 class="section_title"> Patient Register</h3>
                              </div>
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-10">
                                    <!-- <ul class="file-list"> -->
                                        <div class="body">
                                            <br><div class="icon-button-demo">&nbsp;
                                                <a href="/patient_registration" class="green_bg"> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-xl" ><i class="fas fa-plus" >Add</i></button></a>&nbsp;
                                                <a href="#" class="gray_bg"><button type="button" class="btn btn-info"><i class="fas fa-edit"  style="color:white;">Edit</i></button></a>&nbsp;
                                                <button type="button" form="my_form" class="btn btn-success"> <i class="fas fa-save" >Save</i></button></a>&nbsp;
                                                <button type="button" class="btn btn-primary"  onClick="window.location.reload();"> <i class="fas fa-sync-alt" >Refresh</i></button></a>&nbsp;
                                                <a href="/dashboard" class="red_bg"><button type="button" class="btn btn-danger"> <i class="fas fa-times-circle">Exit</i></button></a>
                                                
                 
                                            </div><br>
                                      </div>
                                    <!-- </ul> -->
                                   

                               
                                </div>  <br><br> <br><br>
                                
                                <div class="form_sec"><br>
                                  <form method="GET">
                                    
                                   <div class="form-group">
                                    <label for="UHID">UHID</label>
                                    <div class="flexContainer">
                                      <input type="text" name="uhid" class="form-control" id="UHID" placeholder="" value="">
                                      <!--  data-toggle="modal" data-target="#patient-registration-modal" -->

                                          <button type="button" name="search_uhid" value="IsUHID" class="input-group-text"  ><a href="/patient_search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></a></button>

                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="Appoints">IPD No</label>
                                    <div class="flexContainer">
                                      <input type="text" name="appointment_id"  class="form-control" id="Appoints" placeholder="">
                                      <!-- data-toggle="modal" data-target="#patient-registration-modal" -->
                                       <button type="button"  name="search_app_id"  value="IsAppointmentId" class="input-group-text" data-toggle="modal" data-target="#patient-registration-modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                   </div>
                                 </div>
                                  <div class="form-group">
                                    <label for="DateTime">Registration Date Time</label>
                                    <input type="text" class="form-control" id="DateTime" placeholder="" value="" readonly>
                                  </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="formGroupExampleInput2">Patient Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="" readonly>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="formGroupExampleInput2">Age</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="" value="" readonly>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="formGroupExampleInput2">Gender</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="" value="" readonly>
                                  </div>
                                </div>
                                
                                  </form>
                                 <hr>
                                 <!-- Tab -->
<div class="nursing-assessment-tabs p-2 bg-white">
    <div role="tabpanel">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified nav-tabs-dropdown " role="tablist">
        <li role="presentation" class="w-50">
          <a href="#profile" aria-controls="home" class=" btn-primary active" role="tab" data-toggle="tab">Registration Information(Alt +1)</a>
        </li>
        <li role="presentation" class="w-50"><a class="btn-primary " href="#home" aria-controls="profile" role="tab" data-toggle="tab"> Admission Information(Alt +1)</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <div role="tabpanel" class="tab-pane pt-2 active" id="profile">
          <div class="row inner-tabs no-gutters ">
            

            <form class="needs-validation" id="my_form" enctype="multipart/form-data" action="{{url('save_patient_register')}}" method="post">
                            @csrf

                <input type="hidden" name="csrfmiddlewaretoken" value="VPiTs9Lhqw0eiFKxwH9ATskDiKq85UPUQOZZXQpfJXswyzK0YIXtelLMVgiCF75I">

                  <!-- <div class="form-group" >
                    <div class="patient-img text-right" >
                    <div class="profile-img-wrap" style="margin-top:-4em;">
                        <img class="inline-block" src="../../static/assets/images/user.jpg" id="output" alt="user">
                        <div class="fileupload btn">
                            <span class="btn-text" >Upload</span>
                            <input name="patient_profile" class="upload" type="file" onchange="loadFile(event)" required/>
                        </div>
                  </div>
                  </div>
                  </div> -->

              <div class="form-group">
                <label for="formGroupExampleInput2">Title*</label>
                <select name="title" id="cars" required>
                  <option value="Mr">Mr.</option>
                  <option value="Ms">Ms.</option>
                  <option value="Mrs">Mrs</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">First Name*</label>
                <input type="text" name="first_name" class="form-control" value="" id="formGroupExampleInput2" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Middle Name</label>
                <input type="text" name="middle_name" class="form-control" value="" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Last Name*</label>
                <input type="text" name="last_name" class="form-control" value="" id="formGroupExampleInput2" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Age*</label>
                <input type="text" name="age" class="form-control" value="" id="formGroupExampleInput2" placeholder="" required>
              <!--<h3  id="result" name="age" placeholder="" style="border:1px solid #CED4DA;height:1.6em;border-radius:0.2em;margin-top:0.3em;"></h3>-->
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">DOB*</label>
                <input type="date" name="dob" class="form-control" value="" id="DOB" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Gender*</label>
                <select name="gender" id="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Blood Group*</label>
                <select name="blood_group" id="gender">
                  <option value="NA">N/A</option>
                  <option value="A">O+</option>
                  <option value="B">O-</option>
                  <option value="C">A+</option>
                  <option value="C">A-</option>
                  <option value="C">B+</option>
                  <option value="C">B-</option>
                  <option value="C">AB+</option>
                  <option value="C">AB-</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Marital Status*</label>
                <select name="marital_status" id="gender">
                  <option value="Married ">Married</option>
                  <option value="Unmarried">Unmarried</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Father's/Husband Name*</label>
                <input type="text" name="father_name" value="" class="form-control" id="formGroupExampleInput2" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Mother Name</label>
                <input type="text" name="mother_name" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Mobile Number*</label>
                <input type="text" name="mob_no" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Email ID</label>
                <input type="text" name="email_id" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Address*</label>
                <input type="text" name="address" value="" id="formGroupExampleInput2" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Referred by*</label>
                <select name="referred_by" id="gender">
                  <option value="AAA ">AAA</option>
                  <option value="BBB">BBB</option>
                </select>
              </div>
              <div class="form-group">
                <label for="country">Country*</label>
              <select id="country" name="country">
                  <option>select country</option>
              </select>
              </div>
              <div class="form-group">
                <label for="state-code">State*</label>
                <select id="state-code" name="state">
                    <option>select country</option>
                </select>
                <!-- <span id="state-code"><input type="text" id="state" name="state"></span> -->
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">City*</label>
                <input type="text" name="city" value="">
                <!-- <select name="gender" id="gender">
                  <option value="City">City</option>
                  <option value="City2">City2</option>
                </select> -->
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Pin Code*</label>
                <input type="text" name="pincode" value="" id="formGroupExampleInput2" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Aadhar Number</label>
                <input type="text" name="aadhar_no" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">PAN Card Number</label>
                <input type="text" name="pan_no" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Emergency Contact Person</label>
                <input type="text" name="emergency_contact_person" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Emergency Contact Number</label>
                <input type="text" name="emergency_contact_no" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Alternate Contact Number</label>
                <input type="text" name="alternate_contact_no" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Nationality</label>
                <select name="nationality">
                  <option value="Indian">Indian</option>
                  <option value="Indian">Others</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Staff Member</label>
                <select name="staff_member">
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Relationship</label>
                <select name="relationship">
                  <option value="Father">Father</option>
                  <option value="Husband">Husband</option>
                </select>
              </div>
              <div class="form-group">
                <label class="check_opt" >Allow Photo At Nursing Station
                  <input type="checkbox" name="allow_photo" value="1">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="form-group">
                <label class="check_opt">Notable
                  <input type="checkbox" name="notable" value="1">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="attech_doc w100 border ptb20">
                <div class="form-group">
                  <label class="check_opt">Cash
                    <input type="checkbox" name="cash" value="1" >
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="check_opt">Senior Citizen
                    <input type="checkbox" name="senior_citizen" value="1">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Billing Group*</label>
                  <select name="billing_group" required>
                    <option value="Billing">Billing</option>
                    <option value="Billing">Billing</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Corporate Name</label>
                  <select name="corporate_name">
                    <option value="Corporate Name">Corporate Name</option>
                    <option value="Corporate Name">Corporate Name</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Card Holder Name</label>
                  <input type="text" name="card_holder_name" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Card Number</label>
                  <input type="text" name="card_no" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Relation</label>
                  <select name="relation">
                    <option value="Relation1">Relation1</option>
                    <option value="Relation2">Relation2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Valid Upto</label>
                  <input type="date" name="valid_upto" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Sum Insured Amount</label>
                  <input type="number" name="sum_insured_amt" value="" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>
                <div class="form-group">
                  <label class="check_opt">InActive
                    <input type="checkbox" name="inactive" value="1">
                    <span class="checkmark"></span>
                  </label>
                  <div class="alert-warning mt-3"><i class="fa fa-plus" aria-hidden="true"></i> Insert</div>
                </div>
              </div>
            <div class="table-responsive">
              <table class="table border">
                <tr style="background: #76aeb3;">
                  <th style="color: #fff;">Billing Group</th>
                  <th style="color: #fff;">Corporate Name</th>
                  <th style="color: #fff;">Card Holder Name</th>
                  <th style="color: #fff;">Card Name</th>
                  <th style="color: #fff;">Reletion</th>
                  <th style="color: #fff;">Valid Upto</th>
                  <th style="color: #fff;">Sum Insured Amt</th>
                  <th style="color: #fff;">Active  </th>
                </tr>
                <tr>
                  <td colspan="8">&nbsp;</td>
                </tr>
              </table>
            </div>
              <div class="row w-100">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Remark">Remark</label>
                    <input type="text" name="remark" class="form-control" id="Remark" placeholder="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group ">
                    <label for="formGroupExampleInput2">Last Modified</label>
                    <input type="text" name="last_modified" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group ">
                    <label for="formGroupExampleInput2">Last Modified Date</label>
                    <input type="date" name="last_modified_date" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                  </div>
                </div>
              </div>
                     
         </div>
        </div>

        <div role="tabpanel" class="tab-pane " id="home">
          <div class="row mt-2 no-gutters">
            <div class="col-md-2">
   
    <div id="div_id_admission_datetime" class="form-group">
        
            
        <label for="id_admission_datetime" class=" requiredField">
                Admission datetime<span class="asteriskField">*</span>
            </label>
        <div class="">
                    
        <input type="datetime-local" name="admission_date" class="textinput textInput form-control" required id="id_admission_datetime">
     </div>
       
    </div>
       </div>
            <div class="col-md-2">
  
    <div id="div_id_admission_type" class="form-group">
        
            
        <label for="id_admission_type" class=" requiredField">
                Admission type<span class="asteriskField">*</span>
            </label>
        <div class="">
                    
                        <select name="admission_type" class="select form-control" id="id_admission_type">
  <option value="add1">add1</option>

  <option value="add2">add2</option>

  <option value="add3">add3</option>

</select>
            </div>
  </div>
          </div>
            <div class="col-md-2">
    
    <div id="div_id_request_ward_type" class="form-group">
      <label for="id_request_ward_type" class=" requiredField">
                Request ward type<span class="asteriskField">*</span>
            </label>
     
                <div class="">
                    
                        <input type="text" name="request_ward_type" class="textinput textInput form-control" required id="id_request_ward_type">
      </div>
       
    </div>
      </div>
            <div class="col-md-2" >
    
    <div id="div_id_request_ward_category" class="form-group">
        
            
        <label for="id_request_ward_category" class=" requiredField">
                Request ward category<span class="asteriskField">*</span>
            </label>
       <div class="">
                    
                        <input type="text" name="request_ward_category" class="textinput textInput form-control" required id="id_request_ward_category">
     </div>
       
    </div>
        </div>
            <div class="col-md-2"><br><br>
  <div class="form-group">
   
    <div id="div_id_infected" class="form-check">
      <input type="checkbox" name="infected" class="checkboxinput form-check-input" required id="id_infected">
                
                <label for="id_infected" class="form-check-label requiredField">
                    Infected<span class="asteriskField">*</span>
                </label>
  
    </div>
       
        </div>
          </div>
            <div class="col-md-2"><br><br>
     <div class="form-group">
   
    <div id="div_id_mlc" class="form-check">
           <input type="checkbox" name="mic" class="checkboxinput form-check-input" required id="id_mlc">
                
                <label for="id_mlc" class="form-check-label requiredField">
                    Mlc<span class="asteriskField">*</span>
                </label>
    </div>
      </div>
         </div>
            <div class="col-md-2">
   <div id="div_id_mlc_no" class="form-group">
            
        <label for="id_mlc_no" class=" requiredField">
                Mlc no<span class="asteriskField">*</span>
            </label>
          <div class="">
                    
                        <input type="text" name="mic_no" class="textinput textInput form-control" required id="id_mlc_no">
  </div>
       
    </div>
          </div>
            
            <div class='container-fluid'>
                <div class="col-lg-16">
                  <fieldset class="border" >
                    <legend class ='text-left' style="color: orange;"><b>Doctor Details</b></legend>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgb(233, 233, 233);"><br>
                        <input type="hidden" name="csrfmiddlewaretoken" value="VPiTs9Lhqw0eiFKxwH9ATskDiKq85UPUQOZZXQpfJXswyzK0YIXtelLMVgiCF75I">
                        <div class="row clearfix">
                           <div class="col-md-3">
  
    <div id="div_id_primary_doctor" class="form-group">
          
        <label for="id_primary_doctor" class=" requiredField">
                Primary doctor<span class="asteriskField">*</span>
            </label>
        
        <div class="">
                    
                        <select name="primary_doctor" class="select form-control" id="id_primary_doctor">
  <option value="p1">doc1</option>

  <option value="p2">doc2</option>

  <option value="p3">doc3</option>

</select>
     </div>
   </div>
                         </div>
                           <div class="col-md-3">
 
    <div id="div_id_Department" class="form-group">
           
        <label for="id_Department" class=" requiredField">
                Department<span class="asteriskField">*</span>
            </label>
          <div class="">
                    
                        <select name="department" class="select form-control" id="id_Department">
  <option value="dept1">dept1</option>

  <option value="dept2">dept2</option>

  <option value="dept3">dept3</option>

</select>
    </div>
       
    </div>
                    </div>
                           <div class="col-md-3">
       
    <div id="div_id_Secondary_doctor" class="form-group">
        
            
        <label for="id_Secondary_doctor" class=" requiredField">
                Secondary doctor<span class="asteriskField">*</span>
            </label>
         <div class="">
                    
                        <input type="text" name="secondary_doctor" class="textinput textInput form-control" required id="id_Secondary_doctor">
     </div>
        
    </div>
                       </div>
                           <div class="col-sm-0">
                           <button type="button" class="btn btn-warning"> <i class="fas fa-plus" ></i></button>
                            </div>
                           <div class="col-md-3" >
   
    <div id="div_id_Ref_hospital" class="form-group">
           
        <label for="id_Ref_hospital" class=" requiredField">
                Ref hospital<span class="asteriskField">*</span>
            </label>
      <div class="">
                    
                        <select name="ref_hospital" class="select form-control" id="id_Ref_hospital">
  <option value="hos1">hos1</option>

  <option value="hos2">hos2</option>

  <option value="hos3">hos3</option>

</select>
                    
       </div>
       
    </div>
                        </div>
                           <div class="col-sm-0">
                           </div>
                       
                        </div>
                      
                    </div>
                  </fieldset>
                </div><br>
            </div>   
            <!-- 1st Container Ends          -->
            <!-- 2nd Container Start -->
            <div class='container-fluid'>
                <div class="col-lg-16">
                  <fieldset class="border" >
                    <legend class ='text-left' style="color: orange;"><b>Bed Allotment</b></legend>
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:rgb(233, 233, 233);"><br>
                      
                        <input type="hidden" name="csrfmiddlewaretoken" value="VPiTs9Lhqw0eiFKxwH9ATskDiKq85UPUQOZZXQpfJXswyzK0YIXtelLMVgiCF75I">
                        <div class="row clearfix">
                            <div class="col-md-3" >
   
    <div id="div_id_bed_no" class="form-group">
          
        <label for="id_bed_no" class=" requiredField">
                Bed no<span class="asteriskField">*</span>
            </label>
       <div class="">
                    
                        <input type="text" name="bed_no" class="textinput textInput form-control" required id="id_bed_no">
    </div>
       
    </div>
                           </div>
                           <div class="col-md-2">
                           </div>
                           <div class="col-md-2">
                           </div>
                           <div class="col-md-2" >
                           </div>
                           <div class="col-md-2">
                           </div>
                            <!-- Table -->
                    <div class="table-responsive">
                        <table class="table border">
                          <tr style="background: #76aeb3;">
                            <th style="color: #fff;">Allotment Date/Time</th>
                            <th style="color: #fff;">Requested Category</th>
                            <th style="color: #fff;">Alloted Category</th>
                            <th style="color: #fff;">Ward Type</th>
                            <th style="color: #fff;">Bed No.</th>
                            <th style="color: #fff;">Transfer Reason</th>
                            <th style="color: #fff;">Vacant Bed</th>
                            <th style="color: #fff;">Vacant Date Time  </th>
                          </tr>
                          <tr>
                            <td colspan="8">&nbsp;</td>
                          </tr>
                        </table>
                      </div>
                      <!-- Table Ends -->

                      <div class="col-lg-4 ">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </div>
                      </form>
                    </div>
           </fieldset>
                </div><br>
            </div>  
            <!-- 2nd Container Ends 
            <a href="" class="slyblue_bg"><button type="button" class="btn btn-warning"><i class="fa fa-qrcode" >Registration Card</i></button></a>&nbsp;
            <a href="" class="slyblue_bg"><button type="button" class="btn btn-warning"><i class="fa fa-qrcode" >Visitor Pass</i></button></a>&nbsp;
            <a href="" class="slyblue_bg"><button type="button" class="btn btn-warning"><i class="fa fa-qrcode" >Patient_enquiry</i></button></a>&nbsp;
            <a href="" class="slyblue_bg"><button type="button" class="btn btn-warning"><i class="fa fa-qrcode" >Bed Shift Intimation</i></button></a>&nbsp;
            <a href="" class="slyblue_bg"><button type="button" class="btn btn-warning"><i class="fa fa-qrcode" >Admission Requested</i></button></a>&nbsp;
-->
          </div>
        </div>
      </div>
<!-- Tab Ends -->
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal"  id="patient-registration-modal" tabindex="-1" role="dialog" aria-labelledby="patient-registration-modal" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 90%;">
                            <div class="modal-content">
                              <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="patient-registration-title">Patient Registration Search</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation">
                                  <div class="row">
                                    <div class="col-md-4 pl-2 pr-2">
                                      <div class="form-group row no-gutters">
                                        <label for="reg-no" class="col-sm-3 col-form-label">UHID</label><br>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="reg-no" placeholder="" required>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4 pl-2 pr-2">
                                      <div class="form-group row no-gutters">
                                        <label for="patient-name" class="col-sm-3 col-form-label">Patient Name</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control" id="patient-name" placeholder="" required>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4 pl-2 pr-2">
                                      <div class="form-group row no-gutters">
                                        <label for="mobile-no" class="col-sm-3 col-form-label">Mobile No.</label>
                                        <div class="col-sm-7">
                                          <input type="number" class="form-control" id="mobile-no" placeholder="" required>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-4 pl-2 pr-2">
                                      <div class="form-group row no-gutters">
                                        <label for="DOB" class="col-sm-3 col-form-label">DOB</label>
                                        <div class="col-sm-7">
                                          <input type="date" class="form-control" id="DOB" placeholder="" required>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4 mr-0 ml-auto pl-2 pr-2">
                                      <div class="form-group butns text-right">
                                       <button type="submit" class="bg-primary border-0 p-2 text-white" name="button"><i class="fa fa-hand-pointer" aria-hidden="true"></i></button>
                                       <button type="button" class="bg-primary border-0 p-2 text-white" name="button"><i class="fas fa-paint-brush"></i></button>
                                     </div>
                                   </div>
                                 </div>
                                 </form>
                                 <div class="row">
                                  <div class="col-md-12">
                                    <ul class="patient_record">
                                      <li class="d-flex align-items-center ml30"><span class="yellow_bg"></span>Admitted Patient</li>
                                      <li class="d-flex align-items-center ml30"><span class="red_bg"></span>Emergency Patient</li>
                                      <li class="d-flex align-items-center ml30"><span class="green_bg"></span>Expired Patient</li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="register_record">
                                      <table class="table border">
                                        <tr style="background:#d1dae6;">
                                          <th>UHID/Reg No.</th>
                                          <th>Registration date and time</th>
                                          <th>Patient Name</th>
                                          <th>Gender</th>
                                          <th>DOB</th>
                                          <th>Mobile No.</th>
                                          <th></th>
                                        </tr>
                                        
                                            <!-- <div class="dropdown">
                                              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-hand-pointer" aria-hidden="true"></i></button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                              </div> -->

                                      </table>
                                      <nav aria-label="Page navigation example" class="d-flex align-items-center justify-content-end">
                                        <ul class="pagination">
                                          <li class="page-item">
                                            <a class="page-link" href="#!" aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                          <li class="page-item">
                                            <a class="page-link" href="#!" aria-label="Next">
                                              <span aria-hidden="true">&raquo;</span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </li>
                                        </ul>
                                      </nav>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        </div>


                        <!-- Modal -->
                        <!-- style="width:40%;margin-left:30%;margin-right:auto;display:block;" -->
                          <div class="modal" style="opacity:1;" id="out-patient-visit" tabindex="-1" role="dialog" aria-labelledby="out-patient-visit" aria-hidden="true" >
                          <div class="modal-dialog modal-dialog-centered"  role="document" style="max-width: 55%;margin-top:5%;">
                            <div class="modal-content">
                              <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="patient-registration-title">Out-Patient Visit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <a href="/patient_registration"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
                                </button>
                              </div>
                              <div class="modal-body"  style="overflow-y:scroll;height:29.1em;">
                                 <form method="POST" id="VisitForm" action="/out_paient_visit">
                                      <input type="hidden" name="csrfmiddlewaretoken" value="VPiTs9Lhqw0eiFKxwH9ATskDiKq85UPUQOZZXQpfJXswyzK0YIXtelLMVgiCF75I">
                                <div class="Out-Patient_record">
                                  <div class="col-sm-12 text-right">
                                      <button  type="submit" class="btn btn-primary border-0 p-2 icon-size" name="visit_form"><i class="fa fa-save"></i></button>
                                      <button class="btn btn-primary dropdown-toggle p-2 icon-size" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" >Edit</a>
                                        <a class="dropdown-item" href="#">Another action</a>

                                      </div>
                                    </div><hr>
                                    <div class="alert-primary patient-visit " >
                                      <div class="row no-gutters">
                                        <div class="col-md-3 pl-2 pr-2">
                                          <div class="form-group">
                                            


    
    <div id="div_id_uhid" class="form-group">
        
            
        <label for="id_uhid" class=" requiredField">
                Uhid<span class="asteriskField">*</span>
            </label>
      <div class="">
                    
                        <input type="text" name="uhid" maxlength="50" class="textinput textInput form-control" required id="id_uhid">
   </div>
      
    </div>
                                     </div>
                                        </div>
                                        <div class="col-md-3 pl-2 pr-2">
                                          <div class="form-group">
 
    <div id="div_id_visit_type" class="form-group">
        
            
        <label for="id_visit_type" class=" requiredField">
                Visit type<span class="asteriskField">*</span>
            </label>
        <div class="">
                    
                        <select name="visit_type" class="select form-control" required id="id_visit_type">
  <option value="" selected>---------</option>

  <option value="One">One</option>

  <option value="Two">Two</option>

  <option value="Three">Three</option>

</select>
               </div>
       
    </div>
                                        </div>
                                        </div>
                                        <div class="col-md-3 pl-2 pr-2">
                                          <div class="form-group ">
 
    <div id="div_id_clinical_department" class="form-group">
        
            
        <label for="id_clinical_department" class=" requiredField">
                Clinical department<span class="asteriskField">*</span>
            </label>
         <div class="">
                    
                        <select name="clinical_department" class="select form-control" required id="id_clinical_department">
  <option value="" selected>---------</option>

</select>
     </div>
            
        
    </div>
                                         </div>
                                        </div>
                                        <div class="col-md-3 pl-2 pr-2">
  
    <div id="div_id_nurse_doctor" class="form-group">
        
            
        <label for="id_nurse_doctor" class=" requiredField">
                Nurse doctor<span class="asteriskField">*</span>
            </label>
       <div class="">
                    
                        <select name="nurse_doctor" class="select form-control" required id="id_nurse_doctor">
  <option value="" selected>---------</option>

</select>
             </div>
        
    </div>
                                       </div>
                                        </div>
                                        <div class="col-12 pl-2 pr-2">
                                          <div class="form-group">

    <div id="div_id_description" class="form-group">
           
        <label for="id_description" class="">
                Description
            </label>
         <div class="">
                      <input type="text" name="description" maxlength="500" class="textinput textInput form-control" id="id_description">
        </div>
        
    </div>
                                        </div>
                                        </div>
                                          <div class="col-3 pl-2 pr-2">
                                          <div class="form-group">
  
    <input type="hidden" name="visit_id" value="Null" id="id_visit_id">


                                          </div>
                                        </div>

                                      </div><!-- row -->
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="today_visit">
                                          <h5>Today's Visit</h5>
                                          <hr>
                                        </div>
                                      </div>
                                    </div><!-- row -->
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="today_visit">
                                          <h5> <i class="fa fa-minus-square-o" aria-hidden="true"></i>  Previous Visits</h5>
                                         
                                        </div>
                                      </div>
                                    </div><!-- row -->
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                    </div>
                    <!--end chat overlay-->
                </div>
            </div>
        </div>
        <!--end page wrapper -->
    </div>
        </div>
        <!--/ Latest Patients-->
    </div>
    <script>
      var loadFile = function (event) {
var image = document.getElementById("output");
image.src = URL.createObjectURL(event.target.files[0]);
};

  </script>
  <script>

  function ageCalculator() {
      //collect input from HTML form and convert into date format
      var userinput = document.getElementById("DOB").value;
      var dob = new Date(userinput);

      //check user provide input or not
      if(userinput==null || userinput==''){
        document.getElementById("message").innerHTML = "**Choose a date please!";
        return false;
      }

      //execute if the user entered a date
      else {
      //extract the year, month, and date from user date input
      var dobYear = dob.getYear();
      var dobMonth = dob.getMonth();
      var dobDate = dob.getDate();

      //get the current date from the system
      var now = new Date();
      //extract the year, month, and date from current date
      var currentYear = now.getYear();
      var currentMonth = now.getMonth();
      var currentDate = now.getDate();

      //declare a variable to collect the age in year, month, and days
      var age = {};
      var ageString = "";

      //get years
      yearAge = currentYear - dobYear;

      //get months
      if (currentMonth >= dobMonth)
        //get months when current month is greater
        var monthAge = currentMonth - dobMonth;
      else {
        yearAge--;
        var monthAge = 12 + currentMonth - dobMonth;
      }

      //get days
      if (currentDate >= dobDate)
        //get days when the current date is greater
        var dateAge = currentDate - dobDate;
      else {
        monthAge--;
        var dateAge = 31 + currentDate - dobDate;

        if (monthAge < 0) {
          monthAge = 11;
          yearAge--;
        }
      }
      //group the age in a single variable
      age = {
      years: yearAge,
      months: monthAge,
      days: dateAge
      };


      if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
         ageString = age.years + "Y " + age.months + "M  " + age.days + "D";
      else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
         ageString = "Only " + age.days + " days old!";
      //when current month and date is same as birth date and month
      else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
         ageString = age.years +  " years old. Happy Birthday!!";
      else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
         ageString = age.years + " years and " + age.months + " months old.";
      else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
         ageString = age.months + " months and " + age.days + " days old.";
      else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
         ageString = age.years + " years, and" + age.days + " days old.";
      else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
         ageString = age.months + " months old.";
      //when current date is same as dob(date of birth)
      else ageString = "Welcome to Earth! <br> It's first day on Earth!";

      //display the calculated age
      return document.getElementById("result").innerHTML = ageString;

    }
  }
  </script>
<!-- Start Country State -->
<script>
// user country code for selected option
let user_country_code = "IN";

// (function () {
//     // script https://www.html-code-generator.com/html/drop-down/country-region

//     // Get the country name and state name from the imported script.
//     let country_list = country_and_states['country'];
//     let states_list = country_and_states['states'];

//     // creating country name drop-down
//     let option =  '';
//     option += '<option>select country</option>';
//     for(let country_code in country_list){
//         // set selected option user country
//         let selected = (country_code == user_country_code) ? ' selected' : '';
//         option += '<option value="'+country_code+'"'+selected+'>'+country_list[country_code]+'</option>';
//     }
//     document.getElementById('country').innerHTML = option;

//     // creating states name drop-down
//     let text_box = '<input type="text" class="input-text" id="state">';
//     let state_code_id = document.getElementById("state-code");

//     function create_states_dropdown() {
//         // get selected country code
//         let country_code = document.getElementById("country").value;
//         let states = states_list[country_code];
//         // invalid country code or no states add textbox
//         if(!states){
//             state_code_id.innerHTML = text_box;
//             return;
//         }
//         let option = '';
//         if (states.length > 0) {
//             option = '<select id="state">\n';
//             for (let i = 0; i < states.length; i++) {
//                 option += '<option value="'+states[i].code+'">'+states[i].name+'</option>';
//             }
//             option += '</select>';
//         } else {
//             // create input textbox if no states
//             option = text_box
//         }
//         state_code_id.innerHTML = option;
//     }

//     // country select change event
//     const country_select = document.getElementById("country");
//     country_select.addEventListener('change', create_states_dropdown);

//     create_states_dropdown();
// })();

</script>
<!-- End Country State -->

<!-- Modal Submit Button -->
<script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
   (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

</script>
    </div>
 
            </div>
<!--/ content -->
        </div>
    </div>
</div>
</div>
