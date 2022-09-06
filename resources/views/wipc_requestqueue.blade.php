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
        <h6 class="card-title text-bold"> Request Queue </h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_request_queue')}}" method="post">
                            @csrf
                            <div class="form-row row " style="padding: 15px;">
                                
                                <div class="col-md-4 ">
                                    <label> Request Patient Id</label>
                                    <input type="text" class="form-control" name="request_patient_id">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Request Nurse Id</label>
                                    <input type="text" class="form-control" name="request_nurse_id">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Request Doctor Id</label>
                                    <input type="text" class="form-control" name="request_doctor_id">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Request Pharmacy Id</label>
                                    <input type="text" class="form-control" name="request_pharmacy_id">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Request Attendant Id</label>
                                    <input type="text" class="form-control" name="request_attendant_id">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Request Date </label>
                                    <input type="date" class="form-control" name="request_date">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Request Time</label>
                                    <input type="time" class="form-control" name="request_time">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Acknowledged Time</label>
                                    <input type="time" class="form-control" name="acknowledged_time">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Completed Time</label>
                                    <input type="time" class="form-control" name="completed_time">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Re-Routed Time</label>
                                    <input type="time" class="form-control" name="re_routed_time">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Call Id</label>
                                    <input type="text" class="form-control" name="call_id">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Request Assigned To</label>
                                    <input type="text" class="form-control" name="request_assigned_to">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Status</label>
                                    <input type="text" class="form-control" name="status">
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
