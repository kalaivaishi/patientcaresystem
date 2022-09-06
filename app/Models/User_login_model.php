<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_login_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_user';

    protected $fillable = [
        'user_name',
        'password',
        'department_id',
        'user_type',
        'name',
        'login_time',
        'date',
        'logout_time',
        'checkin_status'
    ];
}
