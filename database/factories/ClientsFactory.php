<?php

use Faker\Generator as Faker;

require_once __DIR__ . '/../faker_data/document_number.php';

$factory->define(\App\Models\Clients::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'defaulter' => rand(0, 1)
    ];
});

$factory->state(\App\Models\Clients::class, \App\Models\Clients::TYPE_INDIVIDUAL, function (Faker $faker) {
    $cpfs = cpfs();
    return [
        'document_number' => $cpfs[array_rand($cpfs, 1)],
        'date_birth' => $faker->date(),
        'sex' => rand(1, 10) % 2 == 0 ? 'm' : 'f',
        'marital_status' => rand(1, 3),
        'physical_disability' => rand(1, 10) % 2 == 0 ? $faker->word : null,
        'client_type' => \App\Models\Clients::TYPE_INDIVIDUAL
    ];
});

$factory->state(\App\Models\Clients::class, \App\Models\Clients::TYPE_LEGAL, function (Faker $faker) {
    $cnpj = cnpjs();
    return [
        'document_number' => $cnpj[array_rand($cnpj, 1)],
        'company_name' => $faker->company,
        'client_type' => \App\Models\Clients::TYPE_LEGAL
    ];
});

$factory->define(\App\Models\ClientProfile::class, function (Faker $faker) {
    return [
        'field' => $faker->name,
    ];
});
