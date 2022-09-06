<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Item_location_model extends Model
{
    use HasFactory;

    protected $table = 'inventory_item_location_master';

    protected $fillable = [
        'item_name',
        'store_name',
        'location',
        'remark',
        'status'
    ];
}
