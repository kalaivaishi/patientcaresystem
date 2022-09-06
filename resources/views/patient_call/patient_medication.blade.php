
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Patient Medication</title>

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
            <h4 class="card-title">Current Medication</h4>
          <table>
            <thead>
                <th>List Of Medicine</th>
                <th>Date</th>
                <th>Consultant Name</th>
                <th>Dossage</th>
            </thead>
           
            <tbody>
                
                <tr>
                    <td>Med 1</td>
                    <td>20/07/2022 </td>      
                    <td>Mantu</td>  
                    <td>30</td>    
                </tr>
                <tr>
                    <td>Med 1</td>
                    <td>20/07/2022 </td>      
                    <td>Mantu</td>  
                    <td>30</td>    
                </tr>
            </tbody>
          </table>
           
            <hr>
            <button type="button" class="btn btn-dark">Show Previous Data</button>
            <button type="button" class="btn btn-dark">Home</button>
        </div>
        <div class="col-lg-6" style="border-style: double; padding:10px">
            <h4 class="card-title">Past Medication</h4>
            <table>
                <thead>
                    <th>List Of Medicine</th>
                    <th>Date</th>
                    <th>Consultant Name</th>
                    <th>Dossage</th>
                </thead>
               
                <tbody>
                    
                    <tr>
                        <td>Med 1</td>
                        <td>20/07/2022 </td>      
                        <td>Mantu</td>  
                        <td>30</td>    
                    </tr>
                    <tr>
                        <td>Med 1</td>
                        <td>20/07/2022 </td>      
                        <td>Mantu</td>  
                        <td>30</td>    
                    </tr>
                </tbody>
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
    
   