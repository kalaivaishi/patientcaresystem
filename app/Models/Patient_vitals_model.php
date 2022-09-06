<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_vitals_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_patient_vitals';

    protected $fillable = [
        'date',
        'time',
        'temperature',
        'pulse',
        'respirations',
        'blood_pressure',
        'blood_sugar_F',
        'blood_sugar_R',
        'spo2',
        'any_allergies'        
    ];
}
