<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaitingEpisode extends Model
{
    protected $fillable = [
        'raiting',
        'episode_id',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
}
