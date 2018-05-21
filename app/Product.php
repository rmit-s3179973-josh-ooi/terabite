<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['manufacturer','product_name','product_description','category_id','price'];
    

    public function images()
    {
    	return $this->hasMany(Image::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class,'category_id');
    }

    public function order()
    {
    	return $this->belongsToMany(Product::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
