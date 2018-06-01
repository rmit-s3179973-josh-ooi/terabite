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

    public function ratings()
    {
        $reviews = $this->reviews()->get();
        $ratings = 0;
        foreach($reviews as $rev)
        {
            $ratings += $rev->rating;
        } 
        if($ratings == 0)
            return 0;

        return round($ratings / count($reviews));
    }

    public function getRatingAttribute()
    {
        return $this->ratings();
    }

    public static function getBrands()
    {
        return Product::select('manufacturer')->distinct()->get()->map(function($item, $key) {
            return $item["manufacturer"];
        })->toArray(); 
    }
}
