<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie as Movie;
use App\Actor as Actor;
use App\Director as Director;
use App\Genre as Genre;
use App\Image as Image;
use App\Rating as Rating;
use App\Type as Type;

class MovieController extends Controller
{
    public function form(){
        // $ratings = Rating::all();
        // $types = Type::all();
        // $genres = Genre::all();
        // $actors = Actor::all();
        // $directors = Director::all();

        $arr = [
            'ratings' => Rating::all(),
            'types' => Type::all(),
            'genres' => Genre::all(), 
            'actors' => Actor::all(), 
            'directors' => Director::all()
        ];

        return view('form', $arr);
    }

    public function store(Request $request){
        $data = $request->all();

        $movie = new Movie;
        $movie->title = $data['title'];
        $movie->start = $data['start'];
        $movie->length = $data['length'];
        $movie->country = $data['country'];
        $movie->year = $data['year'];
        $movie->description = $data['description'];
        $movie->end = $data['end'];
        $movie->rating_id = $data['rating'];
        $movie->type_id = $data['type'];

        $movie->save();

        $movie->genres()->attach($data['genres']);

        $movie->actors()->attach($data['actors']);

        $movie->directors()->attach($data['directors']);

        $img1 = new Image;
        $img1->url = $data['image1'];
        $img2 = new Image;
        $img2->url = $data['image2'];
        $images = [$img1, $img2];

        $movie->images()->saveMany($images);

        return $this->show();
    }

    public function show(){
        $movies = Movie::with('rating', 'type', 'actors', 'directors', 'genres')->get();
        
        return view('table', compact('movies'));
    }
}
