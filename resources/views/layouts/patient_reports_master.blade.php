
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Doctor App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico" >

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css" >
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css" >

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="../assets/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar.css">

    <!-- Datatable-->
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">

    <!-- Select 2-->
    <link rel="stylesheet" href="../assets/css/select2.min.css">

    <!-- Datetime Picker-->
    <link rel="stylesheet" href="../assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

    <!--custom styles-->
    <link rel="stylesheet" href="../assets/css/style.css">
    
<style>
    .form{
      border: 2px solid rgb(233, 233, 233);
      width: 100%;
      background-color: rgb(233, 233, 233);
      border-bottom: 1px solid black;
    }
   
   
/* For text inside Border */
    fieldset{
           background-repeat:no-repeat;
           background-position:center;
           background-size:cover;
            }
        p#innerPara{padding:20px ;}
        legend{width:200px;padding:10px 20px;}
        table, th, td {
  border: 2px solid rgb(117, 109, 109);
}

/* Tab Starts */
* {box-sizing: border-box}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 12px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
/* Tab Ends */
    </style>

</head>
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

       <!-- Header -->
        <div class="header-menu">
            <div class="header-left">
                <a href="" class="logo">
                    <img src="../assets/images/Logo_Hospital.png" width="20" height="20" alt="lalaalaa">
                    <span>BharathBrands</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="menubar">
                <a id="toggle_btn" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
            </div>
            <!-- /Mobile Menu Toggle -->

            <!-- Search-->
            <div class="searchbar">
                <form class="form-inline my-1 w-25 float-left">
                    <input class="form-control mr-sm-2 search-input search_icon" type="search" placeholder="Search..." >
                </form>
            </div>
            <!--/ Search-->

            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>

            <!-- Header Right Menu -->
            <ul class="nav user-menu float-right">
              <li class="nav-item dropdown d-none d-sm-block">
                  <a href="/dashboard" class="hasnotifications nav-link"><i class="fa fa-home back-icon"></i> </a>
              </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="far fa-paper-plane"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>

                <!-- /Notifications -->
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="far fa-bell"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="./activities">
                                        <div class="media">
                      <span class="avatar">
                        <img alt="John Doe" src="../assets/images/user.jpg" class="img-fluid">
                      </span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                      </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                      <span class="avatar">V</span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                      </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                      <span class="avatar">L</span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                      </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                      <span class="avatar">G</span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                      </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities">
                                        <div class="media">
                      <span class="avatar">V</span>
                      <div class="media-body">
                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                      </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->

                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span>Jones Ferdinand</span>&nbsp;
                        <span class="user-img">
              <img class="rounded-circle" src="../../static/assets/images/user.jpg" width="24" alt="Admin">
              <span class="status online"></span>
            </span>
                    </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="profile">My Profile</a>
            <a class="dropdown-item" href="edit-profile">Edit Profile</a>
            <a class="dropdown-item" href="settings">Settings</a>
            <a class="dropdown-item" href="login">Logout</a>
          </div>
                </li>
            </ul>
            <!--/ Header Right Menu -->

            <!-- User Menu -->
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile">My Profile</a>
                    <a class="dropdown-item" href="edit-profile">Edit Profile</a>
                    <a class="dropdown-item" href="settings">Settings</a>
                    <a class="dropdown-item" href="login">Logout</a>
                </div>
            </div>
            <!--/ User Menu -->
        </div>
        <!-- /Header -->

        <!--sidebar-->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{url('call_type')}}"><i class="fa fa-home back-icon"></i> <span>Back to Home</span></a>
                         </li>

                      <li class="submeny active">
                        <a href="{{url('patient_view')}}"><i class="fas fa-user-md"></i> <span>Patient View</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('escalate_call_list')}}"><i class="fas fa-user-md"></i> <span>Escalate Call</span><span class="badge badge-pill bg-primary float-right">{{$escalate_call_count}}</span></a>
                    </li>

                    <li class="submeny">
                        <a href="{{url('emergency_call_list')}}"><i class="fas fa-user-md"></i> <span>Emergency Patient Call</span><span class="badge badge-pill bg-danger float-right">{{$emergen_call_count}}</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('patient_history')}}/{{session('admission_id')}}"><i class="fas fa-user"></i> <span>Patient History</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('doc_patient_vitals')}}/{{session('admission_id')}}"><i class="fas fa-procedures"></i> <span>Vitals</span></a>
                    </li>
                    <li class="submeny ">
                        <a href="{{url('lab_reports')}}/{{session('admission_id')}}"><i class="fas fa-procedures"></i> <span>Lab Reports</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('radiology_reports')}}/{{session('admission_id')}}"><i class="fas fa-procedures"></i> <span>Radiology Reports</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('doc_medication')}}/{{session('admission_id')}}"><i class="fas fa-procedures"></i> <span>Medication</span></a>
                    </li>
                    <!-- <li class="submeny">
                        <a href="{{url('doc_nurse_call')}}"><i class="fas fa-procedures"></i> <span>Nurse Call</span></a>
                    </li> -->
                    <li class="submeny">
                        <a href="{{url('doc_patient_call')}}/{{session('admission_id')}}"><i class="fas fa-procedures"></i> <span>Patient Call</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('alerts')}}"><i class="fas fa-procedures"></i> <span>Alerts</span></a>
                    </li>
                    </ul><br><br><br><br>
                </div>
            </div>
        </div>
        <!--/sidebar-->
<div class="notification-box">
<div class="msg-sidebar notifications msg-noti">
    <div class="topnav-dropdown-header">
        <span>Messages</span>
    </div>
    <div class="drop-scroll msg-list-scroll">
        <ul class="list-box">
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">R</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author">Richard Miles </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item new-message">
                        <div class="list-left">
                            <span class="avatar">J</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author">John Doe</span>
                            <span class="message-time">1 Aug</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">T</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author"> Tarah Shropshire </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">M</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author">Mike Litorus</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">C</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author"> Catherine Manseau </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">D</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author"> Domenic Houston </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">B</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author"> Buster Wigton </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">R</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author"> Rolland Webber </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">C</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author"> Claire Mapes </span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">M</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author">Melita Faucher</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">J</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author">Jeffery Lalor</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">L</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author">Loren Gatlin</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="chat.html">
                    <div class="list-item">
                        <div class="list-left">
                            <span class="avatar">T</span>
                        </div>
                        <div class="list-body">
                            <span class="message-author">Tarah Shropshire</span>
                            <span class="message-time">12:28 AM</span>
                            <div class="clearfix"></div>
                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="topnav-dropdown-footer">
        <a href="chat.html">See all messages</a>
    </div>
</div>

    
</div>
</div>

  
 <!-- Notifications -->
 <div class="notification-box">
    <div class="msg-sidebar notifications msg-noti">
        <div class="topnav-dropdown-header">
            <span>Messages</span>
        </div>
        <div class="drop-scroll msg-list-scroll">
            <ul class="list-box">
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">R</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author">Richard Miles </span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item new-message">
                            <div class="list-left">
                                <span class="avatar">J</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author">John Doe</span>
                                <span class="message-time">1 Aug</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">T</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author"> Tarah Shropshire </span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">M</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author">Mike Litorus</span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">C</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author"> Catherine Manseau </span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">D</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author"> Domenic Houston </span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">B</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author"> Buster Wigton </span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">R</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author"> Rolland Webber </span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">C</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author"> Claire Mapes </span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">M</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author">Melita Faucher</span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">J</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author">Jeffery Lalor</span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">L</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author">Loren Gatlin</span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="chat">
                        <div class="list-item">
                            <div class="list-left">
                                <span class="avatar">T</span>
                            </div>
                            <div class="list-body">
                                <span class="message-author">Tarah Shropshire</span>
                                <span class="message-time">12:28 AM</span>
                                <div class="clearfix"></div>
                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="topnav-dropdown-footer">
            <a href="chat">See all messages</a>
        </div>
    </div>
</div>
<!-- Notifications -->
</div>
<!--/ content -->
</div>
</div>
</div>
</div>
<!--scripts-->
<!-- jQuery -->
<script src="../assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<!-- Slimscroll JS -->
<script src="../assets/js/jquery.slimscroll.js"></script>

<!-- Select2 JS -->
<script src="../assets/js/select2.min.js"></script>
<script src="../assets/js/moment.min.js"></script>

<!-- Datetime picker JS -->
<script src="../assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Calender JS -->
<script src="../assets/js/calendar.min.js"></script>

<!-- Apex chart JS -->
<script src="../assets/js/apex.js"></script>

 <!-- Data table JS -->
 <script src="../assets/js/jquery.dataTables.min.js"></script>
 <script src="../assets/js/dataTables.bootstrap4.min.js"></script>

<!-- Custom JS -->
<script src="../assets/js/app.js"></script>
<script>
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>
