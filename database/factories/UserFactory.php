<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Mehnat\User\Entities\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'password' => bcrypt(123456),
        'remember_token' => Str::random(10),
        'fullname' => $faker->firstName . ' ' . $faker->lastName,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'phone' => $faker->phoneNumber,
        'gender' => $faker->numberBetween($min = 1, $max = 2)
    ];
});

