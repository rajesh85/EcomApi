<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),
        'body' => $faker->paragraph(2)
    ];
});
