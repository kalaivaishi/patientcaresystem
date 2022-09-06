<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms_model extends Model
{
    use HasFactory;

     protected $table = 'wipc_rooms';

    protected $fillable = [
        'floor_no',
        'ward_no',
        'room_type',
        'room_no'
    ];
}
