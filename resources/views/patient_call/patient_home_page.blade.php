<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Patient Home Page</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css" >
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css" >

    <!--custom styles-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        table, th, td {
            border: 1px solid;
                       }
        table {
            width: 100%;
              }

              .width{
          width: 100%;

              }
   
    </style>
 
</head>

<body>

     <!-- Main Wrapper -->
   <div class="main-wrapper  account-wrapper">
        <div class="account">
<div class="card" style="padding: 10px;">
    <form>
        @csrf
        <h5 style="color: orangered;">Patient Information</h5>
        <div class="form-row" id="details">
          <div class="col-md-2">
            <label>UHID </label>
            <input type="text" class="form-control" id="uhid" name="uhid" style="border:2px solid bisque;">
          </div>
         
          <div class="col-md-2">
            <label>Admission_Id</label>
            <div class="col-md-12" id="admission_id" style="border:2px solid bisque;">
                <input type="hidden" name="admiss_id" id="admiss_id" value="">
            </div>
            
          </div>
          <div class="col-md-2">
            <label>Admission_Date</label>
            <div class="col-md-12" id="admission_date" style="border:2px solid bisque">
            </div> 
            
          </div>
          <div class="col-md-2">
            <label>Patient_Name</label>
            <div class="col-md-12" id="patient_name" style="border:2px solid bisque">
            </div>
          </div>
          <div class="col-md-2">
            <label>Age/Sex</label>
            <div class="col-md-12" id="age_sex" style="border:2px solid bisque" >
            </div>
          </div>
          <div class="col-md-2">
            <label>Admission_Purpose</label>
            <div class="col-md-12" id="admission_purpose" style="border:2px solid bisque">
            </div>
          </div>
          <div class="col-md-2">
            <label>Ward</label>
            <div class="col-md-12" id="ward" style="border:2px solid bisque">
            </div>
          </div>
          <div class="col-md-2">
            <label>Room</label>
            <div class="col-md-12" id="room" style="border:2px solid bisque">
          </div>
      </div>
          <div class="col-md-2">
            <label>Bed</label>
            <div class="col-md-12" id="bed" style="border:2px solid bisque"> 
            </div>
          </div>
          <div class="col-md-2">
            <label>Attender_Phone</label>
            <div class="col-md-12" id="mob_no" style="border:2px solid bisque">
            </div>
          </div>
          
          
        </div>
      </form>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box form-row" >
            <div class="col-lg-3 " style="border-style: double; padding:10px">
            <h4 class="card-title">Service Call</h4>
            <div class="col-md-10">
            <button type="button" class="btn btn-danger width" style="margin-right: 5px;margin-bottom: 5px;" id="emergency_call">Emergency Nurse Call</button>
            </div>
            <!-- <div class="col-md-5">
            <button type="button" class="btn width" style="margin-right: 5px;margin-bottom: 5px;background-color: orange;" id="nurse_call">Nurse Call</button>
            </div> -->
            <div class="col-md-10">
            <!-- <button type="button" class="btn btn-success width" style="margin-right: 5px;margin-bottom: 5px;" id="cafeteria_call">Cafeteria</button> -->
             <button type="button" class="btn btn-success width" style="margin-right: 5px;margin-bottom: 5px;" data-toggle="modal" data-target="#cafeteria_list" id="cafeteria_lists">
            Cafeteria</button>
            <!-- <a href="{{url('cafeteria_call')}}" class="btn btn-success width" style="margin-right: 5px;margin-bottom: 5px;">Cafeteria</a> -->
            </div> 
            <div class="col-md-10">
             <button type="button" class="btn btn-secondary width" style="margin-right: 5px;margin-bottom: 5px;" id="house_keeping_call">House Keeping</button>
              <!--   <a href="{{url('house_keeping_call')}}" class="btn btn-secondary width" style="margin-right: 5px;margin-bottom: 5px;">House Keeping</a> -->
            </div>
        </div>
        <div class="col-lg-5" style="border-style: double; padding:10px">
            <h4 class="card-title">Records</h4>
            <div class="form-row">
            <div class="col-md-5">
                <a href="{{url('patient_history_view')}}" class="btn btn-primary width" style="margin-right: 5px;margin-bottom: 5px;">Patient History</a>
            </div>  
            <div class="col-md-5">
                <button type="button" class="btn btn-secondary width" style="margin-right: 5px;margin-bottom: 5px;">Food Plan</button>
            </div> 
            <div class="col-md-5">
                <button type="button" class="btn btn-success width" style="margin-right: 5px;margin-bottom: 5px;">Care Plan</button>
            </div>  
            <div class="col-md-5">
                <a class="btn btn-primary width" href="{{url('patient_medicine_view')}}" style="margin-right: 5px;margin-bottom: 5px;">Medications</a>
            </div>  
            </div>
        </div>
        <div class="col-lg-4" style="border-style: double; padding:10px">
            <h4 class="card-title">Call Detail</h4>
          <table>
            <thead>
                <th>Call Made</th>
                <th>Delay</th>
            </thead>
            <tbody id="call_detail">
               
            </tbody>
          </table>
          <br>
           <div class="col-md-12">
            <button type="button" class="btn btn-danger" id="report">Report To Admin</button>
        </div><br>
        
        </div>
         </div>
         </div>
         </div>
        </div>
    </div>

  <div class="modal fade" id="cafeteria_list" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
 <div class="modal-content">
     <!-- Header -->
     <div class="modal-header" style="background: skyblue;">
         <h5 class="modal-title" id="cafeteria_list" ><b> Cafeteria Service List </b></h5>
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
         </button>
         </div><br>
      <!-- Main block -->
      <div class="modal-body">
         <div class="container-fluid">
             <div class="body">
                 <div class="demo-masked-input">
                     <div class="row clearfix">
                       <div class="col-12">
                           <div class="form-group">
                               <div class="form-line">
                                   <form class="needs-validation" novalidate >
                                      @csrf
                                     <div class="form-row row">
                                       <div class="col-md-4 ">
                                        <label>Available Services</label><br>
                                     <select id="cafe_service" name="cafe_service" onchange="GetSelectedTextValue(this)" >
                                        
                                    </select> 
                                </div>
                            </div>
                                 </form>
                                   
                               </div>
                           </div>
                       </div>
                     </div>
                         <!-- Footer -->
                     <!-- <div class="modal-footer">
                         <hr style="border: 10%; color: aqua;"><br>
                    <button type="button"class="btn btn-success" > <i class="fas fa-save" >&nbsp;Save</i></button>
                         </div> -->
                     </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>  
    <!--/ Main Wrapper -->
   <!--scripts-->
    <!-- jQuery -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --> <!-- jQuery CDN -->
  <script type="text/javascript">

  $(document).ready(function () {

    $("#uhid").keyup(function(){
        var uhid = $('#uhid').val();
        $("#admission_id").html('');
        $.ajax({
            url:"{{url('get_uhid')}}",
            type: "post",
            data: {
            uhid: uhid,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
               
               $("#admission_id").html(data.admission_id);
               $("#admiss_id").val(data.admission_id);
               $("#admission_date").html(data.admission_date);
               $("#patient_name").html(data.patient_name);
               $("#age_sex").html(data.age_sex);
               $("#admission_purpose").html(data.admission_purpose);
               $("#ward").html(data.ward);
               $("#room").html(data.room);
               $("#bed").html(data.bed);
               $("#mob_no").html(data.mob_no);

               var resultData = data.call_list;
                var bodyData = '';
                var i=1;
                $.each(resultData,function(index,row){
                    const start_date = row.start_date_time;
                    const start_time = new Date(start_date).toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
              
                    const end_time =  new Date().toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
                
                var start = start_time.split(":");
                var end = end_time.split(":");
                var startDate = new Date(0, 0, 0, start[0], start[1], 0);
                var endDate = new Date(0, 0, 0, end[0], end[1], 0);
                var diff = endDate.getTime() - startDate.getTime();
                var hours = Math.floor(diff / 1000 / 60 / 60);
                diff -= hours * 1000 * 60 * 60;
                var minutes = Math.floor(diff / 1000 / 60);

                if (hours < 0)
                    hours = hours + 24;
                       var delay_time = (minutes <= 9 ? "0" : "") + minutes + " minutes";     
                    bodyData+="<tr>"
                    bodyData+="<td>"+start_time+"</td><td>"+delay_time+"</td>";
                    bodyData+="</tr>";
                    
                })
                $("#call_detail").append(bodyData);
            
               //  $.each(result.details,function(index,row){
               //     $("#admission_id").append(JSON.stringify('<input type="text" class="form-control" id="admission_id" value="'+row.admission_id+'">'));
               //     $("#admission_date").append(JSON.stringify("<input type='text' class='form-control' id='admission_date' value="+row.DOA+">"));
             
               // //      $("#admission_purpose").append(row.admission_id);
                    
               //   });
              
            },
            error:function(data)
            {
                console.log(data);
            }
        });

      });

    $("#cafeteria_lists").click(function () {
            $.ajax({
                url:"{{url('cafeteria_list')}}",
                type: "get",
                dataType : 'json',
                success: function(response){
                    $("#cafe_service").empty();
               for (var i = 0; i < response['data'].length; i++) {  
                  var s = '<option value="' + response['data'][i].cafeservice_id  + '" >' + response['data'][i].service_name + '</option>';

                  $("#cafe_service").append(s);    
               }  
            
                },
                error:function(data)
                {
                    console.log(data);
                }
            });
           
        });
  });
  </script>
<script type="text/javascript">
        $(document).ready(function () {
   $("#report").click(function(){
            
            var uhid = $('#uhid').val();
            window.location.href = "{{url('report_admin')}}" + "/" + uhid;
       
        });

   $("#emergency_call").click(function(){

        var uhid = $('#uhid').val();

    $.ajax({
            url:"{{url('emergency_call')}}",
            type: "post",
            data: {
            uhid: uhid,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
              alert(data.message);

               var resultData = data.call_list;
                var bodyData = '';
                var i=1;
                $.each(resultData,function(index,row){
                    const start_date = row.start_date_time;
                    const start_time = new Date(start_date).toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
              
                    const end_time =  new Date().toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
                
                var start = start_time.split(":");
                var end = end_time.split(":");
                var startDate = new Date(0, 0, 0, start[0], start[1], 0);
                var endDate = new Date(0, 0, 0, end[0], end[1], 0);
                var diff = endDate.getTime() - startDate.getTime();
                var hours = Math.floor(diff / 1000 / 60 / 60);
                diff -= hours * 1000 * 60 * 60;
                var minutes = Math.floor(diff / 1000 / 60);

                if (hours < 0)
                    hours = hours + 24;
                       var delay_time = (minutes <= 9 ? "0" : "") + minutes + " minutes";     
                    bodyData+="<tr>"
                    bodyData+="<td>" + 'Emergency Call - ' +start_time+"</td><td>"+delay_time+"</td>";
                    bodyData+="</tr>";
                    
                })
                $("#call_detail").append(bodyData);
            
            },
            error:function(data)
            {
                console.log(data);
            }
        });

      });

     $("#nurse_call").click(function(){

        var uhid = $('#uhid').val();

    $.ajax({
            url:"{{url('nurse_call')}}",
            type: "post",
            data: {
            uhid: uhid,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
              alert(data.message);

               var resultData = data.call_list;
                var bodyData = '';
                var i=1;
                $.each(resultData,function(index,row){
                    const start_date = row.start_date_time;
                    const start_time = new Date(start_date).toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
              
                    const end_time =  new Date().toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
                
                var start = start_time.split(":");
                var end = end_time.split(":");
                var startDate = new Date(0, 0, 0, start[0], start[1], 0);
                var endDate = new Date(0, 0, 0, end[0], end[1], 0);
                var diff = endDate.getTime() - startDate.getTime();
                var hours = Math.floor(diff / 1000 / 60 / 60);
                diff -= hours * 1000 * 60 * 60;
                var minutes = Math.floor(diff / 1000 / 60);

                if (hours < 0)
                    hours = hours + 24;
                       var delay_time = (minutes <= 9 ? "0" : "") + minutes + " minutes";     
                    bodyData+="<tr>"
                    bodyData+="<td>" + 'Nurse Call - ' +start_time+"</td><td>"+delay_time+"</td>";
                    bodyData+="</tr>";
                    
                })
                $("#call_detail").append(bodyData);
            },
            error:function(data)
            {
                console.log(data);
            }
        });

      });

     

      $("#house_keeping_call").click(function(){

        var uhid = $('#uhid').val();

    $.ajax({
            url:"{{url('house_keeping_call')}}",
            type: "post",
            data: {
            uhid: uhid,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
              alert(data.message);

               var resultData = data.call_list;
                var bodyData = '';
                var i=1;
                $.each(resultData,function(index,row){
                    const start_date = row.start_date_time;
                    const start_time = new Date(start_date).toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
              
                    const end_time =  new Date().toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
                
                var start = start_time.split(":");
                var end = end_time.split(":");
                var startDate = new Date(0, 0, 0, start[0], start[1], 0);
                var endDate = new Date(0, 0, 0, end[0], end[1], 0);
                var diff = endDate.getTime() - startDate.getTime();
                var hours = Math.floor(diff / 1000 / 60 / 60);
                diff -= hours * 1000 * 60 * 60;
                var minutes = Math.floor(diff / 1000 / 60);

                if (hours < 0)
                    hours = hours + 24;
                       var delay_time = (minutes <= 9 ? "0" : "") + minutes + " minutes";     
                    bodyData+="<tr>"
                    bodyData+="<td>" + 'House Keeping Call - ' +start_time+"</td><td>"+delay_time+"</td>";
                    bodyData+="</tr>";
                    
                })
                $("#call_detail").append(bodyData);
            },
            error:function(data)
            {
                console.log(data);
            }
        });

      });

   });

   </script>

   <script>
     function GetSelectedTextValue(cafe_service) {
        var selectedText = cafe_service.options[cafe_service.selectedIndex].innerHTML;
        var selectedValue = cafe_service.value;

        cafeteria_call(selectedValue);


        //alert("Selected Text: " + selectedText + " Value: " + selectedValue);
    }

       function cafeteria_call(selectedValue){

        var uhid = $('#uhid').val();

    $.ajax({
            url:"{{url('cafeteria_call')}}",
            type: "post",
            data: {
            uhid: uhid,
            selectedValue:selectedValue,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
              alert(data.message);

               var resultData = data.call_list;
                var bodyData = '';
                var i=1;
                $.each(resultData,function(index,row){
                    const start_date = row.start_date_time;
                    const start_time = new Date(start_date).toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
              
                    const end_time =  new Date().toLocaleTimeString('en-US', { hour12: false,
                                             hour: "numeric", 
                                             minute: "numeric"});
                
                var start = start_time.split(":");
                var end = end_time.split(":");
                var startDate = new Date(0, 0, 0, start[0], start[1], 0);
                var endDate = new Date(0, 0, 0, end[0], end[1], 0);
                var diff = endDate.getTime() - startDate.getTime();
                var hours = Math.floor(diff / 1000 / 60 / 60);
                diff -= hours * 1000 * 60 * 60;
                var minutes = Math.floor(diff / 1000 / 60);

                if (hours < 0)
                    hours = hours + 24;
                       var delay_time = (minutes <= 9 ? "0" : "") + minutes + " minutes";     
                    bodyData+="<tr>"
                    bodyData+="<td>" + 'Cafe Call - ' +start_time+"</td><td>"+delay_time+"</td>";
                    bodyData+="</tr>";
                    
                })
                $("#call_detail").append(bodyData);
            },
            error:function(data)
            {
                console.log(data);
            }
        });

      }
   </script>
</body>

</html>