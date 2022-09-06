<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse_register_model extends Model
{
    use HasFactory;

     protected $table = 'wipc_nurse_register';

    protected $fillable = [
        'name',
        'specialization',
        'assigned_shift',
        'login_status'
    ];
}
