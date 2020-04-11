<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenreTypeOfMoviesAndSeries extends Model
{
    protected $fillable = [
       
        'movie_id',
        'series_id',
    ];
}
