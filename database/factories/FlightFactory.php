<?php

use Faker\Generator as Faker;



$factory->define(App\Flight::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'airline' => "AIR ".$faker->name
    ];
});
