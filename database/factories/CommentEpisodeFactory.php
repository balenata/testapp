<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CommentEpisode;
use App\Episode;
use App\User;
use Faker\Generator as Faker;

$factory->define(CommentEpisode::class, function (Faker $faker) {
    return [
        'comment_text'=>$faker->paragraph(1),
        'user_id'=>User::all()->random()->id,
        'episode_id'=>Episode::all()->random()->id,
    ];
});
