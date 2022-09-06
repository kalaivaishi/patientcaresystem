
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Patient Vitals</title>

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
    <!-- Chart -->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
        /* table, th, td {
            border: 1px solid;
                       }
        table {
            width: 100%;
              } */
   
    </style>
 
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper  account-wrapper">
        <div class="account">
<div class="card" style="padding: 10px;">
    <form>
        <h5 style="color: orangered;">Patient Information</h5>
        <div class="form-row">
          <div class="col-xs-2">
            <label>Uhid</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-xs-2">
            <label>Admission_Id</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-xs-2">
            <label>Admission_Date</label>
            <input type="date" class="form-control" >
          </div>
          <div class="col-xs-2">
            <label>Patient_Name</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-xs-2">
            <label>Age/Sex</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-xs-2">
            <label>Admission_Purpose</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-xs-2">
            <label>Ward</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-xs-2">
            <label>Room</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-xs-2">
            <label>Bed</label>
            <input type="text" class="form-control" >
          </div>
          <div class="col-xs-2">
            <label>Attender_Phone</label>
            <input type="text" class="form-control" >
          </div>
        </div>
      </form>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box form-row" >
           
        
        <div class="col-lg-6 " style="border-style: double; padding:10px">
            <h4 class="card-title">Call Detail</h4>
          <table>
           
            <tbody>
                <tr>
                    <td>Temparature</td>
                    <td>37 &#8451;</td>
                </tr>
                <tr>
                    <td>Heart Rate</td>
                    <td>60-99 beats per minute </td>            
                </tr>
                <tr>
                  <td>Pulse</td>
                  <td>60-99 beats per minute </td>            
              </tr>
              <tr>
                <td>BP</td>
                <td>128/80 mm Hg</td>            
            </tr>
            <tr>
              <td>Respiratory Rate</td>
              <td>12/16 breathe per minute</td>            
          </tr>
          <tr>
            <td>Oxygen Saturation</td>
            <td>95-100%</td>            
        </tr>
            </tbody>
          </table>
           
            <hr>
            <button type="button" class="btn btn-dark">Show Previous Data</button>
            <button type="button" class="btn btn-dark">Home</button>
        </div>
        <div class="col-lg-6" style="border-style: double; padding:10px">
            <h4 class="card-title">Graph</h4>
            <table>
              <tr>
                <td><h5>Temperature Graph</h5><img src="{{'assets/images/graph/bp.jpeg'}}"></td>
                <td><h5>Pulse</h5><img src="{{'assets/images/graph/pulse.jpeg'}}" style="height: 230px;width:220px;"></td>
              </tr>
              <tr>
                <td><h5>BP</h5><img src="{{'assets/images/graph/bp.jpeg'}}" style="height: 230px;width:220px;"></td>
                <td><h5>Oxygen</h5><img src="{{'assets/images/graph/pulse.jpeg'}}"></td>
              </tr>
              <tr>
                
                <td><h5>RR</h5><img src="{{'assets/images/graph/blood_sugar.jpeg'}}" style="height: 180px;width:220px;"></td>
              </tr>
            </table>
            
            <hr>
        </div>
         </div>
         </div>
         </div>
        </div>
    </div>
    <!--/ Main Wrapper -->

    
      
    <!-- jQuery -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/app.js"></script>
</body>

</html>
   