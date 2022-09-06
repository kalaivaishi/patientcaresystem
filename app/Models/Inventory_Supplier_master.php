<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Supplier_master extends Model
{
    use HasFactory;

    protected $table = 'inventory_suppliers_master';

    protected $fillable = [
        'supplier_name',
    ];
}
