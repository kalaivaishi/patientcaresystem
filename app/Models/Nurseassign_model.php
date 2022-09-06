<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurseassign_model extends Model
{
    use HasFactory;
    protected $table = 'wipc_nurse_assignment';

    protected $fillable = [
        'floor_no',
        'ward_no',
        'room_no',
        'bed_no',
        'UHID',
        'admission_id',
        'call_type_id',
        'nurse_station_id',
        'nurse_id',
        'shift_name',
        'days_id'
    ];
}
