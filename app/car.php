<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    // protected $table = 'cars';

    public static function scopeIsFast($query)
    {
    	return $query->where('fast', 1);
    }
}