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
        <h6 class="card-title text-bold"> Floor </h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_floor')}}" method="post">
                            @csrf
                            <div class="form-row row " style="padding: 15px;">
                                
                               
                                <div class="col-md-4 ">
                                    <label> Floor No</label>
                                    <input type="text" class="form-control" name="floor_no" >
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
