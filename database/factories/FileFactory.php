<?php

use Faker\Generator as Faker;
use App\Files;
/* Factory de los archivos */
$factory->define(Files::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name'            => $name,
        'slug'            => str_slug($name, "-"),
        'user_id'         => random_int(1, 2),
        'descripcion'     => $faker->text(100)
    ];
});
