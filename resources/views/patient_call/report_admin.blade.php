
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
            <h3 style="color: red;">Report to Admin</h3>
            <div class="container" style="padding-left: 970px;">
             
                <a href="{{url('patient_homepage')}}" class="btn btn-primary" >Home</a>
            </div>
            <br>
            <div class="card" style="padding: 10px;">
                <form>
                    <h5 style="color: orangered;">Patient Information</h5>
                    <div class="form-row">
                      <div class="col-xs-2">
                        <label>Uhid</label>
                        <input type="text" class="form-control" value="{{$patient_admission->UHID}}" readonly>
                      </div>
                      <div class="col-xs-2">
                        <label>Admission_Id</label>
                        <input type="text" class="form-control" value="{{$patient_admission['admission_id']}}" readonly>
                      </div>
                      <div class="col-xs-2">
                        <label>Admission_Date</label>
                        <input type="date" class="form-control" value="{{$patient_admission['DOA']}}" readonly>
                      </div>
                      <div class="col-xs-2">
                        <label>Patient_Name</label>
                        <input type="text" class="form-control" value="{{$patient_admission['first_name']}}" readonly>
                      </div>
                      <div class="col-xs-2">
                        <label>Age/Sex</label>
                        <input type="text" class="form-control" value="{{$patient_register->age}}/{{$patient_register->gender}}" readonly>
                      </div>
                      <div class="col-xs-2">
                        <label>Admission_Purpose</label>
                        <input type="text" class="form-control" value="{{$patient_admission['admission_purpose']}}" readonly>
                      </div>
                      <div class="col-xs-2">
                        <label>Ward</label>
                        <input type="text" class="form-control" value="{{$patient_admission['ward_no']}}" readonly>
                      </div>
                     <div class="col-xs-2">
                        <label>Room</label>
                        <input type="text" class="form-control" value="{{$patient_admission['room_no']}}" readonly>
                      </div> 
                      <div class="col-xs-2">
                        <label>Bed</label>
                        <input type="text" class="form-control" value="{{$patient_admission['bed_no']}}" readonly>
                      </div>
                      <div class="col-xs-2">
                        <label>Attender_Phone</label>
                        <input type="text" class="form-control" value="{{$patient_admission['mobile_no1']}}" readonly>
                      </div>
                    </div>
                  </form>
            </div>
            <div class="card" style="padding: 10px;">
            <form method="post" action="{{url('save_report_admin')}}/{{$patient_admission->UHID}}/{{$patient_admission['admission_id']}}">
                @csrf
                <div class="form-group">
                  <label >Complaint</label>
                  <input type="text" class="form-control" placeholder="Enter Your Complaint" name="complaint">
                </div>
                <div class="form-group">
                    <label >FeedBack</label>
                    <input type="text" class="form-control" placeholder="Enter Your Feedback" name="feedback">
                </div>
                <div class="form-group">
                    <label >Suggestions</label>
                    <input type="text" class="form-control" placeholder="Enter Your Suggestions" name="suggestions">
                </div>
                <br>
               <button type="submit" class="btn btn-primary">Submit</button>
              </form>
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