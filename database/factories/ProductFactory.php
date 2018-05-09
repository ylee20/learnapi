<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word ,
        'detail' => $faker->paragraph ,
        'price' => $faker->numberBetween(100,3000) ,
        'stock' => $faker->randomDigit ,
        'discount' => $faker->numberBetween(1,20) 
    ];
});
