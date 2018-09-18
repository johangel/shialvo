<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['TV', 'radio', 'phones', 'skate','microwave', 'book', 'clothes']),
        'price' => $faker->numberBetween($min = 20, $max = 300),
    ];
});
