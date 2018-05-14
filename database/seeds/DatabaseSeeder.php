<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{	
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoryTableSeeder::class,
            ProductTableSeeder::class, 
            DeliveryOptionSeeder::class,
            AdminUserSeeder::class,
        ]);
        
    }
}

Class DeliveryOptionSeeder extends Seeder
{
    public function run()
    {
        DB::table('delivery_options')->insert([
            'delivery_type'=>'Standard',
            'cost' => 700,
        ]);

        DB::table('delivery_options')->insert([
            'delivery_type'=>'Express',
            'cost' => 1200,
        ]);


    }
}

Class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'Josh',
            'email' =>'josh.ronald.ooi@gmail.com',
            'password' =>Hash::make("qweasd"),
            'activated'=>true,
        ]);
    }
}

Class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => ''
        ]);
        DB::table('categories')->insert([
            'category_name' => ''
        ]);
        DB::table('categories')->insert([
            'category_name' => ''
        ]);
        // etc
    }
}

Class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'manufacturer' => '',
            'product_name' => '',
            'product_description' => '',
            'price' => 1000,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'manufacturer' => '',
            'product_name' => '',
            'product_description' => '',
            'price' => 1000,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'manufacturer' => '',
            'product_name' => '',
            'product_description' => '',
            'price' => 1000,
            'category_id' => 1,
        ]);
    }
}