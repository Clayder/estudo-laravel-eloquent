<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        // Todos os times vão ter nome de rua
        'name' => $faker->streetName,
    ];
});
