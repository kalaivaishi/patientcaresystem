 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Patient_med</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.min.css" >
    <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/fontawesome.min.css" >

    <!--custom styles-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Datatable-->
    <link rel="stylesheet" href="../../assets/css/dataTables.bootstrap4.min.css">
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


 <div class="main-wrapper  account-wrapper">
        <div class="account">
     <h3 style="color: orangered;"><u>MIS Reports</u></h3>
      <div class="container" style="padding-left: 970px;">
     <a class="btn btn-info" href="{{url('dashboard')}}">Back</a>
 </div>
     <br><br>
    <div class="card" style="padding: 10px;">
        <div class="table-responsive">
         
        <table class="datatable table table-stripped ">
            <thead style="background-color: red;">
            <th>Station</th>
            <th>Patient Ward</th>
            <th>Room No</th>
            <th>Bed No</th>
            <!-- <th>Calling Unit</th> -->
            <th>Call Time</th>
            <th>Attend Time</th>
            <th>ResponseTime</th>
            <th>Call Type</th>
        </thead>
        <tbody>
            @foreach($call_list as $call_detail)
          <tr>
            <td>2nd Floor</td>
            <td>{{$call_detail->ward_no}}</td>
            <td>{{$call_detail->room_no}}</td>
            <td>{{$call_detail->bed_no}}</td>
            <td>{{$call_detail->start_date_time}}</td>
            <td>{{$call_detail->end_date_time}} </td>
            <td>{{ round((strtotime($call_detail->end_date_time) - strtotime($call_detail->start_date_time)) / 60) }} mintues </td>
            <td>@if($call_detail->call_type_id == '1') Emergency Nurse Call
                @elseif($call_detail->call_type_id == '2') Nurse Call
                @elseif($call_detail->call_type_id == '3') Cafeteria Call
                @else House Keeping Call
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>

    </div>

</div>
</table>
</div>
</div>
 <!-- jQuery -->
    <script src="../../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../../assets/js/app.js"></script>

    
     <!-- Data table JS -->
     <script src="../../assets/js/jquery.dataTables.min.js"></script>
     <script src="../../assets/js/dataTables.bootstrap4.min.js"></script>


  </body>

</html>
   