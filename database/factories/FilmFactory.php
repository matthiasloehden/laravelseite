<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\film;
use Faker\Generator as Faker;

$factory->define(film::class, function (Faker $faker) {
    return [
        'titel' => $faker->name,
        "beschreibung" => $faker->paragraph,
        "user_id" => factory(\App\User::class),
    ];
});
