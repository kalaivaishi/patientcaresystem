<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwaitingReq_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_awaiting_req';

    protected $fillable = [
        'request_awaiting'
        ];
}
