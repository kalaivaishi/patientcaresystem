<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calltype_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_call_type';

    protected $fillable = [
        'department_id',
        'short_description',
        'description',
        'max_time',
        'reporting_user',
        'date_created',
        'created_by',
        'user_role_assigned'
    ];
}
