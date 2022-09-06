<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_department';

    protected $fillable = [
        'name',
        'feedback_admin_id',
        'full_access_admin_id',
        'app_id',
        'app_name',
    ];
}
