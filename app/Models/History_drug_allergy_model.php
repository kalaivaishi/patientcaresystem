<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_drug_allergy_model extends Model
{
    use HasFactory;

    protected $table = "wipc_history_drug_allergy";

    protected $fillable = [
        "UHID",
        "drugallergy_name",
        "description",
        "date",
        "user_id"
    ];
}
