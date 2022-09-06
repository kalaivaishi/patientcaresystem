@include('layouts.patient_call_master')



    <!-- Main Wrapper -->
    <div class="page-wrapper">
    <div class="content">

       <!-- Header -->
        <div class="header-menu">
            <div class="header-left">
                <a href="" class="logo">
                    <img src="../assets/images/Logo_Hospital.png" width="35" height="35" alt="">
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
							<img class="rounded-circle" src="../assets/images/user.jpg" width="24" alt="Admin">
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
                        <a href="ipd_front_desk.html"><i class="fas fa-user-md"></i> <span>IPD Front Desk</span></a>
                    </li>
                    <li class="submeny">
                        <a href="ipd_detail.html"><i class="fas fa-user"></i> <span>IPD Detail</span></a>
                    </li>
                    <li class="submeny">
                        <a href="ipd_patient_detail.html"><i class="fas fa-procedures"></i> <span>IPD Patient Detail</span></a>
                    </li>
                    </ul><br><br><br><br>
                </div>
            </div>
        </div>
        <!--/sidebar-->
        
<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
   <div class="container-fluid">
       <a class="navbar-brand" style="color: white;" href="#">Bed </a>
   </div>
 </nav><br>
 <div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:rgb(233, 233, 233)"><br>
              <form method="POST">
                <input type="hidden" name="csrfmiddlewaretoken" value="jrYnPEIZeUJXQvWd7m6DE1T1lPIXCchfeqFtklmXxlbf6pWGznUwZUkaYlArcpx3">
                <div class="row clearfix">
                   <div class="col-md-3">
                    <div class="flexContainer">
                        <button type="button" name="ward"  class="input-group-text"  >Ward</button>
                        <select name="cars"  class="form-control" >
                            <option value="">All</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>

                      </div>                              
                    </div>
                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" name="ward"  class="input-group-text"  >Floor</button>
                            <select name="cars"  class="form-control" >
                                <option value="">Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
    
                          </div>   
                    </div>
                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" name="ward"  class="input-group-text"  >Name</button>
                            <input type="text" class="form-control" placeholder="name">
    
                          </div>   
                    </div>
                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" name="ward"  class="input-group-text"  >IPD</button>
                           <input type="text" class="form-control" placeholder="IPD ">
    
                          </div>   
                    </div>
                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" class="btn btn-success"> F2 Refresh</button>&nbsp;
                            <button type="button" class="btn btn-primary"> Discharged Patient</button>&nbsp;
    
                          </div>   
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-info">Total N0 Of Patient:19</button>&nbsp;
                    </div>

                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" name="ward"  class="input-group-text"  >Consultant</button>
                            <select name="cars"  class="form-control" >
                                <option value="">All</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
    
                          </div>   
                    </div>
                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" name="ward"  class="input-group-text"  >Panel</button>
                            <select name="cars"  class="form-control" >
                                <option value="">All</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
    
                          </div>   
                    </div>
                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" name="ward"  class="input-group-text"  >Speciality </button>
                            <select name="cars"  class="form-control" >
                                <option value="">All</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
    
                          </div>   
                    </div>
                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" name="ward"  class="input-group-text"  >Ward</button>
                            <select name="cars"  class="form-control" >
                                <option value="">Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
    
                          </div>   
                    </div>
                    <div class="col-md-3">
                        <div class="flexContainer">
                            <input type="text" name="search"  class="form-control" placeholder="search..">
                             <button type="button"  name="search_app_id" class="input-group-text" data-toggle="modal" data-target="#patient-registration-modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                         </div>
                    </div>

                    <div class="col-md-3">
                        <div class="flexContainer">
                            <button type="button" name="ward"  class="input-group-text"  >Order By</button>
                            <select name="cars"  class="form-control" >
                                <option value="">Admission Date</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
    
                          </div>   
                    </div>
                    
                  
                   
                </div>
              </form>
            </div>
</div><br>
<div class="row doctor-grid">
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis" ><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
        <div class="profile-widget">
            <h4 style="color: blue;"><b>IPR180069</b></h4>
            <h4 class="doctor-name text-ellipsis"><a href="profile.html">Cristina Groves</a></h4>
            <h4>P000224</h4>
            <div class="doc-prof">47Y Male</div>
            <h4>Admission Date:26/April/2022 15:18</h4>

            <div class="user-country">
                <i class="fas fa-map-marker-alt"></i> General Delux AC
            </div>
            <h4>107/1 1st Floor</h4>
            <h4 style="color: blue;">Cons:A.K.Singh</h4>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="see-all">
            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
        </div>
    </div>
</div>
</div>
