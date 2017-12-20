<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\SoccerTeam::class, function (Faker $faker) {
    return [
        // Todos os times vão ter nome de rua
        'name' => $faker->streetName,
    ];
});
