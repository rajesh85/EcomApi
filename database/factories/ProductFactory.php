<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->text(100),
        'description' => $faker->paragraph(3),
        'price' => $faker->randomFloat(2, 10, 100),
        'stock' => $faker->numberBetween(20, 100),
    ];
});
