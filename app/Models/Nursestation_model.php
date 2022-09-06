<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nursestation_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_nurse_station';

    protected $fillable = [
        'head_nurse_id'
    ];
}
