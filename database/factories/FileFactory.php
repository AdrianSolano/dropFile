<?php

use Faker\Generator as Faker;
use App\Files;

$factory->define(Files::class, function (Faker $faker) {
    return [
        'name'            => $faker->words(1,5),
        'uuid'            => $faker->uuid(),
        'user_id'         => random_int(1,2),
        'descripcion'     => $faker->text(100)
    ];
});
