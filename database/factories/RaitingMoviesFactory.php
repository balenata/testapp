<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use App\RaitingMovies;
use App\User;
use Faker\Generator as Faker;

$factory->define(RaitingMovies::class, function (Faker $faker) {
    return [
        'raiting'=>$faker->numberBetween(0,10),
        'user_id'=>User::all()->random()->id,
        'movie_id'=>Movie::all()->random()->id,
    ];
});
