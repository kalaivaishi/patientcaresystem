<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Patient Health Monitor</title>

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
            <h3 style="color: orangered;"><u>Patient Health Monitor</u></h3><br>
<div class="row doctor-grid">
     <div class="card col-lg-3" style="padding: 20px;">
          <label>Patient ID</label>
          <select name="patient_id" id="patient_id" class="form-control" onchange="get_patient_health(this)">
              <option>Select</option>
              @foreach($patient_id as $patient_ids)
              <option value="{{$patient_ids->patient_admission_id}}">{{$patient_ids->UHID}}</option>
              @endforeach
          </select>
          </div>
          <div class="col-lg-4" style="padding: 20px;">
          </div>

          <div class="card col-lg-2" style="padding: 20px;">
            <div id="heart_rate">
            </div>
                <label>Heart Rate</label>
          </div>
          <div class="col-sm-0" style="padding: 20px;">
          </div>
          <div class="card col-lg-2" style="padding: 20px;">
            <div id="blood_pressure">
            </div>
            <label>Blood Pressure</label>
          </div>

</div>
    <br>
<div class="row">
    <div class="col-lg-6" style="padding: 10px;">
       <div class="table-responsive">
         
        <table class="datatable table table-stripped">
            <thead style="background-color: blue;">
            <th>UHID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Body Mass</th>
            <th>BMI Weight</th>
        </thead>
        <tbody>
            @foreach($patient_details as $details)
          <tr>
            <td>{{$details->UHID}}</td>
            <td>{{$details->first_name}}</td>
            <td>{{$details->gender}}</td>
            <td>{{$details->bed_no}}</td>
            <td>{{$details->weight}}</td>
            <td>{{$details->body_mass}}</td>
            <td>{{$details->bmi}}</td>
            
        </tr>
        @endforeach
        
        </tbody>
        </table>
    </div>


</div>
    <div class="col-lg-1" style="padding: 20px;">
          </div>
    <div class="col-lg-2" style="padding: 5px;">
        <div id="res_rate">
        </div>
            <label>Respiration Rate</label>
          </div>
          <div class="col-sm-0" style="padding: 20px;">
          </div>
          <div class="col-lg-2" style="padding: 5px;">
            <div id="temperature">
        </div>
            <label>Body Temperature</label>
          </div><br><br>

         
</div>
<div class="row">

     <div class="col-lg-6" style="padding: 20px;"></div>
     <div class="col-lg-0" style="padding: 20px;">
          </div>
     <div id="chartContainer" style="height: 300px; width: 100%;"></div>

  </div>
        </div>
    </div>
    <!--/ Main Wrapper -->



<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {

var charts = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title:{
        text: "Monthly Expenses, 2016-17"
    },
    axisY :{
        includeZero: false,
    },
    toolTip: {
        shared: true
    },
    legend: {
        fontSize: 13
    },
    data: [{
        type: "splineArea",
        showInLegend: true,
        name: "Recording Data",
        xValueFormatString: "MMM YYYY",
        dataPoints: [
            { x: new Date(2016, 2), y: 96 },
            { x: new Date(2016, 3), y: 97 },
            { x: new Date(2016, 4), y: 100 },
            { x: new Date(2016, 5), y: 98 },
            { x: new Date(2016, 6), y: 93 },
            { x: new Date(2016, 7), y: 99 },
            { x: new Date(2016, 8), y: 92 },
            { x: new Date(2016, 9), y: 98 },
            { x: new Date(2016, 10), y: 99 },
            { x: new Date(2016, 11), y: 99 },
            { x: new Date(2017, 0), y: 96 },
            { x: new Date(2017, 1), y: 95 }
            
        ]
    },
    {
        type: "splineArea", 
        showInLegend: true,
        name: "Actual Data",
        dataPoints: [
            { x: new Date(2016, 2), y: 95 },
            { x: new Date(2016, 3), y: 95 },
            { x: new Date(2016, 4), y: 95 },
            { x: new Date(2016, 5), y: 95 },
            { x: new Date(2016, 6), y: 95 },
            { x: new Date(2016, 7), y: 95 },
            { x: new Date(2016, 8), y: 95 },
            { x: new Date(2016, 9), y: 95 },
            { x: new Date(2016, 10), y: 95 },
            { x: new Date(2016, 11), y: 95 },
            { x: new Date(2017, 0),  y: 95 },
            { x: new Date(2017, 1),  y: 95 }
        ]
    },
    
    ]
});
charts.render();

}
</script>
<script>
    function get_patient_health(patient_id)
    {
        var selectedText = patient_id.options[patient_id.selectedIndex].innerHTML;
        //alert(selectedText);
         $.ajax({
            url:"{{url('health_details')}}",
            type: "post",
            data: {
            selectedText:selectedText,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
                //alert(data);
             $('#heart_rate').html(data.heart_rate);
             $('#blood_pressure').html(data.bp);
             $('#res_rate').html(data.respirations_rate);
             $('#temperature').html(data.temperature);
           },
            error:function(data)
            {
                console.log(data);
            }
        });
    }
</script>
<script>
// window.onload = function () {

// var chart = new CanvasJS.Chart("chartContainer", {
//     animationEnabled: true,  
//     title:{
//         text: "Heart Rate"
//     },
//     axisY: {
//         title: "Heart Rates",
       
//     },
//     data: [{
//         type: "splineArea",
//         color: "rgba(54,158,173,.7)",
//         markerSize: 5,
        
//         dataPoints: [
//             { x: new Date(2000, 0), y: <?php echo $heart_rate;?> },
           
//         ]
//     }]
//     });
// chart.render();

// }
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
   