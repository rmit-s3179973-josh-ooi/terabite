<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{
    protected $fillable = ['code','user_id'];
    protected $table = 'activation_codes';
    
    public function user()
    {
    	return $this->hasOne(User::class);
    }
}
