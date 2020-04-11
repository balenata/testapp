<?php

use App\CommentEpisode;
use App\CommentMovies;
use App\Episode;
use App\JenreType;
use App\JenreTypeOfMoviesAndSeries;
use App\LikeEpisode;
use App\LikeMovies;
use App\Movie;
use App\RaitingEpisode;
use App\RaitingMovies;
use App\Season;
use App\Series;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        factory(JenreType::class, 50)->create();
        factory(Movie::class, 30)->create();
        factory(Series::class, 5)->create();
        factory(Season::class, 10)->create();
        factory(Episode::class, 30)->create();
        factory(RaitingMovies::class, 30)->create();
        factory(RaitingEpisode::class, 30)->create();
        factory(CommentMovies::class, 30)->create();
        factory(CommentEpisode::class, 30)->create();
        factory(LikeMovies::class, 30)->create();
        factory(LikeEpisode::class, 30)->create();
        factory(JenreTypeOfMoviesAndSeries::class, 30)->create();
    }
}
