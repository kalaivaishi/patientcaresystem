@include("layouts.patient_reports_master")


<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Patient History </a>
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
<!--               <h1>Hello,{{session('admission_id')}}</h1>
 -->              <div class="col-xs-2">
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
    <div class="card" style="padding: 10px;">
        <form>
            <div class="form-group">
              <label>Past Medical History</label>
              <input type="text" class="form-control" placeholder="Enter past history">
            </div>
            <div class="form-group">
              <label >Past Surgical History</label>
              <input type="text" class="form-control"  placeholder="Enter past Sugical History">
            </div>
            <div class="form-group">
                <label>Family History</label>
                <input type="text" class="form-control" placeholder="Enter Family history">
              </div>
              <div class="form-group">
                <label >Vaccination History</label>
                <input type="text" class="form-control" placeholder="Enter Vaccination History">
              </div>
           

           
          </form>
    </div>

</div>

 <script type="text/javascript">

  $(document).ready(function () {

    $("#uhid").keyup(function(){
        var uhid = $('#uhid').val();
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
  });
  </script>