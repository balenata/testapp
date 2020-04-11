<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Episode;
use App\RaitingEpisode;
use App\User;
use Faker\Generator as Faker;

$factory->define(RaitingEpisode::class, function (Faker $faker) {
    return [
        'raiting'=>$faker->numberBetween(0,10),
        'user_id'=>User::all()->random()->id,
        'episode_id'=>Episode::all()->random()->id,
    ];
});
