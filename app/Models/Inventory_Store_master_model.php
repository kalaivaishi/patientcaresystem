<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Store_master_model extends Model
{
    use HasFactory;

    protected $table = 'inventory_store_master';

    protected $fillable = [
        'store_name',
        'parent_store',
        'wing',
        'floor',
        'location',
        'store_type',
        'main_store',
        'status'
    ];
}
