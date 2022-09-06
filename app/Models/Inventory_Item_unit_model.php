<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Item_unit_model extends Model
{
    use HasFactory;

    protected $table = 'inventory_unit_master';

    protected $fillable = [
        'unit_name',
        'status'
    ];
}
