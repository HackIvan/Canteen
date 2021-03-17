<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Special;
use Faker\Generator as Faker;

$factory->define(Special::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->sentence(2),
        'description' => $faker->sentence(20),
        'price' => $faker->numberBetween(1000, 20000000),
    ];
});
