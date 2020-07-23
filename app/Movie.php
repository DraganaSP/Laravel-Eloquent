<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function actors(){
        return $this->belongsToMany(Actor::class, 'movies_actors');
    }

    public function directors(){
        return $this->belongsToMany(Director::class, 'movies_directors');
    }

    public function genres(){
        return $this->belongsToMany(Genre::class, 'movies_genres');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function rating(){
        return $this->belongsTo(Rating::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
