<?php

use App\Product;
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
        'email_verified_at' => now(),
        'image' => $faker->imageUrl($width=50, $height=50, 'technics'),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'brand' => $faker->company,
        'body' => $faker->realText($maxNbChars = 500, $indexSize = 2),
        'image' => $faker->imageUrl($width=200, $height=200, 'technics'),
        'price' => $faker->numberBetween($min = 1000, $max = 100000),
        'discount' => $faker->numberBetween($min = 0, $max = 100),
        'user_id' => $faker->numberBetween($min = 51, $max = 53),
        'status' => $faker->boolean,
        'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null)
    ];
});
