<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    const ADMIN_USER = 'true';
    const REGULAR_USER = 'false';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',  'password', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->admin == User::ADMIN_USER;
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    public function episodes()
    {
        return $this->belongsToMany(Episode::class,'like_episodes','user_id','episode_id');
    }


    public function commentMovies()
    {
        return $this->hasMany(CommentMovies::class);
    }

    public function commentEpisodes()
    {
        return $this->hasMany(CommentEpisode::class);
    }

    public function RaitingMovies()
    {
        return $this->hasMany(RaitingMovies::class);
    }

    public function RaitingEpisodes()
    {
        return $this->hasMany(RaitingEpisode::class);
    }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
