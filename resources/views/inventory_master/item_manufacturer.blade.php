@include('layouts.inventory_master')

<!-- content -->
<div class="page-wrapper">
<div class="content">
  <button type="menu" style="font-family: monospace; width: 100%; text-align: left;" class="btn btn-primary m-t-15 waves-effect"> <b>Item Manufacturer Master</b></button>
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
              
           <div class="table-responsive">
             <table class="datatable table table-stripped ">

                   <thead>
                       <tr><th>S.No.</th>
                           <th>Manufacturer</th>
                           <th>Inactive</th>
                           <th>Remove</th>

                       </tr>
                   </thead>
                   <tbody>
                    @foreach($manufact_list as $row)
                     <tr>
                         <td>{{$loop->iteration}}</td>
                         <td>{{$row->item_manufacturer}}</td>
                         <td><input type="checkbox"></td>
                         <td><button style="border-color: white;" id="delete" onclick="delete_item({{$row->id}})"><i class="fa fa-times-circle" style="font-size: 20px;color: red;"></i></button></td>
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
         <h5 class="modal-title" id="exampleModalLabel" ><b>Item Manufacturer Master </b></h5>
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
                                 <form method="post" action="{{url('save_item_manufacturer')}}">
                                   @csrf
                                   <div class="form-row">
                                       <div class="form-group col-md-6 mb-0">
                                       <label>Item Manufacturer</label>
                                      <input type="text" name="item_manufacturer">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-2 mb-0">                
                                     
                                   <button type="submit" class="btn btn-success" > <i class="fas fa-save" >&nbsp;Save</i></button>
                               </div>
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

</div>
</div>

<script>
    function delete_item(item_manufact_id){
            if(confirm('Do you want to Delete?'))
            {
            $.ajax({
                url:"{{url('delete_item_manufacturer')}}/"+item_manufact_id,
                type: "DELETE",
                data: {
                    item_manufact_id: item_manufact_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(data){
                  alert(data);
                  window.location.href = "{{url('item_manufacturer_master')}}";
                },
                error:function(data)
                {
                    console.log(data);
                }
            });
        }
         }  
     

</script>