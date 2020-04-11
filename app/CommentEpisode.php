<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentEpisode extends Model
{
    protected $fillable = [
        'comment_text',
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
