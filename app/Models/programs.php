<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $fillable = ['name', 'description', 'goal_amount', 'current_amount', 'start_date','end_date'];
}
