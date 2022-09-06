<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Store_nursing_counter_model extends Model
{
    use HasFactory;

    protected $table = 'inventory_store_nursing_counter_mapping';

    protected $fillable = [
        'store_link_id',
        'store',
        'nursing_counter',
        'department',
        'status'
    ];
}
