<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'            => $faker->words(1,5),
        'user_id'         => random_int(1,2),
        'description'     => $faker->text(100)
    ];
});
