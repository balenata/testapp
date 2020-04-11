<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'duration',
        'actor',
        'published_year',
        'about',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function jenreTypes()
    {
        return $this->belongsToMany(JenreType::class);
    }

    public function commentMovies()
    {
        return $this->hasMany(CommentMovies::class);
    }
    public function RaitingMovies()
    {
        return $this->hasMany(RaitingMovies::class);
    }

}
