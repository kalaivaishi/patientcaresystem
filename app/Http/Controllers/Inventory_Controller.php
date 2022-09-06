<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory_Item_category_model;
use App\Models\Inventory_Packaging_model;
use App\Models\Inventory_Item_unit_model;
use App\Models\Inventory_Item_Manufacuturer_model;
use App\Models\Inventory_Store_master_model;
use App\Models\Inventory_Vendor_master_model;
use App\Models\Inventory_Store_nursing_counter_model;
use App\Models\Inventory_Item_location_model;
use App\Models\Inventory_Item_master;
use App\Models\Inventory_Supplier_master;
use App\Models\Inventory_Generic_master;


class Inventory_Controller extends Controller
{
    public function item_master()
    {
        $item_category = Inventory_Item_category_model::get();
        $item_pack = Inventory_Packaging_model::get();
        $item_unit = Inventory_Item_unit_model::get();
        $item_manufact = Inventory_Item_Manufacuturer_model::get();
        $supplier = Inventory_Supplier_master::get();
        $generic = Inventory_Generic_master::get();
        $last_id = Inventory_Item_master::orderBy('id', 'DESC')->first();
        return view('inventory_master.item_master',compact('item_category','item_pack','item_unit','last_id','item_manufact','supplier','generic'));
    }

    public function save_item_master(Request $request)
    {
        $item_master = new Inventory_Item_master;

        $item_master->belongs_to = $request->belongs_to;
        $item_master->item_category = $request->item_category;
        $item_master->item_name = $request->item_name;
        $item_master->short_code = $request->short_code;
        $item_master->packaging = $request->packaging;
        $item_master->contain = $request->contain;
        $item_master->unit = $request->unit;
        $item_master->conversion_factor = $request->conversion_factor;
        $item_master->hsn_code = $request->hsn_code;
        $item_master->hos_item_code = $request->hos_item_code;
        $item_master->gst = $request->gst;
        $item_master->remark = $request->remark;
        $item_master->status = $request->inactive;
        $item_master->expiry = $request->expiry;
        $item_master->is_reusable = $request->is_reusable;
        $item_master->no_reusable = $request->no_reusable;
        $item_master->serial_batch = $request->serial_batch;
        $item_master->reusable_rate = $request->reusable_rate;
        $item_master->tpa = $request->tpa;
        $item_master->service_charge = $request->service_charge;
        $item_master->min_quantity = $request->min_quantity;
        $item_master->max_quantity = $request->max_quantity;
        $item_master->reorder_level = $request->reorder_level;
        $item_master->autoindent = $request->autoindent;

        $item_master->save();

        $data = 'Data saved';

        return response()->json($data);

    }

    public function save_suppliers(Request $request)
    {
        $supplier = new Inventory_Supplier_master;

        $supplier->supplier_name = $request->suppliers;

        $supplier->save();

        $data = 'Supplier Saved';
        return response()->json($data);
    }

    public function save_generic(Request $request)
    {
        $generic = new Inventory_Generic_master;

        $generic->generic_name = $request->generic;

        $generic->save();

        $data = 'Generic Saved';
        return response()->json($data);
    }

    public function save_manufact(Request $request)
    {
        $item_manufact = new Inventory_Item_Manufacuturer_model;

        $item_manufact->item_manufacturer = $request->item_manufacturer;
        $item_manufact->status = '';

        $item_manufact->save();

        $data = 'Manufacturer Saved';
        return response()->json($data);
    }



    public function item_category_master()
    {
        $item_category = Inventory_Item_category_model::get();
        return view('inventory_master.item_category_master',compact('item_category'));
    }

    public function save_item_category(Request $request)
    {
        $item_category = new Inventory_Item_category_model;

        $item_category->item_category = $request->item_category;
        $item_category->status = '';

        $item_category->save();

        return back();
    }

    public function delete_item_category($item_cate_id)
    {
         //$data=Inventory_Item_category_model::find($item_cate_id);
         $item_category = Inventory_Item_category_model::where('id',$item_cate_id)->delete();
         
        $data = 'Successfully Deleted';
        return response()->json($data);
    }

    public function item_location_master()
    {
        $item_location_list = Inventory_Item_location_model::get();
        $last_id = Inventory_Store_nursing_counter_model::orderBy('id','DESC')->first();
        return view('inventory_master.item_location_master',compact('item_location_list','last_id'));
    }

    public function save_item_location_master(Request $request)
    {
        $item_location = new Inventory_Item_location_model;

        $item_location->item_name = $request->item_name;
        $item_location->store_name = $request->store_name;
        $item_location->location = $request->location;
        $item_location->remark = $request->remark;
        $item_location->status = '';

        $item_location->save();

        return back();
    }

    public function delete_item_location_master($item_location_id)
    {
        $item_location = Inventory_Item_location_model::where('id',$item_location_id)->delete();
        
        $data = 'Successfully Deleted';
        return response()->json($data);
    }

    public function item_manufacturer_master()
    {
        $manufact_list = Inventory_Item_Manufacuturer_model::get();
        return view('inventory_master.item_manufacturer',compact('manufact_list'));
    }

    public function save_item_manufacturer(Request $request)
    {
        $item_manufact = new Inventory_Item_Manufacuturer_model;

        $item_manufact->item_manufacturer = $request->item_manufacturer;
        $item_manufact->status = '';

        $item_manufact->save();

        return back();
    }

    public function delete_item_manufacturer($item_manufact_id)
    {
        $item_manufact = Inventory_Item_Manufacuturer_model::where('id',$item_manufact_id)->delete();
        
        $data = 'Successfully Deleted';
        return response()->json($data);
    }

    public function item_unit_master()
    {
        $unit_list = Inventory_Item_unit_model::get();
        return view('inventory_master.item_unit_master',compact('unit_list'));
    }

    public function save_item_unit(Request $request)
    {
        $item_unit = new Inventory_Item_unit_model;

        $item_unit->unit_name = $request->item_unit;
        $item_unit->status = '';

        $item_unit->save();

        return back();
    }

    public function delete_item_unit($item_unit_id)
    {
         //Inventory_Packaging_model::find($item_pack_id)->delete();
        $item_unit = Inventory_Item_unit_model::where('id',$item_unit_id)->delete();
        
        $data = 'Successfully Deleted';
        return response()->json($data);
    }

    public function packaging_master()
    {
        $package_list = Inventory_Packaging_model::get();
        return view('inventory_master.packaging_master',compact('package_list'));
    }

    public function save_packaging_master(Request $request)
    {
        $package = new Inventory_Packaging_model;

        $package->packaging_name = $request->package_name;
        $package->status = '';

        $package->save();

        return back();
    }

    public function delete_packaging($item_pack_id)
    {
         //Inventory_Packaging_model::find($item_pack_id)->delete();
        $item_category = Inventory_Packaging_model::where('id',$item_pack_id)->delete();
        
        $data = 'Successfully Deleted';
        return response()->json($data);
    }

    public function store_master()
    {
        $store_list = Inventory_Store_master_model::get();
        $last_id = Inventory_Store_master_model::orderBy('id','DESC')->first();
        return view('inventory_master.store_master',compact('store_list','last_id'));
    }

    public function save_store_master(Request $request)
    {
        $store = new Inventory_Store_master_model;
        if($request->has('main_store')){
            $main_store = 1;
        }else{
            $main_store = 0;
        }

        $store->store_name = $request->store_name;
        $store->parent_store = $request->parent_store;
        $store->wing = $request->wing;
        $store->floor = $request->floor;
        $store->location = $request->location;
        $store->store_type = $request->store_type;
        $store->main_store = $main_store;
        $store->status = '';

        $store->save();

        return back();
    }

    public function delete_store_master($store_id)
    {
        $store = Inventory_Store_master_model::where('id',$store_id)->delete();
        
        $data = 'Successfully Deleted';
        return response()->json($data);
    }

    public function store_nursing_counter()
    {
        $store_nursing_list = Inventory_Store_nursing_counter_model::get();
        $last_id = Inventory_Store_nursing_counter_model::orderBy('id','DESC')->first();
        return view('inventory_master.store_nursing_counter_mapping',compact('store_nursing_list','last_id'));
    }

    public function save_store_nursing_counter(Request $request)
    {
        $store_nursing = new Inventory_Store_nursing_counter_model;

        $store_nursing->store_link_id = '';
        $store_nursing->store = $request->store;
        $store_nursing->nursing_counter = $request->nursing_counter;
        $store_nursing->department = $request->department;
        $store_nursing->status = '';

        $store_nursing->save();

        return back();
    }

    public function delete_store_nursing_counter($store_nursing_id)
    {
        $store_nursing = Inventory_Store_nursing_counter_model::where('id',$store_nursing_id)->delete();
        
        $data = 'Successfully Deleted';
        return response()->json($data);
    }

    public function vendor_master()
    {
        $vendor_list = Inventory_Vendor_master_model::get();
        $last_id = Inventory_Vendor_master_model::orderBy('id','DESC')->first();
        return view('inventory_master.vendor_master',compact('vendor_list','last_id'));
    }

    public function save_vendor(Request $request)
    {
        $vendor = new Inventory_Vendor_master_model;

        $vendor->vendor_name = $request->vendor_name;
        $vendor->vendor_short_name = $request->vendor_short_name;
        $vendor->contact_person = $request->contact_person;
        $vendor->address = $request->address;
        $vendor->city = $request->city;
        $vendor->district = $request->district;
        $vendor->pin_code = $request->pin_code;
        $vendor->phone1 = $request->phone1;
        $vendor->phone2 = $request->phone2;
        $vendor->fax_no = $request->fax_no;
        $vendor->email = $request->email;
        $vendor->website = $request->website;
        $vendor->tax_id = $request->tax_id;
        $vendor->rating = $request->rating;
        $vendor->afc_code = $request->afc_code;
        $vendor->type_char = $request->type_char;
        $vendor->status = '';

        $vendor->save();

        return back();
    }

    public function delete_vendor($vendor_id)
    {
        $vendor = Inventory_Vendor_master_model::where('id',$vendor_id)->delete();
        
        $data = 'Successfully Deleted';
        return response()->json($data);
    }
}
