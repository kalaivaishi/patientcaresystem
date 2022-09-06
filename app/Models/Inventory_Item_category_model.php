<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Item_category_model extends Model
{
    use HasFactory;

    protected $table = 'inventory_item_category';

    protected $fillable = [
        'item_category',
        'status'
    ];
}
