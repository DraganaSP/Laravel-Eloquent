<?php

use Illuminate\Database\Seeder;
use App\Rating as Rating; 

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratings = ['G', 'PG', 'PG-13', 'R'];

        foreach($ratings as $r){
            $rating = new Rating;
            $rating->rating = $r;
            $rating->save();
        }
    }
}
