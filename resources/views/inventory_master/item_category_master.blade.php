@include('layouts.inventory_master')

<!-- content -->
<div class="page-wrapper">
<div class="content">
  <button type="menu" style="font-family: monospace; width: 100%; text-align: left;" class="btn btn-primary m-t-15 waves-effect"> <b>Item Category Master</b></button>
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
            
        </div><br>
              
           <div class="table-responsive">
             <table class="datatable table table-stripped ">

                   <thead>
                       <tr><th>S.No.</th>
                           <th>Item Category</th>
                           <th>Inactive</th>
                           <th>Remove</th>

                       </tr>
                   </thead>
                   <tbody>
                    @foreach($item_category as $row)
                     <tr>
                         <td>{{$loop->iteration}}</td>
                         <td>{{$row->item_category}}</td>
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
         <h5 class="modal-title" id="exampleModalLabel" ><b>Item Category Master </b></h5>
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
                                 <form method="post" action="{{url('save_item_category')}}">
                                    @csrf
                                   <div class="form-row">
                                       <div class="form-group col-md-2 mb-0">
                                        <label>Item Category</label>
                                      <input type="text" name="item_category">
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
                        
                     </div>
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

<script>
    function delete_item(item_cate_id){
            if(confirm('Do you want to Delete?'))
            {
            $.ajax({
                url:"{{url('delete_item_category')}}/"+item_cate_id,
                type: "DELETE",
                data: {
                    item_cate_id: item_cate_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(data){
                  alert(data);
                  window.location.href = "{{url('item_category_master')}}";
                },
                error:function(data)
                {
                    console.log(data);
                }
            });
        }
         }  
     

</script>