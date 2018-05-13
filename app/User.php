<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','activated',
    ];

    protected $appends = ['address'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $visible = [
        'id','name', 'email', 'contact_number','address'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function verification()
    {
        return $this->hasOne(VerificationCode::class);
    }

    public function address()
    {
        return $this->belongsToMany(Address::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getAddressAtributes()
    {
        return $this->address()->all();
    }
}
