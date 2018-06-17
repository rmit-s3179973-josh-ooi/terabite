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
            CategorySeeder::class,
            ProductSeeder::class, 
            DeliveryOptionSeeder::class,
            AdminUserSeeder::class,
            ReviewSeeder::class,
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
            'is_admin'=>true,
        ]);
    }
}

Class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Mobile Phones'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Computers & Tablets'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'TVs'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'DJ & Musical Instruments'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Cameras'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Headphones, Speakers & Audio'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Home Appliances'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Drones & Robotics'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Connected Homes'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Health, Fitness &wearables'
        ]);
        // etc
    }
}

Class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'manufacturer' => 'Nokia',
            'product_name' => 'Nokia 8 Sirocco',
            'product_description' => '',
            'price' => 119900,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Google',
            'product_name' => 'Google Pixel 2 XL',
            'product_description' => '',
            'price' => 109900,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Google',
            'product_name' => 'Google Pixel 2',
            'product_description' => '',
            'price' => 89000,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'LG',
            'product_name' => 'LG G7 ThinkQ (Black)',
            'product_description' => '',
            'price' => 109900,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Apple',
            'product_name' => 'Apple iPhone X 64GB',
            'product_description' => '',
            'price' => 157900,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'HUAWEI',
            'product_name' => 'Huawei Mate 10',
            'product_description' => '',
            'price' => 79900,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'HP',
            'product_name' => 'HP 15BS143TU 15.6',
            'product_description' => '',
            'price' => 79900,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Lenovo',
            'product_name' => 'Lenovo Yoga 530 14" 2-in-1 Laptop',
            'product_description' => '',
            'price' => 129900,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Dell',
            'product_name' => 'Dell XPS 15 15.6',
            'product_description' => '',
            'price' => 299800,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Acer',
            'product_name' => 'Acer Switch 3 SW312-31-P2KA 12" Touchscreen',
            'product_description' => '',
            'price' => 69800,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Logitech',
            'product_name' => 'Logitech MK550 Wireless Keyboard and mouse combo',
            'product_description' => '',
            'price' => 9800,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'LG',
            'product_name' => 'LG UK6500 65" 4K UHD AI Smart LED TV',
            'product_description' => '',
            'price' => 219600,
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Hisense',
            'product_name' => 'Hisense P5 58" Series 5 4K UHD Smart LED TV',
            'product_description' => '',
            'price' => 99800,
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Philips',
            'product_name' => 'Philips PHT 4002 4000 Series 32" HD LED TV',
            'product_description' => '',
            'price' => 23800,
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'TCL',
            'product_name' => 'TCL P6US 65" 4K UHD android LED TV',
            'product_description' => '',
            'price' => 239600,
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Soniq',
            'product_name' => 'Soniq UV16B 55" 4K UHD SMART LED LCD TV',
            'product_description' => '',
            'price' => 59900,
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Samson',
            'product_name' => 'Samson Meteor USB Studio Microphone ',
            'product_description' => '',
            'price' => 8800,
            'category_id' => 4,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Stadium',
            'product_name' => 'Stadium Partymaker Brite Black',
            'product_description' => '',
            'price' => 9800,
            'category_id' => 4,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'CASIO',
            'product_name' => 'Casio CTK1550 Keyboard',
            'product_description' => '',
            'price' => 10900,
            'category_id' => 4,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Novation',
            'product_name' => 'Novation Launchpad Mini Music Creator',
            'product_description' => '',
            'price' => 11400,
            'category_id' => 4,
        ]);
         DB::table('products')->insert([
            'manufacturer' => 'GoPro',
            'product_name' => 'GoPro Hero5 Black Waterproof 4K Video',
            'product_description' => '',
            'price' => 42900,
            'category_id' => 5,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Nikon',
            'product_name' => 'Nikon D7500 DSLR Camera with 18-55mm Lens',
            'product_description' => '',
            'price' => 169900,
            'category_id' => 5,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Canon',
            'product_name' => 'Canon PowerShot G7X ll Compact Digital Camera',
            'product_description' => '',
            'price' => 79900,
            'category_id' => 5,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Olympus',
            'product_name' => 'Olympus OM-D E-M5 ll Camera with 14-150mm Lens',
            'product_description' => '',
            'price' => 139900,
            'category_id' => 5,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Canon',
            'product_name' => 'Canon EOS 7D ll DSLR Camera',
            'product_description' => '',
            'price' => 219900,
            'category_id' => 5,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Jabra',
            'product_name' => 'Jabra Elite 65T Wireless earbuds',
            'product_description' => '',
            'price' => 24900,
            'category_id' => 6,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Marley',
            'product_name' => 'Marley get Together Bluetooth Speaker',
            'product_description' => '',
            'price' => 27900,
            'category_id' => 6,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Bose',
            'product_name' => 'Bose SoundWear Companion',
            'product_description' => '',
            'price' => 49900,
            'category_id' => 6,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Sony',
            'product_name' => 'Sony HTS100F Soundbar with Bluetooth',
            'product_description' => '',
            'price' => 24900,
            'category_id' => 6,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Braven',
            'product_name' => 'Braven Flye Sport Reflect in-Ear Bluetooth',
            'product_description' => '',
            'price' => 14900,
            'category_id' => 6,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Hisense',
            'product_name' => 'Hisense HR6FDFF630S 630L French Door Fridge',
            'product_description' => '',
            'price' => 119900,
            'category_id' => 7,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Karcher',
            'product_name' => 'Karcher SC2 Steam Cleaner',
            'product_description' => '',
            'price' => 22500,
            'category_id' => 7,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Breville',
            'product_name' => 'Breville The Infuser Coffee Machine',
            'product_description' => '',
            'price' => 39900,
            'category_id' => 7,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'LG',
            'product_name' => 'LG GB-450UBLX 450L Bottom Mount Fridge',
            'product_description' => '',
            'price' => 109800,
            'category_id' => 7,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Samsung',
            'product_name' => 'Samsung WA11M8700GV 11kg top load washing machine',
            'product_description' => '',
            'price' => 99800,
            'category_id' => 7,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'RYZE',
            'product_name' => 'Ryze Tello Drone',
            'product_description' => '',
            'price' => 16900,
            'category_id' => 8,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Anki',
            'product_name' => 'Anki Cosmo',
            'product_description' => '',
            'price' => 26900,
            'category_id' => 8,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'DJI',
            'product_name' => 'DJI FPV Googles Racing Edition',
            'product_description' => '',
            'price' => 85900,
            'category_id' => 8,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'DJI',
            'product_name' => 'DJI Mavic Air 4K Drone',
            'product_description' => '',
            'price' => 129900,
            'category_id' => 8,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Sphero',
            'product_name' => 'Sphero SPRK+ Edition Power Pack',
            'product_description' => '',
            'price' => 299900,
            'category_id' => 8,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Uniden',
            'product_name' => 'Uniden Guardian GDVR8T80 Full HD DVR',
            'product_description' => '',
            'price' => 99900,
            'category_id' => 9,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Google',
            'product_name' => 'Google Home',
            'product_description' => '',
            'price' => 13900,
            'category_id' => 9,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Netgear',
            'product_name' => 'Netgear Arlo Pro 2 Wire-Free HD Camera 2',
            'product_description' => '',
            'price' => 69900,
            'category_id' => 9,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Ring',
            'product_name' => 'Ring Video Doorbell 2',
            'product_description' => '',
            'price' => 32900,
            'category_id' => 9,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Nest',
            'product_name' => 'Nest Protect',
            'product_description' => '',
            'price' => 18900,
            'category_id' => 9,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Fitbit',
            'product_name' => 'Fitbit Alta HR Activity Tracker',
            'product_description' => '',
            'price' => 24900,
            'category_id' => 10,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Garmin',
            'product_name' => 'Garmin Vivomove HR Hybrid Watch',
            'product_description' => '',
            'price' => 29900,
            'category_id' => 10,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Samsung',
            'product_name' => 'Samsung Gear S3 Frontier Smartwatch',
            'product_description' => '',
            'price' => 39800,
            'category_id' => 10,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Nixon',
            'product_name' => 'Nixon Mission Android Wear Smart Watch',
            'product_description' => '',
            'price' => 00,
            'category_id' => 10,
        ]);
        DB::table('products')->insert([
            'manufacturer' => 'Garmin',
            'product_name' => 'Garmin Vivoactive 3 Sport Watch',
            'product_description' => '',
            'price' => 44900,
            'category_id' => 10,
        ]); 
    }
}

Class ReviewSeeder extends Seeder
{
    public function run()
    {
        factory(App\Review::class, 50)->create();    
    }
    
}