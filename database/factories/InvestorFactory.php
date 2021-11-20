<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Investor;
use Faker\Generator as Faker;

$factory->define(Investor::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name(),
        'address' => $faker->address,
        'phone' => $faker->randomNumber(),
        'investment' => $faker->word()
    ];
});
