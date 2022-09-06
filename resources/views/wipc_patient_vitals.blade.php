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
        <h6 class="card-title text-bold"> Patient Vitals </h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_patient_vitals')}}" method="post">
                            @csrf
                            <div class="form-row row " style="padding: 15px;">
                                
                                <div class="col-md-4 ">
                                    <label> Date </label>
                                    <input type="date" class="form-control" name="date" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Time</label>
                                    <input type="time" class="form-control" name="time" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Temperature</label>
                                    <input type="text" class="form-control" name="temperature" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Pulse</label>
                                    <input type="text" class="form-control" name="pulse" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Respirations</label>
                                    <input type="text" class="form-control" name="respirations">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Blood Pressure</label>
                                    <input type="text" class="form-control" name="blood_pressure">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Blood Sugar F</label>
                                    <input type="text" class="form-control" name="blood_sugar_F">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Blood Sugar R</label>
                                    <input type="text" class="form-control" name="blood_sugar_R">
                                </div>
                                <div class="col-md-4 ">
                                    <label> Spo2</label>
                                    <input type="text" class="form-control" name="spo2">
                                </div>
                                
                                <div class="col-md-4 ">
                                    <label> Any Allergies</label>
                                    <input type="text" class="form-control" name="any_allergies" >
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
