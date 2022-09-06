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
        <h6 class="card-title text-bold">Ward Detail</h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_ward_detail')}}" method="post">
                            @csrf
                            
                            <div class="form-row row " style="padding: 15px;">
                                <div class="col-md-4 ">
                                    <label>Floor Number</label>
                                <select name="floor_number" id="floor_number" class="form-control">
                                    <option>Select</option>
                                    @foreach($floor as $row)
                                    <option value="{{$row->floor_id }}">{{$row->floor_no}}</option>
                                    @endforeach
                                 </select>
                                 
                                </div>
                                <div class="col-md-4 ">
                                    <label>Ward Number</label>
                                    <input type="text" class="form-control" name="ward_number" >
                                </div>
                                
                                <div class="col-md-4 ">
                                    <label>Nurse Station Id</label>
                                    <input type="text" class="form-control" name="nurse_station_id" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>Ward Type</label>
                                    <input type="text" class="form-control" name="ward_type" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>Ward Style</label>
                                    <input type="text" class="form-control" name="ward_style" >
                                </div>
                                <div class="col-md-4 ">
                                    <label>Ward Level</label>
                                    <input type="text" class="form-control" name="ward_level" >
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
