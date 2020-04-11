<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeEpisode extends Model
{
    protected $fillable = [
      
        'episode_id',
        'user_id',
    ];
}
