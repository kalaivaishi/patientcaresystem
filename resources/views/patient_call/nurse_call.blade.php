<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Nurse Call</title>

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
         table {
            width: 100%;
              }

              .width{
          width: 100%;

              }
   </style>
</head>

<body>
<!-- content -->
<br><br>
<div class="main-wrapper  account-wrapper">
        <div class="account">
<div class="card" style="padding: 10px;">
        <form>
            <div class="form-row">
              <div class="col-xs-2">
                <label>Ward</label>
                <input type="text" class="form-control" name="ward_no" id="ward_no" value="{{$ward_no}}">
              </div>
            @foreach($nurse_id as $nurse_name)
              <div class="col-xs-2">
                <label>Nurse On Duty</label>
                <button type="button" class="btn btn-primary form-control" id="nurse_id">{{$nurse_name->name}}</button>
                <input type="hidden" class="form-control" id="nurse_id_value" value="{{$nurse_name->name}}"> 
              </div>
              @endforeach
              
            </div>
          </form>
    </div>

<div class="card-box form-row" >
    <div class="col-lg-9 " style="border-style: double; padding:10px">
        
<div class="row nurse_grid" id="emg_calls">
     @foreach($bed_id as $bed_no)
    <div class="col-md-3 col-sm-4 col-xs-6 col-lg-2" style="fill: aquamarine;">
        <button type="button" class="btn" data-toggle="modal" data-target="#complete_call"
                                                data-uhid="{{$bed_no->UHID}}"
                                                data-ward_no="{{$bed_no->ward_no}}"
                                                data-room_no="{{$bed_no->room_no}}"
                                                data-bed_no="{{$bed_no->bed_no}}">
        <div class="profile-widget" style="background-color: orange">

            <h4 style="color: black;"><b>{{$bed_no->UHID}}</b></h4>
            <h4 style="color: white;"><b>Bed {{$bed_no->bed_no}}</b></h4>
        </div>
    </div>
</button>
  @endforeach

</div>


</div>
<div class="col-lg-3 " style="border-style: double; padding:10px">
    <table style="width: 100%;">
        <thead>
            
            <tr>
                <th><a class="btn btn-danger" href="{{url('get_only_emg_call')}}/{{$ward_no}}" style="width: 100%;">Emgergency Calls</a></th>
               
                <th><span class="badge badge-pill bg-danger float-right">{{$emg_calls}}</span></th>
            </tr>
            <tr>
                <th><a class="btn btn-warning" href="{{url('get_only_nurse_call')}}/{{$ward_no}}" style="width: 100%;">Nurse Calls</a></th>
                <th><span class="badge badge-pill bg-warning float-right">{{$nurse_calls}}</span></th>
            </tr>
            <tr>
                <th><button type="button" class="btn btn-success" style="width: 100%;">Comp Calls</button></th>
                <th><span class="badge badge-pill bg-success float-right">{{$complete_call}}</span></th>
            </tr>
            <tr>
                <th><button type="button" class="btn btn-secondary" style="width: 100%;">Escalated Calls</button></th>
                <th><span class="badge badge-pill bg-secondary float-right">{{$escalate_calls}}</span></th>
            </tr>
           
        </thead>
    </table>

</div>
</div>
<a class="btn btn-primary" href="{{url('nurse_homepage')}}">Back To Nurse Home</a>
<!-- Add Modal -->

<div class="modal fade" id="complete_call" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
 <div class="modal-content">
     <!-- Header -->
     <div class="modal-header" style="background: skyblue;">
         <h5 class="modal-title" id="complete_call" ><b> Complete Call </b></h5>
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
                                   <form class="needs-validation" novalidate action="{{url('complete_call')}}" method="post">
                                      @csrf
                                   <div class="form-row row">
                                       <div class="col-md-4 ">
                                        <label>UHID</label>
                                      <input type="text" name="uhid" id="uhid" value="" readonly>
                                    </div>
                                     
                                       <div class="col-md-4 ">
                                        <label>Ward No</label>
                                      <input type="text" name="ward_no" id="ward_no" value=""readonly>
                                    </div>
                                       <div class="col-md-4 ">
                                        <label>Room No</label>
                                      <input type="text" name="room_no" id="room_no" value=""readonly>
                                    </div>
                                       <div class="col-md-4 ">
                                        <label>Bed No</label>
                                      <input type="text" name="bed_no" id="bed_no" value="" readonly>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Service Given</label>
                                        <select class="col-md-6" id="nurse_id" name="nurse_id">
                                            <option>select</option>
                                            @foreach($service_given as $service)
                                            <option value="{{$service->service_id }}">{{$service->service_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 ">
                                     <marquee behavior="scroll" bgcolor="green" loop="-1" width="30%">
                                           <i>
                                              <font color="white">
                                                Service Time : 
                                                <strong>
                                                 <span id="time"></span>
                                                </strong>           
                                              </font>
                                           </i>
                                        </marquee> 
                                     </div>
                                    
                                    </div>
                                    <br>
                                    <div class="col-lg-4 ">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#consultant_escalation" id="submit_escalation">Consultant Escalation
                                    </button>
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

<!--Consultant Escalation modal-->
<div class="modal fade" id="consultant_escalation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
 <div class="modal-content">
     <!-- Header -->
     <div class="modal-header" style="background: skyblue;">
         <h5 class="modal-title" id="consultant_escalation" ><b> Consultant Escalation</b></h5>
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
                                   <form class="needs-validation" novalidate action="{{url('nurse_observation')}}" method="post">
                                      @csrf
                                   <div class="form-group">
                                  <label>Description</label>
                                  <input type="text" class="form-control" placeholder="Enter Description" name="description">
                                </div>
                                <div class="form-group">
                                  <label >Background</label>
                                  <input type="text" class="form-control"  placeholder="Enter background" name="background">
                                </div>
                               <div class="col-md-4 ">
                                 <label>Consultant Name</label>
                                <select class="col-md-6" id="consult_id" name="consult_id">
                                            <option>select</option>
                                            @foreach($consult_name as $row)
                                            <option value="{{$row->consultant_id}}">{{$row->consultant_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                     <input type="hidden" name="p_uhid" id="p_uhid" value="">
                                      <input type="hidden" name="p_ward_no" id="p_ward_no" value="">
                                      <input type="hidden" name="p_room_no" id="p_room_no" value="">
                                      <input type="hidden" name="p_bed_no" id="p_bed_no" value="" >                                   
                                    </div>
                                    <br>
                                    <div class="col-lg-4 ">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    
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

 <!--scripts-->
    <!-- jQuery -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/app.js"></script>

<script type="text/javascript">
        $(document).ready(function () {

        var today = new Date();
        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var dateTime = date+' '+time;
        document.getElementById('time').innerHTML=dateTime;

      $('#complete_call').on('show.bs.modal', function(e) {

    var link     = $(e.relatedTarget)
     
      var uhid = link.data("uhid")
      var ward_no    = link.data("ward_no")
        var room_no    = link.data("room_no")
        var bed_no    = link.data("bed_no")
        var modal    = $(this)
        
    modal.find(".modal-body #uhid").val(uhid);
    modal.find(".modal-body #ward_no").val(ward_no);
    modal.find(".modal-body #room_no").val(room_no);
    modal.find(".modal-body #bed_no").val(bed_no);
});      

   $("#submit_escalation").click(function () {
            var uhid = $("#uhid").val();
            var ward_no = $("#ward_no").val();
            var room_no = $("#room_no").val();
            var bed_no = $("#bed_no").val();

            $("#p_uhid").val(uhid);
            $("#p_ward_no").val(ward_no);
            $("#p_room_no").val(room_no);
            $("#p_bed_no").val(bed_no);
        });
   });
</script>