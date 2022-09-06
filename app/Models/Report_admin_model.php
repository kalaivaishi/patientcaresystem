<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_admin_model extends Model
{
    use HasFactory;

    protected $table = "wipc_report_to_admin";

    protected $fillable = [
        "complaint",
        "feedback",
        "suggestions",
        "date_time"
    ];
}
