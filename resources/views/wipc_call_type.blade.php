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
        <h6 class="card-title text-bold"> Call Type</h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_call_type')}}" method="post">
                            @csrf
                            <div class="form-row row " style="padding: 15px;">
                                
                                <div class="col-md-4 ">
                                    <label>Department Id</label>
                                    <input type="text" class="form-control" name="dept_id" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>Short Description</label>
                                    <input type="text" class="form-control" name="short_desc" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description">
                                </div>
                                <div class="col-md-4 ">
                                    <label>MaxTime</label>
                                    <input type="text" class="form-control" name="max_time" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>ReportingUser</label>
                                    <input type="text" class="form-control" name="reporting_user" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>DateCreated</label>
                                    <input type="date" class="form-control" name="date_created" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>CreatedBy</label>
                                    <input type="text" class="form-control" name="created_by" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>UserRoleAssigned</label>
                                    <input type="text" class="form-control" name="userrole_assigned" >
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                            <button class="btn btn-primary" type="submit">Submit</button>
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
