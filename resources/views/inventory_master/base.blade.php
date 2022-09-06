<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pharmacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{% static 'assets/images/favicon.ico' %}">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{% static 'assets/css/bootstrap.min.css' %}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{% static 'assets/plugins/fontawesome/css/all.min.css' %}" >
    <link rel="stylesheet" href="{% static 'assets/plugins/fontawesome/css/fontawesome.min.css' %}" >

    <!-- Calendar CSS -->
    <link rel="stylesheet" href="{% static 'assets/plugins/fullcalendar/fullcalendar.min.css' %}">
    <link rel="stylesheet" href="{% static 'assets/css/calendar.css' %}">

    <!-- Datatable-->
    <link rel="stylesheet" href="{% static 'assets/css/dataTables.bootstrap4.min.css' %}">

    <!-- Select 2-->
    <link rel="stylesheet" href="{% static 'assets/css/select2.min.css' %}">

    <!-- Datetime Picker-->
    <link rel="stylesheet" href="{% static 'assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css' %}">

    <!--custom styles-->
    <link rel="stylesheet" href="{% static 'assets/css/style.css' %}">
</head>
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

       <!-- Header -->
        <div class="header-menu">
            <div class="header-left">
                <a href="" class="logo">
                    <img src="{% static 'assets/images/Logo_Hospital.png' %}" width="35" height="35" alt="">
                    <span>PreAdmin</span>
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
												<img alt="John Doe" src="{% static 'assets/images/user.jpg' %}" class="img-fluid">
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
							<img class="rounded-circle" src="{% static 'assets/images/user.jpg' %}" width="24" alt="Admin">
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
        <a href="/dashboard"><i class="fa fa-home back-icon"></i> <span>Back to Home</span></a>
     </li>

  <li class="submeny">
    <a href="/item_master"><i class="fas fa-user-md"></i> <span>Item Master</span></a>
</li>
<li class="submeny">
    <a href="/item_category_master"><i class="fas fa-user"></i> <span>Item Category Master</span></a>
</li>
<li class="submeny">
    <a href="/packaging_master"><i class="fas fa-procedures"></i> <span>Packaging Master</span></a>
</li>
<li class="submeny">
    <a href="/item_unit_master"><i class="fas fa-stethoscope"></i> <span>Item Unit Master</span></a>
</li>
<li class="submeny">
    <a href="/item_manufacturer"><i class="fas fa-stethoscope"></i> <span>Item Manufacturer</span></a>
</li>
<li class="submeny">
    <a href="/store_master"><i class="fas fa-stethoscope"></i> <span> Store Master</span></a>
</li>
<li class="submeny">
    <a href="/vendor_master"><i class="fas fa-stethoscope"></i> <span>Vendor Master</span></a>
</li>
<li class="submeny">
    <a href="/store_nursing_counter_mapping"><i class="fas fa-stethoscope"></i> <span>Store Nursing Counter Mapping</span></a>
</li>
<li class="submeny">
    <a href="/item_location_master"><i class="fas fa-stethoscope"></i> <span>Item Location Master</span></a>
</li>


</ul><br><br><br><br>
                </div>
            </div>
        </div>
        <!--/sidebar-->

 
</div>
<!--/ content -->
</div>
</div>
</div>
</div>
<!--scripts-->
<!-- jQuery -->
<script src="{% static 'assets/js/jquery-3.6.0.min.js' %}"></script>

<!-- Bootstrap Core JS -->
<script src="{% static 'assets/js/bootstrap.bundle.min.js' %}"></script>

<!-- Slimscroll JS -->
<script src="{% static 'assets/js/jquery.slimscroll.js' %}"></script>

<!-- Select2 JS -->
<script src="{% static 'assets/js/select2.min.js' %}"></script>
<script src="{% static 'assets/js/moment.min.js' %}"></script>

<!-- Datetime picker JS -->
<script src="{% static 'assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js' %}"></script>

<!-- Calender JS -->
<script src="{% static 'assets/js/calendar.min.js' %}"></script>

<!-- Apex chart JS -->
<script src="{% static 'assets/js/apex.js' %}"></script>

 <!-- Data table JS -->
 <script src="{% static 'assets/js/jquery.dataTables.min.js' %}"></script>
 <script src="{% static 'assets/js/dataTables.bootstrap4.min.js' %}"></script>

<!-- Custom JS -->
<script src="{% static 'assets/js/app.js' %}"></script>
</body>
</html>
