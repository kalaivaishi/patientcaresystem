<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_shift_master';

    protected $fillable = [
        "shift_name",
        "shift_start_time",
        "shift_end_time",
        "description",
        "status"
    ];
}
