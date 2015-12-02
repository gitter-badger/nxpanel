<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Profile::class, function (Faker\Generator $faker) {

    return [
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->randomLetter . $faker->randomLetter,
        'h_phone' => $faker->phoneNumber,
        'm_phone' => $faker->phoneNumber,
        'f_phone' => $faker->phoneNumber,
        'age' => $faker->numberBetween(5,80),
        'gender' => $faker->randomElement(['M', 'F'])
    ];
});