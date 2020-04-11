<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected  $fillable = [
        'name',
    ];
    
    public function jenreTypes()
    {
        return $this->belongsToMany(JenreType::class);
    }
    
    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
}
