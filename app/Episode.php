<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = [
        'name',
        'season_id',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class,'like_episodes','user_id','episode_id');
    }
    
    public function commentEpisodes()
    {
        return $this->hasMany(CommentEpisode::class);
    }

    public function RaitingEpisodes()
    {
        return $this->hasMany(RaitingEpisode::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
