<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseKeeping_service_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_housekeeping_service';

    protected $fillable = [
        'service_name',
        'description'
        
    ];
}
