<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\archive;
use Faker\Generator as Faker;

$factory->define(archive::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'year' => $faker->year(),
        'position' => $faker->text(),
        'twitter' => $faker->url,
        'linkedin' => $faker->url,
        'phone' => $faker->phoneNumber,
        'avatar' => $faker->imageUrl(),
    ];
});
