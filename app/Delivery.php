<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hashids;

class Delivery extends Model
{
    protected $fillable = ['delivery_type','cost','is_flat'];
    protected $table = 'delivery_options';

    public function getCostAttribute($value)
    {
    	return number_format($value/100, 2, '.', ' ');
    }

    public function getIdAttribute($value)
    {
    	return Hashids::encode($value);
    }
}
