<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CafeMenu_model extends Model
{
    use HasFactory;

    protected $table = 'wipc_cafe_menu';

    protected $fillable = [
        'date',
        'juice1',
        'juice2',
        'juice3',
        'juice4',
        'meal_type1',
        'meal_type2',
        'meal_type3',
        'meal_type4',
        'snack1',
        'snack2',
        'snack3',
        'snack4',
        'cake1',
        'cake2',
        'cake3',
        'cake4',
        'week_day'
    ];
}
