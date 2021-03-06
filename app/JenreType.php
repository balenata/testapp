<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenreType extends Model
{
    protected $fillable = [
        'type',
        
    ];
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
    public function series()
    {
        return $this->belongsToMany(Series::class);
    }
}
