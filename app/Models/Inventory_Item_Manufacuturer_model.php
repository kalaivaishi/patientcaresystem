<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Item_Manufacuturer_model extends Model
{
    use HasFactory;

    protected $table = 'inventory_item_manufacturer_master';

    protected $fillable = [
        'item_manufacturer',
        'status'
    ];
}
