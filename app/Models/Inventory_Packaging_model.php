<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Packaging_model extends Model
{
    use HasFactory;

    protected $table = 'inventory_packaging_master';

    protected $fillable = [
        'packaging_name',
        'status'
    ];
}
