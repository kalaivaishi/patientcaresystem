<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_vaccination_model extends Model
{
    use HasFactory;

    protected $table = "wipc_history_vaccination";

    protected $fillable = [
        "UHID",
        "vaccine_name",
        "vaccine_date"
    ];
}
