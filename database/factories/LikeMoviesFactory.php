<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LikeMovies;
use App\Movie;
use App\User;
use Faker\Generator as Faker;

$factory->define(LikeMovies::class, function (Faker $faker) {
    return [
        'user_id'=>User::all()->random()->id,
        'movie_id'=>Movie::all()->random()->id,
    ];
});
