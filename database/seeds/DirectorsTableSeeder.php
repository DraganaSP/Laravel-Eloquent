<?php

use Illuminate\Database\Seeder;
use App\Director as Director;
use Faker\Factory as Faker;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index){
            $director = new Director;
            $director->name = $faker->name;
            $director->save();
        }
    }
}
