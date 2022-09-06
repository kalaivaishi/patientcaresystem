<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward_type_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_ward_type';

    protected $fillable = [
        'short_description',
        'description'
    ];
}
