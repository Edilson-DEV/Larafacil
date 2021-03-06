<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        //
        'nombre'=>$faker->text,
        'estado'=>$faker->randomelement([1,0])
    ];
});
