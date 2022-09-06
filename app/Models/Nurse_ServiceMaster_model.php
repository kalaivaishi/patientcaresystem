<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse_ServiceMaster_model extends Model
{
    use HasFactory;

     protected $table = 'wipc_nurse_service_master';

    protected $fillable = [
        'service_name',
        'description'
        
    ];
}
