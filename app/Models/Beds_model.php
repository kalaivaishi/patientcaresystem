<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beds_model extends Model
{
    use HasFactory;

     protected $table = 'wipc_beds';

    protected $fillable = [
        'floor_no',
        'ward_no',
        'room_no',
        'bed_no',
        'bed_type',
        'concatenate_string'
    ];
}
