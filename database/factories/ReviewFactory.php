<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'product_id' => function(){
        	return Product::all()->random();
        } ,
        'customer' => $faker->name ,
        'review' => $faker->paragraph ,
        'star' => $faker->numberBetween(100,3000) ,
        
    ];
});
