<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_health_monitor_model extends Model
{
    use HasFactory;

     protected $table = 'wipc_patient_health_monitor';

    protected $fillable = [
        'UHID',
        'admission_id',
        'ward_no',
        'bed_no',
        'room_no',
        'temperature',
        'bp',
        'respirations_rate',
        'weight',
        'bmi',
        'heart_rate',
        'body_mass'
    ];
}
