<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Review::class, function (Faker $faker) {
    return [
        'product_id' => function(){
            factory(App\Models\Product::class)->create()->id;
        },
        'customer' => $faker->name,
        'review' => $faker->paragraph(3),
        'star_rating' => $faker->numberBetween(1, 5)
    ];
});
