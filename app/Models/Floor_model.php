<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_floor';

    protected $fillable = [
        'floor_no'
    ];
}
