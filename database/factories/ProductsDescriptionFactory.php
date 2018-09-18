<?php

use Faker\Generator as Faker;


$factory->define(App\ProductDescription::class, function (Faker $faker) {
    static $number = 0;
    return [
        'id_product_reference' => $number++,
        'description' => $faker->sentence(30),
        'title' => 'Lorem Ipsum Dolor Sit Amet..',
        'picture' => 'default.jpg'
    ];
});
