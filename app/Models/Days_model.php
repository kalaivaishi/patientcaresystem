<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_daymaster';

    protected $fillable = [
        'days_name'
            ];
}
