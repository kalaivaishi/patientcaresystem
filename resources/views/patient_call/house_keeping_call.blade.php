<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>House Keeping Call</title>

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
    <!-- Datatable-->
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
    <style>
        table, th, td {
            border: 1px solid;
                       }
        table {
            width: 100%;
              }
   
    </style>
 
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper  account-wrapper">
        <div class="account">

    <br><br>
    <div class="card" style="padding: 10px;">
        <div class="table-responsive">
          <h3 style="color: orangered;"><u>House Keeping Call :</u></h3>
        <table class="datatable table table-stripped ">
            <thead style="background-color: rgb(144, 144, 176);">
            <th>House Keeping Station</th>
            <th>Patient Ward</th>
            <th>Room No</th>
            <th>Bed No</th>
            <!-- <th>Calling Unit</th> -->
            <th>Call Time</th>
            <th>Attend Time</th>
            <th>Service Given</th>
            <th>ResponseTime</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
             @foreach($call_list as $call_detail)
          <tr>
            <td>2nd A Floor</td>
            <td>{{$call_detail->ward_no}}</td>
            <td>{{$call_detail->room_no}}</td>
            <td>{{$call_detail->bed_no}}</td>
            <td>{{$call_detail->start_date_time}}</td>
            <td>@if($call_detail->status == '')
                @else
                {{$call_detail->end_date_time}} @endif</td>
            <td>@if($call_detail->status == '')
                @else
                {{$call_detail->service_given}} @endif</td>
            <td>@if($call_detail->status == '')
                @else 
                {{ round((strtotime($call_detail->end_date_time) - strtotime($call_detail->start_date_time)) / 60) }} mintues  @endif</td>
            <td>@if($call_detail->status == '')<h2 class="btn btn-danger">Pending</h2>
                @else <h2 class="btn btn-success">{{$call_detail->status}}</h2> @endif</td>
            <td>@if($call_detail->status == '')<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#complete_hk_call"
                 data-uhid="{{$call_detail->UHID}}"
                 data-ward_no="{{$call_detail->ward_no}}"
                 data-room_no="{{$call_detail->room_no}}"
                 data-bed_no="{{$call_detail->bed_no}}">Close Call</button>
                 @else
                 <button class="btn btn-success">Call Closed</button>
                 @endif
             </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>

</div>


        </div>
    </div>
    <!--/ Main Wrapper -->

<!-- Add Modal -->

<div class="modal fade" id="complete_hk_call" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
 <div class="modal-content">
     <!-- Header -->
     <div class="modal-header" style="background: skyblue;">
         <h5 class="modal-title" id="complete_hk_call" ><b> Complete Call </b></h5>
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
                                   <form class="needs-validation" novalidate action="{{url('complete_house_keeping_call')}}" method="post">
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
                                          @foreach($hk_service as $service)
                                            <option value="{{$service->service_name}}">{{$service->service_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                   <!--  <div class="col-md-4 ">
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
                                    
                                    </div> -->
                                    <br><br><br>
                                    <div class="col-lg-6 ">
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
     
      
    <!-- jQuery -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/app.js"></script>

    
     <!-- Data table JS -->
     <script src="../assets/js/jquery.dataTables.min.js"></script>
     <script src="../assets/js/dataTables.bootstrap4.min.js"></script>

      <script>
        $(document).ready(function () {

         $('#complete_hk_call').on('show.bs.modal', function(e) {

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
   });
</script>
</body>

</html>
   