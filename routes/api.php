<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// User

Route::resource('users','UserController',['except'=>['create','edit']]);

// Movie
Route::resource('movies','MovieController',['except'=>['create','edit']]);

// Series
Route::resource('series','SeriesController',['except'=>['create','edit']]);

// Season
Route::resource('users','SeasonController',['except'=>['create','edit']]);

// Episode
Route::resource('episodes','EpisodeController',['except'=>['create','edit']]);

// CommentEpisode
Route::resource('commentEpisodes','CommentEpisodeController',['except'=>['create','edit']]);

// CommentMovie
Route::resource('commentmovies','CommentMoviesController',['except'=>['create','edit']]);

// JenreType
Route::resource('jenretypes','JenreTypeController',['except'=>['create','edit']]);

// RaititngEpisode
Route::resource('raitingepisodes','RaitingEpisodeController',['except'=>['create','edit']]);

// RaitingMovie
Route::resource('raitingmovies','RaitingMoviesController',['except'=>['create','edit']]);


