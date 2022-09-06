<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_medical_model extends Model
{
    use HasFactory;

    protected $table = "wipc_history_medical";

    protected $fillable = [
        "UHID",
        "description",
        "date",
        "user_id"
    ];
}
