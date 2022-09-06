<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicemaster_model extends Model
{
    use HasFactory;

    protected $table = "wipc_service_master";

    protected $fillable = [
        "UHID",
        "admission_id",
        "ward_no",
        "bed_no",
        "request_time",
        "response_time",
        "service_given",
        "call_type",
        "user_id",
        "status"
    ];
}
