<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
	return [
		'category_name' => $faker->unique()->word()
	];
});

$factory->define(App\Product::class, function (Faker $faker) {
	return [
		'manufacturer' => $faker->company,
		'product_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'product_description' => $faker->text($maxNbChars = 1200),
		'price' => $faker->randomNumber(4)
	];
});

$factory->define(App\Image::class, function (Faker $faker) {
	return [
		'url' => $faker->imageUrl($width = 640, $height = 480)
	];
});

$factory->define(App\Review::class, function(Faker $faker) {
	return [
		'user_id' => function() {
			return App\User::InRandomOrder()->first()->id;
		},
		'product_id' => function() {
			return App\Product::InRandomOrder()->first()->id;
		},
		'rating' => rand(1,5),
		'review' => $faker->paragraph($nbSentences = rand(3,10), $variableNbSentences = true)
	];
});	