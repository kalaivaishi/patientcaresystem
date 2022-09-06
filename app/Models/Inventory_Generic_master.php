<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Generic_master extends Model
{
    use HasFactory;

    protected $table = 'inventory_generic_master';

    protected $fillable = [
        'generic_name',
    ];
}
