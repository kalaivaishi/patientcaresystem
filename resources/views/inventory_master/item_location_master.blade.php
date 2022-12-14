@include('layouts.inventory_master')


<!-- content -->
<div class="page-wrapper">
<div class="content">
  <button type="menu" style="font-family: monospace; width: 100%; text-align: left;" class="btn btn-primary m-t-15 waves-effect"> <b>Item Location Master</b></button>
<div class="container-fluid">
   <div class="row clearfix">
       <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8"><br>
           <div class="card">
               <div class="header">
       <div class="body">
        <div class="row clearfix">&nbsp;&nbsp;&nbsp;&nbsp;
            
            <div class="col-md-0">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fas fa-plus" >Add</i></button>&nbsp;
            </div>
            <div class="col-md-0">
                <button type="button" class="btn btn-info"><a href=""><i class="fas fa-edit"  style="color:white;">Edit</i></a></button>&nbsp;
            </div>
            <div class="col-md-0">
                <button type="button"class="btn btn-success"> <i class="fas fa-save" >Save</i></button>&nbsp;
            </div>
            <div class="col-md-0">
                <button type="button" class="btn btn-primary" onClick="window.location.reload();"> <i class="fas fa-sync-alt" >Refresh</i></button>&nbsp;
            </div>
            <div class="col-md-0">
                <button type="button" class="btn btn-danger"><a href='/'><i class="fas fa-times-circle" style="color:white;">Exit</i></a></button>
            </div> 
            <!-- <div class="search-box">
                <div class="input-group input-group-sm" style="background-color: white;float: right;">
                     <input type="text" class="form-control" placeholder="Common Search" >
                   <span class="input-group-append" >
                   <button class="btn" type="button"><i class="fa fa-search"></i></button>
                   </span>
                </div>
            </div>         -->
        </div><br>
        <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:rgb(233, 233, 233);"><br>
            <div class="row clearfix">
              <form method="post" action="{{url('save_item_location_master')}}">
                @csrf
                <div class="form-row own_decor_forms">
                    <div class="form-group col-md-4 mb-0">
                         <label>Location ID</label>
                        @if(isset($last_id))
                        <input type="text" name="store_id" class="form-control" value="{{($last_id->id)+1}}" readonly>
                        @else
                         <input type="text" name="store_id" class="form-control" value="1" readonly>
                        @endif
                    </div>
                    <div class="form-group col-md-4 mb-0">
                         <label>Item Name</label>
                        <input type="text" name="item_name" class="form-control">
                    </div>
                    <div class="form-group col-md-4 mb-0">
                         <label>Store Name</label>
                        <input type="text" name="store_name" class="form-control">
                    </div>
                    <div class="form-group col-md-4 mb-0">
                         <label>Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                    <div class="form-group col-md-4 mb-0">
                         <label>Remark</label>
                        <input type="text" name="remark" class="form-control">
                    </div>
                   
                    <div class="form-group col-md-4 mb-0"><br>
                        <label><br>
                            <input id="indeterminate-checkbox" type="checkbox" />
                            <span>Inactive</span>
                        </label>
                      </div>
                    <div class="form-group col-md-4 mb-0">
                      <br>
                        <button type="submit" class="btn btn-warning"><i class="fas fa-plus" >Insert</i></button>
                    </div>
                  </div>
              </form>
            </div>
            </div>
           <div class="table-responsive">
             <table class="datatable table table-stripped ">

                   <thead>
                       <tr><th>S.No.</th>
                           <th>Item Name</th>
                           <th>Store</th>
                           <th>Store Location</th>
                           <th>Remark</th>
                           <th>Inactive</th>
                           <th>Remove</th>

                       </tr>
                   </thead>
                   <tbody>
                    @foreach($item_location_list as $row)
                     <tr>
                         <td>{{$loop->iteration}}</td>
                         <td>{{$row->item_name}}</td>
                         <td>{{$row->store_name}}</td>
                         <td>{{$row->location}}</td>
                         <td>{{$row->remark}}</td>
                         <td><input type="checkbox"></td>
                         <td><button style="border-color: white;" id="delete" onclick="delete_location({{$row->id}})"><i class="fa fa-times-circle" style="font-size: 20px;color: red;"></i></button></td>
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
<!-- Add Modal -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
 <div class="modal-content">
     <!-- Header -->
     <div class="modal-header" style="background: skyblue;">
         <h5 class="modal-title" id="exampleModalLabel" ><b>Item Location Master </b></h5>
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??
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
                                 <form  method="POST">
                                   {% csrf_token %}
                                   <div class="form-row">
                                       <div class="form-group col-md-6 mb-0">

                                    </div>
                                       <div class="form-group col-md-6 mb-0">

                                    </div>
                                       <div class="form-group col-md-6 mb-0">

                                    </div>
                                     </div>
                                   <button type="submit"class="btn btn-success" > <i class="fas fa-save" >&nbsp;Save</i></button>
                                 </form>
                                   <!-- <input type="text" class="form-control" placeholder="" > -->
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

</div>
</div>

<script>
    function delete_location(item_location_id){
            if(confirm('Do you want to Delete?'))
            {
            $.ajax({
                url:"{{url('delete_item_location_master')}}/"+item_location_id,
                type: "DELETE",
                data: {
                    item_location_id: item_location_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(data){
                  alert(data);
                  window.location.href = "{{url('item_location_master')}}";
                },
                error:function(data)
                {
                    console.log(data);
                }
            });
        }
         }  
     

</script>