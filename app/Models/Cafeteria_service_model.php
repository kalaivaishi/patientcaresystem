<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafeteria_service_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_cafeteria_service';

    protected $fillable = [
        'service_name',
        'description'
        
    ];
}
