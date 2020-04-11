<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JenreType;
use App\JenreTypeOfMoviesAndSeries;
use App\Movie;
use App\Series;
use Faker\Generator as Faker;

$factory->define(JenreTypeOfMoviesAndSeries::class, function (Faker $faker) {
    return [
        'series_id'=>Series::all()->random()->id,
        'movie_id'=>Movie::all()->random()->id,
        'jenretype_id'=>JenreType::all()->random()->id,
    ];
});
