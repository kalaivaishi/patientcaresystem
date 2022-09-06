<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtype_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_room_type';

    protected $fillable = [
        'short_description',
        'description'
    ];
}
