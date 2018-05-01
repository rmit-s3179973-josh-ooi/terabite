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