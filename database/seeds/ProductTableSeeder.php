<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = App\Category::all()->pluck('id')->toArray();
        
        factory(App\Product::class, 30)->create()->each(function ($u) use ($categories) {
        	$key = array_rand($categories,1);
        	$u->update(['category_id'=> $categories[$key]]);        	
        	$u->images()->save(factory(App\Image::class)->make());
        });
    }
}