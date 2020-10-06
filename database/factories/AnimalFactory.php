<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Animal;
use Faker\Generator as Faker;

$factory->define(Animal::class, function (Faker $faker) {
    return [
        "name" => $faker->firstName,
        "type" => $faker->animal,
        "dob" => $faker->date,
        "weight" => $faker->number,
        "height" => $faker->number, 
        "biteyness" => $faker->number, 
    ];
});
