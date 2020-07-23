<?php

use Illuminate\Database\Seeder;
use App\Genre as Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ['drama', 'comedy', 'horror', 'thriller', 'sci-fi'];

        foreach($arr as $g){
            $genre = new Genre;
            $genre->name = $g;
            $genre->save();
        }
    }
}
