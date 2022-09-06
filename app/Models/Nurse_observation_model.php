<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse_observation_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_nurse_observation';

    protected $fillable = [
        'description',
        'background',
        'consultant_description',
        'consultant_background',
        'consultant_id',
        'nurse_id',
        'call_type_id',
        'UHID',
        'admission_id',
        'ward_no',
        'room_no',
        'bed_no',
        'escaltate_time',
        'escaltate_date',
        'status'
    ];
}
