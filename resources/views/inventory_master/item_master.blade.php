@include('layouts.inventory_master')

<!-- content -->
<div class="page-wrapper">
<div class="content">
  <nav class="navbar navbar-light bg-blue" style="background-color: rgb(64, 64, 207);">
      <div class="container-fluid">
          <a class="navbar-brand" style="color: white;" href="#">Item Master</a>
      </div>
      </nav>   
    <div class="container-fluid">
      <div class="row clearfix">
          <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8"><br>
              <div class="card">
                  <div class="form-row">
                    <div class="col-sm-0"><br>
                        <button type="button" class="btn btn-warning" id="add_item"><i class="fas fa-plus" >Add</i></button>&nbsp;
                    </div>
                    <div class="col-sm-0"><br>
                        <button type="button" class="btn btn-warning"><i class="fa fa-pen" >Edit</i></button>&nbsp;                        
                       </div>
                    <div class="col-sm-0"><br>
                        <button type="button"class="btn btn-success"> <i class="fas fa-save" >Save</i></button>&nbsp;
                    </div>
                    <div class="col-sm-0"><br>
                        <button type="button" class="btn btn-primary"  onClick="window.location.reload();"> <i class="fas fa-sync-alt" >Refresh</i></button>&nbsp;
                    </div>
                    <div class="col-sm-0"><br>
                         <a href="" class="btn btn-danger"> <i class="fas fa-times-circle">Exit</i></a>
                    </div>              
                   
                    <br>
                     
                  <!-- <button type="button"class="btn btn-success"> <i class="fas fa-save" >Save</i></button>&nbsp;  -->
              </div>
<br>
<div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:white;"><br>
 
    @csrf
    <div class="row clearfix">
      <!-- <div class="col-sm-3">
        <div class="form-group">
          <label for="Appoints">Appointment Id</label>
          <div class="flexContainer">
            <input type="text" name="appointment_id"  class="form-control" id="Appoints" placeholder="">
            data-toggle="modal" data-target="#patient-registration-modal" 
             <button type="button"  name="search_app_id"  value="IsAppointmentId" class="input-group-text" data-toggle="modal" data-target="#patient-registration-modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
         </div>
       </div>
      </div> -->

    <div class="col-sm-3">
            <div class="form-line">
              <div class="form-group col-md-12 mb-0">
                <label>Item ID</label>
                @if(isset($last_id))
                        <input type="text" name="store_id" class="form-control" value="IM00{{($last_id->id)+1}}" readonly>
                        @else
                         <input type="text" name="store_id" class="form-control" value="1" readonly>
                        @endif
              </div>
            </div>
    </div>
    <div class="col-sm-3">
          <div class="form-line">
            <div class="form-group col-md-12 mb-0">
              <label>Belongs To</label>
                <input type="text" name="belongs_to" id="belongs_to">
            </div>
          </div>
    </div>
    <div class="col-sm-3">
         <div class="form-line">
          <div class="form-group col-md-12 mb-0">
            <label>Item Category</label>
                <select name="item_category" id="item_category" class="form-inline">
                  <option>select</option>
                  @foreach($item_category as $row)
                  <option value="{{$row->id}}">{{$row->item_category}}</option>
                  @endforeach
                </select>
          </div>
        </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>Item Name</label>
                <input type="text" name="item_name" id="item_name">
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>Short Code</label>
                <input type="text" name="short_code" id="short_code">
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>Packing</label>
                <select name="packaging" id="packaging" class="form-inline">
                  <option>select</option>
                   @foreach($item_pack as $row)
                  <option value="{{$row->id}}">{{$row->packaging_name}}</option>
                  @endforeach
                </select>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>Contain</label>
                <input type="text" name="contain" id="contain">
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>Unit</label>
                 <select name="unit" id="unit" class="form-inline">
                  <option>select</option>
                   @foreach($item_unit as $row)
                  <option value="{{$row->id}}">{{$row->unit_name}}</option>
                  @endforeach
                </select>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>Conversion Factor</label>
                <input type="text" name="conversion_factor" id="conversion_factor">
           <p>x 1 IUOM = 1 PUOM</p>          
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>HSN Code</label>
                <input type="text" name="hsn_code" id="hsn_code">
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>Hospital Item Code</label>
                <input type="text" name="hos_item_code" id="hos_item_code">
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>GST%</label>
                <input type="text" name="gst" id="gst">
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="form-line">
        <div class="form-group col-md-12 mb-0">
          <label>Remark</label>
                <input type="text" name="remark" id="remark">
        </div>
      </div>
    </div>
    
    <div class="col-md-4"><br>
      <label class="check_opt">Inactive
        <input type="checkbox" name="inactive" id="inactive">
        <span class="checkmark" ></span>	
      </label>
    </div>
    </div>
  </div>
  </form>
</div>
<div class="card" style="background-color: rgb(233, 233, 233)">
<div class="row" >
<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">                           
    <div class='container'>
      <div class="col-lg-16">
        <fieldset class="border" >
          <legend class ='text-left' style="color: red;"><b>Special Attributes</b></legend>
          <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:white;"><br>
            <div class="row-clearfix">
            <div class="form-row col-md-2 mb-2"><br>
                <label class="check_opt">Expiry Required
                  <input type="checkbox" name="expiry" id="expiry">
                  <span class="checkmark" ></span>	
                </label>
                </div>          
                <div class="form-row">
                    <div class="col-md-4">
                    <label class="check_opt">Is Reusable
                      <input type="checkbox" name="is_reusable" id="is_reusable">
                      <span class="checkmark" ></span>	
                    </label>
                    </div>
                    <div class="col-md-6">
                      <label>Number of Reusable</label>
                      <input type="text" name="no_reusable" id="no_reusable">
                    </div>
                </div>
                <div class="form-row">

                    <div class="col-md-4">
                       <label>Serial/Batch Controlled</label>
                      <select id="serial_batch" name="serial_batch">
                        <option>select</option>
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                       <label>Reusable Rates</label>
                      <input type="text" name="reusable_rate" id="reusable_rate">
                    </div>
                
                </div>
          </div>
        </div>
          
    
        </fieldset>
      </div><br>
  </div>
</div>
<div class="col-xs-12 col-sm-0 col-md-0 col-lg-3">
    <div class='container'>
      <div class="col-lg-16">
        <fieldset class="border" >
          <legend class ='text-left' style="color: red;"><b>Charge</b></legend>
          <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:white;"><br>
                <!-- <div class="row clearfix"> -->
                   <div class="col-md-2">
                    <div class="form-row col-md-2 mb-2"><br>
                      <label class="check_opt">TPA (Non Payable)
                        <input type="checkbox" name="tpa" id="tpa">
                        <span class="checkmark" ></span>	
                      </label>
                      </div> 
                   </div>
                    <div class="col-md-2">
                      <div class="form-row col-md-2 mb-2"><br>
                        <label class="check_opt">Service Charge
                          <input type="checkbox" name="service_charge" id="service_charge">
                          <span class="checkmark" ></span>	
                        </label>
                        </div> 
                    </div>
                </div>
            </div>
          </div>
        </fieldset>
      </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class='container'>
        <div class="col-lg-16">
          <fieldset class="border" >
            <legend class ='text-left' style="color: red;"><b>Stock</b></legend>
              <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:white;"><br>
                  <div class="form-row">
                  <div class="col-md-3">
                    <label>Min. Quantity</label>
                      <input type="text" name="min_quantity" id="min_quantity">
                </div>
                <div class="col-md-2">
                     <label>Max. Quantity</label>
                      <input type="text" name="max_quantity" id="max_quantity">
                </div>
                </div>
                <div class="col-md-2">
                   <label>Re-order Level</label>
                      <input type="text" name="reorder_level" id="reorder_level">
                </div>
                </div>                      
                <div class="col-md-2">
                  <div class="form-row col-md-2 mb-2"><br>
                    <label class="check_opt">Auto Indent
                      <input type="checkbox" name="autoindent" id="autoindent" >
                      <span class="checkmark" ></span>	
                    </label>
                  </div> 
                </div>
              <!--   <div class="col-md-4">
                  <button type="button" class="btn btn-warning"><i class="fa fa-plus" ></i></button>&nbsp;
                </div> -->
              </div>
        </div>
      </div>
    </div>
   </fieldset>
    </div>
  </div>
  </div>
  <!-- End -->
  <!-- Start -->
  <div class="card" style="background-color: rgb(233, 233, 233)">
  <div class="row" >
    <div class="col-xs-12 col-sm-0 col-md-0 col-lg-4">                           
        <div class='container'>
          <div class="col-lg-16">
            <fieldset class="border" >
              <legend class ='text-left' style="color: red;"><b>Manufacturers</b></legend>
              <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:white;"><br>
                  <div class="form-row">
                        <div class="col-md-3">
                          <input type="text" name="item_manufact" id="item_manufact">
                        </div>
                    <div class="col-md-2"><br><br>
                      <button type="button" class="btn btn-warning" id="manufacturers"><i class="fa fa-plus" >Insert</i></button>&nbsp;
                    </div>
                  </div>
                <!-- Table Start -->
                <div class="table-responsive">
                  <table class="datatable table table-stripped ">
          
          
                            <thead>
                                <tr><th>S.No</th>
                                    <th>Manufacturers</th>
          
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($item_manufact as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->item_manufacturer}}</td>
                                </tr>
                                @endforeach
                             </tbody>
          
                    </table>
                    </div>
                <!-- Table Ends -->
              </div>
            </fieldset>
          </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-0 col-md-0 col-lg-3">
        <div class='container'>
          <div class="col-lg-16">
            <fieldset class="border" >
              <legend class ='text-left' style="color: red;"><b>Suppliers</b></legend>
              <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:white;"><br>
                  <div class="form-row">
                       <div class="col-md-3">
                        <input type="text" name="suppliers" id="suppliers">
                       </div>
                       <div class="col-md-2"><br><br>
                        <button type="button" class="btn btn-warning" id="supplier"><i class="fa fa-plus" >Insert</i></button>&nbsp;
                      </div>
                    </div>
                  <!-- Table Start -->
                  <div class="table-responsive">
                    <table class="datatable table table-stripped ">
            
            
                              <thead>
                                  <tr><th>S.No</th>
                                      <th>Suppliers</th>
                                  </tr>
                              </thead>
                              <tbody>
                                 @foreach($supplier as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->supplier_name}}</td>
                                </tr>
                                @endforeach
                               </tbody>
            
                      </table>
                      </div>
                  <!-- Table Ends -->
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
          <div class='container'>
            <div class="col-lg-16">
              <fieldset class="border" >
                <legend class ='text-left' style="color: red;"><b>Generic</b></legend>
                  <div class="col-lg-12 col-md-12 col-sm-4 col-xs-4" style="background-color:white;"><br>
                      <div class="form-row">
                      <div class="col-md-8">
                        <input type="text" name="generic" id="generic">
                    </div>
                    <div class="col-md-4"><br>
                      <button type="button" class="btn btn-warning" id="generic_master"><i class="fa fa-plus" >Insert</i></button>&nbsp;
                    </div>
                  </div>
                  <!-- Table Start -->
                  <div class="table-responsive">
                    <table class="datatable table table-stripped ">
            
            
                              <thead>
                                  <tr><th>S.No</th>
                                      <th>Generic</th>
            
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($generic as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->generic_name}}</td>
                                </tr>
                                @endforeach
                               </tbody>
            
                      </table>
                      </div>
                  <!-- Table Ends -->
            </div>
          </div>
        </div>
       </fieldset>
        </div>
      </div>
      </div>
    </div>
  <!-- End -->
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>



<script>
   $(document).ready(function () {
     $("#add_item").click(function(){
      var belongs_to = $('#belongs_to').val();
      var item_category = $('#item_category').val();
      var item_name = $('#item_name').val();
      var short_code = $('#short_code').val();
      var packaging = $('#packaging').val();
      var contain = $('#contain').val();
      var unit = $('#unit').val();
      var conversion_factor = $('#conversion_factor').val();
      var hsn_code = $('#hsn_code').val();
      var hos_item_code = $('#hos_item_code').val();
      var gst = $('#gst').val();
      var remark = $('#remark').val();
      var no_reusable = $('#no_reusable').val();
      var serial_batch = $('#serial_batch').val();
      var reusable_rate = $('#reusable_rate').val();
      var min_quantity = $('#min_quantity').val();
      var max_quantity = $('#max_quantity').val();
      var reorder_level = $('#reorder_level').val();

      if($('#expiry').is(":checked")){
        var expiry = 1;
      }
      else{ expiry = 0;}

      if($('#inactive').is(":checked")){
        var inactive = 1;
      }
      else{ inactive = 0;}

      if($('#is_reusable').is(":checked")){
        var is_reusable = 1;
      }
      else{ is_reusable = 0;}

      if($('#tpa').is(":checked")){
        var tpa = 1;
      }
      else{ tpa = 0;}

      if($('#service_charge').is(":checked")){
        var service_charge = 1;
      }
      else{ service_charge = 0;}

      if($('#autoindent').is(":checked")){
        var autoindent = 1;
      }
      else{ autoindent = 0;}

      $.ajax({
            url:"{{url('save_item_master')}}",
            type: "post",
            data: {
            belongs_to: belongs_to,
            item_category: item_category,
            item_name: item_name,
            short_code: short_code,
            packaging: packaging,
            contain: contain,
            unit: unit,
            conversion_factor: conversion_factor,
            hsn_code: hsn_code,
            hos_item_code: hos_item_code,
            gst: gst,
            remark: remark,
            inactive: inactive,
            expiry: expiry,
            is_reusable: is_reusable,
            no_reusable: no_reusable,
            serial_batch: serial_batch,
            reusable_rate: reusable_rate,
            tpa: tpa,
            service_charge: service_charge,
            min_quantity: min_quantity,
            max_quantity: max_quantity,
            reorder_level: reorder_level,
            autoindent: autoindent,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
                alert(data);
                window.location.href = "{{url('item_master')}}";
            },
            error:function(data)
            {
                console.log(data);
            }
          });
     });

      $("#supplier").click(function(){
        var suppliers = $('#suppliers').val();
        $.ajax({
            url:"{{url('save_suppliers')}}",
            type: "post",
            data: {
            suppliers: suppliers,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
                alert(data);
                window.location.href = "{{url('item_master')}}";
            },
            error:function(data)
            {
                console.log(data);
            }
          });
      });

      $("#generic_master").click(function(){
        var generic = $('#generic').val();
        $.ajax({
            url:"{{url('save_generic')}}",
            type: "post",
            data: {
            generic: generic,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
                alert(data);
                window.location.href = "{{url('item_master')}}";
            },
            error:function(data)
            {
                console.log(data);
            }
          });
      });

       $("#manufacturers").click(function(){
        var item_manufacturer = $('#item_manufact').val();
        $.ajax({
            url:"{{url('save_manufact')}}",
            type: "post",
            data: {
            item_manufacturer: item_manufacturer,
            _token: '{{csrf_token()}}'
            },
            dataType : 'json',
            success: function(data){
                alert(data);
                window.location.href = "{{url('item_master')}}";
            },
            error:function(data)
            {
                console.log(data);
            }
          });
      });
   });
</script>