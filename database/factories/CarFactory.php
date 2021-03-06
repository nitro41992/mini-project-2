<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\Fakecar($faker));

    return [
        'make' => $faker->randomElement(['ford', 'honda', 'toyota']),
        'model' => $faker->vehicleModel,
        'year' => $faker->numberBetween($min = 1990, $max = 2019)
    ];
});
