<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Usuario;

$factory->define(Usuario::class, function (Faker $faker) {
    $arrayValues = ['usuario', 'administrador'];
    return [
        'nickname' => $faker->word,
        'password' => $faker->password,
        'nombre' => $faker->name(),
        'apellidoPaterno' => $faker->lastName,
        'apellidoMaterno' => $faker->lastName,
        'rol' => $arrayValues[rand(0,1)]
    ];
});
