<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward_detail_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_ward_detail';

    protected $fillable = [
        'ward_number',
        'floor_number',
        'nurse_station_id',
        'ward_type',
        'ward_style',
        'ward_level'
    ];
}
