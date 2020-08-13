<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        "first_name" => $faker->firstName,
        "last_name" => $faker->lastName,
        "email" => $faker->email,
        "address_1" => $faker->buildingNumber,
        "address_2" => $faker->streetName, 
        "town" => $faker->city, 
        "postcode" => $faker->postcode,
        "telephone" => $faker->e164PhoneNumber,
    ];
});
