<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Episode;
use App\LikeEpisode;
use App\User;
use Faker\Generator as Faker;

$factory->define(LikeEpisode::class, function (Faker $faker) {
    return [
        'user_id'=>User::all()->random()->id,
        'episode_id'=>Episode::all()->random()->id,
    ];
});
