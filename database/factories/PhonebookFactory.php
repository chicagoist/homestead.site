<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phonebook;
use Faker\Generator as Faker;

$factory->define(Phonebook::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->email,
        'phone' => $faker->e164PhoneNumber,
        'created_at' => $faker->DateTime(),
        'updated_at' => $faker->DateTime()
    ];
});
