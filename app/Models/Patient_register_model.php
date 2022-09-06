<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_register_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_patient_register';

    protected $fillable = [
        'UHID',
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'dob',
        'gender',
        'DOR',
        'mobile_no'
    ];
}
