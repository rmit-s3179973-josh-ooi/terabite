<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['address_line_one','address_line_two','postcode','suburb', 'state','country'];

    public function user()
    {
    	return $this->belongsToMany(User::class);
    }

    
}
