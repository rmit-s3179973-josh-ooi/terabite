<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','delivery_option_id','total','qty'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function delivery()
    {
    	return $this->belongsTo(Delivery::class);
    }

    public function products()
    {
    	return $this->belongsToMany(Product::class);
    }

    public function getDateAttribute()
    {
    	return $this->created_at->format('d/m/Y');
    }
}
