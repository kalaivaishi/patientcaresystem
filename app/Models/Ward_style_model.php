<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward_style_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_ward_style';

    protected $fillable = [
        'short_description',
        'description'
    ];
}
