@include('layouts.master')
@section('title','Awaiting Request')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!--Main Content-->
<div class="page-wrapper">
    <div class="content">
<!-- Main Dashboard -->
    <div class="row">
        <div class="col-12">
            <div class="card">
    <div class="card-box mb-0">
        <h6 class="card-title text-bold">Nurse Assignment </h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        
                            <div class="form-row row " style="padding: 15px;">
                                
                                <div class="table-responsive">

                                    <table class="datatable table table-stripped ">
                                    <thead>
                                   <tr><th>S.No.</th>
                                       <th>Floor No</th>
                                       <th>Ward No</th>
                                       <th>Room No</th>
                                       <th>Bed No</th>
                                       <th>Assign Nurse</th>
                                   </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bed_master as $values)
                                        
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$values->floor_no}}</td>
                                            <td>{{$values->ward_no}}</td>
                                            <td>{{$values->room_no}}</td>
                                            <td>{{$values->bed_no}}</td>
                                            <td>
                                               
                                                @if($values->status=='assigned')
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit_nurse_assign"
                                                data-floor_no="{{$values->floor_no}}"
                                                data-ward_no="{{$values->ward_no}}"
                                                data-room_no="{{$values->room_no}}"
                                                data-bed_no="{{$values->bed_no}}">Assigned</button>
                                                
                                                @else
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nurse_assign"
                                                data-floor_no="{{$values->floor_no}}"
                                                data-ward_no="{{$values->ward_no}}"
                                                data-room_no="{{$values->room_no}}"
                                                data-bed_no="{{$values->bed_no}}"
                                                >Assign</button>
                                                @endif
                                                
                                            </td>
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                                </div>

                                
                            </div>
                            
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


<!-- Add Modal -->

<div class="modal fade" id="nurse_assign" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
 <div class="modal-content">
     <!-- Header -->
     <div class="modal-header" style="background: skyblue;">
         <h5 class="modal-title" id="nurse_assign" ><b> Assign Nurse </b></h5>
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
         </button>
         </div><br>
      <!-- Main block -->
      <div class="modal-body">
         <div class="container-fluid">
             <div class="body">
                 <div class="demo-masked-input">
                     <div class="row clearfix">
                       <div class="col-12">
                           <div class="form-group">
                               <div class="form-line">
                                   <form class="needs-validation" novalidate action="{{url('save_nurse_assign')}}" method="post">
                                      @csrf
                                   <div class="form-row row">
                                       <div class="col-md-4 ">
                                        <label>Floor No</label>
                                      <input type="text" name="floor_no" id="floor_no" value="">
                                    </div>
                                     
                                       <div class="col-md-4 ">
                                        <label>Ward No</label>
                                      <input type="text" name="ward_no" id="ward_no" value="">
                                    </div>
                                       <div class="col-md-4 ">
                                        <label>Room No</label>
                                      <input type="text" name="room_no" id="room_no" value="">
                                    </div>
                                       <div class="col-md-4 ">
                                        <label>Bed No</label>
                                      <input type="text" name="bed_no" id="bed_no" value="">
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Nurse Station ID</label>
                                      <select class="col-md-6" id="nurse_station_id" name="nurse_station_id">
                                        <option>select</option>
                                        @foreach($nurse_station as $value)
                                          <option value="{{$value->head_nurse_id}}">{{$value->head_nurse_id}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Nurse Name</label>
                                      <select class="col-md-6" id="nurse_id" name="nurse_id">
                                        <option>select</option>
                                        @foreach($nurse_name as $value)
                                          <option value="{{$value->id}}">{{$value->name}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Shift</label>
                                      <select class="col-md-6" name="shift_name">
                                        <option>select</option>
                                        @foreach($shift as $value)
                                          <option value="{{$value->description }}">{{$value->description}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Days</label>
                                      <select class="col-md-6" name="days_id">
                                        <option>select</option>
                                        @foreach($days as $value)
                                          <option value="{{$value->days_id }}">{{$value->days_name}}</option>
                                          @endforeach
                                      </select>
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
                         <!-- Footer -->
                     <!-- <div class="modal-footer">
                         <hr style="border: 10%; color: aqua;"><br>
                    <button type="button"class="btn btn-success" > <i class="fas fa-save" >&nbsp;Save</i></button>
                         </div> -->
                     </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

<!-- edit modal -->
<div class="modal fade" id="edit_nurse_assign" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
 <div class="modal-content">
     <!-- Header -->
     <div class="modal-header" style="background: skyblue;">
         <h5 class="modal-title" id="edit_nurse_assign" ><b> Assign Nurse </b></h5>
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
         </button>
         </div><br>
      <!-- Main block -->
      <div class="modal-body">
         <div class="container-fluid">
             <div class="body">
                 <div class="demo-masked-input">
                     <div class="row clearfix">
                       <div class="col-12">
                           <div class="form-group">
                               <div class="form-line">
                                   <form class="needs-validation" novalidate action="{{url('save_nurse_assign')}}" method="post">
                                      @csrf
                                   <div class="form-row row">
                                       <div class="col-md-4 ">
                                        <label>Floor No</label>
                                      <input type="text" name="floor_no" id="floor_no" value="">
                                    </div>
                                     
                                       <div class="col-md-4 ">
                                        <label>Ward No</label>
                                      <input type="text" name="ward_no" id="ward_no" value="">
                                    </div>
                                       <div class="col-md-4 ">
                                        <label>Room No</label>
                                      <input type="text" name="room_no" id="room_no" value="">
                                    </div>
                                       <div class="col-md-4 ">
                                        <label>Bed No</label>
                                      <input type="text" name="bed_no" id="bed_no" value="">
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Nurse Station ID</label>
                                      <select class="col-md-6" id="nurse_station_id" name="nurse_station_id">
                                        <option>select</option>
                                        @foreach($nurse_station as $value)
                                          <option value="{{$value->head_nurse_id}}">{{$value->head_nurse_id}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Nurse Name</label>
                                      <select class="col-md-6" id="nurse_id" name="nurse_id">
                                        <option>select</option>
                                        @foreach($nurse_name as $value)
                                          <option value="{{$value->id}}">{{$value->name}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Shift</label>
                                      <select class="col-md-6" name="shift_name">
                                        <option>select</option>
                                        @foreach($shift as $value)
                                          <option value="{{$value->description }}">{{$value->description}}</option>
                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label>Days</label>
                                      <select class="col-md-6" name="days_id">
                                        <option>select</option>
                                        @foreach($days as $value)
                                          <option value="{{$value->days_id }}">{{$value->days_name}}</option>
                                          @endforeach
                                      </select>
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
                         <!-- Footer -->
                     <!-- <div class="modal-footer">
                         <hr style="border: 10%; color: aqua;"><br>
                    <button type="button"class="btn btn-success" > <i class="fas fa-save" >&nbsp;Save</i></button>
                         </div> -->
                     </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>


