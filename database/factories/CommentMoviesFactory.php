<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CommentMovies;
use App\Movie;
use App\User;
use Faker\Generator as Faker;

$factory->define(CommentMovies::class, function (Faker $faker) {
    return [
        'comment_text'=>$faker->paragraph(1),
        'user_id'=>User::all()->random()->id,
        'movie_id'=>Movie::all()->random()->id,
    ];
});
