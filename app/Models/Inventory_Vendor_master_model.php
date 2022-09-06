<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory_Vendor_master_model extends Model
{
    use HasFactory;

    protected $table = 'inventory_vendor_master';

    protected $fillable = [
        'vendor_name',
        'vendor_short_name',
        'contact_person',
        'address',
        'city',
        'district',
        'pin_code',
        'phone1',
        'phone2',
        'fax_no',
        'email',
        'website',
        'tax_id',
        'rating',
        'afc_code',
        'type_char',
        'status'
    ];
}
