<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call_list_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_call_list';

    protected $fillable = [
        "UHID",
        "admission_id",
        "ward_no",
        "room_no",
        "bed_no",
        "call_type_id",
        "status_color",
        "status",
        "service_given",
        "start_date_time",
        "end_date_time"
    ];
}
