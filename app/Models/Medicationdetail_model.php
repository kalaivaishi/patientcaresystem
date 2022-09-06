<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicationdetail_model extends Model
{
    use HasFactory;

    protected $table = "wipc_medication_details";

    protected $fillable = [
        "UHID",
        "admission_id",
        "medicine_name",
        "consultant_name",
        "prescription_date",
        "dossage",
        "duration",
        "DOA"
    ];
}
