@include('layouts.master')
@section('title','Awaiting Request')

        <!--Main Content-->
<div class="page-wrapper">
    <div class="content">
<!-- Main Dashboard -->
    <div class="row">
        <div class="col-12">
            <div class="card">
    <div class="card-box mb-0">
        <h6 class="card-title text-bold"> USER  </h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_user_login')}}" method="post">
                            @csrf
                            <div class="form-row row " style="padding: 15px;">
                               
                                <div class="col-md-4 ">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="user_name">
                                </div>
                                <div class="col-md-4 ">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="col-md-4">
                                    <label>Department Id</label>
                                    <input type="number" class="form-control" placeholder="Department Id"  required name="department_id">
                                </div>
                                <div class="col-md-4 ">
                                    <label>User Type</label>
                                    <input type="text" class="form-control" name="user_type">
                                </div>
                                <div class="col-md-4 ">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-md-4 ">
                                    <label>Login time</label>
                                    <input type="time" class="form-control" name="login_time">
                                </div>
                                <div class="col-md-4 ">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date">
                                </div>
                                <div class="col-md-4 ">
                                    <label>Logout Time</label>
                                    <input type="time" class="form-control" name="logout_time">
                                </div>
                                <div class="col-md-4 ">
                                    <label>Checkin Status</label>
                                    <input type="text" class="form-control" name="checkin_status">
                                </div>
                                
                                
                            </div>
                            <div class="col-lg-4 ">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
 
            </div>
<!--/ content -->
        </div>
    </div>
</div>
</div>
