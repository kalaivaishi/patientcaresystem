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
        <h6 class="card-title text-bold"> Rooms </h6>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8">
                        <form class="needs-validation" novalidate action="{{url('save_rooms')}}" method="post">
                            @csrf
                            <div class="form-row row " style="padding: 15px;">
                                
                               <div class="col-md-4 ">
                                    <label>Floor No</label>
                                <select name="floor_no" id="floor_number" class="form-control" onchange="get_ward_number()">
                                    <option>Select</option>
                                    @foreach($floor as $row)
                                    <option value="{{$row->floor_id }}">{{$row->floor_no}}</option>
                                    @endforeach
                                 </select>
                                </div>
                                <div class="col-md-4 ">
                                    <label>Ward Number</label>
                                    <select name="ward_no" id="ward_number" class="form-control">
                                    <option>Select</option>
                                   
                                 </select>
                                   
                                </div>
                                <div class="col-md-4 ">
                                    <label> Room Type</label>
                                    <input type="text" class="form-control" name="room_type" >
                                </div>
                                <div class="col-md-4 ">
                                    <label> Room No</label>
                                    <input type="text" class="form-control" name="room_no" >
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
function get_ward_number(){
var floor_number = $('#floor_number').val();
$("#ward_number").html('');

$.ajax({
url:"{{url('ward_drop')}}",
type: "post",
data: {
floor_number: floor_number,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){
   
$.each(result.ward,function(key,value){
$("#ward_number").append('<option value="'+value.ward_id +'">'+value.ward_number+'</option>');
});
}
});
}
</script> 