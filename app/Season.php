<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'published_year',
        'series_id',
    ];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }


}
