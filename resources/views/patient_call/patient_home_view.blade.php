@include('layouts.patient_call_master')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --> <!-- jQuery CDN -->
  <script type="text/javascript">

  // $(document).ready(function () {

  //   $("input").keyup(function(){
  //       var uhid = $('#uhid').val();
  //       $("#admission_id").html('');
  //       $.ajax({
  //           url:"{{url('get_uhid')}}",
  //           type: "post",
  //           data: {
  //           uhid: uhid,
  //           _token: '{{csrf_token()}}'
  //           },
  //           dataType : 'json',
  //           success: function(result){
  //              console.log(result);
  //              $.each(result,function(index,row){
  //                  $("#admission_id").append(JSON.stringify('<input type="text" class="form-control" id="admission_id" value="'+row.admission_id+'">'));
  //                  $("#admission_date").append(JSON.stringify("<input type='text' class='form-control' id='admission_date' value="+row.DOA+">"));
  //                  $("admission_purpose").append(JSON.stringify(" <b>Appended text</b>."));
  //                   $("#admission_purpose").append("<b>Hi</b>");
                    
  //               });
              
  //           },
  //           error:function(result)
  //           {
  //               console.log('result');
  //           }
  //       });

  //     });
  // });
  </script>

    <!-- Main Wrapper -->
    <div class="page-wrapper">
    <div class="content">
<div class="card" style="padding: 10px;">
    <form>
        @csrf
        <h5 style="color: orangered;">Patient Information</h5>
        <div class="form-row">
          <div class="col-xs-2">
            <label>UHID </label><button> +</button>
            @if(isset($patient_admission['UHID']))
            <input type="text" class="form-control" id="uhid" name="uhid" value="{{$patient_admission->UHID}}">@endif
          </div>
         
          <div class="col-xs-2">
            <label>Admission_Id</label>
            @if(isset($patient_admission['admission_id']))     
            <input type="text" class="form-control" id="admission_id" value="{{$patient_admission['admission_id']}}" readonly >@endif
          </div>
          <div class="col-xs-2">
            <label>Admission_Date</label>
            @if(isset($patient_admission['DOA']))  
            <input type="text" class="form-control" id="admission_date" value="{{$patient_admission['DOA']}}" readonly>@endif
          </div>
          <div class="col-xs-2">
            <label>Patient_Name</label>
            @if(isset($patient_admission['first_name']))  
            <input type="text" class="form-control" value="{{$patient_admission['first_name']}}" readonly>@endif
          </div>
          <div class="col-xs-2">
            <label>Age/Sex</label>
            <input type="text" class="form-control" value="{{$patient_register->age}}/{{$patient_register->gender}}" readonly>
          </div>
         <div class="col-xs-2">
            <label>Admission_Purpose</label>
            @if(isset($patient_admission['admission_purpose']))  
            <input type="text" class="form-control" value="{{$patient_admission['admission_purpose']}}" id="admission_purpose" readonly>@endif
          </div>
          <div class="col-xs-2">
            <label>Ward</label>
            @if(isset($patient_admission['ward_no']))  
            <input type="text" class="form-control" value="{{$patient_admission['ward_no']}}" readonly>@endif
          </div>
          <!-- <div class="col-xs-2">
            <label>Room</label>
            <input type="text" class="form-control" value="$admission->admission_id" readonly>
          </div> -->
          <div class="col-xs-2">
            <label>Bed</label>
            @if(isset($patient_admission['bed_no']))  
            <input type="text" class="form-control" value="{{$patient_admission['bed_no']}}" readonly>@endif
          </div>
          <div class="col-xs-2">
            <label>Attender_Phone</label>
            @if(isset($patient_admission['mobile_no1']))  
            <input type="text" class="form-control" value="{{$patient_admission['mobile_no1']}}" readonly>@endif
          </div>
          
        </div>
      </form>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box form-row" >
            <div class="col-lg-4 " style="border-style: double; padding:10px">
            <h4 class="card-title">Service Call</h4>
            <div class="col-12" >
            <button type="button" class="btn btn-primary">Emergency Nurse Call</button>
            </div><br>
            <div class="col-12">
            <button type="button" class="btn btn-secondary">Nurse Call</button>
            </div><br>
            <div class="col-12">
            <button type="button" class="btn btn-success">Cafeteria</button>
            </div><br>  
            <div class="col-12">
                <button type="button" class="btn btn-danger">House Keeping</button>
            </div>
            <hr>
        </div>
        <div class="col-lg-4" style="border-style: double; padding:10px">
            <h4 class="card-title">Records</h4>
            <div class="col-12">
                <button type="button" class="btn btn-primary">Patient History</button>
            </div><br>  
            <div class="col-12">
                <button type="button" class="btn btn-secondary">Food Plan</button>
            </div><br>  
            <div class="col-12">
                <button type="button" class="btn btn-success">Care Plan</button>
            </div><br>  
            <div class="col-12">
                <button type="button" class="btn btn-danger">Medications</button>
            </div><br>  
            
            <hr>
        </div>
        <div class="col-lg-4 " style="border-style: double; padding:10px">
            <h4 class="card-title">Call Detail</h4>
          <table>
            <thead>
                <th>Call Made<br></th>
                <th>Delay</th>
            </thead>
            <tbody>
                <tr>
                    <td>Call Nurse<br>02:00 pm</td>
                    <td>20 min</td>
                </tr>
                <tr>
                    <td>Call Nurse<br>02:00 pm</td>
                    <td>20 min</td>            
                </tr>
            </tbody>
          </table>
           
            <hr>
            <a href="{{url('report_admin')}}/{{$patient_admission->UHID}}" class="btn btn-dark" id="report">Report To Admin</a>
            <button type="button" class="btn btn-dark">Achnowledgement</button>
        </div>
         </div>
         </div>
         </div>
        </div>
    </div>
    <!--/ Main Wrapper -->
<!-- <script type="text/javascript">
        $(document).ready(function () {
   $("#report").click(function(){
            
            var uhid = $('#uhid').val();
            alert(uhid);
            $.ajax({
            url:"{{url('report_admin')}}",
            type: "post",
            data: {
            uhid: uhid,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(result){
                alert('hello');
                console.log(result);
            }
        });
        });
   });
</script> -->