<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedtype_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_bed_type';

    protected $fillable = [
        'short_description',
        'description'
    ];
}
