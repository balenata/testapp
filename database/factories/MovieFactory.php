<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
        'duration' => '2:30h',
        'actor'=>$faker->name,
        'published_year'=>$faker->dateTime(),
        'about'=>$faker->paragraph(1),
    ];
});
