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

    <!-- Main Wrapper -->
    <div class="main-wrapper  account-wrapper">
        <div class="account">
            <div class="row doctor-grid">
     <h3 style="color: orangered;"><u>MIS Reports</u></h3>
      <div class="container" style="padding-left: 1000px;">
      <a class="btn btn-info" href="{{url('dashboard')}}">Back</a>
    </div>
         <br><br>
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
 <!-- jQuery -->
    <script src="../../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../../assets/js/app.js"></script>

    
     <!-- Data table JS -->
     <script src="../../assets/js/jquery.dataTables.min.js"></script>
     <script src="../../assets/js/dataTables.bootstrap4.min.js"></script>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.esm.min.js"></script>
     

  </body>

</html>
