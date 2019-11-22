<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\todo;
use Faker\Generator as Faker;

$factory->define(todo::class, function (Faker $faker) {
    return [
        "user_id" => factory(\App\User::class),
        "aufgabe" => $faker->word,
        "beschreibung" => $faker->sentence,
        "abgabetermin" => $faker->dateTime
    ];
});
