<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Season;
use App\Series;
use Faker\Generator as Faker;

$factory->define(Season::class, function (Faker $faker) {
    return [
        'published_year'=>$faker->dateTime(),
        'series_id'=>Series::all()->random()->id,
    ];
});
