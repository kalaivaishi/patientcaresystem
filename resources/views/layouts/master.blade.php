<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{'assets/images/favicon.ico'}}">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{'assets/plugins/fontawesome/css/all.min.css'}}" >
    <link rel="stylesheet" href="{{'assets/plugins/fontawesome/css/fontawesome.min.css'}}" >

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="{{'assets/plugins/fullcalendar/fullcalendar.min.css'}}">
    <link rel="stylesheet" href="{{'assets/css/calendar.css'}}">

    <!-- Datatable-->
    <link rel="stylesheet" href="{{'assets/css/dataTables.bootstrap4.min.css'}}">

    <!-- Select 2-->
    <link rel="stylesheet" href="{{'assets/css/select2.min.css'}}">

    <!-- Datetime Picker-->
    <link rel="stylesheet" href="{{'assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css'}}">

    <!--custom styles-->
    <link rel="stylesheet" href="{{'assets/css/style.css'}}">
</head>
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

       <!-- Header -->
        <div class="header-menu">
            <div class="header-left">
                <a href="" class="logo">
                    <img src="{{'assets/images/Logo_Hospital.png'}}" width="20" height="20" alt="">
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
                  <a href="/dashboard"  class="hasnotifications nav-link"><i class="fa fa-home back-icon"></i> </a>
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
												<img alt="John Doe" src="../../static/assets/images/user.jpg" class="img-fluid">
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
							<img class="rounded-circle" src="{{'assets/images/user.jpg'}}" width="24" alt="Admin">
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
                            <a href="dashboard"><i class="fa fa-home back-icon"></i> <span>Back to Home</span></a>
                         </li>
                         <li class="submeny">
                        <a href="{{url('dashboard')}}"><i class="fas fa-user-md"></i> <span>Dashboard</span></a>
                    </li>
            
                     <li class="submeny">
                        <a href="{{url('patient_view')}}"><i class="fas fa-user-md"></i> <span>Doctor App</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('nurse_homepage')}}"><i class="fas fa-user-md"></i> <span>Patient Call</span></a>
                    </li>
                     <li class="submeny">
                        <a href="{{url('item_category_master')}}"><i class="fas fa-user-md"></i> <span>Inventory</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('call_type')}}"><i class="fas fa-user-md"></i> <span>Call Type</span></a>
                    </li>
                    <li class="submeny " >
                        <a href="{{url('ward_detail')}}"><i class="fas fa-user"></i> <span>Ward Detail</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('ward_type')}}"><i class="fas fa-procedures"></i> <span>Ward Type</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('ward_style')}}"><i class="fas fa-stethoscope"></i> <span>Ward Style</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('ward_level')}}"><i class="fas fa-user-clock"></i> <span>Ward Level</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('department')}}"><i class="fas fa-user-clock"></i> <span>Department</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('user_login')}}"><i class="fas fa-clipboard-list"></i> <span>User</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('patient_register')}}"><i class="fas fa-clipboard-list"></i> <span>Patient Register</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('patient_vitals')}}"><i class="fas fa-clipboard-list"></i> <span>Patient Vitals</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('shift_master')}}"><i class="fas fa-clipboard-list"></i> <span>Shift Master</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('nurse_service')}}"><i class="fas fa-clipboard-list"></i> <span>Nurse Service</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('nurse_register')}}"><i class="fas fa-clipboard-list"></i> <span>Nurse Register</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('nurse_station')}}"><i class="fas fa-user-clock"></i> <span>Nurse Station</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('nurse_assign')}}"><i class="fas fa-user-clock"></i> <span>Nurse Assignment</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('floor')}}"><i class="fas fa-user-clock"></i> <span>Floor</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('roomtype')}}"><i class="fas fa-user-clock"></i> <span>Room Type</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('rooms')}}"><i class="fas fa-user-clock"></i> <span>Rooms</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('bedtype')}}"><i class="fas fa-user-clock"></i> <span>Bed Type</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('beds')}}"><i class="fas fa-user-clock"></i> <span>Beds</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('cafe_menu')}}"><i class="fas fa-user-clock"></i> <span>Cafe Menu</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('request_queue')}}"><i class="fas fa-user-clock"></i> <span>Request Queue</span></a>
                    </li>
                    <li class="submeny">
                        <a href="{{url('awaiting_request')}}"><i class="fas fa-user-clock"></i> <span>Awaiting Request</span></a>
                    </li>
                    <br><br><br><br>
                    </ul>
                </div>
            </div>
        </div><br><br><br>
        <!--/sidebar-->
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
       
<!--scripts-->
<!-- jQuery -->
<script src="{{'assets/js/jquery-3.6.0.min.js'}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{'assets/js/bootstrap.bundle.min.js'}}"></script>

<!-- Slimscroll JS -->
<script src="{{'assets/js/jquery.slimscroll.js'}}"></script>

<!-- Select2 JS -->
<script src="{{'assets/js/select2.min.js'}}"></script>
<script src="{{'assets/js/moment.min.js'}}"></script>

<!-- Datetime picker JS -->
<script src="{{'assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js'}}"></script>

<!-- Calender JS -->
<script src="{{'assets/js/calendar.min.js'}}"></script>

<!-- Apex chart JS -->
<script src="{{'assets/js/apex.js'}}"></script>

 <!-- Data table JS -->
 <script src="{{'assets/js/jquery.dataTables.min.js'}}"></script>
 <script src="{{'assets/js/dataTables.bootstrap4.min.js'}}"></script>

<!-- Custom JS -->
<script src="{{'assets/js/app.js'}}"></script>
<script>
    $(document).ready(function () {
    $('#nurse_assign').on('show.bs.modal', function(e) {

    var link     = $(e.relatedTarget)
     
      var floor_no = link.data("floor_no")
      var ward_no    = link.data("ward_no")
        var room_no    = link.data("room_no")
        var bed_no    = link.data("bed_no")
        var modal    = $(this)
        
    modal.find(".modal-body #floor_no").val(floor_no);
    modal.find(".modal-body #ward_no").val(ward_no);
    modal.find(".modal-body #room_no").val(room_no);
    modal.find(".modal-body #bed_no").val(bed_no);
});

    $('#edit_nurse_assign').on('show.bs.modal', function(e) {

    var link     = $(e.relatedTarget)
     
      var floor_no = link.data("floor_no")
      var ward_no    = link.data("ward_no")
        var room_no    = link.data("room_no")
        var bed_no    = link.data("bed_no")
        var modal    = $(this)
        
    modal.find(".modal-body #floor_no").val(floor_no);
    modal.find(".modal-body #ward_no").val(ward_no);
    modal.find(".modal-body #room_no").val(room_no);
    modal.find(".modal-body #bed_no").val(bed_no);
});
});
    
</script>
</body>
</html>
