<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Item_master extends Model
{
    use HasFactory;

    protected $table = 'inventory_item_master';

    protected $fillable = [
        'belongs_to',
        'item_category',
        'item_name',
        'short_code',
        'packaging',
        'contain',
        'unit',
        'conversion_factor',
        'hsn_code',
        'hos_item_code',
        'gst',
        'remark',
        'status',
        'expiry',
        'is_reusable',
        'no_reusable',
        'serial_batch',
        'reusable_rate',
        'tpa',
        'service_charge',
        'min_quantity',
        'max_quantity',
        'reorder_level',
        'autoindent'
    ];
}
