<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_admission_modal extends Model
{
    use HasFactory;

    protected $table = 'wipc_patient_admission';

    protected $fillable = [
        'UHID',
        'admission_id',
        'ward_no',
        'bed_no',
        'DOA',
        'consultant_name',
        'admission_purpose',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'mobile_no1',
        'mobile_no2'
    ];
}
