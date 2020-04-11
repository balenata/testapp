<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JenreType;
use Faker\Generator as Faker;

$factory->define(JenreType::class, function (Faker $faker) {
    return [
        'type' => $faker->name,
    ];
});
