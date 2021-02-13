<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClientesCategorias;
use Faker\Generator as Faker;

$factory->define(ClientesCategorias::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->email,
        'categoria' => $faker->creditCardType
    ];
});
