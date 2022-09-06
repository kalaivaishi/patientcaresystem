<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestqueue_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_request_queue';

    protected $fillable = [
        'request_patient_id',
        'request_nurse_id',
        'request_doctor_id',
        'request_pharmacy_id',
        'request_attendant_id',
        'request_date',
        'request_time',
        'acknowledged_time',
        'completed_time',
        're_routed_time',
        'call_id',
        'request_assigned_to',
        'status'
    ];
}
