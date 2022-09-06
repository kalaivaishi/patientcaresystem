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
        <h6 class="card-title text-bold">Nurse Register </h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_shift_master')}}" method="post">
                            @csrf
                            <div class="form-row row " style="padding: 15px;">
                                
                                <div class="col-md-4 ">
                                    <label> Shift Name</label>
                                    <input type="text" class="form-control" name="shift_name" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Shift Start Time</label>
                                    <input type="time" class="form-control" name="shift_start_time" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Shift End Time</label>
                                    <input type="time" class="form-control" name="shift_end_time" >
                                </div>

                                <div class="col-md-4 ">
                                    <label> Description</label>
                                    <input type="text" class="form-control" name="description" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Status</label>
                                    <input type="text" class="form-control" name="status" >
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
