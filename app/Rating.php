<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    // protected $table = 'ratings';

    public function movies(){
        return $this->hasMany(Rating::class);
    }
}
