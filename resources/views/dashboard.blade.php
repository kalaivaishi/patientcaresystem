<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Patient_med</title>

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
<div class="row doctor-grid">
     <h3 style="color: orangered;"><u>MIS Reports</u></h3>
          <div class="container" style="padding-left: 970px;">
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#get_data">Historical Data</button>
        </div><br><br>
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
        <div class="profile-widget">
          <div id="barchartContainer" style="height: 300px; width: 100%;"></div>
         
        </div>
    </div>
     <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
        <div class="profile-widget">
         <div id="piechartContainer" style="height: 300px; width: 100%;"></div> 
           

        </div>
    </div>
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
            <td>{{$yesterday}}</td>
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

  
        </div>
    </div>
    <!--/ Main Wrapper -->

 <!-- Get Data Modal -->

<div class="modal fade" id="get_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
 <div class="modal-content">
     <!-- Header -->
     <div class="modal-header" style="background: skyblue;">
         <h5 class="modal-title" id="get_data" ><b> Historical Data </b></h5>
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
                                   <form class="needs-validation">
                                      @csrf
                                       <div class="form-row">
                                        <div class="col-lg-4 ">
                                            <label>Start Date</label>
                                            <input type="date" name="start_date" id="start_date">
                                        </div>
                                        <div class="col-lg-4 ">
                                            <label>End Date</label>
                                            <input type="date" name="end_date" id="end_date">
                                        </div>
                                       
                                    </div><br><br>
                                      <div class="form-row">
                                    <div class="col-lg-4 ">
                                    <button class="btn btn-primary" type="button" id="graph" name="graph">Graphical Data</button>
                                        </div>
                                        <div class="col-lg-4 ">
                                    <button class="btn btn-primary" type="button" id="tabular" name="tabular">Tabular Data</button>
                                        </div></div>
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


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {

var chart1 = new CanvasJS.Chart("barchartContainer", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Patient Call System"
    },
    axisY: {
        title: "Call Count"
    },
    data: [{        
        type: "column",  
        //showInLegend: true, 
        //legendMarkerColor: "grey",
        //legendText: "MMbbl = one million barrels",
        dataPoints: [      
            { y: <?php echo $emg_call_count; ?>, label: "Emergency Call" },
            { y: <?php echo $cafe_call_count; ?>,  label: "Cafeteria" },
            { y: <?php echo $hk_call_count; ?>,  label: "House Keeping" },
            
        ]
    }]
});

var chart = new CanvasJS.Chart("piechartContainer", {
    exportEnabled: true,
    animationEnabled: true,
    title:{
        text: "Average call received by patient stations"
    },
    legend:{
        cursor: "pointer",
        itemclick: explodePie
    },
    data: [{
        type: "pie",
        showInLegend: true,
        toolTipContent: "{name}: <strong>{y}%</strong>",
        indexLabel: "{name} - {y}%",
        dataPoints: [
            { y: <?php echo $emg_percent; ?>, name: 'emregency call', exploded: true },
            { y: <?php echo $cafe_call_percent; ?>, name: "cafeteria call" },
            { y: <?php echo $hk_call_percent; ?>, name: "house keeping call" }
        
        ]
    }]
});
chart1.render();
chart.render();

}

function explodePie (e) {
    if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
    } else {
        e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
    }
    e.chart.render();

}


</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

      <script>
        $(document).ready(function () {
            $("#graph").click(function(){
            
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            window.location.href = "{{url('get_graphical_data')}}" + "/" + start_date + "/" + end_date;
       
        });
             $("#tabular").click(function(){
            
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            window.location.href = "{{url('get_tabular_data')}}" + "/" + start_date + "/" + end_date;
       
        });
          });

      </script>
    <!-- jQuery -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/app.js"></script>

    
     <!-- Data table JS -->
     <script src="../assets/js/jquery.dataTables.min.js"></script>
     <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
     
     

  </body>

</html>
   